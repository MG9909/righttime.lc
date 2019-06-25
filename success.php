<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style/bootstrap.min.css">
	<link rel="stylesheet" href="style/style.css">	
	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/javascript.js" type="text/javascript"></script>
	<meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial scale=1">
	<title>Right time</title>
</head>
<body>

<div class="container">
	<nav class="navbar navbar-fixed-top">
		 <div class="container" style="height: 40px;">
		    <div class="navbar-header">
		    	<a href="#" onmouseover="typeWriter()" onmouseleave="textClear()"><img src="images/RT4.png" style="width: 100px; margin: 0px;"></a>
		    </div>
		    <ul class="nav navbar-nav" style="margin: 0px; height: 35px;">
		      <li><a href="#" class="nav-list">Happy Marriage</a></li>
		      <li><a href="#" class="nav-list">Psychology</a></li> 
		      <li><a href="success.php" class="nav-list">Our success</a></li> 
		      <li><a href="#" class="nav-list">Follow me</a></li>
		      <li>
		      <form action="" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="glyphicon glyphicon-search form-control-feedback"></span>
            	</div>
            </form>
        	</li>
		        <li>
		        	<p id="demo" style="margin: 5px 5px; color: rgba(14,181,96,0.93);"></p>
		        </li>
		     </ul>
		 </div>
 		 <br>
 		 <div class="progress-container">
    	<div class="progress-bar" id="myBar"></div>
 	 </div> 
	</nav>	
	
</div>

<div class="headline" style="margin-top: 51px;">
		<img src="images/bg6.jpg" class="img-fluid">
</div>
	<div class="container-fluid">
		<div class="header">
			<p class="lead header" style="font-family: cursive">
				Achievements
			</p>
			
		</div>
		<div class="container-fluid">
		<main class="main-content">

			<div class="custom-scrollbar">
			<ul class="thumbnail-list">
			<div class="tab">			
				<li class="thumbnail-item">
					<div class="shadow">
				<button class="tablinks" onclick="openContent(event, 'data1')">
					<img class="thumnail-image" src="images/hilola.jpg"><br>
				</button>
					<div>
						<label class="thumbnail-text">
							Hilola Umarova
						</label>
					
					</div>
					<div class="thumbnail-count1">
						<span class="glyphicon glyphicon-eye-open" 
							style="display: block; color: rgba(173, 173, 173, 1); font-size: 24px;">
						</span> 
						<span class="count"> 200</span>						
					</div>
				</div>
				</li>		
				<li class="thumbnail-item">
					<div class="shadow">
					<button class="tablinks" onclick="openContent(event, 'data2')">
						<img class="thumnail-image" src="images/sq.jpg">
					</button>
					<div>
						<label class="thumbnail-text">Saodat Sadirbaeva</label>
					</div>
					<div class="thumbnail-count1">
						<span class="glyphicon glyphicon-eye-open" 
							style="display: block; color: rgba(173, 173, 173, 1); font-size: 24px;">
						</span> 
						<span class="count"> 120</span>						
					</div>
				</div>

				</li>	
				<li class="thumbnail-item">
					<div class="shadow">
						<button class="tablinks" onclick="openContent(event, 'data3')">
					<img class="thumnail-image" src="images/3.jpg">
				</button>
					<div>
						<label class="thumbnail-text"> Who I am? </label>
					</div>
					<div class="thumbnail-count1">
						<span class="glyphicon glyphicon-eye-open" 
							style="display: block; color: rgba(173, 173, 173, 1); font-size: 24px;">
						</span> 
						<span class="count"> 100</span>						
					</div>
				</div>
				</li>

				<li class="thumbnail-item">
				<div class="shadow">
					<button class="tablinks" onclick="openContent(event, 'data4')">
					<img class="thumnail-image" src="images/1.jpg">
				</button>
					<div>
						<label class="thumbnail-text"> Who I am? </label>
					</div>
					<div class="thumbnail-count1">
						<span class="glyphicon glyphicon-eye-open" 
							style="display: block; color: rgba(173, 173, 173, 1); font-size: 24px;">
						</span> 
						<span class="count"> 100</span>						
					</div>
				</div>
				</li>		
			</div>
			</ul>			
			</div>
		</main>
		</div>

		<div class="container" id="tabber" style="border: 1px solid gray; height: 400px; background-position: center; background-repeat: no-repeat; display: none;" >
			<div class="tabcontent" id="data1">
				<div class="container-fluid" style="margin-top: 20px;">
					<div class="row">
						<div class="col-md-5">
							<div class="user">
								<p>Hilola Umarova</p>
								<ul>
									<li><img src="images/hilola.jpg"></li>
								</ul>
							</div>		
						</div>
						<div class="col-md-7">
							<div class="user" style="height: 300px">
								<ul>
									<label>
										<p class="txt2" style="font-size: 18px; color: rgba(87, 87, 87); text-align: justify;"> 
						Toshkent shahridagi Inha universitetining Faol tadbirkorlik innovatsion g’oyalar va texnologiyalarni qo’llab-quvvatlash bo’yicha bosh menejeri Hilola Umarova "O'zbekiston belgisi" nishoni bilan taqdirlandi

					– Для меня, большая честь удостоиться этого памятного знака, учрежденного в связи с исторической датой – 26-летием принятия Конституции Республики Узбекистан, – говорит Х.Умарова. – Это также заслуга всего коллектива, усилия которого направлены на реализацию важных задач в сфере образования и повышении правовой культуры в обществе. </p>
									</label>
								</ul>
							</div>		
						
							<div style="text-align: right;">
					  		<button class="btn btn-sm" style="background-color: rgba(6,6,6,0.6);">
					  			<a href="data1.php"> Read more </a>
					  		</button>
					  	</div>
					  </div>
  					</div>
				</div>
		</div>
			<div class="tabcontent" id="data2">
				<div class="container-fluid" style="margin-top: 30px;">
					<div class="row">
						<div class="col-md-5">
							<div class="user" style="height: 300px">
								<p>Saodat Sadirbaeva</p>
								<ul>
									<li><img src="images/sq.jpg"></li>
									
									
								</ul>
							</div>		
						</div>
						<div class="col-md-7">
							<div class="user" style="height: 300px">
								<ul>
									<label>
										<p class="txt2" style="font-size: 18px; color: rgba(87, 87, 87);"> 
						ҚДУ қошидаги 3 сонли академик лицейнинг математика-инглиз тили йўналишини битирган қорақалпоғистонлик Саодат Садирбайева ажойиб натижа қайд этди,  дея ёзмоқда Қорақалпоғистон хабар агентлиги.

