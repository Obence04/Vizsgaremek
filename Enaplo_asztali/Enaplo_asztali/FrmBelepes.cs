using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data;
using BCrypt.Net;
using MySql.Data.MySqlClient;
using Org.BouncyCastle.Asn1.Cmp;
using System.Diagnostics;

namespace Enaplo_asztali
{
    public partial class FrmBelepes : Form
    {
        public FrmBelepes()
        {
            InitializeComponent();
            BtnBelepes.Click += Belepes;



            LbHiba.Text = "";

            //debug
            TxtNev.KeyDown += Key;
        }

        #region DEBUG CODE
        public void Key(object? sender, KeyEventArgs e)
        {
            if (e.KeyCode == Keys.F1 )
            {
                TxtNev.Text = "Rendszergazda";
                TxtJelszo.Text = "RKT-Administrator-123";
                Belepes(null, null);
            }
        }
        #endregion

        public void Belepes(object? sender, EventArgs e)
        {
            LbHiba.Text = "";
            if (TxtNev.Text.Length == 0 || TxtJelszo.Text.Length == 0)
            {
                MessageBox.Show("Üresen hagyott egy mezőt!");
                return;
            }
            (string nev, string jelszo) felh = (TxtNev.Text, TxtJelszo.Text);

            MySqlConnectionStringBuilder build = new MySqlConnectionStringBuilder()
            {
                Server = "localhost",
                Port = 3306,
                UserID = "root",
                Database= "enaplo_sz1"

            };
            MySqlConnection con = new MySqlConnection(build.ToString());
            con.Open();
            Adatbazis ab = new Adatbazis();
            ab.Lekerdezes("SELECT COUNT(fel_id) FROM felhasznalok WHERE fel_nev = '" + felh.nev + "';");
            ab.Dr.Read();
            if (int.Parse(ab.Dr[0].ToString()) == 0)
            {
                LbHiba.Text = "Helytelen felhasználónév vagy jelszó!";
                return;
            }
            else if (int.Parse(ab.Dr[0].ToString()) > 1)
            {
                throw new Exception();
            }

            ab.Dr.Close();
            ab.Lekerdezes("SELECT fel_jelszo, jog_id FROM felhasznalok WHERE fel_nev = '" + felh.nev + "';");
            ab.Dr.Read();
            if (!BCrypt.Net.BCrypt.Verify(felh.jelszo, ab.Dr[0].ToString()))
            {
                LbHiba.Text = "Helytelen felhasználónév vagy jelszó!";
                return;
            }

            if (int.Parse(ab.Dr[1].ToString()) < 2)
            {
                LbHiba.Text = "Nincs joga az adminisztrátori felülethez!";
                MessageBox.Show("Nincs joga az adminisztrátori felülethez!","Jogosulatlan művelet", MessageBoxButtons.OK, MessageBoxIcon.Stop);
                DialogResult = DialogResult.Cancel;
                this.Close();

                return;
            }
            (string nev, int jog) user = (felh.nev, int.Parse(ab.Dr[1].ToString()));
            con.Close();
            DialogResult = DialogResult.OK;
            FrmMain.user = user;
            this.Close();
        }
    }
}
