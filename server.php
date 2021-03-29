<?php
session_start();

// initializing variables
$name = "";
$lastname = "";
$phone = "";
$date = "";
$time = "";
$others = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'book')  or die("could not connect");

// REGISTER USER
if (isset($_POST['reserve'])) {
  //receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  $time = mysqli_real_escape_string($db, $_POST['time']);
  if (isset($_POST['others'])) {
    $others = mysqli_real_escape_string($db, $_POST['others']);
  }
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) {
    array_push($errors, "Моля въвете име!");
  }
  if (empty($lastname)) {
    array_push($errors, "Моля въведете фамилия!");
  }
  if (empty($phone)) {
    array_push($errors, "Моля въведете телефон за връзка!");
  }
  if (empty($date)) {
    array_push($errors, "Моля изберете дата!");
  }
  if (empty($time)) {
    array_push($errors, "Моля изберете час!");
  }
  if (empty($others)) {
    array_push($errors, "Моля изберете услуга!");
  }
  $today = date("Y-m-d");
  $today_time = new DateTime($today);
  $expire_time = new DateTime($date);
  $week = date("l", strtotime($date));
  if (($expire_time) < ($today_time)) {
    array_push($errors, "Датата: $date е изтекла! Моля въведете валидна дата!");
  }
  if (($expire_time >= $today_time) && ($week === "Sunday")) {
    array_push($errors, "Съжаляваме неделя не работим!");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE name='$name' OR lastname='$lastname' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    if (($user['name'] === $name) && ($user['lastname'] === $lastname) && ($user['phone'] === $phone) && ($user['date'] === $date)) {
      array_push($errors, "Съществува запазен час с това име!");
    }
  }

  if (count($errors) == 0) {

    /*$query = "INSERT INTO book (name, lastname, phone, date, time,others ) VALUES(?,?,?,?,?,?)
 VALUES($name, $lastname, $phone, $date, $time, $others)";
    mysqli_query($db, $query);*/
    $query = "INSERT INTO users (name, lastname, phone, date, time, others) VALUES(?,?,?,?,?,?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param("ssssss",$name, $lastname, $phone, $date, $time, $others);
    $stmt->execute();
    $_SESSION['name'] = $name;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['date'] = $date;
    $_SESSION['time'] = $time;
    header('location: success.php');
  }
}
