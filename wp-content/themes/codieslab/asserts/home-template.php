<?php
/**
 * Template name: Home Template
 * The Home page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codieslab
 */

get_header();
?>
   <!-- banner start  -->
   <div class="homeBanner withSideScroll">
         <div class="container">
            <div class="innerWrap">
               <div class="mnCntBanner">
                  <div class="textSide">
                     <div class="txtWrap">
                        <h5>TECH DRIVEN COMPANY</h5>
                        <h1>We’re Help To Build Your Dream Project</h1>
                        <p>Agency provides a full service range including technical skills, design, business understanding.</p>
                        <div class="btnSet">
                           <a href="#!" class="btn btn-getQuote">HOW WE WORK</a>
                           <a href="#!" class="btn btn-watch" data-popup-open="popup-1"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/icon-play-home-banner.svg" alt="" /> WATCH VIDEO</a>
                        </div>
                     </div>
                  </div>
                  <div class="imageSide">
                     <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/banner-home-img.png" alt="" />
                  </div>
               </div>
               <div class="businessTrust">
                  <div class="btWrap">
                     <div class="txt">
                        <p>100+ Businesses trust us for digital solutions</p>
                     </div>
                     <div class="bannerClientSlider owl-carousel">
                        <div class="item">
                           <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01.svg" alt="" />
                        </div>
                        <div class="item">
                           <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-02.svg" alt="" />
                        </div>
                        <div class="item">
                           <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-03.svg" alt="" />
                        </div>
                        <div class="item">
                           <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-04.svg" alt="" />
                        </div>
                        <div class="item">
                           <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-05.svg" alt="" />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sideSocial">
                  <div class="scrollWrap">
                     <div class="socialIco">
                        <a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/social-fb.svg" alt="" /></a>
                        <a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/social-twitter.svg" alt="" /></a>
                        <a href="#!"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/social-insta.svg" alt="" /></a>
                     </div>
                     <div class="scroller">
                        <span>Scroll</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner end  -->
      <!-- WHO ARE WE start -->
      <div class="section whoWeAre top-bottom-10">
         <div class="container">
            <div class="row gap40">
               <div class="part-md-6">
                  <div class="title">
                     <h5>WHO ARE WE</h5>
                     <h2>An Integrated Tech Hub for all your IT Solutions</h2>
                  </div>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                  <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                  <div class="btnSet">
                     <a href="#!" class="btn bthOrange">ABOUT US</a>
                     <div class="qotSlideWrap">
                        <div class=" qotSlide owl-carousel"> 
                           <div class="item btn bthQuote">
                              <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/quote-img.png" alt="" /> 
                              <span>“01 I have found them very innovative “</span>
                           </div>
                           <div class="item btn bthQuote">
                              <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/quote-img.png" alt="" /> 
                              <span>“02 I have found them very innovative  I have found them very innovative  I have found them very innovative I have found them very innovative “</span>
                           </div>
                           <div class="item btn bthQuote">
                              <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/quote-img.png" alt="" /> 
                              <span>“03 I have found them very innovative“</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="part-md-6">
                  <div class="sidePatro">
                     <span><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/waw-floral.svg" alt="" /> </span>
                     <div class="item part-md-6 trangle-bottom-right patro-border-right patro-border-bottom">
                        <div class="img">
                           <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/waw-01-diversified-technology-development.svg" alt="" />
                        </div>
                        <h4>Diversified Technology Development</h4>
                     </div>
                     <div class="item part-md-6 patro-border-bottom bg-light-yellow">
                        <div class="img">
                           <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/waw-02-experienced-geeks-to-solve-problems.svg" alt="" />
                        </div>
                        <h4>Experienced geeks to Solve problems</h4>
                     </div>
                     <div class="item part-md-6 patro-border-right bg-light-yellow">
                        <div class="img">
                           <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/waw-03-result-driven-approach.svg" alt="" />
                        </div>
                        <h4>Result Driven Approach</h4>
                     </div>
                     <div class="item part-md-6 trangle-bottom-left">
                        <div class="img">
                           <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/waw-04-fast-resource-onboarding.svg" alt="" />
                        </div>
                        <h4>Fast Resource Onboarding</h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- WHO ARE WE start-->
      <!-- OUR SERVICES start -->
      <div class="section ourService">
         <div class="container">
            <div class="title text-center">
               <h5>OUR SERVICES</h5>
               <h2>Let us help you kick-start your digital transformation journey with human-centric digital experiences</h2>
            </div>
            <div class="row servicesDesign">
               <div class="item part-md-3">
                  <div class="innerWrap">
                     <h4><span>Web</span> Development</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                     <a href="#!" class="link linkBlack">Know More</a>
                  </div>
               </div>
               <div class="item part-md-3">
                  <div class="innerWrap">
                     <h4><span>E-Commerce</span> Solutions</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                     <a href="#!" class="link linkBlack">Know More</a>
                  </div>
               </div>
               <div class="item part-md-3">
                  <div class="innerWrap">
                     <h4><span>Salesforce</span> Development</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                     <a href="#!" class="link linkBlack">Know More</a>
                  </div>
               </div>
               <div class="item part-md-3">
                  <div class="innerWrap">
                     <h4><span>Saas</span> Solution</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                     <a href="#!" class="link linkBlack">Know More</a>
                  </div>
               </div>
               <div class="item part-md-3">
                  <div class="innerWrap">
                     <h4><span>UX/UI</span> Design</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                     <a href="#!" class="link linkBlack">Know More</a>
                  </div>
               </div>
               <div class="item part-md-3">
                  <div class="innerWrap">
                     <h4><span>Mobile App </span>Development</h4>
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                     <a href="#!" class="link linkBlack">Know More</a>
                  </div>
               </div>
               <div class="item">
                  <div class="innerWrap">
                     <h4><span>Not finding</span> what you are looking for ?</h4>
                  </div>
               </div>
               <div class="item">
                  <div class="innerWrap">
                     <a href="#!" class="btn btn-getQuote">CONTACT US</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- OUR SERVICES end  -->
      <!-- CASE STUDIES start -->
      <div class="section caseStudies">
         <div class="container">
            <div class="title darkBg">
               <h5>CASE STUDIES</h5>
               <h2>Reasons why we are the best</h2>
            </div>
            <div class="row caseDesign">
               <div class="part-md-4 item">
                  <div class="innerWrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asserts/img/img_flowers.jpeg');">
                     <div class="textCont">
                        <span class="tag">E-COMMERCE</span>
                        <h3>Corporate Website for a Leading design company</h3>
                        <div class="hider">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                           <div class="itemFoot">
                              <a href="#!" class="circleLink">&nbsp;</a>
                              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01.svg" alt=""/></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="part-md-4 item">
                  <div class="innerWrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asserts/img/img_flowers.jpeg');">
                     <div class="textCont">
                        <span class="tag">E-COMMERCE</span>
                        <h3>Corporate Website for a Leading design company</h3>
                        <div class="hider">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                           <div class="itemFoot">
                              <a href="#!" class="circleLink">&nbsp;</a>
                              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01.svg" alt=""/></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="part-md-4 item">
                  <div class="innerWrap" style="background-image: url('<?php echo get_template_directory_uri(); ?>/asserts/img/img_flowers.jpeg');">
                     <div class="textCont">
                        <span class="tag">E-COMMERCE</span>
                        <h3>Corporate Website for a Leading design company</h3>
                        <div class="hider">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                           <div class="itemFoot">
                              <a href="#!" class="circleLink">&nbsp;</a>
                              <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01.svg" alt=""/></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="viewAllBox">
               <div class="txt">We have worked with many prominent Brands</div>
               <div class="btnSet">
                  <a href="#!" class="btn btn-getQuote">VIEW ALL</a>
                  <a href="#!" class="btn btn-navContact">CONNECT WITH US</a>
               </div>
            </div>
         </div>
      </div>
      <!-- CASE STUDIES end -->
      <!-- global leader start -->
      <div class="globalLeader">
         <div class="container">
            <div class="innerWrap">
               <div class="txt">
                  <h2>A global leader in next-generation <span>digital services and consulting </span></h2>
               </div>
               <div class="counterBox">
                  <div class="item">
                     <span class="counterNum">12</span>
                     <p>Countries Where We Have Happy Customers</p>
                  </div>
                  <div class="item">
                     <span class="counterNum">120</span>
                     <p>Happy Customers over The globe</p>
                  </div>
                  <div class="item">
                     <span class="counterNum">10+</span>
                     <p>Years of Professional Experience</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- global leader start -->
      <!-- OUR SERVICES start  -->
      <div class="section ourService-2 rb-art">
         <div class="container">
            <div class="title text-center">
               <h5>OUR SERVICES</h5>
               <h2>Let us help you kick-start your digital transformation journey with human-centric digital experiences</h2>
            </div>
            <div class="ourServiceDsn">
               <div class="row">
                  <div class="part-md-6 clientLogoBox">
                     <div class="innerWrap">
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt=""></div>
                        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt=""></div>
                     </div>
                     <div class="btnBox">
                        <p>We have worked with many prominent Brands</p>
                        <div class="btnDv">
                           <a href="#!" class="btn btn-getQuote">VIEW ALL</a>
                        </div>
                     </div>
                  </div>
                  <div class="part-md-6">
                     <div class="testimonialMain testimonialMain-owl owl-carousel owl-theme">
                        <div class="item">
                           <div class="innerWrap">
                              <div class="head">
                                 <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt="" />
                                 </div>
                                 <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                 </div>
                              </div>
                              <p>A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions to promote your product or service online and help you.</p>
                              <div class="foot">
                                 <div class="author">
                                    <div class="img">
                                       <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-author.png" alt="" />
                                    </div>
                                    <div class="txt">
                                       <h4>Milan Nayak</h4>
                                       <p>Meta Inc.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="innerWrap">
                              <div class="head">
                                 <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt="" />
                                 </div>
                                 <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                 </div>
                              </div>
                              <p>A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions to promote your product or service online and help you.</p>
                              <div class="foot">
                                 <div class="author">
                                    <div class="img">
                                       <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-author.png" alt="" />
                                    </div>
                                    <div class="txt">
                                       <h4>Milan Nayak</h4>
                                       <p>Meta Inc.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="innerWrap">
                              <div class="head">
                                 <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt="" />
                                 </div>
                                 <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                 </div>
                              </div>
                              <p>A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions to promote your product or service online and help you.</p>
                              <div class="foot">
                                 <div class="author">
                                    <div class="img">
                                       <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-author.png" alt="" />
                                    </div>
                                    <div class="txt">
                                       <h4>Milan Nayak</h4>
                                       <p>Meta Inc.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="innerWrap">
                              <div class="head">
                                 <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt="" />
                                 </div>
                                 <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                 </div>
                              </div>
                              <p>A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions to promote your product or service online and help you.</p>
                              <div class="foot">
                                 <div class="author">
                                    <div class="img">
                                       <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-author.png" alt="" />
                                    </div>
                                    <div class="txt">
                                       <h4>Milan Nayak</h4>
                                       <p>Meta Inc.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="innerWrap">
                              <div class="head">
                                 <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt="" />
                                 </div>
                                 <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                 </div>
                              </div>
                              <p>A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions to promote your product or service online and help you.</p>
                              <div class="foot">
                                 <div class="author">
                                    <div class="img">
                                       <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-author.png" alt="" />
                                    </div>
                                    <div class="txt">
                                       <h4>Milan Nayak</h4>
                                       <p>Meta Inc.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="item">
                           <div class="innerWrap">
                              <div class="head">
                                 <div class="img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-business-01-black.svg" alt="" />
                                 </div>
                                 <div class="rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                 </div>
                              </div>
                              <p>A digital agency is a business you hire to outsource your digital marketing efforts, instead of handling in-house. They can provide your business with a variety of digital solutions to promote your product or service online and help you.</p>
                              <div class="foot">
                                 <div class="author">
                                    <div class="img">
                                       <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/ico-author.png" alt="" />
                                    </div>
                                    <div class="txt">
                                       <h4>Milan Nayak</h4>
                                       <p>Meta Inc.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- OUR SERVICES end  -->
      <!-- OUR LATEST FEEDS start  -->
      <div class="section latestFeeds">
         <div class="container">
            <div class="title withBtn">
               <div class="titleSide">
                  <h5>OUR LATEST FEEDS</h5>
                  <h2>We love to write & share with the world</h2>
               </div>
               <div class="rightBtn">
                  <a href="#!" class="btn btn-getQuote size-01">VIEW ALL</a>
               </div>
            </div>
            <div class="row ltFeeds">
               <div class="item part-md-4">
                  <div class="innerWrap">
                     <div class="img">
                        <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/img_flowers.jpeg" alt="" />
                     </div>
                     <div class="txt">
                        <h5>Stories</h5>
                        <h4>Agency is a business you hire to outsource</h4>
                        <p>5 Nov, 2021</p>
                     </div>
                  </div>
               </div>
               <div class="item part-md-4">
                  <div class="innerWrap">
                     <div class="img">
                        <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/img_flowers.jpeg" alt="" />
                     </div>
                     <div class="txt">
                        <h5>Stories</h5>
                        <h4>Agency is a business you hire to outsource</h4>
                        <p>5 Nov, 2021</p>
                     </div>
                  </div>
               </div>
               <div class="item part-md-4">
                  <div class="innerWrap">
                     <div class="img">
                        <img src="<?php echo get_template_directory_uri(); ?>/asserts/img/img_flowers.jpeg" alt="" />
                     </div>
                     <div class="txt">
                        <h5>Stories</h5>
                        <h4>Agency is a business you hire to outsource</h4>
                        <p>5 Nov, 2021</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <!-- OUR LATEST FEEDS end -->
<?php get_footer(); ?>