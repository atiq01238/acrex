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
            <div class="nav-item nav-icon-container" style="float: left;">
                <img src="{{ asset('assets/svg/lang.svg') }}">
                <img src="{{ asset('assets/svg/bell.svg') }}">
                <img src="{{ asset('assets/svg/envelop.svg') }}">
            </div>
            <div class="nav-item app-btn mt-4"  style="margin-bottom: 150px !important;" >
                <a href="{{ url('/register') }}" style="color: white;">
                    Register
                </a>
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
                <img src="{{ asset('assets/svg/wallet.svg') }}">
            </div>


        </div>

        <div class="basic-frame speaker-frame">
            <img src="{{ asset('assets/svg/speaker.svg') }}">
            <p>ACREX To celebrate the market value breakthrough of ACREX, </p>
        </div>


        <div class="basic-frame page-links-frame">
            <a href="{{ url('/intro') }}" class="frame-link-item">
                <img src="{{ asset('assets/svg/intro.svg') }}">
                <div>Introduction</div>
            </a>
            <a href="{{ url('/recharge') }}" class="frame-link-item">
                <img src="{{ asset('assets/svg/gradient-wallet.svg') }}">
                <div>Deposit</div>
            </a>
            <a href="{{ url('/withdrawal') }}" class="frame-link-item">
                <img src="{{ asset('assets/svg/withdrawal.svg') }}">
                <div>Withdrawal</div>
            </a>
            <a href="{{ url('/share') }}" class="frame-link-item">
                <img src="{{ asset('assets/svg/share.svg') }}">
                <div>Share Friends</div>
            </a>
            <a href="" class="frame-link-item">
                <img src="{{ asset('assets/svg/team.svg') }}">
                <div>Team</div>
            </a>
            <a href="{{ url('/info') }}" class="frame-link-item">
                <img src="{{ asset('assets/svg/info.svg') }}">
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
                <img src="{{ asset('assets/svg/chest.svg') }}">

            </div>
            <div class="try-luck">
                <div class="lg-luck">Lucky Draw</div>
                <div class="sm-luck">Your Luck!</div>
            </div>
            <div class="go">
                <img src="{{ asset('assets/svg/go.svg') }}">
            </div>
        </div>

        <div class="basic-frame help-frame">
            <h2 class="hd-help">Help Center</h2>
            <div class="simple-container-2">
                <div class="question-container">
                    <div class="question">What is one-stop quantitative trading?</div>
                    <div class="arrow"> <img src="{{ asset('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">Company Profile</div>
                    <div class="arrow"> <img src="{{ asset('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">Legal Document</div>
                    <div class="arrow"> <img src="{{ asset('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">Robot version and benefits</div>
                    <div class="arrow"> <img src="{{ asset('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">ACREX profit method</div>
                    <div class="arrow"> <img src="{{ asset('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">About the event</div>
                    <div class="arrow"> <img src="{{ asset('assets/svg/dropdown.svg') }}">
                    </div>
                </div>
                <div class="question-container">
                    <div class="question">Privacy Policy</div>
                    <div class="arrow"> <img src="{{ asset('assets/svg/dropdown.svg') }}">
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
                <a href="{{ url('/order') }}?coin=BTC" style="text-decoration: none; color: inherit; display: block;">
                    <div class="item">
                        <div class="item-pt-1">
                            <div class="img-cont">
                                <img src="{{ asset('assets/svg/bitcoin.svg') }}">
                            </div>
                            <div>
                                <div class="btc-usd">BTC/USD</div>
                                <div class="btcn">Bitcoin</div>
                            </div>
                        </div>
                        <div class="item-pt-2">
                            <div class="img-cont">
                                <img src="{{ asset('assets/svg/line.svg') }}">
                            </div>
                            <div class="prc-up-cont">
                                <div class="prc" id="btc-price"></div>
                                <div class="up-down-btn">
                                    <img src="{{ asset('assets/svg/up.svg') }}" id="btc-trend-icon"> <span id="btc-change">15.3%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <script>
                    async function fetchBitcoinPrice() {
                        try {
                            const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd&include_24hr_change=true');
                            const data = await response.json();

                            const price = data.bitcoin.usd;
                            const change = data.bitcoin.usd_24h_change.toFixed(2);

                            document.getElementById('btc-price').innerText = `$${price.toLocaleString()}`;
                            document.getElementById('btc-change').innerText = `${change}%`;

                            const trendIcon = document.getElementById('btc-trend-icon');
                            if (change >= 0) {
                                trendIcon.src = "{{ asset('assets/svg/up.svg') }}";
                            } else {
                                trendIcon.src = "{{ asset('assets/svg/down.svg') }}";
                            }
                        } catch (error) {
                            console.error('Error fetching Bitcoin price:', error);
                        }
                    }

                    document.addEventListener('DOMContentLoaded', fetchBitcoinPrice);
                </script>
                <a href="{{ url('/order') }}?coin=ETH" style="text-decoration: none; color: inherit; display: block;">
                    <div class="item">
                        <div class="item-pt-1">
                            <div class="img-cont">
                                <img src="{{ asset('assets/svg/eth.svg') }}">
                            </div>
                            <div>
                                <div class="btc-usd">ETH/BUSD</div>
                                <div class="btcn">Ethereum</div>
                            </div>
                        </div>
                        <div class="item-pt-2">
                            <div class="img-cont">
                                <img src="{{ asset('assets/svg/line-2.svg') }}">
                            </div>
                            <div class="prc-up-cont">
                                <div class="prc" id="eth-price">$4,392.19</div>
                                <div class="up-down-btn red-bg">
                                    <img src="{{ asset('assets/svg/down.svg') }}" id="eth-trend-icon"> <span id="eth-change">-23.3%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <script>
                    async function fetchEthereumPrice() {
                        try {
                            const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=usd&include_24hr_change=true');
                            const data = await response.json();

                            const price = data.ethereum.usd;
                            const change = data.ethereum.usd_24h_change.toFixed(2);

                            document.getElementById('eth-price').innerText = `$${price.toLocaleString()}`;
                            document.getElementById('eth-change').innerText = `${change}%`;

                            const trendIcon = document.getElementById('eth-trend-icon');
                            if (change >= 0) {
                                trendIcon.src = "{{ asset('assets/svg/up.svg') }}";
                                document.querySelector('.up-down-btn').classList.remove('red-bg');
                            } else {
                                trendIcon.src = "{{ asset('assets/svg/down.svg') }}";
                                document.querySelector('.up-down-btn').classList.add('red-bg');
                            }
                        } catch (error) {
                            console.error('Error fetching Ethereum price:', error);
                        }
                    }

                    // Fetch the Ethereum price when the page loads
                    document.addEventListener('DOMContentLoaded', fetchEthereumPrice);
                </script>
                <a href="{{ url('/order') }}?coin=TRX" style="text-decoration: none; color: inherit; display: block;">
                    <div class="item">
                        <div class="item-pt-1">
                            <div class="img-cont">
                                <img src="{{ asset('assets/svg/tron.svg') }}">
                            </div>
                            <div>
                                <div class="btc-usd">TRX/BUSD</div>
                                <div class="btcn">TRON</div>
                            </div>
                        </div>
                        <div class="item-pt-2">
                            <div class="img-cont">
                                <img src="{{ asset('assets/svg/line-2.svg') }}">
                            </div>
                            <div class="prc-up-cont">
                                <div class="prc" id="trx-price">$3,399.61</div>
                                <div class="up-down-btn red-bg">
                                    <img src="{{ asset('assets/svg/down.svg') }}" id="trx-trend-icon"> <span id="trx-change">-29.1%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <script>
                    async function fetchTRONPrice() {
                        try {
                            const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=tron&vs_currencies=usd&include_24hr_change=true');
                            const data = await response.json();

                            const price = data.tron.usd;
                            const change = data.tron.usd_24h_change.toFixed(2);

                            document.getElementById('trx-price').innerText = `$${price.toLocaleString()}`;
                            document.getElementById('trx-change').innerText = `${change}%`;

                            const trendIcon = document.getElementById('trx-trend-icon');
                            const upDownBtn = document.querySelector('.up-down-btn');

                            if (change >= 0) {
                                trendIcon.src = "{{ asset('assets/svg/up.svg') }}";
                                upDownBtn.classList.remove('red-bg');
                            } else {
                                trendIcon.src = "{{ asset('assets/svg/down.svg') }}";
                                upDownBtn.classList.add('red-bg');
                            }
                        } catch (error) {
                            console.error('Error fetching TRON price:', error);
                        }
                    }

                    // Fetch the TRON price when the page loads
                    document.addEventListener('DOMContentLoaded', fetchTRONPrice);
                </script>
                <a href="{{ url('/order') }}?coin=USDT" style="text-decoration: none; color: inherit; display: block;">
                    <div class="item">
                        <div class="item-pt-1">
                            <div class="img-cont">
                                <img src="{{ asset('assets/svg/tether.svg') }}">
                            </div>
                            <div>
                                <div class="btc-usd">USDT/BUSD</div>
                                <div class="btcn">Tether</div>
                            </div>
                        </div>
                        <div class="item-pt-2">
                            <div class="img-cont">
                                <img src="{{ asset('assets/svg/line.svg') }}">
                            </div>
                            <div class="prc-up-cont">
                                <div class="prc" id="usdt-price">$49,392.19</div>
                                <div class="up-down-btn">
                                    <img src="{{ asset('assets/svg/up.svg') }}" id="usdt-trend-icon"> <span id="usdt-change">25.3%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <script>
                    async function fetchTetherPrice() {
                        try {
                            const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=tether&vs_currencies=usd&include_24hr_change=true');
                            const data = await response.json();

                            const price = data.tether.usd;
                            const change = data.tether.usd_24h_change.toFixed(2);

                            document.getElementById('usdt-price').innerText = `$${price.toLocaleString()}`;
                            document.getElementById('usdt-change').innerText = `${change}%`;

                            const trendIcon = document.getElementById('usdt-trend-icon');
                            const upDownBtn = document.querySelector('.up-down-btn');

                            if (change >= 0) {
                                trendIcon.src = "{{ asset('assets/svg/up.svg') }}";
                                upDownBtn.classList.remove('red-bg');
                            } else {
                                trendIcon.src = "{{ asset('assets/svg/down.svg') }}";
                                upDownBtn.classList.add('red-bg');
                            }
                        } catch (error) {
                            console.error('Error fetching Tether price:', error);
                        }
                    }

                    // Fetch the Tether price when the page loads
                    document.addEventListener('DOMContentLoaded', fetchTetherPrice);
                </script>
                <a href="{{ url('/order') }}?coin=XRP" style="text-decoration: none; color: inherit; display: block;">
                    <div class="item">
                        <div class="item-pt-1">
                            <div class="img-cont">
                                <img src="{{ asset('assets/svg/ripple.svg') }}">
                            </div>
                            <div>
                                <div class="btc-usd">XRP/BUSD</div>
                                <div class="btcn">Ripple</div>
                            </div>
                        </div>
                        <div class="item-pt-2">
                            <div class="img-cont">
                                <img src="{{ asset('assets/svg/line.svg') }}">
                            </div>
                            <div class="prc-up-cont">
                                <div class="prc" id="xrp-price">$29,312.12</div>
                                <div class="up-down-btn">
                                    <img src="{{ asset('assets/svg/up.svg') }}" id="xrp-trend-icon"> <span id="xrp-change">15.9%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <script>
                    async function fetchRipplePrice() {
                        try {
                            const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=ripple&vs_currencies=usd&include_24hr_change=true');
                            const data = await response.json();

                            const price = data.ripple.usd;
                            const change = data.ripple.usd_24h_change.toFixed(2);

                            document.getElementById('xrp-price').innerText = `$${price.toLocaleString()}`;
                            document.getElementById('xrp-change').innerText = `${change}%`;

                            const trendIcon = document.getElementById('xrp-trend-icon');
                            const upDownBtn = document.querySelector('.up-down-btn');

                            if (change >= 0) {
                                trendIcon.src = "{{ asset('assets/svg/up.svg') }}";
                                upDownBtn.classList.remove('red-bg');
                            } else {
                                trendIcon.src = "{{ asset('assets/svg/down.svg') }}";
                                upDownBtn.classList.add('red-bg');
                            }
                        } catch (error) {
                            console.error('Error fetching Ripple price:', error);
                        }
                    }

                    // Fetch the Ripple price when the page loads
                    document.addEventListener('DOMContentLoaded', fetchRipplePrice);
                </script>
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
                <img src="{{ asset('assets/svg/binance.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ asset('assets/svg/ether.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ asset('assets/svg/kuo.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ asset('assets/svg/trn.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ asset('assets/svg/ther.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ asset('assets/svg/cb.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ asset('assets/svg/huobi.svg') }}">
            </div>

            <div class="company-btn">
                <img src="{{ asset('assets/svg/doge.svg') }}">

            </div>
            <div class="company-btn">
                <img src="{{ asset('assets/svg/gemini.svg') }}">

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
