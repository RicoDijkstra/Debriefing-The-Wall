<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* titel of Modal Image */
.titel {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 10px;
}

.caption{
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 10px;
}

.modal-content, #Caption{
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

/* Add Animation */
.modal-content, #titel,{
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

.img{

}
</style>
</head>
<body>

<img id="myImg1" class="img" src="img_snow.jpg" alt="Caption" style="width:100%;max-width:300px">
<img id="myImg2" class="img" src="Tyler.jpg" alt="Caption" style="width:100%;max-width:300px">
<img id="myImg3" class="img" src="Jezus.jpg" alt="Caption" style="width:100%;max-width:300px">
<!-- The Modal -->
<div id="myImg1Modal" class="modal">
  <div id="myImg1titel" class="titel"></div>
  <span class="close" id="myImg1close">&times;</span>
  <img class="modal-content" id="myImg1img">
  <div id="myImg1Caption" class="caption"></div>
</div>
<div id="myImg2Modal" class="modal">
  <div id="myImg2titel" class="titel"></div>
  <span class="close" id="myImg2close">&times;</span>
  <img class="modal-content" id="myImg2img">
  <div id="myImg2Caption" class="caption"></div>
</div>
<div id="myImg3Modal" class="modal">
  <div id="myImg3titel" class="titel"></div>
  <span class="close" id="myImg3close">&times;</span>
  <img class="modal-content" id="myImg3img">
  <div id="myImg3Caption" class="caption"></div>
</div>

<script>





var images = document.getElementsByClassName('img');

for(var i=0; i<images.length;i++){

  images[i].onclick = function(){
    var image_id = this.id;
    // Get the modal
    var modal = document.getElementById(image_id+ 'Modal');

    // Get the image and insert it inside the modal - use its "alt" text as a titel
    var modalImg = document.getElementById(image_id+"img");
    var titelText = document.getElementById(image_id+"titel");
    var captionText = document.getElementById(image_id+"Caption");
    modal.style.display = "block";
    modalImg.src = this.src;
    titelText.innerHTML = this.src;
    captionText.innerHTML = this.alt;

    // Get the <span> element that closes the modal
    var span = document.getElementById(image_id+"close");
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }

  }
}
</script>

</body>
</html>
