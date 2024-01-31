const cells = Array.from(document.querySelectorAll(".cell"));
const celulaslixo = cells.slice(0,30);
const celulasjogador =cells.slice(30);
const showscore =document.querySelector(".score");



let descida,velocidade,score;




function restart(){

    descida=0;
    velocidade=1000;//em milisegundos
    score =0;
    showscore.innerHTML="0";

    cells.forEach(cell => cell.innerHTML="");
    celulasjogador[1].innerHTML ='<div class="jogador"></div>';

}

function Iniciar(){

    restart();
    loop();
    

}

function loop(){
    let stop=false;
    //colisão e novo lixo
     for(let i = celulaslixo.length - 1; i >=0; i--){
        const cell = celulaslixo[i];
        const nextCell = cells[i + 3];
        const lixo = cell.children[0];

        if (!lixo){
            continue;
        }

        nextCell.appendChild(lixo);

        if(celulasjogador.includes(nextCell)){
            if(nextCell.querySelector(".jogador")){
                stop = true;

            } else {
                score++;
                velocidade =Math.max(100,velocidade-25);
                showscore.innerHTML= score;
                lixo.remove();
            }

        }
     }
        
    if (descida % 2 ===0){
        const posicao = Math.floor(Math.random()*3);

        celulaslixo[posicao].innerHTML = '<div class="lixo"></div>';
    }

    if(stop){
       let nome = prompt("Digite o seu nome 🎮:","#gametag");
       let tabela = document.getElementById("Leaderboard");
       let novaLinha = tabela.insertRow(-1);
       let novaCelula1 = novaLinha.insertCell(0);
       let novaCelula2 = novaLinha.insertCell(1);
       let novoTexto1 = document.createTextNode(nome);
       let novoTexto2 = document.createTextNode(score); 
       novaCelula1.appendChild(novoTexto1);
       novaCelula2.appendChild(novoTexto2);    
   
        restart();
    } else{
        descida ++;
        setTimeout(loop,velocidade);
    }
}



document.addEventListener("keydown", e => {

    if(!descida){
        Iniciar();
    }
    const jogador = document.querySelector(".jogador");

    if (e.key === "ArrowRight" && celulasjogador.includes(jogador.parentElement.nextElementSibling)){
        jogador.parentElement.nextElementSibling.appendChild(jogador);
    }

    if (e.key === "ArrowLeft" && celulasjogador.includes(jogador.parentElement.previousElementSibling)){
        jogador.parentElement.previousElementSibling.appendChild(jogador);
    }
});


