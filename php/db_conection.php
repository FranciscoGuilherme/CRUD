<?php
  $dsn = 'mysql:dbname=blog;host=localhost';
  $db = array (
    'user' => 'root',
    'pass' => ''
  );

  try
  {
    $pdo = new PDO( $dsn, $db['user'], $db['pass'] );
  }
  catch ( PDOException $ex )
  {
    echo 'Falhou: '.$ex -> getMessage();
  }
?>
