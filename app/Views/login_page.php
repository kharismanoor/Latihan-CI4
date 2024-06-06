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
        <form action="<?= site_url('login'); ?>" method="post"> 
            <h1>Login</h1>
            <?php if(session()->getFlashdata('message')):?>
        <div style="color: green; text-align: center">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>
            <?php if(session()->getFlashdata('error')):?>
        <div style="color: red; text-align: center;">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
            <div class="input_box">
                <input name="username" type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            
            <div class="input_box">
                <input name="password" type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
            <a href="<?= site_url('lupa_password') ?>" >Lupa Password</a>
            </div>
            
           
    


            <button type="submit" class="button">Login</button>
            <div class="register-link">
            <p>Don't have an account?
            <a href="<?= site_url('register_user') ?>" >Sign up here</a></p>
            </div>
        </form>

    </div>
</body>

       
</body>
</html>