namespace Enaplo_asztali
{
    partial class FrmMain
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            menuStrip1 = new MenuStrip();
            TSMIFelvetel = new ToolStripMenuItem();
            TSMIFelDiak = new ToolStripMenuItem();
            TSMIFelOszt = new ToolStripMenuItem();
            TSMIFelOra = new ToolStripMenuItem();
            TSMIFelTanar = new ToolStripMenuItem();
            TSMIFelTantargy = new ToolStripMenuItem();
            TSMITantTanar = new ToolStripMenuItem();
            TSMIImportalas = new ToolStripMenuItem();
            diákokToolStripMenuItem = new ToolStripMenuItem();
            órarendToolStripMenuItem1 = new ToolStripMenuItem();
            TSMIKilepes = new ToolStripMenuItem();
            menuStrip1.SuspendLayout();
            SuspendLayout();
            // 
            // menuStrip1
            // 
            menuStrip1.Items.AddRange(new ToolStripItem[] { TSMIFelvetel, TSMIImportalas, TSMIKilepes });
            menuStrip1.Location = new Point(0, 0);
            menuStrip1.Name = "menuStrip1";
            menuStrip1.Size = new Size(800, 24);
            menuStrip1.TabIndex = 0;
            menuStrip1.Text = "menuStrip1";
            // 
            // TSMIFelvetel
            // 
            TSMIFelvetel.DropDownItems.AddRange(new ToolStripItem[] { TSMIFelDiak, TSMIFelOszt, TSMIFelOra, TSMIFelTanar, TSMIFelTantargy, TSMITantTanar });
            TSMIFelvetel.Name = "TSMIFelvetel";
            TSMIFelvetel.Size = new Size(59, 20);
            TSMIFelvetel.Text = "Felvétel";
            // 
            // TSMIFelDiak
            // 
            TSMIFelDiak.Name = "TSMIFelDiak";
            TSMIFelDiak.Size = new Size(214, 22);
            TSMIFelDiak.Text = "diák";
            // 
            // TSMIFelOszt
            // 
            TSMIFelOszt.Name = "TSMIFelOszt";
            TSMIFelOszt.Size = new Size(214, 22);
            TSMIFelOszt.Text = "osztály";
            // 
            // TSMIFelOra
            // 
            TSMIFelOra.Name = "TSMIFelOra";
            TSMIFelOra.Size = new Size(214, 22);
            TSMIFelOra.Text = "órarend";
            // 
            // TSMIFelTanar
            // 
            TSMIFelTanar.Name = "TSMIFelTanar";
            TSMIFelTanar.Size = new Size(214, 22);
            TSMIFelTanar.Text = "tanár";
            // 
            // TSMIFelTantargy
            // 
            TSMIFelTantargy.Name = "TSMIFelTantargy";
            TSMIFelTantargy.Size = new Size(214, 22);
            TSMIFelTantargy.Text = "tantárgy";
            // 
            // TSMITantTanar
            // 
            TSMITantTanar.Name = "TSMITantTanar";
            TSMITantTanar.Size = new Size(214, 22);
            TSMITantTanar.Text = "tantárgy tanárhoz rendelés";
            // 
            // TSMIImportalas
            // 
            TSMIImportalas.DropDownItems.AddRange(new ToolStripItem[] { diákokToolStripMenuItem, órarendToolStripMenuItem1 });
            TSMIImportalas.Name = "TSMIImportalas";
            TSMIImportalas.Size = new Size(75, 20);
            TSMIImportalas.Text = "Importálás";
            // 
            // diákokToolStripMenuItem
            // 
            diákokToolStripMenuItem.Name = "diákokToolStripMenuItem";
            diákokToolStripMenuItem.Size = new Size(115, 22);
            diákokToolStripMenuItem.Text = "diákok";
            // 
            // órarendToolStripMenuItem1
            // 
            órarendToolStripMenuItem1.Name = "órarendToolStripMenuItem1";
            órarendToolStripMenuItem1.Size = new Size(115, 22);
            órarendToolStripMenuItem1.Text = "órarend";
            // 
            // TSMIKilepes
            // 
            TSMIKilepes.Name = "TSMIKilepes";
            TSMIKilepes.Size = new Size(56, 20);
            TSMIKilepes.Text = "Kilépés";
            // 
            // FrmMain
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(menuStrip1);
            MainMenuStrip = menuStrip1;
            MaximizeBox = false;
            Name = "FrmMain";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Form1";
            menuStrip1.ResumeLayout(false);
            menuStrip1.PerformLayout();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private MenuStrip menuStrip1;
        private ToolStripMenuItem TSMIFelvetel;
        private ToolStripMenuItem TSMIImportalas;
        private ToolStripMenuItem TSMIKilepes;
        private ToolStripMenuItem TSMIFelDiak;
        private ToolStripMenuItem TSMIFelOszt;
        private ToolStripMenuItem TSMIFelOra;
        private ToolStripMenuItem TSMIFelTanar;
        private ToolStripMenuItem TSMIFelTantargy;
        private ToolStripMenuItem diákokToolStripMenuItem;
        private ToolStripMenuItem órarendToolStripMenuItem1;
        private ToolStripMenuItem TSMITantTanar;
    }
}
