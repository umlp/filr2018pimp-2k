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
					<a href="index.html">
						<img src="images/2.jpg" alt=""/>
						<span class="sdt_active"></span>
						<span class="sdt_wrap">
							<span class="sdt_link">Menu principal</span>
							<span class="sdt_descr">Retourner au menu</span>
						</span>
					</a>
				</li>

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
					<a href="#">
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
          <table id="t01" class="block">
<thead>
  <tr>
    <th>Qte Restante</th>
    <th>Prix</th>
    <th>Article</th>
  </tr>
</thead>

<tbody>
  <tr>
    <td>0</td>
    <td>12€</td>
    <td>Concombre</td>
  </tr>
  <tr>
    <td>0</td>
    <td>3€</td>
    <td>Stylos</td>
  </tr>
  <tr>
    <td>0</td>
    <td>225€</td>
    <td>Ak-47</td>
  </tr>
  <tr>
    <td>1</td>
    <td>6€</td>
    <td>Livre : "Martine a La Baule"</td>
  </tr>
  <tr>
    <td>1</td>
    <td>5€</td>
    <td>Flan</td>
  </tr>
  <tr>
    <td>2</td>
    <td>25€</td>
    <td>Slip</td>
  </tr>
  <tr>
    <td>0</td>
    <td>120€</td>
    <td>Tronconeuse</td>
  </tr>
</tbody>
          </table>

          <div id="piechart" class="block"></div>
		</div>

        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter,
				* we enlarge the image, and show both sdt_active span and
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '170px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-170px';
							$sub_menu.show().animate({'left':left},200);
						}
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');

					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px'},500);
				});
            });
            // Load google charts
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            // Draw the chart and set the chart values
            function drawChart() {
              var data = google.visualization.arrayToDataTable([
              ['Name', 'Euros'],
              ['Louis', 3],
              ['Ana', 2],
              ['Aurel', 7]
            ]);

              // Optional; add a title and set the width and height of the chart
              var options = {'title':'Repartition des depenses', 'width':400, 'height':300};

              // Display the chart inside the <div> element with id="piechart"
              var chart = new google.visualization.PieChart(document.getElementById('piechart'));
              chart.draw(data, options);
            }
            </script>




    </body>
</html>
