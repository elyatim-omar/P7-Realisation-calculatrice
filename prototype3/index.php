<?php 
class calculatrice {
    private $x ;
    private $y ;
    private $operation ;
    function __construct($a,$b,$operation){
        $this->x = $a;
        $this->y = $b;
        $this->operation = $operation;

    }

    function calculer() {
        $solution = null;
        switch($this->operation){
            case'+' :  $solution =  $this->x + $this->y ;
            break;
            case'-' :  $solution =  $this->x - $this->y ;
            break;
            case'x' :  $solution =  $this->x * $this->y ;
            break;
            case'/' :  $solution =  $this->x / $this->y ;
            break;
        }
        return $solution; 
    }
}

$x = null ; $y = null ; $operation = null ; $solution = null ; $afficheur = "" ;

if(isset($_POST['x'])){
    $x = $_POST['x'];
}

if(isset($_POST['y'])){
    $y = $_POST['y'];
}

if(isset($_POST['operation'])){
    $operation = $_POST['operation'];
}

//ajouter

if(isset($_POST['nombre'])){
$nombre = $_POST['nombre'];
    if($operation==null){
        if($x == null) $x = $nombre;
else $x = floatval($x . $nombre);
    } else {  
           if($y == null) $y = $nombre;
        else $y = floatval($y . $nombre); 
  }
}

//calcul
if (isset($_POST['egale'])){
    $egale = $_POST['egale'];

$calculatrice = new calculatrice($x,$y,$operation);
$solution = $calculatrice-> calculer($x,$y,$operation);

}


//affichage

if($solution != null) $afficheur = $solution ;
else{
    if($x != null) $afficheur .= "$x" ;
    if($operation != null) $afficheur .= " " . $operation . " ";
    if($y != null) $afficheur .= "$y" ;
}

//delete

if(isset($_POST['init'])){
    $x = null ;
    $y = null ;
    $operation = null ; 
    $solution = null ; 
    $afficheur = "" ;

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculatrice</title>
</head>
<body>
<form action="" method="post">
<input type="hidden" name="x" value="<?php echo $x ?>">
<input type="hidden" name="y" value="<?php echo $y ?>">
<input type="hidden" name="operation" value="<?php echo $operation ?>">
<input type="text"  name="affichage" value="<?php echo $afficheur ?>">
<input type="submit" name="nombre" value="1">
<input type="submit" name="nombre" value="2">
<input type="submit" name="nombre" value="3">
<input type="submit" name="nombre" value="4">
<input type="submit" name="nombre" value="5">
<input type="submit" name="nombre" value="6">
<input type="submit" name="nombre" value="7">
<input type="submit" name="nombre" value="8">
<input type="submit" name="nombre" value="9">
<input type="submit" name="nombre" value="0">
<input type="submit" name="operation" value="+">
<input type="submit" name="operation" value="-">
<input type="submit" name="operation" value="x">
<input type="submit" name="operation" value="/">
<input type="submit" name="egale" value="=">
<input type="submit" name="init" value="C">
</form>
    
</body>
</html>