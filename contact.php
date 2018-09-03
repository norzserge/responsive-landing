<?php
$to = "metelskiysa@karandash.pw";
$subject = "Сообщение формы обратной связи";
$extra = array(
	"form_subject"	=> false,
	"form_phone"	=> true,
	"form_cc"	=> false,
	"ip"		=> false,
	"user_agent"	=> false
);
$action = isset($_POST["action"]) ? $_POST["action"] : "";
if (empty($action)) {
	$output = "<div style='display:none'>
	<div class='contact-top'></div>
	<div class='contact-content'>
		<h1 class='contact-title'>Отправить сообщение:</h1>
		<div class='contact-loading' style='display:none'></div>
		<div class='contact-message' style='display:none'></div>
		<form action='#' style='display:none'>
			<div class='form-group'>
	    		<label for='contact-name'>Ваше имя:</label>
				<input type='text' id='contact-name' class='contact-input form-control' name='name' placeholder='Как к Вам обратиться?' tabindex='1001' />
			</div>
			<div class='form-group'>
				<label for='contact-email'>Ваш email:</label>
				<input type='text' id='contact-email' class='contact-input form-control' name='email' placeholder='Укажите email' tabindex='1002' />
			</div>";
	if ($extra["form_phone"]) {
		$output .= "
			<div class='form-group'>
				<label for='contact-phone'>Ваш телефон:</label>
				<input type='text' id='contact-phone' class='contact-input form-control' name='phone' placeholder='Ваш номер телефона' value='' tabindex='1003' />
			</div>";
	}
	if ($extra["form_subject"]) {
		$output .= "
			<div class='form-group'>
				<label for='contact-subject'>Что Вас заинтересовало?</label>
				<input type='text' id='contact-subject' class='contact-input form-control' name='subject' placeholder='Что Вас интересует?' value='' tabindex='1003' />
			</div>";
	}
	$output .= "
			<div class='form-group'>
				<label for='contact-message'>Что Вас заинтересовало?</label>
				<textarea id='contact-message' class='contact-input form-control' name='message' placeholder='Укажите Ваши пожелания' cols='40' rows='4' tabindex='1004'></textarea>
			</div>";
	if ($extra["form_cc"]) {
		$output .= "
			<label>&nbsp;</label>
			<input type='checkbox' id='contact-cc' name='cc' value='1' tabindex='1005' /> <span class='contact-cc'>Отправить мне копию</span>
			<br/>";
	}
	$output .= "
			<button type='submit' class='contact-send contact-button btn yellow-bg' tabindex='1006'>Отправить</button>
			<button type='submit' class='contact-cancel contact-button simplemodal-close btn yellow-bg' tabindex='1007'>Отмена</button>
			<input type='hidden' name='token' value='" . smcf_token($to) . "'/>
		</form>
		<div class='clearfix'></div>
	</div>
	<div class='contact-bottom'></div>
</div>";
	echo $output;
}
else if ($action == "send") {
	$name = isset($_POST["name"]) ? $_POST["name"] : "";
	$email = isset($_POST["email"]) ? $_POST["email"] : "";
	$phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
	$subject = isset($_POST["subject"]) ? $_POST["subject"] : $subject;
	$message = isset($_POST["message"]) ? $_POST["message"] : "";
	$cc = isset($_POST["cc"]) ? $_POST["cc"] : "";
	$token = isset($_POST["token"]) ? $_POST["token"] : "";
	if ($token === smcf_token($to)) {
		smcf_send($name, $email, $phone, $subject, $message, $cc);
		echo "Ваше сообщение успешно отправлено.";
	}
	else {
		echo "К сожалению, Ваше сообщение не может быть отправлено.";
	}
}
function smcf_token($s) {
	return md5("smcf-" . $s . date("WY"));
}
function smcf_send($name, $email, $phone, $subject, $message, $cc) {
	global $to, $extra;
	$name = smcf_filter($name);
	$subject = smcf_filter($subject);
	$email = smcf_filter($email);
	$phone = smcf_filter($phone);
	if (!smcf_validate_email($email)) {
		$subject .= " - неправильный e-mail";
		$message .= "\n\nНеправильный e-mail: $email";
		$email = $to;
		$cc = 0;
	}
	if ($extra["ip"]) {
		$message .= "\n\nIP: " . $_SERVER["REMOTE_ADDR"];
	}
	if ($extra["user_agent"]) {
		$message .= "\n\nUSER AGENT: " . $_SERVER["HTTP_USER_AGENT"];
	}
	$body = "От: $name\n\n";
	$body .= "Email: $email\n";
	$body .= "Телефон: $phone\n";
	$body .= "Сообщение: $message";
	$body = wordwrap($body, 70);
	$headers = "От: $email\n";
	if ($cc == 1) {
		$headers .= "Cc: $email\n";
	}
	$headers .= "X-Mailer: PHP/SimpleModalContactForm";	
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/plain; charset=utf-8\n";
	$headers .= "Content-Transfer-Encoding: quoted-printable\n";
	@mail($to, $subject, $body, $headers) or 
		die("К сожалению, Ваше сообщение отправить не удалось. Попробуйте еще раз.");
}
function smcf_filter($value) {
	$pattern = array("/\n/","/\r/","/content-type:/i","/to:/i", "/from:/i", "/cc:/i");
	$value = preg_replace($pattern, "", $value);
	return $value;
}
function smcf_validate_email($email) {
	$at = strrpos($email, "@");
	if ($at && ($at < 1 || ($at + 1) == strlen($email)))
		return false;
	if (preg_match("/(\.{2,})/", $email))
		return false;
	$local = substr($email, 0, $at);
	$domain = substr($email, $at + 1);
	$locLen = strlen($local);
	$domLen = strlen($domain);
	if ($locLen < 1 || $locLen > 64 || $domLen < 4 || $domLen > 255)
		return false;
	if (preg_match("/(^\.|\.$)/", $local) || preg_match("/(^\.|\.$)/", $domain))
		return false;
	if (!preg_match('/^"(.+)"$/', $local)) {
		if (!preg_match('/^[-a-zA-Z0-9!#$%*\/?|^{}`~&\'+=_\.]*$/', $local))
			return false;
	}
	if (!preg_match("/^[-a-zA-Z0-9\.]*$/", $domain) || !strpos($domain, "."))
		return false;	
	return true;
}
exit;
?>