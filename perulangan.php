<?php

// for($i = 0; $i < 50; $i++){
    // echo "<h2>Ini perulangan ke-$i</h2>";
// }
$nama = "baci";
$salam = "assalamualaikum man teman";

function perkenalan($nama,$salam){
    echo $salam.", ";
    echo "perkenalkan, nama saya ".$nama."<br/>";
    echo "senang berkenalan dengan mu!<br/>";
}

perkenalan("ayyasay", "mikum");

    echo "<hr>";

    $saya = "baci" ;


    perkenalan($saya,$salam);
    ?>