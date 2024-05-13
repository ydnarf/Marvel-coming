<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesión de cURL; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* Ejecutar la petición 
    y guardamos el resultado
*/
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);

var_dump($data);
?>

<main>
    <h2>La próxima película de Marvel</h2>
</main>


<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
        color: white;
    }
</style>