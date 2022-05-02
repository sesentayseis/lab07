
 <?php

  header('Content-Type: text/html; charset=ISO-8859-1');
    
?>

<!DOCTYPE html >
<html >
<?php

    include("conexion/cn.php");
    session_start();
    $xc=conectar();
    // $sql = "SELECT * FROM header";
    // $res = mysqli_query($xc , $sql);
//////////////////////Titulo de primera noticia////////////////////////////
    $sql_np_tit1 = "SELECT * FROM no_pri WHERE idno_pri=1";
    $res_np_tit1 = mysqli_query($xc, $sql_np_tit1);
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>info
    $sql_np_tex1 = "SELECT * FROM no_pri Where idno_pri=1";
    $res_np_tex1 = mysqli_query($xc, $sql_np_tex1);
//////////////////////Titulo de primera noticia////////////////////////////
    $sql_np_tit2 = "SELECT * FROM no_pri Where idno_pri=2";
    $res_np_tit2 = mysqli_query($xc, $sql_np_tit2);
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>info
    $sql_np_tex2 = "SELECT * FROM no_pri Where idno_pri=2";
    $res_np_tex2 = mysqli_query($xc, $sql_np_tex2);
//------------------------------------------------------------------------
//---                      info de la empresa                          ---
//------------------------------------------------------------------------

//-------------------------ubicacion
    $sql_ie_u = "SELECT * FROM inf_emp WHERE idinf_emp=1";
    $res_ie_u = mysqli_query($xc, $sql_ie_u);
//-------------------------correo
    $sql_ie_c = "SELECT * FROM inf_emp WHERE idinf_emp=1";
    $res_ie_c = mysqli_query($xc, $sql_ie_c);
//-------------------------numero
    $sql_ie_nu = "SELECT * FROM inf_emp WHERE idinf_emp=1";
    $res_ie_nu = mysqli_query($xc, $sql_ie_nu);
//-------------------------fax
    $sql_ie_f = "SELECT * FROM inf_emp WHERE idinf_emp=1";
    $res_ie_f = mysqli_query($xc, $sql_ie_f);
//-------------------------nombre
    $sql_ie_no = "SELECT * FROM inf_emp WHERE idinf_emp=1";
    $res_ie_no = mysqli_query($xc, $sql_ie_no);
//-------------------------marca
    $sql_ie_m = "SELECT * FROM inf_emp WHERE idinf_emp=1";
    $res_ie_m = mysqli_query($xc, $sql_ie_m);

//-----------------------------------------------------------
//---                      links                          ---
//-----------------------------------------------------------
//-------------------------faceboock
$sql_nrd1 = "SELECT * FROM links WHERE idlinks=1";
$res_nrd1 = mysqli_query($xc, $sql_nrd1);
//-------------------------google
$sql_nrd2 = "SELECT * FROM links WHERE idlinks=2";
$res_nrd2 = mysqli_query($xc, $sql_nrd2);
//-------------------------twitter
$sql_nrd3 = "SELECT * FROM links WHERE idlinks=3";
$res_nrd3 = mysqli_query($xc, $sql_nrd3);
//-------------------------you tube
$sql_nrd4 = "SELECT * FROM links WHERE idlinks=4";
$res_nrd4 = mysqli_query($xc, $sql_nrd4);
//-----------------------------------------------------------
//---                     imagenes                        ---
//-----------------------------------------------------------
$sql_img1 = "SELECT * FROM imagenes WHERE idImagenes=1";
$res_img1 = mysqli_query($xc, $sql_img1);

$sql_img2 = "SELECT * FROM imagenes WHERE idImagenes=2";
$res_img2 = mysqli_query($xc, $sql_img2);

$sql_img3 = "SELECT * FROM imagenes WHERE idImagenes=3";
$res_img3 = mysqli_query($xc, $sql_img3);

$sql_img4 = "SELECT * FROM imagenes WHERE idImagenes=4";
$res_img4 = mysqli_query($xc, $sql_img4);

