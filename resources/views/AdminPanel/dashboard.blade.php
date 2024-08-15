@extends('AdminPanel.layout.adminLayout')
@section('content')
<h1 class="mt-4">Dashboard</h1>
<div class="row mt-4">
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title">Total Products</h5>
                <p class="card-text">150</p>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <a 
                {{-- href="{{ route('admin.products.index') }}"  --}}
                class="text-white stretched-link">View Products</a>
                <i class="bi bi-box"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Total Orders</h5>
                <p class="card-text">75</p>
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center">
                <a 
                {{-- href="{{ route('admin.orders.index') }}"  --}}
                class="text-white stretched-link">View Orders</a>
                <i class="bi bi-basket"></i>
            </div>
        </div>
    </div>
    <!-- Add more cards here -->
</div>
@endsection