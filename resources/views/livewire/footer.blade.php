<div>
    <footer>
        <!-- Section Footer -->
        <div class="footer-section section section-pad-md light bg-footer">
            <div class="imagebg footerbg">
                <img src="images/footer-bg.png" alt="footer-bg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 wgs-box res-m-bttm">
                        <!-- Each Widget -->
                        <div class="wgs-footer wgs-menu">
                            <h5 class="wgs-title ucap">Services</h5>
                            <div class="wgs-content">
                                <ul class="menu">
                                    <li><a href="#">Buy Bitcoins</a></li>
                                    <li><a href="#">Buy Ethereum</a></li>
                                    <li><a href="#">Sell Bitcoins</a></li>
                                    <li><a href="#">Bitcoin Trading</a></li>
                                    <li><a href="#">Margin Trading</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <div class="col-md-3 col-sm-6 wgs-box res-m-bttm">
                        <!-- Each Widget -->
                        <div class="wgs-footer wgs-menu">
                            <h5 class="wgs-title ucap">Information</h5>
                            <div class="wgs-content">
                                <ul class="menu">
                                    <li><a href="#">Payment Options</a></li>
                                    <li><a href="#">Fee Schedule</a></li>
                                    <li><a href="#">Getting Started</a></li>
                                    <li><a href="#">Identity Verification Guide</a></li>
                                    <li><a href="#">Card Verification Guide</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <div class="col-md-3 col-sm-6 wgs-box res-m-bttm">
                        <!-- Each Widget -->
                        <div class="wgs-footer wgs-post">
                            <h5 class="wgs-title ucap">Recent Blog</h5>
                            <div class="wgs-content">
                                @foreach($recentBlogs as $blog)
                                    <div class="wgs-post-single">
                                        <div class="wgs-post-thumb">
                                            <a href="blog/{{$blog->id}}"><img src="{{$blog->thumb_path}}" alt="post-thumb"></a>
                                        </div>
                                        <div class="wgs-post-entry">
                                            <h6 class="wgs-post-title"><a href="blog/{{$blog->id}}">{{$blog->title}}</a></h6>
                                            <span class="wgs-post-meta">{{$blog->created_at}}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                    <div class="col-md-3 col-sm-6 wgs-box res-m-bttm">
                        <!-- Each Widget -->
                        <div class="wgs-footer wgs-contact">
                            <h5 class="wgs-title ucap">get in touch</h5>
                            <div class="wgs-content">
                                <ul class="wgs-contact-list">
                                    <li><span class="pe pe-7s-map-marker"></span>İstanbul / Türkiye <br/>İzmir / Türkiye</li>
                                    <li><span class="pe pe-7s-call"></span>Telephone : 555 555 55 55 <br/>Telephone : 555 555 55 55</li>
                                    <li><span class="pe pe-7s-global"></span>Email : <a href="mailto:info@cryptofiltersignal.com">info@cryptofiltersignal.com</a> <br/>Web : <a href="https://cryptofiltersignal.com">www.cryptofiltersignal.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section -->

        <!-- Copyright -->
        <div class="copyright light">
            <div class="container">
                <div class="row">
                    <div class="site-copy col-sm-7">
                        <p>Copyright &copy; 2022 Crypto Filter Signal. Template Made by <a href="#">CFS</a></p>
                    </div>
                    <div class="col-sm-5 text-right mobile-left">
                        <ul class="social">
                            <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                            <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                            <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                            <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright -->
    </footer>
</div>

<!-- Preloader !remove please if you do not want
<div id="preloader"><div id="status">&nbsp;</div></div>
Preloader End -->

<!-- JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@vite(['public/assets/js/jquery.bundle.js', 'public/assets/js/script.js'])
