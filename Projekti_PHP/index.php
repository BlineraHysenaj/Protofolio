
<?php
/*
require_once 'konfigurimi.php';
if(isset($_GET['userSubmit'])) {
    
    $emri = $_GET['chatEmri'];
    $komenti = $_GET['chatKomenti'];
    
    $sql = "INSERT INTO table_comments(Name,Comment) VALUES ('$emri','$komenti')";
    
    if($link->query($sql)===true) {
    }
    else {
        echo "Error:" . $sql . "<br>" . $link->error;
    }
}

if(isset($_GET['request'])) {
    
    $emri = $_GET['emri'];    
    $mbiemri = $_GET['mbiemri'];    
    $email = $_GET['email'];    
    $tel = $_GET['tel'];    

    $sql = "INSERT INTO table_requests(Name,Lastname,Email,Phonenumber) VALUES ('$emri','$mbiemri','$email','$tel')";
    
    if($link->query($sql)===true) {
    }
    else {
        echo "Error:" . $sql . "<br>" . $link->error;
    }
    
    
} */
?>




<!DOCTYPE html>
<?php
setcookie("username", "Blinera", time()+60*60*24*7);?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <!-- Fillimi i Bootstrap -->
        <link rel="stylesheet" type="text/css" href="bt-content/css/bootstrap.min.css">
        <script src="bt-content/js/bootstrap.min.js"></script>

        <!-- Css i jashtum -->
        <link rel="stylesheet" type="text/css" href="bt-content/css/style.css">

        <!--Librari per animacione -->
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />    



    </head>
   
    <body>

 
      <!-- Krijimi i navigacionit dhe backgroundit -->
	  
        <div class="bg-nav">
		
<img src='./bt-content/Images/Blina1.jpg' >
<div>

     <h1 id="hpNature1" data-aos="slide-left">WELCOME TO BLINERA'S WORLD       </h1>
	 
	 
                <p id="hpNature" data-aos="slide-left"></p> 
				</div
            <div class="pos-f-t">
                <div class="collapse" id="navbarToggleExternalContent">
                    <div class="bg-light p-4">

                        <ul class="navbar-nav ">
                            <li class="nav-item active">
                                <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>

                            </li> 
             
                        </ul>

                    </div>
                </div>
                   
                <!-- Krijimi i navigacionit per burger -->
                <nav class="navbar ikonaNav">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i>
                        </span>
                    </button>
                </nav>
            </div> 
            <div>

               
        
        <!-- Perdorimi i SVG per krijimin e nje divi te lakuar -->
        <div class="curved"> 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 310"><path fill="#fff" fill-opacity="1" d="M0,64L48,69.3C96,75,192,85,288,90.7C384,96,480,96,576,101.3C672,107,768,117,864,149.3C960,181,1056,235,1152,250.7C1248,267,1344,245,1392,234.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        </div>  
        
 
        <!--Krijimi i formes per userat e jashtum te kerkojn  te hyn ne grup -->
        <div class="formaBG">
            <h3 id="formMsg">Personal Information</h3>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

<!--
<h2 style="text-align:center">User Profile Card</h2>-->

</style>
<div class="card">
<!--
  <img src="./bt-content/Images/Blina1.jpg" alt="John"style="padding: 65px -40 "> -->
  <h5>Blinera Hysenaj</h5>
 
  <p>Third year student of Computer Enginering University of Pristina</p>
  <div style="margin: 30px 20;">
    <a href="https://github.com/BlineraHysenaj"><i class="fa fa-github"></i></a> 
    <a href="#"><i class="fa fa-twitter"></i></a>  
    <a href="#"><i class="fa fa-linkedin"></i></a>  
    <a href="facebook.com/blinera.hysenaj/"><i class="fa fa-facebook"></i></a> 
  </div>

  <p><button>Contact</button></p>
