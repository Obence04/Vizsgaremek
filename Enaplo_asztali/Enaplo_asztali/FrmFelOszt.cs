using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Enaplo_asztali
{
    public partial class FrmFelOszt : Form
    {
        List<(int id, string nev)> tanarok = new List<(int id, string nev)>();
        public FrmFelOszt()
        {
            InitializeComponent();
        }
        //NINCS KÉSZ
        private void OnLoad( object sender, EventArgs e)
        {
            LblTanar.Visible = false;
            TanarFeltolt();
            if (tanarok.Count == 0)
            {
                foreach (Control item in this.Controls)
                {
                    if (item.Name != "BtnElvet" && item is not Label) item.Enabled = false;
                }
                LblTanar.Text = "Nincs tanár az adatbázisban, aki még nem osztályfőnök.";
                LblTanar.Visible = true;
            }
        }
        private void AdatMentes(object sender, EventArgs e)
        {
            Adatbazis Ab = new Adatbazis();
            string[] adatok = { TxtOsztNev.Text, tanarok.Find(x => x.nev == CBBOsztFonok.Text).id.ToString() };
            Ab.Hozzaadas($"INSERT INTO osztalyok VALUES (null, '{adatok[0]}', '{adatok[1]}')");
            MessageBox.Show("Sikeres hozzáadás!", "Siker", MessageBoxButtons.OK, MessageBoxIcon.Information);
            foreach (TextBox txt in Controls.OfType<TextBox>())
            {
                txt.Text = "";
            }
            CBBOsztFonok.ResetText();
            TanarFeltolt();
        }
        private void Elvet(object sender, EventArgs e)
        {
            if (MessageBox.Show("Biztosan elveti?", "Elveti?", MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.No)
            {
                return;
            }
            foreach (TextBox txt in Controls.OfType<TextBox>())
            {
                txt.Text = "";
            }
            Close();
        }

        private void TanarFeltolt()
        {
            tanarok.Clear();
            CBBOsztFonok.Items.Clear();
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT tanar_id, tanar_nev FROM tanarok WHERE tanar_id NOT IN (SELECT tanar_id FROM osztalyok)");
            while (Ab.Dr.Read())
            {
                tanarok.Add((int.Parse(Ab.Dr[0].ToString()), Ab.Dr[1].ToString()));
            }
            CBBOsztFonok.Items.AddRange([.. tanarok.Select(x => x.nev)]);
        }
    }
}
