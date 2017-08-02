                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .tg-container -->
    </div><!-- #content -->

</body>

    <footer id="colophon" class="footer-layout site-footer" role="contentinfo">

        <div id="top-footer">
            <div class="tg-container">
                <div class="tg-column-wrapper">
                    <div class="tg-column-3 footer-block">
                        <section id="sow-google-map-3" class="widget widget_sow-google-map">
                            <div class="so-widget-sow-google-map so-widget-sow-google-map-base">
                                <div class="sow-google-map-canvas"
                                     id="map-canvas-d41d8cd98f00b204e9800998ecf8427e">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d254973.07822979378!2d101.45078389164777!3d3.1067782568649855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x31cc4b5a2a2ad0b5%3A0x2dbc2966d9dd0908!2siconix+consulting!3m2!1d3.119979!2d101.677723!5e0!3m2!1sen!2s!4v1501562746081" width="374.88" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="tg-column-3 footer-block">
                        <section id="text-7" class="widget widget_text">
                            <h3 class="widget-title">Contact Us</h3>
                            <div class="textwidget">
                                <p>Iconix Consulting Sdn Bhd (969824-U)</p>
                                <p>No. A-3-2, Northpoint Offices,<br />
                                    Mid Valley City,<br />
                                    No. 1, Medan Syed Putra Utara,<br />
                                    59200 Kuala Lumpur, Malaysia.<br />
                                    t : +603-2714 3568<br />
                                    f : +603-8073 2688<br />
                                    e : enquiry@iconixconsulting.com</p>
                            </div>
                        </section>
                    </div>
                    <div class="tg-column-3 footer-block">
                        <section id="sow-contact-form-3" class="widget widget_sow-contact-form">
                            <div class="so-widget-sow-contact-form so-widget-sow-contact-form-default-b106b7827691">
                                <form action="http://localhost/tigress/#contact-form-e7d7" method="POST" class="sow-contact-form" id="contact-form-e7d7">
                                    <div class="sow-form-field sow-form-field-name">
                                        <label class="sow-form-field-label-above" for="sow-contact-form-field-your-name-593902eb64fa7">
                                            <strong>Your Name</strong></label>
                                        <span class="sow-field-container">
												<input type="text" name="your-name-593902eb64fa7" id="sow-contact-form-field-your-name-593902eb64fa7" value="" class="sow-text-field"/>
											</span>
                                    </div>
                                    <div class="sow-form-field sow-form-field-email">
                                        <label class="sow-form-field-label-above" for="sow-contact-form-field-your-email-593902eb64fa7">
                                            <strong>Your Email</strong></label>
                                        <span class="sow-field-container">
												<input type="email" name="your-email-593902eb64fa7" id="sow-contact-form-field-your-email-593902eb64fa7" value="" class="sow-text-field"/>
											</span>
                                    </div>
                                    <div class="sow-form-field sow-form-field-subject">
                                        <label class="sow-form-field-label-above" for="sow-contact-form-field-subject-593902eb64fa7">
                                            <strong>Subject</strong></label>
                                        <span class="sow-field-container">
												<input type="text" name="subject-593902eb64fa7" id="sow-contact-form-field-subject-593902eb64fa7" value="" class="sow-text-field"/>
											</span>
                                    </div>
                                    <div class="sow-form-field sow-form-field-textarea">
                                        <label class="sow-form-field-label-above" for="sow-contact-form-field-message-593902eb64fa7">
                                            <strong>Message</strong></label>
                                        <span class="sow-field-container">
												<textarea name="message-593902eb64fa7" id="sow-contact-form-field-message-593902eb64fa7" rows="10"></textarea>
											</span>
                                    </div>
                                    <input type="hidden" name="instance_hash" value="e7d7ee0816bba1a4c5d0c51d5b5276e8" />

                                    <div class="sow-submit-wrapper ">
                                        <input type="submit" value="Contact Us"
                                               class="sow-submit">
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div id="bottom-footer">
            <div class="tg-container">
                <div class="copyright">
					<span class="copyright-text">
						Copyright &copy;  2017      <a href="index.html">TiGrESS</a>
					</span>
                </div><!-- .copyright -->
            </div>
        </div>
    </footer><!-- #colophon -->

    <?php wp_footer(); ?>

    <script>
        jQuery(function($){
            $('#swiper').swiper({
                items:1, // if you want a slider, not a carousel, specify "1" here
                loop:true,
                autoPlay:true,
                autoplayHoverPause:true, // if slider is autoplaying, pause on mouse hover
                autoplayTimeout:380,
                autoplaySpeed:800,
                navSpeed:500,
                dots:true, // dots navigation below the slider
                nav:true, // left and right navigation
                navText:['<','>']
            });
        });
    </script>

</html>
