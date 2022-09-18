<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$blog->title}} - CFS</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @livewireStyles
</head>
<body class="antialiased">
    <livewire:header />

    <div class="section section-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 res-m-bttm">

                    <div class="post post-single">
                        <div class="post-thumb">
                            <img alt="" src="{{$blog->banner_path}}">
                        </div>
                        <div class="post-meta">
                            <span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> {{$blog->created_at}}</span>
                        </div>
                        <div class="post-entry">
                            <h3>Working Hard to Keep Pace with very heigh Demand</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <h4>Ea detracto dignissim qui scripserit eu.</h4>
                            <p> Nullam repudiare liberavisse eos ad, adhuc labore mel ad. Nonumy audiam vidisse at mea, eum in saperet pertinax scriptorem. Elitr consectetuer eu his, pri quas albucius hendrerit in, labores copiosae complectitur ei pro. Ei mollis fabellas probatus estius etiam ea pri malis dolores usu.</p>
                            <ul class="list-style arrow">
                                <li>Complectitur noeum propriae liberavisse</li>
                                <li>Nullam repudiare liberavisse eosad.</li>
                                <li>Ei sea vidit percipit quo ne quodsi percipit.</li>
                            </ul>
                            <p>Eius aeque complectitur no eum, propriae liberavisse usu ad. Partem denique repudiandae id has, in probo scripta pri, eam an justo corpora.</p>
                            <h5>Eius aeque complectitur no eum, propriae liberavisse usu ad.</h5>
                            <p>Eius aeque complectitur no eum, propriae liberavisse usu ad. Partem denique repudiandae id has, in probo scripta pri, eam an justo corpora. Vidisse epicuri eu eos, equidem intellegam usu ea. Ei sea vidit percipit, quo ne quodsi percipit, eum te mediocrem appellantur.</p>
                        </div>
                    </div>

                </div>
                <div class="col-md-3 col-md-offset-1">
                    <div class="sidebar-right wgs-box">
                        <div class="wgs-search">
                            <div class="wgs-content">
                                <div class="form-group">
                                    <input type="text" class="form-control"  placeholder="Search...">
                                    <button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="gaps size-1x"></div>
                        </div>
                        <!-- Each Widget -->
                        <div class="wgs-post">
                            <h5 class="wgs-title">Recent Blog</h5>
                            <div class="wgs-content">
                                @foreach($recentBlogs as $blog)
                                    <div class="wgs-post-single recent-blogs">
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
                            <div class="gaps size-2x"></div>
                        </div>
                        <!-- End Widget -->

                        <div class="wgs-tags">
                            <h5 class="wgs-title">Tags</h5>
                            <div class="wgs-content">
                                <ul class="tag-list clearfix">
                                    <li><a href="#">BitCoin</a></li>
                                    <li><a href="#">Excenge</a></li>
                                    <li><a href="#">Trade</a></li>
                                    <li><a href="#">Buy Sell</a></li>
                                    <li><a href="#">Wallet</a></li>
                                    <li><a href="#">Crypto</a></li>
                                </ul>
                            </div>
                            <div class="gaps size-1x"></div>
                        </div>

                        <div class="wgs-box wgs-contact-info">
                            <div class="wgs-content boxed">
                                <div class="contact-information">
                                    <div class="contact-entry">
                                        <h6>Crypto Filter <span>Signal</span></h6>
                                        <p>34 south franklin road<br/>santa ana,ca 8975,usa</p>
                                    </div>
                                    <div class="gaps size-1x"></div>
                                    <div class="contact-entry">
                                        <h6>contact number</h6>
                                        <p>phone:  534-842-30-90<br/>phone:  534-842-30-90</p>
                                    </div>
                                    <div class="gaps size-1x"></div>
                                    <div class="contact-entry">
                                        <h6>office hours</h6>
                                        <p>monday - friday<br/>8:30am - 5:00pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:footer />
    @livewireScripts
</body>
</html>
