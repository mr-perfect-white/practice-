<?php
/**
 * Template part for displaying default header layout
 */
$sticky_on = medcity_get_opt( 'sticky_on', false );
$search_on = medcity_get_opt( 'search_on', false );
$cart_on = medcity_get_opt( 'cart_on', false );
$h_btn_on = medcity_get_opt( 'h_btn_on', 'hide' );

$h_btn_text = medcity_get_opt( 'h_btn_text' );
$h_btn_link_type = medcity_get_opt( 'h_btn_link_type', 'page' );
$h_btn_link = medcity_get_opt( 'h_btn_link' );
$h_btn_link_custom = medcity_get_opt( 'h_btn_link_custom' );
$h_btn_target = medcity_get_opt( 'h_btn_target', '_self' );
if($h_btn_link_type == 'page') {
    $h_btn_url = get_permalink($h_btn_link);
} else {
    $h_btn_url = $h_btn_link_custom;
}
$phone_label = medcity_get_opt( 'phone_label' );
$phone_number = medcity_get_opt( 'phone_number' );
$phone_result = preg_replace('#[ () ]*#', '', $phone_number);
$phone_number_menu = medcity_get_opt( 'phone_number_menu' );
if (!empty($phone_number_menu)){
    $phone_number = $phone_number_menu;
}
$location_label = medcity_get_opt( 'location_label' );
$location_text = medcity_get_opt( 'location_text' );
$location_link = medcity_get_opt( 'location_link' );
$time_label = medcity_get_opt( 'time_label' );
$time = medcity_get_opt( 'time' );

$note_text = medcity_get_opt( 'note_text' );

?> <header id="masthead" class="site-header">
   <div id="site-header-wrap" class="header-layout4 fixed-height 
		<?php if($sticky_on == 1) { echo 'is-sticky'; } ?>">
      <div class="site-header-top">
         <div class="container">
            <div class="row">
               <div class="header-top-left">
                  <div class="header-note-text"> <?php if(!empty($note_text)) : ?> <?php echo wp_kses_post($note_text); ?> <?php endif; ?> </div>
               </div>
               <div class="header-top-right"> <?php if(!empty($phone_number)) : ?> <div class="header-top-item">
                     <i class="fas fac-phone"></i>
                     <div class="header-top-item-inner">
                        <span> <?php echo esc_html($phone_label); ?> </span>
                        <a href="tel:
									<?php echo esc_attr($phone_result); ?>"> <?php echo esc_html($phone_number); ?> </a>
                     </div>
                  </div> <?php endif; ?> <?php if(!empty($location_text)) : ?> <div class="header-top-item">
                     <i class="fas fac-map-marker-alt"></i>
                     <div class="header-top-item-inner">
                        <span> <?php echo esc_html($location_label); ?> </span>
                        <a href="
									<?php echo esc_attr($location_link); ?>" target="_blank"> <?php echo esc_html($location_text); ?> </a>
                     </div>
                  </div> <?php endif; ?> <?php if(!empty($time)) : ?> <div class="header-top-item">
                     <i class="fas fac-clock"></i>
                     <div class="header-top-item-inner">
                        <span> <?php echo esc_attr($time_label); ?> </span>
                        <span> <?php echo esc_attr($time); ?> </span>
                     </div>
                  </div> <?php endif; ?> </div>
            </div>
         </div>
      </div>
      <div id="site-header" class="site-header-main">
         <div class="container">
            <div class="row">
               <div class="site-branding"> <?php get_template_part( 'template-parts/header-branding' ); ?> </div>
               <div class="site-navigation">
               <div class="header-top-right">
                    <ul>
                        <li><a href="https://peopletreehospitals.com/index.php/about-us/">About Us</a></li>
                        <li><a href="https://peopletreehospitals.com/index.php/international-patients/">Blogs</a></li>
                        <li><a href="https://peopletreehospitals.com/index.php/patient-services/">Health Packages</a></li>
                    </ul>
                </div>
                  <nav class="main-navigation">
                     <!-- <?php get_template_part( 'template-parts/header-menu' ); ?> -->
                     <ul id="mastmenu" class="primary-menu clearfix">
                        <li id="menu-item-13445" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-has-children menu-item-13445  main-menu-top1">
                           <a href="#">Our Specialities</a>
                           <span class="main-menu-toggle"></span>
                           <ul class="sub-menu  our-hosp-sub-1 ">

                              <div class="row menu-top-row">
                                <div class="col-lg-4">
                                    <p class="mb-0 mega-title  title-0">CENTRES OF EXCELLENCE</p>
                                        <li><a href="https://peopletreehospitals.com/index.php/department/neurosurgical/">NEUROSCIENCES</a></li>
 <li><a href="https://peopletreehospitals.com/index.php/department/orthopaedics/">ORTHOPAEDICS</a></li>
 <li id="menu-item-13719" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-13719">
                                        <a href="https://peopletreehospitals.com/index.php/department/cardiology-clinic/">CARDIAC SCIENCES</a>
                                    </li>
 <li><a href="https://peopletreehospitals.com/index.php/department/ent-head-neck-surgery/">ENT, HEAD & NECK SURGERY</a></li>
