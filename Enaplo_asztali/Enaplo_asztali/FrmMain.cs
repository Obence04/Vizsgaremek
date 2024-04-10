using BCrypt.Net;
using System.Drawing.Imaging;

namespace Enaplo_asztali
{
    public partial class FrmMain : Form
    {
        int menu = -1;
        public static (string nev, int jog)? user = null;
        public FrmMain()
        {
            InitializeComponent();
            TSMIKilepes.Click += Kilepes;
            TSMIFelDiak.Click += DiakFel;
            KeyDown += Key;
        }

        public void Key(object? sender, KeyEventArgs e)
        {
            if (menu != -1)
            {
                //TODO
                
                menu = -1;
            }
            
            if (e.KeyCode == Keys.F1)
            {
                menu = 0;
                TSMIFelvetel.ShowDropDown();
                
            }
            else if (e.KeyCode == Keys.F2)
            {
                menu = 1;
                TSMIImportalas.ShowDropDown();
            }
            
        }
        private void DiakFel(object sender, EventArgs e)
        {
            FrmFelDiak d = new FrmFelDiak();
            d.ShowDialog();
        }

        private void Kilepes(object? sender, EventArgs e)
        {
            if(MessageBox.Show("Biztosan kilép?", "Kilép?", MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.No) return;
            this.Close();
        }
    }
}
