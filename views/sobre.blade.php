<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Sobre - Clínica Simples</title>
<style>
body { font-family: Arial, sans-serif; margin: 0; background: #f4f4f4; }
nav { background: #007bff; padding: 10px; }
nav a { color: white; text-decoration: none; margin: 0 10px; font-weight: bold; }
nav a:hover { text-decoration: underline; }
.container { max-width: 900px; margin: 20px auto; padding: 20px; background: white; border-radius: 8px; }
h1 { color: #007bff; }
</style>
</head>
<body>
<nav>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/sobre') }}">Sobre</a>
    <a href="{{ url('/agendamento') }}">Agendar</a>

</nav>
<div class="container">
<h1>Sobre a Clínica</h1>
<p>A Clínica Simples é dedicada ao atendimento médico de qualidade, oferecendo cadastro de pacientes, médicos e agendamento de consultas de forma prática e eficiente.</p>
</div>
</body>
</html>