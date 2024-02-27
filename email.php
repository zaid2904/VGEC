<?php
include('smtp/PHPMailerAutoload.php');
include('smtp/mailFunction.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // $frm = $_POST["from"];
    $to = $_POST["toemail"];
    $sub = $_POST["subject"];
    $msg = $_POST["message"];
    // echo '' . $frm . '' . $to . '' . $sub;
    $n = smtp_mailer($to, $sub, $msg);
    if ($n) {
        echo $n;
    } else {
        echo $n;
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body class="bg-image">
    <div class="container">
        <div class="row">
            <form action="email.php" method="post">
                <h1 class="px-md-4 px-lg-5 mt-4">Send Email</h1>

                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

                <div class="mb-3">
                    <label for="femail" class="form-label">From</label>
                    <input name="from" type="email" class="form-control" id="femail" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">To</label>
                    <input name="toemail" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">subject</label>
                        <input name="subject" type="text" class="form-control" id="subject" aria-describedby="emailHelp"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">subject</label>
                        <textarea name="message" id="message" class="form-control" cols="30" rows="3"
                            required></textarea>
                    </div>

                <button type="button" class=" mt-3 btn btn-primary mb-3  ">Send messsge</button>
            </form>
        </div>
    </div>
</body>
</html>