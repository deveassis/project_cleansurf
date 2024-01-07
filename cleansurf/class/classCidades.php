<?php
include_once("../config/load.php");

class Query {
    private $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function getCidade() {
        $sql = "SELECT * FROM cidades";
        $resultado = $this->conexao->query($sql);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEstado() {
        $sql = "SELECT * FROM estados";
        $resultado = $this->conexao->query($sql);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}

$query = new Query($conexao);
$cidades = $query->getCidade();
$estados = $query->getEstado();
$cidades_json = json_encode($cidades, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
$estados_json = json_encode($estados, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

$armazena = [];
$estados_array = json_decode($estados_json, true);
$cidades_array = json_decode($cidades_json, true);

foreach ($estados_array as $est) {
    foreach ($cidades_array as $cid) {
        if ($est['id'] == $cid['id_estado']) {
            $armazena[] = 
            
                [
                'id_estado' => $est['id'],
                'nome_estado' => $est['nome'],
                'uf' => $est['uf'],
                'id_cidade' => $cid['id'],
                'nome_cidade' => $cid['nome'],
                ];
        }
    }
}

$json_armazena = json_encode($armazena, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
$json_decode = json_decode($json_armazena, true);
// Agora, $armazena contém os pares de estado e cidade correspondentes.
echo $json_armazena;
?>