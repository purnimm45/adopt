<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adopt</title>
	
    <script src="adopt.js" defer></script>
	<script>
		// JavaScript to handle the button click event
		document.addEventListener('DOMContentLoaded', function() {
		  // Get the button element by its ID
		  const myButton = document.getElementById('myButton');
	
		  // Add an event listener for the 'click' event
		  myButton.addEventListener('click', function() {
			alert('Button was clicked!');
		  });
		});
	  </script>
	<link rel="stylesheet" type="text/css" href="adopt.css">
</head>
<body>
	<div class="cont1">
		<img src="images/bge.jpg" id="bg">
		<img src="images/imglogo.jpg" alt="" id="img1">
        <h1><b>Adopt!! </h1>
        <h2>Don't Shop</h2>
	    
<nav>
	     <div class="box1">
		     <a href="index.php">Home</a>
	     </div>
	  <div class="box1">
		<a href="adopt.php">Find a pet</a>
	  </div>
	  <div class="box1">
		<a href="contact.php">Contact</a>
	  </div>
	   <div class="box1">
		     <a href="about.php">About Us</a>
	    </div>
	    <div class="box1">
		<a href="help.php">Help & Advise</a>
	  </div>
	  <div class="box1">
		<a href="login.php">Login</a>
	  </div>
	  <div class="box2">
		<a href="donate.php" id="donate">Donate</a>
	  </div>
	</nav>
