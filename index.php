<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <title>Advocacia</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img\logo_cabecao-removebg-preview.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- header section -->
    <header class="header" id="navbar">
        <a href="#" class="logo">
            <img src="img/logo_cabecao-removebg-preview.png" alt="logo">
        </a>

        <nav class="navbar">
            <a href="#home">Inicio</a>
            <a href="#about">Sobre</a>
            <a href="#benefits">Benefícios</a>
            <a href="#review">Avaliações</a>
            <a href="#contact">Contato</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>
        <div class="search-form">
            <input type="search" id="search-box" placeholder="Procure aqui...">
            <label for="search-box" class="fas fa-search"></label>
        </div>
    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>garanta a sua aposentadoria de graça</h3>
            <p>Garanta sua aposentadoria de graça aproveitando programas públicos como o INSS, que oferece cobertura previdenciária baseada em contribuições. Investigue previdência complementar com contrapartidas de empresas. Só cobramos se o processo for bem-sucedido. Economize e busque orientação financeira para um futuro seguro.</p>
            <a href="https://api.whatsapp.com/send?phone=+553898230477&text=Olá!%20Gostaria%20de%20mais%20informações" class="btn">Entre em contato agora</a>
        </div>
    </section>

    <section class="about" id="about">
        <h1 class="heading"><span>Sobre</span> nós</h1>
        <div class="row">
            <div class="image">
                <img src="img/advogado.jpg" alt="foto">
            </div>
            <div class="content">
                <h3>O que faz de nós especiais?</h3>
                <p>Somos únicos pela nossa combinação de experiência, expertise e compromisso com a excelência. Nossa equipe é formada por profissionais altamente qualificados, dedicados a oferecer soluções personalizadas que atendem às suas necessidades específicas. Priorizamos um atendimento transparente e personalizado, garantindo que cada cliente receba a atenção e suporte necessários. A nossa abordagem detalhada e focada em resultados faz a diferença, proporcionando uma experiência excepcional e eficaz. Escolha-nos para serviços diferenciados e resultados superiores.</p>
                <a href="https://api.whatsapp.com/send?phone=+553898230477&text=Olá!%20Gostaria%20de%20mais%20informações" class="btn">Saiba Mais</a>
            </div>
        </div>
    </section>

    <!-- Seção de Benefícios Previdenciários -->
    <section class="benefits" id="benefits">
        <h1 class="heading">Especialidades</h1>
        <div class="container">
            <div class="box">
                <i class="fa-solid fa-gavel"></i>
                <h3>BPC-LOAS</h3>
                <p>É um benefício assistencial no valor de 1 salário mínimo destinado a pessoa doente de qualquer idade.</p>
            </div>
            <div class="box">
                <i class="fas fa-wheelchair"></i>
                <h3>Aposentadoria por invalidez</h3>
                <p>Um benefício ao trabalhador permanentemente incapaz de exercer qualquer atividade laborativa em qualquer profissão.</p>
            </div>
            <div class="box">
                <i class="fas fa-blind"></i>
                <h3>Aposentadoria por idade</h3>
                <p>Um benefício ao trabalhador que comprovar o mínimo em tempo de trabalho e idade mínima exigida.</p>
            </div>
            <div class="box">
                <i class="fas fa-hourglass-half"></i>
                <h3>Aposentadoria por tempo de contribuição</h3>
                <p>Um benefício ao cidadão que comprovar o tempo total de contribuição.</p>
            </div>
            <div class="box">
                <i class="fas fa-radiation"></i>
                <h3>Aposentadoria especial</h3>
                <p>Um benefício ao cidadão que trabalha exposto a agentes nocivos à saúde.</p>
            </div>
            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>Auxílio-Doença</h3>
                <p>Um benefício por incapacidade do indivíduo em uma doença ou acidente que o incapacite temporariamente para o trabalho.</p>
            </div>
            <div class="box">
                <i class="fas fa-car-crash"></i>
                <h3>Auxílio-Acidente</h3>
                <p>Um benefício ao indivíduo que desenvolva sequela permanente que reduza sua capacidade laborativa.</p>
            </div>
        </div>
    </section>

    <div class="whatsapp-button">
        <a href="https://api.whatsapp.com/send?phone=+553898230477&text=Olá!%20Gostaria%20de%20mais%20informações."
            target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>

    <section class="review" id="review">
        <h1 class="heading"><span>Avaliações</span> dos clientes</h1>
        <div class="box-container">
            <div class="box">
                <img src="img/aspas.png" alt="QUOTES" class="quotes">
                <p>Contratei os serviços e fiquei impressionado com a atenção e resultados rápidos. A equipe é excepcional e entregou tudo conforme prometido. Recomendo!</p>
                <img src="img/1000_F_398361028_UJHoY7Dnvgu5A273sR4GtVYSlg7HhA22.jpg" alt="user" class="user">
                <h3>Maria D'Lurdes</h3>
            </div>

            <div class="box">
                <img src="img/aspas.png" alt="QUOTES" class="quotes">
                <p>Excelente atendimento e soluções personalizadas. A empresa superou minhas expectativas e o processo foi transparente e eficiente. Muito satisfeito com o resultado!</p>
                <img src="img/images.jpeg" alt="user" class="user">
                <h3>Rogerio Almeida</h3>
                <div class="stars">
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading"><span>Contate</span> nos</h1>

        <div class="row">
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14873.72074838216!2d-52.048064133335295!3d-21.254432639013142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949057c4069e1095%3A0xb45b351419bba3c7!2sBrasil%C3%A2ndia%2C%20MS%2C%2079670-000!5e0!3m2!1spt-BR!2sbr!4v1724976827126!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form method="post" id="meuFormulario">
                <h3>NÃO PERCA TEMPO</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="Nome" id="nome" name="nome" required>
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="Email" id="email" name="email" required>
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="text" placeholder="Telefone" id="telefone" name="telefone" required>
                </div>
                <input type="submit" value="Enviar" class="btn">
                <div id="mensagem" style="font-size:12px; display:none; color:green; margin-top:10px;"></div>
            </form>
        </div>
    </section>

    <section class="footer">
        <div class="shar">
            <a href="https://api.whatsapp.com/send?phone=+553898230477&text=Olá!%20Gostaria%20de%20mais%20informações" class="fab fa-whatsapp"></a>
        </div>

        <div class="links">
            <a href="#">Home</a>
            <a href="#">Sobre</a>
            <a href="#">Menu</a>
            <a href="#">Contato</a>
            <a href="#">Avaliações</a>
        </div>

        <div class="credit">
            <p>Desenvolvido por Paulo Barbosa ® || Soluções inteligentes </p>
        </div>
    </section>

    <script src="script.js"></script>
</body>

</html>