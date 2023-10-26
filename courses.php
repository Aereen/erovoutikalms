<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>EIRA Training Courses</title>
    <link href="./dist/output.css" rel="stylesheet">
<style>
body {
  background-color:#ffffff; 
  font-family: 'Poppins', sans-serif; }
body::-webkit-scrollbar {
    width: 10px; }
body::-webkit-scrollbar-track {
    background: #f1f1f1; }
body::-webkit-scrollbar-thumb {
    background: #888; }
body::-webkit-scrollbar-thumb:hover {
    background: #555; }
header {
  background-image: url('Rectangle 62.png');
  height: 120px;
  background-size: cover;
  background-repeat: no-repeat; }
.flex-container {
  position: absolute; 
  align-items: center;
  display: flex; 
  min-height: auto;
  min-width: auto;
  margin-top: 20px; 
  overflow: hidden; }
.logo {
  max-height: auto;
  max-width: auto;
  display: flex; }
.navbar-up a {
  justify-content: center;
  align-items: center;
  margin: 20px;
  padding: 10px;
  text-decoration: none;
  color: #E5E8EA;
  font-style: normal;
  font-weight: 600;
  font-size: 20px;
  letter-spacing: 1px; }
.navbar-up a.icon {
  display: none; }
@media screen and (max-width: 600px) {
  .navbar-up a:not(:first-child) {display: none;}
  .navbar-up a.icon {
    float: right;
    display: block; }
  }
@media screen and (max-width: 100%) {
  .navbar-up.responsive {position: relative;}
  .navbar-up.responsive a.icon {
    right: 0;
    top: 0; }
  .navbar-up.responsive a {
    float: none;
    display: block;
    text-align: left; }
  }
.logout {
  display: flex-end; }
.navbar-mid {
  max-width: auto;
  max-height: auto;
  background-color: #3F00C5;
  display: flex;
  align-items: center;
  justify-content: center; }
.navbar-mid > a {
  padding: 23px;
  width: 200px;
  max-width: auto;
  border: 1px solid #2B4052;
  border-top: none;
  border-bottom: none;
  color: rgb(255, 255, 255);
  font-size: 15px;
  font-weight: 800;
  letter-spacing: 1px;
  text-align: center; }
.user-profile {
  display: flex;
  flex-direction: row; }
aside {
  margin: 5px;
  column: 1;
  max-width: auto;
  max-height: auto;
  color: #FFFFFF;
  padding: 20px;
  overflow-x: hidden; }
aside h3 {
  color: #a76820;
  font-size: 25px;
  font-weight: bold; }
@media screen and (max-width: 768px) {
  #aside {
    min-height: auto;
    min-width: auto;
    display: none; }
}
main {
  column: 2;
  margin: 5px;
  position: absolute; 
  height: 50%;
  min-width: auto;
  min-height: auto; }
.devCourse [type="submit"] {
  padding: 10px 20px;
  display: block;
  flex-direction: column;
  color: #000000;
  font-size: 20px; }
.modal {
  margin: 5px;
  display: none;
  z-index: 1;
  width: 60%;
  border-radius: 10px;
  background-color: #3d0aaa}
.modal-content {
  margin: 3% auto;
  width: 90%;
  height: 60%; }
.close {
  float: right;
  color: #ffffff;
  font-size: 30px;
  cursor: pointer; }

</style>  
</head>
<body>
<header>
  <!--BANNER w/ LOGO & NAVIGATOR-->
  <div class="flex-container">
    <div class="logo">
      <img src="erovoutika_logo.png" href=""  style="width:180px;">
      <img src="eira_logo.png">
    </div>
    <div class="navbar-up" id="navbar">
      <a href="home.html">HOME</a>
      <a href="#enroll">ENROLL</a>
      <a href="courses.php">TRAINING</a>
      <a href="#verification">VERIFICATION</a>
      <a href="#reviewers">REVIEWERS</a>
			<a href="logout-user.php" class="navbar-up" id="navbar">Log Out</a>
      <a href="javascript:void(0);" class="icon" onclick="navMenu()">&#9776;</a>
        <script>
          function navMenu() {
            var x = document.getElementById("navbar");
            if (x.nav === "navbar-up") {
              x.nav += " responsive";
            } else {
              x.nav = "navbar-up";
            }
          }
        </script>
    </div>
    </div>
</header>

<!--TRAINING COURSE NAVIGATOR-->
<nav class="navbar-mid">
    <a href="courses.html" target="_self">DASHBOARD</a>
    <a href="certification.html" target="_self">CERTIFICATION</a>
    <a href="codeditor.html" target="_self">CODE EDITOR</a>
    <a href="userprofile.html" target="_self">PROFILE</a>
    <a href="#search" target="_self">SEARCH</a>
  </nav>

<!--USER PROFILE-->
<!--COURSES-->
<div class="user-profile" id="profile">
<aside>
  <h3>FRONT-END DEVELOPMENT BASICS AND <br> BACK-END DEVELOPMENT BASICS</h3> 
    <div class="devCourse">
      <button type="submit" value="Submit" onclick="openCourse()"><a href="#html"> HTML </a></button>
      <button type="submit" value="Submit" onclick="openCourse()"> CSS </button>
      <button type="submit" value="Submit" onclick="openCourse()"> JAVASCRIPT </button>
      <button type="submit" value="Submit" onclick="openCourse()"> PHP </button>
  <h3><br>TRAINING PROGRAM <br> SELF-PACED TRAINING PROGRAM</h3>
      <button type="submit" value="Submit" onclick="openCourse()"> GAME DEVELOPMENT </button>
      <button type="submit" value="Submit" onclick="openCourse()"> CISCO WAN TECHNOLOGY </button>
      <button type="submit" value="Submit" onclick="openCourse()"> CLOUD COMPUTING </button>
      <button type="submit" value="Submit" onclick="openCourse()"> MACHINE LEARNING </button>
      <button type="submit" value="Submit" onclick="openCourse()"> LINUX SYSTEM ADMINISTRATION </button>
      <button type="submit" value="Submit" onclick="openCourse()"> DATA ANALYTICS </button>
      <button type="submit" value="Submit" onclick="openCourse()"> PLC PROGRAMMING LEVEL 1 </button>
      <button type="submit" value="Submit" onclick="openCourse()"> PLC PROGRAMMING LEVEL 2 </button>
      <button type="submit" value="Submit" onclick="openCourse()"> INNOVATION IN TELECOMMUNICATION </button>
      <button type="submit" value="Submit" onclick="openCourse()"> INDUSTRIAL PNEUMATIC SYSTYEM </button> 
    </div>
</aside>
<!--COURSE DETAILS POP UP-->
<div id="myModal" class="modal">
  <div class="modal-content">
    <h1 class="close" onclick="closeCourse()">&#10540;</h1>
  </div>
</div>
</div>
<!--COMPANY'S INFO-->
<footer>

</footer>
</div>
<script>
  function openCourse() {
      var modal = document.getElementById("myModal");
          modal.style.display = "block";
  }
  function closeCourse() {
      var modal = document.getElementById("myModal");
      modal.style.display = "none";
  }
  window.onclick = function (event) {
      var modal = document.getElementById("myModal");
      if (event.target == modal) {
          modal.style.display = "none";
      }   
  }
</script>
</body> 
</html>