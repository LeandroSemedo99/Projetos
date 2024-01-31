<?php
require_once 'voluntário.php';

$p = new Voluntário("Voluntario","localhost","root","");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="voluntario.css">
    <title>Registro de Voluntário</title>
    <script src="volunt.js" defer></script>
</head>
<body>
<div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="projeto.php">Página Principal</a>
        </nav>
    </div>
    </div>


    <div class="popup">
        <button id="close">&times;</button>
        <h2>Junta-te á equipa!</h2>
        <p>
            Se já fizeres parte da equipa, faz já o teu login ou edita os teus dados, se não ,voluntaria-te e poderás juntar-te a nós!
        </p>
        <a href="Login.php">Login</a>
        
    </div>


    <?php
    if(isset($_POST['nome']))//quando clica no registrar ou editar
    {    //---------------EDITAR-------
        if(isset($_GET['id_at']) && !empty('id_at'))
        {
            $id_atl = addslashes($_GET['id_at']);
            $nome =  addslashes($_POST['nome']);
            $telefone =  addslashes($_POST['telefone']);
            $email =  addslashes($_POST['email']);
            $senha =  addslashes($_POST['senha']);
            if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha))
            {
            //editar
                $p->editarVoluntario($id_atl , $nome, $telefone, $email, $senha);
                header("location:juntaaequipa.php");
                
            }
            else
            {   ?>
                <div class="alerta">
                    
                    <h4>Preenche todos os campos</h4>
                </div>
                <?php
            }
        }    
        //-------------REGISTRAR-----
        else
        {
            
            $nome =  addslashes($_POST['nome']);
            $telefone =  addslashes($_POST['telefone']);
            $email =  addslashes($_POST['email']);
            $senha =  addslashes($_POST['senha']);
            if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha))
            {
            //registrar
            if(!$p->inscreverVoluntario($nome, $telefone, $email, $senha))
            {
                ?>
                    <div class="alerta">
                        
                        <h4>Email já registrado</h4>
                    </div>
                <?php
            }
            }
            else
            {
                ?>
                    <div class="alerta">
                        
                        <h4>Preenche todos os campos</h4>
                    </div>
                <?php
            }
        }

    }
    ?>
    <?php
        if(isset($_GET['id_at']))
        {
            $id_atualizar = addslashes($_GET['id_at']);
            $res = $p->buscarDadosVoluntario($id_atualizar);
        }


    ?>
    
    <section id ="esquerda">
        <form method="POST" enctype="multipart/form-data">
            <h2>REGISTRO VOLUNTÁRIO</h2>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php if(isset($res)){echo $res['nome'];} ?>" >
            <label for="telefone">Telefone</label>
            <input type="number" name="telefone" id="telefone" value="<?php if(isset($res)){echo $res['telefone'];} ?>"> 
            <label for="email">Email </label>
            <input type="email" name="email" id="email" value="<?php if(isset($res)){echo $res['email'];} ?>">
            <label for="senha">Password </label>
            <input type="password" name="senha" id="senha" value="<?php if(isset($res)){echo $res['senha'];} ?>">
            <input type="file" name="imagem" id="imagem">
            <input type="submit" value="<?php if(isset($res)){echo "Atualizar";}else {echo "Registrar";} ?>">
        </form>
    </section>
        
    <section id="direita">
    <table>
        <tr id="titulo"> 
            <td>NOME</td>
            <td>TELEFONE</td> 
            <td colspan="3">EMAIL</td>
        </tr>
        <?php
            $dados = $p->buscarDados();
            if(count($dados) > 0)
            {
                for ($i=0; $i < count($dados); $i++)
                {
                    echo "<tr>";
                    foreach ($dados[$i] as $k => $v)
                    {
                        if($k != "id" && $k != "senha")
                        {
                            echo "<td>".$v."</td>";
                        }
                    }
                ?>
    <td>
        <a href="juntaaequipa.php?id_at=<?php echo $dados[$i]['id'];  ?>">📝</a>
        <a href="juntaaequipa.php?id=<?php echo $dados[$i]['id'];  ?>">🗑️</a>
    </td>
                <?php
                    echo "</tr>";
                }
                
            }
            else//bacno sem voluntarios
            {
                
                ?>      
    </table> 
               
                <div class="alerta">
                    <h4>SÊ O PRIMEIRO A VOLUNTARIAR-TE! </h4>
                </div>
                    
                <?php  
            }

        ?>      
    </section>

</body>
</html>

<?php

            if(isset($_GET['id']))
            {
                $id_volunt = addslashes($_GET['id']);
                $p->removerVoluntario($id_volunt);
                header("location: juntaaequipa.php");

            }



?>