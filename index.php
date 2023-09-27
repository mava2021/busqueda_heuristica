<!DOCTYPE html>
<html>
<head>
    <title>Proceso de Búsqueda Heurística</title>
</head>
<body>
    <h1><B>Proceso de Búsqueda Heurística</B></h1>

    <form method="post" action="search.php">
        <label for="start">Estado inicial:</label>
        <input type="text" name="start" id="start" required><br>

        <label for="goal">Estado objetivo:</label>
        <input type="text" name="goal" id="goal" required><br>

        <label for="heuristic">Función heurística:</label>
        <select name="heuristic" id="heuristic">
            <option value="h1">Heurística 1</option>
            <option value="h2">Heurística 2</option>
        </select><br>

        <input type="submit" value="Buscar">
    </form>
</body>
</html>