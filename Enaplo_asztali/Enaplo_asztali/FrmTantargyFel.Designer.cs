﻿namespace Enaplo_asztali
{
    partial class FrmTantargyFel
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
            TxbxTant = new TextBox();
            label1 = new Label();
            BtnMentes = new Button();
            BtnElvet = new Button();
            SuspendLayout();
            // 
            // TxbxTant
            // 
            TxbxTant.Location = new Point(130, 12);
            TxbxTant.Name = "TxbxTant";
            TxbxTant.Size = new Size(188, 23);
            TxbxTant.TabIndex = 0;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(12, 15);
            label1.Name = "label1";
            label1.Size = new Size(55, 15);
            label1.TabIndex = 1;
            label1.Text = "Tantárgy:";
            // 
            // BtnMentes
            // 
            BtnMentes.BackColor = Color.FromArgb(192, 255, 192);
            BtnMentes.Location = new Point(12, 242);
            BtnMentes.Name = "BtnMentes";
            BtnMentes.Size = new Size(150, 54);
            BtnMentes.TabIndex = 2;
            BtnMentes.Text = "Mentés";
            BtnMentes.UseVisualStyleBackColor = false;
            // 
            // BtnElvet
            // 
            BtnElvet.BackColor = Color.FromArgb(255, 192, 192);
            BtnElvet.Location = new Point(168, 242);
            BtnElvet.Name = "BtnElvet";
            BtnElvet.Size = new Size(150, 54);
            BtnElvet.TabIndex = 3;
            BtnElvet.Text = "Elvetés";
            BtnElvet.UseVisualStyleBackColor = false;
            // 
            // FrmTantargyFel
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(330, 308);
            Controls.Add(BtnElvet);
            Controls.Add(BtnMentes);
            Controls.Add(label1);
            Controls.Add(TxbxTant);
            FormBorderStyle = FormBorderStyle.FixedSingle;
            Name = "FrmTantargyFel";
            StartPosition = FormStartPosition.CenterParent;
            Text = "TantargyFel";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private TextBox TxbxTant;
        private Label label1;
        private Button BtnMentes;
        private Button BtnElvet;
    }
}