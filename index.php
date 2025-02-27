<?php
$movies = array(
    array(
        "title" => "Iron Man 3",
        "release_year" => 2013,
        "director" => "Shane Black",
        "description" => "el descarado pero brillante empresario Tony Stark/Iron Man se enfrentará a un enemigo cuyo poder no conoce límites. Cuando Stark comprende que su enemigo ha destruido su universo personal, se embarca en una angustiosa búsqueda para encontrar a los responsables."
    ),
    array(
        "title" => "Los Vengadores",
        "release_year" => 2012,
        "director" => "Joss Whedon",
        "description" => "Los héroes más poderosos de la Tierra deben unirse y aprender a luchar en equipo si quieren evitar que el travieso Loki y su ejército alienígena esclavicen a la humanidad."
    ),
    array(
        "title" => "Guardianes de la Galaxia",
        "release_year" => 2014,
        "director" => "James Gunn",
        "description" => "Un grupo de criminales intergalácticos deben unirse para detener a un guerrero fanático con planes para purgar el universo."
    )
);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aplicación de Películas de Marvel</title>
</head>
<body>
    <h1>Lista de Películas de Marvel</h1>
    <ul>
    <?php foreach($movies as $movie): ?>
        <li>
            <h2><?php echo $movie["title"]; ?></h2>
            <p><strong>Año de lanzamiento:</strong> <?php echo $movie["release_year"]; ?></p>
            <p><strong>Director:</strong> <?php echo $movie["director"]; ?></p>
            <p><strong>Descripción:</strong> <?php echo $movie["description"]; ?></p>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
