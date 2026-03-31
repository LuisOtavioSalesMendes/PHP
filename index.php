<?php
$usuario = [
    [
    "nome" => "Julia",
    "id" => "12312322",
    "senha" => "12345678Maria",
    "saldo" => 365.00
    ],
    [
    "nome" => "Regina",
    "id" => "7648663",
    "senha" => "87654321JUliana",
    "saldo" => 995.47
    ]
];

//CONTAS
$contas = [
    [
    "desc" => "Conta d'agua",
    "valor" => 55.00,
    "tipo" => "Pagar"
    ],
    [
    "desc" => "Conta energia",
    "valor" => 220.00,
    "tipo" => "Pagar"    
    ],
    [
    "desc" => "Dividendo",
    "valor" => 75.00,
    "tipo" => "receber"
    ]
//CONTAS

];

//PESSOAS
foreach ($usuario as $udado) {
    echo "Nome: ".$udado["nome"]."<br>";
    echo "ID: ".$udado["id"]."<br>";
    echo "Saldo: ".$udado["saldo"]."<br>";
};
 echo "<br>";
//CONTAS
//foreach ($contas as $cont) {
  //  echo "Descrição: ".$cont["desc"]."<br>";
   // echo "Valor: ".$cont["valor"]."<br>";
   // echo "Tipo: ".$cont["tipo"]."<br>";
//}
foreach($contas as $co) {
    if ($co["tipo"] == "receber") {
        echo "Descrição: ".$co["desc"]."<br>";
    echo "Valor: ".$co["valor"]."<br>";
    }
};

?>