<?php
include ('settings.php');
$sql = "SELECT * FROM images";
foreach ($database->query($sql) as $image_results) {
    $imageID = $image_results['id'];
    // $userID = $image_results['user_id'];

    // //Get tag names
    // $sql2 = "SELECT t.tag_name FROM image_tags it LEFT JOIN tags t ON t.tag_id = it.tag_id WHERE it.image_id = ?";
    // $tagArray = array();
    // $sth = $database->prepare($sql2);
    // $sth->execute([$imageID]);
    // $tagArray = $sth->fetchAll(PDO::FETCH_COLUMN);
    //
    // //Get owner name
    // $sql3 = "SELECT user_name FROM users WHERE id = ?";
    // $sth2 = $database->prepare($sql3);
    // $sth2->execute([$userID]);
    // $username = null;
    // $username = $sth2->fetchColumn();
     ?>

<?php } ?>
