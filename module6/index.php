<?php

function writeToFile($message){
    $file = fopen("example.txt", "a");

    if($file){
        fwrite($file, $message.PHP_EOL);

        fclose($file);

        echo "Message written to the file successfully!<br>";
    }else{
        echo "Failed to open the file for writting!!<br>";
    }
}

function readFromFile(){
    $file = fopen("example.txt", "r");

    if($file){
    echo "<strong> of the example </strong>";

    while(!feof($file)){
        $line = fgets($file);
        echo $line. "<br>";
    }
    fclose($file);
}else{
    echo "Failed to open the file!!<br>";
}

}

function quickWrite($message){
    file_put_contents("example.txt".$message.PHP_EOL);
    echo "Message written to the file using  file put contents!<br>";
}

writeToFile("This is a a simple log message");
quickWrite("This will overwrite everything with a new message");
readFromFile();
?>