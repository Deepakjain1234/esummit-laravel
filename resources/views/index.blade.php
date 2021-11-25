<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-summit | Ecellnitb</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="https://kit.fontawesome.com/5ee2cb3094.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css">
   
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
</head>
<style>
    .container::before {
    content: '';
    position: absolute;
    width: 50px;
    height: 2px;
    top: calc(50% - 1px);
    right: 8px;
    background: #ff4500;
    z-index: 1;
}

.timeline::after {
    content: '';
    position: absolute;
    width: 2px;
    background: #ff4500;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -1px;
}

.container::after {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    top: calc(50% - 8px);
    right: -8px;
    background: #ffffff;
    border: 2px solid #ff4500;
    border-radius: 16px;
    z-index: 1;
}

.container .icon {
    position: absolute;
    display: inline-block;
    width: 40px;
    height: 40px;
    padding: 9px 0;
    top: calc(50% - 20px);
    background: #F6D155;
    border: 2px solid #ff4500;
    border-radius: 40px;
    text-align: center;
    font-size: 18px;
    color: #ff4500;
    z-index: 1;
}

.container .date {
    position: absolute;
    display: inline-block;
    top: calc(50% - 8px);
    text-align: center;
    font-size: 14px;
    font-weight: bold;
    color: #ff4500;
    text-transform: uppercase;
    letter-spacing: 1px;
    z-index: 1;
}

.container .content h2 {
    margin: 0 0 10px 0;
    font-size: 18px;
    font-weight: normal;
    color: #ff4500;
}
</style>

