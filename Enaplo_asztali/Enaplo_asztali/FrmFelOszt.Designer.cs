namespace Enaplo_asztali
{
    partial class FrmFelOszt
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(FrmFelOszt));
            panel1 = new Panel();
            label3 = new Label();
            panel2 = new Panel();
            tableLayoutPanel4 = new TableLayoutPanel();
            BtnElvetes = new Button();
            BtnMentes = new Button();
            tableLayoutPanel3 = new TableLayoutPanel();
            LblHiba = new Label();
            tableLayoutPanel2 = new TableLayoutPanel();
            label2 = new Label();
            CBBOsztFonok = new ComboBox();
            tableLayoutPanel1 = new TableLayoutPanel();
            label1 = new Label();
            TxtOsztNev = new TextBox();
            panel1.SuspendLayout();
            panel2.SuspendLayout();
            tableLayoutPanel4.SuspendLayout();
            tableLayoutPanel3.SuspendLayout();
            tableLayoutPanel2.SuspendLayout();
            tableLayoutPanel1.SuspendLayout();
            SuspendLayout();
            // 
            // panel1
            // 
            panel1.BackColor = Color.Transparent;
            panel1.Controls.Add(label3);
            panel1.Dock = DockStyle.Top;
            panel1.Location = new Point(0, 0);
            panel1.Margin = new Padding(4);
            panel1.Name = "panel1";
            panel1.Size = new Size(704, 70);
            panel1.TabIndex = 8;
            // 
            // label3
            // 
            label3.Anchor = AnchorStyles.None;
            label3.AutoSize = true;
            label3.Font = new Font("Segoe UI", 15F, FontStyle.Bold, GraphicsUnit.Point, 238);
            label3.Location = new Point(266, 20);
            label3.Name = "label3";
            label3.Size = new Size(171, 28);
            label3.TabIndex = 0;
            label3.Text = "Osztály felvétele";
            label3.TextAlign = ContentAlignment.MiddleCenter;
            // 
            // panel2
            // 
            panel2.BackColor = Color.Transparent;
            panel2.Controls.Add(tableLayoutPanel4);
            panel2.Controls.Add(tableLayoutPanel3);
            panel2.Controls.Add(tableLayoutPanel2);
            panel2.Controls.Add(tableLayoutPanel1);
            panel2.Dock = DockStyle.Fill;
            panel2.Location = new Point(0, 70);
            panel2.Name = "panel2";
            panel2.Padding = new Padding(10);
            panel2.Size = new Size(704, 491);
            panel2.TabIndex = 9;
            // 
            // tableLayoutPanel4
            // 
            tableLayoutPanel4.AutoSize = true;
            tableLayoutPanel4.ColumnCount = 2;
            tableLayoutPanel4.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.Controls.Add(BtnElvetes, 1, 0);
            tableLayoutPanel4.Controls.Add(BtnMentes, 0, 0);
            tableLayoutPanel4.Dock = DockStyle.Bottom;
            tableLayoutPanel4.Location = new Point(10, 397);
            tableLayoutPanel4.Name = "tableLayoutPanel4";
            tableLayoutPanel4.RowCount = 1;
            tableLayoutPanel4.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.Size = new Size(684, 84);
            tableLayoutPanel4.TabIndex = 18;
            // 
            // BtnElvetes
            // 
            BtnElvetes.Anchor = AnchorStyles.Bottom;
            BtnElvetes.AutoSize = true;
            BtnElvetes.BackColor = Color.FromArgb(255, 192, 192);
            BtnElvetes.Location = new Point(350, 4);
            BtnElvetes.Margin = new Padding(4);
            BtnElvetes.Name = "BtnElvetes";
            BtnElvetes.Size = new Size(326, 76);
            BtnElvetes.TabIndex = 12;
            BtnElvetes.Text = "Elvetés";
            BtnElvetes.UseVisualStyleBackColor = false;
            // 
            // BtnMentes
            // 
            BtnMentes.Anchor = AnchorStyles.Bottom;
            BtnMentes.AutoSize = true;
            BtnMentes.BackColor = Color.FromArgb(192, 255, 192);
            BtnMentes.Location = new Point(8, 4);
            BtnMentes.Margin = new Padding(4);
            BtnMentes.Name = "BtnMentes";
            BtnMentes.Size = new Size(326, 76);
            BtnMentes.TabIndex = 11;
            BtnMentes.Text = "Mentés";
            BtnMentes.UseVisualStyleBackColor = false;
            // 
            // tableLayoutPanel3
            // 
            tableLayoutPanel3.ColumnCount = 1;
            tableLayoutPanel3.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.Controls.Add(LblHiba, 0, 0);
            tableLayoutPanel3.Dock = DockStyle.Fill;
            tableLayoutPanel3.Location = new Point(10, 110);
            tableLayoutPanel3.Name = "tableLayoutPanel3";
            tableLayoutPanel3.RowCount = 1;
            tableLayoutPanel3.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.Size = new Size(684, 371);
            tableLayoutPanel3.TabIndex = 17;
            // 
            // LblHiba
            // 
            LblHiba.Anchor = AnchorStyles.Top;
            LblHiba.AutoSize = true;
            LblHiba.BackColor = Color.Silver;
            LblHiba.Font = new Font("Segoe UI Semibold", 13F, FontStyle.Bold, GraphicsUnit.Point, 238);
            LblHiba.ForeColor = Color.Red;
            LblHiba.Location = new Point(318, 30);
            LblHiba.Margin = new Padding(4, 30, 4, 0);
            LblHiba.Name = "LblHiba";
            LblHiba.Size = new Size(47, 25);
            LblHiba.TabIndex = 13;
            LblHiba.Text = "hiba";
            LblHiba.Visible = false;
            // 
            // tableLayoutPanel2
            // 
            tableLayoutPanel2.ColumnCount = 2;
            tableLayoutPanel2.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.Controls.Add(label2, 0, 0);
            tableLayoutPanel2.Controls.Add(CBBOsztFonok, 1, 0);
            tableLayoutPanel2.Dock = DockStyle.Top;
            tableLayoutPanel2.Location = new Point(10, 60);
            tableLayoutPanel2.Name = "tableLayoutPanel2";
            tableLayoutPanel2.RowCount = 1;
            tableLayoutPanel2.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.Size = new Size(684, 50);
            tableLayoutPanel2.TabIndex = 16;
            // 
            // label2
            // 
            label2.Anchor = AnchorStyles.Left;
            label2.AutoSize = true;
            label2.Location = new Point(4, 14);
            label2.Margin = new Padding(4, 0, 4, 0);
            label2.Name = "label2";
            label2.Size = new Size(104, 21);
            label2.TabIndex = 9;
            label2.Text = "Osztályfőnök:";
            // 
            // CBBOsztFonok
            // 
            CBBOsztFonok.Anchor = AnchorStyles.Left;
            CBBOsztFonok.DropDownStyle = ComboBoxStyle.DropDownList;
            CBBOsztFonok.FormattingEnabled = true;
            CBBOsztFonok.Location = new Point(346, 13);
            CBBOsztFonok.Margin = new Padding(4);
            CBBOsztFonok.Name = "CBBOsztFonok";
            CBBOsztFonok.Size = new Size(241, 29);
            CBBOsztFonok.TabIndex = 10;
            // 
            // tableLayoutPanel1
            // 
            tableLayoutPanel1.ColumnCount = 2;
            tableLayoutPanel1.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.Controls.Add(label1, 0, 0);
            tableLayoutPanel1.Controls.Add(TxtOsztNev, 1, 0);
            tableLayoutPanel1.Dock = DockStyle.Top;
            tableLayoutPanel1.Location = new Point(10, 10);
            tableLayoutPanel1.Name = "tableLayoutPanel1";
            tableLayoutPanel1.RowCount = 1;
            tableLayoutPanel1.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.Size = new Size(684, 50);
            tableLayoutPanel1.TabIndex = 15;
            // 
            // label1
            // 
            label1.Anchor = AnchorStyles.Left;
            label1.AutoSize = true;
            label1.Location = new Point(4, 14);
            label1.Margin = new Padding(4, 0, 4, 0);
            label1.Name = "label1";
            label1.Size = new Size(101, 21);
            label1.TabIndex = 8;
            label1.Text = "Osztály neve:";
            // 
            // TxtOsztNev
            // 
            TxtOsztNev.Anchor = AnchorStyles.Left;
            TxtOsztNev.Location = new Point(346, 10);
            TxtOsztNev.Margin = new Padding(4);
            TxtOsztNev.Name = "TxtOsztNev";
            TxtOsztNev.Size = new Size(241, 29);
            TxtOsztNev.TabIndex = 14;
            // 
            // FrmFelOszt
            // 
            AutoScaleDimensions = new SizeF(9F, 21F);
            AutoScaleMode = AutoScaleMode.Font;
            BackgroundImage = Properties.Resources.ikonblurred;
            BackgroundImageLayout = ImageLayout.Zoom;
            ClientSize = new Size(704, 561);
            Controls.Add(panel2);
            Controls.Add(panel1);
            DoubleBuffered = true;
            Font = new Font("Segoe UI", 12F, FontStyle.Regular, GraphicsUnit.Point, 238);
            Icon = (Icon)resources.GetObject("$this.Icon");
            Margin = new Padding(4);
            MaximizeBox = false;
            MaximumSize = new Size(1000, 700);
            MinimumSize = new Size(440, 590);
            Name = "FrmFelOszt";
            StartPosition = FormStartPosition.CenterParent;
            Text = "Osztály felvétele";
            Load += OnLoad;
            panel1.ResumeLayout(false);
            panel1.PerformLayout();
            panel2.ResumeLayout(false);
            panel2.PerformLayout();
            tableLayoutPanel4.ResumeLayout(false);
            tableLayoutPanel4.PerformLayout();
            tableLayoutPanel3.ResumeLayout(false);
            tableLayoutPanel3.PerformLayout();
            tableLayoutPanel2.ResumeLayout(false);
            tableLayoutPanel2.PerformLayout();
            tableLayoutPanel1.ResumeLayout(false);
            tableLayoutPanel1.PerformLayout();
            ResumeLayout(false);
        }

        #endregion
        private Panel panel1;
        private Label label3;
        private Panel panel2;
        private TextBox TxtOsztNev;
        private Label LblHiba;
        private Button BtnElvetes;
        private Button BtnMentes;
        private ComboBox CBBOsztFonok;
        private Label label2;
        private Label label1;
        private TableLayoutPanel tableLayoutPanel1;
        private TableLayoutPanel tableLayoutPanel2;
        private TableLayoutPanel tableLayoutPanel4;
        private TableLayoutPanel tableLayoutPanel3;
    }
}