<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!-- php syntax  -->
<!--    <?php ?>-->

<?php 

// $date = 21;


// if($date > 5 && $date < 11  ){
//     echo 'Good morning';
// }elseif($date < 17 && $date > 10){
//     echo 'Good Day';
// }elseif($date > 16 && $date < 21 ){
//     echo 'Good Evening';
// }else{
//     echo 'Good Night';
// }


// $num = 1;

// while($num <= 5){
//     echo "This Number is: ". $num . "<br>";
//     $num++;
// }

// echo "<hr>";

// for($num = 1; $num <= 5; $num++){
//     echo "This Number is: ". $num . "<br>";
// }

// index array 
// $abc = Array('apple','banana','orange','mango');

// echo $abc[0]. '<br>'. $abc[1]. '<br>'.$abc[2]. '<br>'.$abc[3] ;

// echo "<hr>";

//     $num = 0;
//     while($num < count($abc)){
//         echo $abc[$num]. '<br>';
//         $num++;
//     }

// echo "<hr>";


// for($num = 0; $num < count($abc); $num++){
//         echo $abc[$num]. '<br>';
//     }


// echo "<hr>";


// foreach($abc as $value ){
//     echo $value . '<br>';
// }


// $abc = ['kanak' => '25', 'dsjf' => '30', 'sdhf' => '40'];

// foreach ($abc as $key => $value) {
//     echo "Name=" . $key . ", Age=" .$value . "<br>";
// }


$phone = Array(
    Array('Samsung',100,50),
    Array('Apple',20,5),
    Array('Oppo',500,150),
);

echo $phone[0][0] . "- Total Stock: " . $phone[0][1] . ", Total Sale: " . $phone[0][2] . '<br>';
echo $phone[1][0] . "- Total Stock: " . $phone[1][1] . ", Total Sale: " . $phone[1][2] . '<br>';
echo $phone[2][0] . "- Total Stock: " . $phone[2][1] . ", Total Sale: " . $phone[2][2] . '<br>';


?>


</body>
</html>