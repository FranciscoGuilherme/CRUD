<?php
  require 'php/db_adicionar.php';
?>

<html>
  <head>
    <title>Adicionar usuário</title>

    <meta charset="UTF-8" />
  </head>

  <body>
    <nav>
    </nav>

    <section>
      <article>
        <form method="POST">
          <label for="nome">Nome:</label>
          <input id="nome" type="text" name="nome" />

          <br />
          <br />

          <label for="email">E-mail:</label>
          <input id="email" type="email" name="email" />

          <br />
          <br />

          <label for="senha">Senha:</label>
          <input id="senha" type="password" name="senha" />

          <br />
          <br />

          <input type="submit" value="Cadastrar" />

          <a href="index.php">
            <input type="button" value="Voltar" />
          </a>
        </form>
      </article>
    </section>

    <aside>
    </aside>

    <footer>
    </footer>
  </body>
</html>