<li><a href="https://peopletreehospitals.com/index.php/department/paediatrics/">PAEDIATRICS & NEONATOLOGY</a></li>
<li><a href="https://peopletreehospitals.com/index.php/department/surgical-gastroenterology/">GASTROENTEROLOGY</a></li>
   <li><a href="https://peopletreehospitals.com/index.php/department/kidney-care/">UROLOGY & NEPHROLOGY</a></li>
 
<li><a href="https://peopletreehospitals.com/index.php/department/accident-emergency/">ACCIDENT, EMERGENCY AND TRAUMA</a></li>
<li class="no-menu"><span href=""></span></li>

                                </div>
                                <div class="col-lg-4">
                                    <p class="mb-0 mega-title">ADVANCED SPECIALITIES</p>
                                   <li><a href="https://peopletreehospitals.com/index.php/solution/oncology/">ONCOLOGY</a></li>
<li><a href="https://peopletreehospitals.com/index.php/solution/obstetrics-gynaecology/">OBSTETRICS & GYNAECOLOGY</a></li>

<li><a href="https://peopletreehospitals.com/index.php/solution/general-medicine-surgery/">GENERAL MEDICINE & SURGERY</a></li>

<li><a href="https://peopletreehospitals.com/index.php/solution/physiotherapy-rehabilitation/">PHYSIOTHERAPY & REHABILITATION </a></li>
<li><a href="https://peopletreehospitals.com/index.php/solution/dental-care-maxillofacial/">DENTAL & MAXILLOFACIAL SURGERY</a></li>
<li><a href="https://peopletreehospitals.com/index.php/solution/plastic-reconstructive/">PLASTIC &  RECONSTRUCTIVE SURGERY</a></li>

