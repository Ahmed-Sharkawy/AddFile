<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="file.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputText">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputText" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your Name with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <?php

    $con = new mysqli("localhost", "root", "", "file");
    if ($con->connect_error) {
        die("ERROR : " . mysqli_connect_error());
        exit();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") :
        $error = [];

        $name  = $_POST["name"];
        $email = $_POST["email"];
        $pass  = $_POST["password"];
        $image = $_FILES["file"];

        //

        $img_name = $image["name"];
        $img_type = $image["type"];
        $tmp_name = $image["tmp_name"];
        $img_size = $image["size"];



        if (empty($error)) {
            $ins = "INSERT INTO `user` (`name`,`email`,`password`,`image`)
                            VALUES ('$name','$name','$pass','$img_name')";
            $con->query($ins);
            move_uploaded_file($tmp_name, $_SERVER["DOCUMENT_ROOT"] . "//file//" . $img_name);
            echo "file Upload";
        }

    endif;
    $sql = "SELECT `id`,`name`,`email`,`image` FROM `user`";
    $result = $con->query($sql);
    $ruselt = $result->fetch_all(MYSQLI_ASSOC);

    ?>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ruselt as $value) : ?>
                <tr>
                    <th><?= $value["id"] ?></th>
                    <th><?= $value["name"] ?></th>
                    <th><?= $value["email"] ?></th>
                    <th> <img class='img' src='<?= $value["image"] ?>'></th>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <script src="bootstrap.min.js"></script>
</body>

</html>