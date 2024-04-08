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
        }

        private void Kilepes(object? sender, EventArgs e)
        {
            if(MessageBox.Show("Biztosan kilép?", "Kilép?", MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.No) return;
            this.Close();
        }
    }
}
