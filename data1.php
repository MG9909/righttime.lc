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
		      <li><a href="#" class="nav-list">Our success</a></li> 
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
	<div class="container-fluid" style="margin-top: 50px;">
		<div class="container" style="border: 1px solid gray; height: 500px; background-image: url(images/marry4.jpg); background-position: center; background-repeat: no-repeat;" >
			<div class="row">
				<div class="col-md-5">
					<div class="user">
						<p>Hi Name</p>
						<ul>
							<li>Your age is <button style="border-radius: 50%">20</button></li>
							<li>
								<div class="skill-box">
								  <div class="skills html" id="html">0%</div>
								 </div>
							</li>
							<li>
								<p class="lead">You are <span id="html2">0%</span> ready for Marriage!..</p>
							</li>
							<label>
				<p class="txt2" style="font-size: 12px; 	color: rgba(173, 173, 173);">
					"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. 
				</p>
			</label>
						</ul>

					</div>		
				</div>
				<div class="col-md-7">
				<form style="margin-top: 50px;">
			<div class="row">
				<div class="wrap">
  					<div class="radio-group">
					  <input id="opt_1" class="radio-group__option" type="radio" name="opt0[]" value="1" onclick="myButton()">
					  <label class="radio-group__label" for="opt_1">
					    Family
					  </label>
					  
					  <input id="opt_2" class="radio-group__option" type="radio" name="opt0[]" value="0" onclick="myButton()">
					  <label class="radio-group__label" for="opt_2">
					    career
					  </label>
					</div>
			 	</div>
			</div>
			<div class="row">
				<div class="wrap">
  					<div class="radio-group">
					  <input id="opt_3" class="radio-group__option" type="radio" name="opt1[]" value="1" onclick="myButton()">
					  <label class="radio-group__label" for="opt_3">
					    car
					  </label>
					  
					  <input id="opt_4" class="radio-group__option" type="radio" name="opt1[]" value="0" onclick="myButton()">
					  <label class="radio-group__label" for="opt_4">
					   house
					  </label>
					</div>
			 	</div>
			</div>
			<div class="row">
				<div class="wrap">
  					<div class="radio-group">
					  <input id="opt_5" class="radio-group__option" type="radio" name="opt2[]" value="1" onclick="myButton()">
					  <label class="radio-group__label" for="opt_5">
					    Flowers
					  </label>
					  
					  <input id="opt_6" class="radio-group__option" type="radio" name="opt2[]" value="0" onclick="myButton()">
					  <label class="radio-group__label" for="opt_6">
					    Chocolate
					  </label>
					</div>
			 	</div>
			</div>
			<div class="row">
				<div class="wrap">
  					<div class="radio-group">
					  <input id="opt_7" class="radio-group__option" type="radio" name="opt3[]" value="1" onclick="myButton()">
					  <label class="radio-group__label" for="opt_7">
					    phone
					  </label>
					  
					  <input id="opt_8" class="radio-group__option" type="radio" name="opt3[]" value="0" onclick="myButton()">
					  <label class="radio-group__label" for="opt_8">
					    laptop
					  </label>
					</div>
			 	</div>
			</div>
			<div class="row">
				<div class="wrap">
  					<div class="radio-group">
					  <input id="opt_9" class="radio-group__option" type="radio" name="opt4[]" value="1" onclick="myButton()">
					  <label class="radio-group__label" for="opt_9">
					    skirt
					  </label>
					  
					  <input id="opt_10" class="radio-group__option" type="radio" name="opt4[]" value="0" onclick="myButton()">
					  <label class="radio-group__label" for="opt_10">
					    trousers
					  </label>
					</div>
			 	</div>
			</div>
			<div class="row">
				<div class="wrap">
  					<div class="radio-group">
					  <input id="opt_11" class="radio-group__option" type="radio" name="opt5[]" value="1" onclick="myButton()">
					  <label class="radio-group__label" for="opt_11">
					    white
					  </label>
					  
					  <input id="opt_12" class="radio-group__option" type="radio" name="opt5[]" value="0" onclick="myButton()">
					  <label class="radio-group__label" for="opt_12">
					    black
					  </label>
					</div>
			 	</div>
			</div>
		</form>
		 <br/>
  
  
		</div>
	</div>
</div>
</div>
		<div class="container-fluid">
		<main class="main-content">
			<ul class="thumbnail-list">
				<li class="thumbnail-item">
					<div class="shadow">
					<img class="thumnail-image" src="images/1.jpg"><br>
					<div>
						<label class="thumbnail-text"> Marriage age </label>
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
					<img class="thumnail-image" src="images/2.jpg">
					<div>
						<label class="thumbnail-text"> Boy or Girl? </label>
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
					<img class="thumnail-image" src="images/3.jpg">
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
					<img class="thumnail-image" src="images/1.jpg">
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
			</ul>			
		</main>
		</div>
				
	</div>
	
	<div class="footer-wrap">
		<div class="row">
			<div class="col-md-4">
				<img src="images/RT3.png" style="width: 70%;">
			</div>
			<div class="col-md-3">
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
	
</body>
</html>