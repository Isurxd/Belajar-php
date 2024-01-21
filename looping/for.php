<?php 

// $s = 0
// for($s=1; $s<=10; $s++){	
// 	echo "No ke $s"."<br/>";
// }

// $kelas = 0;
// $maxkelas = 12;
// for ($kelas; $kelas <= $maxkelas ; $kelas++) {
//     echo "anda kelas ke = ". $kelas. "<br>";
// }

// $kelas = 2;
// $maxkelas = 12;
// for ($kelas; $kelas <= $maxkelas; $kelas += 2) {
//     echo "Kelas Ke $kelas <br>";
// }

// $kelas = 1;
// $maxkelas = 12;
// for ($kelas; $kelas <= $maxkelas; $kelas += 2) {
//     echo "Kelas Ke $kelas <br>";
// }

// $n = 10;  
// $a = 0;
// $b = 1;

// echo "no ke :";

// for ($i = 0; $i < $n; $i++) {
//     echo "$a ";

//     $temp = $a + $b;
//     $a = $b;
//     $b = $temp;
// }

// $kelas = 1;
//     $maxkelas = 0; 
    
//     for($murid=0; $murid<=7; $murid++){
//     echo " ini angka $maxkelas <br>";
    
//     $tambah = $maxkelas+$kelas;   
//     $kelas = $maxkelas;   
//     $maxkelas =$tambah;
// }

// $kelas = 2;
// $maxkelas = 128;
// for ($kelas; $kelas <= $maxkelas; $kelas += $kelas ) {
//     echo "Kelas $kelas" . "&nbsp";
// }

// for ($i = 400; $i >= 2; $i -= 2 ){
//     echo "$i" . "&nbsp";
// }

$jumlahfilm = 20;
for($film=1; $film<=$jumlahfilm; $film++){
    
if ($film % 4 == 0) {
    $rating = "Luar Biasa";
} else if ($film % 2 == 1) {
    $rating = "Bagus";
} else {
    $rating = "Sangat Bagus";
} 

 echo "Film ke $film: $rating<br>";
}

?>
