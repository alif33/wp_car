<?php get_header();?>  
   <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ftl">
                <?php
                if(have_posts()){
                while(have_posts()){
                 the_post();   
                ?>    
                    <div class="single-page-details">
                        <h2><?php the_title();?> Singular </h2>                      
                        <h2><?php the_content();?></h2>
                    </div>
                <?php }} else{?> 
            <h2 style="text-align:center;"> No post here !!!  </h2>        
                <?php }  ?>    										
                    <div class="row">
                        <div class="col-md-12">
                            <div class="comment-area">
                                <h2 class="page-header">Comments</h2>
                               <?php comments_template('',true);?>
                            </div>
                        </div>
                    </div>
                </div>
    <?php //get_template_part('sidebar');?>         
            </div>
        </div>
    </div>
    <!-- /news table  -->
<?php get_footer();?>    
   