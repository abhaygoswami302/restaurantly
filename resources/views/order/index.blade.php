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

    <section class="inner-page">
        <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row py-4">

                    <div class="col-sm-12">
                        <h5>Your Order List</h5>
                    </div>

                    <div class="col-lg-2 menu-item filter-abc">
                        <img src="assets/img/menu/cake.jpg" class="menu-img" alt="" style="width:100%">
                        <div class="menu-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <a href="#">Demo Name</a>
                                </div>
                                <div class="col-sm-4">
                                    <span style="float: right">$23.90</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 menu-item filter-abc">
                        <img src="assets/img/menu/cake.jpg" class="menu-img" alt="" style="width:100%">
                        <div class="menu-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <a href="#">Demo Name</a>
                                </div>
                                <div class="col-sm-4">
                                    <span style="float: right">$23.90</span>
                                </div>
                            </div>                       
                        </div>
                    </div>

                    <div class="col-lg-2 menu-item filter-abc">
                        <img src="assets/img/menu/cake.jpg" class="menu-img" alt="" style="width:100%">
                        <div class="menu-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <a href="#">Demo Name</a>
                                </div>
                                <div class="col-sm-4">
                                    <span style="float: right">$23.90</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 menu-item filter-abc">
                        <img src="assets/img/menu/cake.jpg" class="menu-img" alt="" style="width:100%">
                        <div class="menu-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <a href="#">Demo Name</a>
                                </div>
                                <div class="col-sm-4">
                                    <span style="float: right">$23.90</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 menu-item filter-abc">
                        <img src="assets/img/menu/cake.jpg" class="menu-img" alt="" style="width:100%">
                        <div class="menu-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <a href="#">Demo Name</a>
                                </div>
                                <div class="col-sm-4">
                                    <span style="float: right">$23.90</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 menu-item filter-abc">
                        <img src="assets/img/menu/cake.jpg" class="menu-img" alt="" style="width:100%">
                        <div class="menu-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <a href="#">Demo Name</a>
                                </div>
                                <div class="col-sm-4">
                                    <span style="float: right">$23.90</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-8">
                <h4>All Items</h4>
                <div class="row cstScollBar">

                    <!-- Hover-Fall Effect-->
                   
                @foreach ($items as $item)
                    <div class="col-xs-6 col-sm-4 mb-4">
                        <div class="fall-item fall-effect">
                            <img src="{{ $item->image }}" style="width:100%"/>
                            <div class="mask">
                                <h4></h4>
                                <p>{{ substr($item->description, 0, 50) }}</p>
                                <a href="#" class="btn btn-dark" style="border-radius: 0%">Add To My Order</a>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-sm-8">
                                <h6 class="p-0 m-0">{{ $item->name }}</h6>
                                <small>${{ $item->price }}</small>
                            </div>
                            <div class="col-sm-4">
                                <i class="bi bi-plus" style="font-size: 22px;cursor: pointer;float: right;"></i>
                            </div>
                        </div>
                    </div>    
                @endforeach
                </div>
            </div>
            <div class="col-sm-4 py-2">
                <h4 class="py-4 ">Order Summary</h4>
                <div class="row">
                    <div class="col-sm-8">
                        Demo Name
                    </div>
                    <div class="col-sm-4">
                        $15.90
                    </div>
                    <div class="col-sm-8">
                        Demo Name
                    </div>
                    <div class="col-sm-4">
                        $15.90
                    </div>
                    <div class="col-sm-8">
                        Demo Name
                    </div>
                    <div class="col-sm-4">
                        $15.90
                    </div>
                    <div class="col-sm-12">
                        <hr>
                    </div>
                    <div class="col-sm-8 py-2">
                        <h6>Total Price</h6>
                    </div>
                    <div class="col-sm-4 py-2">
                        <h6>$500 Only</h6>
                    </div>
                </div>

                
            </div>
        </div>
        </div>
    </section>
@endsection