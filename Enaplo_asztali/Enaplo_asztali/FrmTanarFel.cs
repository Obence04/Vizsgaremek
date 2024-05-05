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
    public partial class FrmTanarFel : Form
    {
        List<(string nev, string email, string uname)> tanar = new();
        public FrmTanarFel()
        {
            InitializeComponent();
            this.Load += OnLoad;
            BtnMentes.Click += AdatMentes;
            BtnElvet.Click += Elvet;
        }
        private void OnLoad(object sender, EventArgs e)
        {
            TanarokFeltoltes();
        }
        private void TanarokFeltoltes()
        {
            tanar.Clear();
            Adatbazis Ab = new();
            Ab.Lekerdezes("SELECT tanarok.tanar_nev, felhasznalok.fel_email, felhasznalok.fel_nev FROM tanarok INNER JOIN felhasznalok ON tanarok.fel_id = felhasznalok.fel_id");
            while (Ab.Dr.Read())
            {
                tanar.Add((Ab.Dr[0].ToString(), Ab.Dr[1].ToString(), Ab.Dr[2].ToString()));
            }
        }
        private void AdatMentes(object sender, EventArgs e)
        {
            LblHiba.Visible = false;
            if (tanar.Where(x => x.email.Contains(TxtEmail.Text)).Count() > 0 && !string.IsNullOrWhiteSpace(TxtEmail.Text))
            {
                LblHiba.Text = "Ilyen email már létezik!";
                LblHiba.Visible = true;
                TxtEmail.ResetText();
                TxtEmail.Focus();
            }
            else if (tanar.Where(x => x.uname.Contains(TxtFelNev.Text)).Count() > 0 && !string.IsNullOrWhiteSpace(TxtFelNev.Text))
            {
                LblHiba.Text = "Ilyen felhasználónév már létezik!";
                LblHiba.Visible = true;
                TxtFelNev.ResetText();
                TxtFelNev.Focus();
            }
            else if (string.IsNullOrWhiteSpace(TxtEmail.Text) || string.IsNullOrWhiteSpace(TxtFelNev.Text) || string.IsNullOrWhiteSpace(TxtTanarNev.Text))
            {
                LblHiba.Text = "Egy mező üresen maradt!";
                LblHiba.Visible = true;
            }
            else
            {
                Adatbazis Ab = new Adatbazis();
                Ab.Hozzaadas($"INSERT INTO felhasznalok VALUES(null, '{TxtFelNev.Text}', '{BCrypt.Net.BCrypt.HashPassword($"RKT-{TxtFelNev.Text}-123", 12)}', '{TxtEmail.Text}', null, 2, 1)");
                Ab.Lekerdezes($"SELECT fel_id FROM felhasznalok WHERE fel_nev ='{TxtFelNev.Text}';");
                Ab.Dr.Read();
                int felid = int.Parse(Ab.Dr[0].ToString());
                Ab.Dr.Close();
                Ab.Hozzaadas($"INSERT INTO tanarok VALUES(null, '{TxtTanarNev.Text}', '{felid}')");
                foreach (TextBox txt in Controls.OfType<TextBox>())
                {
                    txt.Text = "";
                }
                MessageBox.Show("Sikeres hozzáadás!", "Siker", MessageBoxButtons.OK, MessageBoxIcon.Information);
                TanarokFeltoltes();
            }
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
