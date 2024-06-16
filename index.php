<?php require "inc/cabecalho.php"; ?>

<main class="corpo">

<h2 class="titulo">Faça seu pedido</h2>

<div class="card">
<form method="post" action="processar_pedido.php" class="form">

<label for="BoloChocolate" class="label">Bolo de Chocolate - R$20,00</label>
<input type="number" name="BoloChocolate" id="BoloChocolate" value="0" min="0"><br>

<label for="Cupcake" class="label">Cupcake - R$5,00</label>
<input type="number" name="Cupcake" id="Cupcake" value="0" min="0"><br>

<label for="Empada" class="label">Empada - R$14,00</label>
<input type="number" name="Empada" id="Empada" value="0" min="0"><br>

<label for="Coxinha" class="label">Coxinha - R$7,00</label>
<input type="number" name="Coxinha" id="Coxinha" value="0" min="0"><br>

<input type="submit" value="Enviar Pedido" class="buttom">

</form>
</div>

</main>

<?php require "inc/rodape.php";?>

