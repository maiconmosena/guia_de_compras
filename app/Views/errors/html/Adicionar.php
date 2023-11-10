<?php if( session('errors')): ?>
    <div class="alert alert-danger"><?= implode('<br>',  session('errors')) ?></div>
<?php endif;?>

<form action="/action_page.php">
  <label for="text">Tipo:</label>
  <input type="text" id="tipo" name="tipo"><br><br>

  <label for="text">Departamento:</label>
  <select id="text" name="text">
    <option value="Cozinha">Volvo</option>
    <option value="WC">Saab</option>
    <option value="">Fiat</option>
    <option value="audi">Audi</option>
  </select>

  <label for="text">Valor produto:</label>
  <input type="text" id="valor" name="valor"><br><br>

  <label for="date">Data compra:</label>
  <input type="date" id="date" name="date"><br><br>
  
  <label for="date">Data validade:</label>
  <input type="date" id="date" name="date"><br><br>

  <input type="submit" value="Adicionar">
</form>