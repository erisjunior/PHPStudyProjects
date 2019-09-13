<html>
<head>
    <title>Lista Contatos</title>
</head>
<body>
<table border="10">
    <thead>
        <td>ID</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Celular</td>
        <td>Email</td>
        <td>Endereço</td>
        <td>Ação</td>
    </thead>
    
    <tbody>
    <?php
    
    error_reporting(0);
        
    $file = file("dados.txt");
    
    /*while(!feof($file)){
        
    $linha = fgets($file);        
    
    $dados = explode(":", $linha);
    
    echo "<tr>
        <td>$dados[0]</td>
        <td>$dados[1]</td>
        <td>$dados[2]</td>
        <td>$dados[3]</td>
        <td>$dados[4]</td>
        </tr>";
    }*/    
    
    foreach($file as $k=>$linha){
        
        echo count($file);
        
        $dados = explode(":", $linha);
    
        echo "<tr>
        <td>$k</td>
        <td>$dados[0]</td>
        <td>$dados[1]</td>
        <td>$dados[2]</td>
        <td>$dados[3]</td>
        <td>$dados[4]</td>
        
        <td><a href='delete.php?indice=$k'>Remover</a></td>
        
        </tr>";
    }
    
    ?>
    </tbody>

</table>    
    
<a href="novoprojeto.php?pagina=portifolio">Voltar</a>
    
</body>
</html>