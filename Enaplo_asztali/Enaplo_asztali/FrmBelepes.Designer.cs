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
            BtnBelepes = new Button();
            TxtNev = new TextBox();
            TxtJelszo = new TextBox();
            label1 = new Label();
            label2 = new Label();
            LbHiba = new Label();
            SuspendLayout();
            // 
            // BtnBelepes
            // 
            BtnBelepes.Location = new Point(96, 131);
            BtnBelepes.Name = "BtnBelepes";
            BtnBelepes.Size = new Size(75, 23);
            BtnBelepes.TabIndex = 2;
            BtnBelepes.Text = "Belépés";
            BtnBelepes.UseVisualStyleBackColor = true;
            // 
            // TxtNev
            // 
            TxtNev.Location = new Point(108, 12);
            TxtNev.Name = "TxtNev";
            TxtNev.Size = new Size(140, 23);
            TxtNev.TabIndex = 0;
            // 
            // TxtJelszo
            // 
            TxtJelszo.Location = new Point(108, 55);
            TxtJelszo.Name = "TxtJelszo";
            TxtJelszo.PasswordChar = '*';
            TxtJelszo.Size = new Size(140, 23);
            TxtJelszo.TabIndex = 1;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(12, 15);
            label1.Name = "label1";
            label1.Size = new Size(90, 15);
            label1.TabIndex = 3;
            label1.Text = "Felhasználónév:";
            // 
            // label2
            // 
            label2.AutoSize = true;
            label2.Location = new Point(12, 58);
            label2.Name = "label2";
            label2.Size = new Size(40, 15);
            label2.TabIndex = 4;
            label2.Text = "Jelszó:";
            // 
            // LbHiba
            // 
            LbHiba.AutoSize = true;
            LbHiba.Font = new Font("Segoe UI", 9F, FontStyle.Bold, GraphicsUnit.Point, 238);
            LbHiba.ForeColor = Color.Red;
            LbHiba.Location = new Point(12, 96);
            LbHiba.Name = "LbHiba";
            LbHiba.Size = new Size(30, 15);
            LbHiba.TabIndex = 5;
            LbHiba.Text = "hiba";
            // 
            // FrmBelepes
            // 
            AcceptButton = BtnBelepes;
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(260, 175);
            Controls.Add(LbHiba);
            Controls.Add(label2);
            Controls.Add(label1);
            Controls.Add(TxtJelszo);
            Controls.Add(TxtNev);
            Controls.Add(BtnBelepes);
            Icon = (Icon)resources.GetObject("$this.Icon");
            MaximizeBox = false;
            MinimizeBox = false;
            Name = "FrmBelepes";
            StartPosition = FormStartPosition.CenterScreen;
            Text = "Belépés";
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Button BtnBelepes;
        private TextBox TxtNev;
        private TextBox TxtJelszo;
        private Label label1;
        private Label label2;
        private Label LbHiba;
    }
}