</div>
			

        </div>  
    
        <div class="cardsinFront">

            <!-- Krjimi i disa fotove -->
            <hr id="hr44" data-aos="slide-left">
            <hr id="hr3" data-aos="slide-left">
            <hr id="hr2" data-aos="slide-left">
            <hr id="hr1" data-aos="slide-left">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-12">
                    
                        <h3 id="likeus1"> Education </h3>
                       
                    </div>

                    <div class="col col-lg-3 col-12">
                        <div class="square1">

                            <h4 id="turtlesQuotes">Primary School "Emin Duraku"</h4>
                            <img src='./bt-content/Images/Shkolla1.jpg' alt="Turtle is born" width="100%" height="200">
                            
                        </div>
                    </div>

                    <div class="col col-lg-3 col-12">
                        <div class="square1">

                            <h4 id="turtlesQuotes">High School"Emin Duraku".</h4>
                            <img src='./bt-content/Images/Shkolla2.jpg' alt="Turtle is living" width="100%" height="200">
                           
                        </div>
                    </div>

                    <div class="col col-lg-3 col-12">
                        <div class="square1">

                            <h4 id="turtlesQuotes"> Gymnasium of natural sciences  </h4>
                            <img src='./bt-content/Images/Shkolla3.jpg' alt="Turtle is getting old" width="100%" height="200">
                         
                        </div>
                    </div>

                    <div class="col col-lg-3 col-12">
                        <div class="square1">
                   
                            <h4 id="turtlesQuotes">FIEK- Computer Engineering</h4>
                            <img src='./bt-content/Images/Universiteti4.jpg' alt="Turtle is born" width="100%" height="200">
                        </div>
                    </div> 
                </div>
            </div>
            <hr id="hr1">
            <hr id="hr2">
            <hr id="hr3">
            <hr id="hr4" >
        </div>
        

        <br><br>
		              <!-- Programi Eventit -->
        <div id="schedule" class="section">
            <div class="container">
                <div class="row">
                    <div class="titulli-div">
                        <h3 class="titulli"><span>Trainings </span> <span style="color: #dd0a37;">and Online Courses</span></h3> <br>
                    </div> <br> <br>
                    <div class="col-md-8 col-md-offset-2">
                        <div class="events-wrapper">
                            <!-- Training 1 top--><br> <br>
                            <div class="eventi"  data-aos="fade-up">
                                <div class="dita-eventit">
                                    <div>
                                    <p><i style="font-size: 50px" class="fas fa-award "></i></p>
                                    </div>
                                </div>
                                <div class="permbajtja-eventit">
                                    
                                    <h5 class="titulli-eventit"> <a href="https://opendatakosovo.org/portfolio/techstitution-3-0-certification-event-round-i-group-i"/>Techstitution 3.0</h5>
                                    <p>07/2019 - 08/2019 </a></p>
                                </div>
                            </div>
                            <!-- Mbarimi  -->
                            <!--Training 2 -->
                           <div class="eventi" data-aos="fade-up">
                                <div class="dita-eventit">
                                    <div>
                                    <p><i style="font-size: 50px" class="fas fa-award "></i></p>
                                    </div>
                                </div>
                                <div class="permbajtja-eventit">
                                    <h3 class="titulli-eventit"><a href="https://venture-up.org/"> Web Development- Venture UP</h5>
                                    <p>01/2020 - 01/2020 </a></p>
                                </div>
                            </div>
                            <!-- Mbarimi -->
                           <!-- Training 3 -->
                           <div class="eventi" data-aos="fade-up">
                                <div class="dita-eventit">
                                    <div>
                                    <p><i style="font-size: 50px" class="fas fa-award "></i></p>
                                    </div>
                                </div>
                                <div class="permbajtja-eventit">
                                    <h3 class="titulli-eventit"><a href="https://www.amchamksv.org/hack-the-crisis-kosovo-with-various-solutions-to-fight-covid-19/#:~:text=The%20situation%20created%20by%20the,businesses%20struggling%20with%20the%20problems">Hack the Crisis Kosovo- ICK</h5>
                                    <p>03/2020 - 03/2020</a></p>
                                </div>
                            </div>
                            <!-- Mbarimi -->
                             <!-- Training 4 -->
                           <div class="eventi" data-aos="fade-up">
                                <div class="dita-eventit">
                                    <div>
                                    <p><i style="font-size: 50px" class="fas fa-award "></i></p>
                                    </div>
                                </div>
                                <div class="permbajtja-eventit">
                                    <h3 class="titulli-eventit"><a href="https://globalgamejam.org/2020/jam-sites/global-game-jam-kosovo-2020">Global Game Jam Kosovo</h5>
                                    <p>02/2020 - 02/2020									</a></p>
                                </div>
                            </div>
                            <!-- Mbarimi -->
                                <!-- Training 5-->
                           <div class="eventi" data-aos="fade-up">
                                <div class="dita-eventit">
                                    <div>
                                    <p><i style="font-size: 50px" class="fas fa-award "></i></p>
                                    </div>
                                </div>
                                <div class="permbajtja-eventit">
                                    <h3 class="titulli-eventit"><a href="">English for IT- American Corner Pristina</h5>
                                    <p>01/2021-02/2021 </a></p>
                                </div>
                            </div>
                            <!-- Mbarimi -->
                        </div>
                      <!--  <div class="col-12 col-md-12 col-md-offset-2" data-aos="fade-up">
                            <a href="../2020/databaza/KerkesateProjektit.txt" download><div class="btn butoni3"><i style="color: #FFF" class="fa fa-download"></i> Download
                                </div></a></div>
                    </div>-->
                </div>
            </div>
        </div>
