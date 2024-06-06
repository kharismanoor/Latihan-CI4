<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../css/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 </head>
<body>

<div class="wrapper">
        <form action="<?= site_url('proses_lupa_password'); ?>" method="post"> 
            <h1>Lupa Password</h1>
            <?php if(session()->getFlashdata('error')):?>
        <div style="color: red;text-align: center">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
            <div class="input_box">
                <input name="email" type="text" placeholder="Email yang terdaftar" required>
                <i class='bx bxs-user'></i>
            </div>
            
           

            <div class="remember-forgot">
            <a href="<?= site_url('login') ?>" >Login</a>
            </div>
            
           
    


            <button type="submit" class="button">Reset Password</button>
           
        </form>

    </div>
</body>

       
</body>
</html>