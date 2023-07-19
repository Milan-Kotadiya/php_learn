<?php
echo "<h1 class='colorBlue'>";
echo 'PHP LEARNING';
echo '</h1>';

// Variable 
// declare  variable by $
$string = 'STRING VARIABLE VALUE';
$string = 'This is String Variable';
$string = 88;
echo "PRINT Variable(string) => $string";
echo '<br/>';
echo '<br/>';

// constant variable define by
define('constant', '$string');
echo "PRINT Variable(constant) =>";
echo constant;
echo '<br/>';
echo '<br/>';

$variable1 = 34;
echo 'Variable One';
echo '<br/>';
echo $variable1;
echo '<br/>';

echo 'Variable Two';
echo '<br/>';
$variable2 = 38;
echo $variable2;
echo '<br/>';

echo 'Sum Of Variable One ($variable2) And Variable Two';
echo '<br/>';
echo $variable1 + $variable2;

echo '<br/>';
echo '<br/>';

echo 'New Variable Assign By refering Old Variable(34) +1';
echo '<br/>';

$finalVariable = $variable1 + 1;
echo $finalVariable;

echo '<br/>';
echo '<br/>';

echo var_dump('1' == 1);
echo '<br/>';
echo '<br/>';

echo var_dump('1' === 1);

// if else
echo '<br/>';
echo '<br/>';
echo 'If else Considion';
echo '<br/>';

define('age', 20);
if (age === 18) {
    echo 'your age is Eighteen';
    echo '<br/>';
} else {
    echo 'your age is not Eighteen';
    echo '<br/>';
}


// array
echo '<br/>';
echo '<br/>';
echo '<br/>';
$array = array('0 Position', 2, 3, '5');
echo $array[0];
echo "PRINT Array 0 => $array[0]";
// array method
echo '<br/>';
$length = count($array);
echo "Array Length => $length";
// Loops
echo '<br/>';
echo "For Loop Start =>";

for ($i = 0; $i < count($array); $i++) {
    echo '<br/>';
    echo $array[$i];
    // while ($i <= 10) {
    //     echo '<br/>';
    //     echo 'index is smaller than or equal to 10';
    // }
}

echo '<br/>';
echo "For Loop End =>";


// object
echo '<br/>';
echo '<br/>';
echo '<br/>';
// $object = object('test',{name:'abhay'})
class firstObject
{
    public $name;
    public $phone;
    public $email;
    // for constructing this object (assign value by construct method)
    public function __construct($name, $phone, $email)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }
    public function aboutMe()
    {
        return "I have, name:$this->name, phone:$this->phone and email:$this->email also";
    }
}

$user = new firstObject('Ajay', 89988998898, 'this@this.com');
echo $user->aboutMe();


echo '<br/>';
echo '<br/>';




// function
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo 'Functions';
echo '<br/>';

function printValue($value)
{
    echo 'funtion printValue has been called';
    echo '<br/>';
    echo "value is $value";
}
printValue(8);

// string method
echo '<br/>';
echo 'String Methods';
$stringVariableNew = 'This is String';
echo '<br/>';
echo "Length Of String Variable is " . strlen($stringVariableNew);
echo '<br/>';
echo "Words In String Variable is " . str_word_count($stringVariableNew);
echo '<br/>';


echo '<br/>';
echo '<br/>';
echo '<br/>';

// Integer
$inte = "55555";
// to check is integer?
var_dump(is_numeric($inte));

echo var_dump($inte); // string
$stringToIni = (int)$inte;
echo var_dump($stringToIni); // intiger
$stringToIni2 = (int)$inte; // (int) = (integer)
echo var_dump($stringToIni2); // intiger

// Basic Maths = Min,Max value
// $array = array('4', '5', '7', '8', '9', '10', '11');
// echo (max($array));
echo (min(4, 5, 7, 8, 9, 10, 11));
echo (max(4, 5, 7, 8, 9, 10, 11));
//   positive value
$value = -9.10;
echo (abs($value));

// square root 
$squreOfEight = 64;
echo (sqrt($squreOfEight));

// round figure
$unrounded = 0.15;
echo (round($unrounded));

// random number
echo (rand());
// random number start to end
$start = 0;
$end = 100;
echo (rand($start, $end));

// Array Methods 
$cars = array("Volvo", "BMW", "Toyota");

// associative array
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

// Multidimensional array
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

// sort() - sort arrays in ascending order
// rsort() - sort arrays in descending order
// asort() - sort associative arrays in ascending order, according to the value
// ksort() - sort associative arrays in ascending order, according to the key
// arsort() - sort associative arrays in descending order, according to the value
// krsort() - sort associative arrays in descending order, according to the key

sort($cars);

// PHP superglobal variables
// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION

$_SERVER;
// See All Server Details
$array1 = array_keys($_SERVER);
for ($i = 0; $i < count($array1); $i++) {
    # code...
    echo $array1[$i] . " :: " . $_SERVER["$array1[$i]"];
    echo '<br/>';
}


// API METHODS
// GET API
// dataFromApi = [{"id":"110","employee_name":"Robin","employee_salary":"54000","employee_age":"65"},
// {"id":"112","employee_name":"Deepak","employee_salary":"12350","employee_age":"29"},
// {"id":"114","employee_name":"Ankit","employee_salary":"90000","employee_age":"18"}]

$curl_handle = curl_init();

$url = "https://dummy.restapiexample.com/api/v1/employees";


// websocket connection
$host = '127.0.0.1';
$port = 80811;
// for backend
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die('Socket Server Not Created');
$result  = socket_bind($socket, $host, $port) or die('Socket Server Not Binding');
$result  = socket_listen($socket, 3) or die('Socket Server Not Listening');
$accept  = socket_accept($socket) or die('Socket Server Not Accepting');
// reading msgs for backend
$msg = socket_read($accept, 1024);
$msg = trim($msg);
echo $msg;
socket_close($socket);


// sending msgs for frontend
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die('Socket Server Not Created');
socket_connect($socket, $host, $port) or die('Socket Server Not Connecting');
$send = "hello There";
socket_write($socket, $send, strlen($send));
