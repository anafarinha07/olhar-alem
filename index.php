<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olhar Além</title>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "src/style.css">
    <script hre></script>
</head>
<body>
    
    <!-- header -->
    <header id = "header" class = "vh-100 flex">
        <div class = "container">
            <div class = "header-content">
                <div style="position: relative;">
                    <img src="/galeria/logo-menu.png" alt="" style="position: absolute; bottom: 0px; left: 0px; width: 150px;">
                </div>
             <h3>Ana Farinha</h3>

                <ul class = "social-links">
                    <li>
                        <a href = "https://www.facebook.com/share/14Y5kVAH31/" class = "flex">
                            <i class = "fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href = "https://wa.link/k9o5iz" class = "flex">
                            <i class = "fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li>
                        <a href = "https://www.instagram.com/olhar._.alem/" class = "flex">
                            <i class = "fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- end of header -->

    <!-- main content -->
    <main>
        <!-- about section -->
        <section id = "about" class = "about py-7">
            <div class = "container">
                <div class = "about-content grid">
                    <div class = "about-left">
                        <img src = "/galeria/about-pic.jpg" alt = "" class="about-img">
                    </div>
                    <div class = "about-right">
                        <div class = "title">
                            <h2>Sobre Mim</h2>
                        </div>
                        <p class = "lead">Olá! Sou a Ana Farinha, tenho 18 anos e a fotografia faz parte da minha vida desde a infância. Atualmente, no 12º ano, estou a aprofundar esta paixão no meu projeto de PAP, um desafio que me permite explorar a minha criatividade.</p>
                        <p class = "lead">Adoro capturar momentos, contar histórias e revelar a beleza do mundo através das minhas fotos. </p>
                        <p class = "lead">Este site é o reflexo do meu percurso e da minha evolução como fotógrafa. Pretendo continuar com este projeto ao longo da minha vida, sempre em busca de novas formas de expressar a minha visão do mundo. </p>
                        <a href = "#work" class = "btn-down">
                            <i class = "fas fa-chevron-down"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of about section -->

        <!-- work section -->
        <section id = "work" class = "vh-100 flex py-7">
            <div class = "container">
                <div class = "work-content">
                    <div class = "title">
                        <h2>O que estou a fazer?</h2>
                        <a href = "#portfolio" class = "btn-down btn-down-white">
                            <i class = "fas fa-chevron-down"></i>
                        </a>
                    </div>
                    <ul class = "work-top grid">
                        <li class = "lead"><i class = "fas fa-dot-circle"></i> PAP (Prova de Aptidão Profissional): Atualmente, estou completamente dedicada ao meu projeto de PAP. Nele, tenho a oportunidade de explorar novas técnicas fotográficas enquanto desenvolvo a minha identidade como fotógrafa. Este desafio está a permitir-me crescer de forma criativa e a trabalhar em projetos mais pessoais e autênticos.</li>
                        <li class = "lead"><i class = "fas fa-dot-circle"></i> Expansão do Portfólio: A cada momento que capturo, estou a enriquecer o meu portfólio com imagens que refletem a minha visão do mundo. Esforço-me por explorar tanto a fotografia de retratos como a de paisagens, expandindo constantemente os meus horizontes.</li>
                        <li class = "lead"><i class = "fas fa-dot-circle"></i> Próximos Desafios e Planos Futuros: Estou muito entusiasmada com o futuro e com as novas oportunidades que estão por vir. Pretendo continuar a explorar a fotografia de uma maneira mais profissional, com a ambição de crescer e de partilhar o meu trabalho com um público mais vasto e diversificado.</li>
                    </ul>
        </section>
        <!-- end of work section -->

        <!-- portfolio section -->
        <section id="portfolio" class="vh-100 py-7">
            <div class="container">
                <div class="portfolio-content">
                    <div class="title">
                        <h2>Galeria</h2>
                        <a href="#booking" class="btn-down">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </div>
        
                    <div class="portfolio-grid grid">
                        <a href="/retratos" class="category">
                            <img src="/galeria/port-1.jpg">
                            <h3>Retratos</h3>
                        </a>
                        <a href="/natureza" class="category">
                            <img src="/galeria/port-2.jpg">
                            <h3>Natureza</h3>
                        </a>
                        <a href="/preto" class="category">
                            <img src="/galeria/port-3.jpg">
                            <h3>Preto&Branco</h3>
                        </a>
                        <a href="/animal" class="category">
                            <img src="/galeria/port-4.jpg">
                            <h3>Animal</h3>
                        </a>
                        <a href="/eventos" class="category">
                            <img src="/galeria/port-5.jpg">
                            <h3>Eventos</h3>
                        </a>
                        <a href="/aldeias" class="category">
                            <img src="/galeria/port-6.jpg">
                            <h3>Aldeias</h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of portfolio section -->

        <!-- booking section -->
