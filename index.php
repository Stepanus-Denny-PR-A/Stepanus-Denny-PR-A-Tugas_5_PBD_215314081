<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style type="text/css">
        body {
            background-color: #F8F8F8;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: #FFFFFF;
            border-radius: 5px;
            box-shadow: 0px 2px 2px #CCCCCC;
            padding: 20px;
            margin: auto;
            margin-top: 50px;
            width: 350px;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group input[type="text"], .form-group input[type="password"] {
            width: 100%;
            border: none;
            background-color: #F0F0F0;
            padding: 10px;
            border-radius: 3px;
            font-size: 16px;
        }
        .form-group input[type="submit"] {
            background-color: #4CAF50;
            border: none;
            color: #FFFFFF;
            padding: 10px;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group input[type="submit"]:hover {
            background-color: #3E8E41;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-size: 16px;
            font-weight: bold;
        }
        .error-msg {
            color: #FF0000;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
    <style>
        p{
            color:red;
        }
        .ganti_warna:hover{
            color:black;
            background-color: red;
            border: solid  5px black;
        }
        .Muter:hover{
            transition: 1s;
            transform: rotate(360deg);

        }

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To_DO</title>
</head>
<body >
<center>
<h1  style="color:red">Login</h1>
<form>
    <label  id="input_nama">Nama:</label>
    <input id="input_nama"style="position: relative; left: 3.3%;" />
    <br><br>
    <label id="input_password">Password:</label>
    <input id="input_password"/>
    <br><br>
    <button class="ganti_warna" style="width: 10%;height:7%;position:relative;left: 3%;">OK</button>
</form>
</body>
</html>

    </form></center>
    <?php
    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate username and password
        if($username == "admin" && $password == "admin123") {
            echo "<script>alert('Login successful!');</script>";
        } else {
            echo "<div class='error-msg'>Invalid username or password!</div>";
        }
    }
    ?>
</div>
</body>
</html>
