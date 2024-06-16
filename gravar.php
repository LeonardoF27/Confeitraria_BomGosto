<?php require "inc/cabecalho.php"; ?>

<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Função para validar e limpar os dados
    function validar_dado($dado) {
        return trim(htmlspecialchars($dado));
    }

    // Lista de campos obrigatórios
    $campos_obrigatorios = ['nome', 'logradouro', 'numero', 'bairro', 'cep', 'email', 'telefone', 'celular'];

    // Inicializa o array de dados e o array de campos vazios
    $dados = [];
    $campos_vazios = [];

    // Valida cada campo obrigatório
    foreach ($campos_obrigatorios as $campo) {
        if (isset($_POST[$campo]) && !empty($_POST[$campo])) {
            $dados[$campo] = validar_dado($_POST[$campo]);
        } else {
            $campos_vazios[] = $campo;
        }
    }

    // Verifica se há campos vazios
    if (!empty($campos_vazios)) {
        // Se houver campos vazios, exibe uma mensagem de erro
        echo "<main class='corpo'> <div class='card'>Por favor, preencha todos os campos obrigatórios: " . implode(", ", $campos_vazios)."</div></main>";
    } else {
        // Prepara a inserção dos dados no banco de dados
        $stmt = $pdo->prepare("INSERT INTO cliente (nome, logradouro, numero, bairro, cep, email, telefone, celular) VALUES (:nome, :logradouro, :numero, :bairro, :cep, :email, :telefone, :celular)");
        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':logradouro', $dados['logradouro']);
        $stmt->bindParam(':numero', $dados['numero']);
        $stmt->bindParam(':bairro', $dados['bairro']);
        $stmt->bindParam(':cep', $dados['cep']);
        $stmt->bindParam(':email', $dados['email']);
        $stmt->bindParam(':telefone', $dados['telefone']);
        $stmt->bindParam(':celular', $dados['celular']);

        // Executa a inserção e verifica se foi bem-sucedida
        if ($stmt->execute()) {
            echo "Dados do cliente salvos com sucesso!";
        } else {
            echo "Erro ao salvar os dados do cliente.";
        }
    }
} else {
    // Se não houver dados enviados via POST, exiba uma mensagem de erro
    echo "Nenhum dado enviado via POST.";
}
?>

<?php require "inc/rodape.php"; ?>
