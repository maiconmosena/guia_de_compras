  <!--tratamento de erros-->
<?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif;?>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif;?>

  <!--furmulario de login do usuario-->
<form action="#" method="post" target="_self">
  <label>Nome:</label><br>
  <input type="text" id="senha" name="senha" value="..." required ><br>
  <label>Senha:</label><br>
  <input type="password" id="password" name="password" value="..." required ><br>  
  <input type="submit" value="Login">
</form> 

<a href = "#">#</a><!--aguardar definição para enxugar codigo-->