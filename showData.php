<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">All Data</h1>
    <a href="index.php" class="btn btn-primary">Store Data</a>
    <br>
<table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Author</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody id="fetch_data">
            <?php
				// Read the contents of the JSON file
				$store_data = file_get_contents('store.json');
				$datas = json_decode($store_data, true);

				// Loop through the data and display it in a table
				foreach($datas as $data) {
					echo "<tr>";
					echo "<td>" . $data['name'] . "</td>";
					echo "<td>" . $data['price'] . "</td>";
					echo "<td>" . $data['author'] . "</td>";
					echo "<td><img src='stores/" . $data['image'] . "' style='height:50px; width:100px';></td>";
					echo "</tr>";
				}
			?>
  </tbody>
</table>
</div>
<!-- <script src="script.js"></script> -->
</body>
</html>