<?php
header('Content-Type: application/json');

$response = [
    "status" => "sucesso",
    "metodo" => "GET",
    "tema" => "Agenda de Eventos da ETEC",
    "dados" => [
        "turma" => "3DS",
        "periodo" => "Diurno",
        "eventos" => [
            [
                "id" => 1,
                "titulo" => "Feira Tecnológica",
                "data" => "2026-04-10",
                "local" => "Patio Principal"
            ],
            [
                "id" => 2,
                "titulo" => "Semana da Programação",
                "data" => "2026-05-18",
                "local" => "Laboratório 2"
            ],
            [
                "id" => 3,
                "titulo" => "Mostra de TCC",
                "data" => "2026-06-22",
                "local" => "Auditório"
            ]
        ]
    ]
];

echo json_encode($response, JSON_PRETTY_PRINT);