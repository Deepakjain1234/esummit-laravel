<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Plan</title>
    <link rel="stylesheet" href="/assets/css/event.css">
    <script src="https://kit.fontawesome.com/5ee2cb3094.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="hackathon" id="bplan">
        <div class="inner-hack">
            <!-- <div class="event-sponsor">
                <div>
                    <h1>POWERED BY</h1>
                </div>
                <div class="logo-box">
                    <h2>EVENT SPONSOR LOGO</h2>
                </div>
            </div> -->

            <div class="hackathon-head" id="bigname-head">
                <h1>BUSINESS PLAN</h1>
            </div>
            <!-- <div class="event-sponsor2">
                <div class="inner-event-sponsor">
                    <div>
                        <h1>CO-POWERED BY</h1>
                    </div>
                    <div class="logo-box2">
                        <h2>CO-EVENT SPONSOR LOGO</h2>
                    </div>
                </div>
            </div> -->

        </div>


    </section>
    <section class="about-section">
        <div class="inner-about">
            <div class="about1">
                <div class="rotate">
                    <div class="about-head">
                        <h1>ABOUT THE EVENT</h1>
                    </div>
                </div>
                <div class="about-content">
                    <p>

                        The contest is based on the idea of presenting a lean canvas in front of a panel of experts and
                        pitching the ideas to them. Apart from the prize money, the winners will be allowed to incubate
                        their idea at an incubation center under the guidance of the E-Cell.

                    </p>
                </div>
            </div>

            <div class="about1">
                <div class="rotate">
                    <div class="about-head2">
                        <h1>ELIGIBILITY</h1>
                    </div>
                </div>
                <div class="about-content">
                    <p>
                        Participants registered for the B-Plan workshop are eligible for the preliminary phase. <br>
                        Team size can be 1-3 members.



                    </p>
                </div>
            </div>


            <div class="about1">
                <div class="rotate">
                    <div class="about-head">
                        <h1>RULES AND GUIDELINES</h1>
                    </div>
                </div>
                <div class="about-content">
                    <p>
                        A workshop will be conducted to inform the audience about the efficient ways of drafting
                        B-Plans. <br>
                        There will be three phases to this competition: <br>
                        <h4>Learning Phase:</h4> A guest/speaker will explain how to make a B-Plan.
                        Preliminary Phase: Teams will submit their idea by making a lean canvas. The date for submission
                        is scheduled for [Insert Date].
                        <h4>Online Phase:</h4> The teams with the shortlisted ideas were invited on [Insert Date] to pitch their
                        ideas to the panel of experts. Each team will be given 5 minutes followed by a 5 minute Q&A
                        session.



                    </p>
                </div>

                <div class="about1">
                    <div class="rotate">
                        <div class="about-head2">
                            <h1>PRIZES</h1>
                        </div>
                    </div>
                    <div class="about-content">
                        <p>
                            Will be announced soon!
    
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="registration">
        <div class="inner-registration">
            <div>
                <button>REGISTRATION COMING SOOON</button>
            </div>
        </div>
    </section>

    <!-- <section class="reg-form">
        <div class="inner-reg">
            <div class="form-left">
                <img src="assets/image/E-SUMMIT LOGO avengers theme new.png" alt="">

            </div>


            <div class="form-right">

                <h1>Register</h1>
                <form action="">
                    <label for="name">Name</label>
                    <input type="text">
                    <label for="collage">Collage</label>
                    <input type="text">
                    <label for="Course">Course</label>
                    <input type="text">
                    <label for="Branch">Branch</label>
                    <input type="text">
                    <label for="Year">Year</label>
                    <select id="Year" name="Year">
                        <option value="First">First</option>
                        <option value="Second">Second</option>
                        <option value="Third">Third</option>
                        <option value="fourth">fourth</option>
                        <option value="Other">Other</option>
                    </select>
                    <label for="number">Whatsapp Number</label>
                    <input type="number">
    
                    <label for="Email">Email</label>
                    <input type="email">
    
                    <label for="exp">How much knowledge do you have about entrepreneurship</label>
                    <select id="exp" name="exp">
                      <option value="Beginner">Beginner</option>
                      <option value="Intermediate">Intermediate</option>
                      <option value="Advanced">Advanced</option>
                      <option value="other">other</option>
                    </select>
                    <label for="qna">Questions/topics you want to ask from our speakers</label>
                    <input type="text">
                    
                    <input type="submit" id="submit-btn">
    
    
                </form>
            </div>
        </div>

    </section> -->



    <!-- <section>
        <div class="count">
            <h1>REGISTRATION START IN</h1>
            <div class="time">
              <div class="day">
                <p id="day">0</p>
                <p>days</p>
              </div>
              <span>:</span>
              <div class="hour">
                <p id="hour">0</p>
                <p>hours</p>
              </div>
              <span>:</span>
              <div class="minute">
                <p id="minute">00</p>
                <p>minutes</p>
              </div>
              <span>:</span>
              <div class="second">
                <p id="second">00</p>
                <p>seconds</p>
              </div>
            </div>
          </div>
    </section> -->

</body>
<script>
    document.querySelectorAll(".item_header").forEach(function (header) {
        header.addEventListener("click", () => {
            if (header.parentNode.classList.contains("active")) {
                header.parentNode.classList.remove("active");
                header.parentNode.style.height = "54px";
            } else {
                document
                    .querySelectorAll(".item_header")
                    .forEach(function (header) {
                        header.parentNode.classList.remove("active");
                        header.parentNode.style.height = "54px";
                    });
                header.parentNode.classList.add("active");

                let altPar = header.nextElementSibling.scrollHeight;
                let altura = altPar + 54;
                header.parentNode.style.height = altura + "px";
            }
        });
    });

    (function () {
        const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;

        let birthday = "January 21, 2022 00:00:00",
            countDown = new Date(birthday).getTime(),
            x = setInterval(function () {
                let now = new Date().getTime(),
                    distance = countDown - now;
                (document.getElementById("day").innerText = Math.floor(
                    distance / day
                )),
                    (document.getElementById("hour").innerText = Math.floor(
                        (distance % day) / hour
                    )),
                    (document.getElementById("minute").innerText = Math.floor(
                        (distance % hour) / minute
                    )),
                    (document.getElementById("second").innerText = Math.floor(
                        (distance % minute) / second
                    ));
            }, 0);
    })();
</script>



</html>