$sql_img5 = "SELECT * FROM imagenes WHERE idImagenes=5";
$res_img5 = mysqli_query($xc, $sql_img5);

$sql_img6 = "SELECT * FROM imagenes WHERE idImagenes=6";
$res_img6 = mysqli_query($xc, $sql_img6);

$sql_img7 = "SELECT * FROM imagenes WHERE idImagenes=7";
$res_img7 = mysqli_query($xc, $sql_img7);

$sql_img8 = "SELECT * FROM imagenes WHERE idImagenes=8";
$res_img8 = mysqli_query($xc, $sql_img8);

$sql_img9 = "SELECT * FROM imagenes WHERE idImagenes=9";
$res_img9 = mysqli_query($xc, $sql_img9);

$sql_img10 = "SELECT * FROM imagenes WHERE idImagenes=10";
$res_img10 = mysqli_query($xc, $sql_img10);

$sql_img11 = "SELECT * FROM imagenes WHERE idImagenes=11";
$res_img11 = mysqli_query($xc, $sql_img11);

$sql_img12 = "SELECT * FROM imagenes WHERE idImagenes=12";
$res_img12 = mysqli_query($xc, $sql_img12);

$sql_img13 = "SELECT * FROM imagenes WHERE idImagenes=13";
$res_img13 = mysqli_query($xc, $sql_img13);

//---------------------------------------------------------
//---                     videos                        ---
//---------------------------------------------------------
$sql_vid1 = "SELECT * FROM videos WHERE idvideos=1";
$res_vid1= mysqli_query($xc, $sql_vid1);

$sql_vid2 = "SELECT * FROM videos WHERE idvideos=2";
$res_vid2= mysqli_query($xc, $sql_vid2);

$sql_vid3 = "SELECT * FROM videos WHERE idvideos=3";
$res_vid3= mysqli_query($xc, $sql_vid3);

//------------------------------------------------------------
//---                     navegador                        ---
//------------------------------------------------------------
$sql_nav1 = "SELECT * FROM navegador WHERE idNavegador=1";
$res_nav1= mysqli_query($xc, $sql_nav1);

$sql_nav2 = "SELECT * FROM navegador WHERE idNavegador=2";
$res_nav2= mysqli_query($xc, $sql_nav2);

$sql_nav3 = "SELECT * FROM navegador WHERE idNavegador=3";
$res_nav3= mysqli_query($xc, $sql_nav3);

$sql_nav4 = "SELECT * FROM navegador WHERE idNavegador=4";
$res_nav4= mysqli_query($xc, $sql_nav4);

$sql_nav5 = "SELECT * FROM navegador WHERE idNavegador=5";
$res_nav5= mysqli_query($xc, $sql_nav5);
?>
<head>
    <meta charset="utf-8">
    <title>Noticias Go P</title>
    <link type="text/css" rel="stylesheet" href="css/Lab02.css" >
