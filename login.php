<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Form</title>
</head>

<body>
  <h1 class="text-center  ">Captcha form</h1>
  <form class="px-sm-2 px-md-4 px-lg-5 mt-4 " class="frmCaptcha">
    <div class="form-row">
      <div class="form-group col-md-6 mb-3">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
      </div>
    </div>
    <div class="form-group mb-3">
      <label for="inputAddress">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-row">
      <div class="form-group col-md-6 mb-3">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4 mb-3">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>Gujatar</option>
          <option>Rjasthan</option>
          <option>Bihar</option>
          <option>Delhi</option>
        </select>
      </div>
    </div>
    <img src="captcha.php" alt="">
    <div class="form-group col-md-2 mb-3">
      <label for="inputCity">Captcha</label>
      <input type="text" class="form-control" id="inputCity">
    </div>

    <button type="submit" class="btn btn-primary mt-3" onclick="submit_data()">Submit</button>
  </form>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </script>
  <script src = "https://code.jquery.com/jquery-3.7.1.min.js">  </script>
  <script>
  function submit_data(){
    jQuery.ajax({
      url: 'insert.php',
      type:'post',
      data:jQery('#frmCaptcha').serialize(),
      success:function(data){
        alert(data);
      }
    });
  }
</script>
</body>
</html>