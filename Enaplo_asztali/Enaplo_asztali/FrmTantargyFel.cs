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
    public partial class FrmTantargyFel : Form
    {
        List<string> tantargy = new();
        public FrmTantargyFel()
        {
            InitializeComponent();
            this.Load += OnLoad;
            BtnElvet.Click += Elvet;
            BtnMentes.Click += AdatMentes;
        }

        private void OnLoad(object sender, EventArgs e)
        {
            TantargyFeltolt();
        }
        private void Elvet(object sender, EventArgs e)
        {
            if (MessageBox.Show("Biztosan elveti?", "Elveti?", MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.No)
            {
                return;
            }
            TxbxTant.ResetText();
            Close();
        }
        private void AdatMentes(object sender, EventArgs e)
        {
            LblHiba.Visible = false;
            if (tantargy.Contains(TxbxTant.Text))
            {
                LblHiba.Text = "Ilyen tantárgy már létezik!";
                LblHiba.Visible = true;
                TxbxTant.ResetText();
                TxbxTant.Focus();
            }
            else if (string.IsNullOrWhiteSpace(TxbxTant.Text))
            {
                LblHiba.Text = "Üres mező!";
                LblHiba.Visible = true;
                TxbxTant.ResetText();
                TxbxTant.Focus();
            }
            else
            {
                Adatbazis Ab = new();
                Ab.Hozzaadas($"INSERT INTO tantargyak VALUES (null, '{TxbxTant.Text}')");
                TxbxTant.ResetText();
                TantargyFeltolt();
                MessageBox.Show("Sikeres hozzáadás!", "Siker", MessageBoxButtons.OK, MessageBoxIcon.Information);
            }
        }
        private void TantargyFeltolt()
        {
            tantargy.Clear();
            Adatbazis Ab = new Adatbazis();
            Ab.Lekerdezes("SELECT tant_nev FROM tantargyak");
            while (Ab.Dr.Read())
            {
                tantargy.Add(Ab.Dr[0].ToString());
            }
        }
    }
}
