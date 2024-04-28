namespace Enaplo_asztali
{
    partial class FrmTanarFel
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
            label3 = new Label();
            BtnMentes = new Button();
            BtnElvet = new Button();
            TxtTanarNev = new TextBox();
            TxtEmail = new TextBox();
            TxtFelNev = new TextBox();
            SuspendLayout();
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(12, 9);
            label1.Name = "label1";
            label1.Size = new Size(66, 15);
            label1.TabIndex = 0;
            label1.Text = "Tanár neve:";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(12, 47);
            label2.Name = "label2";
            label2.Size = new Size(67, 15);
            label2.TabIndex = 1;
            label2.Text = "E-mail cím:";
            // 
            // label3
            // 
            label3.AutoSize = true;
            label3.Location = new Point(12, 89);
            label3.Name = "label3";
            label3.Size = new Size(90, 15);
            label3.TabIndex = 2;
            label3.Text = "Felhasználónév:";
            // 
            // BtnMentes
            // 
            BtnMentes.BackColor = Color.FromArgb(192, 255, 192);
            BtnMentes.Location = new Point(12, 242);
            BtnMentes.Name = "BtnMentes";
            BtnMentes.Size = new Size(150, 54);
            BtnMentes.TabIndex = 3;
            BtnMentes.Text = "Mentés";
            BtnMentes.UseVisualStyleBackColor = false;
            // 
            // BtnElvet
            // 
            BtnElvet.BackColor = Color.FromArgb(255, 192, 192);
            BtnElvet.Location = new Point(168, 242);
            BtnElvet.Name = "BtnElvet";
            BtnElvet.Size = new Size(150, 54);
            BtnElvet.TabIndex = 4;
            BtnElvet.Text = "Elvetés";
            BtnElvet.UseVisualStyleBackColor = false;
            // 
            // TxtTanarNev
            // 
            TxtTanarNev.Location = new Point(130, 6);
            TxtTanarNev.Name = "TxtTanarNev";
            TxtTanarNev.Size = new Size(188, 23);
            TxtTanarNev.TabIndex = 5;
            // 
            // TxtEmail
            // 
            TxtEmail.Location = new Point(130, 44);
            TxtEmail.Name = "TxtEmail";
            TxtEmail.Size = new Size(188, 23);
            TxtEmail.TabIndex = 6;
            // 
            // TxtFelNev
            // 
            TxtFelNev.Location = new Point(130, 86);
            TxtFelNev.Name = "TxtFelNev";
            TxtFelNev.Size = new Size(188, 23);
            TxtFelNev.TabIndex = 7;
            // 
            // FrmTanarFel
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(330, 308);
            Controls.Add(TxtFelNev);
            Controls.Add(TxtEmail);
            Controls.Add(TxtTanarNev);
            Controls.Add(BtnElvet);
            Controls.Add(BtnMentes);
            Controls.Add(label3);
            Controls.Add(label2);
            Controls.Add(label1);
            FormBorderStyle = FormBorderStyle.FixedSingle;
            Name = "FrmTanarFel";
            StartPosition = FormStartPosition.CenterParent;
            Text = "FrmTanarFel";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label label1;
        private Label label2;
        private Label label3;
        private Button BtnMentes;
        private Button BtnElvet;
        private TextBox TxtTanarNev;
        private TextBox TxtEmail;
        private TextBox TxtFelNev;
    }
}