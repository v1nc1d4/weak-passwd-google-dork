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
<?php
		echo '<form><span>URL: </span><input name="url" value="'.htmlspecialchars($_GET['url']).'" type="text"><input value="GO" type="submit"></form>';
		echo "OOmbi Bro.<br> Check your URL<br>Only http or https protocols are allowed<br> NO SSRF Here :)</center>"; 
	}
}
