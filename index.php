<!DOCTYPE html>
<html>
<?php include('settings.php'); ?>
<head>
  <meta charset="utf-8">
  <title>The Wall</title>
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


  <div class="nav">
      <a href="index.php"><h1 style="display:inline" class="tit"> The Wall </h1></a>
<!-- Trigger/Open The Modal -->
  <div class="button-2" id="myBtn">
    Upload
  <div class="eff-2"></div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
<h3> Upload hier je foto </h3>
    </div>
    <div class="modal-body">
      <form method="post" action="" enctype="multipart/form-data">
      <input type="file" name="fileupload"/>
      <input type="submit" name="fileuploadsubmit" value="Upload"/><br>
      <label for="name">Title</label>
     <input type="text" id="name1" name="name" required><br>
     <label for="name">Description</label>
    <input type="text" id="name1" name="besch" required>
      </form>
<?php include 'upload.php'; ?>
    </div>
    <div class="modal-footer">

    </div>
  </div>

</div>
    </div>
    <a href="profiel.php" target="_blank"><div class="circleBase type1"><img src="images/profiel.png" alt="profiel" class="profimg"></div></a>

    <?php
    //Start connection to the localhost server
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if ($conn) {
    echo "<br />";
    } else  {
    die("". mysqli_connect_error());
    }
    //Select Database
    $selectalreadycreateddatabase = mysqli_select_db($conn, $dbname);
    if ($selectalreadycreateddatabase) {
    echo "<br />";
    } else {
    echo "<br />";
    $createNewDb = "CREATE DATABASE IF NOT EXISTS $dbname";
    if (mysqli_query($conn, $createNewDb)) {
    echo "<br />";
    $selectCreatedDatabase = mysqli_select_db($conn, $dbname);
    if ($selectCreatedDatabase) {
    echo "<br />";
    // Creating new table
    $sqlcreatetable = "
    CREATE TABLE IF NOT EXISTS `updis` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    ";

    if (mysqli_query($conn, $sqlcreatetable)) {
    echo "<br />";
    } else {
    echo "<br />";
    }
    }
    } else {
    echo "<br />";
    }
    }
    //If submit button is clicked
    if(isset($_POST['fileuploadsubmit'])) {
    $fileupload = $_FILES['fileupload']['name'];
    $name = $_POST['name'];
    $besch = $_POST['besch'];
    $fileuploadTMP = $_FILES['fileupload']['tmp_name'];
    //This is the folder where images will be saved.
    $folder = "images/";
    move_uploaded_file($fileuploadTMP, $folder.$fileupload);
    //Insert image details into `updis` table
    $sql = "INSERT INTO `updis`(`name`, `title`,`description`) VALUES ('$fileupload', '$name', '$besch')";
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
    echo "<br />";
    }
    }
    //Select all data from `updis` table
    $select = " SELECT * FROM `updis` " ;
    $query = mysqli_query($conn, $select) ;
    ?>
    <div class="grid-container">
    <?php
    while($row = mysqli_fetch_array($query)) {
    $image = $row['name'];
    $title = $row['title'];
    //Display image from the database
    // echo '<img id="img" src="images/'.$image.'" height="300" width="300" margin-right:"1%">';
    // echo '<h2 class="tietel">'.$title.'</h2>';
    echo '<img class="modaalKnop dinges" src="images/'.$image.'" alt="Album cover small">
      <div class="album modaalContent">
        <img src="images/'.$image.'" alt="Album cover big" class="plaat" id="imging">
        <article>
                <h3 class="titmod">'.$title.'</h3>

          </article>
      </div>';
    }
    //close connection
    if (mysqli_close($conn)) {
    echo "<br />";
    }
    ?>
    </div>




    </div>



<script src="script.js"></script>
<script src="modaal.js"></script>
</body>
</html>
