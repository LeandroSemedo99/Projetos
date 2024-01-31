using System;
using System.Drawing;
using System.Windows.Forms;
using WMPLib;

namespace Jogo_Breakout
{
    public partial class Form1 : Form
    {
        bool irdrt;
        bool iresq;
        bool isGameOver;

        int pontuação;
        int bolax;
        int bolay;
        int velocidade;
        WindowsMediaPlayer musica = new WindowsMediaPlayer();
        WindowsMediaPlayer win = new WindowsMediaPlayer();
        WindowsMediaPlayer over = new WindowsMediaPlayer();

        Random rnd = new Random();

        PictureBox[] BlocosArray;


        public Form1()
        {
            InitializeComponent();
            musica.URL = "jogomusica.mp3";
            win.URL = "Win.mp3";
            over.URL = "Gameover.mp3";
            ColocarBlocos();
        }

        private void JogoSetup()
        {
            musica.controls.play();

            isGameOver = false;
            pontuação = 0;
            bolax = 8;
            bolay = 8;
            velocidade = 15;
            score.Text = "Pontuação: " + pontuação;

            Bola.Left = 730;//posicaox onde a bola começa
            Bola.Top = 485;//posiçãoy onde a bola começa

            jogador.Left = 650;//posiçãox onde jogador começa


            relogio.Start();

            foreach (Control x in this.Controls)// cor aleatoria dos blocos
            {
                if (x is PictureBox && (string)x.Tag == "Blocos")
                {
                    x.BackColor = Color.FromArgb(rnd.Next(256), rnd.Next(256), rnd.Next(256));
                }
            }
        }

        private void GameOver(string message)// contar pontuação
        {

            isGameOver = true;
            relogio.Stop();
            score.Text = "Pontuação: " + pontuação + " " + message;
        }

        private void ColocarBlocos()//colocação dos blocos automaticamente no inicio do jogo
        {
            BlocosArray = new PictureBox[66];

            int a = 0;
            int topo = 50;
            int esq = 100;

            for (int i = 0; i < BlocosArray.Length; i++)
            {
                BlocosArray[i] = new PictureBox();
                BlocosArray[i].Height = 25;
                BlocosArray[i].Width = 100;
                BlocosArray[i].Tag = "Blocos";
                BlocosArray[i].BackColor = Color.White;

                if (a == 11)
                {
                    topo = topo + 50;
                    esq = 100;
                    a = 0;
                }

                if (a < 11)
                {
                    a++;
                    BlocosArray[i].Left = esq;
                    BlocosArray[i].Top = topo;
                    this.Controls.Add(BlocosArray[i]);
                    esq = esq + 110;
                }
            }

            JogoSetup();
        }

        private void RemoverBlocos()// retirar blocos ao entrar em contato com a bola
        {
            foreach (PictureBox x in BlocosArray)
            {
                this.Controls.Remove(x);
            }
        }

        private void mainrelogioevent(object sender, EventArgs e)// velocidade da bola
        {
            score.Text = "Pontuação: " + pontuação;

            if (iresq == true && jogador.Left > 0)
            {
                jogador.Left -= velocidade;
            }
            if (irdrt == true && jogador.Right < 1340)//limites de deslocação do jogador
            {
                jogador.Left += velocidade;
            }

            Bola.Left += bolax;
            Bola.Top += bolay;

            if (Bola.Left < 0 || Bola.Left > 1340)//limites de deslocação da bola
            {
                bolax = -bolax;
            }
            if (Bola.Top < 0)
            {
                bolay = -bolay;
            }

            if (Bola.Bounds.IntersectsWith(jogador.Bounds))
            {
                bolay = rnd.Next(8, 15) * -1;

                if (bolax < 0)
                {
                    bolax = rnd.Next(8, 15) * -1;
                }
                else
                {
                    bolax = rnd.Next(8, 15);
                }
            }

            foreach (Control x in this.Controls)
            {
                if (x is PictureBox && (string)x.Tag == "Blocos")//ao tocar nos blocos, abola desce e aumenta a pontuação
                {
                    if (Bola.Bounds.IntersectsWith(x.Bounds))
                    {
                        pontuação += 1;
                        bolay = -bolay;

                        this.Controls.Remove(x);
                    }
                }
            }
            if (pontuação == 66)// Final do jogo
            {
                //Mostrar Mensagem de jogo concluido
                GameOver("!Jogo Concluido! Prime a tecla Enter para jogar novamente.");
                musica.controls.stop();
                win.controls.play();
            }

            if (Bola.Top > 635)
            {
                //Mostrar Mensagem de Game Over
                GameOver("Perdeste.Prime a tecla Enter para jogar novamente.");
                musica.controls.stop();
                over.controls.play();

            }
        }

        private void keyisdown(object sender, KeyEventArgs e)// serve para quando as teclas são pressionadas realizar comandos
        {
            if (e.KeyCode == Keys.Left)
            {
                iresq = true;
            }
            if (e.KeyCode == Keys.Right)
            {
                irdrt = true;
            }
        }

        private void keyisup(object sender, KeyEventArgs e)//tecla aliviada
        {
            if (e.KeyCode == Keys.Left)
            {
                iresq = false;
            }
            if (e.KeyCode == Keys.Right)
            {
                irdrt = false;
            }
            if (e.KeyCode == Keys.Enter && isGameOver == true)
            {
                RemoverBlocos();
                ColocarBlocos();
            }

        }

        private void Form1_Load(object sender, EventArgs e)
        {
            // TODO: esta linha de código carrega dados na tabela 'bDjogoDataSet.Pontuações'. Você pode movê-la ou removê-la conforme necessário.
            //this.pontuaçõesTableAdapter.Fill(this.bDjogoDataSet.Pontuações);

        }

        private void pontuaçõesBindingNavigatorSaveItem_Click(object sender, EventArgs e)
        {
            this.Validate();
            this.pontuaçõesBindingSource.EndEdit();
            this.tableAdapterManager.UpdateAll(this.bDjogoDataSet);

        }

        private void pontuaçõesBindingSource_CurrentChanged(object sender, EventArgs e)
        {

        }
    }
}
