using BCrypt.Net;
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
    public partial class FrmFelDiak : Form
    {
        List<(int id, string nev)> osztalyok = new List<(int id, string nev)>();
        List<(int fel_id, string fel_nev)> diakfelhasznalok = new List<(int fel_id, string fel_nev)>();
        public FrmFelDiak()
        {
            InitializeComponent();
            this.Load += OnLoad;
            BtnMentes.Click += AdatMentes;
            BtnElvet.Click += Elvet;
            TxtOktazon.KeyPress += CsakSzam;
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
            DateTPSzuldatum.Value = DateTime.Now;
            Close();
        }

        private void AdatMentes(object sender, EventArgs e)
        {
            bool hiba = false;
            foreach (TextBox txt in Controls.OfType<TextBox>())
            {
                if (string.IsNullOrWhiteSpace(txt.Text) == true)
                {
                    hiba = true;
                }
            }
            if (string.IsNullOrWhiteSpace(CBBOsztaly.Text))
            {
                hiba = true;
            }
            LblHiba.Visible = false;
            Adatbazis Ab = new Adatbazis();
            List<string> emailcimek = new List<string>();
            Ab.Lekerdezes("SELECT fel_email FROM felhasznalok WHERE jog_id = 1");
            while (Ab.Dr.Read())
            {
                emailcimek.Add(Ab.Dr[0].ToString());
            }
            Ab.Lezaras();
            Adatbazis okt = new Adatbazis();
            List<string> oktazon = new List<string>();
            okt.Lekerdezes("SELECT diakok.diak_id FROM diakok");
            while (okt.Dr.Read())
            {
                oktazon.Add(okt.Dr[0].ToString());
            }
            if (oktazon.Contains(TxtOktazon.Text))
            {
                LblHiba.Text = "Ilyen oktatási azonosító már létezik!";
                LblHiba.Visible = true;
                TxtOktazon.ResetText();
                TxtOktazon.Focus();
                return;
            }
            if (emailcimek.Contains(TxtEmail.Text))
            {
                LblHiba.Text = "Ilyen email cím már létezik!";
                LblHiba.Visible = true;
                TxtEmail.ResetText();
                TxtEmail.Focus();
                return;
            }
            if (hiba)
            {
                LblHiba.Text = "Hibás adatbevitel, üres az egyik mező!";
                LblHiba.Visible = true;
                return;
            }
            Adatbazis adatbazis = new Adatbazis();
            string[] adatok = { TxtOktazon.Text, TxtNev.Text, DateTPSzuldatum.Value.ToString("yyyy-MM-dd"), TxtSzulhely.Text, TxtAnyja.Text, osztalyok.Find(x => x.nev == CBBOsztaly.Text).id.ToString(), TxtEmail.Text };
            adatbazis.Hozzaadas($"INSERT INTO felhasznalok VALUES (null, '{adatok[0]}', '{BCrypt.Net.BCrypt.HashPassword($"RKT-{adatok[2]}-123", 12)}', '{adatok[6]}', null, '1', '1')");
            DiakFeltolt();
            adatbazis.Hozzaadas($"INSERT INTO diakok VALUES ('{adatok[0]}', '{adatok[1]}', '{adatok[2]}', '{adatok[3]}', '{adatok[4]}', null, '{adatok[5]}', '{diakfelhasznalok.Find(x => x.fel_nev == adatok[0]).fel_id}' )");
            foreach (TextBox txt in Controls.OfType<TextBox>())
            {
                txt.Text = "";
            }
            DateTPSzuldatum.Value = DateTime.Now;
            MessageBox.Show("Sikeres hozzáadás!", "Siker", MessageBoxButtons.OK, MessageBoxIcon.Information);
            OsztalyFeltolt();
        }

        private void OsztalyFeltolt()
        {
            osztalyok.Clear();
            CBBOsztaly.Items.Clear();
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT oszt_id, oszt_nev FROM osztalyok");
            while (Ab.Dr.Read())
            {
                osztalyok.Add((int.Parse(Ab.Dr[0].ToString()), Ab.Dr[1].ToString()));
            }
            CBBOsztaly.Items.AddRange([.. osztalyok.Select(x => x.nev)]);
        }

        private void DiakFeltolt()
        {
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT fel_id, fel_nev FROM felhasznalok WHERE jog_id = 1");
            while (Ab.Dr.Read())
            {
                diakfelhasznalok.Add((int.Parse(Ab.Dr[0].ToString()), Ab.Dr[1].ToString()));
            }
        }

        private void OnLoad(object sender, EventArgs e)
        {
            LblHiba.Visible = false;
            OsztalyFeltolt();

            if (osztalyok.Count != 0) return;
            foreach (Control item in this.Controls)
            {
                if (item.Name != "BtnElvet" && item is not Label) item.Enabled = false;
            }
            LblHiba.Text = "Nincs osztály az adatbázisban.";
            LblHiba.Visible = true;
        }

        private void CsakSzam(object sender, KeyPressEventArgs e)
        {
            if (char.IsNumber(e.KeyChar) || e.KeyChar == 8) return;
            e.Handled = true;
        }
    }
}
