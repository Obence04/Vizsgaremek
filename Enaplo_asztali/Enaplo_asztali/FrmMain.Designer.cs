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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(FrmMain));
            PnlMenu = new Panel();
            BtnKilep = new Button();
            PnlLegordMenu = new Panel();
            BtnFelTantTanar = new Button();
            BtnFelTantargy = new Button();
            BtnFelTanar = new Button();
            BtnFelOra = new Button();
            BtnFelOszt = new Button();
            BtnFelDiak = new Button();
            BtnMenu = new Button();
            PnlLogo = new Panel();
            panel1 = new Panel();
            label1 = new Label();
            panel3 = new Panel();
            PnlMenu.SuspendLayout();
            PnlLegordMenu.SuspendLayout();
            panel1.SuspendLayout();
            SuspendLayout();
            // 
            // PnlMenu
            // 
            PnlMenu.BackColor = Color.DarkViolet;
            PnlMenu.Controls.Add(BtnKilep);
            PnlMenu.Controls.Add(PnlLegordMenu);
            PnlMenu.Controls.Add(BtnMenu);
            PnlMenu.Controls.Add(PnlLogo);
            PnlMenu.Dock = DockStyle.Left;
            PnlMenu.Location = new Point(0, 0);
            PnlMenu.Name = "PnlMenu";
            PnlMenu.Padding = new Padding(5);
            PnlMenu.Size = new Size(200, 361);
            PnlMenu.TabIndex = 0;
            // 
            // BtnKilep
            // 
            BtnKilep.BackColor = Color.Gainsboro;
            BtnKilep.Dock = DockStyle.Top;
            BtnKilep.FlatAppearance.BorderColor = Color.Black;
            BtnKilep.FlatAppearance.MouseDownBackColor = Color.Firebrick;
            BtnKilep.FlatAppearance.MouseOverBackColor = Color.Firebrick;
            BtnKilep.FlatStyle = FlatStyle.Flat;
            BtnKilep.Location = new Point(5, 295);
            BtnKilep.Name = "BtnKilep";
            BtnKilep.Size = new Size(190, 45);
            BtnKilep.TabIndex = 3;
            BtnKilep.Text = "Kilépés";
            BtnKilep.UseVisualStyleBackColor = false;
            // 
            // PnlLegordMenu
            // 
            PnlLegordMenu.AutoScroll = true;
            PnlLegordMenu.BackColor = Color.DarkOrchid;
            PnlLegordMenu.Controls.Add(BtnFelTantTanar);
            PnlLegordMenu.Controls.Add(BtnFelTantargy);
            PnlLegordMenu.Controls.Add(BtnFelTanar);
            PnlLegordMenu.Controls.Add(BtnFelOra);
            PnlLegordMenu.Controls.Add(BtnFelOszt);
            PnlLegordMenu.Controls.Add(BtnFelDiak);
            PnlLegordMenu.Dock = DockStyle.Top;
            PnlLegordMenu.Location = new Point(5, 75);
            PnlLegordMenu.Name = "PnlLegordMenu";
            PnlLegordMenu.Size = new Size(190, 220);
            PnlLegordMenu.TabIndex = 2;
            PnlLegordMenu.Visible = false;
            // 
            // BtnFelTantTanar
            // 
            BtnFelTantTanar.BackColor = Color.LightGray;
            BtnFelTantTanar.Dock = DockStyle.Fill;
            BtnFelTantTanar.FlatAppearance.BorderColor = Color.Black;
            BtnFelTantTanar.FlatAppearance.MouseDownBackColor = Color.Gray;
            BtnFelTantTanar.FlatAppearance.MouseOverBackColor = Color.Gray;
            BtnFelTantTanar.FlatStyle = FlatStyle.Flat;
            BtnFelTantTanar.Location = new Point(0, 155);
            BtnFelTantTanar.Name = "BtnFelTantTanar";
            BtnFelTantTanar.Padding = new Padding(10, 0, 0, 0);
            BtnFelTantTanar.Size = new Size(190, 65);
            BtnFelTantTanar.TabIndex = 5;
            BtnFelTantTanar.Text = "Tanár, tantárgy összekapcsolása";
            BtnFelTantTanar.TextAlign = ContentAlignment.MiddleLeft;
            BtnFelTantTanar.UseVisualStyleBackColor = false;
            // 
            // BtnFelTantargy
            // 
            BtnFelTantargy.BackColor = Color.LightGray;
            BtnFelTantargy.Dock = DockStyle.Top;
            BtnFelTantargy.FlatAppearance.BorderColor = Color.Black;
            BtnFelTantargy.FlatAppearance.MouseDownBackColor = Color.Gray;
            BtnFelTantargy.FlatAppearance.MouseOverBackColor = Color.Gray;
            BtnFelTantargy.FlatStyle = FlatStyle.Flat;
            BtnFelTantargy.Location = new Point(0, 120);
            BtnFelTantargy.Name = "BtnFelTantargy";
            BtnFelTantargy.Padding = new Padding(10, 0, 0, 0);
            BtnFelTantargy.Size = new Size(190, 35);
            BtnFelTantargy.TabIndex = 4;
            BtnFelTantargy.Text = "Tantárgy felvétele";
            BtnFelTantargy.TextAlign = ContentAlignment.MiddleLeft;
            BtnFelTantargy.UseVisualStyleBackColor = false;
            // 
            // BtnFelTanar
            // 
            BtnFelTanar.BackColor = Color.LightGray;
            BtnFelTanar.Dock = DockStyle.Top;
            BtnFelTanar.FlatAppearance.BorderColor = Color.Black;
            BtnFelTanar.FlatAppearance.MouseDownBackColor = Color.Gray;
            BtnFelTanar.FlatAppearance.MouseOverBackColor = Color.Gray;
            BtnFelTanar.FlatStyle = FlatStyle.Flat;
            BtnFelTanar.Location = new Point(0, 90);
            BtnFelTanar.Name = "BtnFelTanar";
            BtnFelTanar.Padding = new Padding(10, 0, 0, 0);
            BtnFelTanar.Size = new Size(190, 30);
            BtnFelTanar.TabIndex = 3;
            BtnFelTanar.Text = "Tanár felvétele";
            BtnFelTanar.TextAlign = ContentAlignment.MiddleLeft;
            BtnFelTanar.UseVisualStyleBackColor = false;
            // 
            // BtnFelOra
            // 
            BtnFelOra.BackColor = Color.LightGray;
            BtnFelOra.Dock = DockStyle.Top;
            BtnFelOra.FlatAppearance.BorderColor = Color.Black;
            BtnFelOra.FlatAppearance.MouseDownBackColor = Color.Gray;
            BtnFelOra.FlatAppearance.MouseOverBackColor = Color.Gray;
            BtnFelOra.FlatStyle = FlatStyle.Flat;
            BtnFelOra.Location = new Point(0, 60);
            BtnFelOra.Name = "BtnFelOra";
            BtnFelOra.Padding = new Padding(10, 0, 0, 0);
            BtnFelOra.Size = new Size(190, 30);
            BtnFelOra.TabIndex = 2;
            BtnFelOra.Text = "Óra felvétele";
            BtnFelOra.TextAlign = ContentAlignment.MiddleLeft;
            BtnFelOra.UseVisualStyleBackColor = false;
            // 
            // BtnFelOszt
            // 
            BtnFelOszt.BackColor = Color.LightGray;
            BtnFelOszt.Dock = DockStyle.Top;
            BtnFelOszt.FlatAppearance.BorderColor = Color.Black;
            BtnFelOszt.FlatAppearance.MouseDownBackColor = Color.Gray;
            BtnFelOszt.FlatAppearance.MouseOverBackColor = Color.Gray;
            BtnFelOszt.FlatStyle = FlatStyle.Flat;
            BtnFelOszt.Location = new Point(0, 30);
            BtnFelOszt.Name = "BtnFelOszt";
            BtnFelOszt.Padding = new Padding(10, 0, 0, 0);
            BtnFelOszt.Size = new Size(190, 30);
            BtnFelOszt.TabIndex = 1;
            BtnFelOszt.Text = "Osztály felvétele";
            BtnFelOszt.TextAlign = ContentAlignment.MiddleLeft;
            BtnFelOszt.UseVisualStyleBackColor = false;
            // 
            // BtnFelDiak
            // 
            BtnFelDiak.BackColor = Color.LightGray;
            BtnFelDiak.Dock = DockStyle.Top;
            BtnFelDiak.FlatAppearance.BorderColor = Color.Black;
            BtnFelDiak.FlatAppearance.MouseDownBackColor = Color.Gray;
            BtnFelDiak.FlatAppearance.MouseOverBackColor = Color.Gray;
            BtnFelDiak.FlatStyle = FlatStyle.Flat;
            BtnFelDiak.Location = new Point(0, 0);
            BtnFelDiak.Name = "BtnFelDiak";
            BtnFelDiak.Padding = new Padding(10, 0, 0, 0);
            BtnFelDiak.Size = new Size(190, 30);
            BtnFelDiak.TabIndex = 0;
            BtnFelDiak.Text = "Diák felvétele";
            BtnFelDiak.TextAlign = ContentAlignment.MiddleLeft;
            BtnFelDiak.UseVisualStyleBackColor = false;
            // 
            // BtnMenu
            // 
            BtnMenu.BackColor = Color.DarkGray;
            BtnMenu.Dock = DockStyle.Top;
            BtnMenu.FlatAppearance.BorderColor = Color.Black;
            BtnMenu.FlatAppearance.MouseDownBackColor = Color.DimGray;
            BtnMenu.FlatAppearance.MouseOverBackColor = Color.DimGray;
            BtnMenu.FlatStyle = FlatStyle.Flat;
            BtnMenu.Location = new Point(5, 30);
            BtnMenu.Name = "BtnMenu";
            BtnMenu.Size = new Size(190, 45);
            BtnMenu.TabIndex = 1;
            BtnMenu.Text = "Adat rögzítés";
            BtnMenu.UseVisualStyleBackColor = false;
            // 
            // PnlLogo
            // 
            PnlLogo.BackColor = Color.DarkViolet;
            PnlLogo.Dock = DockStyle.Top;
            PnlLogo.Location = new Point(5, 5);
            PnlLogo.Name = "PnlLogo";
            PnlLogo.Size = new Size(190, 25);
            PnlLogo.TabIndex = 0;
            // 
            // panel1
            // 
            panel1.Controls.Add(label1);
            panel1.Dock = DockStyle.Top;
            panel1.Location = new Point(200, 0);
            panel1.Name = "panel1";
            panel1.Size = new Size(304, 75);
            panel1.TabIndex = 1;
            // 
            // label1
            // 
            label1.Anchor = AnchorStyles.None;
            label1.AutoSize = true;
            label1.Font = new Font("Segoe UI", 20F, FontStyle.Bold, GraphicsUnit.Point, 238);
            label1.ForeColor = Color.Indigo;
            label1.Location = new Point(55, 20);
            label1.Name = "label1";
            label1.Size = new Size(196, 37);
            label1.TabIndex = 0;
            label1.Text = "R. A. K. É. T. A.";
            // 
            // panel3
            // 
            panel3.BackColor = Color.Transparent;
            panel3.BackgroundImage = Properties.Resources.ikon1;
            panel3.BackgroundImageLayout = ImageLayout.Zoom;
            panel3.Dock = DockStyle.Fill;
            panel3.Location = new Point(200, 75);
            panel3.Name = "panel3";
            panel3.Size = new Size(304, 286);
            panel3.TabIndex = 2;
            // 
            // FrmMain
            // 
            AutoScaleDimensions = new SizeF(9F, 21F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(504, 361);
            Controls.Add(panel3);
            Controls.Add(panel1);
            Controls.Add(PnlMenu);
            Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point, 238);
            FormBorderStyle = FormBorderStyle.FixedSingle;
            Icon = (Icon)resources.GetObject("$this.Icon");
            Margin = new Padding(4);
            MaximizeBox = false;
            MaximumSize = new Size(520, 400);
            MinimizeBox = false;
            MinimumSize = new Size(520, 400);
            Name = "FrmMain";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Főmenü";
            PnlMenu.ResumeLayout(false);
            PnlLegordMenu.ResumeLayout(false);
            panel1.ResumeLayout(false);
            panel1.PerformLayout();
            ResumeLayout(false);
        }

        #endregion

        private Panel PnlMenu;
        private Panel PnlLegordMenu;
        private Button BtnMenu;
        private Panel PnlLogo;
        private Button BtnKilep;
        private Button BtnFelTantTanar;
        private Button BtnFelTantargy;
        private Button BtnFelTanar;
        private Button BtnFelOra;
        private Button BtnFelOszt;
        private Button BtnFelDiak;
        private Panel panel1;
        private Label label1;
        private Panel panel3;
    }
}