<body>
    <header class="header">
        <nav class="navbar">
            <img src="assets/image/E-SUMMIT LOGO avengers theme new.png" alt="">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">HOME</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">SPEAKERS</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">SCHEDULE</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">EVENTS</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">SPONSORS</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">CONTACT</a>
                </li>
                <li>
                    <button>GET TICKETS</button>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>

        <section class="homepage">
            <div class="inner-homepage">
                <div class="heading-1">
                    <div class="heading-left"> <h1>SPONSORED BY</h1>
                    <img src="assets/image/skill.png" alt=""></div>

                    <!-- <div class="heading-right"> <h1>CO-POWERED BY</h1>
                        <img src="assets/image/skill.png" alt=""></div> -->
                </div>
                <div>
                    
                </div>
                <div class="heading-2">
                    <h1>E-SUMMIT 22'</h1>
                    <h5>
                        <pre>A G E  O F  E N T R E P R E N E U R S </pre>
                    </h5>
                </div>
                <div class="heading-3">
                    <h2>2500 SEATS</h2>
                    <p>|</p>
                    <h2>5 SPEAKER</h2>
                    <p>|</p>
                    <h2>NIT BHOPAL</h2>
                </div>

            </div>
        </section>
    </header>
    <section class="about-us">
        <div class="inner-about">
            <div class="left-about">
                <div class="head-about">
                    <h3>About E-Summit</h3>
                </div>
                <div class="text-about">
                    <p>
                        E-Summit is the flagship Event of Entrepreneurship Cell MANIT,
                        aimed at fueling the entrepreneurial spirit in the students, helping
                        start-up founders, and educating the inquisitive minds to create an
                        innovation driven start-up culture. We aim to bring together the
                        academic community, venture capitalists, new-age entrepreneurs
                        and all those passionate about making a difference to common
                        grounds and to give a chance to the students to exhibit and develop
                        their entrepreneurial talent and creativity through various business
                        related games, workshops, guest lectures and competitions; and to
                        create an environment for everyone to learn and grow.
                    </p>
                </div>
                <div class="btn-about">
                    <button>Register Now</button>
                </div>
            </div>
            <div class="right-about">
                <img src="/assets/image/about-img.png" alt="">
            </div>
        </div>
    </section>


    <section class="event-slider">
        <div class="inner-slider">
            <div class="slider-head">
                <h1>Get Ready For E-Summit 22'</h1>
            </div>
            <div class="main-slider">
                <h3>Our Events</h3>
                <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                    <div class="gallery-cell"> 
                        <div class="orange-box">
                            <h1> Startup Expo</h1>
                            <img src="assets/image/ironman.png" alt="">
                            <a href="startup.html"><button>Register</button></a>  
                        </div>
                    </div>

                    <div class="gallery-cell"> 
                        <div class="orange-box">
                            <h1> Hackathon</h1>
                            <img src="assets/image/spiderman.png" alt="">
                            <a href="hackathon.html"><button>Register</button></a>  
                        </div>
                    </div>

                    <div class="gallery-cell"> 
                        <div class="orange-box">
                            <h1> IPL Auction</h1>
                            <img src="assets/image/thor event.png" alt="">
                            <a href="ipl.html"><button>Register</button></a>   
                        </div>
                    </div>

                    <div class="gallery-cell"> 
                        <div class="orange-box">
                            <h1>Content Conclave</h1>
                            <img src="assets/image/dr. strange event.png" alt="">
                            <a href="content.html"><button>Register</button></a>  
                        </div>
                    </div>

                    <div class="gallery-cell"> 
                        <div class="orange-box">
                            <h1>Workshops</h1>
                            <img src="assets/image/nick-fury workshop.png" alt="">
                            <a href="wokshop.html"><button>Register</button></a>  
                        </div>
                    </div>

                    <div class="gallery-cell"> 
                        <div class="orange-box">
                            <h1>Stock Trading</h1>
                            <img src="assets/image/loki event.png" alt="">
                            <a href="stock.html"><button>Register</button></a>  
                        </div>
                    </div>

                    <div class="gallery-cell"> 
                        <div class="orange-box">
                            <h1>Business Plan</h1>
                            <img src="assets/image/about.png" alt="">
                            <a href="bplan.html"><button>Register</button></a>  
                        </div>
                    </div>

                    <div class="gallery-cell"> 
                        <div class="orange-box">
                            <h1>Crypto Trading</h1>
                            <img src="assets/image/black panther event.png" alt="">
                            <a href="crypto.html"><button>Register</button></a>  
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>

    <section class="speaker">
        <div class="inner-speaker">
            <div class="speaker-heading">

                <img src="assets/image/Group 5.png" alt="">
                <h1>Past Speaker</h1>
            </div>

            <div class="speaker-main">
                <div class="upper-speaker">
                    <div class="speaker-card arrow">
                        <div class="arrow-img"> <img src="assets/image/arrow-left.png" alt=""></div>
                    </div>
                    <div class="speaker-card">
                        <div class="speaker-img"> <img src="assets/speaker/ASWINI BAJAJ.png" alt=""></div>
                        <div class="name-box">
                            <h3>Aswini bajaj</h3>
                            <!-- <h4>Positon</h4> -->
                        </div>
                    </div>
                    <div class="speaker-card">
                        <div class="speaker-img"> <img src="assets/speaker/CHINMAY DAS (1).png" alt=""></div>
                        <div class="name-box">
                            <h3>Chanmay das</h3>
                            <!-- <h4>Positon</h4> -->
                        </div>
                    </div>
                    <div class="speaker-card">
                        <div class="speaker-img"> <img src="assets/speaker/Lt Gen Sanjay Verma.png" alt=""></div>
                        <div class="name-box">
                            <h3>Lt Gen Sanjay Verma</h3>
                            <!-- <h4>Positon</h4> -->
                        </div>
                    </div>
                    <div class="speaker-card">
                        <div class="speaker-img"> <img src="assets/speaker/Major Gen G.D. BAKSHI.png" alt=""></div>
                        <div class="name-box">
                            <h3>Major Gen G.D. BAKSHI</h3>
                            <!-- <h4>Positon</h4> -->
                        </div>
                    </div>
                   

                </div>

                <div class="upper-speaker">
                    <div class="speaker-card">
                        <div class="speaker-img"> <img src="assets/speaker/naman deshmukh.png" alt=""></div>
                        <div class="name-box">
                            <h3>naman deshmukh</h3>
                            <!-- <h4>Positon</h4> -->
                        </div>
                    </div>
                    <div class="speaker-card">
                        <div class="speaker-img"> <img src="assets/speaker/nemesh singh.png" alt=""></div>
                        <div class="name-box">
                            <h3>Nemesh Singh
                            </h3>
                            <!-- <h4>Positon</h4> -->
                        </div>
                    </div>
                    <div class="speaker-card">
                        <div class="speaker-img"> <img src="assets/speaker/nisant mohta.jpg" alt=""></div>
                        <div class="name-box">
                            <h3>Nisant mohta</h3>
                            <!-- <h4>Positon</h4> -->
                        </div>
                    </div>
                    <div class="speaker-card">
                        <div class="speaker-img"> <img src="assets/speaker/Ryan Foland.png" alt=""></div>
                        <div class="name-box">
                            <h3>Ryan Foland</h3>
                            <!-- <h4>Positon</h4> -->
                        </div>
                    </div>
                    <div class="speaker-card arrow">
                        <div class="arrow-img "> <img src="assets/image/arrow-right.png" alt=""></div>
                        <!-- <div class="name-box">
                            <h3>Name surename</h3>
                            <h4>Positon</h4>
                        </div> -->
                    </div>
                   

                </div>

                
            </div>
        </div>
    </section>


    <section class="states">
        <div class="inner-states">
            <div class="states-second">

                <div class="states-box">
                    <div class="state-upper">
                        <h1>5</h1>
                        <p>Speaker</p>
                    </div>
                    <i class="fas fa-microphone"></i>
    
                </div>
    
    
    
                <div class="states-box">
                    <div class="state-upper">
                        <h1>10</h1>
                        <p>Events and Workshops</p>
                    </div>
                    <i class="fas fa-calendar-alt"></i>
    
                </div>
            </div>

            <!-- <div class="states-second">
                <div class="states-box">
                    <div class="state-upper">
                        <h1>5000</h1>
                        <p>worth prizes</p>
                    </div>
                    <i class="fas fa-award"></i>
    
                </div>
    
                <div class="states-box">
                    <div class="state-upper">
                        <h1>30</h1>
                        <p>Sponsors</p>
                    </div>
                    <i class="fas fa-store"></i>
    
                </div>
            </div> -->

        </div>
    </section>

    

    <section class="about-us">
        <div class="inner-about" id="lower-about">
            <div class="right-about" id="join-event">
                <img src="/assets/image/groot.png" alt="">
            </div>
            <div class="left-about">
                <div class="head-about1">
                    <h3>Join the Event</h3>
                </div>
                <div class="head-about">
                    <h3>Why attend E-Summit?</h3>
                </div>
                <div class="text-about1">
                    <p>
                        From fun games to B-Plan pitching, we have something in
                        store for everyone! <br> <br>
                        If you’ve ever felt an idea spark to tackle a situation and want
                        to use your Engineering temperament to bring life to
                        revolutionizing ideas, but never knew where to start; If you
                        have an idea ready and want to compete with other founders
                        and find investors; If you’ve ever wondered how the exciting
                        and wildly busy world of stock market works and think you
                        can be the next Big Bull, but found it too risky and didn’t have
                        proper resources to learn; If you’ve ever wondered the
                        dynamics that goes behind creation of your favourite
                        IPLTeams; Or maybe just running low on motivation;
                        We’ve got you covered with our host of diverse events!
                    </p>
                </div>
                <div class="btn-about">
                    <button>Register Now</button>
                </div>
            </div>

        </div>
    </section>

    <section class="timelines">

        <div class="speaker-heading">

            <img src="assets/image/Group 5.png" alt="">
            <h1>Timeline</h1>
        </div>
        
        <div class="timeline">
            <div class="container left">
              <div class="date">5 Dec</div>
              <i style=" background: white;" class="icon fa fa-home"></i>
              <div class="content" style="background: #d7dddb;">
                <h2>Workshops</h2>
                <!-- <p>
                  Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                </p> -->
              </div>
            </div>
            <div class="container right">
              <div class="date">22 Oct</div>
              <i style=" background: white;" class="icon fa fa-gift"></i>
              <div class="content" style="background: #d7dddb;" >
                <h2>Content Conclave</h2>
                <!-- <p>
                  Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                </p> -->
              </div>
            </div>
            <div class="container left">
              <div class="date">10 Jul</div>
              <i style=" background: white;" class="icon fa fa-user"></i>
              <div class="content" style="background: #d7dddb;">
                <h2>Business Plan</h2>
                <!-- <p>
                  Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                </p> -->
              </div>
            </div>
            <div class="container right">
              <div class="date">18 May</div>
              <i style=" background: white;" class="icon fa fa-running"></i>
              <div class="content" style="background: #d7dddb;">
                <h2>HACKATHON</h2>
                <!-- <p>
                  Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                </p> -->
              </div>
            </div>
            <div class="container left">
              <div class="date">10 Feb</div>
              <i style=" background: white;" class="icon fa fa-cog"></i>
              <div class="content" style="background: #d7dddb;">
                <h2>Stock Trading</h2>
                <!-- <p>
                  Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                </p> -->
              </div>
            </div>
            <div class="container right">
              <div class="date">01 Jan</div>
              <i style=" background: white;" class="icon fa fa-certificate"></i>
              <div class="content" style="background: #d7dddb;">
                <h2>Crypto Trading</h2>
                <!-- <p>
                  Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                </p> -->
              </div>
            </div>

            <div class="container left">
                <div class="date">10 Feb</div>
                <i style=" background: white;" class="icon fa fa-cog"></i>
                <div class="content" style="background: #d7dddb;">
                  <h2>Startup Expo</h2>
                  <!-- <p>
                    Lorem ipsum dolor sit amet elit. Aliquam odio dolor, id luctus erat sagittis non. Ut blandit semper pretium.
                  </p> -->
                </div>
              </div>
          </div>

    </section>

    <!-- <section class="sponsor">
        <div class="inner-sponsor">
            <div class="sponsor-heading">

                <img src="assets/image/Group 7.png" alt="">
                <h1>Sponsor & Partners</h1>
            </div>
            <div class="sponsor-title">
                <div class="title-box">
                    <h3>Title and Co-Sponsors</h3>
                </div>
            </div>

            <div class="sponsor-title">
                <div class="title-box">
                    <h3>Event Sponsors and Co-Sponsors</h3>
                </div>
            </div>
            <div class="sponsor-info">
                <div class="sponore-mid">
                    <div>
                        <h1>Startup Expo</h1>
                        <p>
                            powered by- <br>co-powered by-
                        </p>
                    </div>
    
                    <div>
                        <h1>Startup Expo</h1>
                        <p>
                            powered by- <br>co-powered by-
                        </p>
                    </div>
                </div>

                <div class="sponore-mid" >
                    <div>
                        <h1>Startup Expo</h1>
                        <p>
                            powered by- <br>co-powered by-
                        </p>
                    </div>
    
                    <div>
                        <h1>Startup Expo</h1>
                        <p>
                            powered by- <br>co-powered by-
                        </p>
                    </div>
                </div>
            </div>


            <div class="sponsor-title">
                <div class="title-box">
                    <div>
                        <h3>Patrons</h3>
                    </div>
                </div>

                <div class="sponsor-title">
                    <div class="title-box">
                        <h3>Partners</h3>
                    </div>
                </div>
                <div class="sponsor-button">
                    <button>Become a Sponsor</button>
                </div>

            </div>
    </section> -->

    <section class="blast-past">
        <div class="inner-past">
            <div class="upper-past">
                <h1>Blast from the past</h1>
            </div>
            <div class="lower-past">
                <h1>Events Gallery</h1>
                <div class="lower-gallery">
                    <div class="white-box"><img src="assets/past/5.jpeg" alt=""></div>
                    <div class="white-box"><img src="assets/past/6.jpeg" alt=""></div>
                    <div class="white-box"><img src="assets/past/7.jpeg" alt=""></div>
                </div>
            </div>

        </div>

    </section>

    <section class="blast-past1">
        <div class="inner-past">
            <div class="upper-past">
                <h1>Archives</h1>
            </div>
            <div class="lower-past1">
                <h1>Our Past Event</h1>
                <div class="lower-gallery">
                    <div class="white-box1"> <img src="assets/past/1.jpg" alt=""></div>
                    <div class="white-box1"><img src="assets/past/2.jpg" alt=""></div>
                    <div class="white-box1"><img src="assets/past/3.jpg" alt=""></div>
                </div>
            </div>

        </div>

    </section>

    <section class="footer">
        <div class="inner-footer">
            <div class="top-footer">
                <div class="footer-heading">
                    <h1>Get all the information on the mail</h1>
                    <h2>(promise we won't spam)</h2>
                </div>
                <div class="subs">
                    <input type="text">
                    <button>Subscribe</button>
                </div>
            </div>
        </div>

        <div class="lower-footer">
            <div class="left-footer">
                <div class="footer-contact">
                    <h1>Contact Us</h1>
                </div>
                <div>
                    <div class="address">
                        <i class="fas fa-phone-alt"></i>
                        <p>+ 91-8962970385</p>
                    </div>
                    <div class="address">
                        <i class="fas fa-envelope"></i>
                        <p>ecell@manit.ac.in</p>
                    </div>
                    <div class="address">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Maulana Azad National <br>
                            InstituteofTechnology, Bhopal</p>
                    </div>
                </div>
            </div>

            <div class="right-footer">
                <div class="right-side">
                    <p>
                        The Entrepreneurship Cell , NIT Bhopal is a non profits student body that aims to be manifesting
                        the latent entrepreneurial spirit of studentsand to
                        promote a startupculture in colleges.
                        <br><br>
                        We at E-cell host various workshop, Speaker session, innovative games, competitions aspiring
                        entrepreneurs and supportthem by
                        facilitating necessary resources .
                    </p>

                </div>
                <div class="social-link">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-instagram-square"></i>
                    <i class="fab fa-youtube-square"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-twitter-square"></i>
                </div>

            </div>
        </div>
        <div class="outer">
            &copy; Copyright 2022 All Right Recived E-Cell Nit Bhopal
        </div>

    </section>


</body>
<script src="/assets/js/index.js"></script>

</html>