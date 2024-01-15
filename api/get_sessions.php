<?php include_once 'db.php';
$movie=$_GET['movie'];
$date=$_GET['date'];
$H=date("G");
$start=($H>=14 && $date==date("Y-m-d"))?7-ceil(((24-$H)/2)):1;

for($i=$start;$i<=5;$i++){
    echo "<option value='{$sess[$i]}'>";
    echo "{$sess[$i]} 剩餘座位 20";
    echo "</option>";
}

/***
 * 1.去資料表撈出電影，日期場次訂單
 * 2.根據訂單，機算座位數
 * 3.在迴圈使用20-座位數來取得剩餘座位數
 */


// $movie=$_GET['movie'];
// $date=$_GET['date'];
// $H=date("G");
// $start=($H>=14 && $date==date("Y-m-d"))?7-ceil((24-$H)/2):1;

// for($i=$start;$i<=5;$i++){
//     echo "<option value='{$sess[$i]}'>{$sess[$i]} 剩餘座位 20</option>";
// }

?>