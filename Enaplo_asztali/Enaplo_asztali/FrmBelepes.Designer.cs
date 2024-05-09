namespace Enaplo_asztali
{
    partial class FrmBelepes
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
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
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(FrmBelepes));
            panel1 = new Panel();
            panel3 = new Panel();
            BtnBelepes = new Button();
            panel2 = new Panel();
            LbHiba = new Label();
            tableLayoutPanel1 = new TableLayoutPanel();
            label1 = new Label();
            TxtNev = new TextBox();
            TxtJelszo = new TextBox();
            label2 = new Label();
            panel1.SuspendLayout();
            panel3.SuspendLayout();
            panel2.SuspendLayout();
            tableLayoutPanel1.SuspendLayout();
            SuspendLayout();
            // 
            // panel1
            // 
            panel1.BackColor = Color.Transparent;
            panel1.Controls.Add(panel3);
            panel1.Controls.Add(panel2);
            panel1.Controls.Add(tableLayoutPanel1);
            panel1.Dock = DockStyle.Fill;
            panel1.Location = new Point(0, 0);
            panel1.Margin = new Padding(5);
            panel1.Name = "panel1";
            panel1.Padding = new Padding(30, 50, 30, 30);
            panel1.Size = new Size(354, 331);
            panel1.TabIndex = 0;
            // 
            // panel3
            // 
            panel3.Controls.Add(BtnBelepes);
            panel3.Dock = DockStyle.Bottom;
            panel3.Location = new Point(30, 218);
            panel3.Name = "panel3";
            panel3.Padding = new Padding(20);
            panel3.Size = new Size(294, 83);
            panel3.TabIndex = 14;
            // 
            // BtnBelepes
            // 
            BtnBelepes.Dock = DockStyle.Fill;
            BtnBelepes.Location = new Point(20, 20);
            BtnBelepes.Margin = new Padding(4);
            BtnBelepes.Name = "BtnBelepes";
            BtnBelepes.Size = new Size(254, 43);
            BtnBelepes.TabIndex = 8;
            BtnBelepes.Text = "Belépés";
            BtnBelepes.UseVisualStyleBackColor = true;
            // 
            // panel2
            // 
            panel2.Controls.Add(LbHiba);
            panel2.Dock = DockStyle.Top;
            panel2.Location = new Point(30, 150);
            panel2.Name = "panel2";
            panel2.Size = new Size(294, 62);
            panel2.TabIndex = 13;
            // 
            // LbHiba
            // 
            LbHiba.AutoSize = true;
            LbHiba.BackColor = Color.Silver;
            LbHiba.Dock = DockStyle.Left;
            LbHiba.Font = new Font("Segoe UI", 9.75F, FontStyle.Bold, GraphicsUnit.Point, 238);
            LbHiba.ForeColor = Color.Red;
            LbHiba.Location = new Point(0, 0);
            LbHiba.Margin = new Padding(4, 0, 4, 0);
            LbHiba.Name = "LbHiba";
            LbHiba.Size = new Size(35, 17);
            LbHiba.TabIndex = 11;
            LbHiba.Text = "hiba";
            // 
            // tableLayoutPanel1
            // 
            tableLayoutPanel1.ColumnCount = 2;
            tableLayoutPanel1.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 35F));
            tableLayoutPanel1.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 65F));
            tableLayoutPanel1.Controls.Add(label1, 0, 0);
            tableLayoutPanel1.Controls.Add(TxtNev, 1, 0);
            tableLayoutPanel1.Controls.Add(TxtJelszo, 1, 1);
            tableLayoutPanel1.Controls.Add(label2, 0, 1);
            tableLayoutPanel1.Dock = DockStyle.Top;
            tableLayoutPanel1.Location = new Point(30, 50);
            tableLayoutPanel1.Name = "tableLayoutPanel1";
            tableLayoutPanel1.RowCount = 2;
            tableLayoutPanel1.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.Size = new Size(294, 100);
            tableLayoutPanel1.TabIndex = 12;
            // 
            // label1
            // 
            label1.Anchor = AnchorStyles.Left;
            label1.AutoSize = true;
            label1.BackColor = Color.Transparent;
            label1.Location = new Point(4, 4);
            label1.Margin = new Padding(4, 0, 4, 0);
            label1.Name = "label1";
            label1.Size = new Size(91, 42);
            label1.TabIndex = 9;
            label1.Text = "Felhasználónév:";
            // 
            // TxtNev
            // 
            TxtNev.Anchor = AnchorStyles.None;
            TxtNev.Location = new Point(106, 10);
            TxtNev.Margin = new Padding(4);
            TxtNev.Name = "TxtNev";
            TxtNev.Size = new Size(184, 29);
            TxtNev.TabIndex = 6;
            TxtNev.TextAlign = HorizontalAlignment.Center;
            // 
            // TxtJelszo
            // 
            TxtJelszo.Anchor = AnchorStyles.None;
            TxtJelszo.Location = new Point(106, 60);
            TxtJelszo.Margin = new Padding(4);
            TxtJelszo.Name = "TxtJelszo";
            TxtJelszo.PasswordChar = '*';
            TxtJelszo.Size = new Size(184, 29);
            TxtJelszo.TabIndex = 7;
            TxtJelszo.TextAlign = HorizontalAlignment.Center;
            // 
            // label2
            // 
            label2.Anchor = AnchorStyles.Left;
            label2.AutoSize = true;
            label2.BackColor = Color.Transparent;
            label2.Location = new Point(4, 64);
            label2.Margin = new Padding(4, 0, 4, 0);
            label2.Name = "label2";
            label2.Size = new Size(54, 21);
            label2.TabIndex = 10;
            label2.Text = "Jelszó:";
            // 
            // FrmBelepes
            // 
            AcceptButton = BtnBelepes;
            AutoScaleDimensions = new SizeF(9F, 21F);
            AutoScaleMode = AutoScaleMode.Font;
            BackgroundImage = Properties.Resources.ikonblurred;
            BackgroundImageLayout = ImageLayout.Zoom;
            ClientSize = new Size(354, 331);
            Controls.Add(panel1);
            DoubleBuffered = true;
            Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point, 238);
            FormBorderStyle = FormBorderStyle.FixedSingle;
            Icon = (Icon)resources.GetObject("$this.Icon");
            Margin = new Padding(4);
            MaximizeBox = false;
            MaximumSize = new Size(370, 370);
            MinimizeBox = false;
            MinimumSize = new Size(370, 370);
            Name = "FrmBelepes";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Belépés";
            panel1.ResumeLayout(false);
            panel3.ResumeLayout(false);
            panel2.ResumeLayout(false);
            panel2.PerformLayout();
            tableLayoutPanel1.ResumeLayout(false);
            tableLayoutPanel1.PerformLayout();
            ResumeLayout(false);
        }

        #endregion

        private Panel panel1;
        private Panel panel2;
        private Label LbHiba;
        private TableLayoutPanel tableLayoutPanel1;
        private Label label1;
        private TextBox TxtNev;
        private TextBox TxtJelszo;
        private Label label2;
        private Button BtnBelepes;
        private Panel panel3;
    }
}