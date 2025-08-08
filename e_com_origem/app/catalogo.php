<?php

function carregarProdutos() {
    $produtos = [
        [
            'id' => 1,
            'nome' => 'Smartphone Pro X',
            'imagem' => 'images/produto1.jpg',
            'descricao' => 'Um smartphone de última geração com câmera de 108MP e 256GB de armazenamento.',
            'preco' => 3999.90,
            'avaliacao' => 5
        ],
        [
            'id' => 2,
            'nome' => 'Notebook UltraSlim',
            'imagem' => 'images/produto2.jpg',
            'descricao' => 'Leve, potente e com bateria de longa duração para o seu dia a dia de trabalho e estudos.',
            'preco' => 6499.00,
            'avaliacao' => 4
        ],
        [
            'id' => 3,
            'nome' => 'Fone de Ouvido Bass+',
            'imagem' => 'images/produto3.jpg',
            'descricao' => 'Cancelamento de ruído ativo e qualidade de som imersiva para a melhor experiência sonora.',
            'preco' => 69.90,
            'avaliacao' => 5
        ],
        [
            'id' => 4,
            'nome' => 'Smartwatch Fit Pro',
            'imagem' => 'images/produto4.jpg',
            'descricao' => 'Monitore sua saúde e atividades físicas com estilo e tecnologia de ponta.',
            'preco' => 1299.00,
            'avaliacao' => 4
        ],
        [
            'id' => 6,
            'nome' => 'Tablet Master 11"',
            'imagem' => 'images/produto6.jpg',
            'descricao' => 'Ideal para trabalho, estudos e entretenimento com sua tela de alta resolução.',
            'preco' => 2999.00,
            'avaliacao' => 4
        ],
        [ 
            'id' => 7, 
            'nome' => 'Mouse Gamer Viper', 
            'imagem' => 'images/produto7.jpg', // Você pode reutilizar uma imagem existente para teste 
            'descricao' => 'Precisão de 16.000 DPI e design ergonômico para maratonas de jogos.', 
            'preco' => 349.90, 
            'avaliacao' => 5 
        ], 
        [ 
            'id' => 8, 
            'nome' => 'Teclado Mecânico RGB', 
            'imagem' => 'images/produto8.jpg', // Você pode reutilizar uma imagem existente para teste 
            'descricao' => 'Switches mecânicos e iluminação RGB customizável para a melhor 
            performance.', 
            'preco' => 599.00, 
            'avaliacao' => 5 
        ]
    ];

    // Aplicar descontos do arquivo CSV
    $promocoes = [];
    if (($handle = fopen(__DIR__ . '/promocoes.csv', 'r')) !== FALSE) { // O uso de fgetcsv é uma maneira eficiente de ler arquivos CSV em PHP. [10, 16]
        fgetcsv($handle); // Pula o cabeçalho
        while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
            $promocoes[$data[0]] = $data[1];
        }
        fclose($handle);
    }

    foreach ($produtos as &$produto) {
        if (isset($promocoes[$produto['id']]) && $promocoes[$produto['id']] == 'sim') {
            $produto['preco_original'] = $produto['preco'];
            $produto['preco'] = $produto['preco'] * 0.90; // Aplica 10% de desconto
        }
    }

    return $produtos;
}

?>