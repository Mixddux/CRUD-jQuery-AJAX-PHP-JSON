    <!DOCTYPE html>
    <html>
    <head>
    	<meta charset="utf-8">
    	<title>CRUD Operation on JSON File using PHP</title>
    </head>
    <body>
    <form method="POST">
    	<a href="index.php">Back</a>
    	<p>
    		<label for="id">ID</label>
    		<input type="text" id="id" name="id">
    	</p>
    	<p>
    		<label for="firstname">Firstname</label>
    		<input type="text" id="firstname" name="firstname">
    	</p>
    	<p>
    		<label for="lastname">Lastname</label>
    		<input type="text" id="lastname" name="lastname">
    	</p>
    	<p>
    		<label for="address">Address</label>
    		<input type="text" id="address" name="address">
    	</p>
    	<p>
    		<label for="gender">Gender</label>
    		<input type="text" id="gender" name="gender">
    	</p>
    	<input type="submit" name="save" value="Save">
    </form>
     
    <?php
    	if(isset($_POST['save'])){
    		//open the json file
    		$data_array = file_get_contents('json/mydata.json');
    		$data = json_decode($data_array);
     
    		//data in out POST
    		$input = array(
    			'id' => $_POST['id'],
    			'firstname' => $_POST['firstname'],
    			'lastname' => $_POST['lastname'],
    			'address' => $_POST['address'],
    			'gender' => $_POST['gender']
    		);
     
    		//append the input to our array
    		$data[] = $input;
    		//encode back to json
    		$data = json_encode($data, JSON_PRETTY_PRINT);
            file_put_contents('json/mydata.json', $data);
     
    		header('location: index.php');
    	}
    ?>
    </body>
    </html>