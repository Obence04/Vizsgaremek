using BCrypt.Net;

namespace Enaplo_asztali
{
    public partial class FrmMain : Form
    {
        public static (string nev, int jog)? user = null;
        public FrmMain()
        {
            InitializeComponent();
            BtnKilep.Click += Kilepes;
            BtnFelDiak.Click += DiakFel;
            BtnFelOszt.Click += OsztalyFel;
            BtnFelOra.Click += OraFel;
            BtnFelTanar.Click += TanarFel;
            BtnFelTantargy.Click += TantargyFel;
            BtnFelTantTanar.Click += TantTanarRendel;
            BtnMenu.Click += LegorduloMenu;
        }

        private void LegorduloMenu(object sender, EventArgs e)
        {
            if (PnlLegordMenu.Visible)
            {
                PnlLegordMenu.Visible = false;
            }
            else
            {
                PnlLegordMenu.Visible = true;
            }
        }

        private void DiakFel(object sender, EventArgs e)
        {
            FrmFelDiak d = new FrmFelDiak();
            d.ShowDialog();
        }

        private void OsztalyFel(object sender, EventArgs e)
        {
            FrmFelOszt d = new FrmFelOszt();
            d.ShowDialog();
        }

        private void OraFel(object sender, EventArgs e)
        {
            FrmFelOra d = new FrmFelOra();
            d.ShowDialog();
        }

        private void TanarFel(object sender, EventArgs e)
        {
            FrmTanarFel d = new FrmTanarFel();
            d.ShowDialog();
        }

        private void TantargyFel(object sender, EventArgs e)
        {
            FrmTantargyFel d = new FrmTantargyFel();
            d.ShowDialog();
        }

        private void TantTanarRendel(object sender, EventArgs e)
        {
            FrmRendTantTan d = new FrmRendTantTan();
            d.ShowDialog();
        }

        private void Kilepes(object? sender, EventArgs e)
        {
            if(MessageBox.Show("Biztosan kilép?", "Kilép?", MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.No) return;
            this.Close();
        }
    }
}
