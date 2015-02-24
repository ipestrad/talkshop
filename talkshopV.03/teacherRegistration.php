<!--
TALK SHOP! Teacher Registration Form
-->

<?php include 'htmlHeader.php' ?>

<?php
    
    include('../local-connect.php');
    $fname1 = $_POST['firstname'];
    $fname2 = mysqli_real_escape_string($dbc,$fname1);
    $lname1 = $_POST['lastname'];
    $lname2 = mysqli_real_escape_string($dbc,$lname1);
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $org = $_POST['organization'];
    $line1 = $_POST['lineone'];
    $line2 = $_POST['linetwo'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];
    $age = $_POST['agegroup'];
    $image = $_POST['fileToUpload'];
    
    
    $query = "INSERT INTO teachers(firstname, lastname, username, email, password, organization, addressone, addresstwo, city, state, zip, phone, agegroup, image)" .  "VALUES('$fname2','$lname2','$username', '$email','$password','$org', '$line1','$line2','$city', '$state', '$zip', '$phone','$age', '$image')";
    
    $result = mysqli_query($dbc, $query) or die('Unable to Connect to Database or the Registration is incomplete!');
    
    mysqli_close($dbc);
    
    ?>
    

  <head>
  
	<!-- Link tag for teacherRegistration CSS -->
    <link type="text/css" rel="stylesheet" href="style/teacherRegistration.css" />
	
    <!-- Web Page Title -->
    <title>TalkShop | Registration</title>
	
	<!-- JavaScript Tags -->
	<script type="text/javascript" language="JavaScript">
		function HidePart(d) { document.getElementById(d).style.display = "none";  }
		function ShowPart(d) { document.getElementById(d).style.display = "block"; }
		function CheckboxChecked(b,d)
			{
				if(b) { ShowPart(d); }
				else  { HidePart(d); }
			}
	</script>
	
	<script type="text/javascript">
		CheckboxChecked(document.myform.mycheckbox.checked,'checkboxdiv');;
	</script>

  </head>

  <body>
  
	<?php include 'headerBar.php' ?>
	
	<div id="teacherRegistrationTitle">TEACHER REGISTRATION</div>
	
	<br />



	<form id="joinform" action="../confirm.htm" method="get">
				<p>
					<!-- first name -->
					<input placeholder="First Name" type="text" id="firstname" name="firstname" max="50" />
					<br />
					
					<!-- last name -->
					<!--<label for="firstname">Last Name:</label>-->
					<input placeholder="Last Name" type="text" id="lastname" name="lastname"  max ="50"/>
					<br />
					
					<!-- username --> 
					<!--<label for="username">Username:</label>-->
					<!--<input placeholder="Username" type="text" id="username" name="username" max="15" />
					<br />-->
					
					<!-- email -->
					<!--<label for="email">Email Address:</label>-->
					<input placeholder="Email Address" type="text" id="email" name="email" max="50"     />
					<br />
					
					<!-- password -->
					<!--<label for="password">Password:</label>-->
					<input placeholder="Password" type="password" id="password" name="password" min="10" max="20" />
					<br />
					
					<!-- reenter -->
					<!--<label for="reenter">Re-enter Password:</label>-->
					<input placeholder="Re-enter Password" type="password" id="reenter" name="reenter" min="10" max="20" />
					<br />
					
					<!-- organization -->
					<!--<label for="organization">Organization:</label>-->
					<input placeholder="Organization" type="text" id="organization" name="organization" max="50" />
					<br />
					
					<!-- address -->
					<!--<label for="lineone">Line 1:</label>-->
					<input placeholder="Street Address 1" type="text" id="lineone" name="lineone" max="99" />
					<br />
					<!--<label for="lineone">Line 2:</label>-->
					<input placeholder="Street Address 2" type="text" id="linetwo" name="lineone" max="99" />
					<br />
					<!--<label for="city">City</label>-->
					<input placeholder="City" type="text" id="city" name="city" max="99"/>
					<br />
					<!--<label for="State">State</label>-->
					<select id="state" name="state">
							<option value="">State</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
					</select>
					<br>
					<!--<label for="state">Zip</label>-->
					<input placeholder="Zip" type="number" id="zip" name="zip" max = "5"/>
					<br />
					
					<!-- phone -->
					<!--<label for="phone">Phone Number:</label>-->
					<input placeholder="Phone Number" type="number" id="phone" name="phone" max= "10" />
					<br />

					<!-- make active profile button -->
					Make active profile?
					<input type="checkbox" name="mycheckbox" value="yes" 
						onclick="CheckboxChecked(this.checked,'checkboxdiv')">				
					
				<div id="checkboxdiv" style="display:none">
					
					<!-- age group -->
					<!--<label for="agregroup">Representing Age Group:</label>-->
					<select id="agegroup" name="agegroup">
						<option value="">Select an Age Group</option>
						<option value="preschool">Pre School</option>
						<option value="elementary">Elementary</option>
						<option value="middle">Middle School</option>
						<option value="high">High School</option>
						<option value="college">College</option>
						<option value="other">Other</option>
					</select> 
					<br />
					
					<!-- topic areas -->
						<p>Select Topic Areas</p>
						<input type="checkbox" name="" value="">Agriculture
						<input type="checkbox" name="" value="">Art
						<input type="checkbox" name="" value="">Biological Sciences
						<input type="checkbox" name="" value="">Business
						<input type="checkbox" name="" value="">Communication
						<input type="checkbox" name="" value="">Computers/Information Technology
						<input type="checkbox" name="" value="">Education
						<input type="checkbox" name="" value="">Engineering
						<input type="checkbox" name="" value="">Environmental Science
						<input type="checkbox" name="" value="">Health
						<input type="checkbox" name="" value="">Language and Literature
						<input type="checkbox" name="" value="">Law
						<input type="checkbox" name="" value="">Math
						<input type="checkbox" name="" value="">Philosophy and Religion
						<input type="checkbox" name="" value="">Physical Science
						<input type="checkbox" name="" value="">Psychology and Counseling
						<input type="checkbox" name="" value="">Recreation and Fitness
						<input type="checkbox" name="" value="">Skilled Trade and Construction
						<input type="checkbox" name="" value="">Social Sciences and Liberal Arts
						<input type="checkbox" name="" value="">Social Services
						<input type="checkbox" name="" value="">Transportation
						<input type="checkbox" name="" value="">Other
					
					<!-- biography -->
					<br />
					<textarea placeholder="Bio and Additional Information" id="comments" name="comments" 
						rows="2" cols="49"></textarea>
					<br />
					
					<!-- upload image -->
					<form action="uploadImage.php" method="post" enctype="multipart/form-data" style="display:none">
						Upload Profile Image
						<br/>
						<input type="file" name="fileToUpload" id="fileToUpload">
						<br/>
						<input type="submit" value="Upload Image" name="submit">
						<br/>	
						
					<p class="submit">
					<input type="submit" value="REGISTER"
						onclick="return a3Validate()"/>
					</p>
				</p>
					</form>
				</div>	
					
		</form>
	
	
	<?php include 'bottomBarHome.php' ?>
	
  </body>

</html>