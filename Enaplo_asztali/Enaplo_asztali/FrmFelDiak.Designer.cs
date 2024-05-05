namespace Enaplo_asztali
{
    partial class FrmFelDiak
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(FrmFelDiak));
            panel1 = new Panel();
            LabelCim = new Label();
            panel2 = new Panel();
            tableLayoutPanel9 = new TableLayoutPanel();
            BtnMentes = new Button();
            BtnElvet = new Button();
            tableLayoutPanel8 = new TableLayoutPanel();
            LblHiba = new Label();
            tableLayoutPanel7 = new TableLayoutPanel();
            TxtEmail = new TextBox();
            label6 = new Label();
            tableLayoutPanel6 = new TableLayoutPanel();
            label7 = new Label();
            CBBOsztaly = new ComboBox();
            tableLayoutPanel5 = new TableLayoutPanel();
            label5 = new Label();
            TxtAnyja = new TextBox();
            tableLayoutPanel4 = new TableLayoutPanel();
            label4 = new Label();
            TxtSzulhely = new TextBox();
            tableLayoutPanel3 = new TableLayoutPanel();
            label3 = new Label();
            DateTPSzuldatum = new DateTimePicker();
            tableLayoutPanel2 = new TableLayoutPanel();
            label2 = new Label();
            TxtNev = new TextBox();
            tableLayoutPanel1 = new TableLayoutPanel();
            label1 = new Label();
            TxtOktazon = new TextBox();
            panel1.SuspendLayout();
            panel2.SuspendLayout();
            tableLayoutPanel9.SuspendLayout();
            tableLayoutPanel8.SuspendLayout();
            tableLayoutPanel7.SuspendLayout();
            tableLayoutPanel6.SuspendLayout();
            tableLayoutPanel5.SuspendLayout();
            tableLayoutPanel4.SuspendLayout();
            tableLayoutPanel3.SuspendLayout();
            tableLayoutPanel2.SuspendLayout();
            tableLayoutPanel1.SuspendLayout();
            SuspendLayout();
            // 
            // panel1
            // 
            panel1.BackColor = Color.Transparent;
            panel1.Controls.Add(LabelCim);
            panel1.Dock = DockStyle.Top;
            panel1.Location = new Point(0, 0);
            panel1.Name = "panel1";
            panel1.Size = new Size(704, 70);
            panel1.TabIndex = 19;
            // 
            // LabelCim
            // 
            LabelCim.Anchor = AnchorStyles.None;
            LabelCim.AutoSize = true;
            LabelCim.Font = new Font("Segoe UI", 15F, FontStyle.Bold, GraphicsUnit.Point, 238);
            LabelCim.Location = new Point(275, 20);
            LabelCim.Name = "LabelCim";
            LabelCim.Size = new Size(144, 28);
            LabelCim.TabIndex = 0;
            LabelCim.Text = "Diák felvétele";
            LabelCim.TextAlign = ContentAlignment.MiddleCenter;
            // 
            // panel2
            // 
            panel2.AutoScroll = true;
            panel2.BackColor = Color.Transparent;
            panel2.Controls.Add(tableLayoutPanel9);
            panel2.Controls.Add(tableLayoutPanel8);
            panel2.Controls.Add(tableLayoutPanel7);
            panel2.Controls.Add(tableLayoutPanel6);
            panel2.Controls.Add(tableLayoutPanel5);
            panel2.Controls.Add(tableLayoutPanel4);
            panel2.Controls.Add(tableLayoutPanel3);
            panel2.Controls.Add(tableLayoutPanel2);
            panel2.Controls.Add(tableLayoutPanel1);
            panel2.Dock = DockStyle.Fill;
            panel2.Location = new Point(0, 70);
            panel2.Name = "panel2";
            panel2.Padding = new Padding(10);
            panel2.Size = new Size(704, 491);
            panel2.TabIndex = 20;
            // 
            // tableLayoutPanel9
            // 
            tableLayoutPanel9.ColumnCount = 2;
            tableLayoutPanel9.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel9.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel9.Controls.Add(BtnMentes, 0, 0);
            tableLayoutPanel9.Controls.Add(BtnElvet, 1, 0);
            tableLayoutPanel9.Dock = DockStyle.Fill;
            tableLayoutPanel9.Location = new Point(10, 410);
            tableLayoutPanel9.Name = "tableLayoutPanel9";
            tableLayoutPanel9.RowCount = 1;
            tableLayoutPanel9.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel9.Size = new Size(684, 71);
            tableLayoutPanel9.TabIndex = 44;
            // 
            // BtnMentes
            // 
            BtnMentes.Anchor = AnchorStyles.Bottom;
            BtnMentes.AutoSize = true;
            BtnMentes.BackColor = Color.FromArgb(192, 255, 192);
            BtnMentes.Location = new Point(4, 4);
            BtnMentes.Margin = new Padding(4);
            BtnMentes.Name = "BtnMentes";
            BtnMentes.Size = new Size(334, 63);
            BtnMentes.TabIndex = 33;
            BtnMentes.Text = "Mentés";
            BtnMentes.UseVisualStyleBackColor = false;
            // 
            // BtnElvet
            // 
            BtnElvet.Anchor = AnchorStyles.Bottom;
            BtnElvet.AutoSize = true;
            BtnElvet.BackColor = Color.FromArgb(255, 192, 192);
            BtnElvet.Location = new Point(346, 4);
            BtnElvet.Margin = new Padding(4);
            BtnElvet.Name = "BtnElvet";
            BtnElvet.Size = new Size(334, 63);
            BtnElvet.TabIndex = 34;
            BtnElvet.Text = "Elvetés";
            BtnElvet.UseVisualStyleBackColor = false;
            // 
            // tableLayoutPanel8
            // 
            tableLayoutPanel8.ColumnCount = 1;
            tableLayoutPanel8.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel8.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel8.Controls.Add(LblHiba, 0, 0);
            tableLayoutPanel8.Dock = DockStyle.Top;
            tableLayoutPanel8.Location = new Point(10, 360);
            tableLayoutPanel8.Name = "tableLayoutPanel8";
            tableLayoutPanel8.RowCount = 1;
            tableLayoutPanel8.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel8.Size = new Size(684, 50);
            tableLayoutPanel8.TabIndex = 43;
            // 
            // LblHiba
            // 
            LblHiba.Anchor = AnchorStyles.None;
            LblHiba.AutoSize = true;
            LblHiba.BackColor = Color.Silver;
            LblHiba.Font = new Font("Segoe UI Semibold", 13F, FontStyle.Bold, GraphicsUnit.Point, 238);
            LblHiba.ForeColor = Color.Red;
            LblHiba.Location = new Point(318, 12);
            LblHiba.Margin = new Padding(4, 0, 4, 0);
            LblHiba.Name = "LblHiba";
            LblHiba.Size = new Size(47, 25);
            LblHiba.TabIndex = 35;
            LblHiba.Text = "hiba";
            LblHiba.Visible = false;
            // 
            // tableLayoutPanel7
            // 
            tableLayoutPanel7.ColumnCount = 2;
            tableLayoutPanel7.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel7.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel7.Controls.Add(TxtEmail, 1, 0);
            tableLayoutPanel7.Controls.Add(label6, 0, 0);
            tableLayoutPanel7.Dock = DockStyle.Top;
            tableLayoutPanel7.Location = new Point(10, 310);
            tableLayoutPanel7.Name = "tableLayoutPanel7";
            tableLayoutPanel7.RowCount = 1;
            tableLayoutPanel7.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel7.Size = new Size(684, 50);
            tableLayoutPanel7.TabIndex = 42;
            // 
            // TxtEmail
            // 
            TxtEmail.Anchor = AnchorStyles.Left;
            TxtEmail.Location = new Point(346, 10);
            TxtEmail.Margin = new Padding(4);
            TxtEmail.Name = "TxtEmail";
            TxtEmail.Size = new Size(241, 29);
            TxtEmail.TabIndex = 25;
            // 
            // label6
            // 
            label6.Anchor = AnchorStyles.Left;
            label6.AutoSize = true;
            label6.Location = new Point(4, 14);
            label6.Margin = new Padding(4, 0, 4, 0);
            label6.Name = "label6";
            label6.Size = new Size(86, 21);
            label6.TabIndex = 31;
            label6.Text = "E-mail cím:";
            // 
            // tableLayoutPanel6
            // 
            tableLayoutPanel6.ColumnCount = 2;
            tableLayoutPanel6.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel6.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel6.Controls.Add(label7, 0, 0);
            tableLayoutPanel6.Controls.Add(CBBOsztaly, 1, 0);
            tableLayoutPanel6.Dock = DockStyle.Top;
            tableLayoutPanel6.Location = new Point(10, 260);
            tableLayoutPanel6.Name = "tableLayoutPanel6";
            tableLayoutPanel6.RowCount = 1;
            tableLayoutPanel6.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel6.Size = new Size(684, 50);
            tableLayoutPanel6.TabIndex = 41;
            // 
            // label7
            // 
            label7.Anchor = AnchorStyles.Left;
            label7.AutoSize = true;
            label7.Location = new Point(4, 14);
            label7.Margin = new Padding(4, 0, 4, 0);
            label7.Name = "label7";
            label7.Size = new Size(64, 21);
            label7.TabIndex = 32;
            label7.Text = "Osztály:";
            // 
            // CBBOsztaly
            // 
            CBBOsztaly.Anchor = AnchorStyles.Left;
            CBBOsztaly.DropDownStyle = ComboBoxStyle.DropDownList;
            CBBOsztaly.FormattingEnabled = true;
            CBBOsztaly.Location = new Point(346, 13);
            CBBOsztaly.Margin = new Padding(4);
            CBBOsztaly.Name = "CBBOsztaly";
            CBBOsztaly.Size = new Size(241, 29);
            CBBOsztaly.TabIndex = 24;
            // 
            // tableLayoutPanel5
            // 
            tableLayoutPanel5.ColumnCount = 2;
            tableLayoutPanel5.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel5.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel5.Controls.Add(label5, 0, 0);
            tableLayoutPanel5.Controls.Add(TxtAnyja, 1, 0);
            tableLayoutPanel5.Dock = DockStyle.Top;
            tableLayoutPanel5.Location = new Point(10, 210);
            tableLayoutPanel5.Name = "tableLayoutPanel5";
            tableLayoutPanel5.RowCount = 1;
            tableLayoutPanel5.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel5.Size = new Size(684, 50);
            tableLayoutPanel5.TabIndex = 40;
            // 
            // label5
            // 
            label5.Anchor = AnchorStyles.Left;
            label5.AutoSize = true;
            label5.Location = new Point(4, 14);
            label5.Margin = new Padding(4, 0, 4, 0);
            label5.Name = "label5";
            label5.Size = new Size(89, 21);
            label5.TabIndex = 30;
            label5.Text = "Anyja neve:";
            // 
            // TxtAnyja
            // 
            TxtAnyja.Anchor = AnchorStyles.Left;
            TxtAnyja.Location = new Point(346, 10);
            TxtAnyja.Margin = new Padding(4);
            TxtAnyja.MaxLength = 45;
            TxtAnyja.Name = "TxtAnyja";
            TxtAnyja.Size = new Size(241, 29);
            TxtAnyja.TabIndex = 23;
            // 
            // tableLayoutPanel4
            // 
            tableLayoutPanel4.ColumnCount = 2;
            tableLayoutPanel4.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.Controls.Add(label4, 0, 0);
            tableLayoutPanel4.Controls.Add(TxtSzulhely, 1, 0);
            tableLayoutPanel4.Dock = DockStyle.Top;
            tableLayoutPanel4.Location = new Point(10, 160);
            tableLayoutPanel4.Name = "tableLayoutPanel4";
            tableLayoutPanel4.RowCount = 1;
            tableLayoutPanel4.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.Size = new Size(684, 50);
            tableLayoutPanel4.TabIndex = 39;
            // 
            // label4
            // 
            label4.Anchor = AnchorStyles.Left;
            label4.AutoSize = true;
            label4.Location = new Point(4, 14);
            label4.Margin = new Padding(4, 0, 4, 0);
            label4.Name = "label4";
            label4.Size = new Size(107, 21);
            label4.TabIndex = 29;
            label4.Text = "Születési hely:";
            // 
            // TxtSzulhely
            // 
            TxtSzulhely.Anchor = AnchorStyles.Left;
            TxtSzulhely.Location = new Point(346, 10);
            TxtSzulhely.Margin = new Padding(4);
            TxtSzulhely.MaxLength = 45;
            TxtSzulhely.Name = "TxtSzulhely";
            TxtSzulhely.Size = new Size(241, 29);
            TxtSzulhely.TabIndex = 22;
            // 
            // tableLayoutPanel3
            // 
            tableLayoutPanel3.ColumnCount = 2;
            tableLayoutPanel3.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.Controls.Add(label3, 0, 0);
            tableLayoutPanel3.Controls.Add(DateTPSzuldatum, 1, 0);
            tableLayoutPanel3.Dock = DockStyle.Top;
            tableLayoutPanel3.Location = new Point(10, 110);
            tableLayoutPanel3.Name = "tableLayoutPanel3";
            tableLayoutPanel3.RowCount = 1;
            tableLayoutPanel3.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.Size = new Size(684, 50);
            tableLayoutPanel3.TabIndex = 38;
            // 
            // label3
            // 
            label3.Anchor = AnchorStyles.Left;
            label3.AutoSize = true;
            label3.Location = new Point(4, 14);
            label3.Margin = new Padding(4, 0, 4, 0);
            label3.Name = "label3";
            label3.Size = new Size(100, 21);
            label3.TabIndex = 28;
            label3.Text = "Születési idő:";
            // 
            // DateTPSzuldatum
            // 
            DateTPSzuldatum.Anchor = AnchorStyles.Left;
            DateTPSzuldatum.CustomFormat = "yyyy - MM - dd";
            DateTPSzuldatum.Format = DateTimePickerFormat.Custom;
            DateTPSzuldatum.Location = new Point(346, 10);
            DateTPSzuldatum.Margin = new Padding(4);
            DateTPSzuldatum.Name = "DateTPSzuldatum";
            DateTPSzuldatum.Size = new Size(241, 29);
            DateTPSzuldatum.TabIndex = 21;
            // 
            // tableLayoutPanel2
            // 
            tableLayoutPanel2.ColumnCount = 2;
            tableLayoutPanel2.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.Controls.Add(label2, 0, 0);
            tableLayoutPanel2.Controls.Add(TxtNev, 1, 0);
            tableLayoutPanel2.Dock = DockStyle.Top;
            tableLayoutPanel2.Location = new Point(10, 60);
            tableLayoutPanel2.Name = "tableLayoutPanel2";
            tableLayoutPanel2.RowCount = 1;
            tableLayoutPanel2.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.Size = new Size(684, 50);
            tableLayoutPanel2.TabIndex = 37;
            // 
            // label2
            // 
            label2.Anchor = AnchorStyles.Left;
            label2.AutoSize = true;
            label2.Location = new Point(4, 14);
            label2.Margin = new Padding(4, 0, 4, 0);
            label2.Name = "label2";
            label2.Size = new Size(41, 21);
            label2.TabIndex = 27;
            label2.Text = "Név:";
            // 
            // TxtNev
            // 
            TxtNev.Anchor = AnchorStyles.Left;
            TxtNev.Location = new Point(346, 10);
            TxtNev.Margin = new Padding(4);
            TxtNev.MaxLength = 45;
            TxtNev.Name = "TxtNev";
            TxtNev.Size = new Size(241, 29);
            TxtNev.TabIndex = 20;
            // 
            // tableLayoutPanel1
            // 
            tableLayoutPanel1.ColumnCount = 2;
            tableLayoutPanel1.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.Controls.Add(label1, 0, 0);
            tableLayoutPanel1.Controls.Add(TxtOktazon, 1, 0);
            tableLayoutPanel1.Dock = DockStyle.Top;
            tableLayoutPanel1.Location = new Point(10, 10);
            tableLayoutPanel1.Name = "tableLayoutPanel1";
            tableLayoutPanel1.RowCount = 1;
            tableLayoutPanel1.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.Size = new Size(684, 50);
            tableLayoutPanel1.TabIndex = 36;
            // 
            // label1
            // 
            label1.Anchor = AnchorStyles.Left;
            label1.AutoSize = true;
            label1.Location = new Point(4, 14);
            label1.Margin = new Padding(4, 0, 4, 0);
            label1.Name = "label1";
            label1.Size = new Size(141, 21);
            label1.TabIndex = 26;
            label1.Text = "Oktatási azonosító:";
            // 
            // TxtOktazon
            // 
            TxtOktazon.Anchor = AnchorStyles.Left;
            TxtOktazon.Location = new Point(346, 10);
            TxtOktazon.Margin = new Padding(4);
            TxtOktazon.MaxLength = 11;
            TxtOktazon.Name = "TxtOktazon";
            TxtOktazon.Size = new Size(241, 29);
            TxtOktazon.TabIndex = 19;
            // 
            // FrmFelDiak
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
            Name = "FrmFelDiak";
            StartPosition = FormStartPosition.CenterParent;
            Text = "Diák felvétele";
            panel1.ResumeLayout(false);
            panel1.PerformLayout();
            panel2.ResumeLayout(false);
            tableLayoutPanel9.ResumeLayout(false);
            tableLayoutPanel9.PerformLayout();
            tableLayoutPanel8.ResumeLayout(false);
            tableLayoutPanel8.PerformLayout();
            tableLayoutPanel7.ResumeLayout(false);
            tableLayoutPanel7.PerformLayout();
            tableLayoutPanel6.ResumeLayout(false);
            tableLayoutPanel6.PerformLayout();
            tableLayoutPanel5.ResumeLayout(false);
            tableLayoutPanel5.PerformLayout();
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
        private Label LabelCim;
        private Panel panel2;
        private TableLayoutPanel tableLayoutPanel1;
        private Label label1;
        private TextBox TxtOktazon;
        private Label LblHiba;
        private Button BtnElvet;
        private Button BtnMentes;
        private Label label7;
        private Label label6;
        private Label label5;
        private Label label4;
        private Label label3;
        private Label label2;
        private ComboBox CBBOsztaly;
        private TextBox TxtEmail;
        private DateTimePicker DateTPSzuldatum;
        private TextBox TxtSzulhely;
        private TextBox TxtAnyja;
        private TextBox TxtNev;
        private TableLayoutPanel tableLayoutPanel9;
        private TableLayoutPanel tableLayoutPanel8;
        private TableLayoutPanel tableLayoutPanel7;
        private TableLayoutPanel tableLayoutPanel6;
        private TableLayoutPanel tableLayoutPanel5;
        private TableLayoutPanel tableLayoutPanel4;
        private TableLayoutPanel tableLayoutPanel3;
        private TableLayoutPanel tableLayoutPanel2;
    }
}