<?php
include("config.php");
session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>TOP Programming Language</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="home.css">
        
    </head>
    
    
<body>
    <div class="search-div">
        
        <input class="search" type="text"  placeholder="Search..." >
        
    </div>
        <div class="title-div">
            <p class="title">Sentinental<span class="title-span">INFOSEC</span></p>
            
            
            
            
        
        
                <div class="nav">
                    
                    <a href="#" class="home">USER</a>
                    
                        <div class="dropdown">
                                <div class="text">
                                    
                                    <a href="#" class="drop">
                                        <h4 class="benefits">PURPOSE</h4>
                                        <hr class="hr1">
                                        <ul>
                                            <li class="services-list">LEARN SIMPLE PENTESTING</li>
                                            <li class="services-list">TO BUILD SMALL CAREER</li>
                                            <li class="services-list">LEARN BASIC SECURITY</li>
                                            <li class="services-list">LEARN TECHNOLOGY</li>
                                            <li class="services-list">BE THE WHITE HAT HACKER</li>
                                            <li class="services-list">ZERO TO HERO</li>
                                        </ul>
                               
                                        
                               
                                    </a>
                                </div>
                        </div>
                </div>  
                    <div class="nav2">
                        <a href="#" class="about">NOTIFICATION</a>
                    
                        <div class="dropdown1">
                                <div class="text1">
                                    
                                    <a href="#" class="drop1">
                                        <h4 class="benefits1">ABOUT US</h4>
                                        <hr class="hr2">
                                        <ul>
                                            <li class="about-us">This website was created on March 4, 2024
                                                It was developed by John Leonard C. Gualdahara The purpose of this website is to inform basic knowledge about Ethical Hacking and Penetration</li>
                                            <br>
                                            <li class="about-us">Warning This information is legal, it will only be illegal if you use it incorrectly, such as hacking the website or penetrating it without the permission of the website owner or company, if you do not use it correctly there is This is a punishment and this should be the same as always remember Comes Great Power Comes Great Responsibility.</li>
    


                                        </ul>
                               
                                        
                               
                                    </a>
                                </div>
                        </div>
                    </div>    
                    <div class="nav3">
                        <a href="#" class="tutorials">LOGOUT</a>
                    
                        <div class="dropdown2">
                                <div class="text2">
                                    
                                    <a href="#" class="drop2">
                                        <h4 class="benefits2">TUTORIALS</h4>
                                        <hr class="hr3">
                                        <ul>
                                          


                                        </ul>
                               
                                        
                               
                                    </a>
                                </div>
                        </div>
                    </div> 
   </div>

   <h1 class="name"><?php echo $_SESSION['email'];?></h1>
</body>
</html>
