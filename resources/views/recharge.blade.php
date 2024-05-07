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

        <div class="basic-frame page-frame">
            <div class="arrow-icon">
                <img src="{{ url('assets/svg/link-arrow.svg') }}" alt="">
            </div>
            <div class="page-txt">Recharge</div>
            <div class="arrow-icon-2">
                <img src="{{ url('assets/svg/link-arrow.svg') }}" alt="">
            </div>
        </div>

        <div class="multi-container">
            <div class="basic-frame gradient-frame"
                style="margin:0;  border-bottom-right-radius:0;border-bottom-left-radius:0;">
                <div class="hd-1 " style="font-size: 2.8vw">Transfer to Smart Account</div>
                <div class="arw-img"><img src="{{ url('assets/svg/arw.svg') }}" alt=""></div>
            </div>
            <div class="basic-frame" style="margin:0;  border-top-right-radius:0; border-top-left-radius:0;">
                <div class="text" style="font-size: 2.5vw;">1. Deposit into this account for pledge mining. After 24
                    hours from the first deposit time, you can manually receive
                    the income an return the principle when it expires.</div>


            </div>
        </div>
        <div class="multi-container">
            <div class="basic-frame gradient-frame"
                style="margin:0;  border-bottom-right-radius:0;border-bottom-left-radius:0;">
                <div class="hd-1 " style="font-size: 2.8vw">Transfer to Wallet Account</div>
                <div class="arw-img"><img src="{{ url('assets/svg/arw.svg') }}" alt=""></div>
            </div>
            <div class="basic-frame" style="margin:0;  border-top-right-radius:0; border-top-left-radius:0;">
                <div class="text" style="font-size: 2.5vw;">Depositing into this account can be used to invest in
                    crownfunding projects. Different products have different
                    profit ratios. For details, please refer to the project product
                    introductions.</div>


            </div>
        </div>
    </div>
    <footer>
        <ul>
            <li>
                <a href="{{ url('/') }}" class="ft-btn">
                    <div class="menu-img">
                        <img src="{{ url('assets/svg/home.svg') }}">
                    </div>
                    <div class="menu-txt  active-gradient">Home</div>
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
