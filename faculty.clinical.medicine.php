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
            height: 8em;
            position: relative;
            background-size: cover;
            border-top-right-radius: .3em;
            border-top-left-radius: .3em;
        }
        .img-box-hover:hover{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background: rgb(4,9,33);
            background: linear-gradient(264deg, rgba(4,9,33,1) 31%, rgba(134,35,139,1) 86%);
            opacity: .5;
            transition: all 500ms ease-in;
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
        .fa-styling.fa{
            display:none;
        }
        .department-name:hover{
            cursor: pointer;
            padding-left: .9em;
            color: #ccc;
            transition: all 500ms ease-in-out;
        }
        .department-name:hover .fa-styling.fa{
            display:inline-block;
            padding-left: .2em;
            transition: all 4s ease-in-out;
        }
    </style>
    <div class="department-block">
        <div class="container">
            <h2 class="Facuties-h2 text-center pb-3em">
                <?php echo $pageName ? $pageName: 'Faculty Of Clinical Medicine'; ?>
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
                        <div class="img-box bg-1">
                            <div class="img-box-hover"></div>
                        </div>
                    </div>
                    <div class="department-body">
                        <div class="department-name">
                            Soil Science Department <i class="fab fa-styling fa fa-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
require_once ('footer.php');
?>