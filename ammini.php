<?php
function stripFile($in){
    $pieces = explode("/", $in); 
    if(count($pieces) < 4) return $in . "/";
    if(strpos(end($pieces), ".") !== false){ 
        array_pop($pieces);
    }elseif(end($pieces) !== ""){ 
        $pieces[] = ""; 
    }
    return implode("/", $pieces). "/";
}
 
 
 ));
	}
	else{
		?>
