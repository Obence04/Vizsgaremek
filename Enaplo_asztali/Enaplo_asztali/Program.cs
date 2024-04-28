using MySql.Data.MySqlClient;
using System.Net.Sockets;
using System.Runtime.CompilerServices;

namespace Enaplo_asztali
{
    internal static class Program
    {
        /// <summary>
        ///  The main entry point for the application.
        /// </summary>
        [STAThread]
        static void Main()
        {
            // To customize application configuration such as set high DPI settings or default font,
            // see https://aka.ms/applicationconfiguration.
            ApplicationConfiguration.Initialize();
            DialogResult dr = DialogResult.Retry;
            do
            {
                try
                {
                    FrmBelepes f = new FrmBelepes();
                    Application.Run(f);
                    f.Dispose();
                    if (f.DialogResult == DialogResult.OK)
                    {
                        Application.Run(new FrmMain());
                    }
                    else
                    {
                        return;
                    }
                }
                catch (MySqlException)
                {
                    dr = MessageBox.Show("Nem lehet kapcsolódni a szerverhez.", "Kapcsolódási hiba", MessageBoxButtons.RetryCancel, MessageBoxIcon.Stop);
                }
            }
            while (dr == DialogResult.Retry);
        }
    }
}