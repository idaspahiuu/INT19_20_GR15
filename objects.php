<?php
include("background.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Objects</title>
	<style >
		h2
		{
			font-family: lucida handwriting;
			color: #FAEBD7;
			text-align: center;
        }
        div
        {

        		margin: 50px 15px 50px 60px;
				background-color: orchid;
				width: 90%;
				height:80%;
				border: 1px groove;
				border-color:transparent;
			}
		
        	
         .logo
         {
		 	width: 150px;
		 	height: 160px;
		    overflow: hidden;
		    margin-top: 0px;
		    margin-bottom: -20px;
		    box-shadow: none;
		    border: none;
		}
		 table{

        	width: 100%;
        	padding:50px;
        	padding-left: 150px;
          	text-align:center;
        	color: pink;
        	font-family:Sans, cursive;
        	font-size: 30px;
        	}
		

        #main{
		 padding: 5px;
			background-color: darkorchid;
		}
		.container {
  position: relative;
  width: 50%;
}

.image {
	margin-bottom: 10px;
	margin-top: 10px;
	margin-left: 130px;
  opacity: 1;
  display: block;
  width: 50%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 55%;
  left: 55%;
  transform: translate(-75%,-75%);
  -ms-transform: translate(-75%, -75%);
  text-align: left;
}

.container:hover .image {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 0.9;
}

.text {
  background-color: orchid;
  color: white;
  font-size: 30px;
  padding: 16px 32px;
}
	</style>
</head>
<body bgcolor="<?php echo $bgColor ?>"><div>
		<h2>Objects and Shapes</h2><br>
		<p style="font-size: 16px; padding-left: 20px; color:pink;">Click on top of images for full view!</p>


		<table>
		<tr id="main">
		<td><div class="container"><a target="_blank" href="objects/circle.jpg">
  <img src="objects/circle.jpg" alt="Circle" class="image" style="width:50%"></a>
  <div class="middle">
    <div class="text">The Circle shape!</div>
  </div></div>
</td></tr>
<tr id="main">
			<td><div class="container"><a target="_blank" href="objects/square.jpg">
  <img src="objects/square.jpg" alt="Square" class="image" style="width:50%"></a>
  <div class="middle">
    <div class="text">The Square shape!</div>
  </div></div></td>

		</tr>
	<tr id="main">
		<td>
			<div class="container"><a target="_blank" href="objects/rectangle.jpg">
  <img src="objects/rectangle.jpg" alt="Rectangle" class="image" style="width:50%"></a>
  <div class="middle">
    <div class="text">The Rectangle shape!</div>
  </div></div>
		</td>
	</tr>
	<tr id="main">
		<td><div class="container"><a target="_blank" href="objects/triangle.jpg">
  <img src="objects/triangle.jpg" alt="Triangle" class="image" style="width:50%"></a>
  <div class="middle">
    <div class="text">The Triangle shape!</div>
  </div></div></td>
	</tr>

	<tr id="main">
		<td><div class="container"><a target="_blank" href="objects/pentagon.shape.jpg">
  <img src="objects/pentagon.shape.jpg" alt="Pentagon" class="image" style="width:50%"></a>
  <div class="middle">
    <div class="text">The Pentagon shape!</div>
  </div></div></td>
	</tr>

	<tr id="main">
		<td><div class="container"><a target="_blank" href="objects/diamond.jpg">
  <img src="objects/diamond.jpg" alt="Diamond" class="image" style="width:50%"></a>
  <div class="middle">
    <div class="text">The Diamond shape!</div>
  </div></div></td>
	</tr>

	<tr id="main">
		<td><div class="container"><a target="_blank" href="objects/oval.jpg">
  <img src="objects/oval.jpg" alt="Oval" class="image" style="width:50%"></a>
  <div class="middle">
    <div class="text">The Oval shape!</div>
  </div></div></td>
	</tr>

	<tr id="main">
		<td><div class="container"><a target="_blank" href="objects/heart.jpg">
  <img src="objects/heart.jpg" alt="Heart" class="image" style="width:50%"></a>
  <div class="middle">
    <div class="text">The Heart shape!</div>
  </div></div></td>
	</tr>

	<tr id="main">
		<td><div class="container"><a target="_blank" href="objects/star.jpg">
  <img src="objects/star.jpg" alt="Star" class="image" style="width:50%"></a>
  <div class="middle">
    <div class="text">The Star shape!</div>
  </div></div></td>
</tr>

<tr id="main">
		<td><div class="container"><a target="_blank" href="objects/trapezoid.jpg">
  <img src="objects/trapezoid.jpg" alt="Yrapezoid" class="image" style="width:50%"></a>
  <div class="middle">
    <div class="text">The Trapezoid shape!</div>
  </div></div></td>
	</tr>
</table>
</div>
</body>
</html>