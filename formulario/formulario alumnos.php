<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menú Principal</title>
<link rel="stylesheet" href="styles.css">

<body> 
	<head>
		<style type="text/css">
			
			 {
				margin:10px;
				padding:15px;
			}
			
			#header {
				margin:auto;
				width:900px;
				font-family: Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#6157f1;
				color:#090a09;
				text-decoration:none;
				padding: 12px 18px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#bdbae4;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:280px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
	</head>
		<div id="header">
			<ul class="nav">
			  
				
				<li><a href="">Entradas</a>
					<ul>
						<li><a href="registrar.php">Alumnos</a></li>
						<li><a href="">Carreras</a>
              <ul>
								<li><a href="">Materias</a></li>
								<li><a href="">Carreras</a></li>
              </ul>
            </li>
            <li><a href="">Salir</a></li>
		       </ul>
				</li>
				
          <li><a href="">Procesos</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a></li>
					</ul>
				</li>
				
       <li><a href="">Reportes</a>
					<ul>
						<li><a href="generar datos.php">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
					</ul>
				</li>
				
       <li><a href="">Seguridad/Mantenimiento</a>
					<ul>
					</ul>
				</li>
				
				<li><a href="">Acerca de</a>
					<ul>
						<li><a href="">Submenu1</a></li>
					</ul>
				</li>
	
			</ul>
		</div>
	</body>
</html>


<footer>
  <address> 
	<style>{
		text-aling: center;
	}
	</style>
    Alejadro Rodriguez<br> 
    C.I: 28.204.767<br> 
    carrera: informatica<br>  
    
  </address>
</footer>