<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<?php
$color = array("White", "Black", "Blue", "Yellow");
echo $color[0]."<br>  ";
echo $color[1]."<br>  ";
echo $color[2]." <br> ";
echo $color[3],"<br>";

echo"<h2>Data Type</h2>" ;
$table = 115;
$deci = 855.5;
$booli = TRUE;
$arr = array(20 ,23, 23);
$str = "Aatif <br><br><br>";

echo "Integer =".$table ."<br>";
echo "float =".$deci. "<br>";
echo "Booloin =".$booli ."<br><br><br>";
echo"This is Arry using for loop<br>";
for($i=0; $i<count($arr); $i++){
    echo $arr[$i] . "<br>";
}
echo"<br>";
echo "String =".$str ;
?>
</div>  
<?php
echo"<h2>Operator</h2>";
$a = 20;
$b = 10;

echo "<h2>Arithmetic Operators in PHP</h2>";

echo "Addition = " . ($a + $b) . "<br>";

echo "Subtraction = " . ($a - $b) . "<br>";

echo "Multiplication = " . ($a * $b) . "<br>";

echo "Division = " . ($a / $b) . "<br>";

echo "Modulus = " . ($a % $b) . "<br>";

echo "Exponentiation = " . ($a ** $b) . "<br>";
?>
<!-- <?php
echo"<h2>Operator</h2>";
$a = 20;
echo"Assignment operatoer";
echo $a +=5 ."<br>";
echo $a -=5 ."<br>";
echo $a *=5 ."<br>";
echo $a /=5 ."<br>";
echo $a %=5 ."<br>";

?> -->

<form action="index.php" method="post">
    <label for="username">Username:</label>
    <!-- The 'name' attribute is what PHP uses to recognize this input -->
    <input type="text" id="username" name="username">
    <input type="submit" value="Submit">
</form>

<?php
// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Access the data using the 'name' attribute from the HTML input
    $username = $_POST['username'];
    
    // Always sanitize/escape user input before printing it to prevent XSS
    echo "Hello Tumko Meri website me suawagat he " . htmlspecialchars($username);
}
?>
<?php
// find the sum equation  circle, rectangle, triangle, square, trapezoid and parallelogram

//1. find circle vale 
echo"<br>";
$pi = M_PI;
function circle($r){
    global $pi;
    return 2 * $pi * $r;
}

$circl = 6;

echo"Area of circle :".circle($circl);

// 2.area of rectangle

echo"<br>";
function rectangle($length , $width){
    return 2*($length + $width);
}

$val_length = 6;
$val_width = 5;

echo"Area of retraingle :".rectangle($val_length, $val_width);
echo"<br>";
echo"<br>";
$marks = 65;
echo"Marks ".$marks;
echo"<h4> If else if Statement </h4>";
if($marks>90){
    echo"Grade A";
}
elseif ($marks>60) {
    # code...
    echo"Grade B";
}
elseif ($marks>40) {
    # code...
    echo"Grade C";
}
else{
    echo"Fail";
}
echo"<h4>Loan Approve </h4>";
$income = 5000;
$employe = False;
$credit = "high";

if($income >= 50000){
    echo"You can take lone";
}
elseif ($credit == "high"){
    # code...
    if($employe == FALSE){
        echo"You can't take lone";
    }
    else {
        echo'You can take lone';
    }
}



echo"<h4> For and for each loop </h4>";
$i = 1;
echo"<h5>Using while loop</h5>";
while($i <= 10){
    echo $i ."<br>";
    $i++;
}
echo"<h5>Using for loop</h5>";
$num = 2;
for ($i=1; $i <= 10; $i++) { 
      echo $i * $num ."<br>"; 
      
}

echo"<h4> Read File And write file </h4>";

$file = fopen("data.txt",'r');
$read = fread($file , filesize("data.txt"));
echo $read;
fclose($file);

echo"<h4> Read File</h4>";
$file = fopen("data.txt",'w');
$write = fwrite($file , "Helo Aatif how are you");
echo $write;
$file = fopen("data.txt",'r');
$read = fread($file , filesize("data.txt"));
echo $read;
fclose($file);

echo"<h4> Sort technoque</h4>";
echo"<p> Assending</p>";
$arr = array(50,25,40,63);
sort($arr);
print_r($arr);

echo"<p> dessending</p>";
$arr = array(10,25,40,63);
rsort($arr);
print_r($arr);

echo"<p> Assendin of assocated array</p>";
$arr = array("A"=>10,"B"=>25,"C"=>40,"D"=>63);
asort($arr);
print_r($arr);

echo"<p> deassendin of assocated array</p>";
$arr = array("A"=>10,"B"=>25,"C"=>40,"D"=>63);
arsort($arr);
print_r($arr);

echo"<p> Assendin of assocated array Acc to key</p>";
$arr = array("A"=>10,"D"=>25,"B"=>40,"C"=>63);
ksort($arr);
print_r($arr);

echo"<p> dessendin of assocated array Acc to key</p>";
$arr = array("A"=>10,"D"=>25,"B"=>40,"C"=>63);
krsort($arr);
print_r($arr);
echo"<br>";
echo"<h4>Matemematical operation in php</h4>";
echo"<br>";
echo "Return Positive Number(-10)=:".abs(-10);
echo"<br>";
echo "Retutn the squre root 25=". sqrt(25);
echo"<br>";
echo"Return the power of number 2^3=" .pow(2 ,3);
echo"<br>";
echo"round a number of next integer 4.8=". ceil(4.8);
echo"<br>";
echo"round a num down the nearest int 4.5=" .floor(4.5);
echo"<br>";
echo"round a number the nearest int7.8=" . round(7.8);
echo"<br>";
$arr = array(10,25,40,63);
echo "array(10,25,40,63)=" .max($arr);
echo"<br>";
echo "array(10,25,40,63)=" .min($arr);
echo"<br>";
echo"Genrete value 1-100=". rand(1,100);
echo"<br>";
echo"Return the remender of 10 / 3".fmod(10,3);
echo"<br>";
echo"Value of pi=".pi();
echo"<br>";
echo"Log of 10 =".log(10);

date_default_timezone_set("Asia/Kolkata");

$time = date('H');
echo"<br>";
if ($time < 12) {
    echo
    "Good Morning";
    echo"<br>";
}elseif ($time <17) {
    echo "Good Afternoon";
    echo"<br>";
}else {
    echo"<h2>Good Evening</h2>";
    echo"<br>";
}

session_start();
$_SESSION['username'] = "Aatif";
echo "<h2> Session Start </h2>";
echo "Welcome". $_SESSION['username'];
session_destroy();
echo"<h2> Session Destroy </h2>";
echo "Welcome". $_SESSION['username'];
?>


</body>
</html>