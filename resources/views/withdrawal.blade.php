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
            <div class="page-txt">Withdrawal</div>
            <div class="arrow-icon-2">
                <img src="{{ url('assets/svg/link-arrow.svg') }}" alt="">
            </div>
        </div>
        <div class="basic-frame gradient-frame withdrawal-frame">

            <div>
                <div class="hd-3">Widthrawable</div>
                <span style="font-size: 4vw;">0.00</span><span class="usdt">USDT</span>
            </div>
            <div>
                <div class="records-btn btn btn-active">Records</div>
            </div>
        </div>

        <div class="basic-frame">
            <div class="text">
                Withdraw once a day, calculated from 00:00:00-23:59:59 EST
            </div>
        </div>

        <div class="basic-frame ern-rpt">
            <div>
                <li>Need traded: <b>0</b></li>
                <li>Daily withdrawals: <b>1</b></li>
                <li>Allow withdrawals: <b>Yes</b></li>
            </div>
            <div>
                <li>Already traded: <b>0</b></li>
                <li>No of withdrawals: <b>0</b></li>
                <li>Minimum withdrawals: <b>1</b></li>
            </div>
        </div>

        <div class="basic-frame page-frame">
            <div class="page-txt" style="font-size: 3vw">Choose withdrawal account</div>
            <div class="arrow-icon" style="width:2.4vw">
                <img src="{{ url('assets/svg/arrow-icon-2.svg') }}" alt="">
            </div>

        </div>

        <div class="withdraw-amount"><input type="number" placeholder="Enter Withdrawal Amount"></div>
        <div class="btn btn-active copy-btn" style="margin: 2vh 0">Withdraw</div>



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
