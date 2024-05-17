<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <title>ACREX Web App - Order</title>
    <style>
        .main-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f5f5f5;
            padding: 20px;
        }

        .form-wrapper {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .form-wrapper h1 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 30px;
            font-size: 24px;
        }

        .form-wrapper form {
            display: flex;
            flex-direction: column;
        }

        .form-wrapper label {
            margin-bottom: 10px;
            font-weight: bold;
            color: #ffffff;
        }

        .form-wrapper input[type="text"] {
            padding: 15px;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            width: 100%;
            box-sizing: border-box;
        }

        .form-wrapper input[type="text"]:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-wrapper button {
            padding: 15px;
            border: none;
            border-radius: 10px;
            background: #ffffff;
            color: #007BFF;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease, color 0.3s ease;
        }

        .form-wrapper button:hover {
            background: #007BFF;
            color: #ffffff;
        }
    </style>
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
        </div>
    </nav>
    {{-- <div class="basic-frame gradient-frame"> --}}

    <div class="main-container">
        <div class="basic-frame  gradient-frame">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="form-wrapper">
            <h1>Create Order</h1>
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <div>
                    <label for="symbol">Coin:</label>
                    <input type="text" id="symbol" name="symbol" value="{{ request()->get('coin') }}" readonly>
                </div>
                <div class="form-group">
                    <label for="side">Side (buy/sell):</label>
                    <input type="text" class="form-control" name="side" id="side" required list="sideOptions">
                    <datalist id="sideOptions">
                        <option value="buy">
                        <option value="sell">
                    </datalist>
                </div>
                <div>
                    <label for="price">Price:</label>
                    <input type="text" id="price" name="price" required>
                </div>
                <button type="submit">Submit</button>
            </form>
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
                    <div class="menu-txt active-gradient">Home</div>
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
                    <div class="menu-txt">Share Friends</div>
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
