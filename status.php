<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include 'assets/include/inc-head.php' ?>
</head>

<body>
    <?php include 'assets/include/inc-header.php' ?>
    <h5 class='title mt-5'>หน้าแรก / สถานะการเรียน</h5>
    <div class='container'>
        <div class="accordion mt-3" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        ข้อกำหนด & เงื่อนไข
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </a>
                </div>
                </div>
            </div>
        </div>
        <div class='d-flex'>
            <h5 class='subject'>หลักสูตร</h5>
            <h5 class='status'>สถานะ</h5>
        </div>

        <h1 class='history mt-5'>History</h1>
        <div class='search d-flex mt-5'>
            <h5>ค้นหา / หลักสูตร</h5>
            <select class="form-select w-25 ms-3" aria-label="Default select example">
                <option selected>--หลักสูตรที่ต้องการค้นหา--</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <button type="button" class="btn btn-success ms-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                ค้นหา
            </button>
        </div>
    </div>
    

    <?php include 'assets/include/inc-footer.php' ?>
    <?php include 'assets/include/inc-script.php' ?>
</body>

</html>

<style scoped>
    .container{
        width:80%;
    }

    .accordion-button{
        background-color:red;
        color:white;
    }

    .subject, .status{
        background-color: var(--c-primary);
        color: white;
        width:49.80%;
        text-align:center;
        padding-top:10px;
        padding-bottom:10px;

    }

    .status{
        margin-left:0.4%;
    }

    .history{
        text-decoration:underline;
        text-align:center;
    }

    .form-select{
        height:50px;
    }

    .search{
        justify-content:center;
        align-items:center;
    }

    .title{
        margin-left:175px;
        font-weight: 100;
    }
</style>