<?php
require_once("depre.php");
$obj = new depre();
$obj->setOriginal(150000.00);
$obj->setAno(5);
$obj->setAnual(30000.00);
$obj->setCero(0);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 3</title>
</head>
<body>
    <div class="container-sm">
        <h1>Calculo de depresiación</h1>
        <?php
        echo "Precio Original: B/.".$obj->getOriginal()."<br>"."Vida Útil: ".$obj->getAno()." Años"."<br>"."Depresiación Anual: B/.".$obj->getAnual();
        ?>
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Año</th>
                    <th scope="col">Valor por Año</th>
                    <th scope="col">Valor Recuperado</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i=0;$i<=$obj->getAno();$i++){ ?>
                <tr>
                    <th scope="row"> <?php echo $i ?> </th>
                    <td><?php echo $obj->getOriginal(); $obj->calculo1(); ?></td>
                    <td><?php echo  $obj->getCero(); $obj->calculo2();?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
