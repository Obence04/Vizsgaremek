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
    }
}