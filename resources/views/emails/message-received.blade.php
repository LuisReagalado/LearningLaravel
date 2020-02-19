<!DOCTYPE html>
<html>
<head>
	<title>Mensaje Recibido</title>
</head>
<body>
	<p>Recibiste un mensaje de: {{ $msg['name']}} - {{$msg['email']}}</p>
	<strong>Asunto:  {{$msg['subject']}}</strong>
	<p>Mensaje: {{$msg['content']}}</p>
</body>
</html>