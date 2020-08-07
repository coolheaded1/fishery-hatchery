<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Fish Breeding</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm" id="nav">
		<div class="container">
	  		<a class="navbar-brand text-light" href="./"><img src="images/logo.png" width="50"></a>
	  		<button id="btnBar" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
	    	<i class="fa fa-bars"></i></button>

	  		<div class="collapse navbar-collapse" id="navbar">
		        <ul class="navbar-nav">
		         	<li class="nav-item active">
		            	<a class="nav-link rounded mr-2 pl-2" href="./" style="text-shadow: 0 10px 10px brown;" >Home</a>
		          	</li>
		          	<li class="nav-item">
		            	<a class="nav-link mr-2 pl-2" href="#aboutus">About Us</a>
		          	</li>
		          	<li class="nav-item">
		            	<a class="nav-link mr-2 pl-2" href="#" data-toggle="modal" data-target="#exampleModal">Tutorial</a>
		          	</li>
		        </ul>
        		<span class="mr-auto"></span>
		        <ul class="navbar-nav mr-0">
		        	<li class="nav-item active">
		            	<a class="nav-link mr-2 pl-2" href="./login.php">Login</a>
		          	</li>
		          	<li class="nav-item active">
		            	<a class="nav-link mr-2 pl-2" href="./register.php">Sign Up</a>
		          	</li>
		        </ul>
	  		</div>
  		</div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Enter your PIN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form id="frm">
                        <p>Enter the <b>PIN</b> sent to you here to access the Tutorial Points</p>
                        <div id="showResult"></div>
                        <div class="form-group">
                            <label>Your pin</label>
                            <input type="text" name="pin" class="form-control" id="pin">
                        </div>
                        <button type="button" class="btn loginBtn" name="submit" id="btnSubmit">SUBMIT</button><br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="banner">
    	<div id="banner2">
    		<h3>LEARN FISH BREEDING</h3><br>
    		<p>Learn everything about fishery and establish a fish farm on your own in no time. Learn hatchery, feeding and many other things concerning fishery.</p><br>
    		<button class="btn getStarted" data-toggle="modal" data-target="#exampleModal">GET STARTED</button>
    	</div>
    </div><br>
    <div class="container">
    	<center><h5>Introduction</h5></center>
    	<p>Before or by the end of this tutorial, you will be able to handle fertilisation and produce catfish on your own without the need of going out to purchase fish to raise. You will be able to multiply your production in no time and expand your company in short period of time. Instead of you going out to buy fish, then you become sellers to many fish farm that doesn't know fertilisation.</p>
    	<p>To get started with the tutorial, you have to pay an amount of <mark><b>5000 naira</b></mark> to generate a <mark><b>PIN</b></mark> that you will use to access the tutorial points.<br><mark><b>NOTE:</b></mark> The PIN is available for three(3) trials after that you have to purchase it again to access the tutorial.<br><mark><b>HOW TO PAY</b></mark>, Send your money to the following bank details:</p>
    	<p>Account Name: <b>Samuel Joseph Monday</b><br>Bank Name: <b>GTBank</b><br>Account Number: <b>0236107583</b><br>Phone Number: <b>09030306779</b></p>
    	<p><mark><b>NOTE:</b></mark> After payment, send your full name to the above number for your <b>PIN</b>. Your <b>PIN</b> will be generated when we confirmed your payment</p>
    	<br><br>
    	<div class="row">
    		<div class="col-md-4">
    			<div id="col1">
    				<div id="col11">
    					<center><h5>INJECTION</h5></center>
    				</div>
    			</div><br><br>
    		</div>

    		<div class="col-md-4">
    			<div id="col2">
    				<div id="col22">
    					<center><h5>EQUIPMENT</h5></center>
    				</div>
    			</div><br><br>
    		</div>

    		<div class="col-md-4">
    			<div id="col3">
    				<div id="col33">
    					<center><h5>SETUP</h5></center>
    				</div>
    			</div><br><br>
    		</div>
    	</div>
    	<center><h5 id="aboutus">About Us</h5></center>
    	<p>We are young guys that wish to help the life of people, make people successful in their business most especially in agriculture. We combine technology together with agriculture to make something meaningful. Seeing people happy in their choosen business is our priority.</p><br><br><br><br>
    	<div class="row">
    		<div class="col-md-4">
    			<div id="aboutCol1">
    				<div id="aboutCol1Img"></div>
    				<h4>Samuel Joseph M.</h4>
    				<p>Samuel Joseph is a web developer that is ready to covert all the art design to a nice looking website.</p>
    				<a href="https://facebook.com/Coolheaded8" target="_blank"><i class="fa fa-facebook" id="fafa"></i></a>
    				<a href="https://twitter.com/Coolheaded8" target="_blank"><i class="fa fa-twitter" id="fafa"></i></a>
    				<a href="https://wa.me/2349030306779" target="_blank"><i class="fa fa-whatsapp" id="fafa"></i></a>
    			</div><br><br><br><br><br>
    		</div>

    		<div class="col-md-4">
    			<div id="aboutCol2">
    				<div id="aboutCol2Img"></div>
    				<h4>Adegboye Seun E.</h4>
    				<p>Adegboye Seun is a specialist in agriculture, he is ready to put all your plans together.</p>
    				<a href="https://facebook.com/Coolheaded8" target="_blank"><i class="fa fa-facebook" id="fafa"></i></a>
                    <a href="https://twitter.com/Coolheaded8" target="_blank"><i class="fa fa-twitter" id="fafa"></i></a>
                    <a href="https://wa.me/2349030306779" target="_blank"><i class="fa fa-whatsapp" id="fafa"></i></a>
    			</div><br><br><br><br>
    		</div>
    	</div>
    	<div id="section">
    		<p style="font-size: 20px; color: #fff">Do you know that you can learn hatchery on your own and setup your fish farm by producing by yourself without buying fish to raise?</p><br>
    		<center><button class="btn getStarted2" data-toggle="modal" data-target="#exampleModal">GET STARTED</button></center>
    	</div><br><br>
    	<center><h5>Importance things to Notice</h5></center><br><br>
    	<div class="row">
    		<div class="col-md-4">
    			<div id="important">
    				<p>When they are dropping, we must use <b>salt</b> to prevent them or use many antibiotics and feed with well mixing together and give them.</p>
    			</div><br><br>
    		</div>
    		<div class="col-md-4">
    			<div id="important2">
    				<p>Before you use <b>salt</b> to prevent them, you must drain their water till small quantity before you put the salt into it.</p>
    			</div><br><br>
    		</div>
    		<div class="col-md-4">
    			<div id="important3">
    				<p>Use antibiotics in the morning before you give them feed, after you siphon you mix a little antibiotics with the feed that you will give them.</p>
    			</div>
    		</div>
    	</div>
    </div><br><br>
    <footer><br>
   		<div class="container">
        <a href="https://facebook.com/Coolheaded8" target="_blank"><i class="fa fa-facebook" id="fafa2"></i></a>&nbsp;&nbsp;
        <a href="https://twitter.com/Coolheaded8" target="_blank"><i class="fa fa-twitter" id="fafa2"></i></a>&nbsp;&nbsp;
        <a href="https://instagram.com/Coolheaded8" target="_blank"><i class="fa fa-instagram" id="fafa2"></i></a>&nbsp;&nbsp;<br><br>
   			<p>Your satisfaction is our pleasure.</p>
   			<p>&copy; <?php echo date('Y') ?>. All Rights Reserved</p>
   		</div>
   </footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
	$('body').scrollspy({target: ".navbar", offset: 50}); 
	$("#navbar a").on('click', function(event){
		// event.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
		   	scrollTop: $(hash).offset().top
		}, 1500, function(){
		    window.location.hash = hash;
		});
	});
    $("#btnSubmit").on('click', () => {
        $.ajax({
            url: 'processpin.php',
            type: 'post',
            data: $("#frm").serialize(),
            success:function(data){
                $("#showResult").html(data);
            }
        })
    })
</script>
</body>
</html>