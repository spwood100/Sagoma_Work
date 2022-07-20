<?php

$ch = require "Includes/init_curl.php";



$full_name = $_GET["full_name"];


curl_setopt($ch,CURLOPT_URL,"https://api.github.com/repos/$full_name");

$response = curl_exec($ch);

curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

?>
<?php require  'Includes/header.html' ?>

    <h1>Edit Repository</h1>

    <form method="post" action="update.php">

        <input type="hidden" name="full_name" value="<?= $data["full_name"] ?>">

        <label for ="name">Name</label>
        <input type="text" name="name" id="name" value="<?= $data["name"] ?>">

        <label for ="name">Description</label>
        <textarea name="description" id="description">
            <?= htmlspecialchars($data["description"]) ?>
        </textarea>

        <button>Submit</button>
    </form>

    <a href="edit.php?full_name=<?= $data["full_name"] ?>">Edit</a>

<?php require 'Includes/footer.html' ?>