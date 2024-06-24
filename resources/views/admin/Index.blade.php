@extends('layout')

@section('content')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('image/logopancake1.jpg') }}" alt="Logo" class="me-2">
                <span style="font-size: 24px;">Wacky Stacky's</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="AdminIndex">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AdminMenu#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AdminContact#">Contact & Info</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4 card-container">
        <div class="cards">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('image/boterpancake.jpg') }}" class="img-fluid rounded-start" alt="Classic Pancake with Butter">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Classic Pancake with Butter</h5>
                            <p class="card-text">Experience the timeless delight of our Classic Pancake with Butter. Golden brown and fluffy, it's the perfect start to your morning, topped with a pat of melting butter for that rich, creamy finish.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('image/japanpancake.png') }}" class="img-fluid rounded-start" alt="Japanese Pancake">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Japanese Pancake</h5>
                            <p class="card-text">Try our fluffy and light Japanese Pancake. This pancake is known for its airy texture and delightful sweetness, perfect for those who enjoy a delicate and soft breakfast treat.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 5 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('image/chocopancake.png') }}" class="img-fluid rounded-start" alt="Chocolate Pancake">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Chocolate Pancake</h5>
                            <p class="card-text">Indulge in our Chocolate Pancake, perfect for chocolate lovers. This pancake is infused with rich chocolate flavor, making it a decadent choice for breakfast or dessert.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 7 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('image/M&Mpancake.png') }}" class="img-fluid rounded-start" alt="M&M Pancake">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">M&M Pancake</h5>
                            <p class="card-text">Enjoy our fun and colorful M&M Pancake. Packed with M&M candies, this pancake is a hit with kids and those young at heart, adding a playful twist to the traditional pancake.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 10 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="quote">
            <div class="card">
                <div class="card-header">
                    Quote
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>"Life is short. Eat pancakes."</p>
                        <footer class="blockquote-footer">Anonymous</footer>
                    </blockquote>
                </div>
            </div>

            <div class="history">
                <h5>Our History</h5>
                <p>Wacky Stacky's was founded in 2010 with a simple mission: to bring joy to the world one pancake at a time. Our founder, Jane Doe, was inspired by her grandmother's secret pancake recipe, which had been passed down through generations. Jane opened the first Wacky Stacky's in a small corner of Amsterdam, and it quickly became a local favorite. Over the years, we have grown and expanded, but our commitment to quality and tradition remains unchanged. We continue to use the finest ingredients and a lot of love to make each pancake a delightful experience.</p>
            </div>
        </div>
    </div>

    <div class="container mt-4 contact-info">
        <div class="row">
            <div class="col-md-4">
                <h5>Contact Information</h5>
                <p>Email: info@wackystackys.com</p>
                <p>Phone: +31 20 123 4567</p>
            </div>
            <div class="col-md-4">
                <h5>Address</h5>
                <p>Wacky Stacky's</p>
                <p>123 Pancake Lane</p>
                <p>Amsterdam, Netherlands</p>
            </div>
            <div class="col-md-4">
                <h5>Opening Hours</h5>
                <p>Monday - Friday: 8:00 AM - 8:00 PM</p>
                <p>Saturday - Sunday: 9:00 AM - 6:00 PM</p>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    
    
    <style>
        .navbar-brand {
            font-size: 48px;
            /* Aangepaste grootte voor de tekst */
        }

        .navbar-brand img {
            height: 100px;
            /* Aangepaste hoogte voor het logo */
        }

        body {
            background: url('{{ asset('image/woodbackground1.jpg') }}') no-repeat center center fixed;
            background-size: cover;
        }

        .card-container {
            display: flex;
            justify-content: space-between;
        }

        .cards {
            flex: 0 0 60%;
            padding: 20px;
            border-radius: 10px;
        }

        .quote {
            flex: 0 0 35%;
            margin-left: 20px;
            padding: 20px;
            border-radius: 10px;
        }

        .contact-info {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }

        .history {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }
    </style>
@endsection

@section('title', "Wacky Stacky's")
