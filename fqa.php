<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FQA</title>
    <?php include 'assets/include/inc-head.php' ?>
  <style>
      .accordion{
	      display:block;
	      padding:100px;
      }
      .question{
        background-color:#FFF7BE;
      }
      .accordion-item{
        border-width: 2px;
      }
      
  </style>
</head>
<body>
    <?php include 'assets/include/inc-header.php' ?>
    
  <div class="container">
    <div class="row">
      <div class ="row justify-content-end">
        <p class='h5 mt-5'>หน้าแรก / คำถามที่พบบ่อย</p>
      </div>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button bg-body" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <p class="h3 text-dark fw-semibold"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#0d6efd" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                  </svg> A</p>
                </button>
              </h2>
        <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body">  
                <div class="row question">
                  <div class="p-2 fw-normal">Question :</div>
                  <div class="p-2 fw-normal">คำถามที่ 1 </div>
                </div>
                <div class="row answer">
                  <div class="p-2 fw-normal">Answer : </div>
                  <div class="p-2 fw-normal">คำตอบ </div>
                </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
    <?php include 'assets/include/inc-footer.php' ?>
    <?php include 'assets/include/inc-script.php' ?>
</body>
</html>