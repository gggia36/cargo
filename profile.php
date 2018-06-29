<!doctype html>
<html lang="en">
  <head>
    <!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
  </head>

  <body>
  <!-- START NAVBAR -->
    <?php include_once('inc/navbar.php'); ?>
    <!-- END NAVBAR -->
<div class="wrapper">
    <!--  CONTENT -->

    <div class="container my-5 ">
      <div class="row bg-white as_boxshadow profile_padding">
        <div class="col-lg-4 col-12 mt-4">
          <div class="portfolio-item"  >
            <div class="portfolio-thumb profile_fix_frame" data-toggle="modal" data-target="#exampleModalCenter">
              <img class="w-100" src="https://pbs.twimg.com/profile_images/926061805645979650/bRdX5oxx_400x400.jpg">
                <div class="overlay-p">
                  <a href="#" data-gal="prettyPhoto">
                    <i class="fa fa-arrows-alt fa-2x"></i>
                  </a>
                </div>
            </div> 
          </div> 

                    <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <img class="w-100" src="https://pbs.twimg.com/profile_images/926061805645979650/bRdX5oxx_400x400.jpg">
                </div>
              </div>
            </div>
          </div>
        </div> 




        <div class="col-lg-8 col-12 mt-4">
          <div class="text-lg-left text-center">
            <h4 class="text-weight-600 mb-4">ข้อมูลส่วนตัว</h4>
          </div>
          <form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 profile_col-form-label profile_font600">คำนำหน้าชื่อ</label>
                <div class="col-sm-10">
                  <select id="inputState" class="form-control">
                    <option selected>นางสาว...</option>
                    <option>นาง</option>
                    <option>นาย</option>
                  </select>
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label profile_font600">ชื่อ</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="ชื่อ" value="สมปอง">
                </div>
            </div>
             <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label profile_font600">นามสกุล</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="นามสุกล" value="หาญเสมอ">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label profile_font600">อีเมล</label>
                <div class="col-sm-10">
                   <label for="inputPassword3" class=" profile_col-form-label" >cargo@gmail.com</label>
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label profile_font600">รหัสผ่าน</label>
                <div class="col-sm-10">
                   <a href="#"><label for="inputPassword3" class=" profile_col-form-label text_333" ><i class="fas fa-lock mr-3 "></i>เปลี่ยนรหัสผ่าน</label></a>
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label profile_font600">เบอร์โทรศัพท์</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3"  placeholder="xxx-xxx-xxxx" value="081-526-4569">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label profile_font600">ที่อยุ่</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="ที่อยุ่" value="12/65 ">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label profile_font600">ตำบล</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="ตำบล" value="ตำบล.6">
                </div>
               <label for="inputPassword3" class="col-sm-2 profile_col-form-label  profile_font600">อำเภอ</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="อำเภอ" value="อำเภอ เมือง">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label profile_font600">จังหวัด</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="จังหวัด" value="จังหวัด นนทบุรี">
                </div>
               <label for="inputPassword3" class="col-sm-2 profile_col-form-label profile_font600 ">รหัสไปรษณียี</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="รหัสไปรษณียี" value="11200">
                </div>
            </div>
            <div class="col-12 my-5 text-lg-left text-center">
              <a href="#" class="nc-btn ">บันทึก</a>
            </div>
          </form>
        </div> 
      </div>
    </div>














    <!-- END CONTENT
</div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
