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
      <input type="text" id="name" name="name" value="Zoek hier:" required minlength="4" maxlength="8" size="10" class="zoek">
<a href="profiel.php" target="_blank"><p class="prof"> <strong>Profile</strong> </p></a>
<!-- Trigger/Open The Modal -->
  <button class="upload" id="myBtn">Upload</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <form method="post" action="" enctype="multipart/form-data">
      <input type="file" name="fileupload" />
      <input type="submit" name="fileuploadsubmit" value="Upload" />
      </form>
<?php include 'upload.php'; ?>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>

</div>
    </div>

    <?php
    //Start connection to the localhost server
    $conn = mysqli_connect("localhost", "root", "");
    if ($conn) {
    echo "<br />";
    } else  {
    die("". mysqli_connect_error());
    }
    //Select Database
    $selectalreadycreateddatabase = mysqli_select_db($conn, "uploaddisplay");
    if ($selectalreadycreateddatabase) {
    echo "<br />";
    } else {
    echo "<br />";
    $createNewDb = "CREATE DATABASE IF NOT EXISTS `uploaddisplay`";
    if (mysqli_query($conn, $createNewDb)) {
    echo "<br />";
    $selectCreatedDatabase = mysqli_select_db($conn, "uploaddisplay");
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
    $fileuploadTMP = $_FILES['fileupload']['tmp_name'];
    //This is the folder where images will be saved.
    $folder = "images/";
    move_uploaded_file($fileuploadTMP, $folder.$fileupload);
    //Insert image details into `updis` table
    $sql = "INSERT INTO `updis`(`name`) VALUES ('$fileupload')";
    $qry = mysqli_query($conn, $sql);

    if ($qry) {
    echo "<br />";
    }
    }
    //Select all data from `updis` table
    $select = " SELECT * FROM `updis` " ;
    $query = mysqli_query($conn, $select) ;
    while($row = mysqli_fetch_array($query)) {
    $image = $row['name'];
    //Display image from the database
    echo '<img src="images/'.$image.'" height="300" width="300" >';
    }
    //close connection
    if (mysqli_close($conn)) {
    echo "<br />";
    }
    ?>


      <?php include ('query.php'); ?>

    </div>



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
