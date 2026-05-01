<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$raca = isset($_GET['raca']) ? trim(strtolower($_GET['raca'])) : "";
$quantidade = 3;

// se o forms estiver vazio, buscar imagens aleatorias
if ($raca == "") {
    $url = "https://dog.ceo/api/breeds/image/random/" . $quantidade;
} else {
    $url = "https://dog.ceo/api/breed/" . $raca . "/images/random/" . $quantidade;
}

$resposta = file_get_contents($url);
$dados = json_decode($resposta, true);

if ($dados && $dados['status'] == 'success') {
    echo json_encode([
        'sucesso' => true,
        'status' => $dados['status'],
        'quantidade' => count($dados['message']),
        'raca' => $raca,
        'url_usada' => $url,
        'imagens' => $dados['message']
    ]);
} else {
    echo json_encode([
        'sucesso' => false,
        'mensagem' => 'Erro ao buscar imagens. Verifique se a raça foi digitada corretamente.',
        'url_usada' => $url
    ]);
}
?>