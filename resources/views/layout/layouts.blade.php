

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon/livro.png " type="image/x-icon">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/responsivo.css">
    <link rel="stylesheet" href="css/telacurso.css">
    <link rel="stylesheet" href="css/user.css">
    <title>@yield('')</title>
</head>
<body>

    <header class="container1">
        <section class="chilld1">
            <section class="logo">
                <a href="/addcourse">
                    <img src="icon/MRS-Logo Preto.png" alt="" width="80px" height="60px">
                </a>
            </section>
            <nav class="link">
                <ul>
                    <li><a href="." style="color: #1c85e7;">Home</a></li>
                    <li><a href="/courses">Cursos</a></li>
                    <li><a href="#Serviços">Serviços</a></li>
                    <li><a href="#Sobre">Sobre</a></li>
                    <li><a href="#Faq">FAQ</a></li> 
                </ul>
            </nav>
            <section class="log">
                @auth
                <a href="/user"><img src="/img/use.png" alt="" width="35px"></a>     
                <form action="/logout" method="post">
                    @csrf
                    <li><a href="/logout" onclick="event.preventDefault();
                this.closest('form').submit();">Sair</a></li>
                </form>              
                @endauth
                @guest
                    <a href="/login">Login</a> 
                @endguest
            </section>
            <!-- Menu lateral mobile -->
            <nav class="menu-lateral-mobile" id="menuLateralMobile">
                <button class="close-menu" id="closeMenuMobile" aria-label="Fechar menu">&times;</button>
                <ul>
                    <li><a href="#" style="color: #1c85e7;">Home</a></li>
                    <li><a href="#Cursos">Cursos</a></li>
                    <li><a href="#">Serviços</a></li>
                    <li><a href="#Sobre">Sobre</a></li>
                    <li><a href="#Faq">FAQ</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </nav>
        </section>
    </header>

    @yield('contents')

    <footer class="container3">
        <section class="logo-footer">
            <img src="icon/MRS-Logo.png" alt="" width="200px">
        </section>

        <section class="redes">
            <section class="logo-redes">
                <a href="https://www.youtube.com/@MRSServi%C3%A7osTecnol%C3%B3gicos" target="_blank">
                    <img src="img/icons8-youtube-500.png" alt="Icone do youtube" width="30px">
                </a>
                <a href="https://www.instagram.com/mrstecnologia2025?igsh=YzM4NTdwa240MDE=" target="_blank">
                    <img src="img/icons8-instagram-100 (1).png" alt="Icone do Instagram" width="30px">
                </a>
                <a href="https://www.facebook.com/profile.php?id=61580065552059#" target="_blank">
                    <img src="img/facebook (2).png" alt="Icon do Facebook" width="30px">
                </a>
            </section>
            <section class="texto-redes">
                <p>
                    Estamos preparando tudo ao detalhe para que tenhas o melhor ensino. <br> 
                    Palestras e informações em novos formatos estarão a sua disponibilidade. <br><br>
                    Atenção! <br> Estamos trazendo a parte da Tecnologia que você ainda não explorou. 
                </p><br>
                <p style="font-size: 10pt;">
                    © Todos os Direitos Reservados a MRS-Colaboradores
                </p><br>
                <p>Termos  .  Privacidade</p>
            </section>
        </section>
    </footer>
    <!-- Section de Cursos -->

        <script src="js/carrossel.js"></script>

            <script src="js/menu-mobile.js"></script>

    
</body>
</html>