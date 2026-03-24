<?php
header('Content-Type: application/json');

$titulo = $_POST['titulo'] ?? '';
$data = $_POST['data'] ?? '';
$local = $_POST['local'] ?? '';

$response = [
    "status" => "sucesso",
    "metodo" => "POST",
    "tema" => "Agenda de Eventos da ETEC",
    "mensagem" => "Evento cadastrado com sucesso.",
    "evento" => [
        "id" => 4,
        "titulo" => $titulo,
        "data" => $data,
        "local" => $local
    ]
];

echo json_encode($response, JSON_PRETTY_PRINT);