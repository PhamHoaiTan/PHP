<?php
include('connectdb.php');
$name = "";
$price = "";
$description = "";
$image = "";
$imageError = "";
$nameError = "";
$priceError = "";
$descriptionError = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    if (empty($_FILES["image"]["name"])) {
        $imageError = "Image is required";
    } else {
        //UPLOAD_ERR_OK nghĩa là không có lỗi xảy ra
        if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
            $image_name = $_FILES["image"]["name"];
            //lấy tên file tạm
            $image_tmp = $_FILES["image"]["tmp_name"];
            //path to save the image file
            $image_path = "uploads/" .strtotime(date("d.m.Y.h:i:sa")).$image_name;  
            //move file tạm tới đường dẫn path trong thư mục project
            move_uploaded_file($image_tmp, $image_path);
            //lưu đường dẫn path vào biến image để save vào database
            $image = $image_path;
        } else {
            $imageError = "Error upload the image file";
        }
    }
    if (empty($imageError)) {
        $queryCreate = "INSERT INTO productdb(name,price,description,image) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($queryCreate);
        $stmt->bind_param("sdss", $name, $price, $description, $image);
        $stmt->execute();
        $stmt->close();
        header("location: int_product.php");
        exit();
    }

    if(empty($_POST['name']))
    {
        $nameError = "Name is required";
    }
    else if(strlen($_POST['name']) < 3 || strlen($_POST['name']) > 20)
    {
        $nameError = 'name must be between [3-20] characters';
    }
    else
    {
        $name = $_POST['name'];
    }

    if(empty($_POST['price'])){
        $priceError = "Price is required";
    }else{
        $price = $_POST['price'];
    }

    if(empty($_POST['description'])){
        $descriptionError = "Description is required";
    }else{
        $description = $_POST['description'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<form method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control"  placeholder="Enter name" name="name">
                <span class="text-danger"><?php echo $nameError?></span>
            </div>
            <div class="mb-3 mt-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" class="form-control"  placeholder="Enter price" name="price">
                <span class="text-danger"><?php echo $priceError?></span>
            </div>
            <div class="mb-3 mt-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" name="description" ></textarea>
                <span class="text-danger"><?php echo $descriptionError?></span>
            </div>
            <div class="mb-3 mt-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" name="image">
                <span class="text-danger"><?php echo $imageError?></span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</body>

</html>