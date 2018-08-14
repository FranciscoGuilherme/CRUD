<?php
  require 'php/db_conection.php';
?>

<html>
  <head>
    <title>Controle de usuários</title>

    <meta charset="UTF-8" />
  </head>

  <body>
    <nav>
    </nav>

    <section>
      <article>
        <table border="0" width="100%">
          <tr>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Ações</td>
          </tr>

          <tr>
            <td colspan="3"><hr /></td>
          </tr>

          <?php require 'php/db_read.php'; ?>
        </table>

        <br />

        <a href="adicionar.php">
          <input type="button" value="Adicionar novo usuário" />
        </a>
      </article>
    </section>

    <aside>
    </aside>

    <footer>
    </footer>
  </body>
</html>
