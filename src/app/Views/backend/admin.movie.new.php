
<html>
<head>
    <title>Insertar  un nuevo manga</title>
</head>
<body>
<main>
        <form method="POST" action="/ver-anime" enctype="multipart/form-data">
            <label for="inputTitulo">Titulo del anime</label>
            <input type="text" id="inputTitulo" name="titulo">
            <label for="inputDuracion">Duracion del anime</label>
            <input type="number" id="inputDuracion" name="duracion">
            <label for="inputDescripcion">Introduce descripcion</label>
            <textarea id="inputDescripcion" name="descripcion" rows="5" cols="10"></textarea>
            <label for="inputPortada">Inserta la portada</label>
            <input type="file" id="inputPortada" name="portada">

            <select id="optionCategoria" name="genero">
                    <option>Todos los publicos</option>
                    <option>+16</option>
                    <option>+18</option>
            </select>
            <select name="opcion">
                <option value="1">Opción 1</option>
                <option value="2">Opción 2</option>
            </select>

            <input type="checkbox" id="inputGeneroComedia" name="genero[]" value="comedia">
            <label for="inputGeneroComedia">Comedia</label>
            <br>

            <input type="checkbox" id="inputGeneroDrama" name="genero[]" value="drama">
            <label for="inputGeneroDrama">Drama</label>
            <br>

            <input type="checkbox" id="inputGeneroTerror" name="genero[]" value="Terror">
            <label for="inputGeneroTerror">Terror</label>
            <br>

            <input type="submit" name="Enviar" value="Enviar">
        </form>
</main>