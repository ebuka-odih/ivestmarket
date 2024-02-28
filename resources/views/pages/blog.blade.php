@extends('pages.layout.app')
@section('content')

    <div class="section gradient-3">

        @include('pages.layout.header')

        <div class="container large-top medium-bottom">
            <div class="_8-column">
                <div id="w-node-_2e1f3bd9-904b-214a-df3a-9c9d211cd513-6cc53aee" class="hero-center">
                    <h1 class="white-text _375em-bottom-margin">Blog</h1>
                    <div class="hero-subtitle-container">
                        <h3 class="light-paragraph-text">News &amp; Insights from the {{ env('APP_NAME')  }} team.</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container medium-top">
            <h3 class="_1em-bottom-margin">Filter by Categroy</h3>
        </div>
        <div class="container">
            <div class="w-dyn-list">
                <div role="list" class="blog-category-list w-dyn-items">
                    <div role="listitem" class="collection-item w-dyn-item">
                        <a href="category/product-updates" class="w-inline-block">
                            <div class="pillbox-lavender">Product Updates</div>
                        </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                        <a  class="w-inline-block">
                            <div class="pillbox-lavender">Trader Education</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container small-top giant-bottom">
            <div class="w-dyn-list">
                <div role="list" class="_3-3-1-1 w-dyn-items">
                    <div role="listitem" class="collection-item w-dyn-item">
                        <a  class="blog-content-box w-inline-block">
                            <div class="blog-content-box-inner-container _1-5em-bottom-margin">
                                <div style="background-image:none" class="blog-post-card-cover-image _1-5em-bottom-margin">
                                    <div class="pillbox-translucent">Trader Education</div>
                                </div>
                                <h4 class="black-maroon-text _375em-bottom-margin">How to Recover from a Trading Loss</h4>
                                <p class="w-dyn-bind-empty"></p>
                            </div>
                            <div class="byline-lockup">
                                <img src="https://uploads-ssl.webflow.com/630df394ff44d46eec4df587/63372413d9b4fd336ef3d0e3_6271ad37dd0dbb548de9404b_62657069b08454c39a14595a_25.png" loading="lazy" alt="" class="byline-author-picture" />
                                <p class="dark-dimmed-text">{{ env('APP_NAME')  }} Team</p>
                            </div>
                        </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                        <a class="blog-content-box w-inline-block">
                            <div class="blog-content-box-inner-container _1-5em-bottom-margin">
                                <div style="background-image:none" class="blog-post-card-cover-image _1-5em-bottom-margin">
                                    <div class="pillbox-translucent">Trader Education</div>
                                </div>
                                <h4 class="black-maroon-text _375em-bottom-margin">How to Manage Risk for Day Traders</h4>
                                <p class="w-dyn-bind-empty"></p>
                            </div>
                            <div class="byline-lockup">
                                <img src="https://uploads-ssl.webflow.com/630df394ff44d46eec4df587/63372413d9b4fd336ef3d0e3_6271ad37dd0dbb548de9404b_62657069b08454c39a14595a_25.png" loading="lazy" alt="" class="byline-author-picture" />
                                <p class="dark-dimmed-text">{{ env('APP_NAME')  }} Team</p>
                            </div>
                        </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                        <a  class="blog-content-box w-inline-block">
                            <div class="blog-content-box-inner-container _1-5em-bottom-margin">
                                <div style="background-image:url(_https_/uploads-ssl.webflow.com/630df394ff44d46eec4df587/6398f8a9a0a05e09363fbec5_pexels-photo-259091.webp_)" class="blog-post-card-cover-image _1-5em-bottom-margin">
                                    <div class="pillbox-translucent">Trader Education</div>
                                </div>
                                <h4 class="black-maroon-text _375em-bottom-margin">Top Trading Psychology Books for Improving Your Performance</h4>
                                <p class="w-dyn-bind-empty"></p>
                            </div>
                            <div class="byline-lockup">
                                <img src="https://uploads-ssl.webflow.com/630df394ff44d46eec4df587/63372413d9b4fd336ef3d0e3_6271ad37dd0dbb548de9404b_62657069b08454c39a14595a_25.png" loading="lazy" alt="" class="byline-author-picture" />
                                <p class="dark-dimmed-text">{{ env('APP_NAME')  }} Team</p>
                            </div>
                        </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                        <a  class="blog-content-box w-inline-block">
                            <div class="blog-content-box-inner-container _1-5em-bottom-margin">
                                <div style="background-image:url(_https_/uploads-ssl.webflow.com/630df394ff44d46eec4df587/6398f9115747b4b2557730fa_pexels-photo-7681974.webp_)" class="blog-post-card-cover-image _1-5em-bottom-margin">
                                    <div class="pillbox-translucent">Trader Education</div>
                                </div>
                                <h4 class="black-maroon-text _375em-bottom-margin">5 Common Mistakes Beginner Traders Make and How to Avoid Them</h4>
                                <p class="w-dyn-bind-empty"></p>
                            </div>
                            <div class="byline-lockup">
                                <img src="https://uploads-ssl.webflow.com/630df394ff44d46eec4df587/63372413d9b4fd336ef3d0e3_6271ad37dd0dbb548de9404b_62657069b08454c39a14595a_25.png" loading="lazy" alt="" class="byline-author-picture" />
                                <p class="dark-dimmed-text">{{ env('APP_NAME')  }} Team</p>
                            </div>
                        </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                        <a  class="blog-content-box w-inline-block">
                            <div class="blog-content-box-inner-container _1-5em-bottom-margin">
                                <div style="background-image:url(_https_/uploads-ssl.webflow.com/630df394ff44d46eec4df587/6398faf7f895d96315ddb6fb_Xnapper-2022-12-13-17.21.16.png_)" class="blog-post-card-cover-image _1-5em-bottom-margin">
                                    <div class="pillbox-translucent">Product Updates</div>
                                </div>
                                <h4 class="black-maroon-text _375em-bottom-margin">November Release Notes</h4>
                                <p>Here&#x27;s whats new in {{ env('APP_NAME')  }} from November. Including TradeStation auto sync, DAS Trader Pro, new trade replay additions, and so much more!</p>
                            </div>
                            <div class="byline-lockup">
                                <img src="https://uploads-ssl.webflow.com/630df394ff44d46eec4df587/633b1d284eabd7dab46732ed_download.jpg" loading="lazy" alt="" class="byline-author-picture" />
                                <p class="dark-dimmed-text">Umar Ashraf</p>
                            </div>
                        </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                        <a  class="blog-content-box w-inline-block">
                            <div class="blog-content-box-inner-container _1-5em-bottom-margin">
                                <div style="background-image:url(_https_/uploads-ssl.webflow.com/630df394ff44d46eec4df587/6387b76517d78e2d75618ba3_Xnapper-2022-11-30-15.04.33.png_)" class="blog-post-card-cover-image _1-5em-bottom-margin">
                                    <div class="pillbox-translucent">Trader Education</div>
                                </div>
                                <h4 class="black-maroon-text _375em-bottom-margin">The Definitive Guide to Understanding R and R-Multiple</h4>
                                <p>One of the most common reasons traders fail is due to poor risk management. By using the power of the R, you can focus on minimizing tragic losses. Heres a guide on understanding R and R-Multiple.</p>
                            </div>
                            <div class="byline-lockup">
                                <img src="https://uploads-ssl.webflow.com/630df394ff44d46eec4df587/63372413d9b4fd336ef3d0e3_6271ad37dd0dbb548de9404b_62657069b08454c39a14595a_25.png" loading="lazy" alt="" class="byline-author-picture" />
                                <p class="dark-dimmed-text">{{ env('APP_NAME')  }} Team</p>
                            </div>
                        </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                        <a  class="blog-content-box w-inline-block">
                            <div class="blog-content-box-inner-container _1-5em-bottom-margin">
                                <div style="background-image:url(_https_/uploads-ssl.webflow.com/630df394ff44d46eec4df587/6351af8097582876c6642a85_Untitled%20design%20(1).svg&quot;)" class="blog-post-card-cover-image _1-5em-bottom-margin">
                                    <div class="pillbox-translucent">Product Updates</div>
                                </div>
                                <h4 class="black-maroon-text _375em-bottom-margin">New in {{ env('APP_NAME')  }}: Trade Replay </h4>
                                <p>Go back in time to old trades to review your trading setups, discover the flaws in your execution, and more to improve your performance. </p>
                            </div>
                            <div class="byline-lockup">
                                <img src="https://uploads-ssl.webflow.com/630df394ff44d46eec4df587/633b1d284eabd7dab46732ed_download.jpg" loading="lazy" alt="" class="byline-author-picture" />
                                <p class="dark-dimmed-text">Umar Ashraf</p>
                            </div>
                        </a>
                    </div>
                    <div role="listitem" class="collection-item w-dyn-item">
                        <a href="blog/improve-trading-psychology" class="blog-content-box w-inline-block">
                            <div class="blog-content-box-inner-container _1-5em-bottom-margin">
                                <div style="background-image:url(_https_/uploads-ssl.webflow.com/630df394ff44d46eec4df587/633724871e38616ebfe9effc_joshua-mayo-MCIm2A6hLXs-unsplash.jpg_)" class="blog-post-card-cover-image _1-5em-bottom-margin">
                                    <div class="pillbox-translucent">Trader Education</div>
                                </div>
                                <h4 class="black-maroon-text _375em-bottom-margin">Master the Market: 8 Ways to Improve Trading Psychology in 2022</h4>
                                <p>Do you ever feel like you&#x27;re just not cut out for trading?</p>
                            </div>
                            <div class="byline-lockup">
                                <img src="https://uploads-ssl.webflow.com/630df394ff44d46eec4df587/63372413d9b4fd336ef3d0e3_6271ad37dd0dbb548de9404b_62657069b08454c39a14595a_25.png" loading="lazy" alt="" class="byline-author-picture" />
                                <p class="dark-dimmed-text">{{ env('APP_NAME')  }} Team</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div role="navigation" aria-label="List" class="w-pagination-wrapper pagination w-clearfix"></div>
            </div>
        </div>
    </div>
@endsection
