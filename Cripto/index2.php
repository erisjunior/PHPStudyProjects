<form action="#" method="post">

	<label>Texto</label>
	<input type="text" name="nome">

	<label>Chave</label>
	<input type="text" name="chave" maxlength="1">

	<input type="submit" value="Enviar">

</form>

<?php
	
	$nome = $_POST['nome'];
	$chave = $_POST['chave'];

	$et2 = array(" ","a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
	
	$word = base64_decode($nome);

	$letras = str_split($word);

		for ($k=0; $k < 27; $k++) {
			
			if($chave == $et2[$k]){
				$chave = $k;	
			}
		}

		$palavra = "";

		for($i = 0; $i<count($letras) ;$i++){
			
			for($w=0; $w < 27; $w++){
			
				if($letras[$i] == $et2[$w]){
					
					$y = $w - $chave;
			
					if($y > 26){
						$y = $y - 26;
					}
			
					if($y < 0){
						$y = $y + 26;
					}
			
					$palavra .= $et2[$y];
				}
			}

		}

		echo $palavra;

		echo "<br>a chave é: ".$chave;
	
?>