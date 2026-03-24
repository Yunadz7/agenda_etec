<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agenda ETEC</title>
</head>
<body>

<h1>Agenda de Eventos da ETEC</h1>
<h2>Yuna<h2>
<h2>Consultar Eventos</h2>
<a href="get.php" target="_blank">Ver eventos (GET)</a>

<h2>Cadastrar Evento</h2>
<form action="post.php" method="POST">
    <input type="text" name="titulo" placeholder="Título" required><br><br>
    <input type="date" name="data" required><br><br>
    <input type="text" name="local" placeholder="Local" required><br><br>
    <button type="submit">Cadastrar</button>
</form>

</body>
</html>