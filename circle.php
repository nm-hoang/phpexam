<?php
    class Circle{
        function GetPeremeter($radius){
            $para = 2 * 3.14 *$radius;
            $para = number_format($para,2);
            return $para;
        }
        function GetAcreage($radius){
            $acr = $radius * $radius * 3.14;
            $acr =  number_format($acr,2);
            return $acr;
        }
    }
    $number_input  = array_map('floatval',$argv)[1];
    if(is_numeric($number_input) && $number_input > 0)
    {
                $cirlce = new Circle();
                echo "\n Radius : ".$number_input ;
                echo "\n The perimeter of the circle: ".$cirlce->GetPeremeter($number_input) ."\n";
                echo " The acreage of the circle: ". $cirlce->GetAcreage($number_input)."\n";

    }
    else{
        echo "Not available\n";
    }

    
?>
