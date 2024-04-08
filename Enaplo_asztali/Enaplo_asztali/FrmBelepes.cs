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

namespace Enaplo_asztali
{
    public partial class FrmBelepes : Form
    {
        public FrmBelepes()
        {
            InitializeComponent();
            BtnBelepes.Click += Belepes;

        }

        public void Belepes(object? sender, EventArgs e)
        {
            if (TxtNev.Text.Length == 0 || TxtJelszo.Text.Length == 0)
            {
                MessageBox.Show("Üresen hagyott egy mezőt!");
                return;
            }
            (string nev, string jelszo) felh = (TxtNev.Text, TxtJelszo.Text);
            //auth check
            MySqlConnectionStringBuilder build = new MySqlConnectionStringBuilder()
            {
                Server = "localhost",
                Port = 3306,
                UserID = "root",
                Database= "enaplo_sz1"

            };
            MySqlConnection con = new MySqlConnection(build.ToString());
            con.Open();
            MySqlCommand cmd = new MySqlCommand("SELECT COUNT(id) FROM felhasznalok WHERE name = '"+felh.nev+"';", con);
            MySqlDataReader dr = cmd.ExecuteReader();
            dr.Read();
            if (int.Parse(dr[0].ToString()) == 0)
            {
                LbHiba.Text = "Helytelen felhasználónév vagy jelszó!";
                return;
            }
            else if (int.Parse(dr[0].ToString()) > 1)
            {
                throw new Exception();
            }
            dr.Close();
            cmd = new MySqlCommand("SELECT password, jog_id FROM felhasznalok WHERE name = '" + felh.nev + "';", con);
            dr = cmd.ExecuteReader();
            dr.Read();
            if (BCrypt.Net.BCrypt.Verify(felh.jelszo, dr[0].ToString()))
            {
                (string nev, int jog) user = (felh.nev, int.Parse(dr[1].ToString()));
                con.Close();
                DialogResult = DialogResult.OK;
                FrmMain.user = user;
                this.Close();
            }
            LbHiba.Text = "Helytelen felhasználónév vagy jelszó!";
            return;
        }
    }
}