<li><a href="https://peopletreehospitals.com/index.php/solution/pathology-laboratory-services/">PATHOLOGY & LABORATORY SERVICES </a></li>
<li><a href="https://peopletreehospitals.com/index.php/solution/endocrinology-diabetology/">ENDOCRINOLOGY & DIABETOLOGY</a></li> 
                                </div>
                                <div class="col-lg-4">
                                <p class="mb-0 mega-title"></p>
                                <li><a href="https://peopletreehospitals.com/index.php/solution/respiratory-medicine/">RESPIRATORY MEDICINE </a></li>
 
 <li><a href="https://peopletreehospitals.com/index.php/solution/critical-care/">CRITICAL CARE</a></li>
 <li><a href="https://peopletreehospitals.com/index.php/solution/dermatology/">DERMATOLOGY</a></li>
 <li><a href="https://peopletreehospitals.com/index.php/solution/bariatric-surgery/">BARIATRIC SURGERY</a></li>
 
 <li><a href="https://peopletreehospitals.com/index.php/solution/radiology-imaging/">RADIOLOGY & IMAGING</a></li>
 
  <li><a href="https://peopletreehospitals.com/index.php/solution/ophthalmology/">OPHTHALMOLOGY</a></li>
  
  <li><a href="https://peopletreehospitals.com/index.php/solution/mind-care/">MIND CARE</a></li>
                                   
                                </div>
                               

                                

                              </div>
                              
                           </ul>
                        </li>
                        <li class="side-bar"></li>
                        <li id="menu-item-13444" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13444 main-menu-top1">
                           <a href="https://peopletreehospitals.com/index.php/our-doctors/">Our Doctors</a>
                        </li>
                        <li class="side-bar"></li>
                        <li id="menu-item-13567" class=" menu-item-type-post_type menu-item-object-page  current-menu-parent menu-item-has-children menu-item-13445  main-menu-top1">
                           <a href="#">Our Hospitals</a>
                            <span class="main-menu-toggle"></span>
                           <ul class="sub-menu our-hosp-sub ">

                           
                                    <li><a href="https://www.peopletreehospitals.com/">People Tree Hospitals, Yeshwanthpur</a></li>
                                    <li><a href="https://peopletreehospitals.com/">People Tree Hospitals, Raghavendra</a></li>
                                    <li><a href="https://peopletreehospitals.com/">People Tree Hospitals, Meenakshi</a></li>
                                    <li><a href="https://maargamindcare.com/">Maarga</a></li>
                                    
                                   

                               
                           </ul>
                            <li class="side-bar"></li>
                             <li class="main-menu-top1">
                                <a class="head-appoinment" href="https://app.fyndbetter.com/peopletree_apt?location=1736177150037x130313080744213440"> Appointments</a>
                           </li>
                            <li class="side-bar"></li>
                           <li class="main-menu-top1 emynum">
                               <div class="callbtn"><i class="fas fa-phone"></i></div><a class="helpline" href="tel:9900091881">9900091881</a>  
                           </li>
                             <li class="side-bar"></li>
                           <li class="main-menu-top1 emynum">
                                <img class="call-icons-img lazyloaded" data-src="https://peopletreehospitals.com/wp-content/uploads/2023/01/call-icon-new.png" alt="icon" src="https://peopletreehospitals.com/wp-content/uploads/2023/01/call-icon-new.png"><a class="helpline" href="tel:9900027281">9900027281</a>  
                           </li>
                          
                          
                           
                          
                           
                          
                             <li id="menu-item-13444" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13444  nine-dots-bar main-menu-top2">
                           <a href="#">
                           <img class="menu-icons-head" src="https://peopletreehospitals.com/wp-content/uploads/2023/02/menu.svg" alt="icon">
                           </a>
                       
                          <ul class="sub-menu">

                <li><a href="https://peopletreehospitals.com/index.php/about-us/">About Us</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/international-patients/">International Patients</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/patient-services/">Patient Services</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/blogs/">People Tree Blogs</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/organ-transplant-authorization/">Organ Transplant Authorization</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/what-our-patients-are-saying/">What Our Patients Are Saying</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/career/">Careers</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/gallery/">Gallery</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/bio-medical-waste-report/">Bio Medical Waste Report</a></li>
                 <li><a href="https://peopletreehospitals.com/index.php/health-packages/">Health Packages</a></li>
                 <li><a href="https://peopletreehospitals.com/index.php/tmi-foundation/">TMI Foundation</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/contact-us/">Contact us</a></li>
     
                           </ul> </li>
                          
                          
                            
                       
                         </ul>
                         
                    
                        </nav>
                 
                 
                  
                  <?php
                        if (($h_btn_on == 'show') || $search_on ){
                            ?> <div class="site-tool"> <?php if($h_btn_on == 'show') : ?> <div class="site-header-item site-header-button">
                        <a class="btn" href="
									<?php echo esc_url($h_btn_url); ?>" target="
									<?php echo esc_attr($h_btn_target); ?>" title="
									<?php echo esc_attr($h_btn_text); ?>"> <?php echo wp_kses_post($h_btn_text); ?> </a>
                                    
                     </div> <?php endif; ?> <?php if($search_on) : ?> <div class="site-header-item site-header-search">
                        <span class="h-btn-search">
                           <i class="far fa-search"></i>
                        </span>
                     </div> <?php endif; ?> </div> 
                     
                     <?php
                        }
                        ?>
               </div>
            </div>
         </div>
         <div id="main-menu-mobile">
         
         <div class="respon-call-btn"> 
         
         <ul id="mastmenu" class="primary-menu clearfix">
                           <li class="menu-item menu-item-type-post_type menu-item-object-page   menu-item-has-children  call-us-btn1 "><a class="helpline" href="tel:9900027281"><img class="call-icons-img" src="https://peopletreehospitals.com/wp-content/uploads/2023/01/call-icon-new.png" alt="icon"></a>
                           
                       
                           
                           </li>
  </ul>
