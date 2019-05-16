<?php

# valor de conversión


 

# valor a convertir

if(isset($_POST["aconvertir"]) && (is_numeric($_POST["aconvertir"]) || is_numeric(str_replace(",",".",$_POST["aconvertir"]))))

{

    $aconvertir=str_replace(",",".",$_POST["aconvertir"]);

}else{

    $aconvertir=0;

}

 

# calculo

$resultado=$aconvertir/18.97;

?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Convertidor de Moneda</title>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>

 

<body>

    <h1>Conversor de Monedas</h1>

    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">



 

        <br><span>Pesos</span>

            <input type="text" name="aconvertir" value="<?php echo $aconvertir?>">

 

        <br><span>Dolares</span>

            <input type="text" name="resultado" readonly value="<?php echo number_format($resultado,2,".",",")?>">

 

        <p><input type="submit" value="Calcular"></p>

    </form>

</body>

</html>