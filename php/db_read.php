<?php
  $sql = "SELECT * FROM usuarios";
  $sql = $pdo -> query( $sql );

  if ( ($sql -> rowCount()) > 0 )
  {
    foreach  ( $sql -> fetchAll() as $usuario )
    {
      echo '<tr>';
        echo '<td>'.$usuario['nome'].'</td>';
        echo '<td>'.$usuario['email'].'</td>';
        echo '<td>
                <a href="editar.php?id='.$usuario['userId'].'">Editar</a> -
                <a href="php/db_excluir.php?id='.$usuario['userId'].'">Excluir</a>
              </td>';
      echo '</tr>';
    }
  }
?>
