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
            <img src="{{ asset('assets/images/logo.png') }}" alt="ACREX">
        </a>
        <div class="nav-item-container">
            <div class="nav-item app-btn">
                <img src="{{ asset('assets/svg/app.svg') }}"> App
            </div>
            <div class="nav-item nav-icon-container">
                <img src="{{ asset('assets/svg/lang.svg') }}">
                <img src="{{ asset('assets/svg/bell.svg') }}">
                <img src="{{ asset('assets/svg/envelop.svg') }}">
            </div>
        </div>
    </nav>


    <div class="main-content">
        <div class="btn-section-2">
            <div class="btn" onclick="window.location.href='/dashboard'">SMART INVESTMENT</div>
            <div class="btn btn-active  " onclick="window.location.href='/crd-funding'">Crowdfunding</div>
            <div class="btn " onclick="window.location.href='/records'">Record</div>
        </div>




        <div class="big-btn">
            <div class="btn btn-active ">
                <div class="btn-img"><img src="{{ asset('assets/svg/wt-wallet.svg') }}" alt=""></div> DEPOSIT
            </div>
            <div class="btn btn-active ">
                <div class="btn-img"><img src="{{ asset('assets/svg/wt-withdraw.svg') }}" alt=""> </div>WITHDRAWAL
            </div>
        </div>

        <div class="product-container">
            <div class="product-box">
                <div class="prd-img">
                    <img src="{{ asset('assets/svg/product.svg') }}" alt="">
                </div>
                <div class="prd-title">1A-Short-term
                    contract robot</div>
                <div class="gry-p">Daily rate:1.40-1.40%</div>
                <div class="gry-p">Cycle:3 day</div>
            </div>
            <div class="product-box">
                <div class="prd-img">
                    <img src="{{ asset('assets/svg/product.svg') }}" alt="">
                </div>
                <div class="prd-title">2A-Short-term
                    contract robot</div>
                <div class="gry-p">Daily rate:1.40-1.40%</div>
                <div class="gry-p">Cycle:3 day</div>
            </div>
            <div class="product-box">
                <div class="prd-img">
                    <img src="{{ asset('assets/svg/product.svg') }}" alt="">
                </div>
                <div class="prd-title">3A-Short-term
                    contract robot</div>
                <div class="gry-p">Daily rate:1.40-1.40%</div>
                <div class="gry-p">Cycle:3 day</div>
            </div>
            <div class="product-box">
                <div class="prd-img">
                    <img src="{{ asset('assets/svg/product.svg') }}" alt="">
                </div>
                <div class="prd-title">4A-Short-term
                    contract robot</div>
                <div class="gry-p">Daily rate:1.40-1.40%</div>
                <div class="gry-p">Cycle:3 day</div>
            </div>
            <div class="product-box">
                <div class="prd-img">
                    <img src="{{ asset('assets/svg/product.svg') }}" alt="">
                </div>
                <div class="prd-title">5A-Short-term
                    contract robot</div>
                <div class="gry-p">Daily rate:1.40-1.40%</div>
                <div class="gry-p">Cycle:3 day</div>
            </div>
            <div class="product-box">
                <div class="prd-img">
                    <img src="{{ asset('assets/svg/product.svg') }}" alt="">
                </div>
                <div class="prd-title">6A-Short-term
                    contract robot</div>
                <div class="gry-p">Daily rate:1.40-1.40%</div>
                <div class="gry-p">Cycle:3 day</div>
            </div>
            <div class="product-box">
                <div class="prd-img">
                    <img src="{{ asset('assets/svg/product.svg') }}" alt="">
                </div>
                <div class="prd-title">7A-Short-term
                    contract robot</div>
                <div class="gry-p">Daily rate:1.40-1.40%</div>
                <div class="gry-p">Cycle:3 day</div>
            </div>
            <div class="product-box">
                <div class="prd-img">
                    <img src="{{ asset('assets/svg/product.svg') }}" alt="">
                </div>
                <div class="prd-title">8A-Short-term
                    contract robot</div>
                <div class="gry-p">Daily rate:1.40-1.40%</div>
                <div class="gry-p">Cycle:3 day</div>
            </div>
            <div class="product-box">
                <div class="prd-img">
                    <img src="{{ asset('assets/svg/product.svg') }}" alt="">
                </div>
                <div class="prd-title">9A-Short-term
                    contract robot</div>
                <div class="gry-p">Daily rate:1.40-1.40%</div>
                <div class="gry-p">Cycle:3 day</div>
            </div>
            <div class="product-box">
                <div class="prd-img">
                    <img src="{{ asset('assets/svg/product.svg') }}" alt="">
                </div>
                <div class="prd-title">10A-Short-term
                    contract robot</div>
                <div class="gry-p">Daily rate:1.40-1.40%</div>
                <div class="gry-p">Cycle:3 day</div>
            </div>
            <div class="product-box">
                <div class="prd-img">
                    <img src="{{ asset('assets/svg/product.svg') }}" alt="">
                </div>
                <div class="prd-title">11A-Short-term
                    contract robot</div>
                <div class="gry-p">Daily rate:1.40-1.40%</div>
                <div class="gry-p">Cycle:3 day</div>
            </div>
        </div>




    </div>


    <footer>
        <ul>
            <li>
                <a href="{{ url('/') }}" class="ft-btn">
                    <div class="menu-img">
                        <img src="{{ asset('assets/svg/home.svg') }}">
                    </div>
                    <div class="menu-txt  active-gradient">Home</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/trade') }}" class="ft-btn">
                    <div class="menu-img">
                        <img src="{{ asset('assets/svg/trade.svg') }}">
                    </div>
                    <div class="menu-txt">Trade</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/dashboard') }}" class="ft-btn invest-btn">
                    <div class="menu-img">
                        <img src="{{ asset('assets/svg/invest.svg') }}">
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ url('/share') }}" class="ft-btn">
                    <div class="menu-img">
                        <img src="{{ asset('assets/svg/share-2.svg') }}">
                    </div>
                    <div class="menu-txt">Share Freinds</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/mine') }}" class="ft-btn">
                    <div class="menu-img">
                        <img src="{{ asset('assets/svg/mine-2.svg') }}">
                    </div>
                    <div class="menu-txt">Mine</div>
                </a>
            </li>
        </ul>
    </footer>
</body>

</html>
