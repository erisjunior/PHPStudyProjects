<html>
<head></head>
    
<body>

    <form action="" method="get">
        <input type="text" name="hash">
        <input type="submit" value="OK" name="OK">
    </form>
    
    <?php
        $word = $_GET['hash'];
    
        $hash = md5($word);
    
        $file = fopen("word.txt","a");
    
        fwrite($file, strtolower($word)." ".$hash."\n");
        
        fclose($file);
        
    }
    
    ?>
    
</body>
</html>