<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inicializa o total do pedido
    $total_pedido = 0;

    // Função para calcular o subtotal de cada item
    function calcularSubtotal($quantidade, $preco) {
        return $quantidade * $preco;
    }

    // Lista de produtos com seus preços
    $produtos = array(
        "Bolo de Chocolate" => 20.00,
        // "Cupcake" => 5.50,
        // "Empada" => 15.00,
        // "Coxinha" => 7.50
    );

    // Itera sobre os produtos enviados no formulário
    foreach ($produtos as $produto => $preco) {
        // Verifica se o produto foi incluído no pedido
        if ($_POST[$produto] > 0) {
            // Calcula o subtotal do produto
            $subtotal = calcularSubtotal($_POST[$produto], $preco);
            // Adiciona o subtotal ao total do pedido
            $total_pedido += $subtotal;

            // Exibe o produto e sua quantidade no pedido
            echo "<p>$produto: {$_POST[$produto]} unidades - Subtotal: R$ " . number_format($subtotal, 2, ',', '.') . "</p>";
        }
    }

    // Exibe o total do pedido
    echo "<p>Total do Pedido: R$ " . number_format($total_pedido, 2, ',', '.') . "</p>";
} else {
    // Se o formulário não foi enviado, exibe uma mensagem de erro
    echo "<p>Ocorreu um erro ao processar o pedido. Por favor, tente novamente.</p>";
}
?>
