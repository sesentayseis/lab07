<html>
    <?php
        include("conexion/cn.php");
        $xc=conectar();
        $sql_img = "SELECT * FROM imagenes WHERE idImagenes=2";
        $res_img = mysqli_query($xc, $sql_img);
    ?>
    <head>
        <link type="text/css" rel="stylesheet" href="css/css_registro.css" >
    </head>
    <body>
        <form method="post" action="login.php">
            <div id="contenedor">
                <div class="titulo">
                        <img class="gope" <?php while($imag = mysqli_fetch_array($res_img)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="logo_titulo"  ';
                        } ?> > 
                </div>
                <div id="datos">
                    <input class="dat" type="text" name="usuario" placeholder="usuario">
                    <input class="dat" type="password" name="password" placeholder="password">
                            
                </div>
                <div id="enviar">
                <br>
                    <input class="env" type="submit" value="Enviar">
                </div>
            </div>
        </form>
    <body>
<html>
