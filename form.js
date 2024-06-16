async function SalvaCliente() {
  let form = document.getElementById("clienteForm");
  let formData = new FormData(form);

  await fetch('gravar.php', {
      method: 'POST',
      body: formData
  })
  .then(response => response.text())
  .then(data => alert(data))
  .catch(error => console.error('Erro:', error));
}