</head>
<body>
  <div id="contenedor">
    <!------------------------------------------------------------------------------------Cabeza-->
    <header id="cabeza_principal">
      <div class="Logo">

        <img <?php while($imag = mysqli_fetch_array($res_img1)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="logo de la empresa" ';
                          } ?> > 

      </div>
      <div class="Titulo">
      <img <?php while($imag = mysqli_fetch_array($res_img2)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="titulo" height="130px"';
                          } ?> > 
      </div>
      <?php 
      echo 'Usuario: '.$_SESSION['usuario'];
      ?>
    </header>
    <!---------------------------------------------------------------------------------navegador-->
    <nav>
      <!--inicio-->
      <a  ><?php  while($nav = mysqli_fetch_array($res_nav1)){
                              echo '<a  href="'.$nav['Ubicacion'].'"'.' class="nav-enlace" > '.$nav['Opcion'].'</a>';
                            } ?>
      </a>
      <!--Ultimas noticias-->
      <a  ><?php while($nav = mysqli_fetch_array($res_nav2)){
                              echo '<a  href="'.$nav['Ubicacion'].'"'.' class="nav-enlace" > '.$nav['Opcion'].'</a>';
                            } ?>
      </a>                            
      <!--Nosotros-->
      <a  ><?php while($nav = mysqli_fetch_array($res_nav3)){
                              echo '<a  href="'.$nav['Ubicacion'].'"'.' class="nav-enlace" > '.$nav['Opcion'].'</a>';
                            } ?>
      </a>      
      <!--Servicio-->
      <a  ><?php while($nav = mysqli_fetch_array($res_nav4)){
                              echo '<a  href="'.$nav['Ubicacion'].'"'.' class="nav-enlace" > '.$nav['Opcion'].'</a>';
                            } ?>
      </a>
      <!--usuario-->
      <a class="nav-enlace" ><?php 
      echo 'Usuario: '.$_SESSION['usuario'];
      ?>
      </a>           
    </nav>
    <!------------------------------------------------------------------------------------cuerpo-->
    <section >
        <article class="noticias">         
            
            <div class="cuerpo_noticias">
              <div class="imag_publi">
              <img <?php while($imag = mysqli_fetch_array($res_img3)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="noticia2" ';
                          } ?> > 
              </div>
              <div class="texto">
                <div class="Titulo_noticia" ><?php 
                  while($filas= mysqli_fetch_array($res_np_tit1)){
                    echo $filas['titulo'];
                  }
                ?></div>
                
                <div class="Cuerpo"> 
                <?php 
                  while($filas= mysqli_fetch_array($res_np_tex1)){
                    echo $filas['info'];
                  }
                ?>
                </div>
              </div>
            </div>    
        </article>

        <article class="noticias">         
            
          <div class="cuerpo_noticias">
            <div class="imag_publi">
            <img <?php while($imag = mysqli_fetch_array($res_img4)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="Noticia2" ';
                          } ?> > 
            </div>
            <div class="texto">
              <div class="Titulo_noticia"> <?php 
                  while($filas= mysqli_fetch_array($res_np_tit2)){
                    echo $filas['titulo'];
                  }
                ?></div>
              
              <div class="Cuerpo"> <?php 
                  while($filas= mysqli_fetch_array($res_np_tex2)){
                    echo $filas['info'];
                  }
                ?>
              </div>
            </div>
          </div>    
      </article>
       
    </section>
    
    <!------------------------------------------------------------------------------------barra lateral-->
    <aside >
      
      
        <div class="Publicidad">
         
        <video <?php while($video = mysqli_fetch_array($res_vid1)){
                            echo '<img  src="'.$video['Ubi_ar'].'"'.'alt="sub_noticia1" width="100%" autoplay muted loop ';
                          } ?>> </video>
        </div>
        <div class="noticias-alternas">
          <article class="Noticia1"> 
          <img <?php while($imag = mysqli_fetch_array($res_img5)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="sub_noticia1" ';
                          } ?> > 
          </article>
          <article class="Noticia2"> 
          <img <?php while($imag = mysqli_fetch_array($res_img6)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="sub_noticia2" ';
                          } ?> >
          </article>
          <article class="Noticia3"> 
          <img <?php while($imag = mysqli_fetch_array($res_img7)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="sub_noticia3" ';
                          } ?> >
          </article>
        </div>
        <div class="Publicidad">
         
        <video <?php while($video = mysqli_fetch_array($res_vid2)){
                            echo '<img  src="'.$video['Ubi_ar'].'"'.'alt="sub_noticia1" width="100%" autoplay muted loop ';
                          } ?>> </video>                
          
          
        </div>
        <div class="noticias-alternas">
          <article class="Noticia1"> 
          <img <?php while($imag = mysqli_fetch_array($res_img8)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="sub_noticia4" ';
                          } ?> >
          </article>
          <article class="Noticia2"> 
          <img <?php while($imag = mysqli_fetch_array($res_img9)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="sub_noticia5" ';
                          } ?> >
          </article>
          <article class="Noticia3"> 
          <img <?php while($imag = mysqli_fetch_array($res_img10)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="sub_noticia6" ';
                          } ?> >
          </article>
        </div>
        <div class="Publicidad">
         
        <video <?php while($video = mysqli_fetch_array($res_vid3)){
                            echo '<img  src="'.$video['Ubi_ar'].'"'.'alt="sub_noticia1" width="100%" autoplay muted loop ';
                          } ?>> </video> 
          
        </div>
        <div class="noticias-alternas">
          <article class="Noticia1"> 
          <img <?php while($imag = mysqli_fetch_array($res_img11)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="sub_noticia7" ';
                          } ?> >
          </article>
          <article class="Noticia2"> 
          <img <?php while($imag = mysqli_fetch_array($res_img12)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="sub_noticia8" ';
                          } ?> >
          </article>
          <article class="Noticia3"> 
          <img <?php while($imag = mysqli_fetch_array($res_img13)){
                            echo '<img  src="'.$imag['Ubi_ar'].'"'.'alt="sub_noticia9" ';
                          } ?> >
          </article>
        </div>
 
      
    </aside>
    <!-------------------------------------------------------------------------------------------pie
    <footer>
      <div class="Info">
        <img src="imagenes/info.png" height="180px">
        
      </div>
    </footer>-->
   
    <footer class="text-center footer-style">
      <div class="container">
          
            <div id="izquierda">
                  <h1 id="gope">GO PE</h1>
                  <h3 id="noticias">NOTICIAS</h3>
                  
                  <p>
                  <!--1-->
                  <?php 
                  while($filas= mysqli_fetch_array($res_ie_u)){
                    echo $filas['ubi'];
                  }?><br>
                  <!--2-->
                  <?php 
                  while($filas= mysqli_fetch_array($res_ie_c)){
                    echo $filas['correo'];
                  }?><br>
                  <!--3--> 
                  <?php 
                  while($filas= mysqli_fetch_array($res_ie_nu)){
                    echo $filas['numero'];
                  }?><br>
                  <!--4--> 
                  <?php 
                  while($filas= mysqli_fetch_array($res_ie_f)){
                    echo $filas['fax'];
                  }?><br><br>                                  
                  <!--5-->
                  <?php 
                  while($filas= mysqli_fetch_array($res_ie_no)){
                    echo $filas['nombre'];  
                  }?><br>
                  <!--6-->
                  <?php 
                  while($filas= mysqli_fetch_array($res_ie_m)){
                    echo $filas['marca'];  
                  }?><br>                          
                  </p>
            </div>
              <div class="derecha">
                  <ul id="lista"> <!--importar libreria de stikers-->
                      <ul>
                          <a target="_blank" class="Red-Social" ><?php while($redes = mysqli_fetch_array($res_nrd1)){
                            echo '<a target="_blank" href="'.$redes['link'].'"class="Red-Social" >'.$redes['red_social'].'</a>';
                          } ?>
                          </a>
                    </ul>
                      <ul>
                          <a target="_blank" class="Red-Social" ><?php while($redes = mysqli_fetch_array($res_nrd2)){
                            echo '<a target="_blank" href="'.$redes['link'].'"class="Red-Social" >'.$redes['red_social'].'</a>';
                          } ?>
                          </a>
                      </ul>
                      <ul>
                          <a target="_blank" class="Red-Social" ><?php while($redes = mysqli_fetch_array($res_nrd3)){
                            echo '<a target="_blank" href="'.$redes['link'].'"class="Red-Social" >'.$redes['red_social'].'</a>';
                          } ?>
                          </a>      
                      </ul>
                      <ul>
                          <a  target="_blank" href="#" class="Red-Social">Blog de Noticias</a>
                      </ul>
                      <ul>
                          <a target="_blank" class="Red-Social" ><?php while($redes = mysqli_fetch_array($res_nrd4)){
                            echo '<a target="_blank" href="'.$redes['link'].'"class="Red-Social" >'.$redes['red_social'].'</a>';
                          } ?>
                          </a>
                      </ul>
                    <ul>
                      <a  target="_blank" href="#" class="Red-Social">Anuncie aqui</a>
                  </ul>
                  </ul>
              </div>
      </div>
  </footer>
                   
  </div>
</body>
</html>
