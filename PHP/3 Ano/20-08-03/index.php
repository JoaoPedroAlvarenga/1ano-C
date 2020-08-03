<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Piscument</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <section class="register">

    <form method="POST" action="./php/create.php">
      <label for="name">Nome do aluno</label>
      <input type="text" name="name" id="name">
      
      <label for="birth">Data de Nascimento</label>
      <input type="date" name="birth" id="birth">
  
      <label for="rg">RG</label>
      <input type="text" name="rg" id="rg">
    
      <label for="cpf">CPF</label>
      <input type="text" name="cpf" id="cpf">
   
      <label for="phone">Telefone</label>
      <input type="text" name="phone" id="phone">
 
      <label for="course">Curso</label>
      <select name="course" id="course">
        <option value="Química">Química</option>
        <option value="Informática">Informática</option>
        <option value="Administração">Administração</option>
        <option value="Petróleo e Gás">Petróleo e Gás</option>
        <option value="Segurança do Trabalho">Segurança do Trabalho</option>
      </select>

      <label for="year">Ano</label>
      <select name="year" id="year">
        <option value="1">1 Ano</option>
        <option value="2">2 Ano</option>
        <option value="3">3 Ano</option>
      </select>
      
      <label for="expedient">Turno</label>
      <select name="expedient" id="expedient">
        <option value="matutino">Matutino</option>
        <option value="vespertino">Vespertino</option>
      </select>
      
      <button type="submit">Enviar</button>
    </form>
  </section>
</body>


<!-- 


// - Nome da Mãe
// - Nome do Pai -->

<script>
  document.querySelector("#name").value = "Roger"
  document.querySelector("#rg").value = "23232"
  document.querySelector("#birth").value = "2020-08-03"
  document.querySelector("#cpf").value = "34343"
  document.querySelector("#phone").value = "353535"
  document.querySelector("#course").value = "Química"
  document.querySelector("#year").value = "1"
  document.querySelector("#expedient").value = "matutino"
</script>

</html>