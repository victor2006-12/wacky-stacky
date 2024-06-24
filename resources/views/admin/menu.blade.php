    @extends('layout')

    @section('content')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('image/logopancake1.jpg') }}" alt="Logo" class="me-2">
                <span>Wacky Stacky's</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="AdminIndex#">Home</a>
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

    <div class="container mt-4 menu-container">
        <h1 class="text-center mb-4">Our Menu</h1>

        @foreach($menuItems as $category => $items)
            <div class="menu-section">
                <h3>{{ $category }}</h3>
                @foreach($items as $item)
                    <div class="menu-item">
                        <div>
                            <h5>{{ $item->name }}</h5>
                            <span>€{{ number_format($item->price, 2) }}</span>
                        </div>
                        <a href="{{ url('/menuitems', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
    @endsection
    @section('styles')
        <style>
            body {
                background-color: #f8f9fa;
            }
            .navbar-brand {
                font-size: 24px;
            }
            .navbar-brand img {
                height: 50px;
            }
            .menu-container {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .menu-section {
                margin-bottom: 20px;
            }
            .menu-section h3 {
                border-bottom: 2px solid #007bff;
                padding-bottom: 10px;
                margin-bottom: 20px;
                font-weight: bold;
                color: #007bff;
            }
            .menu-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
                border-bottom: 1px solid #e9ecef;
            }
            .menu-item:last-child {
                border-bottom: none;
            }
            .menu-item h5 {
                margin: 0;
                font-size: 18px;
                color: #343a40;
            }
            .menu-item span {
                font-size: 16px;
                color: #6c757d;
            }
        </style>
    @endsection