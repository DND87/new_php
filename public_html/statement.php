<?php
$name = "Quang";
$name = "An";

if ($name == "Quang") {
    echo "Code ngu";
    echo '<br>';
    echo "Xinh đẹp";
}
echo '<br>';
if ($name == "Quang") 
    echo "Code ngu";
    echo "Xinh đẹp";

if ($name == "Diep") {
    echo "Code ngu";
    echo ", không ai ngu bằng";
} else {
    echo "Không code, lương cao";
}

$name = "Quang";
$ho = "Nam";
if ($name == "Quang") {
    echo "Code ngu";
    echo ", không ai ngu bằng";
} else if ($name == "Nam") {
    echo "Code giỏi, lương thấp";
} else {
    echo "Không code, lương cao";
}


$name = "Diep";
switch ($name) {
    case "Diep":
    case "Quang":
        echo "Code ngu";
        echo ", không ai ngu bằng";    
        echo "Code giỏi, lương thấp";
    break;
    case "Nam":
        echo "Không code, lương cao";
    break;
    default:
        throw new Exception("Chưa định nghĩa");
    break;
}
echo "<br>";
for ($i=1; $i<=3; $i++) {
        echo "The number is " . $i . "<br>";
        echo "The number is " . ($i+1) . "<br>";
    }

$i = 1;
    while ($i <= 3) {
        echo "The number is " . $i . "<br>";
        $i++;
    }

$i = 1;
    do {
        echo "The number is " . $i . "<br>";
        $i++;
    } while($i <= 3);


$arr = array(1, 2, 3);
    foreach ($arr as $value) {
        echo "The number is " . $value . "<br>";
    }
    // hoặc có thể dùng foreach với key
    foreach ($arr as $key => $value) {
        echo "The number is " . $value . ", key is $key <br>";
    }



?>









