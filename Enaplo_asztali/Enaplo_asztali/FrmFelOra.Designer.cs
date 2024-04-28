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
            CbbOsztaly = new ComboBox();
            label1 = new Label();
            label2 = new Label();
            label3 = new Label();
            label4 = new Label();
            label5 = new Label();
            DtpOra = new DateTimePicker();
            NudOraSzam = new NumericUpDown();
            CbbTantargy = new ComboBox();
            TxbxTerem = new TextBox();
            BtnMentes = new Button();
            BtnElvet = new Button();
            LblHiba = new Label();
            ((System.ComponentModel.ISupportInitialize)NudOraSzam).BeginInit();
            SuspendLayout();
            // 
            // CbbOsztaly
            // 
            CbbOsztaly.DropDownStyle = ComboBoxStyle.DropDownList;
            CbbOsztaly.FormattingEnabled = true;
            CbbOsztaly.Location = new Point(130, 6);
            CbbOsztaly.Name = "CbbOsztaly";
            CbbOsztaly.Size = new Size(188, 23);
            CbbOsztaly.TabIndex = 0;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(12, 9);
            label1.Name = "label1";
            label1.Size = new Size(48, 15);
            label1.TabIndex = 1;
            label1.Text = "Osztály:";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(12, 42);
            label2.Name = "label2";
            label2.Size = new Size(46, 15);
            label2.TabIndex = 2;
            label2.Text = "Dátum:";
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Location = new Point(12, 81);
            label3.Name = "label3";
            label3.Size = new Size(56, 15);
            label3.TabIndex = 3;
            label3.Text = "Óraszám:";
            // 
            // label4
            // 
            label4.AutoSize = true;
            label4.Location = new Point(12, 119);
            label4.Name = "label4";
            label4.Size = new Size(55, 15);
            label4.TabIndex = 4;
            label4.Text = "Tantárgy:";
            // 
            // label5
            // 
            label5.AutoSize = true;
            label5.Location = new Point(12, 160);
            label5.Name = "label5";
            label5.Size = new Size(39, 15);
            label5.TabIndex = 5;
            label5.Text = "Terem";
            // 
            // DtpOra
            // 
            DtpOra.CustomFormat = "yyyy-MM-dd";
            DtpOra.Format = DateTimePickerFormat.Custom;
            DtpOra.Location = new Point(130, 36);
            DtpOra.Name = "DtpOra";
            DtpOra.Size = new Size(188, 23);
            DtpOra.TabIndex = 6;
            // 
            // NudOraSzam
            // 
            NudOraSzam.Location = new Point(130, 79);
            NudOraSzam.Maximum = new decimal(new int[] { 10, 0, 0, 0 });
            NudOraSzam.Minimum = new decimal(new int[] { 1, 0, 0, 0 });
            NudOraSzam.Name = "NudOraSzam";
            NudOraSzam.Size = new Size(188, 23);
            NudOraSzam.TabIndex = 7;
            NudOraSzam.Value = new decimal(new int[] { 1, 0, 0, 0 });
            // 
            // CbbTantargy
            // 
            CbbTantargy.DropDownStyle = ComboBoxStyle.DropDownList;
            CbbTantargy.FormattingEnabled = true;
            CbbTantargy.Location = new Point(130, 116);
            CbbTantargy.Name = "CbbTantargy";
            CbbTantargy.Size = new Size(188, 23);
            CbbTantargy.TabIndex = 8;
            // 
            // TxbxTerem
            // 
            TxbxTerem.Location = new Point(130, 157);
            TxbxTerem.Name = "TxbxTerem";
            TxbxTerem.Size = new Size(188, 23);
            TxbxTerem.TabIndex = 9;
            // 
            // BtnMentes
            // 
            BtnMentes.BackColor = Color.FromArgb(192, 255, 192);
            BtnMentes.Location = new Point(12, 242);
            BtnMentes.Name = "BtnMentes";
            BtnMentes.Size = new Size(150, 54);
            BtnMentes.TabIndex = 10;
            BtnMentes.Text = "Mentés";
            BtnMentes.UseVisualStyleBackColor = false;
            // 
            // BtnElvet
            // 
            BtnElvet.BackColor = Color.FromArgb(255, 192, 192);
            BtnElvet.Location = new Point(168, 242);
            BtnElvet.Name = "BtnElvet";
            BtnElvet.Size = new Size(150, 54);
            BtnElvet.TabIndex = 11;
            BtnElvet.Text = "Elvetés";
            BtnElvet.UseVisualStyleBackColor = false;
            // 
            // LblHiba
            // 
            LblHiba.AutoSize = true;
            LblHiba.Font = new Font("Segoe UI Semibold", 12F, FontStyle.Bold, GraphicsUnit.Point, 238);
            LblHiba.ForeColor = Color.Red;
            LblHiba.Location = new Point(12, 187);
            LblHiba.Name = "LblHiba";
            LblHiba.Size = new Size(41, 21);
            LblHiba.TabIndex = 12;
            LblHiba.Text = "hiba";
            LblHiba.Visible = false;
            // 
            // FrmFelOra
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(330, 308);
            Controls.Add(LblHiba);
            Controls.Add(BtnElvet);
            Controls.Add(BtnMentes);
            Controls.Add(TxbxTerem);
            Controls.Add(CbbTantargy);
            Controls.Add(NudOraSzam);
            Controls.Add(DtpOra);
            Controls.Add(label5);
            Controls.Add(label4);
            Controls.Add(label3);
            Controls.Add(label2);
            Controls.Add(label1);
            Controls.Add(CbbOsztaly);
            FormBorderStyle = FormBorderStyle.FixedSingle;
            Name = "FrmFelOra";
            StartPosition = FormStartPosition.CenterParent;
            Text = "FrmFelOra";
            ((System.ComponentModel.ISupportInitialize)NudOraSzam).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private ComboBox CbbOsztaly;
        private Label label1;
        private Label label2;
        private Label label3;
        private Label label4;
        private Label label5;
        private DateTimePicker DtpOra;
        private NumericUpDown NudOraSzam;
        private ComboBox CbbTantargy;
        private TextBox TxbxTerem;
        private Button BtnMentes;
        private Button BtnElvet;
        private Label LblHiba;
    }
}