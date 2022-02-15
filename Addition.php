<?php
//addition of two string
function Addition($str){
    if(strpos($str,"-")!=""){
        return "Negative Number not Allow";
    }
    preg_match_all('!\d+!', $str, $match);
    return $match;
}
print_r(Addition("1,2"));
?>
