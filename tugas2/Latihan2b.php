<?php
    $jawabanIsset = "Isset adalah = mengembalikan nilai true ketika variabel tidak null. <br><br>";
    $jawabanEmpty = "Empty adalah = mengembalikan true jika variabel adalah string kosong.";
    
    function soal($style){
        echo $GLOBALS['jawabanIsset'];
        echo $GLOBALS['jawabanEmpty'];
    }
    
    
    echo soal( 
        "font-family: Arial; font-size:28px; color:#8c782d; font-style:italic; font-weight: bold;"
    );

?>