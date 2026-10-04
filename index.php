<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <H2>Indice dos exercicios</H2>
    </header>
        <main class="principal">
            <div class="conteudo">
                <nav class="modulos">
                    <div class="modulo verde">
                        <h3>modulo 01 </h3>
                        <ul>
                              <li>
                                <a href="exercicio.php?dir=basico&file=ola"> 
                                    Ola php
                                 </a>
                             </li>
                              <li>
                                <a href="exercicio.php?dir=basico&file=html"> 
                                    Integração html
                                 </a>
                             </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </main>
        <footer class="rodape">
            coder e alunos  <?= date("Y");  ?> 
        


        </footer>
</body>
</html>