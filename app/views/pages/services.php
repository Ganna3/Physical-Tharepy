<?php 
class services extends view{

  public function output(){
    $pic = URLROOT . 'public/assets/img/specialities.jpg';
    $title = $this->model->title;
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <!-- ======= Services Section ======= -->

    <div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Service</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Service  </h2>
						</div>
					</div>
				</div>
			</div>
    <section  class="services section-bg">
     
        

   

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
              <p class="doc-department"><img src="../../public/assets/img/specialities/Mangment.png" style="width:100px" </p>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="">Orthopedic</a></h4>
              <p>Orthopedics is the field of medicine concerned with the study and treatment of the musculosketetal system, particularly the spine, joints, and muscles. Orthopedics mainly deals with correction of disorders and deformities related to the musculosketal system; hence, orthopedics is central to the treatment of back pain.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box ">

              <div class="icon">
              <p class="doc-department"><img src="../../public/assets/img/specialities/Post Surgical.png" style="width:100px" </p>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Rehabilitation</a></h4>
              <p>Rehabilitation is care that can help you get back, keep, or improve abilities that you need for daily life. These abilities may be physical, mental, and/or cognitive (thinking and learning). You may have lost them because of a disease or injury, or as a side effect from a medical treatment</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
              <p class="doc-department"><img src="../../public/assets/img/specialities/Post Surgical.png" style="width:100px" </p>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">Woman Health</a></h4>
              <p>Branch of medicine that focuses on the treatment and diagnosis of diseases and conditions that affect a woman's physical and emotional well-being.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
              <p class="doc-department"><img src="../../public/assets/img/specialities/Physiotherapy.png" style="width:100px" </p>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">Physiotherapy</a></h4>
              <p> Treatment of disease, injury, or deformity by physical methods such as massage, heat treatment, and exercise rather than by drugs or surgery.</p>
        
              </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
              <p class="doc-department"><img src="../../public/assets/img/specialities/Sports Injury.png" style="width:100px" </p>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="">Sports Injury</a></h4>
              <p>Sports injuries are injuries that occur when engaging in sports or exercise. Sports injuries can occur due to overtraining, lack of conditioning, and improper form or technique. Failing to warm up increases the risk of sports injuries. Bruises, strains, sprains, tears, and broken bones can result from sports injuries</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
              <p class="doc-department"><img src="../../public/assets/img/specialities/Nutrition.png" style="width:100px" </p>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="">Nutrition</a></h4>
              <p>Nutrition is the study of nutrients in food, how the body uses them, and the relationship between diet, health, and disease. Nutritionists use ideas from molecular biology, biochemistry, and genetics to understand how nutrients affect the human body.</p>
            </div>
          </div>

        </div>

      </div>
      </div>
    </section><!-- End Sevices Section -->

	
      
EOT;
  echo $text;
  require APPROOT . '/views/inc/footer.php';

  }
}
