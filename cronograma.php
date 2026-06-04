<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cronograma - Brasa Bar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">

    <!-- Icons -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <?php 
        include 'header.php'; 
    ?>
</body>
<main>
    
    <section class="cronograma">
        
        <div class="cabeçalio">
            <h2>Cronograma de Eventos</h2>
        </div>
        <div class="grid-eventos">
            <!-- Segunda -->
            <div class="card">
                <div class="topo-card">
                    <h2>Segunda</h2>
                </div>

                <div class="conteudo-card">
                    <i class="fa-solid fa-calendar-xmark icone"></i>
                    <h3>Sem eventos</h3>
                </div>
            </div>
            <!-- Terça -->
            <div class="card">
                <div class="topo-card">
                    <h2>Terça</h2>
                </div>
                <div class="conteudo-card">
                    <i class="fa-solid fa-microphone icone"></i>
                    <h4>20:00</h4>
                    <h3>Karaokê</h3>
                </div>
            </div>
            <!-- Quarta -->
            <div class="card">
                <div class="topo-card">
                    <h2>Quarta</h2>
                </div>
                <div class="conteudo-card">
                    <i class="fa-solid fa-beer-mug-empty icone"></i>
                    <h4>18:00</h4>
                    <h3>Happy Hour</h3>
                </div>
            </div>
            <!-- Quinta -->
            <div class="card">
                <div class="topo-card">
                    <h2>Quinta</h2>
                </div>
                <div class="conteudo-card">
                    <i class="fa-solid fa-guitar icone"></i>
                    <h4>21:00</h4>
                    <h3>Rock ao Vivo</h3>
                </div>
            </div>
            <!-- Sexta -->
            <div class="card">
                <div class="topo-card">
                    <h2>Sexta</h2>
                </div>
                <div class="conteudo-card">
                    <i class="fa-solid fa-headphones icone"></i>
                    <h4>22:00</h4>
                    <h3>DJ Night</h3> 
                </div>
            </div>
            <!-- Sábado -->
            <div class="card">
                <div class="topo-card">
                    <h2>Sábado</h2>
                </div>
                <div class="conteudo-card">
                    <i class="fa-solid fa-star icone"></i>
                    <h4>21:00</h4>
                    <h3>Sertanejo</h3>
                </div>
            </div>
            <!-- Domingo -->
            <div class="card">
                <div class="topo-card">
                    <h2>Domingo</h2>
                </div>
                <div class="conteudo-card">
                    <i class="fa-solid fa-bottle-water icone"></i>
                    <h4>17:00</h4>
                    <h3>Premium</h3>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="footer">

    <div class="footer-logo">
        <h2>BRASA-BAR</h2>
        <p>Onde cada noite tem uma história.</p>
    </div>

    <div class="footer-contato">
        <span>📍 São Paulo - SP</span>
        <span>📞 (11) 99999-9999</span>
        <span>📸 @brasa-bar</span>
    </div>

    <nav class="footer-menu">
        <a href="index.php">Home</a>
        <a href="catalogo.php">Catálogo</a>
        <a href="cronograma.php">Cronograma</a>
        <a href="#">Contato</a>
    </nav>

    <div class="footer-copy">
        © 2026 Brasa-bar - Todos os direitos reservados
    </div>

</footer>
</html>