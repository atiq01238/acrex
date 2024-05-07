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
    <div class="nav-item app-btn mt-4" style="float: right; margin-right: 40px !important;">
        <a href="{{ url('/register') }}" style="color: white;">
            Register
        </a>
    </div>
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
        <div class="basic-frame gradient-frame">
            <div class="frame-main-item">
                <div class="frame-md-heading">Total Balance</div>
                <div class="frame-item-container">
                    <div class="frame-lg-heading">180.15</div>
                    <div class="frame-md-heading" style="margin-left: 10px">USDT</div>
                </div>
            </div>
            <div class="frame-main-item">
                <img src="{{ url('assets/svg/wallet.svg') }}">
            </div>


        </div>

        <div class="basic-frame speaker-frame">
            <img src="{{ url('assets/svg/speaker.svg') }}">
            <p>ACREX To celebrate the market value breakthrough of ACREX, </p>
        </div>


        <div class="basic-frame page-links-frame">
            <a href="{{ url('/intro') }}" class="frame-link-item">
                <img src="{{ url('assets/svg/intro.svg') }}">
                <div>Introduction</div>
            </a>
            <a href="{{ url('/recharge') }}" class="frame-link-item">
                <img src="{{ url('assets/svg/gradient-wallet.svg') }}">
                <div>Deposit</div>
            </a>
            <a href="{{ url('/withdrawal') }}" class="frame-link-item">
                <img src="{{ url('assets/svg/withdrawal.svg') }}">
                <div>Withdrawal</div>
            </a>
            <a href="{{ url('/share') }}" class="frame-link-item">
                <img src="{{ url('assets/svg/share.svg') }}">
                <div>Share Friends</div>
            </a>
            <a  class="frame-link-item">
                <img src="{{ url('assets/svg/team.svg') }}">
                <div>Team</div>
            </a>
            <a href="{{ url('/info') }}" class="frame-link-item">
                <img src="{{ url('assets/svg/info.svg') }}">
                <div>Information</div>
            </a>
        </div>
        <div class="simple-container">
            <div class="half-frame acc-frame-1">
                <div class="sm-heading">Smart Account</div>
                <div class="sm-container">
                    <div class="amount">90.10</div>
                    <div class="usdt">USDT</div>
                </div>

                <div class="small-amount">≈ $ 90.00</div>
            </div>
            <div class="half-frame acc-frame-2">
                <div class="sm-heading">Smart Account</div>
                <div class="sm-container">
                    <div class="amount">90.10</div>
                    <div class="usdt">USDT</div>
                </div>

                <div class="small-amount">≈ $ 90.00</div>
            </div>

        </div>
        <div class="basic-frame lucky-frame">
            <div class="chest">
                <img src="{{ url('assets/svg/chest.svg') }}">

            </div>
            <div class="try-luck">
                <div class="lg-luck">Lucky Draw</div>
                <div class="sm-luck">Your Luck!</div>
            </div>
            <div class="go">
                <img src="{{ url('assets/svg/go.svg') }}">
            </div>
        </div>

        <div class="basic-frame help-frame">
            <h2 class="hd-help">Help Center</h2>
            <div class="simple-container-2">
                <div class="question-container">
                    <div class="question">What is one-stop quantitative trading?</div>
                    <div class="arrow"> <img src="{{ url('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">Company Profile</div>
                    <div class="arrow"> <img src="{{ url('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">Legal Document</div>
                    <div class="arrow"> <img src="{{ url('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">Robot version and benefits</div>
                    <div class="arrow"> <img src="{{ url('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">ACREX profit method</div>
                    <div class="arrow"> <img src="{{ url('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">About the event</div>
                    <div class="arrow"> <img src="{{ url('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">Privacy Policy</div>
                    <div class="arrow"> <img src="{{ url('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
            </div>
        </div>

        <div class="instant-quotes-section">
            <h2>Instant Quotes</h2>
            <div class="btn-section">
                <div class="btn btn-active">BINANCE</div>
                <div class="btn">COINBASE</div>
                <div class="btn">HUOBI</div>
                <div class="btn">TETHER</div>
            </div>

            <div class="inner-section">
                <div class="item">
                    <div class="item-pt-1">
                        <div class="img-cont">
                            <img src="{{ url('assets/svg/bitcoin.svg') }}">

                        </div>
                        <div>
                            <div class="btc-usd">BTC/USD</div>
                            <div class="btcn">Bitcoin</div>
                        </div>
                    </div>
                    <div class="item-pt-2">
                        <div class="img-cont">
                            <img src="{{ url('assets/svg/line.svg') }}">

                        </div>
                        <div class="prc-up-cont">
                            <div class="prc">$59,389.64</div>
                            <div class="up-down-btn"> <img src="{{ url('assets/svg/up.svg') }}"> 15.3%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-pt-1">
                        <div class="img-cont">
                            <img src="{{ url('assets/svg/eth.svg') }}">

                        </div>
                        <div>
                            <div class="btc-usd">ETH/BUSD</div>
                            <div class="btcn">Etherium</div>
                        </div>
                    </div>
                    <div class="item-pt-2">
                        <div class="img-cont">
                            <img src="{{ url('assets/svg/line-2.svg') }}">

                        </div>
                        <div class="prc-up-cont">
                            <div class="prc">$4,392.19</div>
                            <div class="up-down-btn red-bg"> <img src="{{ url('assets/svg/down.svg') }}"> -23.3%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-pt-1">
                        <div class="img-cont">
                            <img src="{{ url('assets/svg/tron.svg') }}">

                        </div>
                        <div>
                            <div class="btc-usd">TRX/BUSD</div>
                            <div class="btcn">TRON</div>
                        </div>
                    </div>
                    <div class="item-pt-2">
                        <div class="img-cont">
                            <img src="{{ url('assets/svg/line-2.svg') }}">

                        </div>
                        <div class="prc-up-cont">
                            <div class="prc">$3,399.61</div>
                            <div class="up-down-btn red-bg"> <img src="{{ url('assets/svg/down.svg') }}"> -29.1%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-pt-1">
                        <div class="img-cont">
                            <img src="{{ url('assets/svg/tether.svg') }}">

                        </div>
                        <div>
                            <div class="btc-usd">USDT/BUSD</div>
                            <div class="btcn">Tether</div>
                        </div>
                    </div>
                    <div class="item-pt-2">
                        <div class="img-cont">
                            <img src="{{ url('assets/svg/line.svg') }}">

                        </div>
                        <div class="prc-up-cont">
                            <div class="prc">$49,392.19</div>
                            <div class="up-down-btn"> <img src="{{ url('assets/svg/up.svg') }}"> 25.3%
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-pt-1">
                        <div class="img-cont">
                            <img src="{{ url('assets/svg/ripple.svg') }}">

                        </div>
                        <div>
                            <div class="btc-usd">XRP/BUSD</div>
                            <div class="btcn">Ripple</div>
                        </div>
                    </div>
                    <div class="item-pt-2">
                        <div class="img-cont">
                            <img src="{{ url('assets/svg/line.svg') }}">

                        </div>
                        <div class="prc-up-cont">
                            <div class="prc">$29,312.12</div>
                            <div class="up-down-btn"> <img src="{{ url('assets/svg/up.svg') }}"> 15.9%
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="basic-frame p-frame">
            <p>ACREX ignores market turmoil, Automatically buy at a low price from Exchange A, At the same time, sell it
                at a high price from the B exchange, and profit from it in 7/24 hours. To put it simply, it is to buy
                some tokens at a low price from one exchange, and then sell them at a high price on another exchange to
                earn the price difference. Check this platform for the operation process: Help Center--[ACREX's money-
                making function] has a detailed introduction.</p>


            <div style="display: flex; justify-content: space-evenly; margin-top: 12vh;">
                <div>
                    <div style="font-size: 3vw; text-align: center;">Safe Operation</div>
                    <div style="color: blue; font-size: 3vw; text-align: center;">400day</div>
                </div>
                <div>
                    <div style="font-size: 3vw ;text-align: center;">Cumulative income</div>
                    <div style="color: blue; font-size: 3vw; text-align: center;">19863583.48USD</div>
                </div>
            </div>
        </div>

        <div class="basic-frame company-frame">
            <div class="company-btn">
                <img src="{{ url('assets/svg/binance.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ url('assets/svg/ether.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ url('assets/svg/kuo.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ url('assets/svg/trn.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ url('assets/svg/ther.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ url('assets/svg/cb.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ url('assets/svg/huobi.svg') }}">
            </div>

            <div class="company-btn">
                <img src="{{ url('assets/svg/doge.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ url('assets/svg/gemini.svg') }}">

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
