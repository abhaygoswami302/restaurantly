@extends('layouts.main')

@section('content')
    <section class="breadcrumbs">
        <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Order Now</h2>
            <ol>
            <li><a href="{{ route('order.index') }}">Home</a></li>
            <li>Order Now</li>
            </ol> 
        </div>
        </div>
    </section>

    <livewire:order-now  
            :items="$items"
            :categories="$categories"
            :orderItems="$orderItems"
            :total="$total"
            :address="$address"
    />
@endsection