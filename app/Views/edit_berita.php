<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Edit Berita</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
            font-size: 15px;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: white;
        }
        .wrapper{
        width: 500px;
        height: 400px;
        background: #800000;
        justify-content: center;
        align-items: center;
        border-radius: 15px;
        padding-top: 25px;
        padding-bottom: 25px;
        padding-left: 20px;
        padding-right: 20px;
        border: 1px solid white;
        }
        .wrapper h1{
            font-size: 23px;
            text-align: center;
            padding-bottom: 20px;
            color:white;
        }
        .inputbox input{
            width: 100%;
            height: 25px;
            border-radius: 5px;
            border: 1px solid white;
            font-size: small;
            padding: 10px;
        }
        textarea{
            width: 100%;
            height: 150px;
            border-radius: 5px;
            border: 1px solid #800000;
            font-size: small;
            padding: 10px;
        }
        button{
            width: 25%;
            height: 35px;
            background: #800000;
            border: 1px solid #800000;
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
        <h1>Edit Berita</h1>

        <form action="<?= site_url('admin/update_berita/' . $berita['id']); ?>" method="post">
            <div class="inputbox">
            Judul :
            <input type="text" name="judul" value="<?= $berita['judul']; ?>">
            </div>
            <br>
            Berita :
            <textarea name="berita" rows="4" cols="50">
            <?= $berita['berita']; ?></textarea>
            <br>
            <br>
            <button type="submit">Update</button>
        </form>
    </div>

</body>

</html>