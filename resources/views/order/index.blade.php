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

    <section class="inner-page p-0 m-0">
        <div class="container">
            <section id="menu" class="menu section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="row-fluid">

                                    <div class="col-lg-12 col-md-10 mb-4">
                                        <div class="cover-container">
                                            <h4>Your Order List</h4>
                                            <!-- START PANEL -->
                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/caesar.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/cake.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/greek-salad.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/lobster-roll.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/spinach-salad.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/cake.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/mozzarella.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/caesar.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/caesar.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/caesar.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/caesar.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/caesar.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/caesar.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/caesar.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>

                                            <div class="cover-item" style="background-image: url({{ asset('assets/img/menu/caesar.jpg') }})">
                                                <a  data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item"><i class="bi bi-dash px-2 my-4" style="background:#b47200;border:1px solid transparent;border-radius:5%;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-8 ">

                                <div class="row" data-aos="fade-down" data-aos-delay="100">
                                    <div class="col-lg-8 ">
                                    <ul id="menu-flters" style="text-align: left">
                                        <li data-filter="*" class="filter-active">All</li>
                                        @foreach ($categories as $key => $category)
                                            @if(!$loop->first)
                                            <li data-filter=".filter-{{ $category->name }}">{{ $category->name }}</li>
                                            @endif
                                        @endforeach
                                        @foreach ($categories as $key => $category)
                                            @if($loop->first)
                                            <li data-filter=".filter-{{ $category->name }}">{{ $category->name }}</li>
                                            @endif
                                        @endforeach
                                    </ul>
                                    </div>
                                </div>

                                <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

                                    <div class="row cstScollBar">

                                    @foreach ($categories as $category)
                                        @foreach ($category->items as $key => $item)
                                        @if ($key < 5)
                                        
                                        <div class="col-xs-6 col-sm-4 mb-4  menu-item filter-{{ $item->category->name }}">
                                            <div class="fall-item fall-effect menu-content">
                                                <img src="{{ $item->image }}" style="width:100%"/>
                                                <div class="mask text-center">
                                                    <h4></h4>
                                                    <p style="font-size: 22px">{{ substr($item->description, 0, 50) }}</p>
                                                    <a href="#" class="btn btn-dark " style="border-radius: 0%">Add To My Order</a>
                                                </div>
                                            </div>
                                            <div class="row py-1 ">
                                                <div class="col-sm-10">
                                                    <h6 class="p-0 m-0">{{ $item->name }}</h6>
                                                    <small>${{ $item->price }}</small>
                                                </div>
                                                <div class="col-sm-2">
                                                    <a href="{{ route('order.store') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Item To Order">
                                                        <i class="bi bi-plus" style="font-size: 22px;cursor: pointer;float: right;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>    
                                        @else
                                        @continue
                                        @endif
                                        @endforeach
                                    @endforeach
                                </div>

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
                </div>
            </section>
        </div>
    </section>
@endsection