<?php
//addition of two string
function Addition($str){
    if(strpos($str,"-")!=""){
        return "Negative Number not Allow";
    }
    return $str;
}
echo Addition("1,2");
?>
