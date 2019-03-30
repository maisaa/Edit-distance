<?php
include('levenshtein.php');
include('hamming.php');


$str1 = $_POST['str1'];
$str2 = $_POST['str2'];
	
$obj1 = new hamDes();
$obj2 = new lev();

 
if($_POST['method'] == "hamming"){
    echo $obj1->ham($str1,$str2);
}else{
    echo $obj2->leve($str1,$str2);
}
'<form>
<input type="button" value="Go back!" onclick="history.back()">
</form>'
?>


