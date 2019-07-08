<?php
$paginas = [
    '1' => [
        [
            'nome' => 'Fulano pagina 1',
            'email' => 'teste@teste.com',
            'cpf' => 'asdfasdfadsf',
        ],
        [
            'nome' => 'Fulano2 pagina 1',
            'email' => 'teste@teste.com',
            'cpf' => 'asdfasdfadsf',
        ],
        [
            'nome' => 'Fulano3 pagina 1',
            'email' => 'teste@teste.com',
            'cpf' => 'asdfasdfadsf',
        ],
    ],
    '2' => [
        [
            'nome' => 'Fulano pagina 2',
            'email' => 'teste@teste.com',
            'cpf' => 'asdfasdfadsf',
        ],
        [
            'nome' => 'Fulano2 pagina 2',
            'email' => 'teste@teste.com',
            'cpf' => 'asdfasdfadsf',
        ],
        [
            'nome' => 'Fulano3 pagina 2',
            'email' => 'teste@teste.com',
            'cpf' => 'asdfasdfadsf',
        ],
    ],
    '3' => [
        [
            'nome' => 'Fulano pagina 3',
            'email' => 'teste@teste.com',
            'cpf' => 'asdfasdfadsf',
        ],
        [
            'nome' => 'Fulano2 pagina 3',
            'email' => 'teste@teste.com',
            'cpf' => 'asdfasdfadsf',
        ],
        [
            'nome' => 'Fulano3 pagina 3',
            'email' => 'teste@teste.com',
            'cpf' => 'asdfasdfadsf',
        ],
    ]
];

$page = $_REQUEST['page'] ?? '1';

$total = 0;
foreach($paginas as $p) {
    for($i = 0; $i < count($p); $i++) {
        $total++;
    }
}

header('Content-Type: application/json');
echo json_encode([
    'total' => $total,
    'page' => $page,
    'data' => $paginas[$page]
]);
