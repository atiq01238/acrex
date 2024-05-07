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
            <div class="hd-3" style="font-size: 2.4vw">ACREX current yield</div>
            <div class="hd-1">2.50-2.50%</div>
            <div class="text" style="width: 80%;font-size: 2.8vw">Quantitative income requires at least the
                deposit amount to reach 10USDT</div>
            {{-- <img src="{{ url('assets/svg/top-icon.svg') }}" class="b-img-2"> --}}
            <div>
                <div class="records-btn btn btn-active" onclick="window.location.href='/recharge'">Deposit</div>
            </div>
            <img src="{{ url('assets/svg/bitcoin-icon.svg') }}" class="b-img-1">
        </div>



        <div class="basic-frame" style="margin-bottom: 30vh;">
            <div class="btn btn-active copy-btn gray-btn" style="margin: 2vh 0;" id="gray-btn">No trading permission yet</div>
            <div class="text" style="font-size: 2.4vw; text-align:center;">Number of remaining transactions today: 0</div>
            <div class="btn btn-active copy-btn gray-btn" style="margin: 2vh 0;" id="gray-btn-2">END.</div>

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
                        <img src="{{ url('assets/svg/trade-2.svg') }}">
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
                        <img src="{{ url('assets/svg/share-2.svg') }}">
                    </div>
                    <div class="menu-txt">Share Freinds</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/mine') }}" class="ft-btn">
                    <div class="menu-img">
                        <img src="{{ url('assets/svg/mine-2.svg') }}">
                    </div>
                    <div class="menu-txt">Mine</div>
                </a>
            </li>
        </ul>
    </footer>
</body>

</html>
