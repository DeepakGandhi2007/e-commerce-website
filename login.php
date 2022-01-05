<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title></title>
  </style>
</head>
<body>
   <?php  

      extract($_POST);
      session_start();
      if(isset($login)){
      
        $email_id="dg274944@gmail.com";
        $password="123";
        if($email_id==$email && $password==$pass)
        {
          // echo "Login Success";
          $_SESSION['key']=$email_id;
          header("location:welcome.php");
        }
        else
        {
          // echo "Username or password is wrong !";
        }
      }

?>
<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form"
                class="img-fluid" style="border-radius: 1rem 0 0 1rem;"/>
            </div>
            


            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">



                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Login to your account</span>
                  </div>



                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <form method="post">

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Email address</label>
                    <input type="email" name="email"  class="form-control form-control-lg" />
                  </div>

                 <div class="form-outline mb-4">
                   <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" name="pass" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4">
                   <input align="center" type="submit" name="login" placeholder="login" class="btn" style="background-color:#f05146;width:40%;height:50px;border-radius:25px;">
                   <div style="margin-top:20px;">
                  <a  href="#!">Forgot password?</a>
                  <br>
                  <br>
                   <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signup.php">Register here</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</html>