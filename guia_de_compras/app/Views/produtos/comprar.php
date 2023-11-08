<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprar produto</title>
</head>
<body>
    <h1>Comprar</h1>

    <!--o metodo calcular ira fazer o calculo do valor e enxugar o codigo -->
    
    <form method="POST" action="#" oninput="calcular()">
        <label for="name">Nome do Produto:</label>
        <input type="text" name="name" id="name"><br>

        <!--foreach ou verificação para fazer um filtro se ja foi comprado,
            teria como fazer do programa ja selecionar automaticamente-->

        <label for="text">Categoria:</label>
        <input type="text" name="text" id="text">
        <select name="categoria" id="categoria">
            <option value="limpeza">Limpeza</option>
            <option value="congelados">Congeados</option>
            <option value="Horti-frutti">Horti-frutti</option>
            <option value="Frios">Frios</option>
            <option value="Estante">Estante</option>
            <option value="higiene">Higiene</option>
        </select><br>

        <label for="text">Departamento:</label>
        <input type="text" name="departamento" id="departamento">
            <section>
                <option value="cozinha">Cozinha</option>
                <option value="wC">WC</option>
                <option value="lavanderia">lavanderia</option>
                <option value="geladeira">Geladeira</option>
                <option value="estante">Estante</option>
            </section><br>

        <label for="number">Valor:</label>
        <input type="number" name="valor" id="valor"><br>

        <label for="number">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade"><br>

        <label for="time">Data validade</label>
        <input type="datetime" name="validade" id="validade"><br>

        <label for="time">Data Compra:</label>
        <input type="datetime" name="compra" id="compra"><br>
        
        <button type="submit">Finalizar Compra</button>
        <!--fazer uma verificação para saber se deseja finalizar compra --> 
</body>
</html>

