<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workexp</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <style>

        /* Lazy Load Styles */
        .card-image {
            display: block;
            min-height: 20rem;
            /* layout hack */
            background: #fff center center no-repeat;
            background-size: cover;
            filter: blur(3px);
            /* blur the lowres image */
        }

        .card-image>img {
            display: block;
            width: 100%;
            opacity: 0;
            /* visually hide the img element */
        }

        .card-image.is-loaded {
            filter: none;
            /* remove the blur on fullres image */
            transition: filter 1s;
        }




        /* Layout Styles */
        html,
        body::after {
            width: 100%;
            height: 100%;
            margin: 0;
            font-size: 16px;
            font-family: sans-serif;
            content: "";

  background-image: url("https://kvehospital.com/wp-content/uploads/2018/05/Head1-2.jpg"); /* รูปภาพพื้นหลัง */

 }

        .card-list {
            display: block;
            margin: 1rem auto;
            padding: 0;
            font-size: 0;
            text-align: center;
            list-style: none;
        }

        .card {
            display: inline-block;
            width: 90%;
            max-width: 20rem;
            margin: 1rem;
            font-size: 1rem;
            text-decoration: none;
            overflow: hidden;
            box-shadow: 0 0 3rem -1rem rgba(0, 0, 0, 0.5);
            transition: transform 0.1s ease-in-out, box-shadow 0.1s;
        }

        .card:hover {
            transform: translateY(-0.5rem) scale(1.0125);
            box-shadow: 0 0.5em 3rem -1rem rgba(0, 0, 0, 0.5);
        }

        .card-description {
            display: block;
            padding: 1em 0.5em;
            color: #f3eeee;
            text-decoration: none;
        }

        .card-description>h2 {
            margin: 0 0 0.5em;
        }

        .card-description>p {
            margin: 0;
        }



        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: arial;
        }

        * a {
            text-decoration: none;
        }

        * li {
            list-style: none;
        }

        

        .navBar {
            display: flex;
            width: 85%;
            justify-content: space-between;
            margin: 0 auto;
            align-items: center;
            height: 15vh;
        }

        .navBar ul {
            display: flex;
            align-items: center;
        }

        .navBar ul li {
            padding: 0 25px;
        }

        .navBar ul li a {
            font-size: 1rem;
            color: #fff;
            font-weight: 400;
            letter-spacing: 1.5px;
        }

        .navBar .logo a {
            font-size: 2.3rem;
            color: #fff;
        }

        .container {
    min-height: 120vh;
    padding-bottom: 50px;
    margin: 0 auto;
    position: relative;
  }
  .bg {
    position: relative;
    width: 100%;
    height: 100%;
  }
    .bg::after {
    content: "";
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: -1;
    filter: brightness(45%);
    background-image: url("https://kvehospital.com/wp-content/uploads/2018/05/Head1-2.jpg");
    background-size: cover;
    background-position: center;
  }   


  




    </style>

</head>

