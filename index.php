<?php
/*
$vartest
     $myVar1 = "Hello";
     $myVar2 = "World";

     echo $myVar1."   ".$myVar2;

$arrayName = array('' => , );
$numbers = array(12,45,22,34,65);
$numbers = [12,45,22,34,65];

print_r($numbers);
echo $numbers[1];

     $ages = array(
    "John" => 35,
    "Mary" => 27,
    "Bob" => 55
     );

    echo $ages["Mary"];

    array_pop($ages); //get rid of Bob
    array_shift($ages); //get rid of John

    print_r($ages);



LOOP (for)
    for ($i=0; $i < 5; $i++) {
      echo $i;
    }



LOOP (while)

$i= 0;
while ($i <= 10) {
  echo "Number ".$i."<br  />";
  $i++;
}


LOOP (foreach)
}
$ages = array(
"John" => 35,
"Mary" => 27,
"Bob" => 55
);

foreach ($ages as $name => $age) {
  echo $name." is ". $age. " years old<br  />";
}


                                FUNCTIONS

function greet(){
echo 'Hello world!';
}

greet();

function greet($greeting, $name='John'){
  echo strtoupper($greeting.' '.$name);
}

greet('Whats up','Brad');



IF, ELSE, elseif

$num1 = 50;


if ($num1 == 40) {
  echo 'Correct';
}
elseif ($num1 ==50) {
  echo "Correct";
}
else {
  echo "Wrong";
}

or == ||
and == &&

$num1 = 30;
$num2 = 20;

if ($num1 == 30 && $num2 == 20) {
  echo "Correct";
}
else {
  echo "Wrong";
}
class User{
  private $id;
  private $username;
  private $email;
  private $password;

  public function __construct($username, $password){
    $this->username = $username;
    $this->password = $password;
  }

  public function register(){
  echo 'User Registered';
}

public function login(){

  $this->auth_user();

}

public function auth_user(){
  //echo $this->username. ' is authenticated';
}

public function __destruct(){
  //echo 'Destructor Called';
}
}

$User = new User('Brad', '1234');


//$User->register();

//$User->login();

*/

class Post{
  private $name;

  public function __set($name, $value){
    echo 'Setting '.$name.' to <strong>'.$value.'</strong><br />';
    $this->name = $value;
  }

  public function __get($name){
    echo 'Getting '.$name.' <strong>'.$this->name.'</strong><br />';
  }

public function __isset($name){
  echo 'Is '.$name.' set?<br />';
  return isset($this->name);
}

}

$post = new Post;
$post->name = 'Testing';
echo $post->name;
var_dump(Isset($post->name));




?>
