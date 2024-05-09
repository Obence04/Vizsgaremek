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
    public partial class FrmRendTantTan : Form
    {
        List<(int id, string nev)> tantargyak = new();
        List<(int id, string nev)> tanarok = new();
        List<(int id, int tanarid, int tantid)> tanitottak = new();
        public FrmRendTantTan()
        {
            InitializeComponent();
            this.Load += OnLoad;
            BtnElvet.Click += Elvet;
            BtnAdatMentes.Click += AdatMentes;
            CbbxTanarok.SelectedIndexChanged += IndexValt;
        }
        private void OnLoad(object sender, EventArgs e)
        {
            LblHiba.Visible = false;
            TanarFeltolt();
            TantargyFeltolt(CbbxTanarok.Text);

            if (tantargyak.Count == 0)
            {
                foreach (Control item in this.Controls)
                {
                    if (item.Name != "BtnElvet" && item is not Label) item.Enabled = false;
                }
                LblHiba.Text = "Nincs tantárgy";
                LblHiba.Visible = true;
                return;
            }

            if (tanarok.Count == 0)
            {
                foreach (Control item in this.Controls)
                {
                    if (item.Name != "BtnElvet" && item is not Label) item.Enabled = false;
                }
                LblHiba.Text = "Nincs tanár";
                LblHiba.Visible = true;
                return;
            }
            

            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT * FROM tanitott");
            while(Ab.Dr.Read())
            {
                tanitottak.Add((int.Parse(Ab.Dr[0].ToString()), int.Parse(Ab.Dr[1].ToString()), int.Parse(Ab.Dr[2].ToString())));
            }
            CbbxTanarok.SelectedIndex = 0;
            CbbxTant.SelectedIndex = 0;
        }
        private void IndexValt(object sender, EventArgs e)
        {
            TantargyFeltolt(CbbxTanarok.Text);
        }
        private void TanarFeltolt()
        {
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT tanar_id, tanar_nev FROM tanarok");
            while (Ab.Dr.Read())
            {
                tanarok.Add((int.Parse(Ab.Dr[0].ToString()), Ab.Dr[1].ToString()));
            }
            CbbxTanarok.Items.AddRange([.. tanarok.Select(x => x.nev)]);
        }
        private void TantargyFeltolt(string nev)
        {
            CbbxTant.Items.Clear();
            tantargyak.Clear();
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes($"SELECT tantargyak.* FROM tantargyak");
            while (Ab.Dr.Read())
            { 
                tantargyak.Add((int.Parse(Ab.Dr[0].ToString()), Ab.Dr[1].ToString()));
            }
            CbbxTant.Items.AddRange([.. tantargyak.Select(x => x.nev)]);
        }
        private void AdatMentes(object sender, EventArgs e)
        {
            if (string.IsNullOrWhiteSpace(CbbxTanarok.Text) || string.IsNullOrWhiteSpace(CbbxTant.Text))
            {
                LblHiba.Text = "Egy mező üresen maradt!";
                LblHiba.Visible = true;
                return;
            }
            int tanarid = tanarok.Find(x => x.nev == CbbxTanarok.Text).id;
            int tantid = tantargyak.Find(x => x.nev == CbbxTant.Text).id;
            if (tanitottak.Count(x => (x.tanarid == tanarid && x.tantid == tantid)) > 0)
            {
                LblHiba.Text = "Ilyen tanár-tantárgy kombináció már létezik!";
                LblHiba.Visible = true;
                return;
            }
            Adatbazis Ab = new();
            Ab.Hozzaadas($"INSERT INTO tanitott VALUES (null, '{tanarid}', '{tantid}')");
            MessageBox.Show("Sikeres hozzáadás!", "Siker", MessageBoxButtons.OK, MessageBoxIcon.Information);
            TanarFeltolt();
            TantargyFeltolt(CbbxTanarok.Text);
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
    }
}
