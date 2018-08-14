<?php
  require 'db_conection.php';

  if ( isset( $_GET['id'] ) && !empty( $_GET['id'] ) )
  {
    $sql = "DELETE FROM usuarios WHERE userId = '".addslashes( $_GET['id'] )."'";
    $pdo -> query( $sql );

    header( "Location: ../index.php" );
  }
  else
  {
    header( "Location: index.php" );
  }
?>
