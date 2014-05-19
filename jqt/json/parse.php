<?php
$jsonFile = file_get_contents("lndw_programm.json");
$jsonObject = (array)json_decode($jsonFile,true);
$arrNum = var_dump($jsonObject);
echo "$arrNum\n";
print_r($jsonObject);

//echo $jsonFile;

//$jsonIterator = new RecursiveIteratorIterator(
//    new RecursiveArrayIterator($jsonObject),
//    RecursiveIteratorIterator::SELF_FIRST);

//foreach ($jsonIterator as $key => $val) {
//        echo "$key:\n";
//        echo "$key => $val\n";
//    }

echo "done\n"
?>
