<?php
require_once ('header.php');
?>
    <style>
        .pb-3em{
            padding-bottom:1.3em;
        }
        .department-block{
            margin: 4em 0;
        }
        .img-box.bg-1{
            background-image: url('https://imsu.edu.ng/assets/img/imsu/campus.jpeg');
        }
        .img-box{
            width: 100%;
            height: 16em;
            background-size: cover;
            border-top-right-radius: .3em;
            border-top-left-radius: .3em;
        }
        .department-body{
            border-left: .4em solid #0a2444;
            padding-top: 1.8em;
            padding-bottom: 1.9em;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        }
        .department-name{
            padding-left: .6em;
            font-size: 1.7em;
            color: #0e0e0e;
        }
        .m-15-cus{
            margin: 1.2em 0;
        }
    </style>
    <div class="department-block">
        <div class="container">
            <h2 class="Facuties-h2 text-center pb-3em">
                <?php echo $pageName ? $pageName: ' Faculty Of Engineering'; ?>
            </h2>
            <div class="row gy-5 gx-3">
                <div class="col-lg-4 m-15-cus">
                    <div class="department-head">
                        <div class="img-box bg-1"></div>
                    </div>
                    <div class="department-body">
                        <div class="department-name">
                            Soil Science Department
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-15-cus">
                    <div class="department-head">
                        <div class="img-box bg-1"></div>
                    </div>
                    <div class="department-body">
                        <div class="department-name">
                            Soil Science Department
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-15-cus">
                    <div class="department-head">
                        <div class="img-box bg-1"></div>
                    </div>
                    <div class="department-body">
                        <div class="department-name">
                            Soil Science Department
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-15-cus">
                    <div class="department-head">
                        <div class="img-box bg-1"></div>
                    </div>
                    <div class="department-body">
                        <div class="department-name">
                            Soil Science Department
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 m-15-cus">
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