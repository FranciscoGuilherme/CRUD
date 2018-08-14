<?php
  require 'php/db_conection.php';
  require 'php/db_usuario.php';
  require 'php/db_update.php';
?>

<html>
  <head>
    <title>Editar usuário</title>

    <meta charset="UTF-8" />
  </head>

  <body>
    <nav>
    </nav>

    <section>
      <article>
        <form method="POST">
          <label for="nome">Nome:</label>
          <input id="nome" type="text" name="nome" value="<?php echo $usuario['nome']; ?>" />

          <br />
          <br />

          <label for="email">E-mail:</label>
          <input id="email" type="email" name="email" value="<?php echo $usuario['email']; ?>" />

          <br />
          <br />

          <label for="senha">Senha:</label>
          <input id="senha" type="password" name="senha" />

          <br />
          <br />

          <input type="submit" value="Atualizar" />
        </form>
      </article>
    </section>

    <aside>
    </aside>

    <footer>
    </footer>
  </body>
</html>
