<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head>
<title>Barangay Certificate</title>
</head>
<body>

<ul>
    <li><a href="homelogin_admin.php">Home</a></li>
    <li><a href="record_brgycert.php">Records</a></li>
  

</ul>
    
<center>
	<div class="container">
		<link rel="stylesheet" type="text/css" href="designregisters.css">
		<form method="POST" action="add_brgycert.php">
			<h1> BARANGAY CERTIFICATE </h1>
            <p>Please fill in this form. If item is not applicable indicate N/A.</p>
            <hr>
            
            <div class="foform">
            <label>Date Apply</label><br>
            <input type="date" name="apply"required>
            </div>
          
         <div class="foform">
            <label>First Name</label>
            <input type="text" name="firstname" placeholder="First Name" required>
            </div>
          
            
             <div class="foform">
			<label>Middle Name</label>
            <input type="text" name="middlename" placeholder="Middle Name" required>
            </div>
         
             <div class="foform">
			<label>Last Name</label>
            <input type="text" name="lastname" placeholder="Last Name" required>
            </div>
        
        <div class="foform">
			<label>House Number</label>
            <input type="text" name="housenumber" placeholder="House Number" required>
            </div>  
            
             <div class="foform">
            <label>Street Address</label>
            <input type="text" name="streetaddress" placeholder="Street Address" required>
            </div>
            
            <div class="custom-select">
			<label>Barangay</label>
            <select id="barangay" name="barangay">
            <option value="Baesa">Baesa</option>
            </select>
            </div>
      
            <div class="custom-select">
			<label>City</label>
            <select id="city" name="city">
            <option value="Quezon City">Quezon City</option>
            </select>
            </div>
          
            <div class="foform">
			<label>Province</label>
            <input type="text" name="province" placeholder="Province" required>
            </div>
            
            <div class="button">
			<label>Gender</label>
            <input type="radio" name="gender" value="Male" required>Male
            <input type="radio" name="gender" value="Female" required> Female
			</div>
                
            
        <script>
function clicked(e)
{
    if(!confirm('Are you sure you want to submit this form?')) {
        e.preventDefault();
    }
}
</script>
    <input type="submit" name="add" onclick="clicked(event)" />
		</form> 
	</div>
    <br>
    <br>
    <br>
    <div class="footer">
    <label>Barangay Baesa Information System 2021 | JTech</label> 
    
    
    </div>
				