Саодат бу йил бир йўла тўртта ОТМга,  яъни:  Турин политехника университетининг (Италия),  Вестминистр университетининг (Нуюк Британия), Инҳа университетининг (Корея) Тошкент филиалларига ва Тошкент ахборот технологиялари университетининг Тошкент филиалига тўловли контракт асосида ўқишга кириш бахтига сазовор бўлган.</p>
									</label>
								</ul>
							</div>		
						
							<div style="text-align: right;">
					  		<button class="btn btn-sm" style="background-color: rgba(6,6,6,0.6);">
					  			<a href="data1.php"> Read more </a>
					  		</button>
					  	</div>
					  	</div>
  					</div>
			</div>
			<div class="tabcontent" id="data3">
				<p>chao</p>
			</div>
			<div class="tabcontent" id="data4">
				<p>Sao</p>
			</div>

		</div>
	</div>
	
	<div class="footer-wrap">
		<div class="row">
			<div class="col-md-4">
				<img src="images/RT3.png" style="width: 70%;">
			</div>
			<div class="col-md-4">
				<div class="footer-nav">
					<ul class="nav">
				      <li><a href="#" class="nav-list">Happy Marriage</a></li>
				      <li><a href="#" class="nav-list">Psychology</a></li> 
				      <li><a href="#" class="nav-list">Our success</a></li> 
				      <li><a href="#" class="nav-list">Follow me</a></li> 
		    		 </ul>
				</div>
			</div>
			<div class="col-md-4">
				<p class="footer-text">
					"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. 
				</p>
			</div>
		</div>		
	</div>
	
	<div class="footer">
			
	</div>
	

	<button class="open-button" onclick="openForm()">
		<div class="row">
			 <div class="col-md-2"><span class="glyphicon glyphicon-envelope" style="font-size: 25px;"></span></div>
			 <div class="col-md-10" style="margin-top: 4px;">  E-Psychologist</div>
		</div>
	</button>
	<div class="chat-popup" id="myForm">
	  	<form action="#" class="form-container">
		   <div class="row">
		  		<div class="col-md-2"></div>
				<div class="col-md-2"><span class="glyphicon glyphicon-envelope" style="font-size: 25px; color: rgba(35,100,85,0.75);"></span></div>
				<div class="col-md-8" style="margin-top: 4px; color: rgba(35,100,85,0.75);">  E-Psychologist</div>
			</div>

	    <div for="msg" style="font-size: 12px;">Feel free to contact with our psychologist</div>
	    <textarea placeholder="Type message.." name="msg" required></textarea>
	    <div class="row">
	    	<div class="col-md-6">
	    		<button type="submit" class="btn btn-success">Send</button>	
	    	</div>
	    	<div class="col-md-6">
	    		<button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	    	</div>
	    </div>
    	    	
 		 </form>
	</div>

</div>
</body>
</html>