<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];

}else
{
    $controller = 'pages';
    $action = 'home';
}?>
<style>
  
  .dropbtn {
   
    color: white;
    padding: 16px;
    font-size: 16px;
    border: 0;
    right:30px;
    text-decoration: none;
    cursor: pointer;
    
}

.dropdown {
    position: relative;
    display: inline-block;
   
    
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    font-family: "Poppins" , sans-serif;
    font-size: 8px;
    right : auto;
    min-width: 0px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
   
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
    
}


</style>
<!DOCTYPE html>
<html lang="en">
<head >
      <h1 class="showcase" front-size = "10px">&nbsp;&nbsp;&nbsp;<img class="avatar"src="https://www.kkh.go.th/wp-content/uploads/2018/07/if_medical_icon_1_1290990.png" alt="avatar" width = "40" >ATK to Home Isolation   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size = "2"  >ส่วนที่ 4</font></a>
       
        
       
       <div  class="dropdown" >
       <a href="" class="dropbtn" ><img  src="http://race.nstru.ac.th/nstru_portal/personnel_section/resources/content/topics/1031.png"  width = "30"  ALIGN = "Center" ></a>
    

      
                <div class="dropdown-content">
               
                    <a href="#" >น้ำผึ้ง กิติกังสดาร 6220502159</a>
                 </div>
           </div>
           </h1>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
</head>
<body>

<div class="container" >
        <input type="checkbox" id="check">
         <label for="check" class="open"><i class="fas fa-bars"></i></label>
        <div class="sidebar-wrapper">
            <div class="sidebar">
                <div class="avatar-wrapper">
                <label for="check" class="close"><i class="fas fa-times"></i></label>
                <img class="avatar" src="https://img2.thaipng.com/20180713/ik/kisspng-scientist-laboratory-computer-icons-research-clip-scientist-icon-5b488511d48eb3.9285954815314793138707.jpg" alt="avatar">
                
                </div>
                <nav>
                    <ul class="menu">
             <li> <a href="http://158.108.207.4/db21/"><img class="avatar" src="https://cdn.pixabay.com/photo/2016/03/31/18/39/icon-1294532_960_720.png" alt="avatar" width = "20">&nbsp;ปล่อยมันไป อย่างที่เป็น~~~</a></li>
       <li><a href="?controller=pages&action=home" ><img class="avatar" src="https://cdn.icon-icons.com/icons2/1483/PNG/128/wifihome_102155.png" alt="avatar" width = "20">&nbsp;HOME</a></li>
       <li><a href="?controller=CheckRT_PCR&action=index"><img class="avatar" src="https://th.seaicons.com/wp-content/uploads/2015/10/Docs-icon.png" alt="avatar" width = "20">&nbsp;CheckRT-PCR</a></li>
       <li><a href="?controller=LaboratoryStaff&action=index"><img class="avatar" src="http://race.nstru.ac.th/nstru_portal/personnel_section/resources/content/topics/1031.png" alt="avatar" width = "20">&nbsp;LaboratoryStaff</a></li>
       <li><a href="?controller=Laboratory&action=index"><img class="avatar" src="https://th.seaicons.com/wp-content/uploads/2015/11/laboratory-icon.png" alt="avatar" width = "20">&nbsp;Laboratory</a></li>
       <style type="text/css">body, a:hover {cursor: url(http://cur.cursors-4u.net/food/foo-5/foo429.cur), progress !important;}</style><a href="http://www.cursors-4u.com/cursor/2010/11/04/carrot-2.html" target="_blank" title="Carrot"></a>
                    </ul>
                </nav>
            </div>
        </div>
    </div><?php require_once("./routes.php");?>


</body>
</html>