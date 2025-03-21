<?php


require_once "../utils.php";


generateTitle("write Data");

function writeDataTofile(){

    $fileobj = fopen("data.txt", "w");
    # if file exists remove old content
    # ---> open file for writing starting from the beginning of the file
    if($fileobj){
        fwrite($fileobj,"Hello World from PHP\n" );
        fwrite($fileobj,"ITI OSAD NC ^^\n");
        fwrite($fileobj,"hiiiii\n");
        fwrite($fileobj,"byeee\n");

        fclose($fileobj);
    }

}

//writeDataTofile();


generateTitle("file put content");

/*
 *  if you have permission
 * open file
 * write data
 * then close the file
 * */
//file_put_contents("mycv.txt", "My name is Noha");

//readfile("mycv.txt");



#########################################################################3
generateTitle("---- Append Data", "green", 1);

function appendDataTofile(){
    $fileobj = fopen("data.txt", "a");
    if ($fileobj){
        fwrite($fileobj,"---------\n");
        fwrite($fileobj,"Hello World from PHP\n" );
        fwrite($fileobj,"ITI OSAD NC ^^\n");
        fclose($fileobj);
    }
    readfile("data.txt");
}


appendDataTofile();





