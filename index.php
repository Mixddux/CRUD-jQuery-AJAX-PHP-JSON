<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>CRUD</title>
 
    <link href="css/styles.css" rel="stylesheet" />
 <style>

table{margin:8% auto;}

 </style>
</head>
<body>

    <a href="add.php">Add</a>

    <table border="1">
    	<thead>
    		<th>ID</th>
    		<th>Firstname</th>
    		<th>Lastname</th>
    		<th>Address</th>
    		<th>Gender</th>
    		<th>Action</th>
    	</thead>

    	<tbody>
    		<?php

    			//fetch data from json
    			$data_array = file_get_contents('json/mydata.json');

    			//decode into php array
    			$data = json_decode($data_array);
     
    			$index = 0;
    			foreach($data as $row){
    				echo "
    					<tr>
    						<td>".$row->id."</td>
    						<td>".$row->firstname."</td>
    						<td>".$row->lastname."</td>
    						<td>".$row->address."</td>
    						<td>".$row->gender."</td>
    						<td>
    							<a href='edit.php?index=".$index."'>Edit</a>
    							<a href='delete.php?index=".$index."'>Delete</a>
    						</td>
    					</tr>
    				";
     
    				$index++;
    			}
    		?>
    	</tbody>
    </table>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

  
    
});
</script>
</body>
</html>








