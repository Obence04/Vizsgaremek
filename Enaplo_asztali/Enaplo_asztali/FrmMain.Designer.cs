﻿namespace Enaplo_asztali
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
            TSMIImportalas = new ToolStripMenuItem();
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
            TSMIFelvetel.Name = "TSMIFelvetel";
            TSMIFelvetel.Size = new Size(59, 20);
            TSMIFelvetel.Text = "Felvétel";
            // 
            // TSMIImportalas
            // 
            TSMIImportalas.Name = "TSMIImportalas";
            TSMIImportalas.Size = new Size(75, 20);
            TSMIImportalas.Text = "Importálás";
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
            Name = "FrmMain";
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
    }
}
