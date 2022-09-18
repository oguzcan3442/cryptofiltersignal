@vite(['public/assets/css/vendor.bundle.css', 'public/assets/css/style.css', 'public/assets/css/theme.css', 'public/assets/css/custom.css'])
<div>
    <header class="site-header header-s1 is-sticky">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [
                    {
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500"
                    },
                    {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "US 100"
                    },
                    {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR/USD"
                    },
                    {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "Bitcoin"
                    },
                    {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "Ethereum"
                    }
                ],
                    "showSymbolLogo": true,
                    "colorTheme": "dark",
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <ul class="social">
                            <li><a href="#"><em class="fa fa-facebook"></em></a></li>
                            <li><a href="#"><em class="fa fa-twitter"></em></a></li>
                            <li><a href="#"><em class="fa fa-linkedin"></em></a></li>
                            <li><a href="#"><em class="fa fa-google-plus"></em></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 al-right">
                        <ul class="top-nav">
                            <!--<li><a href="faqs.html">Help</a></li>-->
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- #end Topbar -->
        <!-- Navbar -->
        <div class="navbar navbar-primary">
            <div class="container relative">
                <!-- Logo -->
                <a class="navbar-brand" href="/">
                    <img class="logo logo-dark" alt="logo" src="/images/logo.png">
                    <img class="logo logo-light" alt="logo" src="/images/logo.png">
                </a>
                <!-- #end Logo -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
                        <span class="sr-only">Menu</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="quote-btn"><a class="btn" href="contact.html"><span>get started</span></a></div>
                </div>
                <!-- MainNav -->
                <nav class="navbar-collapse collapse" id="mainnav">
                    <ul class="nav navbar-nav">
                        <!--<li class="dropdown"><a href="#" class="dropdown-toggle">Strategies <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/under-construction">Fibonacci-Retracement</a></li>
                                <li><a href="/under-construction">SuperTrend</a></li>
                                <li><a href="/under-construction">EMA Strategy</a></li>
                                <li><a href="/under-construction">Custom Strategy</a></li>
                            </ul>
                        </li>-->
                        <li class="dropdown"><a href="#" class="dropdown-toggle">Indicators <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/indicator/fibonacci">Fibonacci-Retracement</a></li>
                                <li><a href="/indicator/supertrend">SuperTrend</a></li>
                                <li><a href="/under-construction">RSI</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle">Harmonic Patterns <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/under-construction">AB=CD</a></li>
                                <li><a href="/under-construction">Gartley</a></li>
                                <li><a href="/under-construction">Butterfly</a></li>
                                <li><a href="/under-construction">Bat</a></li>
                                <li><a href="/under-construction">Crab</a></li>
                                <li><a href="/under-construction">Cypher</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle">Chart Patterns <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/under-construction">Double Top-Bottom</a></li>
                                <li><a href="/under-construction">Triple Top-Bottom</a></li>
                                <li><a href="/under-construction">Head & Shoulders</a></li>
                                <li><a href="/under-construction">Wedge Reversal</a></li>
                                <li><a href="/under-construction">Wedge Continualation</a></li>
                                <li><a href="/under-construction">Pennat</a></li>
                                <li><a href="/under-construction">Flag</a></li>
                                <li><a href="/under-construction">Triangle</a></li>
                                <li><a href="/under-construction">Cup and Handle</a></li>
                                <li><a href="/under-construction">Trend Lines</a></li>
                                <li><a href="/under-construction">Support/Resistance</a></li>
                                <li><a href="/under-construction">Break/Retest</a></li>
                            </ul>
                        </li>
                        <li><a href="/blogs">Blogs</a></li>
                        <li><a href="/news">News</a></li>
                        <li><a href="/about">About</a></li>
                        <!--<li><a href="/contact">Contact</a></li>-->
                        <li class="quote-btn hidden-xs hidden-sm"><a class="btn" href="#">Bağış Yap</a></li>
                    </ul>
                </nav>
                <!-- #end MainNav -->
            </div>
        </div>
        <!-- #end Navbar -->
    </header>
</div>
