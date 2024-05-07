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

        <div class="basic-frame gradient-frame mine-gradient-frame">

            <h4>Total Balance</h4>
            <div class="prc-cont">
                <div class="prc-1">9092.00</div>
                <div class="usdt">USDT</div>
            </div>
            <ul class="earning-report">
                <li>Todays Earning: 0.00</li>
                <li>Yesterday's Earning: 0.00</li>
                <li>Total Commission: 0.00</li>
                <li>Total Revenue: 0.00 </li>
            </ul>
            <div class="btn-cont">
                <div class="basic-btn"><img src="{{ url('assets/svg/deposit.svg') }}" alt=""> Deposit</div>
                <div class="basic-btn"><img src="{{ url('assets/svg/withdraw.svg') }}" alt=""> Withdrawal</div>
            </div>
        </div>


        <div class="basic-frame page-links-frame">
            <a href="{{ url('/intro') }}" class="frame-link-item">
                <img src="{{ url('assets/svg/intro.svg') }}">
                <div>Introduction</div>
            </a>


            <a href="{{ url('/info') }}" class="frame-link-item">
                <img src="{{ url('assets/svg/info-2.svg') }}">
                <div>Information</div>
            </a>
            <a href="{{ url('/records') }}" class="frame-link-item">
                <img src="{{ url('assets/svg/transaction.svg') }}">
                <div>Transaction Report</div>
            </a>


            <a class="frame-link-item">
                <img src="{{ url('assets/svg/lucky-chest.svg') }}">
                <div>Lucky Chest</div>
            </a>

            <a href="{{ url('/share') }}" class="frame-link-item">
                <img src="{{ url('assets/svg/share.svg') }}">
                <div>Share Friends</div>
            </a>
            <a class="frame-link-item">
                <img src="{{ url('assets/svg/app-2.svg') }}">
                <div>App</div>
            </a>
            <a class="frame-link-item">
                <img src="{{ url('assets/svg/wallet-funds.svg') }}">
                <div>Wallet Funds Conversion</div>
            </a>


            <a class="frame-link-item">
                <img src="{{ url('assets/svg/team.svg') }}">
                <div>Team</div>
            </a>
            <a class="frame-link-item">
                <img src="{{ url('assets/svg/settings.svg') }}">
                <div>Change Password</div>
            </a>


            <a class="frame-link-item">
                <img src="{{ url('assets/svg/notification.svg') }}">
                <div>Notifications</div>
            </a>
            <a class="frame-link-item">
                <img src="{{ url('assets/svg/logout.svg') }}">
                <div>Logout</div>
            </a>

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
                        <img src="{{ url('assets/svg/share-2.svg') }}">
                    </div>
                    <div class="menu-txt">Share Freinds</div>
                </a>
            </li>
            <li>
                <a href="{{ url('/mine') }}" class="ft-btn active-menu">
                    <div class="menu-img">
                        <img src="{{ url('assets/svg/mine-3.svg') }}">
                    </div>
                    <div class="menu-txt  active-gradient">Mine</div>
                </a>
            </li>
        </ul>
    </footer>
</body>

</html>
