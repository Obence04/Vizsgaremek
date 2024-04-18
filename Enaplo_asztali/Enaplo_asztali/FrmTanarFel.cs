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
            Ab.Lekerdezes("SELECT * FROM tanarok");
            while (Ab.Dr.Read())
            {
                tanar.Add((Ab.Dr[0].ToString(), Ab.Dr[1].ToString(), Ab.Dr[2].ToString()));
            }
        }
        private void AdatMentes(object sender, EventArgs e)
        {
            if (tanar.Where(x => x.email.Contains(TxtEmail.Text)).Count() > 1)
            {
                MessageBox.Show("Ilyen email cím már létezik!", "Hiba", MessageBoxButtons.OK, MessageBoxIcon.Error);
                foreach (TextBox txt in Controls.OfType<TextBox>())
                {
                    txt.Text = "";
                }
            } else if (tanar.Where(x => x.uname.Contains(TxtFelNev.Text)).Count() > 1)
            {
                MessageBox.Show("Ilyen felhasználónév már létezik!", "Hiba", MessageBoxButtons.OK, MessageBoxIcon.Error);
                foreach (TextBox txt in Controls.OfType<TextBox>())
                {
                    txt.Text = "";
                }
            }
            else
            {
                Adatbazis Ab = new();
                Ab.Hozzaadas($"INSERT INTO felhasznalok VALUES(null, '{TxtFelNev.Text}', '{BCrypt.Net.BCrypt.HashPassword($"RKT-{TxtFelNev.Text}-123")}', '{TxtEmail.Text}', null, 2, 1)");
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
