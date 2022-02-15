<?php
//addition of two string
function Addition($str){
    if(strpos($str,"-")!=""){
        return "Negative Number not Allow";
    }
    preg_match_all('!\d+!', $str, $match);
    if(is_array($match[0]) && count($match[0])>1){
        return array_sum($match[0]);
    }else{
        return 0;
    }
}
echo(Addition("1,-2"));
?>
