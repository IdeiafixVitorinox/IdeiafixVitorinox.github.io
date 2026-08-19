<?php
    // Inclui o cabeçalho, metadados e a barra de navegação
    include 'header.php';
    include 'dados.php'; // <-- ADICIONE ESTA LINHA
    // Arrays para gerir as competências dinamicamente
    $competencias_programacao = ["PHP", "JavaScript", "HTML & CSS", "Dart (Flutter)", "SQL", "Python (Básico)"];
    $competencias_ferramentas = ["Git & GitHub", "React", "Bootstrap", "XAMPP", "Visual Studio Code", "NetBeans"];
    $competencias_outras = ["Gestão de Projetos", "Resolução de Problemas", "Trabalho em Equipa", "Comunicação Técnica"];
?>

    <!-- ============================================ -->
    <!-- CABEÇALHO COM IMAGEM E TÍTULO                -->
    <!-- ============================================ -->
    <header class="text-center" style="padding-top: 100px; padding-bottom: 50px;">
        <div class="container">
            <img src="imagens/ricardo_vitorino.jpg" class="img-fluid rounded-circle mb-3" alt="Foto de Ricardo Vitorino">
            <h1 class="display-4">Ricardo Vitorino</h1>
            <p class="lead">Desenvolvedor de Software | Entusiasta de Tecnologia</p>
        </div>
    </header>

    <!-- ============================================ -->
    <!-- CONTEÚDO PRINCIPAL DA PÁGINA                 -->
    <!-- ============================================ -->
    <main class="container my-5">

        <!-- Secção "Sobre Mim" -->
        <section id="sobre" class="mb-5">
            <h2 class="border-bottom pb-2 mb-4">Sobre Mim</h2>
            <p class="text-justify">
                Olá! Sou o Ricardo, um profissional apaixonado por resolver problemas através da tecnologia. Com experiência em Administração Cloud, Suporte Técnico B2B e Desenvolvimento de Aplicações Web, Mobile e etc, procuro sempre aprender e aplicar novas tecnologias para criar soluções eficientes e elegantes. Além disso, tenho um grande interesse em gestão de projetos, design de UI/UX, análise de dados, etc., pois acredito que a combinação de diferentes competências é a chave para a inovação.
            </p>
            <p class="text-justify">
                Além da Tecnologia e nomeadamente as Tecnologias de Informação, tenho um grande interesse em Auto-Realização e Descoberta, como principal objetivo. Poderá consultar as minhas publicações acima em Livros.
            </p>
        </section>

        <!-- Secção "Competências" -->
        <section id="competencias" class="mb-5">
            <h2 class="border-bottom pb-2 mb-4">Competências</h2>
            <div class="row">
                <!-- Coluna de Programação -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Programação</h5>
                            <ul>
                                <?php 
                                    // Loop que percorre o array e cria um <li> para cada item
                                    foreach ($competencias_programacao as $competencia) {
                                        echo "<li>" . $competencia . "</li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Coluna de Ferramentas e Tecnologias -->
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Ferramentas e Tecnologias</h5>
                            <ul>
                                <?php 
                                    // Loop que percorre o array e cria um <li> para cada item
                                    foreach ($competencias_ferramentas  as $competencia) {
                                        echo "<li>" . $competencia . "</li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Coluna de Outras Competências -->
                <div class="col-md-4">
                     <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Outras</h5>
                            <ul>
                                <?php 
                                    // Loop que percorre o array e cria um <li> para cada item
                                    foreach ($competencias_outras  as $competencia) {
                                        echo "<li>" . $competencia . "</li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Secção "Projetos" -->
        <section id="projetos" class="mb-5">
            <h2 class="border-bottom pb-2 mb-4">Projetos Destacados</h2>
            <div class="row">

                <?php foreach ($projetos as $projeto): ?>

                    <div class="col-md-6 mb-4">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?php echo htmlspecialchars($projeto['titulo']); ?></h5>
                                <p class="card-text flex-grow-1"><?php echo htmlspecialchars($projeto['descricao']); ?></p>
                                <a href="<?php echo htmlspecialchars($projeto['link_url']); ?>" target="_blank" class="btn btn-primary mt-auto">
                                    <?php echo htmlspecialchars($projeto['link_texto']); ?>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
        </section>

        <!-- Secção "Contacto" -->
        <section id="contacto" class="text-center">
             <h2 class="border-bottom pb-2 mb-4">Vamos Conversar?</h2>
             <p>Estou sempre disponível para novos desafios e colaborações. Pode encontrar-me aqui:</p>
             <p>
                 <strong>Email:</strong> <a href="mailto:ricardo.j.vitorino@gmail.com">ricardo.j.vitorino@gmail.com</a><br>
                 <strong>GitHub:</strong> <a href="https://github.com/IdeiafixVitorinox" target="_blank">https://github.com/IdeiafixVitorinox</a>
             </p>
        </section>

    </main>

<?php
    // Inclui o rodapé e os scripts JS
    include 'footer.php';
?>