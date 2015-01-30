<?php
$numero1 = 0;
$numero2 = 0;
$iteraciones =10;
$factorial = "";
$msg = "";
if(isset($_POST["btnPcr"])){
  // numero1
  $numero1 =intval($_POST["numero1"]);
  $numero2 =intval($_POST["numero2"]);
  $newValue = $numero1;
  for($i = 0; $i<$numero1; $i++){
    $newVlaue *= $numero1;
  }
  $msg="el valor: $numero1 a la potencia $numero2 es igual a $newValue";
}
if(isset($_POST["btnRev"])){
  // echo numero1 * itracion --
if(isset($_POST["btnRev"])){
    $numero1 =intval($_POST["numero1"]);
    $iteraciones =intval($:POST["iteraciones"]);
    $contador = 1;
    while($iteraciones>0)
    {
      $msg .="$contador).producto:". ($numero1*$iteciones)."</br>"
    }
}
if(isset($_POST["btnfac"])){
  // factorial numero2
  $numero2 = intval($_POST["numero2"]);
  $factorial = 1;
  do {
    $factorial *= $numero2;
    $numero2 = $numero2 - 1;
  } while ($numero2 > 0);
  echo $factorial;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>ejercicio de ciclo </title>
</head>
<body>
  <h1>ejercicio  de ciclo  </h1>
  <form action="ejercicio1.php " method="post">

    <label for="numero1">NUNERO 1</label>
      <imput type="text" id="numero1" name="numero1" value="<?php echo $numero1;?>"/>
    </br>
    <label for="numero2">NUNERO 2</label>
    <imput type="text" id="numero2" name="numero2" value="<?php echo $numero1;?>"/>


      <br>
      <label for="interacciones">numero de interacciones</label>
      <selecct name ="iteracciomes" id="ietraciones">
      <option value="10">10</option>
      <option value="20">20</option>
      <option value="50">50</option>
      </select>
      <br/>
      <imput type"submit" value="procesar"
      name="btnPcr" id="btnPcr"/>
      <imput type"submit" value="reversar"
      name="btnRev" id="btnRev"/>
      <imput type"submit" value="factorial"
      name="btnfac" id="btnfac"/>
    </form>
    <div>
       <?php echo $msg;?>
    </div>
</body>
</html>
