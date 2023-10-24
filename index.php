<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <?php
  // 1.b 
  wp_head();
  ?>

  
  </head>
  <body>
    <!-- Header part start -->
    <header class="cont">
      <div class="row header_cont">
        <div class="col-sm-6 header_left">
          <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
        </div>
        <div class="col-sm-6 header_right text-end">
          <p>২০ ভাদ্র, ১৪৩০</p>
          <a href="#">English</a>
        </div>
      </div>
    </header>

    <!-- Header part end -->

    <!-- logo part satrt  -->
    <section class="cont">
      <div class="row logo_cont">
        <div class="col-sm-5 logo_left">
          <a href="#">
            <!-- 2.b  -->
            <?php the_custom_logo(); ?>  
          </a>
        </div>
        <div class="col-sm-7 logo-r8">
          <div class="row up-menu">

          </div>

          <div class="row logo-area">
            <div class="col-sm-9 logo_search d-flex  justify-content-start">
              <input type="text" placeholder="খুঁজুন" />
              <button>অনুসন্ধান</button>
            </div>
            <div class="col-sm-3 logo_right d-flex justify-content-end">
              <div class="logo1">
                <a href="#"
                  ><img src="<?php echo get_template_directory_uri()?>./assets/img/header/a2i-logo-footer.png" alt=""
                /></a>
              </div>
              <div class="logo2 ">
                <h6>সাথে থাকুন:</h6>
                <div class="logos d-flex">
                  <a href="#"
                  ><img src="<?php echo get_template_directory_uri()?>./assets/img/header/facebook-icon.png  " alt=""
                /></a>
                <a href="#"
                  ><img src="<?php echo get_template_directory_uri()?>./assets/img/header/youtube-icon.png" alt=""
                /></a>
                <a href="#"
                  ><img src="<?php echo get_template_directory_uri()?>./assets/img/header/twitter-blue-icon.png" alt=""
                /></a>
                <a href="#"
                  ><img src="<?php echo get_template_directory_uri()?>./assets/img/header/gplus-icon.png" alt=""
                /></a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- logo part End -->

    

    <!-- menu part start  -->
    <section class="cont">
      <nav class="navbar navbar-expand-lg bg-body-secondary menu_bar">
        <div class="containerd">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            // 3.b --------
            wp_nav_menu([
              'theme_location'=>'PrimaryMenu',
              'menu_class'=>'navbar-nav xx'
            ]);
            ?>
            <!-- <ul class="navbar-nav   px-0">
              <li class="nav-item">
                <a class="nav-link  border-end border-secondary-subtle" aria-current="page" href="#">হোম</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-end border-secondary-subtle" href="#">বাংলাদেশ সম্পর্কিত</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-end border-secondary-subtle" href="#">ই-সেবাসমূহ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-end border-secondary-subtle" href="#">সেবাখাত</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-end border-secondary-subtle" href="#">ব্যবসা-বাণিজ্য</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-end border-secondary-subtle" href="#"> বৈদেশিক বিনিয়োগ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-end border-secondary-subtle" href="#">আইন-বিধি</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-end border-secondary-subtle" href="#">তথ্য বাতায়ন</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-end border-secondary-subtle" href="#">সেবাকুঞ্জ</a>
              </li>
            
              </li>
            </ul> -->
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu([
              'theme_location'=>'PrimaryMenu2',
              'menu_class'=>'navbar-nav xx'
            ]);
            ?>
            <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            
              <li class="nav-item">
                <a class="nav-link border-end border-secondary-subtle" href="#">ফরমস</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-end border-secondary-subtle" href="#">তথ্য বাতায়ন হ্যাকাথন</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-end border-secondary-subtle" href="#"
                  >সরকারি অফিসের নতুন ওয়েবসাইটের আবেদন</a
                >
              </li>
            </ul> -->
          </div>
        </div>
      </nav>
    </section>
    <!-- menu part end  -->

    <!-- hero-part  -->
    <section class="cont">
      <div class="row hero mt-3 ">
        <div class="col-sm-8 hero_main ps-0 pe-0 ">
          <!-- banner -->
          <div class="banner     ">
            <a href="#">
              <?php dynamic_sidebar('banner');?>
            
              <!-- <img src="<?php echo get_template_directory_uri()?>./assets/img/padmabanner.jpg" alt="" class="d-block w-100"/> -->
            </a>
          </div>
          <!-- banner end -->
          <!-- slider -->
          <div class="slider">
              <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade mt-3 mb-3" data-bs-ride="carousel">
                <?php
                $slide=new WP_Query([
                  'post_type'=>'post',
                  'category_name'=>'slider'
                ]);
                ?>
                <div class="carousel-inner">
                 <?php 
                 $x=0;
                 while($slide->have_posts()){$slide->the_post();
                $x++;
                ?>
                  <div class="thumb slider-1 carousel-item <?=($x==1)?'active':'' ?> ">
                  <?php the_post_thumbnail() ;?>
            
                  </div> <?php }?> 
                  

                  
                </div>
              </div>
          
          </div>
          <!-- slider end  -->
          <!-- tab -->
          <div class="tab mb-3 ">
            <ul class="nav nav-pills " id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link  active" id="pills-1-tab" data-bs-toggle="pill" data-bs-target="#pills-1" type="button" role="tab" aria-controls="pills-1" aria-selected="true">জনপ্রিয় সেবা</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-2-tab" data-bs-toggle="pill" data-bs-target="#pills-2" type="button" role="tab" aria-controls="pills-2" aria-selected="false">নতুন সেবা</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-3-tab" data-bs-toggle="pill" data-bs-target="#pills-3" type="button" role="tab" aria-controls="pills-3" aria-selected="false">মোবাইল সেবা</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-4-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-4" aria-selected="false">দপ্তর ভিত্তিক সেবা</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-5-tab" data-bs-toggle="pill" data-bs-target="#pills-5" type="button" role="tab" aria-controls="pills-5" aria-selected="false">সকল ই-সেবা</button>
              </li>
              
            </ul>
            <div class="tab-content bg-body-tertiary tab_btm" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab" tabindex="0">
                <?php 
                $qry2=new WP_Query([
                  'post_type'=>'post',
                  'category_name'=>'জনপ্রিয়_সেবা'
                ]); ?>
                <div class="row p-4 ">
                <?php 
                while($qry2->have_posts()){$qry2->the_post();
                ?>
                  <div class="col-sm-2  mt-2 tab_img">
                  <a href="">
                    <?php 
                    the_post_thumbnail(); ?>
                  
                    <p>  <?php the_title(); ?></p>
                  </a>
                </div>
                  <?php } ?>

                  
                </div>
              </div>

              <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab" tabindex="0">

                  <?php 
                $qry3=new WP_Query([
                  'post_type'=>'post',
                  'category_name'=>'নতুন_সেবা'
                ]); ?>
                <div class="row p-4 ">
                <?php 
                while($qry3->have_posts()){$qry3->the_post();
                ?>
                  <div class="col-sm-2  mt-2 tab_img">
                  <a href="">
                    <?php 
                    the_post_thumbnail(); ?>
                  
                    <p>  <?php the_title(); ?></p>
                  </a>
                </div>
                  <?php } ?>

                  
                </div>

                
                
              </div>
              <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab" tabindex="0">
                <?php 
                $qry3=new WP_Query([
                  'post_type'=>'post',
                  'category_name'=>'নতুন_সেবা'
                ]);  ?>
                <div class="row p-4 ">
                    <?php 
                    while($qry3->have_posts()){$qry3->the_post();
                    ?>
                    <div class="col-sm-2  mt-2 tab_img">
                      <a href="">
                      <?php the_post_thumbnail();?>
                        <p>  <?php the_title();?> </p>
                      </a>
                    </div>
                  <?php } ?>
                    
                
                  </div>
              </div>
              <div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-4-tab" tabindex="0">

                <div class="row tab_ul py-3 ps-4 pb-5">
                  <div class="col-sm-4 text-start  list1">
                
                    <?php dynamic_sidebar('list1') ?> 
                      <!-- <li><a href="#">অর্থ বিভাগ, অর্থ মন্ত্রালয়</a></li>
                      <li><a href="#"> আইন ও বিচার বিভাগ</a></li>
                      <li><a href="#">আরজেএসসিএফ </a></li>
                      <li><a href="#">ইমিগ্রেশন ও পাসপোর্ট অধিদপ্তর</a></li>
                      <li><a href="#">এটুআই</a></li>
                      <li><a href="#">এনএপিডি</a></li>
                      <li><a href="#">এনপিও </a></li>
                      <li><a href="#">ওয়াসা </a></li> -->
                  
                  </div>
                  <div class="col-sm-4 text-start">
                      <?php dynamic_sidebar('list1') ?> 
                  </div>
                  <div class="col-sm-4 text-start">
                      <?php dynamic_sidebar('list1') ?> 
                  </div>
                </div>

              </div>

              <div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="pills-5-tab" tabindex="0">
                  <?php 
                  $qry3=new WP_Query([
                    'post_type'=>'post',
                    'category_name'=>'নতুন_সেবা'
                  ]);  ?>
                  <div class="row p-4 ">
                    <?php 
                      while($qry3->have_posts()){$qry3->the_post();
                      ?>
                      <div class="col-sm-2  mt-2 tab_img">
                        <a href="">
                        <?php the_post_thumbnail();?>
                          <p>  <?php the_title();?> </p>
                        </a>
                      </div>
                    <?php } ?>
                    
                  </div>
              </div>
          

            </div>
          </div>
          <!-- tab end -->

          <!-- list part  -->
          <div class="list mt-5 mb-4">
            <h6> <?php the_title();?></h6>
              <?php dynamic_sidebar('list2') ?> 

