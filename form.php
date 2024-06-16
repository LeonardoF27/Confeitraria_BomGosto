<?php require "inc/cabecalho.php"; ?>

<main class="corpo">

<form method="POST" action="gravar.php" class="card">
        <fieldset id="setcli">
            <div>
                <label class="titulo">Preencha seus dados</label>
            </div>

            <hr>

            <div class="form__dados">
                <span class="rotulo">Nome</span>
                <input type="text" id="nome" name="nome" class="form__input"/>
            </div>

            <div class="form__dados">
                <span class="rotulo">Logradouro</span>
                <input type="text" id="logradouro" name="logradouro" class="form__input"/>
            </div>

            <div class="form__dado">
                <span class="rotulo">Número</span>
                <input type="number" id="numero" name="numero"/>
                <span class="rotulo">Bairro</span>
                <input type="text" id="bairro" name="bairro"/>
            </div>

            <div class="form__dados">
                <span class="rotulo">CEP</span>
                <input type="number" id="cep" name="cep" class="form__input"/>
            </div>

            <div class="form__dados">
                <span class="rotulo">Email</span>
                <input type="text" id="email" name="email"class="form__input"/>
            </div>

            <div class="form__dado">
                <span class="rotulo">Telefone</span>
                <input type="number" id="telefone" name="telefone"/>
                <span class="rotulo">Celular</span>
                <input type="number" id="celular" name="celular"/>
            </div>

            <button type="submit" id="salvar"class="buttom buttom__form">Salvar</button>
            

        </fieldset>
    </form>

</main>

<?php require "inc/rodape.php"; ?>

<script>
  const submitButton = document.getElementById('salvar');

  submitButton.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default form submission

    if (confirm("Você confirma os dados informados?")) {
      // Submit the form if confirmed
      submitButton.form.submit();
    }
  });
</script>

