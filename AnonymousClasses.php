<?php

require_once 'utils.php';

interface DisplayMsg {
    public function printMsg(string $msg);
}
class Application {
    private $displayer;
    public function getDisplayer(): DisplayMsg {
        return $this->displayer;
    }
    public function setDisplayer(DisplayMsg $dismsg) {
        $this->displayer = $dismsg;
    }
}


$app = new Application();

//$app->setDisplayer('Hello World!');
class Abc implements DisplayMsg {
    function printMsg(string $msg) {
       echo "<h1> $msg </h1>";
    }
}

var_dump($app);

$abc = new Abc();

$app->setDisplayer($abc);

print_r($app);

$app->getDisplayer()->printMsg("hello"); # displayMsge



###############################################


$app2= new Application();

$app2->setDisplayer(new class implements DisplayMsg {
    function printMsg(string $msg) {
        echo "<h1 style='color: red'> $msg </h1>";
    }
});

$app2->getDisplayer()->printMsg("hi");


$app3 = new Application();
$app3->setDisplayer(new class implements DisplayMsg {
    function printMsg(string $msg) {
        $msg = strtoupper($msg);
        echo "<h1 style='color: green'> $msg </h1>";
    }
});

$app3->getDisplayer()->printMsg("Hello from ITI");










