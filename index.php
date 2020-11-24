<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CICT 2021 | ABESEC</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap2.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <link rel="stylesheet" href="css/animate.css" type="text/css">
    <script src="js/jquery-2.1.1.min.js"></script>
	
	<script>
// Set the date we're counting down to
var countDownDate = new Date("Apr 8, 2021 12:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  //document.getElementById("d").innerHTML = days + "d " + hours + "h "
 // + minutes + "m " + seconds + "s ";
document.getElementById("d").innerHTML =days;
document.getElementById("h").innerHTML =hours;
document.getElementById("m").innerHTML =minutes;
document.getElementById("s").innerHTML =seconds;
  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("d").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
	
	
</head>

<body>
    <!-- Page Preloder -->
    
    <?php include('header1.php'); ?>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="img/hero2.png" style="height:547px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-text">
                        <span class="text-white" style="font-size:25px;">6<sup>th</sup> International Conference on 9<sup>th</sup> & 10<sup>th</sup> April 2021</span>
                        <h2 class="text-white" style="font-size:30px;">Computational Intelligence & Communication Technology(CICT-2021)</h2>
                        
                        <a href="sub.php" class="btn btn-primary">Submission</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Counter Section Begin -->
    <section class="counter-section bg-gradient" style="margin-top:0px;height:100px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="margin-top:0px;">
                    <div class="counter-text" style="margin-top:0px;">
                        <span style="font-size:30px;">Conference Date</span><br>
                       <p style="font-size:30px;color:white;">9<sup>th</sup> & 10<sup>th</sup> April 2021<p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cd-timer" >
                        <div class="cd-item">
                            <span id="d" style="font-size:30px;"></span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span id="h" style="font-size:30px;"></span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span id="m" style="font-size:30px;"></span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span id="s" style="font-size:30px;"></span>
                            <p>Seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Home About Section Begin -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="ha-text">
                        <h2>About Conference</h2>
                        <p class="text-justify text-dark">The  CICT-2021  is  a  conference  organized  to  provide  a  forum  
						for  researchers, educators, engineers and government officials involved in the general areas of 
						Computational  intelligence  and  Communication  Technology  to  disseminate  their  latest  research 
						results  and  exchange  views  on  the  future  research  directions  of  these  fields,  to  exchange 
						computer science and integrate of its practice, application of the academic ideas, 
						improve   the   academic   depth   of   computer   science   and   its   application,   provide   
						an   international  communication  platform  for  educational  technology  and  scientific  research 
						for the universities and engineering field experts, professionals. Nowadays  globalization  of  academic  
						and  applied  research  is  growing  with  speedy  pace.  Computer,  Communication,  and  Computational 
						Sciences  are  the    areas with  lot  of  thrust.  Keeping this ideology in preference, ABES Engineering College, 
						Ghaziabad, INDIA, has   come   up   with   an  event   -   International Conference   on   Computational   
						intelligence and Communication Technology (CICT-2021) during 09th  -10th   April 2021. </div>
                    <div>
                        <table class="table table-hover table-dark">
                            <thead style="background-color: #900C0C  ">
                                <th colspan="2">
                                    <div style="color: white;text-align: center;">
                                        <h2 class="text-white">Important Dates</h2>
                                    </div>
                                </th>
                            </thead>
                            <tbody>
                                
                                <tr class="success">
                                    <td>Paper Submission Deadline</td>
                                    <td>15<sup>th</sup> &nbsp;&nbsp;January 2021</td>
                                </tr>
                                <tr class="danger">
                                    <td>Notification of Acceptance/Rejection</td>
                                    <td>28<sup>th</sup>&nbsp;&nbsp; February 2021</td>
                                </tr>
                                <tr class="success">
                                    <td>Camera Ready Paper Due</td>
                                    <td>10<sup>th</sup>&nbsp;&nbsp; March 2021</td>
                                </tr>
                                <tr class="danger">
                                    <td>
                                        Author's Registration
                                    </td>
                                    <td>10<sup>th</sup>&nbsp;&nbsp; March 2021</td>
                                </tr>
                                <tr class="success">
                                    <td>Conference Dates</td>
                                    <td>09<sup>th</sup>-10<sup>th</sup> &nbsp;&nbsp;April 2021</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="col-md-4" style="margin-top:100px;">
                    <h4 class="text-center"><b><u>Technical Sponsor</u></b></h4>
                    <div class="row" style="margin-top:50px; margin-left:90px;">
                        <div class="col-md-12">
                            <img src="img/scopus.jpg" width="120"></img>

                            <img src="img/springer.jpg" width="120" style="margin-left:10px;"></img>
                        </div>

                    </div>
                    <div class="row" style="margin-top:60px;">
                        <h5 class="text-center text-primary">For any queries, mail CICT 2021 Team at:- CICT2021@abes.ac.in</h5>
                        <p class="text-center text-black" style="margin-top:20px;"><i><b><u>Salient features:</u></b></p>
                          <p class="text-justify" style="margin-right:10px; margin-left:10px;"><b>-The proposal is submitted to Springer ( Approval Awaited).
 <br>
                           </i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Team Member Section Begin -->
    <section class="team-member-section">
        <div class="container">
            <div class="row" style="margin-top:60px;">
                <div class="col-md-12">
                    <h1 class="text-center" style="font-size:30px;"><b>OUR SPEAKERS</b></h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Member Section End -->

    <!-- testing speakers -->

    <!-- testing speakers -->

    <!----#call-to-action close -->
    <section class="call-to-action section" id="our_speakers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="color: #FFFFFF;text-align: center;">Our Speakers</h2><br/>
                </div>
            </div>
            <div class="row">


                <div class="col-md-4">
                    <div class="speaker">

                        <figure>
                            <a href="indexx/speaker.html"><img alt="" class="img-responsive center-block img-circle" src="img/Andrew.png" style="width:50%"></a>
                        </figure>

                        <h4 style="color: #FFFFFF;">Dr. Andrew Ng</h4>

                        <p style="color: #FFFFFF;">Dr. Andrew Ng is an Associate Professor with Singapore Institute of Technology. He is the Deputy Programme Director of the BEng (Honours) and MEngTech in Sustainable Infrastructure Engineering (Land)...<a href="indexx/speaker.php">More</a></p>

                    </div>
                    <!-- /.speaker -->

                </div>
                <!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="speaker">

                        <figure>
                            <a href="indexx/speaker.html#sp2"><img alt="Dr. T.V. Vijay Kumar" class="img-responsive center-block img-circle" src="img/TVVijay.jpg"></a>
                        </figure>

                        <h4 style="color: #FFFFFF;">Dr. T.V. Vijay Kumar</h4>

                        <p style="color: #FFFFFF;">Dr. T.V. Vijay Kumar is a Professor in School of Computer and Systems Sciences, Jawaharlal Nehru University, New Delhi. Presently, he is also a Concurrent Professor in the School of Engineering, Concurrent Professor in the Speci....
                            <a href="indexx/speaker.php">More</a>
                        </p>

                    </div>
                    <!-- /.speaker -->
                </div>
                <!-- /.col-md-4 -->


                <div class="col-md-4">
                    <div class="speaker">

                        <figure>
                            <a href="indexx/speaker.html#sp3"><img alt="Mr. Aninda Bose" class="img-responsive center-block img-circle" src="img/Aninda.png" style="width:50%"></a>
                        </figure>

                        <h4 style="color: #FFFFFF;">Mr. Aninda Bose</h4>

                        <p style="color: #FFFFFF;">Aninda Bose is presently working as a Senior Publishing Editor with Springer Nature. Mr. Bose is part of the Global Acquisition Team at Springer Nature and responsible for acquisition of scientific content across the globe.....
                            <a href="indexx/speaker.php">More</a>
                        </p>

                    </div>
                    <!-- /.speaker -->
                </div>
                <!-- /.col-md-4 -->

                </di->
            </div>
    </section>
    <!-- Schedule Section Begin -->
    <!--script src="js/service.js"></script-->

    <section id="Privious" class="section contact">
        <div class="container">
            <div class="row" style="margin-top:60px;">
                <div class="col-md-3 text-center">

                    <i class="fas fa-file-upload text-primary" style="font-size:30px;"></i>
                    <a href="indexx/callforpapers.html">
                        <h4 class="text-primary text-center" style="margin-top:10px;"><b> CALL FOR PAPERS </b></h4>
                    </a>
                    <p class="text-center">We invite you to submit papers and also request you to disseminate this CFP to your colleagues.</p>


                </div>
                <div class="col-md-3 text-center">
                    <i class="far fa-calendar-alt text-primary" style="font-size:30px;"></i>
                    <a href="indexx/dates.php">
                        <h4 class="text-primary text-center" style="margin-top:10px;"><b> IMPORTANT DATES </b></h4>
                    </a>
                    <p class="text-center">Submission Start : 01th November 2020 <br> Submission Deadline : 15th January 2021</p>


                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-file-signature text-primary" style="font-size:30px;"></i>
                    <a href="#">
                        <h4 class="text-primary text-center" style="margin-top:10px;"><b> REGISTRATION </b></h4>
                    </a>
                    <p class="text-center">Last Date of registration is 10th March 2021</p>


                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-gavel text-primary" style="font-size:30px;"></i>
                    <a href="indexx/Proceedings.php">
                        <h4 class="text-primary text-center" style="margin-top:10px;"><b> PROCEEDINGS </b></h4>
                    </a>
                    <p class="text-center">Proceedings of Computational   intelligence and Communication Technology (CICT-2021).</p>


                </div>

            </div>

            <div class="row" style="margin-top:60px;">
                <div class="col-md-3 text-center">
                    <i class="fas fa-file-upload text-primary" style="font-size:30px;"></i>
                    <a href="indexx/advisory.php">
                        <h4 class="text-primary text-center" style="margin-top:10px;"><b> ADVISORY BOARD </b></h4>
                    </a>
                    <p class="text-center">Details about the members of our Advisory Board</p>


                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-users text-primary" style="font-size:30px;"></i>
                    <a href="indexx/committees.php">
                        <h4 class="text-primary text-center" style="margin-top:10px;"><b> ORGANIZING COMMITTEE </b></h4>
                    </a>
                    <p class="text-center">Details about the members of our committee</p>


                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-globe-asia text-primary" style="font-size:30px;"></i>
                    <a href="indexx/tpc.php">
                        <h4 class="text-primary text-center" style="margin-top:10px;"><b> TECHNICAL PROGRAM COMMITTEE </b></h4>
                    </a>
                    <p class="text-center">Details about the members of our Technical Program Committee</p>


                </div>
                <div class="col-md-3 text-center">
                    <i class="fas fa-file text-primary" style="font-size:30px;"></i>
                    <a href="#">
                        <h4 class="text-primary text-center" style="margin-top:10px;"><b>PAPER SUBMISSION </b></h4>
                    </a>
                    <p class="text-center">All the papers must be submitted through on-line paper submission process only</p>


                </div>

            </div>
        </div>
    </section>
    <!-- Schedule Section End -->

    <!-- Pricing Section Begin -->

    <!-- Pricing Section End -->

    <!-- latest BLog Section Begin -->
    <!-- Privious Conference  -->
    <section id="Privious" class="section contact" style="background-color: #eeee;">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-12 col-md-12">
                    <div class="block">
                        <div class="heading wow fadeInUp">
                            <h2>Previous CICT Proceedings</h2>
                            <div class="row">

                                <div class="col-md-2">
                                 <a href="https://www.springer.com/gp/book/9789811512742">   <img src="img\cict-2019.png"> </img></a>
                                </div>
                                <div class="col-md-2">
                                   <a href="https://ieeexplore.ieee.org/xpl/mostRecentIssue.jsp?punumber=8466239"> <img src="img\cict 2018.png"> </img></a>
                                </div>
                                <div class="col-md-2">
                                   <a href="https://ieeexplore.ieee.org/xpl/mostRecentIssue.jsp?punumber=7966625"> <img src="img\cict 2017.png"> </img></a>
                                </div>
                                <div class="col-md-2">
                                   <a href="https://ieeexplore.ieee.org/xpl/mostRecentIssue.jsp?punumber=7528173"> <img src="img\cict 2016.png"> </img></a>
                                </div>
                                <div class="col-md-2">
                                    <a href="https://ieeexplore.ieee.org/xpl/mostRecentIssue.jsp?punumber=7076746"> <img src="img\cict 2015.png"> </img></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- latest BLog Section End -->

    <!-- Newslatter Section Begin -->
    <section class="newslatter-section">
        <div class="container" style="margin-top:150px;">
            <div class="newslatter-inner set-bg" data-setbg="img/newslatter-bg.jpg">
                <div class="ni-text">
                    <h3>Subscribe CICT Newsletter</h3>
                    <p>Subscribe to our CICT newsletter and don’t miss anything</p>
                </div>
                <form action="#" class="ni-form">
                    <input type="text" placeholder="Your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Newslatter Section End -->

    <!-- Contact Section Begin -->
   <?php include('contact.php'); ?>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->


    <footer >
        

            <div class="row" style="color:white;">
                <div class="col-lg-12">
                    <div class="footer-wrap text-center  text-white pt-1" >
    copyright &copy; - 2020 Powered By DataRitz Technology, <a href="our_team.php" class="text-primary"> Designed & Developed By :AKS</a>
    
</div>
                </div>
           
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/footer.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>


    <script src="./js/nav.js"></script>

</body>

</body>

</html>