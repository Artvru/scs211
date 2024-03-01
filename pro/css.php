


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    
<style>
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
      background-image: url("https://www.thinklite.co.th/assets/uploads/files/product_use/77116-1.jpg");
      background-size: cover;
      background-position: center;
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

    .content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 85%;
      position: absolute;
      top: 60%;
      left: 50%;
      transform: translate(-50%, -50%);
      align-items: center;
    }

    .phuket {
      color: #fff;
      padding: 25px;
    }

    .card {
      display: grid;
      grid-template-columns: auto auto;
      grid-gap: 20px;
    }

    .card h4 {
      color: #fff;
      position: absolute;
      bottom: 15px;
      left: 20px;
      font-size: 1.1rem;
      letter-spacing: 1px;
    }

    .card .box1,
    .box2,
    .box3,
    .box4 {
      width: 90%;
      height: 220px;
      background-position: center;
      background-size: cover;
      position: relative;
      border-radius: 25px;
      cursor: pointer;
    }

    .box1 {
      background-image: url("https://www.petrocorp.pl/images/loga/klimka.jpg");
    }

    .box2 {
      background-image: url("https://www.rtco.co.th/wp-content/uploads/2023/03/97884-1477x860.jpg");
    }

    .box3 {
      background-image: url("https://setet.co/wp-content/uploads/2018/01/generadora-luzma-8-min.jpg");
    }

    .box4 {
      background-image: url("https://static.wixstatic.com/media/dee124_b115bfad17994b4b801aa4638e573031~mv2.jpg/v1/fill/w_667,h_500,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/dee124_b115bfad17994b4b801aa4638e573031~mv2.jpg");
    }

    .phuket h2 {
      font-size: 2rem;
      letter-spacing: 2.8px;
    }

    .text {
      display: flex;
      justify-content: flex-start;
      align-items: center;
    }

    .txt h1 {
      font-size: 7rem;
    }

    .phuket p {
      opacity: 0.4;
    }

    .tnx h2 i {
      color: #fd7e13;
    }

    .card div {
      transition: 0.5s;
    }

    .card div:hover {
      transition: 0.3s;
      transform: translateY(-10px);
      box-shadow: 0 19px 38px rgba(0, 0, 0, 0.3), 0 15px 12px rgba(0, 0, 0, 0.22);
    }
  </style>