<body>

    <div class="container bg">
        <div class="navBar">
            <div class="logo">
                <a href="#">
                    <i class="fas fa-suitcase-rolling"></i>
                </a>
            </div>
            <ul>
        <li><a href="Pro1.php">Home</a></li>
        <li><a href="Pro2.php">Work Experience</a></li>
        <li><a href="Pro3.php">About</a></li>
        <li><a href="Pro4.php">Contact</a></li>
      </ul>
        </div>
    
        <div class="content">
    <ul class="card-list">

        <li class="card">
            <a class="card-image"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank"
                style="background-image: url(https://s359.kapook.com/pagebuilder/b2d57c34-e589-4285-9c47-9204d2460b84.jpg);"
                data-image-full="https://s359.kapook.com/pagebuilder/b2d57c34-e589-4285-9c47-9204d2460b84.jpg">
                <img src="https://s359.kapook.com/pagebuilder/b2d57c34-e589-4285-9c47-9204d2460b84.jpg"
                    alt="Psychopomp" />
            </a>
            <a class="card-description"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank">
                <h2> Solar Farm Project Rayong Province </h2>
                <p>

                    Construction of 22 KV transmission line

                    Work value:
                    4,600,000 baht</p>
            </a>
        </li>

        <li class="card">
            <a class="card-image"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank"
                style="background-image: url(https://www.paiduaykan.com/travel/wp-content/uploads/2019/07/1-%E0%B8%9B%E0%B8%81%E0%B8%97%E0%B8%B8%E0%B9%88%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%B1%E0%B8%99%E0%B8%A5%E0%B8%A1-800x533.jpg);"
                data-image-full="https://www.paiduaykan.com/travel/wp-content/uploads/2019/07/1-%E0%B8%9B%E0%B8%81%E0%B8%97%E0%B8%B8%E0%B9%88%E0%B8%87%E0%B8%81%E0%B8%B1%E0%B8%87%E0%B8%AB%E0%B8%B1%E0%B8%99%E0%B8%A5%E0%B8%A1-800x533.jpg">
                <img src="https://www.finnomena.com/wp-content/uploads/2017/02/wind-turbine-painting-bird-deaths.jpg"
                    alt="let's go" />
            </a>
            <a class="card-description"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank">
                <h2>Windmill field Chaiyaphum</h2>
                <p>Install wind turbines to produce electricity.
                    Work value:
                    7,700,000 baht
                </p>
            </a>
        </li>

        <li class="card">
            <a class="card-image"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank"
                style="background-image: url(https://www.rtco.co.th/wp-content/uploads/2023/03/97884-1477x860.jpg);"
                data-image-full="https://www.rtco.co.th/wp-content/uploads/2023/03/97884-1477x860.jpg">
                <img src="https://www.rtco.co.th/wp-content/uploads/2023/03/97884-1477x860.jpg"
                    alt="The Beautiful Game" />
            </a>
            <a class="card-description"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank">
                <h2>transmission line construction project</h2>
                <p>
                    Making the foundation transmission line
                    Work value:
                    5,600,000 baht</p>
            </a>
        </li>

        <li class="card">
            <a class="card-image"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank"
                style="background-image: url(https://lactec.com.br/wp-content/uploads/2022/05/subestacao.jpg);"
                data-image-full="https://lactec.com.br/wp-content/uploads/2022/05/subestacao.jpg">
                <img src="https://lactec.com.br/wp-content/uploads/2022/05/subestacao.jpg" alt="Jane Doe" />
            </a>
            <a class="card-description"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank">
                <h2> Bang Pa-in Power Plant Project </h2>
                <p>



                    Install a high voltage electrical system
                    Work value:
                    21,750,000 baht</p>
            </a>
        </li>


    </ul>



    <ul class="card-list">

        <li class="card">
            <a class="card-image"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank"
                style="background-image: url(https://static.wixstatic.com/media/dee124_b115bfad17994b4b801aa4638e573031~mv2.jpg/v1/fill/w_667,h_500,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/dee124_b115bfad17994b4b801aa4638e573031~mv2.jpg);"
                data-image-full="https://static.wixstatic.com/media/dee124_b115bfad17994b4b801aa4638e573031~mv2.jpg/v1/fill/w_667,h_500,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/dee124_b115bfad17994b4b801aa4638e573031~mv2.jpg">
                <img src="https://static.wixstatic.com/media/dee124_b115bfad17994b4b801aa4638e573031~mv2.jpg/v1/fill/w_667,h_500,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/dee124_b115bfad17994b4b801aa4638e573031~mv2.jpg"
                    alt="Psychopomp" />
            </a>
            <a class="card-description"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank">
                <h2> Install a fire protection system bangkok</h2>
                <p>

                  Install fire extinguishing pipes of the fire protection system, water spray pipes.
                    Work value:
                  2,200,000 baht</p>
            </a>
        </li>

        <li class="card">
            <a class="card-image"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank"
                style="background-image: url(https://staticfanpage.akamaized.net/wp-content/uploads/sites/10/2018/01/goa-1.jpg);"
                data-image-full="https://staticfanpage.akamaized.net/wp-content/uploads/sites/10/2018/01/goa-1.jpg">
                <img src="https://www.finnomena.com/wp-content/uploads/2017/02/wind-turbine-painting-bird-deaths.jpg"
                    alt="let's go" />
            </a>
            <a class="card-description"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank">
                <h2>Install lighting on Phahonyothin Road</h2>
                <p>Install 220 lights on Phahonyothin Road.
                    Work value:
                    1,700,000 baht
                </p>
            </a>
        </li>

        <li class="card">
            <a class="card-image"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank"
                style="background-image: url(https://www.thaielectricalhub.com/wp-content/uploads/2023/03/%E0%B8%95%E0%B8%B9%E0%B9%89%E0%B9%84%E0%B8%9F.png);"
                data-image-full="https://www.thaielectricalhub.com/wp-content/uploads/2023/03/%E0%B8%95%E0%B8%B9%E0%B9%89%E0%B9%84%E0%B8%9F.png">
                <img src="https://www.thaielectricalhub.com/wp-content/uploads/2023/03/%E0%B8%95%E0%B8%B9%E0%B9%89%E0%B9%84%E0%B8%9F.png"
                    alt="The Beautiful Game" />
            </a>
            <a class="card-description"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank">
                <h2>Install the control cabinet project</h2>
                <p>
                  Rahaeng Subdistrict, Lat Lum Kaeo District, Pathum Thani Province Install the control cabinet
                    Work value:
                    2,000,000 baht</p>
            </a>
        </li>

        <li class="card">
            <a class="card-image"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank"
                style="background-image: url(https://th.bing.com/th/id/OIP.dhFDTHGgP8ovTs2LpcYu5gHaD4?rs=1&pid=ImgDetMain);"
                data-image-full="https://th.bing.com/th/id/OIP.dhFDTHGgP8ovTs2LpcYu5gHaD4?rs=1&pid=ImgDetMain">
                <img src="https://th.bing.com/th/id/OIP.dhFDTHGgP8ovTs2LpcYu5gHaD4?rs=1&pid=ImgDetMain" alt="Jane Doe" />
            </a>
            <a class="card-description"
                href="https://www.entechmanagement.com/%E0%B8%9C%E0%B8%A5%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B9%83%E0%B8%99%E0%B8%9B%E0%B8%B5_Und_2555-2559/592fe6a412af67000100955e"
                target="_blank">
                <h2>Build a nuclear power plant </h2>
                <p>



                  Build a nuclear power plant in Kursal, Ukraine
                    Work value:
                    21,750,000 Euro </p>
            </a>
        </li>


    </ul>




    

        </div> <!-- Content-->
  </div> <!-- End Container-->















    <script>
        // This is "probably" IE9 compatible but will need some fallbacks for IE8
        // - (event listeners, forEach loop)

        // wait for the entire page to finish loading
        window.addEventListener('load', function () {

            // setTimeout to simulate the delay from a real page load
            setTimeout(lazyLoad, 1000);

        });

        function lazyLoad() {
            var card_images = document.querySelectorAll('.card-image');

            // loop over each card image
            card_images.forEach(function (card_image) {
                var image_url = card_image.getAttribute('data-image-full');
                var content_image = card_image.querySelector('img');

                // change the src of the content image to load the new high res photo
                content_image.src = image_url;

                // listen for load event when the new photo is finished loading
                content_image.addEventListener('load', function () {
                    // swap out the visible background image with the new fully downloaded photo
                    card_image.style.backgroundImage = 'url(' + image_url + ')';
                    // add a class to remove the blur filter to smoothly transition the image change
                    card_image.className = card_image.className + ' is-loaded';
                });

            });

        }


    </script>

 






</body>

</html>
