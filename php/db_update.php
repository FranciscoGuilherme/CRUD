<?php
  if ( isset( $_POST['nome'] ) && !empty( $_POST['nome'] ) )
  {
    $usuario = array(
      'nome' => addslashes( $_POST['nome'] ),
      'email' => addslashes( $_POST['email'] ),
      'senha' => md5( addslashes( $_POST['senha'] ) )
    );

    $sql = "UPDATE usuarios SET nome = '".$usuario['nome']."',
                                email = '".$usuario['email']."',
                                senha = '".$usuario['senha']."'
                            WHERE userId = '".$id."'";

    try
    {
      $pdo -> query( $sql );

      header( 'Location: ../index.php' );
    }
    catch ( PDOException $ex)
    {
      echo 'Falhou: '.$ex -> getMessage();
    }

  }
?>
