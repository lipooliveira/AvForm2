<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 2</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <header>
            <div class="navbar">
                <div class="logo">
                    <img src="https://via.placeholder.com/150" alt="Logo UNISUAM">
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Principal</a></li>
                        <li><a href="exercicio1.php">Exercício 1</a></li>
                        <li><a href="exercicio2.php">Exercício 2</a></li>
                        <li><a href="exercicio3.php">Exercício 3</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
                <h1>Login</h1>
                <form id="loginForm" action="resultado2.php" method="post">
                    <label for="user">Nome de Usuário:</label>
                    <input type="text" id="user" name="user" required pattern="[0-9]+" title="Digite apenas números">

                    <label for="password">Senha:</label>
                    <input type="password" id="password" name="password" required>

                    <button type="submit">Login</button>
                    <button onclick="returnToMain()" type="button" class="back-btn">Voltar</button>
                </form>
            </div>
        </main>

        <script src="return.js"></script>
        <script>
            const form = document.getElementById("loginForm");
            form.addEventListener("submit", function(event) {
                event.preventDefault();
                
                const user = document.getElementById("user").value;
                const password = document.getElementById("password").value;

                if (user.trim() === '' || password.trim() === '') {
                    alert('Por favor, preencha todos os campos.');
                } else if (password.length < 6) {
                    alert('A senha deve ter no mínimo 6 caracteres.');
                } else {
                    this.submit();
                }
            });
        </script>

    </body>
</html>