<!-- 
            <ul>
              <li><a href="#">জাতীয় দুর্যোগ পরিকল্পনা ২০২১-২০২৫ (১৪-০৫-২০২৩)</a></li>
              <li><a href="#">বাংলাদেশ সরকারের অষ্টম পঞ্চবার্ষিক পরিকল্পনা (১৪-০৫-২০২৩)</a></li>
              <li><a href="#">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা (২০২১-২০৪১) (১৪-০৫-২০২৩)</a></li>
              <li><a href="#">বাজেট (২০২২-২০২৩) (১৪-০৫-২০২৩)</a></li>
            </ul> -->
            <a  class="btn" href="#">সকল</a>
           
          </div>
          <!-- list part end -->

          <!-- portal part  -->
          <div class="portal ms-2">
            
            <div class="row ">
              <div class="col-sm-4 portalImg">
                <a href="#"><?php dynamic_sidebar('portal1') ?></a>
              </div>
              <div class="col-sm-4 portalImg">
                <a href="#"><?php dynamic_sidebar('portal2') ?></a>
              </div>
              <div class="col-sm-4 portalImg">
                <a href="#"><?php dynamic_sidebar('portal3') ?></a>
              </div>
              
            </div>
          </div>
          <!-- portal part end  -->


        </div>
        <!-- sidebar part satrt  -->
        <div class="col-sm-4 hero_side">
          <div class="side_img mb-4">
            <!-- side img  -->
            <a href="#">
                <?php dynamic_sidebar('sideimg');?>
              <!-- <img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/Bangladesh-Directory.jpg" class="d-block w-100 mb-2" alt=""> -->
            </a>
            <!-- <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/bangladesh-portal--batton-bangla.png" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/Jonotar-Sorkar-banner-Bangl (1).jpg" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/bkkb_button_bn.png" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/mygov_bn.jpg" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/National-portal (1).png" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/prottyon.jpg" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/Tamplate_Apps_bn (5).png" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/Tamplate_Dictonary_bn.png" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/Tamplate_DistrictBranding_b (3).png" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/Tamplate_fund_bn.png" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/Tamplate_govtjob_bn.png" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/Tamplate_guard_bn.png" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/Tamplate_inherit_bn (4).png" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/Tamplate_policy_bn.png" class="d-block w-100 mb-2" alt=""></a>
            <a href="#"><img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/Tamplate_govtjob_bn.png" class="d-block w-100 mb-2" alt=""></a> -->
          </div>
          <div class="side_selecte">
            <!-- selecte part  -->
            <h4>সকল বাতায়ন</h4>
            <form action="">
              <select >
                <option selected>ওয়েবসাইট বাছাই করুন</option>
                <option value="1">মন্ত্রণালয়</option>
                <option value="2">অধিদপ্তর </option>
                <option value="3">ঢাকা বিভাগ</option>
                <option value="4">চট্টগ্রাম বিভাগ</option>
                <option value="5">রাজশাহী বিভাগ</option>
                <option value="6">খুলনা বিভাগ</option>
                <option value="7">খুলনা বিভাগ</option>
                <option value="8">রংপুর বিভাগ</option>
                <option value="9">সিলেট বিভাগ</option>
             
              </select>
              <button>চলুন</button>
            </form>
            
            <!-- selecte part  end -->
          </div>
          <div class="side_video mt-4">
            <h6>ডিজিটাল বাংলাদেশ থেকে স্মার্ট বাংলাদেশের অভিযাত্রা</h6>
            <iframe width="315" height="200" src="https://www.youtube.com/embed/pg4vvzVBXYk" title="ডিজিটাল বাংলাদেশ থেকে স্মার্ট বাংলাদেশ এর অভিযাত্রা" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="side_video2 mt-1">
            <h6>স্মার্ট বাংলাদেশ ২০৪১</h6>
            <iframe width="315" height="200" src="https://www.youtube.com/embed/augHSJgUovE" title="২০৪১ সালের স্মার্ট বাংলাদেশ হবে পেপারলেস, প্রেজেন্সলেস ও ক্যাশলেস।II Smart Bangladesh 2041 II" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="side_timg">
            <h6>
              ডেঙ্গু প্রতিরোধে করণীয়
            </h6>
            <a href="#">
                <?php dynamic_sidebar('sideimg2');?>
              <!-- <img src="<?php echo get_template_directory_uri()?>./assets/img/sidebar/dengu.jpg" alt=""> -->
            </a>
          </div>
        </div>
        <!-- sidebar end  -->
      </div>
    </section>
    <!-- hero-part end -->

    <!-- footer  -->
    <section class="cont">
      <div class="row footer-top mt-4">
        <img  src="assets/img/footer/footer_top_bg.png" alt="">
      </div>
      <div class="row footer-bottom">
        <div class="col-sm-7 footer-left">
          <nav class="navbar navbar-expand-lg  menu_bar">
            <div class="containerd">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav   px-0">
                  <li class="nav-item">
                    <a class="nav-link  border-end border-secondary-subtle" aria-current="page" href="#">গোপনীয়তার নীতিমালা</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link border-end border-secondary-subtle" href="#">ব্যবহারের শর্তাবলি</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link border-end border-secondary-subtle" href="#">সার্বিক সহযোগিতায়</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link border-end border-secondary-subtle" href="#">সাইট ম্যাপ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link border-end border-secondary-subtle" href="#">সচরাচর জিজ্ঞাসা</a>
                  </li>
                  
                
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২৩-০৯-১৭ 08:১৬:২২</p>
        </div>
        <div class="col-sm-5 footer-right">
          <p class="text-sm">পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>

          <div class="d-flex">
            <p class="l-tx text-center">কারিগরি সহায়তায়:</p>
            <img class="justify-content-end" src="assets/img/footer/np-logo-set.png" alt="">
          </div>
        </div>
      </div>
    </section>
    <?php wp_footer();?>
    <!-- footer  -->
    <!--.............. js ............... -->
    <!-- <script src="assets/boots/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js"></script> -->
  </body>
</html>
