<!doctype html>

<?php include ('html/overall/header.php');?>


<body>

<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-md-12">

            <div class="top_left_cont intro zoomIn wow animated">
                <center>
                <div>
                <a href="index.php"><img class="logo" id="logo" src="views/faviconblanco.png" alt="logo"></a>
                    </div>
            </center>
                <br/>
                <h2 style="color: #41699b;"> <strong>Venta de repuestos automotriz  </strong> </h2>
                <div class="underline"></div>
              <ul class="social_links">
            <li class="instagram animated bounceIn wow delay-02s animated" style="visibility: visible; animation-name: bounceIn;"><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s animated" style="visibility: visible; animation-name: bounceIn;"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s animated" style="visibility: visible; animation-name: bounceIn;"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
          </ul> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Hero_Section-->

<?php include ('html/overall/menu.php');?>

<section class="page_section" id="clients"><!--page_section-->
    <h2>Marcas con las que trabajamos</h2>
    <!--page_section-->
    <div class="client_logos"><!--client_logos-->
        <div class="container">
            <ul class="fadeInRight animated wow">
                <li><a href="javascript:void(0)"><img src="views/img/ford.png" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="views/img/chevrolet.png" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="views/img/toyota.png" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="views/img/renault.png" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="views/img/fiat.png" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="views/img/mitsubishi.png" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="views/img/chrysler.png" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="views/img/honda.png" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="views/img/jeep.png" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="views/img/dodge.png" alt=""></a></li>
                <li><a href="javascript:void(0)"><img src="views/img/hyundai.png" alt=""></a></li>
            </ul>
        </div>
    </div>
</section>
<!--client_logos-->

<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Tipos de Repuestos </h2>
	<h6>Tenemos 4 tipos diferentes de repuesto automotriz de varias marcas y modelos. <br>
        Pide <strong><a href="#contact" style="color: #13ec13;">AQUI</a></strong> tu repuesto</h6>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-md-4">
		<div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-clock-o"></i></span> </div>
          <div class="service_block">

            <h3 class="animated fadeInUp wow">Kit de Tiempo</h3>
            </div>
        </div>
        <div class="col-md-4">
		<div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-thermometer-full"></i></span> </div>
		<div class="service_block">
            <h3 class="animated fadeInUp wow">Compresores</h3>
            </div>
        </div>
        <div class="col-md-4">
		<div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-bolt"></i></span> </div>
          <div class="service_block">

            <h3 class="animated fadeInUp wow">Alternadores</h3>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service-->

<section id="aboutUs"><!--Aboutus-->
    <div class="inner_wrapper aboutUs-container fadeInLeft animated wow">
        <div class="container">
            <h2>Lista de Repuestos</h2>
            <h6>Consigue le repuesto que necesites</h6>
            <div class="inner_section">
                <div class="row">
                    <div class="col-lg-12 about-us">
                        <div class="row">


                            <div class="col-md-12">
                                <div class="portlet box blue">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="fa fa-globe"></i>REPUESTOS
                                        </div>
                                        <div class="tools">
                                            <a href="javascript:;" class="collapse">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="portlet-body">

<?php
include('conex.php');
 $result = mysqli_query($link,"

select *
from informacion_repuestos
");
?>
                            <table class="table table-striped table-bordered table-hover" id="sample_2">
                                <thead>
                                <tr>
                                    <th>
                                        Código
                                    </th>
                                    <th>
                                        Tipo de Repuesto
                                    </th>

                                    <th>
                                        Marca
                                    </th>
                                    <th>
                                        Modelo
                                    </th>
                                    <th>
                                        Año
                                    </th>
                                    <th>
                                        Cantidad
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                while ($row=mysqli_fetch_array($result))
                                {
                                    echo '<tr><td>'.$row["codigo"].'</td>';
                                    echo '<td>'.$row["tipo_repuesto"].'</td>';
                                    echo '<td>'.$row["marca"].'</td>';
                                    echo '<td>'.$row["modelos"].'</td>';
                                    echo '<td>'.$row["ano"].'</td>';
                                    echo '<td>'.$row["cantidad"].'</td>';
                                }
                                mysqli_free_result($result);


                                ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                        </div><!-- /.row -->
                    </div><!-- /.col-lg-12 -->
                </div>

            </div>
        </div>
    </div>
</section>
<!--Aboutus-->


<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Póngase en contacto</h2>
	<h6>Utilice el medio de su gusto para contactarnos...</h6>

      </div>
      <div class="row">
        <div class="col-lg-4 wow fadeInLeft">
		 <div class="contact_info">
                            <div class="detail">
                                <h4 style="font-weight: 700!important;color: #41699a;">Llamanos</h4>
                                <p>04244679642<br>
                                04244679642</p>
                            </div>
                            <div class="detail">
                                <h4 style="font-weight: 700!important;color: #41699a;">Envianos un Email</h4>
                                <p>repuestos@ffventas.com</p>
                            </div>

         </div>

        </div>
        <div class="col-lg-8 wow fadeInLeft delay-06s">
         	  <!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->

		<form name="sentMessage" id="contactForm"  novalidate>
		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control"
			   	   placeholder="Nombre Completo" id="name" required
			           data-validation-required-message="Por favor, escriba su nombre completo" />
			  <p class="help-block"></p>
		   </div>
	         </div>
                <div class="control-group">
                  <div class="controls">
			<input type="email" class="form-control" placeholder="Email"
			   	            id="email" required
			   		   data-validation-required-message="Por favor, escriba su email" />
		</div>
	    </div>

            <div class="control-group">
                <div class="controls">
                    <input type="number" class="form-control" placeholder="Numero de contacto"
                           id="numero" required
                           data-validation-required-message="Por favor, escriba su numero de telefono" minlength="11"
                           data-validation-minlength-message="Minimo 11 caracteres"
                           maxlength="11" data-validation-maxlength-message="Muy largo. Maximo 11 caracteres" />
                </div>
            </div>

            <div class="control-group">
                 <div class="controls">
				 <textarea rows="10" cols="100" class="form-control"
                       placeholder="Mensaje" id="message" required
		       data-validation-required-message="Por favor, escriba su mensaje" minlength="15"
                       data-validation-minlength-message="Minimo 15 caracteres"
                        maxlength="999" style="resize:none"></textarea>
		</div>
               </div>
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
        </div>
      </div>
    </section>
  </div>

<?php include ('html/overall/footer.php');?>

</body>
</html>
