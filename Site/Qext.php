<?php
//c421af4e37fed8b5b728f82114b09953
set_time_limit(0); 
$alfa = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");

$text = "";
$hash = "c421af4e37fed8b5b728f82114b09953";

for($i = 0; $i <26;$i++){
    $text=$alfa[$i];
    if(md5($text)==$hash){
        echo $text;
        break;
    }
    for($o = 0; $o <26;$o++){
        $text=$alfa[$i].$alfa[$o];
        if(md5($text)==$hash){
        echo $text;
        break;
        }
        for($a = 0; $a <26;$a++){
            $text=$alfa[$i].$alfa[$o].$alfa[$a];
            if(md5($text)==$hash){
                echo $text;
                break;
            }
            for($b = 0; $b <26;$b++){
                $text=$alfa[$i].$alfa[$o].$alfa[$a].$alfa[$b];
                if(md5($text)==$hash){
                    echo $text;
                    break;
                }
                for($c = 0; $c <26;$c++){
                    $text=$alfa[$i].$alfa[$o].$alfa[$a].$alfa[$b].$alfa[$c];
                    if(md5($text)==$hash){
                        echo $text;
                        break;
                    }
                    for($d = 0; $d <26;$d++){
                        $text=$alfa[$i].$alfa[$o].$alfa[$a].$alfa[$b].$alfa[$c].$alfa[$d];
                        if(md5($text)==$hash){
                            echo $text;
                            break;
                        }
                        for($e = 0; $e <26;$e++){
                            $text=$alfa[$i].$alfa[$o].$alfa[$a].$alfa[$b].$alfa[$c].$alfa[$d].$alfa[$e];
                            if(md5($text)==$hash){
                                echo $text;
                                break;
                            }
                            for($f = 0; $f <26;$f++){
                                $text=$alfa[$i].$alfa[$o].$alfa[$a].$alfa[$b].$alfa[$c].$alfa[$d].$alfa[$e].$alfa[$f];
                                if(md5($text)==$hash){
                                    echo $text;
                                    break;
                                }
                                for($g = 0; $g <26;$g++){
                                $text=$alfa[$i].$alfa[$o].$alfa[$a].$alfa[$b].$alfa[$c].$alfa[$d].$alfa[$e].$alfa[$f].$alfa[$g];
                                    if(md5($text)==$hash){
                                        echo $text;
                                        break;
                                    }
                                
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
?>