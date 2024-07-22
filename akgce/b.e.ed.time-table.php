<?php

include('_web/header.php');

?>

<section class="breadcrumb-area d-flex p-relative align-items-center" style="background-image: url(img/bg/bdrc-bg.png)">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-12 col-lg-12">
        <div class="breadcrumb-wrap text-left">
          <div class="breadcrumb-title">
            <h2>Academic</h2>
          </div>
        </div>
      </div>
      <!-- <div class="breadcrumb-wrap2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                  Courses
                </li>
              </ol>
            </nav>
          </div> -->
    </div>
  </div>
</section>

<section class="faq-area pt-120 pb-120 p-relative fix" id="coures">
  <div class="animations-10">
    <img src="img/bg/an-img-04.png" alt="an-img-01">
  </div>
  <div class="animations-08">
    <img src="img/bg/an-img-05.png" alt="contact-bg-an-01">
  </div>
  <div class="container">
    <div class="row justify">
      <div class="col-lg-8">
        <div class="section-title wow fadeInLeft  animated" data-animation="fadeInDown animated" data-delay=".2s" style="visibility: visible; animation-name: fadeInLeft;">
          <h2>Time Table</h2>

        </div>
        <div class="faq-wrap mt-30 pr-30 wow fadeInUp  animated" data-animation="fadeInUp" data-delay=".4s" style="visibility: visible; animation-name: fadeInUp;">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                    B.Ed. Time Table
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse show" data-bs-parent="#accordionExample">
                  <div class="card-body">
                    <h4 style="color: #ff7350; padding-top: 20px">
                      <a href="img/pdf/B.Ed.-timetable_rotated.pdf"> View</a>
                    </h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php
        include('_web/side-link.php');

        ?>
      </div>
    </div>
</section>


<?php

include('_web/footer.php');

?>