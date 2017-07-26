<?php
if ( ! function_exists('send_email'))
{
	function send_email($recipient, $subject = 'Test email', $message = 'Hello World', $headers)
	{
		//$headers .= 'Content-type: text/html; charset=iso-8859-1 \r\n';
		add_filter('wp_mail_content_type',create_function('', 'return "text/html";'));
		wp_mail($recipient, $subject, $message);
		return;
	}
}
