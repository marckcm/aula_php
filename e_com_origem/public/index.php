<?php
require_once __DIR__ . '/../app/catalogo.php';
$produtos = carregarProdutos();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossa Loja Online</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- Link para a biblioteca de ícones Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- CABEÇALHO -->
    <header class="header">
        <div class="container header-container">
            <a href="#" class="logo">TechShop</a>
            <nav class="main-nav">
                <a href="#">Home</a>
                <a href="#">Produtos</a>
                <a href="#">Contato</a>
            </nav>
            <div class="header-icons">
                <a href="#" aria-label="Buscar"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#" aria-label="Minha Conta"><i class="fa-solid fa-user"></i></a>
                <a href="#" aria-label="Carrinho de Compras"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
    </header>

    <!-- CONTEÚDO PRINCIPAL -->
    <main class="container">
        <h1>Nosso Catálogo</h1>

        <div class="catalogo">
            <?php foreach ($produtos as $produto): ?>
                <div class="produto">
                    <div class="produto-imagem">
                        <img src="<?php echo htmlspecialchars($produto['imagem']); ?>" alt="<?php echo htmlspecialchars($produto['nome']); ?>">
                    </div>
                    <div class="produto-info">
                        <h2 class="produto-nome"><?php echo htmlspecialchars($produto['nome']); ?></h2>
                        <p class="produto-descricao"><?php echo htmlspecialchars($produto['descricao']); ?></p>
                        
                        <div class="produto-preco">
                            R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?>
                            <?php if (isset($produto['preco_original'])): ?>
                                <span class="preco-original">R$ <?php echo number_format($produto['preco_original'], 2, ',', '.'); ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="produto-avaliacao">
                            <span class="estrelas">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <?php if ($i < $produto['avaliacao']): ?>
                                        &#9733; <!-- Estrela preenchida -->
                                    <?php else: ?>
                                        &#9734; <!-- Estrela vazia -->
                                    <?php endif; ?>
                                <?php endfor; ?>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <!-- RODAPÉ -->
    <footer class="footer">
        <div class="container">
            <div class="social-icons">
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <p>&copy; <?php echo date('Y'); ?> TechShop. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>