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

    <div class="container my-5">
      <div class="row bg-white as_boxshadow profile_padding">
        <div class="col-lg-4 col-12 mt-4">
          <div class="profile_fix_frame">
            <img class="w-100" src="https://pbs.twimg.com/profile_images/926061805645979650/bRdX5oxx_400x400.jpg"> 
          </div>
        </div>
        <div class="col-lg-8 col-12 mt-4">
          <div class="text-lg-left text-center">
            <h4 class="text-weight-600 mb-4">ข้อมูลส่วนตัว</h4>
          </div>
          <form>
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 profile_col-form-label">คำนำหน้าชื่อ</label>
                <div class="col-sm-10">
                  <select id="inputState" class="form-control">
                    <option selected>นางสาว...</option>
                    <option>นาง</option>
                    <option>นาย</option>
                  </select>
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">ชื่อ</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="ชื่อ">
                </div>
            </div>
             <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">นามสกุล</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="นามสุกล">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">อีเมล์</label>
                <div class="col-sm-10">
                   <label for="inputPassword3" class=" profile_col-form-label" >cargo@gmail.com</label>
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">รหัสผ่าน</label>
                <div class="col-sm-10">
                   <a href="#"><label for="inputPassword3" class=" profile_col-form-label text_333" ><i class="fas fa-lock mr-3 "></i>เปลี่ยนรหัสผ่าน</label></a>
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">เบอร์โทรศัพท์</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3"  placeholder="xxx-xxx-xxxx">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">ที่อยุ่</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="ที่อยุ่">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">ตำบล</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="ตำบล">
                </div>
               <label for="inputPassword3" class="col-sm-2 profile_col-form-label text-lg-center">อำเภอ</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="อำเภอ">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">จังหวัด</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="จังหวัด">
                </div>
               <label for="inputPassword3" class="col-sm-2 profile_col-form-label text-lg-center">รหัสไปรษณียี</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="รหัสไปรษณียี" >
                </div>
            </div>
            <div class="col-12 my-5 text-lg-left text-center">
              <a href="#" class="nc-btn ">บันทึก</a>
            </div>
          </form>
        </div> 
      </div>
    </div>














    <!-- END CONTENT -->
</div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
