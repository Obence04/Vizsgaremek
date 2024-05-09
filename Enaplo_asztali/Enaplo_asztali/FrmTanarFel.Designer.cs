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
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(FrmTanarFel));
            panel1 = new Panel();
            label4 = new Label();
            panel2 = new Panel();
            tableLayoutPanel5 = new TableLayoutPanel();
            BtnMentes = new Button();
            BtnElvet = new Button();
            tableLayoutPanel4 = new TableLayoutPanel();
            LblHiba = new Label();
            tableLayoutPanel3 = new TableLayoutPanel();
            label3 = new Label();
            TxtFelNev = new TextBox();
            tableLayoutPanel2 = new TableLayoutPanel();
            label2 = new Label();
            TxtEmail = new TextBox();
            tableLayoutPanel1 = new TableLayoutPanel();
            label1 = new Label();
            TxtTanarNev = new TextBox();
            panel1.SuspendLayout();
            panel2.SuspendLayout();
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
            panel1.Controls.Add(label4);
            panel1.Dock = DockStyle.Top;
            panel1.Location = new Point(0, 0);
            panel1.Name = "panel1";
            panel1.Size = new Size(704, 70);
            panel1.TabIndex = 8;
            // 
            // label4
            // 
            label4.Anchor = AnchorStyles.None;
            label4.AutoSize = true;
            label4.Font = new Font("Segoe UI", 15F, FontStyle.Bold, GraphicsUnit.Point, 238);
            label4.Location = new Point(275, 20);
            label4.Name = "label4";
            label4.Size = new Size(153, 28);
            label4.TabIndex = 0;
            label4.Text = "Tanár felvétele";
            // 
            // panel2
            // 
            panel2.BackColor = Color.Transparent;
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
            panel2.TabIndex = 9;
            // 
            // tableLayoutPanel5
            // 
            tableLayoutPanel5.ColumnCount = 2;
            tableLayoutPanel5.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel5.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel5.Controls.Add(BtnMentes, 0, 0);
            tableLayoutPanel5.Controls.Add(BtnElvet, 1, 0);
            tableLayoutPanel5.Dock = DockStyle.Bottom;
            tableLayoutPanel5.Location = new Point(10, 431);
            tableLayoutPanel5.Name = "tableLayoutPanel5";
            tableLayoutPanel5.RowCount = 1;
            tableLayoutPanel5.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel5.Size = new Size(684, 50);
            tableLayoutPanel5.TabIndex = 20;
            // 
            // BtnMentes
            // 
            BtnMentes.Anchor = AnchorStyles.Bottom;
            BtnMentes.BackColor = Color.FromArgb(192, 255, 192);
            BtnMentes.Location = new Point(4, 4);
            BtnMentes.Margin = new Padding(4);
            BtnMentes.Name = "BtnMentes";
            BtnMentes.Size = new Size(334, 42);
            BtnMentes.TabIndex = 11;
            BtnMentes.Text = "Mentés";
            BtnMentes.UseVisualStyleBackColor = false;
            // 
            // BtnElvet
            // 
            BtnElvet.Anchor = AnchorStyles.Bottom;
            BtnElvet.BackColor = Color.FromArgb(255, 192, 192);
            BtnElvet.Location = new Point(346, 4);
            BtnElvet.Margin = new Padding(4);
            BtnElvet.Name = "BtnElvet";
            BtnElvet.Size = new Size(334, 42);
            BtnElvet.TabIndex = 12;
            BtnElvet.Text = "Elvetés";
            BtnElvet.UseVisualStyleBackColor = false;
            // 
            // tableLayoutPanel4
            // 
            tableLayoutPanel4.ColumnCount = 1;
            tableLayoutPanel4.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.Controls.Add(LblHiba, 0, 0);
            tableLayoutPanel4.Dock = DockStyle.Fill;
            tableLayoutPanel4.Location = new Point(10, 160);
            tableLayoutPanel4.Name = "tableLayoutPanel4";
            tableLayoutPanel4.RowCount = 1;
            tableLayoutPanel4.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel4.Size = new Size(684, 321);
            tableLayoutPanel4.TabIndex = 19;
            // 
            // LblHiba
            // 
            LblHiba.Anchor = AnchorStyles.Top;
            LblHiba.AutoSize = true;
            LblHiba.BackColor = Color.Silver;
            LblHiba.Font = new Font("Segoe UI", 13F, FontStyle.Bold, GraphicsUnit.Point, 238);
            LblHiba.ForeColor = Color.Red;
            LblHiba.Location = new Point(317, 20);
            LblHiba.Margin = new Padding(3, 20, 3, 0);
            LblHiba.Name = "LblHiba";
            LblHiba.Size = new Size(49, 25);
            LblHiba.TabIndex = 0;
            LblHiba.Text = "hiba";
            LblHiba.Visible = false;
            // 
            // tableLayoutPanel3
            // 
            tableLayoutPanel3.ColumnCount = 2;
            tableLayoutPanel3.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.Controls.Add(label3, 0, 0);
            tableLayoutPanel3.Controls.Add(TxtFelNev, 1, 0);
            tableLayoutPanel3.Dock = DockStyle.Top;
            tableLayoutPanel3.Location = new Point(10, 110);
            tableLayoutPanel3.Name = "tableLayoutPanel3";
            tableLayoutPanel3.RowCount = 1;
            tableLayoutPanel3.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel3.Size = new Size(684, 50);
            tableLayoutPanel3.TabIndex = 18;
            // 
            // label3
            // 
            label3.Anchor = AnchorStyles.Left;
            label3.AutoSize = true;
            label3.Location = new Point(4, 14);
            label3.Margin = new Padding(4, 0, 4, 0);
            label3.Name = "label3";
            label3.Size = new Size(119, 21);
            label3.TabIndex = 10;
            label3.Text = "Felhasználónév:";
            // 
            // TxtFelNev
            // 
            TxtFelNev.Anchor = AnchorStyles.Left;
            TxtFelNev.Location = new Point(346, 10);
            TxtFelNev.Margin = new Padding(4);
            TxtFelNev.Name = "TxtFelNev";
            TxtFelNev.Size = new Size(241, 29);
            TxtFelNev.TabIndex = 15;
            // 
            // tableLayoutPanel2
            // 
            tableLayoutPanel2.ColumnCount = 2;
            tableLayoutPanel2.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.Controls.Add(label2, 0, 0);
            tableLayoutPanel2.Controls.Add(TxtEmail, 1, 0);
            tableLayoutPanel2.Dock = DockStyle.Top;
            tableLayoutPanel2.Location = new Point(10, 60);
            tableLayoutPanel2.Name = "tableLayoutPanel2";
            tableLayoutPanel2.RowCount = 1;
            tableLayoutPanel2.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel2.Size = new Size(684, 50);
            tableLayoutPanel2.TabIndex = 17;
            // 
            // label2
            // 
            label2.Anchor = AnchorStyles.Left;
            label2.AutoSize = true;
            label2.Location = new Point(4, 14);
            label2.Margin = new Padding(4, 0, 4, 0);
            label2.Name = "label2";
            label2.Size = new Size(86, 21);
            label2.TabIndex = 9;
            label2.Text = "E-mail cím:";
            // 
            // TxtEmail
            // 
            TxtEmail.Anchor = AnchorStyles.Left;
            TxtEmail.Location = new Point(346, 10);
            TxtEmail.Margin = new Padding(4);
            TxtEmail.Name = "TxtEmail";
            TxtEmail.Size = new Size(241, 29);
            TxtEmail.TabIndex = 14;
            // 
            // tableLayoutPanel1
            // 
            tableLayoutPanel1.ColumnCount = 2;
            tableLayoutPanel1.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.ColumnStyles.Add(new ColumnStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.Controls.Add(label1, 0, 0);
            tableLayoutPanel1.Controls.Add(TxtTanarNev, 1, 0);
            tableLayoutPanel1.Dock = DockStyle.Top;
            tableLayoutPanel1.Location = new Point(10, 10);
            tableLayoutPanel1.Name = "tableLayoutPanel1";
            tableLayoutPanel1.RowCount = 1;
            tableLayoutPanel1.RowStyles.Add(new RowStyle(SizeType.Percent, 50F));
            tableLayoutPanel1.Size = new Size(684, 50);
            tableLayoutPanel1.TabIndex = 16;
            // 
            // label1
            // 
            label1.Anchor = AnchorStyles.Left;
            label1.AutoSize = true;
            label1.Location = new Point(4, 14);
            label1.Margin = new Padding(4, 0, 4, 0);
            label1.Name = "label1";
            label1.Size = new Size(87, 21);
            label1.TabIndex = 8;
            label1.Text = "Tanár neve:";
            // 
            // TxtTanarNev
            // 
            TxtTanarNev.Anchor = AnchorStyles.Left;
            TxtTanarNev.Location = new Point(346, 10);
            TxtTanarNev.Margin = new Padding(4);
            TxtTanarNev.Name = "TxtTanarNev";
            TxtTanarNev.Size = new Size(241, 29);
            TxtTanarNev.TabIndex = 13;
            // 
            // FrmTanarFel
            // 
            AcceptButton = BtnMentes;
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
            Name = "FrmTanarFel";
            StartPosition = FormStartPosition.CenterParent;
            Text = "Tanár felvétele";
            panel1.ResumeLayout(false);
            panel1.PerformLayout();
            panel2.ResumeLayout(false);
            tableLayoutPanel5.ResumeLayout(false);
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
        private Label label4;
        private Panel panel2;
        private TableLayoutPanel tableLayoutPanel5;
        private Button BtnMentes;
        private Button BtnElvet;
        private TableLayoutPanel tableLayoutPanel4;
        private Label LblHiba;
        private TableLayoutPanel tableLayoutPanel3;
        private Label label3;
        private TextBox TxtFelNev;
        private TableLayoutPanel tableLayoutPanel2;
        private Label label2;
        private TextBox TxtEmail;
        private TableLayoutPanel tableLayoutPanel1;
        private Label label1;
        private TextBox TxtTanarNev;
    }
}