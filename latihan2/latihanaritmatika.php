<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text"name="bilangan1" placeholder="masukan bilangan1">
        <input type="text"name ="bilangan2" placeholder="masukan bilangan2">
        <input type="submit" value="hitung" name="hitung">
    </form>
</body>
</html>
<?php 

class perhitungan{
    public $bilangan1;
    public $bilangan2;

    public function __construct($bilangan1, $bilangan2)
    {
        $this->bilangan1 = $bilangan1;
        $this->bilangan2 = $bilangan2; 
    }

    public function pertambahan()
    {
      return  $this->bilangan1+$this->bilangan2;
    }
    public function pengurangan()
    {
      return  $this->bilangan1-$this->bilangan2;
    }

      public function pembagian()
    {
      return  $this->bilangan1/$this->bilangan2;
    }
    
    public function perkalian()
    {
      return  $this->bilangan1*$this->bilangan2;
    }
    public function modulus()
    {
      return  $this->bilangan1%$this->bilangan2;
    }
}
if(isset($_POST['hitung'])){
    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
    $perhitungan = new perhitungan($bilangan1, $bilangan2);
    echo "pertambahan ". $perhitungan->pertambahan();
    echo "<br>pengurangan ". $perhitungan->pengurangan();
    echo "<br>perkalian ". $perhitungan->perkalian();
    echo "<br>pembagian ". $perhitungan->pembagian();
    echo "<br>modulus ". $perhitungan->modulus();

}

