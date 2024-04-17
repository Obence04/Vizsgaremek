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
                LblTanar.Text = "Nincs tanár az adatbázisban, aki nem osztályfőnök.";
                LblTanar.Visible = true;
            }
        }

        private void TanarFeltolt()
        {
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT tanar_id, tanar_nev FROM tanarok WHERE NOT EXISTS (SELECT osztalyok.tanar_id from osztalyok)");
            while (Ab.Dr.Read())
            {
                tanarok.Add((int.Parse(Ab.Dr[0].ToString()), Ab.Dr[1].ToString()));
            }
            CBBOsztFonok.Items.AddRange([.. tanarok.Select(x => x.nev)]);
        }
    }
}
