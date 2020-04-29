    <?php
    	//get the index
    	$index = $_GET['index'];
     
    	//fetch data from json
    	$data_array = file_get_contents('json/mydata.json');
    	$data = json_decode($data_array, true);
     
    	//delete the row with the index
    	unset($data[$index]);
     
    	//encode back to json
    	$data = json_encode($data, JSON_PRETTY_PRINT);
        file_put_contents('json/mydata.json', $data);
     
    	header('location: index.php');
    ?>