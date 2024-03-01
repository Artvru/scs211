<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Entech3 </title>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />















  <style>
   /* Layout Styles */
   html,
        body::after {
            width: 100%;
            height: 100%;
            margin: 0;
            font-size: 16px;
            font-family: sans-serif;
            content: "";

  background-image: url("https://www.kalasinnews.com/wp-content/uploads/2023/09/news01092566-rnplcsel-1.jpg"); /* รูปภาพพื้นหลัง */

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
      background-image: url("https://www.kalasinnews.com/wp-content/uploads/2023/09/news01092566-rnplcsel-1.jpg");
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
      width: 150%;
      height: 450px;
      background-position: center;
      background-size: cover;
      position: relative;
      border-radius: 25px;
      cursor: pointer;
      margin-left: 100px;
    }

    .box1 {
      background-image: url("https://itp1.itopfile.com/ImageServer/313b780b3df735d4/1140/0/iTopPlus1227568807397.webp");
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

    .txt {
  max-width: 100%;
  background-image: url("https://itp1.itopfile.com/ImageServer/313b780b3df735d4/1140/0/iTopPlus1227568807397.webp");
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
        
      <div class="phuket" style="width:50%;">
        <div class="tnx">
          <h2> <i class="fas fa-map-marker-alt"></i> Entech </h2>
        </div>
        <div class="txt">
            
        </div>
        <p style="color: rgb(243, 232, 232);"> <br>  <br>  เริ่มก่อตั้งบริษัท
            วันที่ 1 พฤศจิกายน 2537
            วันที่จดทะเบียน
            วันที่ 25 พฤศจิกายน 2537
            ทุนจดทะเบียน
            4,000,000.00 บาท
            ประเภทธุรกิจ
            สำรวจออกแบบก่อสร้างและให้คำปรึกษา งานระบบสายส่ง 115 เควี. ระบบจำหน่ายไฟฟ้าแรงสูงและติดตั้งหม้อแปลงไฟฟ้าระบบ 12/24 เควี. 22 เควี และ 33 เควีระบบสายอากาศ,สายใต้ดิน สนามกอล์ฟ รีสอร์ทและในโครงการต่าง ๆ รวมทั้ง โรงงานอุตสาหกรรม นิคมอุตสาหกรรมต่าง ๆ
            <br> <br>  วิสัยทัศน์
            มุ่งมั่นพัฒนาเพื่อเป็นผู้เชี่ยวชาญการออกแบบและก่อสร้างระบบไฟฟ้าแรงสูงชั้นนำของประเทศไทย และขยายการบริการสู่พื้นที่ต่างๆ ทั้งในประเทศ และประเทศใกล้เคียง
            พันธกิจ
            - ก่อสร้างระบบไฟฟ้า โดยปฏิบัติตามมาตราฐานต่างๆ และ คำนึงถึงความปลอดภัยของผู้ปฏิบัติงาน และ ผู้ใช้งาน อันเป็นสิ่งสูงสุด
            - ก่อสร้างระบบไฟฟ้าอย่างมีคุณภาพ และ สามารถจ่ายไฟได้อย่างต่อเนื่อง
            - มีความรับผิดชอบต่องานที่ได้รับมอบหมาย และ มีการรับผิดชอบหากมีข้อผิดพลาดที่เกิดจากบริษัทของเรา
            - ส่งงานให้ลูกค้าได้ตรงตามความต้องการ</p>
      </div>
      <div class="card" style="width:50%;">
        <a href="https://www.google.com/" target="_blank">
          <div class="box1">
            <h4 style="color: white;"></h4>
          </div>
        </a>
        
     
      </div>
    </div>

  </div> <!-- End Container Bg-->


</body>

</html>
