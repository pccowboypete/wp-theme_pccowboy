<!-- Contact Section -->
    <section id="contact"  class="fade-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-title">Contact Me</h2>
                    <hr class="star-3">
                </div>
            </div>
            
			<div class="container" style="text-align : center;"><?php echo XWP_Util::site_feedback_feedback('result', $_GET['result']) ?></div>
            
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" action="<?php echo htmlspecialchars(home_url());?>/sendsitefeedback.php" method="POST">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 has-success has-feedback">
                                <?php echo XWP_Util::site_feedback_feedback('n', $_GET['n']) ?>
                                <input type="text" class="form-control" placeholder="Name" id="xxname" name="xxname" >
                               
                                
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 has-warning has-feedback">
                                <?php echo XWP_Util::site_feedback_feedback('e', $_GET['e']) ?>
                                <input type="email" class="form-control" placeholder="Email Address"  id="xxemail" name="xxemail" >
                                
                                
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 has-success has-feedback">
                                <?php echo XWP_Util::site_feedback_feedback('sub', $_GET['sub']) ?>
                                <input type="text" class="form-control" placeholder="Subject" id="xxsubject" name="xxsubject" >
                                
                                
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 has-success has-feedback">
                                <?php echo XWP_Util::site_feedback_feedback('msg', $_GET['msg']) ?>
                                <textarea rows="5" class="form-control" placeholder="Message" id="xxmessage" name="xxmessage"></textarea>
                                
                            </div>
                        </div>
                        
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12" style="text-align: right; ">
                            	<button class="btn btn-default" type="reset">Reset</button>
                                <button type="submit" class="btn btn-default" style="margin-right: 20px;">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>