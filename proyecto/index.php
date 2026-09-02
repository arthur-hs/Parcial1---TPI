<?php

session_start();

if (!isset($_SESSION["participantes"])) {
$_SESSION["participantes"] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nombre = $_POST["nombreEstudiante"];
$edad = $_POST["edadEstudiante"];
$correo = $_POST["correoEstudiante"];
$videojuego = $_POST["videoEstudiante"];
$modalidad = $_POST["modalidadEstudiante"];
$nivel = $_POST["nivelEstudiante"];


$participante = [
"nombre" => $nombre,
"edad" => $edad,
"correo" => $correo,
"videojuego" => $videojuego,
"modalidad" => $modalidad,
"nivel" => $nivel
];

$_SESSION["participantes"][] = $participante;
$mensaje = "Participante registrado correctamente.";
}

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro de Inscripciones</title>
    </head>

    <body>

        <h1>Registro de inscripciones de Participantes </h1>

        <form action="" method="post" name="participantes">

            <div>
                <label for="">Ingrese su Nombre</label>
                <input type="text" name="nombreEstudiante">
            </div>

            <div>
                <label for="">Ingrese su Edad</label>
                <input type="number" name="edadEstudiante">
            </div>

            <div>
                <label for="">Ingrese su Correo</label>
                <input type="gmail" name="correoEstudiante">
            </div>

            <div>
                <label for="">Ingrese su VideoJuego</label>
                <input type="text" name="videoEstudiante">
            </div>

            <div>
                <label for="">Ingrese su Modalidad</label>
                <input type="text" name="modalidadEstudiante">
            </div>

            <div>
                <label for="">Ingrese su Nivel de Experiencia</label>
                <input type="text" name="nivelEstudiante">
            </div>

            <div>
                <button>Registrar Participante</button>
            </div>
        </form>

        <h2>Participantes Registrados en el sistema..</h2>

        <table>
            <thead>
                <th>
                    <tr>#</tr>
                    <tr>Nombre</tr>
                    <tr>Edad</tr>
                    <tr>Correo</tr>
                    <tr>Video Juego </tr>
                    <tr>Modalidad</tr>
                    <tr>Nivel</tr>
                    <tr>Experiencia</tr>
                </th>
            </thead>

            <tbody>
                <td>
                    <?php foreach ($_SESSION["participantes"] as $index => $participante)  ?>
                        <tr>
                            <td><?php echo ($index + 1); ?></td>
                            <td><?php echo $participante["nombre"]; ?></td>
                            <td><?php echo $participante["edad"]; ?></td>
                            <td><?php echo $participante["correo"]; ?></td>
                            <td><?php echo $participante["videojuego"]; ?></td>
                            <td><?php echo $participante["modalidad"]; ?></td>
                            <td><?php echo $participante["nivel"]; ?></td>
                            <td><?php echo $participante["experiencia"]; ?></td>
                        </tr>
                    <tr></tr>
                </td>
            </tbody>
        </table>

    </body>

    </html>