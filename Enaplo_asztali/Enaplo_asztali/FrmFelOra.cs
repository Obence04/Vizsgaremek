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
    public partial class FrmFelOra : Form
    {
        List<(int id, string nev)> osztalyok = new List<(int id, string nev)>();
        List<(int id, int tanarid, int tantid)> tanitott = new List<(int id, int tanarid, int tantid)>();
        List<(int tanarid, string nev)> tanarok = new List<(int tanarid, string nev)>();
        List<(int tantid, string nev)> tantargyak = new List<(int tantid, string nev)>();
        public FrmFelOra()
        {
            InitializeComponent();
            this.Load += OnLoad;
            BtnElvet.Click += Elvet;
            BtnMentes.Click += AdatMentes;
        }

        private void OnLoad(object sender, EventArgs e)
        {
            LblHiba.Visible = false;
            TanitottFeltolt();
            OsztalyFeltolt();
            TanarFeltolt();
            TantargyFeltolt();
            TantargyCBBFeltolt();
            if (osztalyok.Count == 0)
            {
                foreach (Control item in this.Controls)
                {
                    if (item.Name != "BtnElvet" && item is not Label) item.Enabled = false;
                }
                LblHiba.Visible = true;
                LblHiba.Text = "Nincs osztály";
            } else if (tanitott.Count == 0)
            {
                foreach (Control item in this.Controls)
                {
                    if (item.Name != "BtnElvet" && item is not Label) item.Enabled = false;
                }
                LblHiba.Visible = true;
                LblHiba.Text = "Nincs tantárgy tanárhoz rendelve";
            }
        }

        private void TantargyCBBFeltolt()
        {
            foreach (var item in tanitott)
            {
                CbbTantargy.Items.Add(tantargyak.Find(x => x.tantid == item.tantid).nev + " - " + tanarok.Find(x => x.tanarid == item.tanarid).nev);
            }
        }

        private void TantargyFeltolt()
        {
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT * FROM tantargyak");
            while (Ab.Dr.Read())
            {
                tantargyak.Add((int.Parse(Ab.Dr[0].ToString()), Ab.Dr[1].ToString()));
            }
        }

        private void TanarFeltolt()
        {
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT tanar_id, tanar_nev FROM tanarok");
            while (Ab.Dr.Read())
            {
                tanarok.Add((int.Parse(Ab.Dr[0].ToString()), Ab.Dr[1].ToString()));
            }
        }

        private void TanitottFeltolt()
        {
            //; 
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT * FROM tanitott");
            while (Ab.Dr.Read())
            {
                tanitott.Add((int.Parse(Ab.Dr[0].ToString()), int.Parse(Ab.Dr[1].ToString()), int.Parse(Ab.Dr[2].ToString())));
            }
        }

        private void OsztalyFeltolt()
        {
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT oszt_id, oszt_nev FROM osztalyok");
            while (Ab.Dr.Read())
            {
                osztalyok.Add((int.Parse(Ab.Dr[0].ToString()), Ab.Dr[1].ToString()));
            }
            CbbOsztaly.Items.AddRange([.. osztalyok.Select(x => x.nev)]);
        }

        private void AdatMentes(object sender, EventArgs e)
        {
            Adatbazis Ab = new Adatbazis();
            //hibás
            string tanitottid = "";
            Ab.Lekerdezes($"SELECT tanitott.tanit_id FROM tanitott, tanarok, tantargyak WHERE tanitott.tant_id = tantargyak.tant_id AND tanarok.tanar_id = tanitott.tanar_id AND tantargyak.tant_nev LIKE '{CbbTantargy.Text.Split('-')[0]}' AND tanarok.tanar_nev LIKE '{CbbTantargy.Text.Split('-')[1]}'");
            while (Ab.Dr.Read())
            {
                tanitottid = Ab.Dr[0].ToString();
            }
            Ab.Lezaras();
            Adatbazis Adat = new Adatbazis();
            string[] adat = { osztalyok.Find(x => x.nev == CbbOsztaly.Text).id.ToString(), DtpOra.Value.ToString("yyyy-MM-dd"), NudOraSzam.Value.ToString(), tanitottid, TxbxTerem.Text.ToString() };
            Adat.Hozzaadas($"INSERT INTO orak VALUES (null, {adat[0]}, {adat[1]}, {adat[2]}, {adat[3]}, {adat[4]})");
            foreach (TextBox txt in Controls.OfType<TextBox>())
            {
                txt.Text = "";
            }
            DtpOra.Value = DateTime.Now;
            MessageBox.Show("Sikeres hozzáadás!", "Siker", MessageBoxButtons.OK, MessageBoxIcon.Information);
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
            DtpOra.Value = DateTime.Now;
            Close();
        }
    }
}
