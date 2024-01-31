
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se foi enviado um arquivo
    if (isset($_FILES['imagem'])) {
        try {
            // Conecta ao banco de dados usando PDO
            $conexao = new PDO('mysql:host=localhost;dbname=Voluntario', 'root', '');
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Recupera informações sobre o arquivo
            $nome = $_FILES['imagem']['name'];
            $tipo = $_FILES['imagem']['type'];
            $tamanho = $_FILES['imagem']['size'];
            $tmp = $_FILES['imagem']['tmp_name'];
            
            // Abre o arquivo em modo de leitura binária
            $fp = fopen($tmp, 'rb');
            $dados = fread($fp, $tamanho);
            fclose($fp);
            
            // Prepara a query para inserir a imagem na base de dados
            $stmt = $conexao->prepare('INSERT INTO imagens (nome, tipo, dados) VALUES (:nome, :tipo, :dados)');
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':tipo', $tipo);
            $stmt->bindParam(':dados', $dados, PDO::PARAM_LOB);
            
            // Executa a query
            if ($stmt->execute()) {
                echo 'Imagem enviada com sucesso.';
            } else {
                echo 'Erro ao enviar imagem.';
            }
        } catch(PDOException $e) {
            echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
        }
    }
}

try {
    // Conecta ao banco de dados usando PDO
    $conexao = new PDO('mysql:host=localhost;dbname=Voluntario', 'root', '');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Seleciona todas as imagens da tabela "imagens"
    $stmt = $conexao->query('SELECT * FROM imagens');
    $imagens = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
}

// Exibe as imagens em uma tabela HTML
echo '<table style="white-space: nowrap;">';
echo '<th>Fotos</th></tr>';

$contagem_imagens = 0;
foreach ($imagens as $imagem) {
    // Se chegarmos a 7 imagens, adicionamos uma nova linha
    if ($contagem_imagens % 7 == 0) {
        echo '<tr>';
    }
    
    echo '<td style="display: inline-block; white-space: normal;">';
    echo '<style>td img {max-width: 200px; max-height: 150px;}</style>';
    echo '<img src="data:' . $imagem['tipo'] . ';base64,' . base64_encode($imagem['dados']) . '">';
    echo '</td>';    
    
    // Incrementa a contagem de imagens
    $contagem_imagens++;
    
    // Se chegarmos a 7 imagens, fechamos a linha
    if ($contagem_imagens % 7 == 0) {
        echo '</tr>';
    }
}

// Verifica se a última linha foi fechada
if ($contagem_imagens % 7 != 0) {
    echo '</tr>';
}

echo '</table>';


?>

