<?php
include 'connection.php';
$pin = $_SESSION['pin'];
if(empty($pin)){
    header('Location: ./');
}
?>
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
		            	<a class="nav-link rounded mr-2 pl-2" href="./">Home</a>
		          	</li>
		          	<li class="nav-item active">
		            	<a class="nav-link mr-2 pl-2" style="text-shadow: 0 10px 10px brown;" href="./tutorial.php">Tutorial</a>
		          	</li>
		        </ul>

                <span class="mr-auto"></span>
                <ul class="navbar-nav mr-0">
                    <li class="nav-item active">
                        <a class="nav-link mr-2 pl-2" href="./logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                    </li>
                </ul>
	  		</div>
  		</div>
    </nav>
    <div id="tutorialBanner">
    </div><br>
    <div id="welcome">
        <h5>Welcome
            <?php
            $select = "SELECT * FROM user WHERE pin = '$pin'";
            $result = $conn->query($select);
            while ($row = $result->fetch_assoc()) {
                echo "<span style='color: rgb(73,199,237)'>".$row['name']."</span>";
            }
            ?></h5>
    </div><br><br>
    <div class="container">
    	<div class="row">
            <div class="col-md-4">
                <div id="col1">
                    <div id="col11">
                        <center><h5>INJECTION</h></center>
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
    	<h4 style="color: rgb(73,199,237); text-transform: uppercase;">How to inject the female fish</h4><br>
    	<div class="row">
    		<div class="col-md-3">
    			<div id="h1Img"></div><br>
    		</div>
    		<div class="col-md-9">
    			<p>Hold the female fish and inject side ways and rub the area gently. After injection, take the fish in any plastic water container, half fill it with <b>good</b> water and cover it. If your fish is <b>2kg</b>, your dose will be <b>2ml</b> of syringe and if it is one also, give them according to their size.</p>
                <p>Therefore, wait for <b>9-10 hours</b> before stripping (It is a time/period between when the fish is injected and when it is stripped). Remove the female fish from the container and begin to strip the eggs in to the plastic plate, stop stripping as soon as you notice blood coming out of the fish.</p>
    		</div>
    	</div><br><br>

    	<h4 style="color: rgb(73,199,237); text-transform: uppercase;">extraction of the milt & fertilization</h4><br>
    	<div class="row">
    		<div class="col-md-3">
    			<div id="h2Img"></div><br>
    		</div>
    		<div class="col-md-9">
    			<p>Take the male fish and using <b>blade</b> to slit the stomach and remove the milt(sperm) and clean carefully with toilet roll to remove the blood and other stains. Take the milt and slit it with <b>blade</b> and allow the milky liquid to drop on the eggs and mixed it together with normal <b>saline</b>.</p>
    		</div>
    	</div><br><br>

    	<h4  style="color: rgb(73,199,237); text-transform: uppercase;">spraying of fertilized eggs, siphoning and feeding</h4><br>
    	<div class="row">
    		<div class="col-md-3">
    			<div id="h3Img"></div><br>
    		</div>
    		<div class="col-md-9">
    			<p>When the egg is fertilized we spread it inside the hatchery pond and we need to lay net inside the pond first before we spread the eggs on the net, then we cover it. After <b>24 hours</b> you go and check it, when it is hatched we run a water for them. When they get to <b>30 hours</b> we must remove the net inside the pond, the following day in the morning we take a <b>foam</b> to clean inside fish and <b>siphoning</b>.</p>
                <p>We must siphon all un-hatched eggs and any whitish color as to prevent them from polluting the water by using the small <b>1mm</b> water hose, direct the mouth of the hose at thesuspended or settled un-hatched eggs and the force of the water will suck them up and flush them through the hole out of the pond.</p>
    		</div>
            <p>After siphoning, the following day we feed them with <b>0.1</b> and little by little we can use table table spoon to measure it. When we want to give feed, we must turn off the water for about <b>30 to 40 minutes</b>.</p>
            <p>After <b>30 hours</b> that your fish is hatched, you must remove the net beause of water pollution. If your water is polluted, then your fish will die. When you want to feed them, you turn off the water till they are finished eating at least <b>1 hour</b>. After they finish eating, then you can turn on the water back, and every morning you must clean the pond with foam and when the water is settled you use hose to flush all the settlement in the water before you feed them.</p>
            <p><b>Feeding Table</b></p>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Week</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    <tr>
                        <td>1</td>
                        <td>0.1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>0.2</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>0.3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>0.4</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>0.5</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>0.7</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>1mm</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>2mm</td>
                    </tr>
                </tbody>
            </table>
    	</div><br><br>

    	<h4  style="color: rgb(73,199,237); text-transform: uppercase;">How to differentiate between male and female fish.</h4><br>
    	<div class="row">
    		<div class="col-md-4">
    			<p>The female <b>catfish</b> particularly the one with eggs is easily identified because it has a bigger stomach compartment. The male has a smaller stomach compartment, besides the genital (sex organ) of the male fish is long while that of the female is round.</p>
    		</div>

    		<div class="col-md-4">
    			<div id="colfemale">
    				<div id="col22">
    					<center><h5>FEMALE</h5></center>
    				</div>
    			</div><br><br>
    		</div>

    		<div class="col-md-4">
    			<div id="colmale">
    				<div id="col33">
    					<center><h5>MALE</h5></center>
    				</div>
    			</div><br><br>
    		</div>
    	</div><br><br>
        <h4 style="color: rgb(73,199,237); text-transform: uppercase;">hatchery</h4>
        <h5 style="color: rgb(73,199,237); text-transform: uppercase;">hatchery solutions</h5>
        <ul>
            <li>Ovaprum</li>
            <li>Pituitary gland</li>
            <li>H.C.G (Human Chorionic Gonadotrophin)</li>
        </ul>
        <h5 style="color: rgb(73,199,237); text-transform: uppercase;">hatchery requirements</h5>
        <ol>
            <li>Mature male & female fish (2kg)</li>
            <li>Ovaprum or pituitary gland</li>
            <li>Tissue</li>
            <li>Hand Towel</li>
            <li>Blade</li>
            <li>Syringe & Needle</li>
            <li>Normal Saline</li>
            <li>Small plastic plate</li>
            <li>Touch light</li>
            <li>Big Bowl</li>
            <li>Hose</li>
            <li>Knife</li>
            <li>Scale</li>
            <li>Salt</li>
            <li>Antibiotics</li>
            <li>Methylated Spirit</li>
            <li>Counting Table</li>
            <li>Net</li>
            <li>Storex</li>
            <li>Concrate Pond</li>
            <li>Borehole</li>
        </ol><br>
        <h5 style="color: rgb(73,199,237); text-transform: uppercase;">follow the screenshot for the step needed to take</h5><br>
        <div class="row">
            <div class="col-md-4">
                <div id="step1">
                    <div id="col33">
                        <h5>STEP 1</h5>
                        <p>Strip the egg fro the female fish</p>
                    </div>
                </div><br><br>
            </div>
            <div class="col-md-4">
                <div id="step2">
                    <div id="col33">
                        <h5>STEP 2</h5>
                        <p>Clean the milt (sperm) with tissue</p>
                    </div>
                </div><br><br>
            </div>
            <div class="col-md-4">
                <div id="step3">
                    <div id="col33">
                        <h5>STEP 3</h5>
                        <p>Slit the sperm on the eggs</p>
                    </div>
                </div><br><br>
            </div>
            <div class="col-md-4">
                <div id="step4">
                    <div id="col33">
                        <h5>STEP 4</h5>
                        <p>Wash it with normal saline</p>
                    </div>
                </div><br><br>
            </div>
            <div class="col-md-4">
                <div id="step5">
                    <div id="col33">
                        <h5>STEP 5</h5>
                        <p>Spread the egg on the net</p>
                    </div>
                </div><br><br>
            </div>
            <div class="col-md-4">
                <div id="step6">
                    <div id="col33">
                        <h5>STEP 6</h5>
                        <p>The production of the hatched egg</p>
                    </div>
                </div><br><br>
            </div>
        </div>
        <p><mark><b>NOTE:</b></mark> If you need any help regarding the tutorial or need to talk to a specialist, please call <b>09030306779</b>, we are at your service.</p>
        <p>We hope this tutorial is helpful?? If so, drop your comment regarding the tutorial and what you think we can still add on the above number. <b>THANKS</b></p>
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
</body>
</html>