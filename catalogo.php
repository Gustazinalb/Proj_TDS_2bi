<?php

$produtos = [

    // WHISKY
    [
        "nome" => "Jack Daniels",
        "imagem" => "img/jack-daniel.png",
        "categoria" => "Whisky",
        "preco" => 149.90
    ],
    [
        "nome" => "Chivas",
        "imagem" => "img/chivas.png",
        "categoria" => "Whisky",
        "preco" => 169.90
    ],
    [
        "nome" => "Jack Apple",
        "imagem" => "img/jack-apple.png",
        "categoria" => "Whisky",
        "preco" => 159.90
    ],
    [
        "nome" => "Red Label",
        "imagem" => "img/red-label.png",
        "categoria" => "Whisky",
        "preco" => 139.90
    ],

    // CERVEJA
    [
        "nome" => "Skol",
        "imagem" => "img/skol.png",
        "categoria" => "Cerveja",
        "preco" => 5.90
    ],
    [
        "nome" => "Original",
        "imagem" => "img/original.png",
        "categoria" => "Cerveja",
        "preco" => 8.90
    ],
    [
        "nome" => "Itaipava",
        "imagem" => "img/itaipava.png",
        "categoria" => "Cerveja",
        "preco" => 6.90
    ],
    [
        "nome" => "Antartica",
        "imagem" => "img/antartica.png",
        "categoria" => "Cerveja",
        "preco" => 6.50
    ],

    // GIN
    [
        "nome" => "Gardon",
        "imagem" => "img/gardon.png",
        "categoria" => "Gin",
        "preco" => 79.90
    ],
    [
        "nome" => "Intencion Blue",
        "imagem" => "img/intencion-blue.png",
        "categoria" => "Gin",
        "preco" => 69.90
    ],
    [
        "nome" => "Intencion Pink",
        "imagem" => "img/intencion-pink.png",
        "categoria" => "Gin",
        "preco" => 69.90
    ],
    [
        "nome" => "Rocks",
        "imagem" => "img/rocks.png",
        "categoria" => "Gin",
        "preco" => 89.90
    ],

    // VODKA
    [
        "nome" => "Balalaika",
        "imagem" => "img/balalaika.png",
        "categoria" => "Vodka",
        "preco" => 24.90
    ],
    [
        "nome" => "Ciroc",
        "imagem" => "img/ciroc.png",
        "categoria" => "Vodka",
        "preco" => 129.90
    ],
    [
        "nome" => "Intencion Vodka",
        "imagem" => "img/intencion-vodka.png",
        "categoria" => "Vodka",
        "preco" => 39.90
    ],
    [
        "nome" => "Skyy",
        "imagem" => "img/skyy.png",
        "categoria" => "Vodka",
        "preco" => 79.90
    ],

    // VINHO
    [
        "nome" => "Pérola",
        "imagem" => "img/perola.png",
        "categoria" => "Vinho",
        "preco" => 39.90
    ],
    [
        "nome" => "San Severo",
        "imagem" => "img/san-severo.png",
        "categoria" => "Vinho",
        "preco" => 49.90
    ],
    [
        "nome" => "Quinta Moraes",
        "imagem" => "img/quinta-morais.png",
        "categoria" => "Vinho",
        "preco" => 59.90
    ],
    [
        "nome" => "Reservado",
        "imagem" => "img/reservado.png",
        "categoria" => "Vinho",
        "preco" => 44.90
    ]

];

function buscarProdutos($produtos, $termo)
{
    $resultado = [];

    foreach ($produtos as $produto) {

        if (
            stripos($produto['nome'], $termo) !== false ||
            stripos($produto['categoria'], $termo) !== false
        ) {
            $resultado[] = $produto;
        }

    }

    return $resultado;
}

$busca = $_GET['busca'] ?? '';

$resultados = [];

if (!empty($busca)) {
    $resultados = buscarProdutos($produtos, $busca);
}

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo Brasa-bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <?php

// FUNÇÃO PARA DESCONTO
function aplicarDesconto($preco, $percentual)
{
    return $preco - ($preco * $percentual / 100);
}

// FUNÇÃO DE FILTRO
function filtrarProdutosCaros($produtos, $valorMinimo)
{
    $resultado = [];

    foreach ($produtos as $produto) {
        if ($produto['preco'] > $valorMinimo) {
            $resultado[] = $produto;
        }
    }

    return $resultado;
}

