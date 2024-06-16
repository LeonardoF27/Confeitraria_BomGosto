<?php require "inc/cabecalho.php"; ?>
<body>

<main class="corpo">

<h1 class="titulo">Detalhes do Pedido</h1>

    <form method="post" action="form.php" class="card">
        
        <ul class="form__pedidos">
            <?php
            $produtos = array(
                "Bolo de Chocolate" => $_POST['BoloChocolate'],
                "Cupcake" => $_POST['Cupcake'],
                "Empada" => $_POST['Empada'],
                "Coxinha" => $_POST['Coxinha']
            );

            // Define os preços dos produtos
            $precos = array(
                "Bolo de Chocolate" => 20.00,
                "Cupcake" => 5.00,
                "Empada" => 14.00,
                "Coxinha" => 7.00
            );

            // Define os nomes dos arquivos de imagem para cada produto
            $imagens = array(
                "Bolo de Chocolate" => "bolo.jpg",
                "Cupcake" => "cupcake.jpg",
                "Empada" => "empada.jpg",
                "Coxinha" => "coxinha.jpg"
            );

            $total = 0;

            foreach ($produtos as $produto => $quantidade) {
                if ($quantidade > 0) {
                    $subtotal = $precos[$produto] * $quantidade;
                    $total += $subtotal;
                    echo "<li class='pedidos'><img class='img' src='img/{$imagens[$produto]}' alt='$produto'> <strong>$produto:</strong> $quantidade (R$" . number_format($precos[$produto], 2, ',', '.') . " cada) - Subtotal: R$" . number_format($subtotal, 2, ',', '.') . "</li>";
                }
            }

            echo "<li class='total__pedidos'><strong>Total do Pedido:</strong> R$" . number_format($total, 2, ',', '.') . "</li>";

            ?>
        </ul>
        
        <!-- Remova o input do tipo "submit" do interior da lista -->
        <!-- Isso garante que o botão "Preencha seus dados" apareça fora da lista -->
        <input type="submit" value="Preencha seus dados" class="buttom__processar">
        <input type="button" value="Editar" class="buttom__processar" onclick="history.back()">

     
    </form>

</main>
    
<?php require "inc/rodape.php"; ?>

