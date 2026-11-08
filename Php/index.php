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


?>


</body>
</html>