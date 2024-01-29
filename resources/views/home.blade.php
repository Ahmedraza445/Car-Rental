<!-- resources/views/home.blade.php -->

@extends('layout.app') <!-- Assuming you have a layout file -->

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-4">
                <h1>Welcome to Our Car Rental Service</h1>
                <p>Explore our fleet of vehicles and find the perfect one for your journey.</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Car Model">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Sedan</h5>
                        <p class="card-text">Explore the city in style with our luxury sedan. Comfort and elegance combined.
                        </p>
                        <p class="card-text">Rent for $100/day</p>
                        <a href="#" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Car Model">
                    <div class="card-body">
                        <h5 class="card-title">SUV Adventure</h5>
                        <p class="card-text">Experience the great outdoors with our rugged and spacious SUV. Perfect for
                            adventures.</p>
                        <p class="card-text">Rent for $120/day</p>
                        <a href="#" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300" class="card-img-top" alt="Car Model">
                    <div class="card-body">
                        <h5 class="card-title">Compact City Car</h5>
                        <p class="card-text">Navigate through the city with ease in our compact and fuel-efficient city car.
                        </p>
                        <p class="card-text">Rent for $80/day</p>
                        <a href="#" class="btn btn-primary">Rent Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
