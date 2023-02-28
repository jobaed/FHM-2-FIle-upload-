<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>File</title>
</head>

<body class="container pt-5">


    <?php


    if (isset($_FILES['file'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES['file']['name']);
        $upload_ok = 1;
        $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        //    echo $_FILES['file']['size'];

        //    exit();

        // Check if file exist or not
        if (file_exists($target_file)) {
            echo "";
            echo '<div class="alert alert-warning my-3" role="alert">
            Oops Sorry..! This file already exists.
          </div>';
            $upload_ok = 0;
        }

        // Check file size
        if ($_FILES['file']['size'] > 1000000) {
            echo '<div class="alert alert-warning my-3" role="alert">
            Sorry, your file is too large.
          </div>';
            $upload_ok = 0;
        }

        // Filter File extenshioon
        if (
            $image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg"
            && $image_file_type != "gif"
        ) {
            echo "Sorry, only (JPG, JPEG, PNG & GIF) files are Accpect.";
            echo '<div class="alert alert-warning my-3" role="alert">
            Sorry, only (JPG, JPEG, PNG & GIF) files are Accpect.
          </div>';
            $upload_ok = 0;
        }

        if ($upload_ok == 0) {
            echo '<div class="alert alert-danger my-3" role="alert">
            Sorry,Something went wrong. Your file was not uploaded.
          </div>';
        } else {
            if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                echo '<div class="alert alert-success my-3" role="alert">
                The file has been uploaded.</div>';
            } else {
                echo '<div class="alert alert-danger my-3" role="alert">
            Sorry,Something went wrong. <br> Try again.
          </div>';
            }
        }
    } else {
        echo "<script>alert('Please Select Image form index page'); </script>";
    }



    ?>
    <a href="index.php" class="btn btn-success">Go Back</a>

</body>

</html>