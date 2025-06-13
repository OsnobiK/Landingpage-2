<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Conexus</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <div class="logo">
                <a href="index.php">C<span>o</span>nexus</a>
            </div>
            <nav class="main-nav">
                <a href="#inicio">Início</a>
                <a href="#sobre">Sobre</a>
                <a href="#servicos">Serviços</a>
                <a href="#contato">Contato</a>
            </nav>
        </div>
    </header>

    <main class="main-content container">
        
        <div class="text-column">
            <section class="bemvindo">
                <h1>Bem-Vindo</h1>
                <h1>à C<span>o</span>nexus</h1>
            </section>

            <section class="forms">
                <h3>Quer ficar por dentro?</h3>
                <form action="">
                    <input type="email" name="email" id="email" placeholder="Digite seu melhor e-mail" required>
                    <input type="submit" class="submit" name="submit" value="Enviar">
                </form> 
            </section>
            
            <section class="content">
                <h2>O que é a C<span>o</span>nexus?</h2>
                <article>
                    <p>A vida pode ser corrida, confusa, cheia de altos e baixos.</p>  
                    <p>Às vezes tudo tá bem, às vezes nem tanto. E tá tudo certo. A Conexus é pra esses momentos — e pra todos os outros também.</p>
                    <p>Aqui você se conecta com pessoas que sabem ouvir, que compartilham histórias, que acolhem sem perguntas estranhas ou olhares tortos. É um lugar pra conversar de verdade, sem máscaras, sem julgamentos.</p>
                    <p>Não é sobre ser forte o tempo todo. É sobre ser real, humano, e entender que tá tudo bem sentir.</p>
                    <ul>
                        <li>📱 Entra num grupo, conta o que quiser, ouve o que precisar.</li>  
                        <li>👥 Conhece gente que também tá buscando leveza, sentido, ou só um respiro.</li>  
                        <li>💬 Troca ideia, desabafa, ri, se encontra.</li>
                    </ul>
                </article>
            </section>
        </div>

        <div class="image-column">
            <img src="./img/Conexus img.jpeg" alt="Ilustração de pessoas conectadas" class="main-image" />
        </div>

    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Conexus. Todos os direitos reservados.</p>
            <div class="footer-links">
                <a href="politica-privacidade.php">Política de Privacidade</a>
                <a href="termos-uso.php">Termos de Uso</a>
            </div>
        </div>
    </footer>

</body>
</html>