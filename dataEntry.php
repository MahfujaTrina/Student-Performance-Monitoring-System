<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Employee Dashboard</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>

 body{
    background-image:url('iub.png');
    background-repeat:no-repeat;
    background-attachment:fixed;
    background-size:20% 40%;
    background-position:60% 40%;
    background-color:#81CDC6;
  }
     
  .nav-side-menu {
    overflow: auto;
    font-family: verdana;
    font-size: 12px;
    font-weight: 200;
    background-color: #007F80;
    position: fixed;
    top: 0px;
    width: 300px;
    height: 100%;
    color: #1181B2;
  }
  .nav-side-menu .brand {
    background-color:#0D3AA9;
    line-height: 70px;
    display: block;
    text-align: center;
    font-size: 18px;
    color:white;
  }
  .nav-side-menu .toggle-btn {
    display: none;
  }

  .nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}

.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}

.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}

.nav-side-menu li a {
    text-decoration: none;
    color: #e1ffff;
  }
  .nav-side-menu li a i {
    padding-left: 10px;
    width: 20px;
    padding-right: 20px;
  }
  .nav-side-menu li:hover {
    border-left: 3px solid #d19b3d;
    background-color: #4f5b69;
    -webkit-transition: all 1s ease;
    -moz-transition: all 1s ease;
    -o-transition: all 1s ease;
    -ms-transition: all 1s ease;
    transition: all 1s ease;
  }
  @media (max-width: 767px) {
    .nav-side-menu {
      position: relative;
      width: 100%;
      margin-bottom: 10px;
    }

    .nav-side-menu .toggle-btn {
        display: block;
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 10px;
        z-index: 10 !important;
        padding: 3px;
        background-color: #ffffff;
        color: #000;
        width: 40px;
        text-align: center;
      }
      .brand {
        text-align: left !important;
        font-size: 22px;
        padding-left: 20px;
        line-height: 50px !important;
      }
    }

    @media (min-width: 767px) {
        .nav-side-menu .menu-list .menu-content {
          display: block;
        }
      }
      body {
        margin: 0px;
        padding: 0px;
      }

</style>
  <body>

  <div class="nav-side-menu">
    <div class="brand"><b>EMPLOYEE DASHBOARD</b></div>
    <i class="fa fa-check fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  

    <div class="menu-list">
  
  <ul id="menu-content" class="menu-content collapse out">
      <li>
        <a href="employee_dashboard.php">
        <i class="fa fa-check fa-lg"></i>Dashboard
        </a>
      </li>


      <li data-toggle="collapse" data-target="#service" class="collapsed">
      <a href="addExam.php"><i class="fa fa-check fa-lg"></i> Add Exam <span class="arrow"></span></a>
      </li>  


      <li data-toggle="collapse" data-target="#new" class="collapsed">
      <a href="viewStudentAnswerScript.php"><i class="fa fa-check fa-lg"></i> Evaluate Exam Script <span class="arrow"></span></a>
        </li>
                

          </ul>
     </div>
</div>    

  </body>

</html>