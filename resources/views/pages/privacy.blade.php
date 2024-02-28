@extends('pages.layout.app')
@section('content')

    <div class="section gradient-2">

        @include('pages.layout.header')

    </div>

    <div class="section">
        <div class="container giant-top">
            <div class="_8-column">
                <div id="w-node-_8b143f22-0ff3-3d5c-8cfe-d485a8f08d15-2f9a8be8" class="hero-center">
                    <h2>{{ env('APP_NAME')  }} Privacy Policy</h2>
                </div>
            </div>
        </div>
        <div class="container large-top hero-bottom">
            <h4 style="font-weight: bolder">PRIVACY POLICY</h4>
            <p>This privacy notice discloses the privacy practices for {{ env('APP_NAME')  }} LLC.
                {{ env('APP_NAME')  }} (“us”, “we”, or “our”) operates the www.{{ env('APP_NAME')  }}.com</p>
            <p>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data.</p>
            <p>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy.</p>
            <p>This privacy notice applies solely to information collected by this web site. It will notify you of the following:</p>
            <ol>
                <li>What personally identifiable information is collected from you through the web site, how it is used and with whom it may be shared.</li>
                <li>What choices are available to you regarding the use of your data.</li>
                <li>The security procedures in place to protect the misuse of your information.</li>
                <li>How you can correct any inaccuracies in the information.</li>
            </ol>
            <h4 style="font-weight: bolder">Information Collection, Use, and Sharing</h4>
            <p>We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us when using the site. We will not sell or rent this information to anyone.</p>
            <p>We use your information to provide the services of the site. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request. Specifically:</p>
            <ul>
                <li>If you explicitly share a trade publicly, certain information about your trade will be made available on the site (you can see examples by looking at other shared trades on the site). If you do not wish this information to be public, please do not share trades.</li>
            </ul>
            <p>Unless you ask us not to, we may contact you via email in the future to tell you about specials, new products or services, or changes to this privacy policy.</p>
            <p>We collect statistical information on web traffic using a third party web analytics service; this may use a cookie on your computer, but no user-identifiable information is ever shared with this third party other than "typical" web analytics such as IP address, browser, etc.
            </p>
            <p>In no event will your individual data be made available to anyone, nor will any personally identifiable information be made available or associated with any of the data.
            </p>
            <h4 style="font-weight: bolder">Your Access to and Control Over Information</h4>
            <p>You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via email at support@{{ env('APP_NAME')  }}.com</p>
            <ul>
                <li>Have us delete any data we have about you.</li>
                <li>Express any concern you have about our use of your data.</li>
            </ul>
            <h4 style="font-weight: bolder">Security</h4>
            <p>We take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline.
            </p>
            <p>Wherever we collect sensitive information (such as your trade data), that information is encrypted and transmitted to us in a secure way.
            </p>
            <p>If you feel that we are not abiding by this privacy policy, please contact us immediately via email at support@{{ env('APP_NAME')  }}.com
            </p>


        </div>
    </div>


@endsection
