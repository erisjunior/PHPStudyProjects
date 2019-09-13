<!DOCTYPE html>
<html>
<head>
	<title>Questão 7</title>
</head>
<body>
<form action="" method="get">
	<select name="estado">
        <option value="Rio Branco">Acre</option>
        <option value="Macapá">Amapá</option>
        <option value="Manaus">Amazonas</option>
        <option value="Belem">Pará</option>
        <option value="Porto Velho">Rondônia</option>
        <option value="Boa Vista">Roraima</option>
        <option value="Palmas">Tocantins</option>
        <option value="Maceió">Alagoas</option>
        <option value="Salvador">Bahia</option>
        <option value="Fortaleza">Ceará</option>
        <option value="São Luis">Maranhão</option>
        <option value="João Pessoa">Paraiba</option>
        <option value="Recife">Pernambuco</option>
        <option value="Teresina">Piauí</option>
        <option value="Natal">Rio Grande do Norte</option>
        <option value="Aracaju">Serjipe</option>
        <option value="Goiânia">Goiás</option>
        <option value="Cuiabá">Mato Grosso</option>
        <option value="Campo Grande">Mato Grosso do Sul</option>
        <option value="Brasília">Distrito Federal</option>
        <option value="Vitória">Espírito Santo</option>
        <option value="Belo Horizonte">Minas Gerais</option>
        <option value="São Paulo">São Paulo</option>
        <option value="Rio de Janeiro">Rio de Janeiro</option>
        <option value="Curitiba">Paraná</option>
        <option value="Porto Alegre">Rio Grande do Sul</option>
        <option value="Florianópolis">Santa Catarina</option>
    </select>
    <input type="submit" value="Enviar">
</form>
<?php
    echo "Capital: "."$_GET[estado]";
?>    

</body>
</html>