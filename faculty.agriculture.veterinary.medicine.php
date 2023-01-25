<?php
require_once ('header.php');
?>
    <style>
        .pb-3em{
            padding-bottom:1.3em;
        }
        .img-box.bg-1{
            background-image: url('https://imsu.edu.ng/assets/img/imsu/campus.jpeg');
        }
        .img-box{
            width: 100%;
            height: 16em;
            background-size: cover;
        }
        .department-body{
            padding-top: 1.2em;
            padding-bottom: .7em;
        }
        .department-name{
            font-size: 1.7em;
            color: #0e0e0e;
        }
    </style>
    <div class="department-block">
        <div class="container">
            <h2 class="Facuties-h2 text-center pb-3em">
                <?php echo $pageName ? $pageName: 'All Faculties'; ?>
            </h2>
            <div class="row gy-5 gx-3">
                <div class="col-lg-4">
                    <div class="department-head">
                        <div class="img-box bg-1"></div>
                    </div>
                    <div class="department-body">
                        <div class="department-name">
                            Soil Science Department
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php
require_once ('footer.php');
?>