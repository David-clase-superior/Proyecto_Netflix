<html>
<head>
    <title> Inserta una nueva pelicula</title>
</head>
<body>
<main>
    <form method="post" action="/movie" enctype="multipart/form-data">
        <label for="inputTitulo">Titulo de la pelicula</label>
        <input type="text" id="inputTitulo" name="titulo"><br>

        <label for="inputDuracion">Duracion de la pelicula</label>
        <input type="number" id="inputDuracion" name="duracion"><br>

        <label for="inputDescripcion">Descripción de la pelicula</label>
        <textarea id="inputDescripcion" name="descripcion" rows="5" cols="10"></textarea><br>

        <label for="inputPortada">Inserta la portada</label>
        <input type="file" id="inputPortada" name="portada"><br>

        <select id="optionCategoria" name="genero">
            <option>Todos los publicos</option>
            <option>+12</option>
            <option>+18</option>
        </select>

        <input type="checkbox" id="inputGeneroComedia" name="genero[]" value="comedia">
        <label for="optionGeneroComedia">Comedia</label>

        <input type="checkbox" id="inputGeneroDrama" name="genero[]" value="drama">
        <label for="optionGeneroDrama">Drama</label>

        <input type="checkbox" id="inputGeneroTerror" name="genero[]" value="terror">
        <label for="optionGeneroTerror">Terror</label>


        <input type="submit" name="Enviar">
    </form>
</main>
</body>
</html>