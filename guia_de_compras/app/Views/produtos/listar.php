<!--tratamento de erros-->

<?php if(session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
<?php endif;?>

<?php if(session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
<?php endif;?>

<!--tabela para listar produtos dos departamentos-->

<table>
<tr>
    <th>Nome</th>
    <th>Quantidade</th>
    <th>Departamento</th>
    <th>Valor</th>
    <th>Data_validade</th>
    <th>Data_compra</th>
  </tr>
<?php foreach ($produtos as $produto) :?>
   
  <tr>
    <td><?= $produto->nome ?></td>  
    <td><?= $produto->departamento ?></td>
    <td><?= $produto->tipo ?></td>
    <td><?= $produto->quantidade ?></td>
    <td><?= $produto->valor ?></td>
    <td><?= $produto->data_validade ?></td>
    <td><?= $produto->data_compra ?></td>
    <td><?= $produto->descricao ?></td>
  </tr>

  <button type="submit">Listar</button> 
  <button type="submit">Excluir</button> 
 
<?php endforeach ?>
</table>

<a href="#"></a> <!--aguadar direcionamento-->
