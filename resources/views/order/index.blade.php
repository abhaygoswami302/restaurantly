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
                                @if (Session::has('message'))
                                <h5 class="alert alert-success mb-2 text-center">
                                    {{ Session::get('message') }}
                                </h5>
                                @endif
                                <div class="row-fluid">
                                    @if (count($orderItems) > 0)
                                        <div class="col-lg-12 col-md-10 mb-4">
                                            <div class="cover-container">
                                                <h4 style="color: #cda45e">Your Order List</h4>
                                                <!-- START PANEL -->
                                                @foreach ($orderItems as $orderItem)
                                                    <div class="cover-item" style="background-image: url({{ asset($orderItem->image) }})">
                                                        <form action="{{ route('orderItem.destroy', $orderItem->id) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button href="{{ route('orderItem.destroy', $orderItem->id) }}" class="p-0 m-0" style="background: transparent;border:none"
                                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Remove Item">
                                                                <i class="bi bi-dash px-2 my-4" 
                                                                style="background:#b47200;color:white;border:1px solid transparent;border-radius:5%;">
                                                                </i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
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
                                                    <form action="{{ route('orderItem.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                                                        <input type="hidden" name="category_id" value="{{ $item->category->id }}">
                                                        <input type="hidden" name="item_name" value="{{ $item->name }}">
                                                        <input type="hidden" name="item_price" value="{{ $item->price }}">
                                                        <input type="hidden" name="description" value="{{ $item->description }}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="session_id" value="{{ Session::getId() }}">
                                                        <input type="hidden" name="total_price" value="{{ $item->price }}">
                                                        <input type="hidden" name="image" value="{{ $item->image }}">
                                                        <input type="hidden" name="user_address" value="{{ $address->countryName }}, {{ $address->countryCode }}, {{ $address->regionCode }}, {{ $address->regionName }}, {{ $address->cityName }}, {{ $address->zipCode }}, {{ $address->isoCode }}, {{ $address->postalCode }}, {{ $address->latitude }}, {{ $address->longitude }}, {{ $address->metroCode }}, {{ $address->areaCode }}, {{ $address->timezone }}">

                                                        <button type="submit"  class="btn btn-dark " style="border-radius: 0%" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Item To Order">
                                                            Add To My Order
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row py-1 ">
                                                <div class="col-sm-10 px-3">
                                                    <h6 class="p-0 m-0">{{ $item->name }}</h6>
                                                    <small>${{ $item->price }}</small>
                                                </div>
                                                <div class="col-sm-2">
                                                    <form action="{{ route('orderItem.store') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                                                        <input type="hidden" name="category_id" value="{{ $item->category->id }}">
                                                        <input type="hidden" name="item_name" value="{{ $item->name }}">
                                                        <input type="hidden" name="item_price" value="{{ $item->price }}">
                                                        <input type="hidden" name="description" value="{{ $item->description }}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <input type="hidden" name="session_id" value="{{ Session::getId() }}">
                                                        <input type="hidden" name="total_price" value="{{ $item->price }}">
                                                        <input type="hidden" name="image" value="{{ $item->image }}">
                                                        <input type="hidden" name="user_address" value="{{ $address->countryName }}, {{ $address->countryCode }}, {{ $address->regionCode }}, {{ $address->regionName }}, {{ $address->cityName }}, {{ $address->zipCode }}, {{ $address->isoCode }}, {{ $address->postalCode }}, {{ $address->latitude }}, {{ $address->longitude }}, {{ $address->metroCode }}, {{ $address->areaCode }}, {{ $address->timezone }}">
                                                       
                                                        <button type="submit" class="p-0 m-0" style="background: transparent;border:none;float: right;" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Item To Order">
                                                            <i class="bi bi-plus p-0 m-0" style="font-size: 30px;cursor: pointer;color:white"></i>
                                                        </button>
                                                    </form>
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
                                <h4 class="py-4" style="color: #cda45e">Order Summary</h4>
                                    <div class="row">
                                        @if (count($orderItems) > 0)
                                        @foreach ($orderItems as $orderItem)
                                            <div class="col-sm-8">
                                                {{ $orderItem->item_name }}
                                            </div>
                                            <div class="col-sm-4">
                                                ${{ $orderItem->item_price }}
                                            </div>
                                        @endforeach
                                        <div class="col-sm-12">
                                            <hr>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <h6>Total Price : </h6>
                                        </div>
                                        <div class="col-sm-6 py-2">
                                            <h4 style="color: #cda45e">${{ $total }} Only</h4>
                                        </div>
                                        <div class="col-sm-12">
                                            <hr>
                                        </div>
                                        @endif

                                        <form action="{{ route('order.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="item_id" value="{{ $item->id }}" required>
                                            <input type="hidden" name="category_id" value="{{ $item->category->id }}">
                                            <input type="hidden" name="item_name" value="{{ $item->name }}">
                                            <input type="hidden" name="item_price" value="{{ $item->price }}">
                                            <input type="hidden" name="description" value="{{ $item->description }}">
                                            <input type="hidden" name="quantity" value="1">
                                            <input type="hidden" name="session_id" value="{{ Session::getId() }}">
                                            <input type="hidden" name="total_price" value="{{ $item->price }}">
                                            <input type="hidden" name="image" value="{{ $item->image }}">

                                            <div class="col-sm-12 py-2">
                                                <textarea name="user_address" id="user_address" cols="30" rows="2" class="form-control myinputclass">{{ $address->countryName }}, {{ $address->countryCode }}, {{ $address->regionCode }}, {{ $address->regionName }}, {{ $address->cityName }}, {{ $address->zipCode }}, {{ $address->isoCode }}, {{ $address->postalCode }}, {{ $address->latitude }}, {{ $address->longitude }}, {{ $address->metroCode }}, {{ $address->areaCode }}, {{ $address->timezone }}</textarea>
                                            </div>

                                            <div class="col-sm-12 py-2">
                                                <input type="text" name="email" required class="myinputclass form-control" placeholder="Enter Your Email">
                                            </div>
                                            <div class="col-sm-12 py-2">
                                                <input type="text" name="phone" required class="myinputclass form-control" placeholder="Enter Your Phone No">
                                            </div>
                                            <div class="col-sm-12">
                                                <button type="submit" class="btn btn-success btn-block float-end">Order Now</button>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection