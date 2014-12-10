
<?php

if(!isset($_COOKIE['user'])){
	header('Location: ../admin');
	}

 ?>
 
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Admin Tres Lagunas</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="index.html">Administrador</a></h1>
			<h2 class="section_title">Tres Lagunas</h2><div class="btn_view_site"><a href="../index3.php">salir</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p>Bienvenido: <?php echo $_SESSION['sessionUser'];?></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="../inde3.html">Login</a> <div class="breadcrumb_divider"></div> <a class="current"><?php echo $_SESSION['sessionUser'];?></a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Buscar" onFocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		<h3>Cabañas</h3>
		<ul class="toggle">
			<li class="icn_categories"><a href="#">Listar</a></li>
            <li class="icn_new_article"><a href="#">Agregar</a></li>
			<li class="icn_edit_article"><a href="#">Editar</a></li>
			
		</ul>
		<h3>Actividades</h3>
        
        
        	<ul class="toggle">
			<li class="icn_categories"><a href="#">Listar</a></li>
            <li class="icn_new_article"><a href="#">Agregar</a></li>
			<li class="icn_edit_article"><a href="#">Editar</a></li>
			
		</ul>
	

		<h3>Administrador</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="#">Opciones</a></li>
			<li class="icn_security"><a href="#">Securidad</a></li>
			<li class="icn_jump_back"><a href="#">Salir</a></li>
		</ul>
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2014 Tres Lagunas</strong></p>
			
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<h4 class="alert_info">Bienvenido al panel de administración del Santuario del cocodrilo "Tres Lagunas".</h4>
		
		<article class="module width_full">
			<header><h3>Estadísticas</h3></header>
			<div class="module_content">
				<article class="stats_graph">
					<img src="http://chart.apis.google.com/chart?chxr=0,0,3000&chxt=y&chs=520x140&cht=lc&chco=76A4FB,80C65A&chd=s:Tdjpsvyvttmiihgmnrst,OTbdcfhhggcTUTTUadfk&chls=2|2&chma=40,20,20,30" width="520" height="140" alt="" />
				</article>
				
				<article class="stats_overview">
					<div class="overview_today">
						<p class="overview_day">Hoy</p>
						<p class="overview_count">1,276</p>
						<p class="overview_type">Visítas</p>
						<p class="overview_count">2,103</p>
						<p class="overview_type">Páginas</p>
					</div>
					<div class="overview_previous">
						<p class="overview_day">Este Mes</p>
						<p class="overview_count">7,646</p>
						<p class="overview_type">Visítas</p>
						<p class="overview_count">2,054</p>
						<p class="overview_type">Páginas</p>
					</div>
				</article>
				<div class="clear"></div>
			</div>
		</article><!-- end of stats article -->
		
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Content Manager</h3>
		<ul class="tabs">
   			<li><a href="#tab1">Posts</a></li>
    		<li><a href="#tab2">Comments</a></li>
		</ul>
		</header>

		<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="1" cellpadding="1" > 
			<thead> 
				<tr> 
   					
    				<th>ID</th> 
    				<th>Fecha Inicio</th> 
    				<th>Fecha Final</th> 
    				<th>Cant. Personas</th>
                    <th>Monto</th>  
                    <th>Estado</th> 
                    <th></th> 
				</tr> 
			</thead> 
			<tbody>
            
            
             
		
                
                
            	
                 <?  
							  
							 if (!($link=mysql_connect("localhost","root",""))) 
   { 
      echo "Error conectando a la base de datos."; 
      exit(); 
   } 
   if (!mysql_select_db("bd_treslagunas",$link)) 
   { 
      echo "Error seleccionando la base de datos."; 
      exit(); 
   } 
                               $result = mysql_query("SELECT * 
FROM  `reservacion` 
WHERE  `fechaInicio` >= NOW( )"); 

if ($row = mysql_fetch_array($result)){ 
  
   do { 
   
$inicio = "". $row['fechaInicio'].""; // DD/MM/YYYY
$partI = explode(' ', $inicio);
$final = "". $row['fechaFinal'].""; // DD/MM/YYYY
$partF = explode(' ', $final);

      echo "	<tr >  
   					<td>[".$row['idReservacion']."]</td> 
    				<td>".$partI[0]."</td> 
    				<td>".$partF[0]."</td> 
    				<td>".$row['noPersonas']."</td>
					<td>".$row['total']."</td>  
    				<td><input type='image' src='images/".$row['estado'].".jpg' title='Edit'></td> 
				</tr>"; 
   } while ($row = mysql_fetch_array($result)); 
 
} else { 
echo "&iexcl; No se ha encontrado ning&uacute;n registro !"; 
} 
							  
							  ?>
                                  
                
                
              
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
			<div id="tab2" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th></th> 
    				<th>Comment</th> 
    				<th>Posted by</th> 
    				<th>Posted On</th> 
    				<th>Actions</th> 
				</tr> 
			</thead> 
			<tbody> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Lorem Ipsum Dolor Sit Amet</td> 
    				<td>Mark Corrigan</td> 
    				<td>5th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Ipsum Lorem Dolor Sit Amet</td> 
    				<td>Jeremy Usbourne</td> 
    				<td>6th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr>
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Sit Amet Dolor Ipsum</td> 
    				<td>Super Hans</td> 
    				<td>10th April 2011</td> 
    				<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Dolor Lorem Amet</td> 
    				<td>Alan Johnson</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
				<tr> 
   					<td><input type="checkbox"></td> 
    				<td>Dolor Lorem Amet</td> 
    				<td>Dobby</td> 
    				<td>16th April 2011</td> 
   				 	<td><input type="image" src="images/icn_edit.png" title="Edit"><input type="image" src="images/icn_trash.png" title="Trash"></td> 
				</tr> 
			</tbody> 
			</table>

			</div><!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article><!-- end of content manager article -->
		
		<article class="module width_quarter">
			<header><h3>Mensajes de Contacto</h3></header>
			<div class="message_list">
				<div class="module_content">
					<div class="message">
					<p>Tienen disponible el primer fin de semana de enero?</p>
					<p><strong>Misue Angel</strong></p></div>
					<div class="message">
					<p>En qué consiste el sendero interpretativo río lacanja.</p>
					<p><strong>Eunice Lopez</strong></p></div>
					<div class="message">
					<p>Si hago una transferencia electrónica como podemos confirmar la reservación.</p>
					<p><strong>Mayra González</strong></p></div>
					<div class="message">
					<p>Hasta cuantas personas puede entrar el la cabaña rústica?.</p>
					<p><strong>Daniel Gómez</strong></p></div>
					<div class="message">
					<p>A partir de qué hora puedo ocupar mi reservación la fecha establecida.</p>
					<p><strong>Pablo Romero</strong></p></div>
				</div>
			</div>
			<footer>
				<form class="post_message">
					<input type="text" value="Respuesta" onFocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
					<input type="submit" class="btn_post_message" value=""/>
				</form>
			</footer>
		</article><!-- end of messages article -->
		
		<div class="clear"></div>
		
		<article class="module width_full">
			<header><h3>Post New Article</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Post Title</label>
							<input type="text">
						</fieldset>
						<fieldset>
							<label>Content</label>
							<textarea rows="12"></textarea>
						</fieldset>
						<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Category</label>
							<select style="width:92%;">
								<option>Articles</option>
								<option>Tutorials</option>
								<option>Freebies</option>
							</select>
						</fieldset>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Tags</label>
							<input type="text" style="width:92%;">
						</fieldset><div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<select>
						<option>Draft</option>
						<option>Published</option>
					</select>
					<input type="submit" value="Publish" class="alt_btn">
					<input type="submit" value="Reset">
				</div>
			</footer>
		</article><!-- end of post new article -->
		
		<h4 class="alert_warning">A Warning Alert</h4>
		
		<h4 class="alert_error">An Error Message</h4>
		
		<h4 class="alert_success">A Success Message</h4>
		
		<article class="module width_full">
			<header><h3>Basic Styles</h3></header>
				<div class="module_content">
					<h1>Header 1</h1>
					<h2>Header 2</h2>
					<h3>Header 3</h3>
					<h4>Header 4</h4>
					<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras mattis consectetur purus sit amet fermentum. Maecenas faucibus mollis interdum. Maecenas faucibus mollis interdum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>

<p>Donec id elit non mi porta <a href="#">link text</a> gravida at eget metus. Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>

					<ul>
						<li>Donec ullamcorper nulla non metus auctor fringilla. </li>
						<li>Cras mattis consectetur purus sit amet fermentum.</li>
						<li>Donec ullamcorper nulla non metus auctor fringilla. </li>
						<li>Cras mattis consectetur purus sit amet fermentum.</li>
					</ul>
				</div>
		</article><!-- end of styles article -->
		<div class="spacer"></div>
	</section>


</body>

</html>