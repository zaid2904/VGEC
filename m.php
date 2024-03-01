<?php
include("smtp/PHPMailerAutoload.php");
include("smtp/mailFunction.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $from = $_POST['smail'];
  $to = $_POST['rmail'];
  $subject = $_POST['subj'];
  $message = $_POST['msg'];
  // echo '' . $from . '' . $to . '' . $subject;
  // $n = smtp_mailer($to, $subject, $message);
  // if ($n) {
  //   // echo $n;
  // } else {
  //   // echo $n;
  // }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Send mail</title>
  <style>
    body{
      background-image: url('vgec_college.png');
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .form-control {
    background-color: transparent;   
}
.form-control:hover {
    background-color: transparent;   
}

  </style>
</head>
<body>
  <form method="post" action="" class="container align-items-center vh-100 pt-5  ">
    <h1>Send mail</h1>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Your email</label>
        <input type="email" name="smail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        <label for="exampleInputEmail1" class="form-label">Receiver email</label>
        <input type="email" name="rmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        <label for="inputsubject" class="form-label mt-2">Subject</label>
        <input type="text" name="subj" class="form-control" id="inputsubject" aria-describedby="emailHelp" required>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Message</label>
          <textarea name="msg" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>