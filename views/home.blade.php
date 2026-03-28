<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Home - Clínica Simples</title>
<style>
body { font-family: Arial, sans-serif; margin: 0; background: #f4f4f4; }
nav { background: #007bff; padding: 10px; }
nav a { color: white; text-decoration: none; margin: 0 10px; font-weight: bold; }
nav a:hover { text-decoration: underline; }
.container { max-width: 900px; margin: 20px auto; padding: 20px; background: white; border-radius: 8px; }
h1 { color: #007bff; }
form { margin-top: 20px; }
form label { display: block; margin: 10px 0 5px; }
form input, form select { width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc; }
form button { background: #007bff; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
form button:hover { background: #0056b3; }
hr { margin: 40px 0; }
.success { background: #d4edda; color: #155724; padding: 10px; margin-bottom: 20px; border-radius: 4px; }
</style>
</head>
<body>
<nav>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/sobre') }}">Sobre</a>
    <a href="{{ url('/agendamento') }}">Agendar</a>

</nav>
<div class="container">
<h1>Bem-vindo à Clínica Simples</h1>

<hr>

<h2>Cadastro de Pacientes</h2>
<form onsubmit="alert('Paciente cadastrado com sucesso!'); return false;">
    <label for="nomePaciente">Nome:</label>
    <input type="text" id="nomePaciente" name="nomePaciente" required>

    <label for="idadePaciente">Idade:</label>
    <input type="number" id="idadePaciente" name="idadePaciente" required>

    <label for="emailPaciente">E-mail:</label>
    <input type="email" id="emailPaciente" name="emailPaciente" required>

    <label for="telefonePaciente">Telefone:</label>
    <input type="text" id="telefonePaciente" name="telefonePaciente" required>

    <button type="submit">Cadastrar Paciente</button>
</form>

<hr>

<h2>Cadastro de Médicos</h2>
<form onsubmit="alert('Médico cadastrado com sucesso!'); return false;">
    <label for="nomeMedico">Nome:</label>
    <input type="text" id="nomeMedico" name="nomeMedico" required>

    <label for="especialidadeMedico">Especialidade:</label>
    <input type="text" id="especialidadeMedico" name="especialidadeMedico" required>

    <label for="emailMedico">E-mail:</label>
    <input type="email" id="emailMedico" name="emailMedico" required>

    <label for="telefoneMedico">Telefone:</label>
    <input type="text" id="telefoneMedico" name="telefoneMedico" required>

    <button type="submit">Cadastrar Médico</button>
</form>

</div>
</body>
</html>