</div>
<div class="cont2"><br>
	<h3>Meet our residents</h3>
	<div class="ibox">
		<img src="images/Dotty.jpg" id="bimg">
		<p1>Dotty</p1><br>
		<p2>2 years old</p2>
		<button class="adopt-btn"
	                data-pet="Dotty"
					data-image="images/Dotty.jpg" 
                    data-description="Dotty is a gentle and affectionate dog who loves cuddles.
					 She enjoys spending time by the window watching birds and playing with toys. 
					 Gomee would make a wonderful addition to any home!" 
                    data-breed="Siamese" 
                    data-age="2 years" 
                    data-sex="Male">Adopt Now</button>

		
	
	
	</div>
	<div class="ibox">
		<img src="images/gomee.jpg" id="bimg">
		<p1>Gomee</p1><br>
		<p2>2 years old</p2>
		<button class="adopt-btn" 
                    data-pet="Gomee"
					data-image="images/gomee.jpg" 
                    data-description="Gomee is a gentle and affectionate dog who loves cuddles.
					 She enjoys spending time by the window watching birds and playing with toys. 
					 Gomee would make a wonderful addition to any home!" 
                    data-breed="Siamese" 
                    data-age="2 years" 
                    data-sex="Male">Adopt Now</button>
		
	</div>
	<div class="ibox">
		<img src="images/tommy.jpg" id="bimg">
		<p1>Tommy</p1><br>
		<p2>7 months old</p2>
		<button class="adopt-btn"
                    data-pet="Tommy"
					data-image="images/tommy.jpg" 
                    data-description="Tommy is a gentle and affectionate dog who loves cuddles.
					 She enjoys spending time by the window watching birds and playing with toys. 
					 Gomee would make a wonderful addition to any home!" 
                    data-breed="Siamese" 
                    data-age="2 years" 
                    data-sex="Male">Adopt Now</button>
		
		
	</div>
	<div class="ibox2"><br><br>
		<form method="post" action="">
			<label for="species">Species</label><br><br>
			<select>
				<option disabled selected style="text-align:center;">Select a pet</option> 
				<option >Dogs</option>
				<option>Cats</option>
			</select><br><br><br>
			<label for="breed">Breed</label><br><br>
			<select>
				<option disabled selected style="text-align: center;">Select a breed</option> 
				<option>Labrador Retriever</option>
				<option>German Shepherd</option>
				<option>Bulldog</option>
				<option>Bulldog</option>
			</select><br><br><br>
			<label for="sex">Sex</label><br><br>
			<select>
				<option disabled selected style="text-align:center;">Select sex</option>
				<option>Male</option>
				<option>Female</option> 
			</select><br><br><br>
			<label for="age">Age</label><br><br>
            <input type="number" id="age" name="age" min="1" max="12" placeholder="Enter age" style="text-align:center; "><br><br><br><br>
            <button id="submit">Submit</button>
		</form>
	</div><br>
	
	<div class="ibox">
		<img src="images/cutayy.jpg" id="bimg">
		<p1>Cuttay</p1><br>
		<p2>2 years old</p2>
		<button class="adopt-btn" 
		            data-pet="Cutayy" 
					data-image="images/cutayy.jpg" 
                    data-description="Cuttay is a gentle and affectionate dog who loves cuddles.
					 She enjoys spending time by the window watching birds and playing with toys. 
					 Gomee would make a wonderful addition to any home!" 
                    data-breed="Siamese" 
                    data-age="2 years" 
                    data-sex="Male">Adopt Now</button>
				</div>
		
	
		<div class="ibox">
		<img src="images/motu.jpg" id="bimg">
		<p1>Motu</p1><br>
		<p2>2 years old</p2>
		<button class="adopt-btn"
		            data-pet="Motu" 
					data-image="images/motu.jpg" 
                    data-description="Motu is a gentle and affectionate dog who loves cuddles.
					 She enjoys spending time by the window watching birds and playing with toys. 
					 Gomee would make a wonderful addition to any home!" 
                    data-breed="Siamese" 
                    data-age="2 years" 
                    data-sex="Male">Adopt Now</button>
		
		
	</div>
	<div class="ibox">
		<img src="images/hissy.jpg" id="bimg">
		<p1>Hissy</p1><br>
		<p2>2 years old</p2>
		<button class="adopt-btn"
		           data-pet="Hissy"
					data-image="images/hissy.jpg" 
                    data-description="Hissy is a gentle and affectionate dog who loves cuddles.
					 She enjoys spending time by the window watching birds and playing with toys. 
					 Gomee would make a wonderful addition to any home!" 
                    data-breed="Siamese" 
                    data-age="2 years" 
                    data-sex="Male">Adopt Now</button>
		
	</div><br><br>
	<div id="container">
		<button id="moreButton">More</button>
	 <!-- Second set of animals, hidden initially -->
	<div class="ibox" id="animalsSection" >
		<img src="images/bella.jpg" alt="Bella" id="bimg">
		<p1>Bella</p1><br>
		<p2>1 year old</p2>
		<button class="adopt-btn"
		data-pet="Bella" 
		data-image="images/bella.jpg" 
		data-description="Bella is a gentle and affectionate dog who loves cuddles.
		 She enjoys spending time by the window watching birds and playing with toys. 
		 Gomee would make a wonderful addition to any home!" 
		data-breed="Siamese" 
		data-age="2 years" 
		data-sex="Male">Adopt Now</button>
	</div>

	<div class="ibox" id="animalsSection">
		<img src="images/charlie.jpg" alt="Charlie" id="bimg">
		<p1>Charlie</p1>
		<p2>3 years old</p2>
	    <button class="adopt-btn" 
		data-pet="Charlie"
		data-image="images/Charlie.jpg" 
		data-description="Charlie is a gentle and affectionate dog who loves cuddles.
		 She enjoys spending time by the window watching birds and playing with toys. 
		 Gomee would make a wonderful addition to any home!" 
		data-breed="Siamese" 
		data-age="2 years" 
		data-sex="Male">Adopt Now</button>
	</div>
	  
	<div class="ibox" id="animalsSection">
		<img src="images/jeni.jpg" alt="jeni" id="bimg">
		<p1>Jeni</p1><br>
		<p2>3 years old</p2>
	    <button class="adopt-btn" 
		data-pet="Jeni"
		data-image="images/jeni.jpg" 
		data-description="Jeni is a gentle and affectionate dog who loves cuddles.
		 She enjoys spending time by the window watching birds and playing with toys. 
		 Gomee would make a wonderful addition to any home!" 
		data-breed="Siamese" 
		data-age="2 years" 
		data-sex="Male">Adopt Now</button>
	</div>
	</div>
	
<!-- Modal for Pet Details -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <button class="close-btn" id="closeButton">&times;</button>
			<div class="modal-images">
				<img src="" id="petImage" alt="Pet Image" width="70%">
			</div>
            <h3 id="petName"></h3>
            <p id="petDescription"></p>
			<p><strong>Breed:</strong> <span id="petBreed"></span></p>
			<p><strong>Age:</strong> <span id="petAge"></span></p>
        <p><strong>Sex:</strong> <span id="petSex"></span></p>

	
        </div>
    </div>


</div>

</body>
</html>