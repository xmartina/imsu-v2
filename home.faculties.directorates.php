<style>
    .mt-30{
        margin-top:40px;
    }
    .mt-19{
        margin-top:19px;
    }
    .list-Facuties .faculty-box{
        cursor:pointer;
    }
    .faculty-box{
        padding:1.8em;
        background-color:#02294F;
        color:#fff;
        font-size:1.5em;
        font-weight:500;
    }
    .faculty-box.pr-1{
        padding-right:.2em;
    }
    .faculty-box:hover{
        background-color:#fff;
        color:#02294F;
        transition:all 500ms ease-in-out;
        transform: scale(.8);
        z-index:99;
    }
    .faculty-box.reverse{
        background-color:#fff;
        border:1pt solid #02294F;
        color:#02294F;
    }
    .faculty-box.reverse:hover{
        background-color: #02294F;
        border:none;
        color:#fff;
    }
    .view-all-faculty-btn{
        padding:.6em;
        color:#02294F;
        font-size:1.2em;
        font-weight:500;
        cursor:pointer;
    }
    .view-all-faculty-btn:hover{
        background-color: #02294F;
        border:none;
        color:#fff;
        transition:all 500ms ease-in-out;
    }
    .ml-15{
        margin-left:15px;
    }
    .mr-3{
        margin-right:5px;
    }
</style>
<!--List Faculties & Diroctorates-->
<div class="Faculties-container padding-lg">
    <div class="container">
        <h2 class="Facuties-h2 text-center pb-20">
            Our Faculties
        </h2>
        <div class="list-Facuties mt-30">
            <div class="row gy-5 gx-3">
                <div class="col-lg-4 col-md-6">
                    <div class="faculty-box">
                        <i class="fab fa fa-book mr-3"></i>
                        Faculty Of Education
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="faculty-box reverse">
                        <i class="fab fa fa-anchor mr-3"></i>
                        Faculty Of Engineering
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="faculty-box">
                        <i class="fab fa fa-balance-scale mr-3"></i>
                        Faculty Of Law
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-3 mt-19">
                <div class="col-lg-4 col-md-6">
                    <div class="faculty-box reverse pr-1">
                        <i class="fab fa fa-plus-square mr-3"></i>
                        Faculty Of Health Sciences
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="faculty-box">
                        <i class="fab fa fa-bed mr-3"></i>
                        Faculties Of Basic Clinical
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="faculty-box reverse pr-1">
                        <i class="fab fa fa-thermometer-1 mr-3"></i>
                        Faculty Of Clinical Medicine
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-3 mt-19">
                <div class="col-lg-4 col-md-6"></div>
                <div class="col-lg-4 col-md-6"></div>
                <div class="col-lg-4 col-md-6">
                    <div class="view-all-faculty-btn">
                        View All Faculties <i class="ml-15 pt-2 fa fa-caret-right" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>