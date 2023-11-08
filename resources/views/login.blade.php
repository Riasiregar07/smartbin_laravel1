<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('/dist/css/Login.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body class="d-flex justify-content-center align-items-center">
    <div class="w-100">
      <div class="row">
        <form action="{{ route('login') }}" method="POST" class="col-md-6 d-flex justify-content-center align-items-center">
          @csrf
          <div class="w-100 p-5">
            <!-- Inside the form -->

            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ implode('', $errors->all(':message')) }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            @endif
            

            <h1 class="text-center text-teal fw-bolder mb-5" style="font-size: 45pt;">Sign In</h1>
            <div class="input-group input-group-lg mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
              <input type="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" required>
            </div>      
            <div class="input-group input-group-lg mb-4">
              <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
              <input type="password" name="password" id="inputPass" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
              <span class="input-group-text" id="btnPass"><i class="fa fa-eye-slash" id="iconPass"></i></span>
            </div>  
            <div class="d-flex justify-content-center mb-4">
              <a href="#" class="text-center">forgot your password?</a>  
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-lg btn-info bg-teal text-white px-5 fs-3 rounded-pill" style="background: #00b5b8;">Sign In</button>
            </div>
          </div>
        </form>
        <div class="col-md-6">
          <img src="{{ asset('/img/istockphoto685841844612x612-1@2x.png') }}" alt="img" width="100%">
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      $(document).ready(() => {
        var showPass = false;
        $('#btnPass').click(() => {
          if(showPass) {
            $('#iconPass').removeClass('fa-eye').addClass('fa-eye-slash');
            $('#inputPass').attr('type', 'password');
          }
          else{
            $('#iconPass').removeClass('fa-eye-slash').addClass('fa-eye');
            $('#inputPass').attr('type', 'text');
          }
          showPass = !showPass;
        })
      });
    </script>

  </body>
</html>
