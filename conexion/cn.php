<?php
function conectar(){
    $xc = mysqli_connect("localhost","root","","pagina_noticias");
    return $xc;
    dic();
    // $host="localhost";
    // $bd="pagina_noticias";
    // $ususario="root";
    // $contrasenia="";

    // $xc=mysqli_connect

}
function desconectar($xc){
    mysqli_close($xc);
}
?> 