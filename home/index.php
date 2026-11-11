<?php
$nome_site = "Sorveteria Doli";
$descricao = "Estamos aqui para te fazer feliz!";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nome_site; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><?php echo $nome_site; ?></h1>
        <p><?php echo $descricao; ?></p>
        
        <nav>
            <ul>
                <li><a href="#inicio">Início</a></li>
                <li><a href="#produtos">Sabores</a></li>
                <li><a href="#sobre">Sobre Nós</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">

        <section id="produtos">
            <h2>Nossos Sabores Especiais</h2>
            
            <div class="cards-container">
                <div class="card">
                    <h3>🍫 Morango com Chocolate</h3>
                    <p>Massa cremosa de morango natural com pedaços e cobertura de chocolate meio amargo.</p>
                </div>

                <div class="card">
                    <h3>🍦 Baunilha Artesanal</h3>
                    <p>O clássico feito com favas de baunilha de verdade, super leve e cremoso.</p>
                </div>

                <div class="card">
                    <h3>🍋 Limão Siciliano</h3>
                    <p>Opção refrescante e azedinha na medida certa, feita com frutas selecionadas.</p>
                </div>
            </div>
        </section>

        <section id="sobre" class="sobre-section">
            <h2>Sobre a Sorveteria Doli</h2>
            <p>A Doli nasceu da paixão por sobremesas de qualidade. Desde o início, nosso compromisso é trazer alegria a cada colherada com ingredientes frescos e receitas exclusivas.</p>
        </section>

    </main>

    <footer>
        <p>© <?php echo date("Y"); ?> <?php echo $nome_site; ?> - Todos os direitos reservados.</p>
    </footer>

</body>
</html>