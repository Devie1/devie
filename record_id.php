<html>
<title>Resident Information</title>


<li><a href="form_id.php">BACK</a></li>
    

<link rel="stylesheet" type="text/css" href="designregisters.css">
<input id="myInput" type="text" placeholder="Search. . .">


	<table id="myTable">
	<div>
		
			<thead>
				<center>
			    <th>Images</th>
				<th>Name</th>
				<th>Address</th>
				<th>Contact No.</th>
				<th>Issued No.</th>
                <th>Until</th>
				<th>Birthday</th>

				<th>Option</th>
                </center>
			</thead>
			<tbody>



<?php
					include('conn_id.php');
					$query=mysqli_query($conn,"select * from `brgyid`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr> <tbody id="myTable">

							<td>
<img src="images/<?php echo $row['image']; ?>" class="img-rounded" width="150px" height="150px" /> 
  
						<td><?php echo $row['name']; ?></td>	
							<td><?php echo $row['address']; ?></td> 
								
							<td><?php echo $row['contact']; ?></td> 
							
							<td><?php echo $row['issued']; ?></td> 
							
                            <td><?php echo $row['until']; ?></td> 
                            
							<td><?php echo $row['birthday']; ?>
							</td>
							
						   

</td>



								<td>
								<a href="edit_id.php?id=<?php echo $row['id']; ?>">Edit</a>
								<a onclick="clicked(event)"href="delete_id.php?id=<?php echo $row['id']; ?>">Delete</a>
                                    
                                      <script>
                                
                                    function clicked(e) {
                                        if(!confirm('Are you sure you want to delete this record?')) {
                                    e.preventDefault();        
                                        }
                                    }
                                    
                                </script>
                                    
                                    
							</td>
    
						</tr>
                
						
						<?php
					}
				?>
                
			</tbody>
		</table>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</html>
