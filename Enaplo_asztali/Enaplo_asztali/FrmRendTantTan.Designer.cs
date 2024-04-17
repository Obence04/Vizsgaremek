namespace Enaplo_asztali
{
    partial class FrmRendTantTan
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
            CbbxTanarok = new ComboBox();
            CbbxTant = new ComboBox();
            BtnAdatMentes = new Button();
            BtnElvet = new Button();
            LblHiba = new Label();
            SuspendLayout();
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(12, 9);
            label1.Name = "label1";
            label1.Size = new Size(51, 15);
            label1.TabIndex = 0;
            label1.Text = "Tanárok:";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(12, 45);
            label2.Name = "label2";
            label2.Size = new Size(67, 15);
            label2.TabIndex = 1;
            label2.Text = "Tantárgyak:";
            // 
            // CbbxTanarok
            // 
            CbbxTanarok.DropDownStyle = ComboBoxStyle.DropDownList;
            CbbxTanarok.FormattingEnabled = true;
            CbbxTanarok.Location = new Point(130, 6);
            CbbxTanarok.Name = "CbbxTanarok";
            CbbxTanarok.Size = new Size(188, 23);
            CbbxTanarok.TabIndex = 2;
            // 
            // CbbxTant
            // 
            CbbxTant.DropDownStyle = ComboBoxStyle.DropDownList;
            CbbxTant.FormattingEnabled = true;
            CbbxTant.Location = new Point(130, 42);
            CbbxTant.Name = "CbbxTant";
            CbbxTant.Size = new Size(188, 23);
            CbbxTant.TabIndex = 3;
            // 
            // BtnAdatMentes
            // 
            BtnAdatMentes.BackColor = Color.FromArgb(192, 255, 192);
            BtnAdatMentes.Location = new Point(12, 242);
            BtnAdatMentes.Name = "BtnAdatMentes";
            BtnAdatMentes.Size = new Size(150, 54);
            BtnAdatMentes.TabIndex = 4;
            BtnAdatMentes.Text = "Mentés";
            BtnAdatMentes.UseVisualStyleBackColor = false;
            // 
            // BtnElvet
            // 
            BtnElvet.BackColor = Color.FromArgb(255, 192, 192);
            BtnElvet.Location = new Point(168, 242);
            BtnElvet.Name = "BtnElvet";
            BtnElvet.Size = new Size(150, 54);
            BtnElvet.TabIndex = 5;
            BtnElvet.Text = "Elvetés";
            BtnElvet.UseVisualStyleBackColor = false;
            // 
            // LblHiba
            // 
            LblHiba.Font = new Font("Segoe UI Semibold", 12F, FontStyle.Bold, GraphicsUnit.Point, 238);
            LblHiba.ForeColor = Color.Red;
            LblHiba.Location = new Point(12, 110);
            LblHiba.Name = "LblHiba";
            LblHiba.Size = new Size(306, 39);
            LblHiba.TabIndex = 6;
            LblHiba.Text = "hiba";
            LblHiba.Visible = false;
            // 
            // FrmRendTantTan
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(330, 308);
            Controls.Add(LblHiba);
            Controls.Add(BtnElvet);
            Controls.Add(BtnAdatMentes);
            Controls.Add(CbbxTant);
            Controls.Add(CbbxTanarok);
            Controls.Add(label2);
            Controls.Add(label1);
            FormBorderStyle = FormBorderStyle.FixedSingle;
            Name = "FrmRendTantTan";
            StartPosition = FormStartPosition.CenterParent;
            Text = "FrmRendTantTan";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label label1;
        private Label label2;
        private ComboBox CbbxTanarok;
        private ComboBox CbbxTant;
        private Button BtnAdatMentes;
        private Button BtnElvet;
        private Label LblHiba;
    }
}