</div>
         
         
         
         
            <div class="pt-3">
                <span class="btn-nav-mobile open-menu">
               <span></span>
               </span>
            
            </div>
            
           
            
            
            
            
            
            
         </div>
      </div>
   </div>
</header>
 <header class="mobile-header">
    <div class="container">
      <div class="row   top-header-point">
         <div class="col-8">
             <a class="mobile-logo" href="https://peopletreehospitals.com/" title="peopletreehospitals" rel="home"><img src="https://peopletreehospitals.com/wp-content/uploads/2023/02/main-logo-tree.png" alt="peopletreehospitals"></a>
          </div>
          
         <div class="col-2 pt-2">
         <a class="helpline" href="tel:9900091881"><img class="call-icons-img" src="https://peopletreehospitals.com/wp-content/uploads/2023/01/call-icon-new.png" alt="icon"></a>
         </div>
         <div class="col-2 text-center side-menu-mobile">
         <a href="#" class="mobile-icon">
                           <img class="menu-icons-head" src="https://peopletreehospitals.com/wp-content/uploads/2023/03/nine-dots.svg" alt="icon"> 
                           
                          
                           
                           </a>
                           <div class="side-menu-box">
                              <ul>
                                   <li><a href="https://peopletreehospitals.com/index.php/about-us/">About Us</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/international-patients/">International Patients</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/patient-services/">Patient Services</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/blogs/">People Tree Blogs</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/organ-transplant-authorization/">Organ Transplant Authorization</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/what-our-patients-are-saying/">What Our Patients Are Saying</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/career/">Careers</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/gallery/">Gallery</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/bio-medical-waste-report/">Bio Medical Waste Report</a></li>
                 <li><a href="https://peopletreehospitals.com/index.php/health-packages/">Health Packages</a></li>
                 <li><a href="https://peopletreehospitals.com/index.php/tmi-foundation/">TMI Foundation</a></li>
                <li><a href="https://peopletreehospitals.com/index.php/contact-us/">Contact us</a></li>
                              </ul>
                            
                           </div>
                         
         </div>
         
     
      </div>
      <div class="row  sub-header-mobile">
        <div class="col-12 px-0">
            <nav class="mobile-sub-header">
                <ul class="mobile-head">
                 <li class="mobile-hov-1 pl-2"> <a href="#" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-has-children">Our Specialities  </a>
                  <div class="mobile-our-speci-1">
                        
                      <ul class="mobile-our-speci-inner-box">
                           <h4>Centres of Excellence</h4>
                          <li> <a href="https://peopletreehospitals.com/index.php/department/neuro-sciences/"> Neurosciences</a> </li>
                           <li> <a href="https://peopletreehospitals.com/index.php/department/orthopaedics/"> Orthopaedics</a> </li>
                           <li> <a href="https://peopletreehospitals.com/index.php/department/cardiac-sciences/"> Cardiac Sciences</a> </li>
                          <li> <a href="https://peopletreehospitals.com/index.php/department/ent-head-neck-surgery/"> ENT, Head & Neck Surgery</a> </li>
                          <li> <a href="https://peopletreehospitals.com/index.php/department/paediatrics/"> Paediatrics & Neonatology</a> </li>
                          <li> <a href="https://peopletreehospitals.com/index.php/department/surgical-gastroenterology/"> Gastroenterology</a> </li>
                           <li> <a href="https://peopletreehospitals.com/index.php/department/kidney-care/"> Urology & Nephrology</a> </li>
                          <li> <a href="https://peopletreehospitals.com/index.php/department/accident-emergency/"> Accident, Emergency and Trauma</a> </li>
                           <h4>Advanced Specialities</h4>
                           <li> <a href="https://peopletreehospitals.com/index.php/solution/oncology/">Oncology </a> </li>
                           <li> <a href="https://peopletreehospitals.com/index.php/solution/obstetrics-gynaecology/">Obstetrics & Gynaecology  </a> </li>
                           <li> <a href="https://peopletreehospitals.com/index.php/solution/general-medicine-surgery/">General Medicine & Sugery </a> </li>
                           <li> <a href="https://peopletreehospitals.com/index.php/solution/physiotherapy-rehabilitation/"> Physiotherapy & Rehabilitation</a> </li>
                           <li> <a href="https://peopletreehospitals.com/index.php/solution/dental-maxillofacial-surgery/">Dental & Maxillofacial Surgery </a> </li>
                           <li> <a href="https://peopletreehospitals.com/index.php/solution/plastic-reconstructive-surgery/"> Plastic & Reconstructive Surgery </a> </li>
                          <li> <a href="https://peopletreehospitals.com/index.php/solution/pathology-laboratory-services/">Pathology & Laboratory Services </a> </li>
                            <li> <a href="https://peopletreehospitals.com/index.php/solution/endocrinology-diabetology/">Endocrinology & Diabetology </a> </li>
                             <li> <a href="https://peopletreehospitals.com/index.php/solution/respiratory-medicine/">Respiratory Medicine </a> </li>
                             <li> <a href="https://peopletreehospitals.com/index.php/solution/critical-care/"> Critical Care</a> </li>
                              <li> <a href="https://peopletreehospitals.com/index.php/solution/dermatology/">Dermatology </a> </li>
                                <li> <a href="https://peopletreehospitals.com/index.php/solution/bariatric-surgery/">Bariatric Surgery </a> </li>
                            <li> <a href="https://peopletreehospitals.com/index.php/solution/radiology-imaging/"> Radiology & Imaging</a> </li>
                            <li> <a href="https://peopletreehospitals.com/index.php/solution/ophthalmology/">Ophthalmology </a> </li>
                            <li> <a href="https://peopletreehospitals.com/index.php/solution/mind-care/">Mind Care</a> </li>


                      
                      </ul>
                  </div>
                 <li>
                 <li class="side-bar1 side-line"></li>
                 <li class="pl-2"> <a href="https://peopletreehospitals.com/index.php/our-doctors/">Our Doctors </a><li>
                 <li class="side-bar1"></li>
                 <li class="pl-2"> <a href="https://app.fyndbetter.com/peopletree_apt?location=1736177150037x130313080744213440" class="menu-item-has-children">Appointment</a><li>
            
                </ul>
            </nav>
        </div>
      
      
      
      </div>
      
      
      
    </div>
 </header>


 <style>

