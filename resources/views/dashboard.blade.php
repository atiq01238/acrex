<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
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
            <div class="btn btn-active" onclick="window.location.href= '/dashboard'">SMART INVESTMENT</div>
            <div class="btn " onclick="window.location.href= '/crd-funding'">Crowdfunding</div>
            <div class="btn " onclick="window.location.href= '/records'">Record</div>
        </div>


        <div class="basic-frame ern-frame">
            <div>Total Earnings: 0</div>
            <div>Total Revenue: 0</div>
        </div>



        <div class="big-btn">
            <div class="btn btn-active ">DEPOSIT NOW</div>
            <div class="btn btn-active ">INVITATION REWARD</div>
        </div>

        <div class="basic-frame item-frame">
            <div class="frm-item">
                <div class="item-pt-1">
                    <div class="item-img">
                        <img src="{{ asset('assets/svg/T.svg') }}" alt="">
                    </div>
                    <div class="ver-btn">Version-4.0.0</div>
                </div>
                <div class="item-pt-2">
                    <div class="blk-item">
                        <span>Deposit quantity</span><span>10.00 above</span>
                    </div>
                    <div class="blk-item">
                        <span>Quantify frequency</span><span>2</span>
                    </div>
                    <div class="blk-item">
                        <span>Daily Interest rate</span><span>2.50%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="basic-frame item-frame">

            <div class="frm-item frm-item-2">
                <div class="item-pt-1">
                    <div class="item-img">
                        <img src="{{ asset('assets/svg/T.svg') }}" alt="">
                    </div>
                    <div class="ver-btn">Version-4.0.5</div>
                </div>
                <div class="item-pt-2">
                    <div class="blk-item">
                        <span>Deposit quantity</span><span>20.00 above</span>
                    </div>
                    <div class="blk-item">
                        <span>Quantify frequency</span><span>3</span>
                    </div>
                    <div class="blk-item">
                        <span>Daily Interest rate</span><span>3.00%</span>
                    </div>
                </div>


            </div>
            <div class="rwd-p">Invite 10 members, each member recharges more than
                10USDT for the first time</div>
        </div>
        <div class="basic-frame item-frame">

            <div class="frm-item frm-item-2">
                <div class="item-pt-1">
                    <div class="item-img">
                        <img src="{{ asset('assets/svg/T.svg') }}" alt="">
                    </div>
                    <div class="ver-btn">Version-4.1.0</div>
                </div>
                <div class="item-pt-2">
                    <div class="blk-item">
                        <span>Deposit quantity</span><span>500.00 above</span>
                    </div>
                    <div class="blk-item">
                        <span>Quantify frequency</span><span>4</span>
                    </div>
                    <div class="blk-item">
                        <span>Daily Interest rate</span><span>4.00%</span>
                    </div>
                </div>


            </div>
            <div class="rwd-p">Invite 20 members, each member recharges more than
                10USDT for the first time</div>
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
                <a href="#" class="ft-btn">
                    <div class="menu-img">
                        <img src="{{ asset('assets/svg/trade.svg') }}">
                    </div>
                    <div class="menu-txt">Trade</div>
                </a>
            </li>
            <li>
                <a href="#" class="ft-btn invest-btn">
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
