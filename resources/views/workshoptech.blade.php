<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical-Workshop</title>
    <link rel="stylesheet" href="/assets/css/event.css">
    <script src="https://kit.fontawesome.com/5ee2cb3094.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body>
    <section class="hackathon" id="workshop">
        <div class="inner-hack">
            <!-- <div class="event-sponsor">
                <div>
                    <h1>POWERED BY</h1>
                </div>
                <div class="logo-box">
                    <h2>EVENT SPONSOR LOGO</h2>
                </div>
            </div> -->

            <div class="hackathon-head">
                <h1>WORKSHOP</h1>
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

            <div class="home-register">
                <button id="scroll-btn">Register</button>
            </div>

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
                       Technical workshop

                    </p>
                </div>
            </div>

            <!-- <div class="about1">
                <div class="rotate">
                    <div class="about-head2">
                        <h1>ELIGIBILITY</h1>
                    </div>
                </div>
                <div class="about-content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, quos inventore? Sed quisquam
                        quibusdam voluptatibus deserunt aspernatur deleniti dolores voluptas ab porro labore at, maxime
                        eaque totam molestias autem, accusantium aut, assumenda amet dolorem? Incidunt ipsum debitis
                        odit et
                        quis ex natus explicabo doloremque, sed voluptate praesentium nostrum delectus, culpa laboriosam
                        accusantium quibusdam, vel sapiente eaque nesciunt atque? Odit, hic? Labore in vero nostrum
                        debitis
                        aspernatur eveniet similique. Aliquid unde corporis debitis, beatae labore enim! Eligendi, aut a
                        sint earum eos, unde iste vel error quos adipisci quod numquam ab nesciunt architecto similique
                        accusantium voluptatibus inventore hic? Aliquid, cupiditate. Labore magni quod sit. Qui
                        asperiores,
                        velit magni autem a sit laudantium magnam ea error cupiditate expedita quia veritatis accusamus



                        <br>

                    </p>
                </div>
            </div> -->


            
        </div>
    </section>

    <!-- <section class="registration">
        <div class="inner-registration">
            <div>
                <button>REGISTER NOW</button>
            </div>
        </div>
    </section> -->

    <section class="reg-form" id="reg">
        <div class="inner-reg">
            <div class="form-left">
                <img src="assets/image/E-SUMMIT LOGO avengers theme new.png" alt="">

            </div>


            <div class="form-right">

                <h1>Register</h1>
                <form  >
                    <label for="name">Name</label>
                    <input  type="text" id="name">
                    <label for="Email">Email</label>
                    <input type="email" id="email">
                    <label for="number">Whatsapp Number</label>
                    <input type="number" id="number">
                    <label for="collage">College</label>
                    <input type="text" id="college">

                    <!-- <label for="Branch">Branch</label>
                    <input type="text"> -->
                    <label for="Year">Year</label>
                    <select id="Year" name="Year" >
                        <option value="First">First</option>
                        <option value="Second">Second</option>
                        <option value="Third">Third</option>
                        <option value="fourth">fourth</option>
                        <option value="Other">Other</option>
                    </select>

                    <label for="Course">Course</label>
                    <input type="text" id="course">

                    <label for="qna">Questions/topics you want to ask from our speakers</label>
                    <input type="text" id="qna">

                    <input type="submit" id="submit-btn">


                </form>
            </div>
        </div>

    </section>

    <script>
        document.getElementById("scroll-btn").addEventListener("click", function (e) {
  e.preventDefault();
  document.getElementById("reg").scrollIntoView(true, {
    behavior: "smooth",
    block: "start",
    inline: "nearest",
  });
});

$('#submit-btn').on('click', function (e) {
           e.preventDefault();
           
            var data = {};
            
            data['name'] = $('#name').val()
            data['email'] = $('#email').val()
            data['number'] = $('#number').val()
            data['college'] = $('#college').val()
            data['year'] = $('#Year').val()
            data['course'] = $('#course').val()
            data['qna'] = $('#qna').val()
            
            console.log(data)
            $.ajax({
                url: "/api/TechWorkshop",
                type: "POST",
                data: data,
                success: function (response) {
                    alert(response);
                    console.log("Sudde34jn;4")
                }
            })
        })
    </script>

</body>

</html>