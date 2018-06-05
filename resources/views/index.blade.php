<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Going Dutch</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Going Dutch App" />
        <meta name="keywords" content="jquery, css3, sliding, box, menu, cube, navigation, portfolio, thumbnails"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
        <style>
			body{
				background:#333 url(bg.jpg) repeat top left;
				font-family:Arial;
			}
			span.reference{
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:12px;
			}
			span.reference a{
				color:#aaa;
				text-transform:uppercase;
				text-decoration:none;
				text-shadow:1px 1px 1px #000;
				margin-right:30px;
			}
			span.reference a:hover{
				color:#ddd;
			}

			h1.title{
				text-indent:-9000px;
				background:transparent url(title.png) no-repeat top left;
				width:633px;
				height:69px;
			}
		</style>
    </head>

    <body>
		<div class="content">
			<h1 class="title">Going Dutch App</h1>
			<ul id="sdt_menu" class="sdt_menu">
				<li>
					<a href="#">
						<img src="images/2.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Mon Compte</span>
							<span class="sdt_descr">Acceder a mon compte</span>
						</span>
					</a>
				</li>
				<li>
					<a href="budget.html">
						<img src="images/3.png" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Courses</span>
							<span class="sdt_descr">Acceder a mes courses</span>
						</span>
					</a>

				</li>
				<li>
					<a href="#">
						<img src="images/2.png" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Paiements</span>
							<span class="sdt_descr">Tout mes paiements en cours</span>
						</span>
					</a>
          <div class="sdt_box">
              <a href="#">QR Code</a>
              <a href="#">Virement</a>
          </div>
				</li>
				<li>
					<a href="#">
						<img src="images/4.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Gestion</span>
							<span class="sdt_descr">Gerer mon budget</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/5.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Paris</span>
							<span class="sdt_descr">Pariez sur le sport</span>
						</span>
					</a>
				</li>
				<li>
					<a href="#">
						<img src="images/6.png" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Parametres</span>
							<span class="sdt_descr">Choix de la langue</span>
						</span>
					</a>
				</li>
			</ul>
		</div>
        <div>
		</div>

        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.easing.1.3.js"></script>
    	<script type="text/javascript" src="scripts.js"></script>

    </body>
</html>
