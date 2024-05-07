<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
    <title>ACREX Web App</title>
</head>

<body>
    <nav class="navbar">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ url('assets/images/logo.png') }}" alt="ACREX">
        </a>
        <div class="nav-item-container">
            <div class="nav-item app-btn">
                <img src="{{ url('assets/svg/app.svg') }}"> App
            </div>
            <div class="nav-item nav-icon-container">
                <img src="{{ url('assets/svg/lang.svg') }}">
                <img src="{{ url('assets/svg/bell.svg') }}">
                <img src="{{ url('assets/svg/envelop.svg') }}">
            </div>
        </div>
    </nav>
    <div class="main-content">


        <div class="basic-frame gradient-frame share-gradient-frame">
            <div class="hd-1">Invite your Contacts</div>
            <div class="text">Sign up and recharge to get great rewards </div>
            <img src="{{ url('assets/svg/bitcoin-icon.svg') }}" class="b-img-1">
            <img src="{{ url('assets/svg/top-icon.svg') }}" class="b-img-2">
        </div>
        <div class="basic-frame reward-frame">

            <div class="reward-p">Build a team and get great reward</div>
            <div class="btn btn-active">Invitation Reward</div>
        </div>


        <div class="basic-frame">
            <div class="code-qr-cont">
                <div class="code-box">
                    <div class="mbl-img"><img src="{{ url('assets/svg/mobile.svg') }}" alt=""></div>
                    <div style="font-size: 3.5vw;">Invite code</div>
                    <div class="user-code">982731</div>
                </div>

                <div class="qr-box">
                    <img src="{{ url('assets/svg/qr.svg') }}" alt="">
                </div>
            </div>

            <div class="referal-link"><input type="text" disabled value="https://Acrex/index.html#/register/781320">
            </div>
            <div class="btn btn-active copy-btn">Copy Link</div>
            <div class="text share-to">Share to</div>

            <div class="social-media-links">

                <div class="line"></div>
                <div class="social-icons">
                    <a href="#"><img src="{{ url('assets/svg/fb-icon.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ url('assets/svg/insta-icon.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ url('assets/svg/twitter-icon.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ url('assets/svg/wa-icon.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ url('assets/svg/yt.svg') }}" alt=""></a>
                    <a href="#"><img src="{{ url('assets/svg/tg.svg') }}" alt=""></a>

                </div>
                <div class="line"></div>
            </div>


        </div>
    </div>


    <footer>
        <ul>
            <li>
                <a href="{{ url('/') }}" class="ft-btn">
                    <div class="menu-img">
                        <img src="{{ url('assets/svg/home-2.svg') }}">
                    </div>
                    <div class="menu-txt">Home</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/trade') }}" class="ft-btn">
                    <div class="menu-img">
                        <img src="{{ url('assets/svg/trade.svg') }}">
                    </div>
                    <div class="menu-txt">Trade</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/dashboard') }}" class="ft-btn invest-btn">
                    <div class="menu-img">
                        <img src="{{ url('assets/svg/invest.svg') }}">
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ url('/share') }}" class="ft-btn">
                    <div class="menu-img">
                        <img src="{{ url('assets/svg/share-3.svg') }}">
                    </div>
                    <div class="menu-txt active-gradient">Share Freinds</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/mine') }}" class="ft-btn">
                    <div class="menu-img">
                        <img src="{{ url('assets/svg/mine-2.svg') }}">
                    </div>
                    <div class="menu-txt ">Mine</div>
                </a>
            </li>
        </ul>
    </footer>
</body>

</html>