<section id="booking" class="py-7" style="margin-top: 20px; background-color: #1a1b1bca">
    <div class="container">
        <div class="contact-content flex">
            <div class="contact-left">
                <div class="title">
                    <a href="#contact" class="btn-down btn-down-white">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <h2 style="color: white; position: relative;">Agendamento</h2>
                </div>
                <!-- FormulárioPROF --
                


                booking section -->
                <form action="#" method="POST" style="max-width: 400px; margin: 0; ">
                    <div style="margin-bottom: 20px;">
                        <label for="name" style="display: block; margin-bottom: 5px; color: #ffffff;">Nome</label>
                        <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="email" style="display: block; margin-bottom: 5px; color: #ffffff;">Email</label>
                        <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="date" style="display: block; margin-bottom: 5px; color: #ffffff;">Data</label>
                        <input type="date" id="date" name="date" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box;">
                    </div>
                    <div style="margin-bottom: 20px;">
                        <label for="message" style="display: block; margin-bottom: 5px; color: #ffffff;">Mensagem</label>
                        <textarea id="message" name="message" rows="4" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; resize: both;"></textarea>
                    </div>
                    <div>
                        <button type="submit" style="width: 100%; padding: 10px; background-color: #000000; color: rgb(255, 255, 255); border: none; border-radius: 4px; cursor: pointer; font-size: 16px;">Reservar Agora</button>
                    </div>
                </form>
            </div>
            <div class="contact-right">
                <img src="/galeria/port-7.jpg">
            </div>
        </div>
    </div>
</section>
<!-- end of booking section -->

        <!-- contact section -->
        <section id="contact" class="py-7" style="background-color: #ffffff">
            <div class="container">
                <div class="contact-content flex">
                    <div class="contact-left">
                        <div class="title">
                            <a href = "#insta" class = "btn-down">
                                <i class = "fas fa-chevron-down"></i>
                            </a>
                            <h2>Contactos</h2>
                        </div>
                        <div class="contact-link">
                            <a href="https://wa.link/k9o5iz" class="btn lead"><i class="fab fa-whatsapp" style="margin-right: 5px;"></i> WhatsApp</a>
                        </div>
                        <div class="contact-link">
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=fotografia.olharalem@gmail.com" class="btn lead"><i class="fas fa-envelope" style="margin-right: 5px;"></i> E-mail</a>
                        </div>
                        <div class="contact-link">
                            <a href="https://www.facebook.com/share/14Y5kVAH31/" class="btn lead"><i class="fab fa-facebook-f" style="margin-right: 5px;"></i> Facebook</a>
                        </div>
                        <div class="contact-link">
                            <a href="https://www.instagram.com/olhar._.alem" class="btn lead"><i class="fab fa-instagram" style="margin-right: 5px;"></i> Instagram</a>
                        </div>
                    </div>
                    <div class="contact-right">
                        <img src="/galeria/contact-pic.jpg" alt="contact image">
                    </div>
                </div>
            </div>
        </section>
        <!-- end of contact section -->

        <!-- instagram section -->
        <section id = "insta" class = "py-7">
            <div class = "container">
                <div class = "insta-content">
                    <div class = "title">
                        <h2>Instagram</h2>
                        <a href = "#footer" class = "btn-down btn-down-white">
                            <i class = "fas fa-chevron-down"></i>
                        </a>
                    </div>
                    <div class = "insta-grid grid">
                        <div><img src = "/galeria/port-1.jpg"></div>
                        <div><img src = "/galeria/port-2.jpg"></div>
                        <div><img src = "/galeria/port-3.jpg"></div>
                        <div><img src = "/galeria/port-4.jpg"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of instagram section -->
    </main>
    <!-- end of main content -->

    <!-- footer -->
    <footer id = "footer" class = "py-7" style="background-color: white">
        <div class = "container">
            <div class = "footer-content">
                <div>
                    <h3>ANA FARINHA</h3>
                    <div>
                        <img src="/galeria/logo-menu.png">
                    </div>
                </div>

                <div>
                    <h3>Links</h3>
                    <ul class = "flex">
                        <li><a href = "#about">Sobre Mim</a></li>
                        <li><a href = "#work">O que estou a fazer</a></li>
                        <li><a href = "#portfolio">Galeira</a></li>
                        <li><a href = "#booking">Agendamento</a></li>
                        <li><a href = "#contact">Contacto</a></li>
                        <li><a href = "#insta">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>

<?php
// Variáveis para armazenar os valores
$nome = $email = $data = $mensagem = "";
$nomeErro = $emailErro = $dataErro = $mensagemErro = "";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validação do Nome
    if (empty($_POST["nome"])) {
        $nomeErro = "O nome é obrigatório.";
    } else {
        $nome = htmlspecialchars($_POST["nome"]);
    }
    
    // Validação do E-mail
    if (empty($_POST["email"])) {
        $emailErro = "O e-mail é obrigatório.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErro = "Formato de e-mail inválido.";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }
    
    // Validação da Data
    if (empty($_POST["data"])) {
        $dataErro = "A data é obrigatória.";
    } else {
        $data = htmlspecialchars($_POST["data"]);
    }
    
    // Validação da Mensagem
    if (empty($_POST["mensagem"])) {
        $mensagemErro = "A mensagem não pode estar vazia.";
    } else {
        $mensagem = htmlspecialchars($_POST["mensagem"]);
    }
    
    // Se não houver erros, enviar o e-mail
    if (empty($nomeErro) && empty($emailErro) && empty($dataErro) && empty($mensagemErro)) {
        $para = "a6808anafarinha@aes.edu.pt"; // Substitua pelo seu e-mail
        $assunto = "Novo Agendamento";
        $conteudo = "Nome: $nome\nEmail: $email\nData: $data\nMensagem: $mensagem";
        $cabecalho = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

        if (mail($para, $assunto, $conteudo, $cabecalho)) {
            echo "<p style='color: green; text-align: center;'>Agendamento enviado com sucesso!</p>";
        } else {
            echo "<p style='color: red; text-align: center;'>Erro ao enviar o agendamento.</p>";
        }
    }
}
?>