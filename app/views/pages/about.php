<?php
class about extends view{
  public function output(){
      
    //$title = $this->model->title;
    //$subtitle = $this->model->subtitle;
    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="breadcrumb-bar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">About Us</h2>
            </div>
        </div>
    </div>
</div>



<!-- Team -->
<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">PATIENT FEEDBACKS</h5>
        <div class="row">
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <a href="https://www.fiverr.com/share/qb8D02" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Sunlimetech</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                           
                        </div>
                        <div class="backside">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
        </div>
    </div>
</section>
<!-- Team -->






    <div class="section-block-grey">
    <div class="container">
        <div class="section-heading center-holder">
            <h3>Services </h3>
           
        </div>
        
		<div class="row mt-60">
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-shield-alt"></i> </div>
                    <div class="serv-section-desc">
                        <h4>Security </h4>
                        <h5>Secure Business</h5> 
                        
                        <h6>All reports will be secured and no one will access it except the speciality. </h6></div>

                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2 serv-section-2-act">
                    <div class="serv-section-2-icon serv-section-2-icon-act"> <i class="far fa-clock"></i> </div>
                    <div class="serv-section-desc">
                        <h3>24/7 Available </h3>
                        <h5>All time available </h5>
                        <h5>the system will be avaialble for all users at anytime. </h5>
                         </div>
                    <div class="section-heading-line-left"></div>
                   
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <div class="serv-section-2">
                    <div class="serv-section-2-icon"> <i class="fas fa-gem"></i> </div>
                    <div class="serv-section-desc">
                        <h4> Customer Support </h4>
                        <h5>Support section</h5> 
                        <h5> If you faced any technical issue during booking,contact us and we will support you.  </h5>
                        </div>

                    <div class="section-heading-line-left"></div>
                    
                </div>
            </div>
        </div>
    </div>
</div>	 
<!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Location</h2>
              <p>65 Nabil El Wakkad,Ard EL Golf,NASRCITY.</p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3452.440055441303!2d31.33586261413405!3d30.081580981868754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583e1a3378eae9%3A0xb4c5f86bc595c089!2s65%20Nabil%20Al%20Wakad%2C%20Al%20Golf%2C%20Nasr%20City%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1623637338849!5m2!1sen!2seg" frameborder="0" allowfullscreen></iframe>
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
             
            
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
             
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
               
              
                </div>
              </div>
            </div>

           </div>
        </div>

      </div>
    </section><!-- End Contact Section -->



EOT;
  echo $text;
  require APPROOT . '/views/inc/footer.php';

  }
}