/* new header */
.header-top-right ul {
    display: flex
;
    margin-bottom: 0px;
    padding: 4px;
    border-radius: 10px !important;
}
.header-top-right ul li {
    margin: 0px 10px;
}
.header-top-right ul li a {
  color: #ffffff;
    font-size: 15px;
    font-weight: 500;
}
.header-top-right {
    background-color: #fff;
    border-radius: 26px;
    position: absolute;
    top: 14px;
    right: 130px;
}
.primary-menu > li > a {
    line-height: 53px !important;
}
li.side-bar {
   border-left: 2px solid !important;
    height: 16px !important;
    top: 64%;
}
.site-navigation {
    height: 122px !important;
}
.primary-menu > li > a {
    line-height: 18px !important;
}
.primary-menu > li > a {
    padding-right: 24px !important;
}
.site-navigation {
    height: 109px !important;
    padding-bottom: 12px;
}
nav.main-navigation {
    margin-top: 59px;
}
.header-top-right ul li a:hover {
    color: #9ad79b;
}
img.call-icons-img {
    width: 29px;
    margin-right: 11px;
}
li.main-menu-top1.emynum {
    display: flex
;
}
img.call-icons-img {
    width: 26px;
    margin-right: 11px;
}

.emynum img.call-icons-img.lazyloaded {
    margin-left: 15px;
    margin-right: -2px;
    width: 21px !important;
}
.nine-dots-bar {
    display: none !important;
}
div#site-header-wrap {
    height: 109px !important;
}
.main-menu-top1:hover {
    background-color: transparent !important;
}
.primary-menu li:hover > .sub-menu {
    margin-top: 18px !important;
}
.header-top-right li {
    padding: 0px 6px;
    background-color: #005a92;
    border-radius: 5px;
}
nav.main-navigation {
           background-color: #005a92;
    border-radius: 10px;
    padding: 9px 4px 0px 4px;
}
i.fas.fa-phone {
    color: #fff;
    rotate: 130deg;
    background-color: #47b849;
    border-radius: 10px;
    padding: 5px;
    margin-left: 12px;
    font-size: 11px;
}
.callbtn {
    display: flex
;
    padding-bottom: 6px;
}
a.helpline {
    font-size: 14px !important;
    padding-top: 1px !important;
}
 </style>