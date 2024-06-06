<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link href="css/style.css" rel="stylesheet">
      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <style>
            *{
                  margin: 0;
                  padding: 0;
                  box-sizing: border-box;
                  font-family: "Poppins", sans-serif; 
            }
            body{
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  background: #800000 ;
                  min-height: 100vh;
            }
            .wrapper h1{
                  padding-bottom: 10px;
                  font-size: 20px;
                  text-align: center;
                  
                  color: #800000;
                  padding-right: 10px;
            }
            .wrapper{
                  width: 500px;
                  height: 350px;
                  background: white;
                  justify-content: center;
                  align-items: center;
                  border-radius: 15px;
                  padding-top: 25px;
                  padding-bottom: 25px;
                  padding-left: 20px;
                  padding-right: 20px;
            }

            .inputbox input{
                  position: relative;
                  width: 99%;
                  background: transparent;
                  border: 1px #800000;
                  outline:1px solid #800000;
                  height: 35px;
                  margin: 3px 0px;
                  border-radius: 10px;
                  border: none;
                  padding: 12px ;
                  font-size: small;
            }
            textarea{
                  border-radius: 15px ;
                  padding: 12px 20px;
                  background-color: #800000;
                  
            }
            button{
                  width: 40%;
                  height: 30px;
                  background: #800000;
                  border: 1px #800000;
                  outline:1px solid #800000;
                  border-radius: 40px;
                  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
                  cursor: pointer;
                  font-size: 15px;
                  color: white;
                  font-weight: 600;
                  float: right;
            }
   

      </style>
        
</head>

      
 <body>
      <div class="wrapper">
      <h1>Change Password for <?= esc($user['username']) ?></h1>
      <?php if(session()->getFlashdata('error')):?>
        <div style="color: red;text-align: center">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    <?php if(session()->getFlashdata('message')):?>
        <div style="color: green;text-align: center">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>
    

      <form action="<?= site_url('admin/proses_ganti_password'); ?>" method="post">
      
      <div class="inputbox">
      <input placeholder="Current Password" type="password" name="current_password" id="current_password">
      </div>

      <div class="inputbox">
      <input placeholder="New Password" type="password" name="new_password" id="new_password">
      </div>

      <div class="inputbox">
      <input placeholder="Confirm New Password" type="password" name="confirm_password" id="confirm_password"">
      </div>
      <a href="<?= site_url('admin') ?>" >Kembali ke Beranda</a>
      <a href="<?= site_url('/logout') ?>" >LogOut</a>
      <br>
      <br>
      <button type="submit" >Change Password</button>
      

      </form>     
      </div>
      

</body>



</html>