<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercício 1</title>
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
                <h1>Calculadora de Fatorial</h1>
                <form action="resultado1.php" method="post" id="formulario">
                    <input type="number" id="number" name="number" placeholder="Digite um número inteiro maior que 0">
                    <button type="submit">Enviar</button>
                    <button onclick="returnToMain()" type="button" class="back-btn">Voltar</button>
                </form>
            </div>
        </main>

        <script src="return.js"></script>
        <script>
            const form = document.getElementById("formulario");
            form.addEventListener("submit", function(event) {
                event.preventDefault();
                const number = document.querySelector("#formulario input").value;
                if (number <= 0) {
                    alert("Digite um número inteiro maior que 0.");
                    return;
                }

                alert("Número enviado com sucesso!");
                this.submit();
            });
        </script>
    </body>
</html>