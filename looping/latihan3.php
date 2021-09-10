<?php 
 

  for( $i=2; $i<=128; $i*=2){
echo $i." ";}

echo"<hr>";

for($i=625;$i>=5;$i/=5){
echo $i." ";
}

echo "<hr>";
$angkas =[18,45,29,61,47,34];

foreach($angkas as  $angka){
  $nilai = $angka%3;

  echo "$angka % 3=$nilai<br>";
}


echo "<hr>";

  $i = 2;
  do {
      echo "$i ";
      $i*=2;
  } while ($i <= 128);
  echo "<hr>";

  $i = 3125;
  do {
      echo "$i ";
      $i /=5;
  } while ($i >= 5);
  echo "<hr>";


  $star=6;
	for( $a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo "&nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}
?>
