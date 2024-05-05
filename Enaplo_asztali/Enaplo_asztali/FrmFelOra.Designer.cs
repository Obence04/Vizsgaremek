namespace Enaplo_asztali
{
    partial class FrmFelOra
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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(FrmFelOra));
            panel1 = new Panel();
            label6 = new Label();
            panel2 = new Panel();
            tableLayoutPanel7 = new TableLayoutPanel();
            BtnMentes = new Button();
            BtnElvet = new Button();
            tableLayoutPanel6 = new TableLayoutPanel();
            LblHiba = new Label();
            tableLayoutPanel5 = new TableLayoutPanel();
            label5 = new Label();
            TxbxTerem = new TextBox();
            tableLayoutPanel4 = new TableLayoutPanel();
            label4 = new Label();
            CbbTantargy = new ComboBox();
            tableLayoutPanel3 = new TableLayoutPanel();
            label3 = new Label();
            NudOraSzam = new NumericUpDown();
            tableLayoutPanel2 = new TableLayoutPanel();
            label2 = new Label();
            DtpOra = new DateTimePicker();
            tableLayoutPanel1 = new TableLayoutPanel();
            label1 = new Label();
            CbbOsztaly = new ComboBox();
            panel1.SuspendLayout();
            panel2.SuspendLayout();
            tableLayoutPanel7.SuspendLayout();
            tableLayoutPanel6.SuspendLayout();
            tableLayoutPanel5.SuspendLayout();
            tableLayoutPanel4.SuspendLayout();
            tableLayoutPanel3.SuspendLayout();
            ((System.ComponentModel.ISupportInitialize)NudOraSzam).BeginInit();
            tableLayoutPanel2.SuspendLayout();
            tableLayoutPanel1.SuspendLayout();
            SuspendLayout();
            // 
            // panel1
            // 
            panel1.BackColor = Color.Transparent;
            panel1.Controls.Add(label6);
            panel1.Dock = DockStyle.Top;
            panel1.Location = new Point(0, 0);
            panel1.Name = "panel1";
            panel1.Size = new Size(704, 70);
            panel1.TabIndex = 13;
            // 
            // label6
            // 
            label6.Anchor = AnchorStyles.None;
            label6.AutoSize = true;
            label6.Font = new Font("Segoe UI", 15F, FontStyle.Bold, GraphicsUnit.Point, 238);
            label6.Location = new Point(270, 21);
            label6.Name = "label6";
            label6.Size = new Size(146, 28);
            label6.TabIndex = 0;
            label6.Text = "Órák felvétele";
            // 
            // panel2
            // 
            panel2.BackColor = Color.Transparent;
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
            panel2.TabIndex = 14;
            // 
            // tableLayoutPanel7
            // 
            tableLayoutPanel7.ColumnCount = 2;
            tableLayoutPanel7.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel7.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel7.Controls.Add(BtnMentes, 0, 0);
            tableLayoutPanel7.Controls.Add(BtnElvet, 1, 0);
            tableLayoutPanel7.Dock = DockStyle.Bottom;
            tableLayoutPanel7.Location = new Point(10, 431);
            tableLayoutPanel7.Name = "tableLayoutPanel7";
            tableLayoutPanel7.RowCount = 1;
            tableLayoutPanel7.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel7.Size = new Size(684, 50);
            tableLayoutPanel7.TabIndex = 27;
            // 
            // BtnMentes
            // 
            BtnMentes.Anchor = AnchorStyles.None;
            BtnMentes.BackColor = Color.FromArgb(192, 255, 192);
            BtnMentes.Location = new Point(4, 4);
            BtnMentes.Margin = new Padding(4);
            BtnMentes.Name = "BtnMentes";
            BtnMentes.Size = new Size(334, 42);
            BtnMentes.TabIndex = 10;
            BtnMentes.Text = "Mentés";
            BtnMentes.UseVisualStyleBackColor = false;
            // 
            // BtnElvet
            // 
            BtnElvet.Anchor = AnchorStyles.None;
            BtnElvet.BackColor = Color.FromArgb(255, 192, 192);
            BtnElvet.Location = new Point(346, 4);
            BtnElvet.Margin = new Padding(4);
            BtnElvet.Name = "BtnElvet";
            BtnElvet.Size = new Size(334, 42);
            BtnElvet.TabIndex = 11;
            BtnElvet.Text = "Elvetés";
            BtnElvet.UseVisualStyleBackColor = false;
            // 
            // tableLayoutPanel6
            // 
            tableLayoutPanel6.ColumnCount = 1;
            tableLayoutPanel6.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel6.Controls.Add(LblHiba, 0, 0);
            tableLayoutPanel6.Dock = DockStyle.Fill;
            tableLayoutPanel6.Location = new Point(10, 260);
            tableLayoutPanel6.Name = "tableLayoutPanel6";
            tableLayoutPanel6.RowCount = 1;
            tableLayoutPanel6.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel6.Size = new Size(684, 221);
            tableLayoutPanel6.TabIndex = 26;
            // 
            // LblHiba
            // 
            LblHiba.Anchor = AnchorStyles.Top;
            LblHiba.AutoSize = true;
            LblHiba.BackColor = Color.Silver;
            LblHiba.Font = new Font("Segoe UI Semibold", 13F, FontStyle.Bold, GraphicsUnit.Point, 238);
            LblHiba.ForeColor = Color.Red;
            LblHiba.Location = new Point(318, 20);
            LblHiba.Margin = new Padding(4, 20, 4, 0);
            LblHiba.Name = "LblHiba";
            LblHiba.Size = new Size(47, 25);
            LblHiba.TabIndex = 12;
            LblHiba.Text = "hiba";
            LblHiba.Visible = false;
            // 
            // tableLayoutPanel5
            // 
            tableLayoutPanel5.ColumnCount = 2;
            tableLayoutPanel5.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel5.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel5.Controls.Add(label5, 0, 0);
            tableLayoutPanel5.Controls.Add(TxbxTerem, 1, 0);
            tableLayoutPanel5.Dock = DockStyle.Top;
            tableLayoutPanel5.Location = new Point(10, 210);
            tableLayoutPanel5.Name = "tableLayoutPanel5";
            tableLayoutPanel5.RowCount = 1;
            tableLayoutPanel5.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel5.Size = new Size(684, 50);
            tableLayoutPanel5.TabIndex = 25;
            // 
            // label5
            // 
            label5.Anchor = AnchorStyles.Left;
            label5.AutoSize = true;
            label5.Location = new Point(4, 14);
            label5.Margin = new Padding(4, 0, 4, 0);
            label5.Name = "label5";
            label5.Size = new Size(52, 21);
            label5.TabIndex = 5;
            label5.Text = "Terem";
            // 
            // TxbxTerem
            // 
            TxbxTerem.Anchor = AnchorStyles.Left;
            TxbxTerem.Location = new Point(346, 10);
            TxbxTerem.Margin = new Padding(4);
            TxbxTerem.Name = "TxbxTerem";
            TxbxTerem.Size = new Size(241, 29);
            TxbxTerem.TabIndex = 9;
            // 
            // tableLayoutPanel4
            // 
            tableLayoutPanel4.ColumnCount = 2;
            tableLayoutPanel4.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.Controls.Add(label4, 0, 0);
            tableLayoutPanel4.Controls.Add(CbbTantargy, 1, 0);
            tableLayoutPanel4.Dock = DockStyle.Top;
            tableLayoutPanel4.Location = new Point(10, 160);
            tableLayoutPanel4.Name = "tableLayoutPanel4";
            tableLayoutPanel4.RowCount = 1;
            tableLayoutPanel4.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.Size = new Size(684, 50);
            tableLayoutPanel4.TabIndex = 24;
            // 
            // label4
            // 
            label4.Anchor = AnchorStyles.Left;
            label4.AutoSize = true;
            label4.Location = new Point(4, 14);
            label4.Margin = new Padding(4, 0, 4, 0);
            label4.Name = "label4";
            label4.Size = new Size(72, 21);
            label4.TabIndex = 4;
            label4.Text = "Tantárgy:";
            // 
            // CbbTantargy
            // 
            CbbTantargy.Anchor = AnchorStyles.Left;
            CbbTantargy.DropDownStyle = ComboBoxStyle.DropDownList;
            CbbTantargy.FormattingEnabled = true;
            CbbTantargy.Location = new Point(346, 13);
            CbbTantargy.Margin = new Padding(4);
            CbbTantargy.Name = "CbbTantargy";
            CbbTantargy.Size = new Size(334, 29);
            CbbTantargy.TabIndex = 8;
            // 
            // tableLayoutPanel3
            // 
            tableLayoutPanel3.ColumnCount = 2;
            tableLayoutPanel3.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.Controls.Add(label3, 0, 0);
            tableLayoutPanel3.Controls.Add(NudOraSzam, 1, 0);
            tableLayoutPanel3.Dock = DockStyle.Top;
            tableLayoutPanel3.Location = new Point(10, 110);
            tableLayoutPanel3.Name = "tableLayoutPanel3";
            tableLayoutPanel3.RowCount = 1;
            tableLayoutPanel3.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.Size = new Size(684, 50);
            tableLayoutPanel3.TabIndex = 23;
            // 
            // label3
            // 
            label3.Anchor = AnchorStyles.Left;
            label3.AutoSize = true;
            label3.Location = new Point(4, 14);
            label3.Margin = new Padding(4, 0, 4, 0);
            label3.Name = "label3";
            label3.Size = new Size(75, 21);
            label3.TabIndex = 3;
            label3.Text = "Óraszám:";
            // 
            // NudOraSzam
            // 
            NudOraSzam.Anchor = AnchorStyles.Left;
            NudOraSzam.Location = new Point(346, 10);
            NudOraSzam.Margin = new Padding(4);
            NudOraSzam.Maximum = new decimal(new int[] { 10, 0, 0, 0 });
            NudOraSzam.Minimum = new decimal(new int[] { 1, 0, 0, 0 });
            NudOraSzam.Name = "NudOraSzam";
            NudOraSzam.Size = new Size(241, 29);
            NudOraSzam.TabIndex = 7;
            NudOraSzam.Value = new decimal(new int[] { 1, 0, 0, 0 });
            // 
            // tableLayoutPanel2
            // 
            tableLayoutPanel2.ColumnCount = 2;
            tableLayoutPanel2.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.Controls.Add(label2, 0, 0);
            tableLayoutPanel2.Controls.Add(DtpOra, 1, 0);
            tableLayoutPanel2.Dock = DockStyle.Top;
            tableLayoutPanel2.Location = new Point(10, 60);
            tableLayoutPanel2.Name = "tableLayoutPanel2";
            tableLayoutPanel2.RowCount = 1;
            tableLayoutPanel2.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.Size = new Size(684, 50);
            tableLayoutPanel2.TabIndex = 22;
            // 
            // label2
            // 
            label2.Anchor = AnchorStyles.Left;
            label2.AutoSize = true;
            label2.Location = new Point(4, 14);
            label2.Margin = new Padding(4, 0, 4, 0);
            label2.Name = "label2";
            label2.Size = new Size(60, 21);
            label2.TabIndex = 2;
            label2.Text = "Dátum:";
            // 
            // DtpOra
            // 
            DtpOra.Anchor = AnchorStyles.Left;
            DtpOra.CustomFormat = "yyyy-MM-dd";
            DtpOra.Format = DateTimePickerFormat.Custom;
            DtpOra.Location = new Point(346, 10);
            DtpOra.Margin = new Padding(4);
            DtpOra.Name = "DtpOra";
            DtpOra.Size = new Size(241, 29);
            DtpOra.TabIndex = 6;
            // 
            // tableLayoutPanel1
            // 
            tableLayoutPanel1.ColumnCount = 2;
            tableLayoutPanel1.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.Controls.Add(label1, 0, 0);
            tableLayoutPanel1.Controls.Add(CbbOsztaly, 1, 0);
            tableLayoutPanel1.Dock = DockStyle.Top;
            tableLayoutPanel1.Location = new Point(10, 10);
            tableLayoutPanel1.Name = "tableLayoutPanel1";
            tableLayoutPanel1.RowCount = 1;
            tableLayoutPanel1.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.Size = new Size(684, 50);
            tableLayoutPanel1.TabIndex = 21;
            // 
            // label1
            // 
            label1.Anchor = AnchorStyles.Left;
            label1.AutoSize = true;
            label1.Location = new Point(4, 14);
            label1.Margin = new Padding(4, 0, 4, 0);
            label1.Name = "label1";
            label1.Size = new Size(64, 21);
            label1.TabIndex = 1;
            label1.Text = "Osztály:";
            // 
            // CbbOsztaly
            // 
            CbbOsztaly.Anchor = AnchorStyles.Left;
            CbbOsztaly.DropDownStyle = ComboBoxStyle.DropDownList;
            CbbOsztaly.FormattingEnabled = true;
            CbbOsztaly.Location = new Point(346, 13);
            CbbOsztaly.Margin = new Padding(4);
            CbbOsztaly.Name = "CbbOsztaly";
            CbbOsztaly.Size = new Size(241, 29);
            CbbOsztaly.TabIndex = 0;
            // 
            // FrmFelOra
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
            Name = "FrmFelOra";
            StartPosition = FormStartPosition.CenterParent;
            Text = "Órarend felvétele";
            panel1.ResumeLayout(false);
            panel1.PerformLayout();
            panel2.ResumeLayout(false);
            tableLayoutPanel7.ResumeLayout(false);
            tableLayoutPanel6.ResumeLayout(false);
            tableLayoutPanel6.PerformLayout();
            tableLayoutPanel5.ResumeLayout(false);
            tableLayoutPanel5.PerformLayout();
            tableLayoutPanel4.ResumeLayout(false);
            tableLayoutPanel4.PerformLayout();
            tableLayoutPanel3.ResumeLayout(false);
            tableLayoutPanel3.PerformLayout();
            ((System.ComponentModel.ISupportInitialize)NudOraSzam).EndInit();
            tableLayoutPanel2.ResumeLayout(false);
            tableLayoutPanel2.PerformLayout();
            tableLayoutPanel1.ResumeLayout(false);
            tableLayoutPanel1.PerformLayout();
            ResumeLayout(false);
        }

        #endregion
        private Panel panel1;
        private Label label6;
        private Panel panel2;
        private TableLayoutPanel tableLayoutPanel7;
        private Button BtnMentes;
        private Button BtnElvet;
        private TableLayoutPanel tableLayoutPanel6;
        private Label LblHiba;
        private TableLayoutPanel tableLayoutPanel5;
        private Label label5;
        private TextBox TxbxTerem;
        private TableLayoutPanel tableLayoutPanel4;
        private Label label4;
        private ComboBox CbbTantargy;
        private TableLayoutPanel tableLayoutPanel3;
        private Label label3;
        private NumericUpDown NudOraSzam;
        private TableLayoutPanel tableLayoutPanel2;
        private Label label2;
        private DateTimePicker DtpOra;
        private TableLayoutPanel tableLayoutPanel1;
        private Label label1;
        private ComboBox CbbOsztaly;
    }
}