?>
<main>
    <<?php if (!empty($busca)) : ?>

    <?php if (count($resultados) > 0) : ?>

        <div class="resultado-busca">

    <?php foreach ($resultados as $produto) : ?>

        <div class="item">

            <img src="<?= $produto['imagem'] ?>" alt="">

            <h2><?= $produto['nome'] ?></h2>

            <p>
                R$ <?= number_format($produto['preco'], 2, ',', '.') ?>
            </p>

        </div>

    <?php endforeach; ?>

</div>

    <?php else : ?>

        <div class="alert alert-danger">
            Nenhum produto encontrado.
        </div>

    <?php endif; ?>

<?php else : ?>

    <!-- TODO O SEU CATÁLOGO ATUAL FICA AQUI -->

    <div class="cabeçalio">
        <h2>Whisky</h2>
    </div>
        <div class="container">
            <div class="item">
                <img src="img/jack-daniel.png" alt="">
                <h2>Jack Daniels</h2>
            </div>
            <div class="item">
                <img src="img/chivas.png" alt="">
                <h2>Chivas</h2>
            </div>
            <div class="item">
                <img src="img/jack-apple.png" alt="">
                <h2>Jack Daniels</h2>
            </div>
            <div class="item">
                <img src="img/red-label.png" alt="">
                <h2>Red Label</h2>
            </div>
        </div>
        <div class="cabeçalio">
            <h2>Cerveja</h2>
        </div>
        <div class="container">
            <div class="item">
                <img src="img/skol.png" alt="">
                <h2>Skol</h2>
            </div>
            <div class="item">
                <img src="img/original.png" alt="">
                <h2>Original</h2>
            </div>
            <div class="item">
                <img src="img/itaipava.png" alt="">
                <h2>Itaipava</h2>
            </div>
            <div class="item">
                <img src="img/antartica.png" alt="">
                <h2>Antartica</h2>
            </div>
        </div>
        <div class="cabeçalio">
            <h2>Gin</h2>
        </div>
        <div class="container">
            <div class="item">
                <img src="img/gardon.png" alt="">
                <h2>Gardon</h2>
            </div>
            <div class="item">
                <img src="img/intencion-blue.png" alt="">
                <h2>Intencion</h2>
            </div>
            <div class="item">
                <img src="img/intencion-pink.png" alt="">
                <h2>Intencion</h2>
            </div>
            <div class="item">
                <img src="img/rocks.png" alt="">
                <h2>Rocks</h2>
            </div>
        </div>    
        <div class="cabeçalio">
                <h2>Vodka</h2>
            </div>
            <div class="container">
                <div class="item">
                    <img src="img/balalaika.png" alt="">
                    <h2>Balalaika</h2>
                </div>
                <div class="item">
                    <img src="img/ciroc.png" alt="">
                    <h2>Ciroc</h2>
                </div>
                <div class="item">
                    <img src="img/intencion-vodka.png" alt="">
                    <h2>Intencion</h2>
                </div>
                <div class="item">
                    <img src="img/skyy.png" alt="">
                    <h2>Skyy</h2>
                </div>
            </div>
            
        <div class="cabeçalio">
                <h2>Vinho</h2>
            </div>
            <div class="container">
                <div class="item">
                    <img src="img/perola.png" alt="">
                    <h2>Pérola</h2>
                </div>
                <div class="item">
                    <img src="img/san-severo.png" alt="">
                    <h2>San Severo</h2>
                </div>
                <div class="item">
                    <img src="img/quinta-morais.png" alt="">
                    <h2>Quinta Moraes</h2>
                </div>
                <div class="item">
                    <img src="img/reservado.png" alt="">
                    <h2>Reservado</h2>
                </div>
            </div> 

<?php endif; ?>

</main>  

    <footer class="footer">
        <div class="footer-logo">
            <h2>BRASA-BAR</h2>
            <p>Onde cada noite tem uma história.</p>
        </div>
        <div class="footer-contato">
            <span>📍 Campo Mourão - PR</span>
            <span>📞 (44) 99714-9528</span>
            <span>📸 @brasa-bar</span>
        </div>
        <nav class="footer-menu">
            <a href="index.php">Home</a>
            <a href="catalogo.php">Catálogo</a>
            <a href="cronograma.php">Cronograma</a>
            <a href="contato.php">Contato</a>
        </nav>
        <div class="footer-copy">
            © 2026 Brasa-bar - Todos os direitos reservados
        </div>
    </footer>
</body>
</html>