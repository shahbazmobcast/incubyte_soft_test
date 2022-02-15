<?php
//addition of two string
function Addition($str){
    if(strpos($str,"-")!=""){
        return "Negative Number not Allow";
    }
    preg_match_all('!\d+!', $str, $match);
    if(is_array($match[0])){
        return $match[0];
    }else{
        return 0;
    }
}
print_r(Addition("1,2"));
?>
