@extends('pages.layout.app')
@section('content')

    <div class="section gradient-1 no-overflow">

        @include('pages.layout.header')

        <div class="container giant-top medium-bottom">
            <div class="_16-column">
                <div id="w-node-cc1bda55-6712-de20-3a79-63aa4694e826-f84df573" class="hero-center">
                    <div class="hero-stars-lockup-1-center _1-5em-bottom-margin">
                        <div class="stars-1">
                            <div class="full-green-star"></div>
                            <div class="full-green-star"></div>
                            <div class="full-green-star"></div>
                            <div class="full-green-star"></div>
                            <div class="full-green-star"></div>
                        </div>
                        <div>4.7 • <a href="" target="_blank" class="white-text">TrustPilot Reviews</a>
                        </div>
                    </div>
                    <h1 class="white-text _375em-bottom-margin">Become a Profitable shareholder and Trader</h1>
                    <div class="hero-subtitle-container">
                        <h3 class="light-paragraph-text _1-5em-bottom-margin">Your all in one trading journal to help you track, analyze and improve.</h3>
                    </div>
                    <div class="_2-button-lockup">
                        <a href="{{ route('register') }}" target="_blank" class="medium-button rich-purple w-button">Create an Account <span class="right-arrow-white">&gt;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <img src="{{ asset('img/tesla3.jpg') }}" loading="lazy" alt="" class="hero-image-2" />
        </div>
    </div>

    <div class="section">
        <div class="container giant-top">
            <div class="_8-column">
                <div id="w-node-_8dec3d03-4f0f-8eaa-2d12-e880ab8b8cb5-f84df573" class="hero-center">
                    <h5 class="_1-5em-bottom-margin">
                        <span class="rich-purple-text">WHAT IS {{ env('APP_NAME')  }}?</span>
                    </h5>
                    <h2 class="_5em-bottom-margin">More Than a Trading Journal</h2>
                    <div class="hero-subtitle-container">
                        <h3 class="_1-5em-bottom-margin">Gain deeper insights into where you’re messing up, learn how to drive sustainable profits, and get reports to focus on strategies that work. <br />
                        </h3>
                    </div>
                    <div class="_2-button-lockup">
                        <a href="{{ route('register') }}" target="_blank" class="medium-button rich-purple w-button">Sign Up <span class="right-arrow-white">&gt;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="section">
        <div class="container hero-top">
            <div class="_8-column">
                <div id="w-node-c855d768-7719-f18a-a3c4-220f6da454bc-f84df573" class="hero-center">
                    <h2 class="heading">Find your winning edge in {{ env('APP_NAME')  }}</h2>
                </div>
            </div>
        </div>
        <div class="container giant-top">
            <div class="_8-column">
                <div id="w-node-_7d4994c4-cda0-146c-5027-3c0feaec8d41-f84df573" class="content-block-text-container">
                    <div class="_3em-bottom-margin">
                        <h3 class="enlarged-bold-h3 _5em-bottom-margin">Focus on the right stats</h3>
                        <h3 class="_1-5em-bottom-margin">Analyze your trading from a first glance to being able to take a deeper look at whats working and what isn&#x27;t.</h3>
                        <div class="icon-text-lockup-1 _2-5em-bottom-margin">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6331f6e29f1ea8e9d3016e0c_icons8-edit-property (1).svg" loading="lazy" id="w-node-_02ff7f03-2587-a09e-2b7f-713160b01e44-f84df573" alt="" class="small-icon" />
                            <div>
                                <p class="dark-bold-enlarged-paragraph _25em-bottom-margin">Trading Journal</p>
                                <p>Understand if you&#x27;re risking too much on your trade, how you&#x27;re performing for the month, what bad patterns you keep repeating, and more.</p>
                            </div>
                        </div>
                        <div class="icon-text-lockup-1">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6331f6e2a2e59928287edcbb_icons8-web-analytics.svg" loading="lazy" id="w-node-_518d9b19-8963-1d2b-6444-47e418dd4227-f84df573" alt="" class="small-icon" />
                            <div>
                                <p class="dark-bold-enlarged-paragraph _25em-bottom-margin">In Depth Trade Analytics</p>
                                <p>Get a clear picture of where winning trade opportunities lie. Track each trade with the right metrics.</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('register') }}" target="_blank" class="text-button w-button">Sign Up <span class="solid-icons-override-right"></span>
                    </a>
                </div>
                <div id="w-node-_7d4994c4-cda0-146c-5027-3c0feaec8d4b-f84df573" class="content-image-right">
                    <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/632a4c514d9fe9cb44c5ad16_section1.png" loading="lazy" alt="" class="content-section-side-image-right" />
                </div>
            </div>
        </div>
        <div class="container hero-plus-top">
            <div class="_8-column">
                <div id="w-node-bd975e25-5829-2d83-c94f-a23de674f156-f84df573" class="content-image-left">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">World markets</span></a> by TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "showChart": true,
                                "locale": "en",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": true,
                                "showFloatingTooltip": false,
                                "width": "400",
                                "height": "660",
                                "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                                "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                                "gridLineColor": "rgba(240, 243, 250, 0)",
                                "scaleFontColor": "rgba(106, 109, 120, 1)",
                                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                                "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                                "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                                "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                                "tabs": [
                                {
                                    "title": "Indices",
                                    "symbols": [
                                        {
                                            "s": "NASDAQ:TSLA"
                                        },
                                        {
                                            "s": "NASDAQ:AAPL"
                                        },
                                        {
                                            "s": "NASDAQ:AMZN"
                                        },
                                        {
                                            "s": "NASDAQ:META"
                                        }
                                    ],
                                    "originalTitle": "Indices"
                                },
                                {
                                    "title": "Futures",
                                    "symbols": [
                                        {
                                            "s": "CME_MINI:ES1!",
                                            "d": "S&P 500"
                                        },
                                        {
                                            "s": "CME:6E1!",
                                            "d": "Euro"
                                        },
                                        {
                                            "s": "COMEX:GC1!",
                                            "d": "Gold"
                                        },
                                        {
                                            "s": "NYMEX:CL1!",
                                            "d": "Crude Oil"
                                        },
                                        {
                                            "s": "NYMEX:NG1!",
                                            "d": "Natural Gas"
                                        },
                                        {
                                            "s": "CBOT:ZC1!",
                                            "d": "Corn"
                                        }
                                    ],
                                    "originalTitle": "Futures"
                                },
                                {
                                    "title": "Bonds",
                                    "symbols": [
                                        {
                                            "s": "CME:GE1!",
                                            "d": "Eurodollar"
                                        },
                                        {
                                            "s": "CBOT:ZB1!",
                                            "d": "T-Bond"
                                        },
                                        {
                                            "s": "CBOT:UB1!",
                                            "d": "Ultra T-Bond"
                                        },
                                        {
                                            "s": "EUREX:FGBL1!",
                                            "d": "Euro Bund"
                                        },
                                        {
                                            "s": "EUREX:FBTP1!",
                                            "d": "Euro BTP"
                                        },
                                        {
                                            "s": "EUREX:FGBM1!",
                                            "d": "Euro BOBL"
                                        }
                                    ],
                                    "originalTitle": "Bonds"
                                },
                                {
                                    "title": "Forex",
                                    "symbols": [
                                        {
                                            "s": "FX:EURUSD",
                                            "d": "EUR/USD"
                                        },
                                        {
                                            "s": "FX:GBPUSD",
                                            "d": "GBP/USD"
                                        },
                                        {
                                            "s": "FX:USDJPY",
                                            "d": "USD/JPY"
                                        },
                                        {
                                            "s": "FX:USDCHF",
                                            "d": "USD/CHF"
                                        },
                                        {
                                            "s": "FX:AUDUSD",
                                            "d": "AUD/USD"
                                        },
                                        {
                                            "s": "FX:USDCAD",
                                            "d": "USD/CAD"
                                        }
                                    ],
                                    "originalTitle": "Forex"
                                }
                            ]
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
{{--                    <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/632a4c51371ecd05fb449a8a_section2.png" loading="lazy" alt="" class="content-section-side-image-left" />--}}
                </div>
                <div id="w-node-bd975e25-5829-2d83-c94f-a23de674f143-f84df573" class="content-block-text-container">
                    <div class="_3em-bottom-margin">
                        <h3 class="enlarged-bold-h3 _5em-bottom-margin">Optimize performance with ease</h3>
                        <h3 class="_1-5em-bottom-margin">Explore all possibilities that level up your profitability. See what statistically works so you can make data driven decisions and trade with confidence.</h3>
                        <div class="icon-text-lockup-1 _2-5em-bottom-margin">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6331f6e289d6176b33518675_icons8-repeat.svg" loading="lazy" id="w-node-c00e4137-0273-b1bc-2604-4a86135bcec6-f84df573" alt="" class="small-icon" />
                            <div>
                                <p class="dark-bold-enlarged-paragraph _25em-bottom-margin">Trade Feedback</p>
                                <p>Giving away profits too soon? Trading with hesitation? Are you risking more than you can afford to lose? Understand exactly whats holding you back with {{ env('APP_NAME')  }} feedback,</p>
                            </div>
                        </div>
                        <div class="icon-text-lockup-1">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6331f6e367a79f4607505871_icons8-graph-report (1).svg" loading="lazy" id="w-node-c00e4137-0273-b1bc-2604-4a86135bcecd-f84df573" alt="" class="small-icon" />
                            <div>
                                <p class="dark-bold-enlarged-paragraph _25em-bottom-margin">Drilled Down Reporting</p>
                                <p>What&#x27;s your worst trading day? Which mistake is causing the most losses? Are you losing too much money on poor risk management? Your reports hold all the answers.</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('register') }}" target="_blank" class="text-button w-button">Sign Up <span class="solid-icons-override-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container hero-plus-top hero-bottom">
            <div class="_8-column">
                <div id="w-node-_1760c4c7-acd1-c7a2-620e-39e52741a8c5-f84df573" class="content-block-text-container">
                    <div class="_3em-bottom-margin">
                        <h3 class="enlarged-bold-h3 _5em-bottom-margin">Fine-tune your strategy</h3>
                        <h3 class="_1-5em-bottom-margin">With all the right resources, you can discover the weaknesses in your strategy to build a stronger trading system.</h3>
                        <div class="icon-text-lockup-1 _2-5em-bottom-margin">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6331f6e3f67a4cae7e84f444_icons8-memories.svg" loading="lazy" id="w-node-_9ee5f424-0e8e-68c0-4892-13cf7909e85c-f84df573" alt="" class="small-icon" />
                            <div>
                                <p class="dark-bold-enlarged-paragraph _25em-bottom-margin">Replay Trades</p>
                                <p>Synced with your trading data, you can replay your trades within {{ env('APP_NAME')  }} to understand where you went right or wrong.</p>
                            </div>
                        </div>
                        <div class="icon-text-lockup-1">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6331f6e3b3555717a6cad4bb_icons8-administrative-tools.svg" loading="lazy" id="w-node-_9ee5f424-0e8e-68c0-4892-13cf7909e863-f84df573" alt="" class="small-icon" />
                            <div>
                                <p class="dark-bold-enlarged-paragraph _25em-bottom-margin">Advanced Trade Tracking</p>
                                <p>Visually navigate through your entry and exit trading points, track your setups and mistakes, jot down notes for each trade, and more advanced tracking.</p>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('register') }}" target="_blank" class="text-button w-button">Sign Up <span class="solid-icons-override-right"></span>
                    </a>
                </div>
                <div id="w-node-_1760c4c7-acd1-c7a2-620e-39e52741a8d8-f84df573" class="content-image-right">
                    <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6331fb41b515a66122681a6a_section3-b.png" loading="lazy" alt="" class="content-section-side-image-right" />
                </div>
            </div>
        </div>
    </div>
    <div class="section gradient-4">
        <div class="container hero-top large-bottom">
            <div data-current="Feature 1" data-easing="ease" data-duration-in="0" data-duration-out="0" class="tabs w-tabs">
                <div id="w-node-_49e32fb7-c2d7-6ba5-c006-7cd3557b1cb9-f84df573" class="tabs-menu-no-wrap w-tab-menu">
                    <a data-w-tab="Feature 1" class="tab-link-no-wrap w-inline-block w-tab-link w--current">
                        <div>Analytics</div>
                    </a>
                    <a data-w-tab="Feature 2" class="tab-link-no-wrap w-inline-block w-tab-link">
                        <div>Journaling</div>
                    </a>
                    <a data-w-tab="Feature 3" class="tab-link-no-wrap w-inline-block w-tab-link">
                        <div>Reporting</div>
                    </a>
                    <a data-w-tab="Feature 4" class="tab-link-no-wrap w-inline-block w-tab-link">
                        <div>Replay</div>
                    </a>
                    <a data-w-tab="Feature 5" class="tab-link-no-wrap w-inline-block w-tab-link">
                        <div>Education</div>
                    </a>
                </div>
                <div id="w-node-_49e32fb7-c2d7-6ba5-c006-7cd3557b1cd8-f84df573" class="w-tab-content">
                    <div data-w-tab="Feature 1" class="tab-pane w-tab-pane w--tab-active">
                        <div class="tab-pane-container">
                            <div id="w-node-_49e32fb7-c2d7-6ba5-c006-7cd3557b1cdb-f84df573" class="center-align-text">
                                <h3 class="enlarged-bold-h3 _5em-bottom-margin">Easy and accurate trade tracking</h3>
                                <h3> In depth analytics of each trade. From entries and exits, to risk management, setups, and more.
                                </h3>
                            </div>
                            <div id="w-node-_49e32fb7-c2d7-6ba5-c006-7cd3557b1ce6-f84df573" class="tabs-image feature-1"></div>
                        </div>
                    </div>
                    <div data-w-tab="Feature 2" class="tab-pane w-tab-pane">
                        <div class="tab-pane-container">
                            <div id="w-node-beff861b-418f-5303-bb8b-8244de55b6e4-f84df573" class="center-align-text">
                                <h3 class="enlarged-bold-h3 _5em-bottom-margin">Personalized Journal</h3>
                                <h3>Powerful journaling that allows you to take notes, tag trades, and understand how you are performing overall.</h3>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Feature 3" class="tab-pane w-tab-pane">
                        <div class="tab-pane-container">
                            <div id="w-node-a37a26da-02d7-f0be-d5d2-9157ca0d3be4-f84df573" class="center-align-text">
                                <h3 class="enlarged-bold-h3 _5em-bottom-margin">Drilled Down Reporting</h3>
                                <h3>Reports to help you gauge your strengths and weaknesses. Discover whats working and what&#x27;s not to implement into your strategy.</h3>
                            </div>
                            <div id="w-node-a37a26da-02d7-f0be-d5d2-9157ca0d3be9-f84df573" class="tabs-image feature-3"></div>
                        </div>
                    </div>
                    <div data-w-tab="Feature 4" class="tab-pane w-tab-pane">
                        <div class="tab-pane-container">
                            <div id="w-node-d8d598d3-bcfe-3d89-ec36-1e827a8f241e-f84df573" class="center-align-text">
                                <h3 class="enlarged-bold-h3 _5em-bottom-margin">Replay your trades within {{ env('APP_NAME')  }}</h3>
                                <h3>Replay your trades second by second using the new market replay simulator. Understand your strengths and weaknesses from the trade to find the flaws in your execution.</h3>
                            </div>
                        </div>
                    </div>
                    <div data-w-tab="Feature 5" class="tab-pane w-tab-pane">
                        <div class="tab-pane-container">
                            <div id="w-node-_0f81162d-2cdb-c010-f625-d6f942fa1b1a-f84df573" class="center-align-text">
                                <h3 class="enlarged-bold-h3 _5em-bottom-margin">Level up your learning</h3>
                                <h3>All of the educational material to sharpen your skills and discover what matters most to your trading techniques.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section gradient-3">
        <div class="container hero-top">
            <div class="_8-column">
                <div id="w-node-_8b143f22-0ff3-3d5c-8cfe-d485a8f08d15-f84df573" class="hero-center">
                    <h2 class="white-text">Start focusing on what works for you</h2>
                </div>
            </div>
        </div>
        <div class="container large-top giant-bottom">
            <div class="_3-2-1-1-grid">
                <div class="dark-content-box">
                    <div>
                        <div class="_1-25em-bottom-margin">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6329fcbde23c2ceabca6c190_icons8-edit-property.svg" loading="lazy" width="24" alt="" class="content-box-icon-image" />
                        </div>
                        <p class="white-bold-enlarged-paragraph _25em-bottom-margin">Stop trading with hesitation</p>
                        <p>Allow {{ env('APP_NAME')  }} to trade for you and save you from the red days.</p>
                    </div>
                    <div class="content-box-bottom-button"></div>
                </div>
                <div class="dark-content-box">
                    <div>
                        <div class="_1-25em-bottom-margin">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6329fcbd893785bccb507349_icons8-graph-report.svg" loading="lazy" width="24" alt="" class="content-box-icon-image" />
                        </div>
                        <p class="white-bold-enlarged-paragraph _25em-bottom-margin">Recover from the red market</p>
                        <p>Recover all your losses with {{ env('APP_NAME')  }}.</p>
                    </div>
                    <div class="content-box-bottom-button"></div>
                </div>
                <div class="dark-content-box">
                    <div>
                        <div class="_1-25em-bottom-margin">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6329fcbd1a56573decfb4aa5_icons8-customer-support.svg" loading="lazy" width="24" alt="" class="content-box-icon-image" />
                        </div>
                        <p class="white-bold-enlarged-paragraph _25em-bottom-margin">Scale up your trading fast.</p>
                        <p>Depending on what you need to improve, different features will help you get there.</p>
                    </div>
                    <div class="content-box-bottom-button"></div>
                </div>
                <div class="dark-content-box">
                    <div>
                        <div class="_1-25em-bottom-margin">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6315ee7b3ef4cf1e3b7f5541_icons8-stocks.svg" loading="lazy" width="24" alt="" class="content-box-icon-image" />
                        </div>
                        <p class="white-bold-enlarged-paragraph _25em-bottom-margin">Understand your best trade setup</p>
                        <p>Sticking to strategy that work for you is the key to building a consistent system. {{ env('APP_NAME')  }} strategies work perfectly.</p>
                    </div>
                    <div class="content-box-bottom-button"></div>
                </div>
                <div class="dark-content-box">
                    <div>
                        <div class="_1-25em-bottom-margin">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6329fcbd18cf4340745a710d_icons8-diploma.svg" loading="lazy" width="24" alt="" class="content-box-icon-image" />
                        </div>
                        <p class="white-bold-enlarged-paragraph _25em-bottom-margin">Discover your best or worst days</p>
                        <p>Are you typically giving away your profits and capital share’s investment on red days? Use {{ env('APP_NAME')  }} today and start earning a minimum of 2% and more profits commission daily and start saving your green days.</p>
                    </div>
                    <div class="content-box-bottom-button"></div>
                </div>
                <div class="dark-content-box">
                    <div>
                        <div class="_1-25em-bottom-margin">
                            <img src="https://uploads-ssl.webflow.com/630df394ff44d46a174df570/6329fcbdb36b4428a2bf1689_icons8-people-working-together.svg" loading="lazy" width="24" alt="" class="content-box-icon-image" />
                        </div>
                        <p class="white-bold-enlarged-paragraph _25em-bottom-margin">Improve your risk management</p>
                        <p>No more excessive red days. Use {{ env('APP_NAME')  }} strategies to minimize your risk and save your Green Day’s.</p>
                    </div>
                    <div class="content-box-bottom-button"></div>
                </div>
            </div>
        </div>
        <div class="container hero-bottom">
            <div class="colourful-call-to-action-1">
                <div class="section gradient-5">
                    <div class="container large-top">
                        <div class="_8-column">
                            <div id="w-node-d2864bab-2d29-85a1-1854-6c0db4f1e3b6-f84df573" class="hero-center">
                                <div class="hero-stars-lockup-1-center _1-5em-bottom-margin">
                                    <div class="stars-1">
                                        <div class="full-green-star"></div>
                                        <div class="full-green-star"></div>
                                        <div class="full-green-star"></div>
                                        <div class="full-green-star"></div>
                                        <div class="full-green-star"></div>
                                    </div>
                                    <div>4.7 • <a href="" target="_blank" class="white-text">TrustPilot Reviews</a>
                                    </div>
                                </div>
                                <h3 class="enlarged-bold-h3 white-text _1em-bottom-margin">Thousands of traders have achieved their goals with the power of {{ env('APP_NAME')  }}</h3>
                                <div class="_2-button-lockup">
                                    <a href="{{ route('register') }}" target="_blank" class="medium-button rich-purple w-button">Sign Up <span class="right-arrow-white">&gt;</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container medium-top large-bottom">
                        <div class="_8-column">
                            <div id="w-node-ac1a3b68-1e6e-ac4d-f8f2-e65014e4314a-f84df573" class="content-box-no-border">
                                <div class="_1-5em-bottom-margin">
                                    <div class="_1em-bottom-margin">
                                        <div class="hero-stars-lockup-1">
                                            <div class="stars-1">
                                                <div class="full-green-star"></div>
                                                <div class="full-green-star"></div>
                                                <div class="full-green-star"></div>
                                                <div class="full-green-star"></div>
                                                <div class="full-green-star"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="dark-bold-enlarged-paragraph _25em-bottom-margin">The #1 trading software on the planet</p>
                                    <p>The #1 trading software on the planet! I love everything about {{ env('APP_NAME')  }}, and I’ve become a much better trader since I started using {{ env('APP_NAME')  }} consistently. I’m able to review my trades much better and can see everything clearly.</p>
                                </div>
                                <p class="smaller-text dark-dimmed-text">Anaselrahman Abdu • US</p>
                            </div>
                            <div id="w-node-_1984aa14-597c-5d4a-3eeb-8898725ece41-f84df573" class="content-box-no-border">
                                <div class="_1-5em-bottom-margin">
                                    <div class="_1em-bottom-margin">
                                        <div class="hero-stars-lockup-1">
                                            <div class="stars-1">
                                                <div class="full-green-star"></div>
                                                <div class="full-green-star"></div>
                                                <div class="full-green-star"></div>
                                                <div class="full-green-star"></div>
                                                <div class="full-green-star"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="dark-bold-enlarged-paragraph _25em-bottom-margin">{{ env('APP_NAME')  }} is the best tool for Journaling</p>
                                    <p>Since I began journaling on it, I&#x27;ve been able to see where my most common mistakes are and how I can actionably start improving. The platform is so easy to use and straight forward in providing the analytics you need in order to improve your trading. It&#x27;s literally the best tool for traders to use.</p>
                                </div>
                                <p class="smaller-text dark-dimmed-text">Nouman • Spain</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
