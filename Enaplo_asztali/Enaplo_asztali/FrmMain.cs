using BCrypt.Net;

namespace Enaplo_asztali
{
    public partial class FrmMain : Form
    {
        public static (string nev, int jog)? user = null;
        public FrmMain()
        {
            InitializeComponent();
            TSMIKilepes.Click += Kilepes;
            TSMIFelDiak.Click += DiakFel;
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
