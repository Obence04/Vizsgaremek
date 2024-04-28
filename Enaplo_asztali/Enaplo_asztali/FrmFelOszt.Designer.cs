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
            label1 = new Label();
            label2 = new Label();
            CBBOsztFonok = new ComboBox();
            BtnMentes = new Button();
            BtnElvetes = new Button();
            LblTanar = new Label();
            TxtOsztNev = new TextBox();
            SuspendLayout();
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(12, 15);
            label1.Name = "label1";
            label1.Size = new Size(76, 15);
            label1.TabIndex = 0;
            label1.Text = "Osztály neve:";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(12, 44);
            label2.Name = "label2";
            label2.Size = new Size(79, 15);
            label2.TabIndex = 1;
            label2.Text = "Osztályfőnök:";
            // 
            // CBBOsztFonok
            // 
            CBBOsztFonok.DropDownStyle = ComboBoxStyle.DropDownList;
            CBBOsztFonok.FormattingEnabled = true;
            CBBOsztFonok.Location = new Point(130, 41);
            CBBOsztFonok.Name = "CBBOsztFonok";
            CBBOsztFonok.Size = new Size(188, 23);
            CBBOsztFonok.TabIndex = 3;
            // 
            // BtnMentes
            // 
            BtnMentes.BackColor = Color.FromArgb(192, 255, 192);
            BtnMentes.Location = new Point(12, 242);
            BtnMentes.Name = "BtnMentes";
            BtnMentes.Size = new Size(150, 54);
            BtnMentes.TabIndex = 4;
            BtnMentes.Text = "Mentés";
            BtnMentes.UseVisualStyleBackColor = false;
            BtnMentes.Click += AdatMentes;
            // 
            // BtnElvetes
            // 
            BtnElvetes.BackColor = Color.FromArgb(255, 192, 192);
            BtnElvetes.Location = new Point(168, 242);
            BtnElvetes.Name = "BtnElvetes";
            BtnElvetes.Size = new Size(150, 54);
            BtnElvetes.TabIndex = 5;
            BtnElvetes.Text = "Elvetés";
            BtnElvetes.UseVisualStyleBackColor = false;
            BtnElvetes.Click += Elvet;
            // 
            // LblTanar
            // 
            LblTanar.Font = new Font("Segoe UI Semibold", 12F, FontStyle.Bold, GraphicsUnit.Point, 238);
            LblTanar.ForeColor = Color.Red;
            LblTanar.Location = new Point(12, 81);
            LblTanar.Name = "LblTanar";
            LblTanar.Size = new Size(306, 53);
            LblTanar.TabIndex = 6;
            LblTanar.Text = "hiba";
            LblTanar.Visible = false;
            // 
            // TxtOsztNev
            // 
            TxtOsztNev.Location = new Point(130, 12);
            TxtOsztNev.Name = "TxtOsztNev";
            TxtOsztNev.Size = new Size(188, 23);
            TxtOsztNev.TabIndex = 7;
            TxtOsztNev.TextAlign = HorizontalAlignment.Center;
            // 
            // FrmFelOszt
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(330, 308);
            Controls.Add(TxtOsztNev);
            Controls.Add(LblTanar);
            Controls.Add(BtnElvetes);
            Controls.Add(BtnMentes);
            Controls.Add(CBBOsztFonok);
            Controls.Add(label2);
            Controls.Add(label1);
            FormBorderStyle = FormBorderStyle.FixedSingle;
            Name = "FrmFelOszt";
            StartPosition = FormStartPosition.CenterParent;
            Text = "FrmFelOszt";
            Load += OnLoad;
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label label1;
        private Label label2;
        private ComboBox CBBOsztFonok;
        private Button BtnMentes;
        private Button BtnElvetes;
        private Label LblTanar;
        private TextBox TxtOsztNev;
    }
}