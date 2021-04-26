<?php
$arr=array(1,2,3,4,5,6,7,8,9);
$i;
function sum_array($array, $length=3)
{
    $total=0;
    foreach($array as $key=>$value){
        if($key<$length){    
            $total=$value+$total;
        }
    }
    echo $total;
}

sum_array($arr);
echo '</br>';
sum_array($arr,$i=5);
echo '</br>';
sum_array($arr,$i=2);
echo '</br>Nếu không truyền tham số gì cả trong ngoặc đơn sẽ bị lỗi như dưới đây';
sum_array();
echo '</br>Nếu truyền bậy không phải là mảng nó không foreach được nó sẽ la làng';
sum_array(3);

function sum_array_return($array, $length=3)
{
    $total=0;
    foreach($array as $key=>$value){
        if($key==$length){    
            return $total;
        }
        $total=$value+$total;
    }
}

$return=sum_array_return($arr);
echo '</br> Kết quả là '.$return;


function sum_array_return_break($array, $length=3)
{
    $total=0;
    foreach($array as $key=>$value){
        if($key==$length){  
            break;
        }
        $total=$value+$total;
    }
    return $total;
}
$return=sum_array_return_break($arr);
echo '</br> Kết quả là '.$return;

?>
