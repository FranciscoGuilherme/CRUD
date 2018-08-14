<?php
  require 'db_conection.php';

  if ( isset( $_POST['nome'] ) && !empty( $_POST['nome'] ) )
  {
    $usuario = array(
      'nome' => addslashes( $_POST['nome'] ),
      'email' => addslashes( $_POST['email'] ),
      'senha' => md5( addslashes( $_POST['senha'] ) )
    );

    try
    {
      $sql = "INSERT INTO usuarios SET nome  = '".$usuario['nome']."',
                                       email = '".$usuario['email']."',
                                       senha = '".$usuario['senha']."'";

      $sql = $pdo -> query( $sql );

      header( "Location: index.php" );
    }
    catch ( PDOException $ex )
    {
      echo 'Ocorreu um erro: '.$ex -> getMessage();
    }
  }
?>
