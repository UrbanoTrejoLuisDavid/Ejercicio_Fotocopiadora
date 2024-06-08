<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papeleria</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
        $cantidad = $_POST['txtcantidad'];
        $membresia = $_POST['rbMembresia'];

        switch($membresia){
            case "Si":
                $stock = 50;
                $descuento = 0.05;

                if($cantidad <= 50){
                    $costo = 0.30;
                    $preciocopias = $cantidad * $costo;
                    $membresiadescuento = $preciocopias * $descuento;
                    $preciofinal = $preciocopias - $membresiadescuento;
                    echo "<li>El total a pagar es: $preciofinal</li>";
                }elseif($cantidad > 50 && $cantidad <= 100){
                    $costo = 0.20;
                    $costostock = 0.30;
                    $copias = $cantidad - $stock;
                    $copiasnormal = $copias * $costo;
                    $copiastock = $stock * $costostock;
                    $preciocopias = $copiasnormal + $copiastock;
                    $membresiadescuento = $preciocopias * $descuento;
                    $preciofinal = $preciocopias - $membresiadescuento;
                    echo "<li>El total a pagar es: $preciofinal</li>";
                }elseif($cantidad > 100){
                    $costo = 0.10;
                    $costostock = 0.30;
                    $copias = $cantidad - $stock;
                    $copiasnormal = $copias * $costo;
                    $copiastock = $stock * $costostock;
                    $preciocopias = $copiasnormal + $copiastock;
                    $membresiadescuento = $preciocopias * $descuento;
                    $preciofinal = $preciocopias - $membresiadescuento;
                    echo "<li>El total a pagar es: $preciofinal</li>";
                }
            break;
            case "No":
                $stock = 50;

                if($cantidad <= 50){
                    $costo = 0.30;
                    $preciocopias = $cantidad * $costo;
                    echo "<li>El total a pagar es: $preciocopias</li>";
                }elseif($cantidad > 50 && $cantidad <= 100){
                    $costo = 0.20;
                    $costostock = 0.30;
                    $copias = $cantidad - $stock;
                    $copiasnormal = $copias * $costo;
                    $copiastock = $stock * $costostock;
                    $preciocopias = $copiasnormal + $copiastock;
                    echo "<li>El total a pagar es: $preciocopias</li>";
                }elseif($cantidad > 100){
                    $costo = 0.10;
                    $costostock = 0.30;
                    $copias = $cantidad - $stock;
                    $copiasnormal = $copias * $costo;
                    $copiastock = $stock * $costostock;
                    $preciocopias = $copiasnormal + $copiastock;
                    echo "<li>El total a pagar es: $preciocopias</li>";
                }
            break;
        }
    ?>
</body>
</html>