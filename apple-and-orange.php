// Complete the countApplesAndOranges function below.
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    $newapp = []; $neworange = [];
    $totalApp = 0; $totalOrange = 0;
    foreach($apples as $val){ 
        $calApp = $a+$val;
        if($calApp >= $s && $calApp <= $t ){
            $totalApp++;
        }
    }
    foreach($oranges as $val){
        $calApp = $b+$val;
        if($calApp >= $s && $calApp <= $t ){
            $totalOrange++;
        }
    }

    echo $totalApp;
    echo "\n";
    echo $totalOrange;
}
