<?php

set_time_limit(0); 
$alfa = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");

$text = "";
$count=0;
$counta=0;
//$hash = "f042bb742e8c9fd1353db613bab8864a";
$hash = "07159c47ee1b19ae4fb9c40d480856c4";

for($i = 0; $i <count($alfa);$i++){
    if($counta==0){
        $text=$alfa[$i];
        if(md5($text)==$hash){
            echo $text;
            break;
        } else{
            $count++;
        }
    }
    
    if($count==count($alfa)){
        $i=$counta;
        $text=$alfa[$i];
        $counta++;
        for($o = 0; $o <count($alfa);$o++){
            //${$alfa[$i+$o]}=$alfa[$i+$o]
            $text=$alfa[$i];
            $u=$i+$o;
            if($u<26 ){
                $text .= $alfa[$u];
                if(md5($text)==$hash){
                    echo $text;
                    break;
                }
            }
        }
    }
}
?>