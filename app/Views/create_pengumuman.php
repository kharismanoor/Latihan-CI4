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
                  min-height: 100vh;
            }
            .wrapper h1{
                  padding-bottom: 10px;
                  font-size: 20px;
                  text-align: center;
                  color: white;
                  padding-right: 10px;
            }
            .wrapper{
                  width: 500px;
                  height: 350px;
                  background: #800000;
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
                  height: 30px;
                  margin: 3px 0px;
                  border-radius: 10px;
                  border: none;
                  padding: 12px ;
                  font-size: small;
            }
            textarea{
                  border-radius: 15px ;
                  padding: 12px 20px;
                  background-color: white;
                  
            }
            button{
                  width: 25%;
                  height: 35px;
                  background: transparent;
                  border: 1px white;
                  outline:1px solid white;
                  border-radius: 40px;
                  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
                  cursor: pointer;
                  font-size: 16px;
                  color: white;
                  font-weight: 600;
                  float: right;
            }
      </style>
</head>

<body>
      <div class="wrapper">
      <h1>Tambah Pengumuman</h1>
      <form action="<?= site_url('pengumuman_store'); ?>" method="post">
      <div class="inputbox">
      <input placeholder="Masukkan Judul Baru" type="text" name="judul">
      </div>
      <br>
      <textarea name="pengumuman" rows="4" cols="50" placeholder="Write something..">
      </textarea>
      <br>
      <br>
      <button type="submit">Simpan</button>

      </form>     
      </div>
      

</body>



</html>