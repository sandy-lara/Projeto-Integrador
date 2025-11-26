<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V8 Academia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
    color: white;
    background-color: black;
    font-family: Verdana, Geneva, Tahoma, sans-serif
}

ul {
    display: flex;
    justify-content: space-between;
    list-style-type: none;
    align-items: center;
    padding: 16px;
}

a{
    color: white;
    text-decoration: none;
}

header img{
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 5px solid #5bbe42
}

.center{
    text-align: center;
}

h1{
    color: #5bbe42;
}

footer{
    font-size: 40px;
    margin: 20px;
    align-items: center;
}

.container{
    padding: 0px 30px;
}

nav a:hover{
    color:#5bbe42
}
    </style>
</head>
<body>
    <div class="container">
    <nav>
        <ul>
            <li>
                <a href="home.php">Sobre nós</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
            <li>
                <a href="formulario.php">Cadastre-se</a>
            </li>

        </ul>
    </nav>
    <header>
        <div class="center">
        <img src="acad.jpeg" alt="">
        </div>
        <h1>V8 Academia</h1>
        <h2>Academia com o melhor projeto para você</h2>
    </header>
    <main>
        <section>
            <h3>Sobre Nós</h3>
            <p>
                Cada treino é uma evolução. 
                A V8 Academia oferece estrutura completa, 
                treinos personalizados e um ambiente motivador para você transformar 
                seu corpo e sua saúde. Nossa academia conta com equipamentos de alta performance, 
                equipe qualificada e treinos desenvolvidos para trazer resultados reais com segurança.
            </p>
        </section>
        <section>
            <h3>Nossa equipe</h3>
            <p>
                Nossa equipe é formada por profissionais experientes e apaixonados pelo que fazem.
                Cada treinador da V8 Academia está pronto para orientar você e acompanhar sua evolução com 
                segurança e motivação.
            </p>
        </section>
        <section>
            <h3>Entre em contato</h3>
            <p>
                Tem alguma dúvida, quer conhecer nossos planos ou agendar uma aula experimental?
                A equipe da V8 Academia está pronta para te atender!
                Escolha o canal que preferir — respondemos rápido.
            </p>
            <h3>Horário de Funcionamento</h3>
            <p> 
                Segunda a Sexta: 06h às 22h <br>
                Sábado: 08h às 14h <br>
                Domingos e feriados: fechado</p>
            
        </section>
    </main>
    <footer>
        <a href="https://www.instagram.com/v8_academia/" 
        target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-instagram"></i>
        <a href="https://api.whatsapp.com/message/YK4XM5CPJ54HB1?autoload=1&app_absent=0&utm_source=ig" 
        target="_blank" rel="noopener noreferrer">
        <i class="fa-brands fa-whatsapp"></i>
        </a>
    </footer>
</div>
</body>

</html>