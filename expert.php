<?php
declare(strict_types=1);

//1
echo "Exercise 1 starts here:";
function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

//2
new_exercise(2);
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];
echo $monday;

//3
new_exercise(3);
$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);


//4 (passing a variable by reference)
new_exercise(4);
foreach($week as &$day) {
    $day = substr($day, 0, -3);
}
print_r($week);

//5
new_exercise(5);
$arr = [];
for ($letter = 'a'; $letter != 'aa'; $letter++) {
    array_push($arr, $letter);
}
print_r($arr);

//5.2
$letters = range('a', 'z');
print_r($letters);

//5.3
$arr = [];
$letter = 'a';
for ($i = 0; $i <= 25; $i++) {
  array_push($arr, $letter);
  $letter++;
}
print_r($arr);

//6
new_exercise(6);
function combineNames($str1 = "", $str2 = "")
{
  $params = [$str1, $str2];
  foreach ($params as $param) { //&$param lets you work with the original and not a copy
    if ($param == "") {
      $result = randomHeroName();
      // var_dump($param); //use this for debugging
    }
  }
  return implode(" - ", $result);

  // print_r($params); // this is empty
}

function randomGenerate($arr, $amount)
{
  for ($i = $amount; $i > 0; $i--) {
    array_push($arr, randomHeroName());
  }

  return $amount;
}

function randomHeroName()
{
  $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
  $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
  $heroes = [$hero_firstnames, $hero_lastnames];
  $firstname = $heroes[0][rand(0, 10)];
  $lastname = $heroes[1][rand(0, 10)];
  // $randname = $heroes[rand(0, count($heroes) - 1)][rand(0, 10)];

  // echo $randname;
  return [$firstname, $lastname];
}

echo ("Here is the name: " . combineNames());

//7
new_exercise(7);
function copyright(int $year) {
    return "&copy; $year BeCode";
}
echo copyright((int)date('Y'));

//8
new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' && $password == 'pocahontas') {
        return 'Welcome John Smith <br />';
        return 'hi';
    }
    return 'No access <br />';
}
/* do not change any code below */
//should greet the user with his full name (John Smith)
echo login('john@example.be', 'pocahontas');
//Should say: no access
echo login('john@example.be', 'dfgidfgdfg');
//Should say: no access
echo login('wrong@example', 'wrong');
/* You can change code again */

//9
new_exercise(9);
function isLinkValid(string $link) {
    $unacceptables = array('https:','.doc','.pdf', '.jpg', '.jpeg', '.gif', '.bmp', '.png');

    foreach ($unacceptables as $unacceptable) {
        if (strpos($link, $unacceptable) !== false) {
            return 'Unacceptable Found<br />';
        }
    }
    return 'Acceptable<br />';
}

//invalid link
echo isLinkValid('http://www.google.com/hack.pdf');
//invalid link
echo isLinkValid('https://google.com');
//VALID link
echo isLinkValid('http://google.com');
//VALID link
echo isLinkValid('http://google.com/test.txt');

//10
new_exercise(10);

$areTheseFruits = ['apple', 'bear', 'beef', 'banana', 'cherry', 'tomato', 'car', 'hat'];
$validFruits = ['apple', 'pear', 'banana', 'cherry', 'tomato'];

$length = count($areTheseFruits);
for ($i = 0; $i < $length; $i++) {
    echo $i . '<br>';
    if (!in_array($areTheseFruits[$i], $validFruits)) {
        unset($areTheseFruits[$i]);
    }
}
var_dump($areTheseFruits); //do not change this

// Bonus round
$str = "안녕 세상";
echo mb_substr($str, 0, 10);
