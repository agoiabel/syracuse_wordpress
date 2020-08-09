<?php
/**
 * Template Name: scholarship
 * Authur: Agoi Abel
 */
?>
<?php get_header(); ?>
    <div class="container scholarship">
        
        <section class="">
            <div class="header_banner">
                <header class="header">
                    <div class="logo" onclick="location.href = '/';"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo.svg" alt="logo.svg" /></div>
                    <div class="menu" id="menu__open" onclick="menu('open')"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/menu.svg" alt="menu.svg" /></div>
                </header>

                <div class="container container_bmsm__header scholarship__header">
                    <p class="bmsm_title__aside">Go father with your dreams</p>
                    <p class="page_title">
                       <p class=" bmsm_title"> Syracuse Africa +</p>
                       <p class=" bmsm_title"> Scholarship Fund</p>
                    </p>
                    <div class="bmsm_subtitle mobile_bmsm__subtitle">
                        Having to rationalize the geometry with respect to a progressive grid and a golden ratio grid, was really challenging. So many points and angles to to work with.
                    </div>

                    <div class="bmsm_subtitle web_bmsm__subtitle">
                        Having to rationalize the geometry with respect to a progressive grid and a golden ratio grid, was really challenging. So many points and angles to to work with.
                    </div>

                    <a class="bmsm_link">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                        Become an SA Scholar
                        <i class="fa fa-long-arrow-up" aria-hidden="true"> </i>
                    </a>
                </div> 
            </div>

            <div class="scroll_direction__web">
                <div>
                    <div class="scroll_direction__title">Scroll, please.</div>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/scroll.svg" alt="scroll.svg"/>
                </div>
                <div class="say_hello">Say hello</div>
            </div>
        </section>
        <div class="big_empty scholarship_big__empty"></div>
        
        <section>
            <div class="container container_bmsm">
                <div class="container_bmsm__maincontent">
                    <div>
                        <h1 class="bmsm_content__heading1">On a mission to do <span class="heading_color">G.O.O.D</span></h1>
                        <p class="bmsm_content__description">
                            Partner with sales to attain annual renewal and expansion goals Lead 
                            the strategy and execution of cross-sell and upsell programs for our portfolio of customers from start to finish. 
                            Be responsible accountable for supporting all the strategic and tactical marketing needed fo.
                        </p>
                        <p class="bmsm_content__description">
                            Auth0’s customers Be accountable for Quarterly customer pipeline goals - generated through 
                            expansion campaigns Research and map the Auth0 customer journey Turn data-driven customer insights into tests and programs Map, 
                            align, and monitor programs across all customer touchpoints to drive the best customer experience 
                        </p>
                    </div>

                
                    <div class="container_section3">
                        <h1 class="section3_heading">Eligibility Criteria</h1>
                        <ul class="section3_web__list">
                           <li> Partner with sales to attain annual renewal and expansion goals</li>

                           <li> Lead the strategy and execution of cross-sell and upsell programs for our portfolio of customers from start to finish. </li>
                            
                           <li> Be responsible/accountable for supporting all the strategic and tactical marketing needed for Auth0’s customers</li>
                            
                           <li>Be accountable for Quarterly customer pipeline goals - generated through expansion campaigns
                            Research and map the Auth0 customer journey</li> 
                            
                           <li> Turn data-driven customer insights into tests and programs</li>
                            
                           <li>Map, align, and monitor programs across all customer touchpoints to drive the best customer experience</li> 
                        </ul>

                        <ul class="section3_mobile__list">
                            <li> Partner with sales to attain annual renewal and expansion goals</li>

                           <li> Lead the strategy and execution of cross-sell and upsell programs for our portfolio of customers from start to finish. </li>
                            
                           <li> Be responsible/accountable for supporting all the strategic and tactical marketing needed for Auth0’s customers</li>
                            
                           <li>Be accountable for Quarterly customer pipeline goals - generated through expansion campaigns
                            Research and map the Auth0 customer journey</li> 
                            
                           <li> Turn data-driven customer insights into tests and programs</li>
                            
                           <li>Map, align, and monitor programs across all customer touchpoints to drive the best customer experience</li> 
                        </ul>
                    </div>


                    <div class="container_section5">
                        <h1 class="section5_heading">Scholarship Benefits</h1>
                       
                        <ul class="section5_mobile__list">
                           <li> Partner with sales to attain annual renewal and expansion goals</li>
                           <li> Lead the strategy and execution of cross-sell and upsell programs for our portfolio of customers from start to finish. </li>
                           <li> Be responsible/accountable for supporting all the strategic and tactical marketing needed for Auth0’s customers</li>
                        </ul>

                        <ul class="section5_web__list">
                            <li> Partner with sales to attain annual renewal and expansion goals</li>
                            <li> Lead the strategy and execution of cross-sell and upsell programs for our portfolio of customers from start to finish. </li>
                            <li> Be responsible/accountable for supporting all the strategic and tactical marketing needed for Auth0’s customers</li>
                         </ul>
                    </div>

                    <?php get_template_part('includes/form', 'scholarship'); ?>

                </div>
            </div>
        </section>

    </div>
<?php get_footer(); ?>
