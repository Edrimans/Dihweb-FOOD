<form method="POST" action="contact.php" enctype="multipart/form-data">
    <input type="text" name="name" required>
    <input type="file" name="photo" accept="image/*">
    <button type="submit">Send</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $photo = $_FILES['photo'];

    if ($photo['error'] == 0) {
        $path = "uploads/" . basename($photo["name"]);
        move_uploaded_file($photo["tmp_name"], $path);
        echo "Hello, $name. Your photo was uploaded.";
    } else {
        echo "Upload error.";
    }
}
?>
