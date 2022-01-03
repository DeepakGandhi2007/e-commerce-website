<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title></title>
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
<form method="post">
      <table border="0" align="center" width="30%" style="background-image: linear-gradient(90deg, blue, red);">
        <tr>
          <td colspan="2">
            <div align="cenetr" style="text-align: center;font-size: 32px;font-weight: 600px; margin-top:20px; font-family: Georgia, serif;;">Login Now</div>
          </td>
        </tr>
        <tr>
          <td><label style="margin-top:30px;font-family: Georgia">Email Id</label></td>
          <td><input style="margin-top:30px;" type="text" name="email" style="width:90%;height: 35px;"></td>
        </tr>
        <tr>
          <td><label  style="margin-top:30px;font-family: Georgia">Password</label></td>
          <td><input style="margin-top:30px;" type="text" name="pass" style="width:90%;height: 35px;"></td>
        </tr>
        <tr>
          <td></td>
          <td colspan="2">
            <div align="cenetr" style="margin-top:60px; margin-left:50px;"><input type="submit" name="login"></div>
          </td>
        </tr>
      </table>
  </form> 
</body>
</html>