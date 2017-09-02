<?

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
//  
mail('grzojdatonieja@gmail.com', 'Kontakt z strony', $message,"Wiadomość od: ".$name.", ".$message);
//mail('support@aximdesign.com', 'From Present Company Website: ', "From: ".$name." Email: ".$email." Phone: ".$phone." Message: ".$message);

	//$response = json_decode($response);
	//error_log(print_r($response, true));
}
