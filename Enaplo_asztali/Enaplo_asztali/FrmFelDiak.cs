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
        public FrmFelDiak()
        {
            InitializeComponent();
            this.Load += OnLoad;
            BtnMentes.Click += AdatMentes;
            BtnElvet.Click += Elvet;
            CBUj.CheckedChanged += UjOsztaly;
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

        }

        private void OsztalyFeltolt()
        {
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT oszt_id, oszt_nev FROM osztalyok");
            while(Ab.Dr.Read())
            {
                osztalyok.Add((int.Parse(Ab.Dr[0].ToString()), Ab.Dr[1].ToString()));
            }
            if (osztalyok.Count == 0)
            {
                CBUj.Checked = true;
                CBUj.Enabled = false;
                return;
            }
            CBBOsztaly.Items.AddRange([ ..osztalyok.Select(x => x.nev)]);
        }

        private void OnLoad(object sender, EventArgs e)
        {
            MessageBox.Show("c");
            OsztalyFeltolt();
        }


        private void UjOsztaly(object sender, EventArgs e)
        {
            CBBOsztaly.Enabled = !CBUj.Checked;
            TxtUjOsztaly.Enabled = CBUj.Checked;
        }
    }
}
