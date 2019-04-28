<?php
 error_reporting(0);
 $data = [['c','a','b'],['v','w','x','z','y'],['j','h','k','i']];

function urutanarray($data) {
    $arrlen=count($data);
    for ($i=0;$i<=$arrlen;$i++){
        array_multisort(array_map('strlen', $data[$i]),$data[$i]);
    }
	return $data;
}
function test($a,$b){
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

uasort($data,'test');
var_dump(urutanarray($data));

?>