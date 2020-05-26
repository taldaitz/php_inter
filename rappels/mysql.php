<?php

function checkAuth($login, $password) {
  $connect = OpenConnection();
  
  $result = ExecuteQuery($connect, "SELECT * FROM user WHERE login = '$login' AND mdp = '$password'");
  $nbRows = mysqli_num_rows($result);

  CloseConnection($connect);

  if($nbRows > 0)
    return true;
  return false;
}

function OpenConnection() {
  return mysqli_connect('localhost', 'root', '', 'formation');
}

function CloseConnection($connect) {
  return mysqli_close($connect);
}

function ExecuteQuery($connect, $sql) {
  return mysqli_query($connect, $sql);
}

 ?>
