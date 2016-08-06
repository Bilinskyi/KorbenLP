<?
if($_SERVER["REQUEST_METHOD"] == "POST") {
 // Функция отправки email
	function send_mail($to, $subject, $message, $headers) {

		$texta = $_POST["texta"];
		// $email = $_POST["email"];
		// $phone = $_POST["phone"];

		$to  = "1unitedcrew@gmail.com"; 

		$subject = "Заявка"; 
		$message = "$texta";
		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$from = "=?UTF-8?B?".base64_encode("test@test.ru")."?= <test@test.ru>";
		$headers .= "From: $from\r\n";
		$headers .= "Reply-To: $email\r\n";

		$result = mail($to, $subject, $message, $headers);
	} 

	{
		// Отправка email
		send_mail($to, $subject, $message, $headers);      
		echo 'true'; 
	}
}

?>