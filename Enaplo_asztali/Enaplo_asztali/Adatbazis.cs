using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Enaplo_asztali
{
    internal class Adatbazis
    {
        const string server = "localhost";
        const int port = 3306;
        const string uid = "root";
        const string passwd = "";
        const string db = "enaplo";

        MySqlConnection con;
        MySqlCommand cmd;
        public MySqlDataReader Dr { get => dr; set => dr = value; }
        MySqlDataReader dr;
        public Adatbazis()
        {
            MySqlConnectionStringBuilder build = new MySqlConnectionStringBuilder()
            {
                Server = server,
                Port = port,
                UserID = uid,
                Password = passwd,
                Database = db
            };
            con = new MySqlConnection(build.ToString());
            con.Open();
        }

        public void Lekerdezes(string parancs)
        {
            cmd = new MySqlCommand(parancs, con);
            dr = cmd.ExecuteReader();
        }

        public int Hozzaadas(string parancs)
        {
            cmd = new MySqlCommand(parancs, con);
            return cmd.ExecuteNonQuery();
        }

        public void Lezaras()
        {
            con.Close();
        }

        ~Adatbazis()
        {
            con.Close();
        }
    }
}
