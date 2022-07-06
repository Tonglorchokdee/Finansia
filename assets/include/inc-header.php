<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Document</title>
    <style scoped>
        .finansia-header {
            height: 88px;
        }
        .nav {
            height: 100%;
        }
        .nav-container {
            height: 100%;
        }
        .nav-item {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .nav-item.login {
            background-color: var(--c-primary);
        }
        .nav-item.register {
            background-color: var(--c-secondary);
        }
        .nav-link {
            height: 100%;
            display: flex;
            align-items: center;
        }
        .nav-link.active {
            font-weight: bold;
        }
        .nav-link:hover {
            background-color: #d9d9d9;
        }
        .nav-active {
            background-color: #d9d9d9;
            height: 5px;
            bottom: 0;
            margin-top: -5px;
        }
    </style>
</head>
<body>
<nav class="finansia-header navbar navbar-expand-lg navbar-light bg-white shadow-sm py-0">
  <!-- <a class="navbar-brand" href="#">Navbar</a> -->
  <img src="assets/img/logo/logo-finansia.png" class="img-fluid mx-5" alt="Finansia logo">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="nav navbar-collapse d-flex justify-content-end">
    <ul class="nav-container navbar-nav">
      <li class="nav-item active">
        <a class="nav-link active" href="#">หน้าแรก</a>
        <div class="nav-active"></div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">เกี่ยวกับเรา</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">หลักสูตร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">วิธีการใช้งาน</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">คำถามที่พบบ่อย</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ติดต่อเรา</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ภาษา</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ค้นหา</a>
      </li>
      <li class="nav-item login">
        <a class="nav-link text-white" href="#">เข้าสู่ระบบ</a>
      </li>
      <li class="nav-item register">
        <a class="nav-link text-white" href="#">สมัครสมาชิก</a>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>