<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <?php include 'assets/include/inc-head.php' ?>
</head>
<body>
    <?php include 'assets/include/inc-header.php' ?>

    <div class="modal modal-signin position-static d-block py-5" tabindex="-1" role="dialog" id="modalSignin">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
            <li class="list-group-item list-group-item-primary modal-header p-3 pb-3 border-bottom-0"><h2 class="fw-bold mb-0">
                <img src="assets/img/exclamation.png" class= width="40" height="40" alt="..."><font color="white">  Report a problem</font></h2></li>
            <!-- <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0">Report a problem</h2>
            </div> -->

            <div class="modal-body p-5 pt-3">
                <form class="">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="firstname" class="form-label">ชื่อ</label>
                            <input type="text" class="form-control" placeholder="ชื่อ" aria-label="firstname">
                        </div>
                        <div class="col mb-3">
                            <label for="lastname" class="form-label">นามสกุล</label>
                            <input type="text" class="form-control" placeholder="นาสกุล" aria-label="lastname">
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col mb-3">
                            <label for="firstname" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" aria-label="telephone">
                        </div>
                        <div class="col mb-3">
                            <label for="telephone" class="form-label">อีเมล์</label>
                            <input type="text" class="form-control" placeholder="อีเมล์" aria-label="email">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="firstname" class="form-label">ประเภทปัญหา</label>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>ไม่ระบุประเภทปัญหา</option>
                            <option value="1">ประเภทปัญหาที่ 1</option>
                            <option value="2">ประเภทปัญหาที่ 2</option>
                            <option value="3">ประเภทปัญหาที่ 3</option>
                            </select>
                        </div>
                        <div class="col mb-3">
                            <label for="lastname" class="form-label">หลักสูตร</label>
                            <select class="form-select" aria-label="Default select example">
                            <option selected>ไม่ระบุหลักสูตร</option>
                            <option value="1">ประหลักสูตรที่ 1</option>
                            <option value="2">ประหลักสูตรที่ 2</option>
                            <option value="3">ประหลักสูตรที่ 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="firstname" class="form-label">ข้อความ</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">พิมพ์ข้อความในช่องนี้</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col mb-3">
                            <label for="firstname" class="form-label">รูปภาพ</label>
                            <input type="file" class="form-control" aria-label="file example" required>
                            <div class="invalid-feedback">Example invalid form file feedback</div>
                        </div>
                    </div>
     
                <hr class="my-4">
                
                <div class="d-grid gap-2 col-4 mx-auto">
  <button class="btn btn-primary" type="button">ยืนยัน</button>
</div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <?php include 'assets/include/inc-footer.php' ?>
    <?php include 'assets/include/inc-script.php' ?>

</body>
</html>