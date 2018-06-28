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
   <!-- CONTENT -->

   <div class="container my-5 ">
    <div class="row bg-white as_boxshadow register_padding">
      <div class="col-lg-12 ">
          <h4 class="my-lg-5 text-center">ลงทะเบียน</h4>
        <div>
          <form>
             <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 col-12 profile_col-form-label">ชื่อ</label>
                <div class="col-sm-4 col-12">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="ชื่อ">
                </div>
               <label for="inputPassword3" class="col-sm-2 col-12 profile_col-form-label text-lg-center">นามสกุล</label>
                <div class="col-sm-4 col-12">
                  <input type="text" class="form-control" id="inputPassword3" placeholder="นามสกุล" >
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">อีเมล์</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3" >
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">รหัสผ่าน</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
             <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">ยินยันรหัสผ่าน</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">ที่อยุ่</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">รหัสไปรษณียี</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3">
                </div>
               <label for="inputPassword3" class="col-sm-2 profile_col-form-label text-lg-center">อำเภอ</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">จังหวัด</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3">
                </div>
               <label for="inputPassword3" class="col-sm-2 profile_col-form-label text-lg-center">ตำบล</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="inputPassword3" >
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label">เบอร์โทรศัพท์</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword3">
                </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword3" class="col-sm-2 profile_col-form-label"></label>
                <div class="col-sm-10">
                  <a href="#"><span>นโยบายความเป็นส่วนตัว</span></a>
                  <span>และ</span>
                  <a href="#"><span>เงื่อนไขการให้บริการ</span></a>
                   <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">ยอมรับเงื่อนไขการให้บริการ</label>
                  </div>
                </div>
            </div>
             <!-- Button modal -->
            <div class="text-center">
              <button type="button" class="nc-btn" data-toggle="modal" data-target="#exampleModal">
                ลงทะเบียน
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content px-3">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ข้อกำหนดในการสมัครสมาชิก</h5>
                      
                    </div>
                    <div class="modal-body text-left">
                      <p>1.  กรณีสมัครผ่านช่องทางที่ 1 (ช่องทางหลัก)  กรุณาแนบไฟล์หลักฐานแจ้งการชำระเงินส่งกลับมาที่สมาคมฯ ผ่านระบบลงทะเบียนออนไลน์
                        กรณีสมัครผ่านช่องทางที่ 2  กรุณาส่งหลักฐานแจ้งการชำระเงินกลับมาที่สมาคมฯ  ทาง e-mail: tla2497@yahoo.com หรือ ทางไลน์สมาคมฯ Line ID : tla2497
                    2.  หากสมัครในนามหน่วยงาน กรุณาใส่ชื่อบรรณารักษ์ หรือบุคคลสำหรับติดต่อกับสมาคมห้องสมุดฯ
                    3. หากสมัครในนามบุคคลกรุณากรอกเลขบัตรประจำตัวประชาชน และหากสมัครในนามนิติบุคคลกรุณากรอกเลขประจำตัวผู้เสียภาษีอากร เนื่องจากหากไม่กรอก ทางสำนักงานฯจะออกใบเสร็จรับเงินให้ไม่ได้
                    4.  สมาชิกที่เปลี่ยนชื่อ นามสกุล ย้ายที่อยู่หรือสำนักงาน หรือย้ายสังกัด ต้องแจ้งให้สำนักงานสมาคมฯ ทราบ
                    5.  หากต้องการเป็นสมาชิกชมรมที่ 2 หรือมากกว่า ชำระค่าเพิ่มในอัตราปีละ 100 บาท ตลอดชีพ 600 บาท</p>
                    </div>
                    <div class="modal-footer my-5 ">
                      <div class="col-lg-12">
                        <button type="button" class="nc-btn-blck" data-dismiss="modal">ยกเลิก</button>
                        <button type="button" class=" nc-btn">ยืนยัน</button>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>              
          </form>
        </div>  
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
