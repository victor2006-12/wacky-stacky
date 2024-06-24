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
                        <a class="nav-link" aria-current="page" href="AdminIndex#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AdminMenu#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="AdminContact#">Contact & Info</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container contact-info">
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

        .contact-info {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .contact-info h5 {
            margin-top: 0;
        }
    </style>
    @endsection

    @section('title', "Contact & Info - Wacky Stacky's")