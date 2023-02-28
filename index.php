<?php




?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="w-50 mx-auto mt-5">
            <div class="bg-dark text-light w-100 p-5 rounded shadow">
                <h3 class="text-light mb-4 text-uppercase text-center">File Submishion</h3>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" name="file" class="form-control" id="exampleInputPassword1" placeholder="Enter Name" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>



            </div>
        </div>
    </div>
</body>



</html>