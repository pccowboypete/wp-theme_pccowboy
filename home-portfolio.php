 <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Portfolio</h2>
                    <hr class="star-3">
                </div>
            </div>
            <div class="row">
         
                <?php XWP_PageHTMLHelper::get_recent_projects_for_frontpage(true, 3); ?>
         
            </div>
        </div>
    </section>
    
   