<br><br>
<style>
.collapsible {
  background-color: #F08080;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #BC8F8F;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #FAF0E6;
} 
</style>
<hr id="hr44" data-aos="slide-left">
            <hr id="hr3" data-aos="slide-left">
            <hr id="hr2" data-aos="slide-left">
            <hr id="hr1" data-aos="slide-left">


 <h3 id="likeus1"> Projects </h3>


<p>Click them to see more</p>
<button type="button" class="collapsible">Database for social network management </button>
<div class="content">
  <p> The purpose was to create a schema, a relational database in one of the free access management systems. </p>
<p>Technology used: MySQL. </p>
</div>
<button type="button" class="collapsible">FIEK Protocol- client/server design</button>
<div class="content">
  <p>The FIEK protocol allows the client and server to test the connections of tire. </p>
  <p>It supports TCP and UDP protocols. </p>
  <p>Technology used: Python and sockets. 
</p>
</div>
<button type="button" class="collapsible">Management of passwords and authentication through digital signatures -UP</button>
<div class="content">
  <p>Classical encryption techniques and textual data processing. </p>
<p>Modern symmetric and asymmetric encryption techniques. </p>
<p>Technology used: Java. </p>
</p>
</div>
<button type="button" class="collapsible">OS Defender- Global Game Jam, Kosovo 2020 </button>
<div class="content">
  <p>Game designed in Global Jam- Viruses have infected your PC. You must destroy them all.  </p>
<p>Game tags: 2D, Action, Adventure, Arcade, Casual, Top- Down.  </p>
<p>Technology used: C#, Unity. </p>
</p>
   
</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

</script>


<hr id="hr1">
            <hr id="hr2">
            <hr id="hr3">
            <hr id="hr4" >
<br>
<br>
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
  background-color:#663399;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 33.3%;
}

.tablink:hover {
  background-color: #663399;
}

/* Style the tab content */
.tabcontent {
  color: white;
  display: none;
  padding: 50px;
  text-align: center;
}

#London {background-color:#FA8072;}
#Paris {background-color:#FA8072;}
#Tokyo {background-color:#FA8072;}

</style>
</head>
<body>
<div>
  <h3 id="likeus1"> LANGUAGES </h3>
   <h6 id="likeus1"> Click them to see more </h6>

</div>
<div id="London" class="tabcontent">
  <h1>Albanian</h1>
  <p>Native Language.</p>
</div>

<div id="Paris" class="tabcontent">
  <h1>English</h1>
  <p>Indepedent User.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h1>German</h1>
  <p>Basic User.</p>
</div>



<button class="tablink" onclick="openCity('London', this, '#FA8072')" id="defaultOpen">Albanian</button>
<button class="tablink" onclick="openCity('Paris', this, '#FA8072')">English</button>
<button class="tablink" onclick="openCity('Tokyo', this, '#FA8072')">German</button>

  </div>  
    </br><br><br>
        <div class="cardsinFront">







            <!-- Krjimi i disa fotove -->
            <hr id="hr44" data-aos="slide-left">
            <hr id="hr3" data-aos="slide-left">
            <hr id="hr2" data-aos="slide-left">
            <hr id="hr1" data-aos="slide-left">
            <div class="container-fluid">
			
                <div class="row">
                    <div class="col-12 col-lg-12">
                    
                        <h2 id="likeus1"> My life as a math-tutor </h2>
						
					<h3> I am a math tutor, I teach students from 1 to 9th grade. My courses are invidual or in groups. I do this since 2018.<h3> 
                    </div>


                    <div class="col col-lg-3 col-12">
                        <div class="square1">

                             
                            <img src='./bt-content/Images/Math1.jpg' alt="Turtle is born" width="100%" height="200">
                            
                        </div>
                    </div>

                    <div class="col col-lg-3 col-12">
                        <div class="square1">

                            
                            <img src='./bt-content/Images/Math2.jpg' alt="Turtle is living" width="100%" height="200">
                           
                        </div>
                    </div>

                    <div class="col col-lg-3 col-12">
                        <div class="square1">

                            
                            <img src='./bt-content/Images/Math3.jpg' alt="Turtle is getting old" width="100%" height="200">
                         
                        </div>
                    </div>

                    <div class="col col-lg-3 col-12">
                        <div class="square1">
                   
                            
                            <img src='./bt-content/Images/Math4.jpg' alt="Turtle is born" width="100%" height="200">
                        </div>
                    </div> 
                </div>
            </div>
            <hr id="hr1">
            <hr id="hr2">
            <hr id="hr3">
            <hr id="hr4" >
        </div>
        

<script>
function openCity(cityName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(cityName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<br><br> 


<?php
require("Footer.php");
?>

