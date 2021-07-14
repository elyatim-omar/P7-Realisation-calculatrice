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
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <title>calculatrice</title>
</head>
<body>
<div id="container">
<center>
<form action="" method="post">
<input type="hidden" name="x" value="<?php echo $x ?>">
<input type="hidden" name="y" value="<?php echo $y ?>">
<input type="hidden" name="operation" value="<?php echo $operation ?>">
<input id="case" type="text"  name="affichage" value="<?php echo $afficheur ?>">

<table>
       <tr>
         <td>
<input class="number" type="submit" name="nombre" value="1">
</td>
         <td>
<input class="number" type="submit" name="nombre" value="2">
</td>
<td>
<input class="number" type="submit" name="nombre" value="3">
</td>
<td>
<input class="operator" id="button-C"  type="submit" name="init" value="C">
</td>
</tr>

<tr>
<td>
<input class="number" type="submit" name="nombre" value="4">
</td>
<td>
<input class="number" type="submit" name="nombre" value="5">
</td>
<td>
<input class="number" type="submit" name="nombre" value="6">
</td>
<td>
<input class="operator" id="button-"   type="submit" name="operation" value="+">
</td>
</tr>

<tr>
    <td>        
<input class="number" type="submit" name="nombre" value="7">
</td>
<td>
<input class="number"  type="submit" name="nombre" value="8">
</td>
<td>
<input class="number"  type="submit" name="nombre" value="9">
</td>
<td>
<input class="operator" id="button--"   type="submit" name="operation" value="-">
</td>
</tr>
<tr>
<td>
<input class="operator"  type="submit" name="operation" value="x">
</td>
         <td>
<input class="number" type="submit" name="nombre" value="0">
</td>
<td>
<input class="operator"  type="submit" name="operation" value="/">
</td>
<td>
<input class="equal" type="submit" name="egale" value="=">
</td>
       </tr>

     </table>

</form>
</center>
</div>
</body>
</html>