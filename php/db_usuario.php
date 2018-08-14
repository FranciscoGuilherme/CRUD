<?php
  $id = '';

  $usuario = array(
    'nome' => '',
    'email' => '',
    'senha' => ''
  );

  if ( isset( $_GET['id'] ) && !empty( $_GET['id'] ) )
  {
    $id = addslashes( $_GET['id'] );

    try
    {
      $sql = "SELECT * FROM usuarios WHERE userId = '".$id."'";
      $sql = $pdo -> query( $sql );

      if ( ($sql -> rowCount()) > 0 )
      {
        $usuario = $sql -> fetch();
      }
    }
    catch ( PDOException $ex)
    {
      echo 'Falhou: '.$ex -> getMessage();
    }
  }
  else
  {
    header( 'Location: ../index.php' );
  }
?>
