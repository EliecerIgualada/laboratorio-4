<?php
require_once ("cifrado.php");
$obj=new cifrado();
$obj->setBase64("Base64");
$obj->setMd5("Md5");
$obj->setSha1("Sha1");
$obj->setCrc32("Crc32");
$obj->setCrypt("Crypt");
$obj->setHashsha224("Hashsha224");
$obj->setHashsha512("Hashsha512");
$obj->setHashwhirlpool("Hashwhirlpoo");
$obj->setHashsnefru("Hashsnefru");
$obj->setHashhaval1283("Hashhaval1283");
$obj->setHashhaval1285("Hashhaval1285");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>problema 4</title>
</head>
<body>
    <div class="container-sm">
        <h1>Cifrado de texto</h1>
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col"><?php echo "Contraseña a cifrar"?></th>
                    <th scope="col"><?php echo "Esto se va a cifrar"?></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo "Salt"?></th>
                    <td><?php echo sha1("Salt")?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "base64"?></th>
                    <td><?php echo base64_encode("base64") ?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "md5"?></th>
                    <td><?php echo md5($obj->getMd5())?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "sha1" ?></th>
                    <td><?php echo sha1($obj->getSha1())?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "crc32" ?></th>
                    <td><?php echo crc32($obj->getCrc32())?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "crypt" ?></th>
                    <td><?php echo md5($obj->getCrypt())?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "hash-sha224" ?></th>
                    <td><?php echo md5($obj->getHashsha224())?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "hash-sha512" ?></th>
                    <td><?php echo md5($obj->getHashsha512())?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "hash-whirlpool" ?></th>
                    <td><?php echo md5($obj->getHashwhirlpool())?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "hash-snefru" ?></th>
                    <td><?php echo md5($obj->getHashsnefru())?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "hash-haval128,3" ?></th>
                    <td><?php echo md5($obj->getHashhaval1283())?></td>
                </tr>
                <tr>
                    <th scope="row"><?php echo "hash-haval128,5" ?></th>
                    <td><?php echo md5($obj->getHashhaval1285())?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>