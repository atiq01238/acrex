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

        <div class="basic-frame page-frame" onclick="window.location.href='/recharge'">
            <div class="arrow-icon">
                <img src="{{ url('assets/svg/link-arrow.svg') }}" alt="">
            </div>
            <div class="page-txt">Recharge</div>
            <div>
                <a href="#">Records</a>
            </div>
        </div>
        <style>
            .item-pt-1{
                flex-direction: row;
            }
        </style>
        <div class="inner-section">
            <div class="item">
                <div class="item-pt-1">
                    <div class="img-cont">
                        <img src="{{ url('assets/svg/tether.svg') }}">

                    </div>
                    <div>
                        <div class="btc-usd">bep20-USDT</div>
                        <div class="btcn">Exchange rate 1 : 1 USDT</div>
                    </div>
                </div>
                <div class="item-pt-2">
                   <div class="records-btn btn btn-active" style="border: none; border-radius: 2.4vw">Choose</div>
                </div>
            </div>
            <div class="item">
                <div class="item-pt-1">
                    <div class="img-cont">
                        <img src="{{ url('assets/svg/tether.svg') }}">

                    </div>
                    <div>
                        <div class="btc-usd">trc20-USDT</div>
                        <div class="btcn">Exchange rate 1 : 1 USDT</div>
                    </div>
                </div>
                <div class="item-pt-2">
                   <div class="records-btn btn btn-active" style="border: none; border-radius: 2.4vw">Choose</div>
                </div>
            </div>
            <div class="item">
                <div class="item-pt-1">
                    <div class="img-cont">
                        <img src="{{ url('assets/svg/xrp.svg') }}">

                    </div>
                    <div>
                        <div class="btc-usd">XRP</div>
                        <div class="btcn">Exchange rate 1 : 559.4 USDT</div>
                    </div>
                </div>
                <div class="item-pt-2">
                   <div class="records-btn btn btn-active" style="border: none; border-radius: 2.4vw">Choose</div>
                </div>
            </div>
            <div class="item">
                <div class="item-pt-1">
                    <div class="img-cont">
                        <img src="{{ url('assets/svg/trx.svg') }}">

                    </div>
                    <div>
                        <div class="btc-usd">TRX</div>
                        <div class="btcn">Exchange rate 1 : 0.1111333 USDT</div>
                    </div>
                </div>
                <div class="item-pt-2">
                   <div class="records-btn btn btn-active" style="border: none; border-radius: 2.4vw">Choose</div>
                </div>
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
