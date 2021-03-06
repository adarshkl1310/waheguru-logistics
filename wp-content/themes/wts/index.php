




  

<?php get_header(); ?>
   <section id="services" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
        </div>
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-cog"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Web Development</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-bar-chart"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Graphic Design</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon">
                <i class="lni-briefcase"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Business Branding</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lni-pencil-alt"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Content Writing</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.5s">
              <div class="icon">
                <i class="lni-mobile"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">App Development</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="1.8s">
              <div class="icon">
                <i class="lni-layers"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Digital Marketing</a></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->


    <!-- Feature Section Start -->
    <div id="feature">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-wrapper">
              <div>
                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">Learn More About Us</h2>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="features-box wow fadeInLeft" data-wow-delay="0.3s">
                      <div class="features-icon">
                        <i class="lni-layers"></i>
                      </div>
                      <div class="features-content">
                        <h4>
                          Bootstrap 4
                        </h4>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint. 
                        </p>
                      </div>
                    </div>
                  </div> 
                  <div class="col-md-6 col-sm-6">
                    <div class="features-box wow fadeInLeft" data-wow-delay="0.6s">
                      <div class="features-icon">
                        <i class="lni-briefcase"></i>
                      </div>
                      <div class="features-content">
                        <h4>
                          100% Free
                        </h4>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint. 
                        </p>
                      </div>
                    </div>
                  </div>           
                  <div class="col-md-6 col-sm-6">
                    <div class="features-box wow fadeInLeft" data-wow-delay="0.9s">
                      <div class="features-icon">
                       <i class="lni-cog"></i>
                      </div>
                      <div class="features-content">
                        <h4>
                          Responsive
                        </h4>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint. 
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="features-box wow fadeInLeft" data-wow-delay="1.2s">
                      <div class="features-icon">
                        <i class="lni-leaf"></i>
                      </div>
                      <div class="features-content">
                        <h4>
                          Easy to Use
                        </h4>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam tempora quidem vel sint. 
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 padding-none">
            <div class="feature-thumb wow fadeInRight" data-wow-delay="0.3s">
            <?php the_post_thumbnail('medium'); ?>
            <img src="<?php echo get_stylesheet_directory_uri();?>/images/img-1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->

    <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-header text-center">
              <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Team</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item text-center">
              <div class="team-img">
                 <?php the_post_thumbnail('medium'); ?>
                  <img src="<?php echo get_stylesheet_directory_uri();?>/team/team-01.jpg" alt="">
                  <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Rafael Basilla</a></h3>
                <p>Front-end Developer, Dropbox</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item text-center">
              <div class="team-img">
                <?php the_post_thumbnail('medium'); ?>
                <img src="<?php echo get_stylesheet_directory_uri();?>/team/team-02.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Renee Fleck</a></h3>
                <p>Product Designer, Tesla</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-sm-6 col-md-6 col-lg-4">
            <!-- Team Item Starts -->
            <div class="team-item text-center">
              <div class="team-img">
                <?php the_post_thumbnail('medium'); ?>
                <img src="<?php echo get_stylesheet_directory_uri();?>/team/team-03.jpg" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-center">
                    <ul class="social-icons">
                      <li><a href="#"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li>
                      <li><a href="#"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#">Paul Kowalsy</a></h3>
                <p>Lead Designer, TNW</p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          
        </div>
      </div>
    </section>
    <!-- Team Section End -->

    <!-- Clients Section Start -->
    <div id="clients" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">As Seen On</h2>
        </div>
        <div class="row text-align-">
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
            <div class="client-item-wrapper">
             <?php the_post_thumbnail('medium'); ?>
             <img src="<?php echo get_stylesheet_directory_uri();?>/clients/Andhra-polymers.png" alt="">
           </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
            <div class="client-item-wrapper">
              <?php the_post_thumbnail('medium'); ?>
              <img src="<?php echo get_stylesheet_directory_uri();?>/clients/Cremica.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
            <div class="client-item-wrapper">
              <?php the_post_thumbnail('medium'); ?>
              <img src="<?php echo get_stylesheet_directory_uri();?>/clients/Gati.png" alt="">
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 wow fadeInUp" data-wow-delay="1.2s">
            <div class="client-item-wrapper">
              <?php the_post_thumbnail('medium'); ?>
              <img src="<?php echo get_stylesheet_directory_uri();?>/clients/TCI.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Clients Section End -->

    <!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonial section-padding">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                  <div class="img-thumb">
                   <?php the_post_thumbnail('medium'); ?>
                   <img src="<?php echo get_stylesheet_directory_uri();?>/testimonial/img1.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Grenchen Pearce</a></h2>
                    <h3><a href="#">Boston Brothers co.</a></h3>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                  <div class="img-thumb">
                    <?php the_post_thumbnail('medium'); ?>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/testimonial/img2.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Domeni GEsson</a></h2>
                    <h3><a href="#">Awesome Technology co.</a></h3>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                    <div class="img-thumb">
                    <?php the_post_thumbnail('medium'); ?>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/testimonial/img1.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Dommini Albert</a></h2>
                    <h3><a href="#">Nesnal Design co.</a></h3>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                  <div class="img-thumb">
                    <?php the_post_thumbnail('medium'); ?>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/testimonial/img1.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Fernanda Anaya</a></h2>
                    <h3><a href="#">Developer</a></h3>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="content">
                    <p class="description">Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. </p>
                  </div>
                  <div class="img-thumb">
                   <?php the_post_thumbnail('medium'); ?>
                   <img src="<?php echo get_stylesheet_directory_uri();?>/testimonial/img1.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Jason A.</a></h2>
                    <h3><a href="#">Designer</a></h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->  

    <!-- Pricing section Start --> 
    <section id="pricing" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="table wow fadeInLeft" data-wow-delay="1.2s">
              <div class="title">
                <h3>Basic</h3>
              </div>
              <div class="pricing-header">
                <p class="price-value">$12.90<span>/ Month</span></p>
              </div>
              <ul class="description">
                <li>Up to 5 projects </li>
                <li>Up to 10 collabrators</li>
                <li>2gb of storage</li>
              </ul>
              <button class="btn btn-common">Get It</button>
            </div> 
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12 active">
            <div class="table wow fadeInUp" id="active-tb" data-wow-delay="1.2s">
              <div class="title">
                <h3>Profesional</h3>
              </div>
               <div class="pricing-header">
                  <p class="price-value">$49.90<span>/ Month</span></p>
               </div>
              <ul class="description">   
                <li>Up to 10 projects</li>
                <li>Up to 20 collabrators</li>
                <li>10gb of storage</li>
                <li>Real-time collabration</li>
              </ul>
              <button class="btn btn-common">Get It</button>
           </div> 
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="table wow fadeInRight" data-wow-delay="1.2s">
              <div class="title">
                <h3>Expert</h3>
              </div>
               <div class="pricing-header">
                  <p class="price-value">$89.90<span>/ Month</span></p>
               </div>
              <ul class="description">
                <li>unlimited projects </li>
                <li>Unlimited collabrators</li>
                <li>Unlimited of storage</li>
                <li>Real-time collabration</li>
                <li>24x7 Support</li>
              </ul>
              <button class="btn btn-common">Get It</button>
            </div> 
          </div>
        </div>
      </div>
    </section>
    <!-- Pricing Table Section End -->

    <!-- Owl Slider Section Start -->
    <section class="sloder-img section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="slider-center slider">
              <div>
                <?php the_post_thumbnail('medium'); ?>
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/img2.jpg" alt="">
              </div>
              <div>
                <?php the_post_thumbnail('medium'); ?>
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/img2.jpg" alt="">
              </div>
              <div>
                <?php the_post_thumbnail('medium'); ?>
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/img2.jpg" alt="">
              </div>
              <div>
                <?php the_post_thumbnail('medium'); ?>
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/img2.jpg" alt="">
              </div>
              <div>
                <?php the_post_thumbnail('medium'); ?>
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/img2.jpg" alt="">
              </div>
              <div>
                <?php the_post_thumbnail('medium'); ?>
                <img src="<?php echo get_stylesheet_directory_uri();?>/images/img2.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Owl Slider Section End -->  

    <!-- Subscribe Section Start -->
    <section id="Subscribes" class="subscribes section-padding">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10 col-lg-5">
            <h4 class="wow fadeInUp" data-wow-delay="0.3s">Start For Free</h4>
            <p class="wow fadeInUp" data-wow-delay="0.6s">Existing customized ideas through client-based deliverables. <br> Compellingly unleash fully tested outsourcing</p>
            <form for="">
              <div class="subscribe wow fadeInDown" data-wow-delay="0.3s">
                <input type="Email" class="form-control" name="email" placeholder="Email Address">
                <button class="btn-submit" type="submit"><i class="lni-arrow-right"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Subscribe Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">    
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-header text-center">
              <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Contact</h2>
            </div>
          </div>
        </div>
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">          
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <h2>Contact Form</h2>
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>                                 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div> 
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div> 
                      <div class="clearfix"></div> 
                    </div>
                  </div>
                </div>            
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <h2>Get In Touch</h2>
              <div class="contact-right">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-map-marker"></i>
                  </div>
                  <p>Skopje, Macedonia</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-envelope"></i>
                  </div>
                  <p><a href="#">email@gmail.com</a></p>
                  <p><a href="#">tomsaulnier@gmail.com</a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-phone-handset"></i>
                  </div>
                  <p><a href="#">+42 374 5967</a></p>
                  <p><a href="#">+99 123 5967</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </section>












<?php get_footer(); ?>