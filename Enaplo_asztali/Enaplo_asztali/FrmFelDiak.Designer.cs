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
            TxtOktazon = new TextBox();
            TxtNev = new TextBox();
            TxtLakcim = new TextBox();
            TxtSzulhely = new TextBox();
            DateTPSzuldatum = new DateTimePicker();
            TxtEmail = new TextBox();
            CBBOsztaly = new ComboBox();
            CBUj = new CheckBox();
            TxtUjOsztaly = new TextBox();
            label1 = new Label();
            label2 = new Label();
            label3 = new Label();
            label4 = new Label();
            label5 = new Label();
            label6 = new Label();
            label7 = new Label();
            BtnMentes = new Button();
            BtnElvet = new Button();
            SuspendLayout();
            // 
            // TxtOktazon
            // 
            TxtOktazon.Location = new Point(130, 12);
            TxtOktazon.MaxLength = 11;
            TxtOktazon.Name = "TxtOktazon";
            TxtOktazon.Size = new Size(188, 23);
            TxtOktazon.TabIndex = 0;
            // 
            // TxtNev
            // 
            TxtNev.Location = new Point(130, 41);
            TxtNev.MaxLength = 45;
            TxtNev.Name = "TxtNev";
            TxtNev.Size = new Size(188, 23);
            TxtNev.TabIndex = 1;
            // 
            // TxtLakcim
            // 
            TxtLakcim.Location = new Point(130, 128);
            TxtLakcim.MaxLength = 45;
            TxtLakcim.Name = "TxtLakcim";
            TxtLakcim.Size = new Size(188, 23);
            TxtLakcim.TabIndex = 4;
            // 
            // TxtSzulhely
            // 
            TxtSzulhely.Location = new Point(130, 99);
            TxtSzulhely.MaxLength = 45;
            TxtSzulhely.Name = "TxtSzulhely";
            TxtSzulhely.Size = new Size(188, 23);
            TxtSzulhely.TabIndex = 3;
            // 
            // DateTPSzuldatum
            // 
            DateTPSzuldatum.CustomFormat = "yyyy - MM - dd";
            DateTPSzuldatum.Format = DateTimePickerFormat.Custom;
            DateTPSzuldatum.Location = new Point(130, 70);
            DateTPSzuldatum.Name = "DateTPSzuldatum";
            DateTPSzuldatum.Size = new Size(188, 23);
            DateTPSzuldatum.TabIndex = 2;
            // 
            // TxtEmail
            // 
            TxtEmail.Location = new Point(130, 213);
            TxtEmail.Name = "TxtEmail";
            TxtEmail.Size = new Size(188, 23);
            TxtEmail.TabIndex = 8;
            // 
            // CBBOsztaly
            // 
            CBBOsztaly.DropDownStyle = ComboBoxStyle.DropDownList;
            CBBOsztaly.FormattingEnabled = true;
            CBBOsztaly.Location = new Point(130, 157);
            CBBOsztaly.Name = "CBBOsztaly";
            CBBOsztaly.Size = new Size(188, 23);
            CBBOsztaly.TabIndex = 5;
            // 
            // CBUj
            // 
            CBUj.AutoSize = true;
            CBUj.Location = new Point(13, 186);
            CBUj.Name = "CBUj";
            CBUj.RightToLeft = RightToLeft.No;
            CBUj.Size = new Size(81, 19);
            CBUj.TabIndex = 6;
            CBUj.Text = "Új osztály?";
            CBUj.UseVisualStyleBackColor = true;
            // 
            // TxtUjOsztaly
            // 
            TxtUjOsztaly.Enabled = false;
            TxtUjOsztaly.Location = new Point(130, 184);
            TxtUjOsztaly.MaxLength = 45;
            TxtUjOsztaly.Name = "TxtUjOsztaly";
            TxtUjOsztaly.Size = new Size(188, 23);
            TxtUjOsztaly.TabIndex = 7;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(12, 15);
            label1.Name = "label1";
            label1.Size = new Size(107, 15);
            label1.TabIndex = 9;
            label1.Text = "Oktatási azonosító:";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(12, 44);
            label2.Name = "label2";
            label2.Size = new Size(31, 15);
            label2.TabIndex = 10;
            label2.Text = "Név:";
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Location = new Point(12, 76);
            label3.Name = "label3";
            label3.Size = new Size(75, 15);
            label3.TabIndex = 11;
            label3.Text = "Születési idő:";
            // 
            // label4
            // 
            label4.AutoSize = true;
            label4.Location = new Point(12, 102);
            label4.Name = "label4";
            label4.Size = new Size(80, 15);
            label4.TabIndex = 12;
            label4.Text = "Születési hely:";
            // 
            // label5
            // 
            label5.AutoSize = true;
            label5.Location = new Point(12, 131);
            label5.Name = "label5";
            label5.Size = new Size(68, 15);
            label5.TabIndex = 13;
            label5.Text = "Anyja neve:";
            // 
            // label6
            // 
            label6.AutoSize = true;
            label6.Location = new Point(12, 216);
            label6.Name = "label6";
            label6.Size = new Size(67, 15);
            label6.TabIndex = 14;
            label6.Text = "E-mail cím:";
            // 
            // label7
            // 
            label7.AutoSize = true;
            label7.Location = new Point(12, 160);
            label7.Name = "label7";
            label7.Size = new Size(48, 15);
            label7.TabIndex = 15;
            label7.Text = "Osztály:";
            // 
            // BtnMentes
            // 
            BtnMentes.BackColor = Color.FromArgb(192, 255, 192);
            BtnMentes.Location = new Point(12, 242);
            BtnMentes.Name = "BtnMentes";
            BtnMentes.Size = new Size(150, 54);
            BtnMentes.TabIndex = 16;
            BtnMentes.Text = "Mentés";
            BtnMentes.UseVisualStyleBackColor = false;
            // 
            // BtnElvet
            // 
            BtnElvet.BackColor = Color.FromArgb(255, 192, 192);
            BtnElvet.Location = new Point(168, 242);
            BtnElvet.Name = "BtnElvet";
            BtnElvet.Size = new Size(150, 54);
            BtnElvet.TabIndex = 17;
            BtnElvet.Text = "Elvetés";
            BtnElvet.UseVisualStyleBackColor = false;
            // 
            // FrmFelDiak
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(330, 308);
            Controls.Add(BtnElvet);
            Controls.Add(BtnMentes);
            Controls.Add(label7);
            Controls.Add(label6);
            Controls.Add(label5);
            Controls.Add(label4);
            Controls.Add(label3);
            Controls.Add(label2);
            Controls.Add(label1);
            Controls.Add(TxtUjOsztaly);
            Controls.Add(CBUj);
            Controls.Add(CBBOsztaly);
            Controls.Add(TxtEmail);
            Controls.Add(DateTPSzuldatum);
            Controls.Add(TxtSzulhely);
            Controls.Add(TxtLakcim);
            Controls.Add(TxtNev);
            Controls.Add(TxtOktazon);
            MaximizeBox = false;
            MinimizeBox = false;
            MinimumSize = new Size(346, 347);
            Name = "FrmFelDiak";
            StartPosition = FormStartPosition.CenterParent;
            Text = "FrmFelDiak";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TextBox TxtOktazon;
        private TextBox TxtNev;
        private TextBox TxtLakcim;
        private TextBox TxtSzulhely;
        private DateTimePicker DateTPSzuldatum;
        private TextBox TxtEmail;
        private ComboBox CBBOsztaly;
        private CheckBox CBUj;
        private TextBox TxtUjOsztaly;
        private Label label1;
        private Label label2;
        private Label label3;
        private Label label4;
        private Label label5;
        private Label label6;
        private Label label7;
        private Button BtnMentes;
        private Button BtnElvet;
    }
}