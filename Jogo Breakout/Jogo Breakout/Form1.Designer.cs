namespace Jogo_Breakout
{
    partial class Form1
    {
        /// <summary>
        /// Variável de designer necessária.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpar os recursos que estão sendo usados.
        /// </summary>
        /// <param name="disposing">true se for necessário descartar os recursos gerenciados; caso contrário, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código gerado pelo Windows Form Designer

        /// <summary>
        /// Método necessário para suporte ao Designer - não modifique 
        /// o conteúdo deste método com o editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            this.score = new System.Windows.Forms.Label();
            this.relogio = new System.Windows.Forms.Timer(this.components);
            this.Bola = new System.Windows.Forms.PictureBox();
            this.jogador = new System.Windows.Forms.PictureBox();
            this.bDjogoDataSet = new Jogo_Breakout.BDjogoDataSet();
            this.pontuaçõesBindingSource = new System.Windows.Forms.BindingSource(this.components);
            this.pontuaçõesTableAdapter = new Jogo_Breakout.BDjogoDataSetTableAdapters.PontuaçõesTableAdapter();
            this.tableAdapterManager = new Jogo_Breakout.BDjogoDataSetTableAdapters.TableAdapterManager();
            ((System.ComponentModel.ISupportInitialize)(this.Bola)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.jogador)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.bDjogoDataSet)).BeginInit();
            ((System.ComponentModel.ISupportInitialize)(this.pontuaçõesBindingSource)).BeginInit();
            this.SuspendLayout();
            // 
            // score
            // 
            this.score.AutoSize = true;
            this.score.Font = new System.Drawing.Font("Felix Titling", 14.25F, System.Drawing.FontStyle.Bold, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.score.ForeColor = System.Drawing.SystemColors.ButtonFace;
            this.score.Location = new System.Drawing.Point(9, 14);
            this.score.Name = "score";
            this.score.Size = new System.Drawing.Size(156, 23);
            this.score.TabIndex = 0;
            this.score.Text = "Pontuação:0";
            // 
            // relogio
            // 
            this.relogio.Interval = 20;
            this.relogio.Tick += new System.EventHandler(this.mainrelogioevent);
            // 
            // Bola
            // 
            this.Bola.BackColor = System.Drawing.Color.Cyan;
            this.Bola.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Center;
            this.Bola.BorderStyle = System.Windows.Forms.BorderStyle.FixedSingle;
            this.Bola.Cursor = System.Windows.Forms.Cursors.Default;
            this.Bola.Image = global::Jogo_Breakout.Properties.Resources.Smile;
            this.Bola.Location = new System.Drawing.Point(709, 538);
            this.Bola.Name = "Bola";
            this.Bola.Size = new System.Drawing.Size(33, 31);
            this.Bola.SizeMode = System.Windows.Forms.PictureBoxSizeMode.CenterImage;
            this.Bola.TabIndex = 1;
            this.Bola.TabStop = false;
            // 
            // jogador
            // 
            this.jogador.BackColor = System.Drawing.Color.White;
            this.jogador.BackgroundImage = global::Jogo_Breakout.Properties.Resources.Jogador;
            this.jogador.Location = new System.Drawing.Point(639, 590);
            this.jogador.Name = "jogador";
            this.jogador.Size = new System.Drawing.Size(170, 57);
            this.jogador.TabIndex = 1;
            this.jogador.TabStop = false;
            // 
            // bDjogoDataSet
            // 
            this.bDjogoDataSet.DataSetName = "BDjogoDataSet";
            this.bDjogoDataSet.SchemaSerializationMode = System.Data.SchemaSerializationMode.IncludeSchema;
            // 
            // pontuaçõesBindingSource
            // 
            this.pontuaçõesBindingSource.DataMember = "Pontuações";
            this.pontuaçõesBindingSource.DataSource = this.bDjogoDataSet;
            this.pontuaçõesBindingSource.CurrentChanged += new System.EventHandler(this.pontuaçõesBindingSource_CurrentChanged);
            // 
            // pontuaçõesTableAdapter
            // 
            this.pontuaçõesTableAdapter.ClearBeforeFill = true;
            // 
            // tableAdapterManager
            // 
            this.tableAdapterManager.BackupDataSetBeforeUpdate = false;
            this.tableAdapterManager.PontuaçõesTableAdapter = this.pontuaçõesTableAdapter;
            this.tableAdapterManager.UpdateOrder = Jogo_Breakout.BDjogoDataSetTableAdapters.TableAdapterManager.UpdateOrderOption.InsertUpdateDelete;
            // 
            // Form1
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackColor = System.Drawing.SystemColors.ActiveCaptionText;
            this.ClientSize = new System.Drawing.Size(1370, 749);
            this.Controls.Add(this.Bola);
            this.Controls.Add(this.jogador);
            this.Controls.Add(this.score);
            this.ForeColor = System.Drawing.SystemColors.ControlText;
            this.Name = "Form1";
            this.Text = "Jogo Breakout";
            this.Load += new System.EventHandler(this.Form1_Load);
            this.KeyDown += new System.Windows.Forms.KeyEventHandler(this.keyisdown);
            this.KeyUp += new System.Windows.Forms.KeyEventHandler(this.keyisup);
            ((System.ComponentModel.ISupportInitialize)(this.Bola)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.jogador)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.bDjogoDataSet)).EndInit();
            ((System.ComponentModel.ISupportInitialize)(this.pontuaçõesBindingSource)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Label score;
        private System.Windows.Forms.PictureBox jogador;
        private System.Windows.Forms.PictureBox Bola;
        private System.Windows.Forms.Timer relogio;
        private BDjogoDataSet bDjogoDataSet;
        private System.Windows.Forms.BindingSource pontuaçõesBindingSource;
        private BDjogoDataSetTableAdapters.PontuaçõesTableAdapter pontuaçõesTableAdapter;
        private BDjogoDataSetTableAdapters.TableAdapterManager tableAdapterManager;
    }
}

