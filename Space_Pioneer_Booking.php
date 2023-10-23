<!DOCTYPE html>
<html>
<head>

<title>Space Pioneer: Booking</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 

a:link {color: white;} 
a:visited {color: blue;} 
a:hover {color: grey;} 
a:active {color: black;}

* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
  font-size: 17px;
}

#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.title {
  position: fixed;
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

body {margin:0;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: rgb(0, 0, 0);
  position: fixed;
  top: 0;
  width: 100%;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-image: url(Bk.gif);
}

div.scrollmenu {
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}

input {
  width: 40.15%;
}

</style>
</head>
<body>

<video autoplay muted loop id="myVideo">
  <source src="About_Video.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="title">
  <br><br>
  <center><img src="Logo.png" width="50px" height="50px" title="Space Pioneers">
  <center><h1>Space Pioneer</h1></center>
</div>

  

<div class="content">
    <form action="Action/Submitform.php" method="POST">
        First Name: 
        <br>
        <input type="text" name="firstname">
        <br><br>
        Last Name: 
        <br>
        <input type="text" name="lastname">
        <br><br>
        Version:
        <br>
        <select>
            <option value=" "></option>
            <option value="Trotter-5">Trotter-5: Holds 5 passengers, 1000 lbs, or 455 kgs, and at max capacity costs $1m.</option>
            <option value="Trotter-6">Trotter-6: Holds 6 passengers, 1200 lbs, or 555 kgs, and at max capacity costs $1.2m.</option>
            <option value="Trotter-8">Trotter-8: Holds 8 passengers, 1600 lbs, or 730 kgs, and at max capacity costs $2m.</option>
        </select>
        <br><br>
        Total Weight of Passengers:
        <br>
        <input type="text" name="weight">
        <br><br>
        Number of Passengers:
        <br>
        <input type="text" name="population">
        <br><br>
        Approximate Date:
        <br>
        <input type="date" name="date">
        <br><br>
        <input type="Submit" value="Submit">
    </form>
</div>

<ul>
  <li><a href="Space_Pioneer_Basic_Information.html">About</a></li>
  <li><a href="Space_Pioneer_The_Team.html">The Team</a></li>
  <li><a href="Space_Pioneer_Vehicles.html">Vehicles</a></li>
  <li><a href="Space_Pioneer_Becoming_An_Astronaut.html">Becoming An Astronaut</a></li>
  <li><a href="Space_Pioneer_Costs.html">Costs</a></li>
  <li><a href="Space_Pioneer_Payment.html">Payment</a></li>
  <li><a href="Space_Pioneer_News.html">News</a></li>
  <li><a href="Space_Pioneer_Citations.html">Paperwork</a></li>
</ul>

</body>
</html>