<?php


//Read file
$FileText = fopen("input.txt","r") or die("Unable to open file!");
echo "Values number in file input.txt: \n";
echo fread($FileText,filesize("input.txt"));
$arr = explode("\n", file_get_contents('input.txt'));
// CountRepeatNumber($array);

fclose($FileText);

$result = array();
for($i = 0;$i< count($arr)-1; $i++){
    $count = 1;
    for($j=$i+1;$j<count($arr);$j++){
        if($arr[$i] == $arr[$j]){
            $count++;
            if(!in_array($arr[$i], $result) && $count >= 3){
                array_push($result, $arr[$i]);
            }
        }
        else{
            $count = 1;
        }
      
    }
}
echo "\n Cac so xuat hien 3 lan tro len: ";
    foreach($result as $element){
        echo $element . " ";
    }
    echo "\n";


//Solution 2

// function CountRepeatNumber($arr)
// {
//     //Create new array sort increase value
//     $b = $arr;
//     for($j =0 ;$j< count($b);$j++){
//     for($i =0; $i< count($b)-1;$i++){
//         if($b[$i] > $b[$i+1]){
//             swap2($b[$i], $b[$i+1]);
//         }
//     }}
//     getNumberRepeat($b);
// }
// function swap2(&$x, &$y) {
//     list($x,$y) = array($y, $x);
// }
// function getNumberRepeat($array){
//     $count = 1;
//     $tempNumber = $array[0];
//     $result = array();
//     //Count repeat number
    
//     for($i =1; $i< count($array); $i++){
//         if($array[$i] == $tempNumber){
//             $count++;
//             if($count >= 3){
//                 if(!in_array($tempNumber, $result)){
//                     array_push($result, $tempNumber);
//                 }
//             }
//         }
//         else{
//                 $tempNumber = $array[$i+1];
//                 $count =1;
//         }
//     }

//     echo "\n Cac so xuat hien 3 lan tro len: ";
//     foreach($result as $element){
//         echo $element . " ";
//     }
//     echo "\n";
// }
?>