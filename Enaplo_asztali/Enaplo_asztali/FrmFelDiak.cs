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
    public partial class FrmFelDiak : Form
    {
        public FrmFelDiak()
        {
            InitializeComponent();
            CBUj.CheckedChanged += UjOsztaly;
        }

        private void OnLoad(object sender, EventArgs e)
        {
            MessageBox.Show("c");
        }

        private void UjOsztaly(object sender, EventArgs e)
        {
            CBBOsztaly.Enabled = !CBUj.Checked;
            TxtUjOsztaly.Enabled = CBUj.Checked;
        }
    }
}
