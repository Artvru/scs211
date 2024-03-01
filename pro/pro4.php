<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Entech </title>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous"
  />

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
  />

  <link
    href="https://fonts.googleapis.com/css?family=Prompt"
    rel="stylesheet"
  />


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
          color: #080606;
          font-weight: 400;
          letter-spacing: 1.5px;
        }
    
        .navBar .logo a {
          font-size: 2.3rem;
          color: #0a0808;
        }
        


        button {
  background-color: #ff0000; /* สีแดง */
  color: #fff; /* สีขาว */
  font-size: 12px;
  padding: 5px 5px;
  margin-right: 10px;
  border: none;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* เงา */
  transition: 0.3s; /* ระยะเวลาการเปลี่ยนแปลง */
}

button:hover {
  background-color: #d90000; /* สีแดงเข้มเมื่อกดปุ่ม */
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4); /* เงาเข้มขึ้นเมื่อกดปุ่ม */
}

        </style>



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

        <div class="alert alert-success" role="alert"> <b> ประกาศ!! </b> รับสมัครพนักงาน หลายตำแหน่ง  <button onclick="window.location.href='https://www.google.com'"> Click เพื่อสมัคร </button>
 </div>

<div class="row mb-4">
<div class="col-lg-8">
        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name">
          </div>


        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
          </div>


        <div class="mb-1">
            <label for="exampleFormControlInput1" class="form-label"></label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="phone">
          </div>
   

    <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label"></label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="title">
      </div>

      <div class="mb-1">
        <label for="exampleFormControlTextarea1" class="form-label"></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"  placeholder="รายละเอียด"></textarea>
      </div>

<!-- button-->
<br>
      <div onclick="saveinfo()" class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-secondary" type="button">Submit</button>
       </div>

       </div>  <!-- end col 8 -->

       <div class="col-lg-4">
       <div class="card" style="width: 18rem;">
                        <img src="https://www.aranzulla.it/wp-content/contenuti/2018/03/profilofacebook2-1200x628.jpg" 
                                 class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text">  
                            </p>
                          <a  href="https://web.facebook.com/profile.php?id=100074801686109"
                target="_blank" class="btn btn-primary">Go Facebook</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://t1.blockdit.com/photos/2019/08/5d50be752407d310268cbead_800x0xcover_7EOtcDul.jpg" 
                                 class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text">  
                            </p>
                          <a  href="https://www.instagram.com/homeart_hwd/"
                target="_blank" class="btn btn-danger">Go Instargram</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="https://img.freepik.com/free-vector/gradient-monochrome-twitter-logo-template_52683-132643.jpg" 
                                 class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text">  
                            </p>
                          <a  href="https://web.facebook.com/profile.php?id=100074801686109"
                target="_blank" class="btn btn-dark">Go X</a>
                        </div>
                    </div>
       </div>

</div>  <!-- end row-->

       <hr/>

       <div> 
        <i class="bi bi-line"></i> 0863068662 &nbsp;
        <i class="bi bi-telephone-fill"></i> 02-974-7731-2  &nbsp;
        <i class="bi bi-envelope-at-fill"></i> etmn_co@hotmail.com &nbsp;
        <i class="bi bi-envelope-at-fill"></i> etmn_co@yahoo.com </div>
        <i class="bi bi-buildings"> www.entechmanagement.com &nbsp; 
            53/22 หมู่7 อาคาร ยิ่งรวย แขวงสายไหม เขตสายไหม กรุงเทพฯ 10220
            เวลาทำการ : วันจันทร์ - ศุกร์ 8.30-17.30 น. </i>
      
      </div>

  

    </div> <!-- End container bg-->







  

    <script>
        function saveinfo(){
            alert("save แล้วจ้า")
        }
    </script>








</body>

</html>
