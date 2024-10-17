<?php
// задание 41 
$str = 'abcde';
echo $str[0];
echo $str[2];
echo $str[4];
?>

<?php
// задание 41 
$str = 'abcde';
echo $str[4];
echo $str[3];
echo $str[2];
echo $str[1];
echo $str[0];
?>

<?php
// задание 41 
$str = 'abcde';
$num = 0;

echo $str[$num];
?>

<?php
// задание 42
$str = 'abcde';
echo $str[strlen($str) - 1];
?>

<?php
// задание 42 
$str = 'abcde';
echo $str[strlen($str) - 2];
?>

<?php
// задание 42 
$str = 'abcde';
echo $str[strlen($str) - 3];
?>

<?php
// задание 43 
$str = '12345';
echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
?>

<?php
// задание 44 
$str = '12345';
echo $str[0] + $str[1] + $str[2] + $str[3] + $str[4];
?>

<?php
// задание 44 
$str = '12345';
echo $str[0] * $str[1] * $str[2] * $str[3] * $str[4];
?>

<?php
// задание 44 
$num = 12345;
$str = (string) $num;

echo $str[4] . $str[3] . $str[2] . $str[1] . $str[0];
?>

<?php
// задание 45 
$num = 1;
$num = $num + 1;
$num = $num + 1;

echo $num;
?>

<?php
// задание 45 
$num = 1;
$num = $num + 2;
$num = $num + 3;

echo $num;
?>

<?php
// задание 46 №1
$num = 47;
$num += 7;
$num -= 18;
$num *= 10;
$num /= 15;
echo $num;
?>

<?php
// задание 46 №2
$str = 'a';
$str .= 'b';
$str .= 'c';

echo $str;
?>

<?php
// задание 47 №1
$num = 10;
$num += 1;
$num++;
$num--;
echo $num;
?>

<?php
// задание 48 №2
$num = 3;
echo ++$num;
?>

<?php
// задание 48 №3
$num = 3;
echo $num++;
?>

<?php
// задание 48 №4
$num = 3;
echo --$num;
?>

<?php
// задание 48 №5
$num = 3;
echo $num--;
?>


<?php
// задание 48 №6
$num1 = 3;
$num2 = $num1++;
echo $num1;
echo $num2;
?>

<?php
// задание 48 №7
$num1 = 3;
$num2 = --$num1;
echo $num1;
echo $num2;
?>

<?php
// задание 48 №8
$num1 = 3;
$num2 = $num1--;
echo $num1;
echo $num2;
?>

<?php
// задание 48 №9
$num1 = 3;
$num1++;
$num2 = $num1--;
echo $num1++;
echo --$num2;
?>

<?php
// задание 49 №1
echo 60 * 1140; // количество секунд в сутках
?>

<?php
// задание 49 №2
echo 60 * 1140 * 30; // количество секунд в 30 сутках
?>

<?php
// задание 49 №3
echo 60 * 1140 * 365; // количество секунд в году
?>

<?php
// задание 49 №4
echo 365 * 1140; // количество минут в году
?>

<?php
// задание 49 №5
echo 2 ** 20; // количество байт в мегабайте
?>

<?php
// задание 49 №6
echo 2 ** 30 * 10; // количество байт в гигабайте
?>

<?php
// задание 49 №7
echo 2 ** 40; // количество байт в терабайте
?>

<?php
// задание 49 №8
echo 2 ** 30; // количество килобайт в терабайте
?>

<?php
// задание 50 №1
$r = 5;
$s = pi() * pow($r, 2);

echo "Площадь круга с радиусом $r: $s";
?>

<?php
// задание 50 №2
$a = 4;
$s = pow($a, 2);

echo "Площадь квадрата со стороной $a: $s";
?>

<?php
// задание 50 №3
$a = 5;
$b = 3;
$s = $a * $b;

echo "Площадь прямоугольника со сторонами $a и $b: $s";
?>

<?php
// задание 50 №4
$a = 5;
$b = 3;
$p = 2 * ($a + $b);

echo "Периметр прямоугольника со сторонами $a и $b: $p";
?>

<?php
// задание 50 №5
$tc = 25;
$tf = ($tc * 9 / 5) + 32;

echo "Температура в градусах Фаренгейта: $tf";
?>

<?php
// задание 50 №6
$tf = 77;
$tc = ($tf - 32) * 5 / 9;

echo "Температура в градусах Цельсия: $tc";
?>