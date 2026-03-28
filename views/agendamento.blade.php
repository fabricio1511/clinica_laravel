<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Agendamento de Consultas</title>
<style>
body { font-family: Arial, sans-serif; margin: 0; background: #f4f4f4; }
nav { background: #007bff; padding: 10px; }
nav a { color: white; text-decoration: none; margin: 0 10px; font-weight: bold; }
nav a:hover { text-decoration: underline; }
.container { max-width: 600px; margin: 20px auto; padding: 20px; background: white; border-radius: 8px; }
h1, h2 { color: #007bff; }
form input, form button { display: block; width: 100%; margin: 10px 0; padding: 8px; }
form button { background: #007bff; color: white; border: none; cursor: pointer; }
form button:hover { background: #0056b3; }
table { width: 100%; border-collapse: collapse; margin-top: 20px; }
table, th, td { border: 1px solid #ccc; }
th, td { padding: 10px; text-align: left; }
th { background: #007bff; color: white; }
</style>
</head>
<body>
<nav>
    <a href="{{ url('/') }}">Home</a>
    <a href="{{ url('/sobre') }}">Sobre</a>
    <a href="{{ url('/agendamento') }}">Agendar</a>
</nav>

<div class="container">
<h1>Agendamento de Consultas</h1>

<form id="formAgendamento">
    <label>Nome do paciente:</label>
    <input type="text" id="paciente" placeholder="Digite o nome do paciente" required>
    
    <label>Nome do médico:</label>
    <input type="text" id="medico" placeholder="Digite o nome do médico" required>
    
    <label>Data da consulta:</label>
    <input type="date" id="data" required>
    
    <button type="submit">Agendar</button>
</form>

<h2>Consultas Futuras</h2>
<table id="tabelaConsultas">
    <tr>
        <th>Paciente</th>
        <th>Médico</th>
        <th>Data</th>
    </tr>

</table>
</div>

<script>

let consultas = [];


const form = document.getElementById('formAgendamento');
const tabela = document.getElementById('tabelaConsultas');


function atualizarTabela() {
  
    tabela.innerHTML = `<tr>
        <th>Paciente</th>
        <th>Médico</th>
        <th>Data</th>
    </tr>`;
    

    consultas.sort((a,b) => new Date(a.data) - new Date(b.data));
    
   
    consultas.forEach(c => {
        const linha = document.createElement('tr');
        linha.innerHTML = `<td>${c.paciente}</td><td>${c.medico}</td><td>${c.data}</td>`;
        tabela.appendChild(linha);
    });
}

form.addEventListener('submit', function(e){
    e.preventDefault();
   
    const consulta = {
        paciente: document.getElementById('paciente').value,
        medico: document.getElementById('medico').value,
        data: document.getElementById('data').value
    };
    

    consultas.push(consulta);
    
   
    atualizarTabela();
    
   
    form.reset();
    
    alert('Consulta agendada com sucesso!');
});
</script>
</body>
</html>