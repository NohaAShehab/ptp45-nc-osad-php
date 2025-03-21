<?php


    require_once "../utils.php";

    generateTitle("Read Data", "blue", 1);
    function readFileIntoStr()
    {
        $fileobj = fopen("users.txt", "r"); // warning
        if ($fileobj) {
            var_dump($fileobj);
            brk();
//        var_dump(is_resource($fileobj));
            echo "<h1>File found </h1>";
            # read file content
            #1- get file size
            $size = filesize("users.txt");  # no. of bytes
            var_dump($size);
            # fread($resourceobj, no_of_bytes_need_read)
            $data = fread($fileobj, $size);
            brk();
            var_dump($data);

            # close file
            fclose($fileobj);
            brk();
            var_dump($fileobj);


        } else {
            echo "<h1>File not found</h1>";
        }

    }


    // calling
    #readFileIntoStr();

    generateTitle("Read file line by line", "red", 1);

    function readFileIntoLines(){
        $fileobj = fopen("users.txt", "r");
        if ($fileobj) {
            $lines = [];
            while (!feof($fileobj)) {
                $line = fgets($fileobj, 4); # read line of file
//                echo "{$line}<br>";
                $lines[] = $line;  # push new element to the array
            }
            fclose($fileobj);
            print_r($lines);
        }
    }

//    readFileIntoLines();

    function readFileToArray(){
        // if you have permission to access file
        $lines = file("users.txt");
        print_r($lines);
    }
//    readFileToArray();

    generateTitle("-- Seek, rewind", "green",1);
    function fileTip(){

        $fileobj = fopen("users.txt", "r");
        $data = fread($fileobj, filesize("users.txt"));
        var_dump($data);
        #### I need to print file line by line

        fseek($fileobj, 0); # move file pointer to byte n
        ##  rwind($fileobj) === fseek($fileobj, 0)
        $lines = [];
        while (!feof($fileobj)) {
            $line = fgets($fileobj);  # read line
            $lines[] = $line;
        }
        print_r($lines);

        fclose($fileobj);
    }

//fileTip();

//generateTitle("Quick helpers");
////readfile("users.txt"); #output file content to the browser
//
//
//$content=file_get_contents("users.txt");  # read file content to a string // open read then close
//var_dump($content);


###########################3
















