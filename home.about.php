<!-- ==============================================
    ** About **
    =================================================== -->
<style>
    .about{
        background: #fff;
    }
</style>
<section class="about">
    <div class="container">
        <ul class="row our-links">
            <li class="col-sm-4 apply-online clearfix equal-hight">
                <div class="icon"><img src="images/hat.png" class="img-responsive" alt=""></div>
                <div class="detail">
                    <h3><span>Undergraduate</span>Studies</h3>
                    <p> Undergraduate programs are designed to give students a well-rounded education. </p>
                    <a href="" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </li>
            <li class="col-sm-4 prospects clearfix equal-hight">
                <div class="icon"><img src="images/postg.png" class="img-responsive" alt=""></div>
                <div class="detail">
                    <h3><span>Postgraduate</span>Studies</h3>
                    <p> Highly conducive study environment and staff for your master's and doctorate degree programs. </p>
                    <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </li>
            <li class="col-sm-4 certification clearfix equal-hight">
                <div class="icon"><img src="images/certification-ico.png" class="img-responsive" alt=""></div>
                <div class="detail">
                    <h3><span>Continuing</span> Education</h3>
                    <p> Variety of certificate programs designed for individuals looking to further their education and skill set. </p>
                    <a href="#" class="more"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </li>
        </ul>
    </div>
    <!-- New VC Block -->
    <?php $boxShadow = "rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;"; ?>
    <style>
        .vc-img{
            width: 100%;
            height: 37em;
            background-image: url('../imsu-v2/images/cus-img/vc-1.jpg');
            background-size: cover;
            background-position: center top;
        }
        .vc-img-overlay{
            width: 100%;
            height: 30%;
            bottom: 0;
            background-color: #0e0e0e;
            padding: 1em;
        }
        .p_relative{
            position: relative;
        }
        .p_absolute{
            position: absolute;
        }
        .vc-img-overlay-head{
            text-align: center;
            color: #f0f0f0;
            font-size: 1.2em;
        }
        .vc-content-1{
            text-align: center;
            font-size: 1em;
            color: #aeaeb0;
        }
        .vc-content-2{
            text-align: center;
            margin-top: .6em;
            font-size: 1.4em;
            color: #8c8c94;
        }
        .vc-content-3{
            text-align: center;
            font-size: 1.4em;
            font-weight: 700;
            color: #ffffff;
            text-transform: uppercase;
        }
        .welcome-head-1{
            font-size: 1.4em;
            margin-bottom: .3em;
        }
        .welcome-head-2{
            font-size: 2.7em;
            color: #303a54;
            text-transform: uppercase;
            font-weight: 800;
            padding-left: 1em;
            border-left:.1em solid #255406;
        }
        .welcome-content{
            color: #34414d;
            margin-top: 1.8em;
            padding-right: 5em;
        }
        .welcome-btn{
            cursor: pointer;
            margin-top: 2em;
            background-color: #0a2444;
            color: #f0f0f0;
            font-size: 1.1em;
            width: 11em;
            height: 3em;
            padding-left: .8em;
            padding-top: .3em;
        }
        .welcome-btn:hover{
            border-radius: .2em;
            background-color: #fff;
            color: #0a2444;
            transition: all 200ms ease-in;
            padding-left: .4em;
            box-shadow: <?php echo $boxShadow; ?>
        }
        .welcome-block{
            padding: 2em 1.6em;
            padding-left: 4em;
        }
        .vc-img-frame {
            --g: 4px;     /* the gap */
            --b: 12px;    /* border thickness*/
            --c: #669706; /* the color */


            padding: calc(var(--g) + var(--b));
            --_c: #0000 0 25%, var(--c) 0 50%;
            --_g1: repeating-linear-gradient(90deg ,var(--_c)) repeat-x;
            --_g2: repeating-linear-gradient(180deg,var(--_c)) repeat-y;
            background:
                    var(--_g1) var(--_p, 25%) 0   ,var(--_g2) 0    var(--_p,125%),
                    var(--_g1) var(--_p,125%) 100%,var(--_g2) 100% var(--_p, 25%);
            background-size: 200% var(--b),var(--b) 200%;
            cursor: pointer;
            filter: grayscale(50%);
            transition: .3s;
        }
        .vc-img-frame:hover {
            --_p: 75%;
            filter: grayscale(0%);
        }
        .vc-img-overlay-1{
            background: rgb(4,9,33);
            background: linear-gradient(264deg, rgba(4,9,33,1) 31%, rgba(134,35,139,1) 86%);
            opacity: .5;
            width: 100%;
            height: 100%;
            top:0;
            bottom: 0;
            right: 0;
            left: 0;
            cursor: pointer;
        }
        .vc-img-overlay-1:hover{
            opacity: .2;
            transition: all 300ms ease-in;
        }
        @media (max-width:765px){
            .hide-on-mobile{
                display: none;
            }
        }
    </style>
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-5 hide-on-mobile">
                <div class="vc-block">
                    <div class="vc-img-frame">
                        <div class="vc-img p_relative">
                            <div class="vc-img-overlay-1 p_absolute"></div>
                            <div class="vc-img-overlay p_absolute">
                                <div class="vc-img-overlay-head">
                                    Prof Uchefula Ugonna Chukwumaeze
                                </div>
                                <div class="vc-img-overlay-content">
                                    <div class="vc-content-1">
                                        Ph.D San
                                    </div>
                                    <div class="vc-content-2">
                                        Vice-Chancellor
                                    </div>
                                    <div class="vc-content-3">
                                        Imo State University
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="welcome-block ">
                    <div class="welcome-head">
                        <div class="welcome-head-1">
                            Welcome to
                        </div>
                        <div class="welcome-head-2">
                            Imo State University
                        </div>
                    </div>
                    <div class="welcome-content">
                        Imo State University was established in 1981 and has since grown to become one of the leading universities in the country.
                        The university offers a wide range of undergraduate and postgraduate programs in fields. It also has a strong research focus and is known for its commitment to academic excellence and innovation.
                    </div>
                    <div class="welcome-btn">
                        Read More <i class="icon fas fa fa-arrow-right"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>