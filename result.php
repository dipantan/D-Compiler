<?php
$input = $_POST['input_text'];
$name = uniqid().'.c';
$file = fopen($name,"w") or 
die("Failed");

//saving the text to the file
fwrite($file,$input);

$result = passthru('gcc '.$name.'&& ./a.out',$return_value);
echo $result;
?>
