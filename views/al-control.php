<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimentar</title>
    <?php
    include("link_head.php");
    ?>
</head>

<body>
    <?php
    include("header.php");
    include("proyecto.php");
    ?>
    <div class="container" style="">
        <div class="content-info-project">
            <table border="0" style="display: flex;">
                <tr>
                    <td>
                        <div class="content-form-alimentar">
                            <a href="al-sintoma.php">
                            <div class="content-form-opalimentar" style="background: #BEBEBE">
                                <center><label for="">Sintoma</label></center>
                            </div>
                            </a>
                            <a href="al-causa.php">
                            <div class="content-form-opalimentar" style="background: #BEBEBE">
                                <center><label for="">Causa</label></center>
                            </div>
                            </a>
                            <a href="al-pronostico.php">
                            <div class="content-form-opalimentar" style="background: #BEBEBE">
                                <center><label>Pronostico</label></center>
                            </div>
                            </a>
                            <div class="content-form-opalimentar">
                                <center><label for="">Control Pronostico</label></center>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <form action="">
                            <div class="content-form-alimentar"
                                style="padding: 1.7em; background: white; flex-direction: column;">
                                <div class="descripcion-container">
                                    <label>Descripcion:</label>
                                    <img src="../img/ayuda.png" class="icon-nav" id="ayudaImg">
                                </div>
                                <br>
                                <textarea name="txtsintomas" class="txtArea_desc"
                                    style="font-size: 15px; background: #EEEEEE"
                                    placeholder="<?php for ($i = 1; $i <= 9; $i++) echo "Control Pronostico 0$i" . "\n"; ?>"></textarea>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="btn_gdata_card">
                            <input type="submit" value="Aceptar" class="btn_gdata">
                        </div>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div id="myModal">
        <div class="modal-content" id="modalContent">
            <label style="font-weight: bold;"><i>Guia rapida:</i></label>
            <p><i>Para insertar los controles de pronostico uno por uno, separelos presionando ENTER como se observa en el campo de texto.</i></p>
        </div>
    </div>
    
</body>
<script src="../js/help.js"></script>
</html>