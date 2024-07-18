<?php
    include("../../controllers/auth.php");
    $idUser = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisar</title>
    <?php
    include("../template/link_head.php");
    ?>
    <link rel="stylesheet" href="../../css/asesor/document.css">
</head>

<body>
    <?php
    include("../template/header.php");
    ?>
    <div class="container">
        <div class="content_rev">
            <div class="read_pdf">
                <embed src="../../database/pdf/IO - Piko's Grill.pdf" type="application/pdf">
            </div>
            <div class="desc_pdf">
                <span>Añadir comentario</span>
                <form action="">
                    <textarea name="" id="" class="textA_rev"></textarea>
                    <div class="btn_opt">
                        <a href="documentos.php" class="btn btn_doc">Regresar</a>
                        <input class="btn btn_submit" type="submit" value="Aceptar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>