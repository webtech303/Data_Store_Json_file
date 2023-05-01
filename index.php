<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div>
            <h1 class="text-center">Store Data in JSON file</h1>
        </div>
        <div>
        <form method="post" action="upload.php" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>

            <div class="mb-3">
                <label class="form-label">Price</label>
                <input class="form-control" type="text" name="price" id="price">
            </div>

            <div class="mb-3">
                <label class="form-label">Author</label>
                <input class="form-control" type="text" name="author" id="author">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Image</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>
            <input type="submit" class="btn btn-success" name="submit" value="Upload">
        </form>
        </div>
        <br>
        <div>
            <a href="showData.php" class="btn btn-primary">See All Data</a>
        </div>
    </div>
</body>
</html>