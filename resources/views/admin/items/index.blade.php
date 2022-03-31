@extends('layouts.admin')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Items</h2>
            <ol>
            <li><a href="index.html">Dashboard</a></li>
            <li>Items</li>
            </ol>
        </div>

        </div>
    </section>

    <section class="inner-page">
    <div class="container">  

        <div class="row">
            <div class="col-sm-3">
                <a href="{{ $items->previousPageUrl() }}" class="mybuttonclass">Previous</a>
            </div>
            <div class="col-sm-6 text-center">
                <p>Total {{ $items->total() }} | {{ $items->count() }} in this page </p>
            </div>
            <div class="col-sm-3">
                <a href="{{ $items->nextPageUrl() }}" class="mybuttonclass" style="float:right">Next</a>
            </div>
        </div>

        <div class="row people d-flex justify-content-center">
            @foreach ($items as $item)
            <div class="col-md-4 col-lg-3 item">
                <div class="box" style="background-image:url({{ asset($item->image) }})">
                    <div class="cover">
                        <h3 class="name">{{ $item->name }}</h3>
                        <p class="title">{{ substr($item->description, 0, 100) }}</p>
                        <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>
@endsection