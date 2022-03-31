@extends('layouts.admin')

@section('content')
    <section class="breadcrumbs">
        <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Add New Item</h2>
            <ol>
            <li><a href="index.html">Admin</a></li>
            <li>Add New Item</li>
            </ol>
        </div>

        </div>
    </section>

    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        @if(Session::has('message'))
        <p class="p-3 border mb-4 text-center" style="background-color:#acacac;color:#625b4b">
            {{ Session::get('message') }}
        </p>
        @endif

        <div class="section-title">
          <h2>Items</h2>
          <p>Add New Item</p>
        </div>

        <form action="{{ route('items.store') }}" method="POST"   data-aos="fade-up" data-aos-delay="100" enctype="multipart/form-data">
            @csrf
            <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <select name="category_id" id="" class="form-control myinputclass">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control myinputclass" name="name" id="name" placeholder="Enter Name" data-rule="name" data-msg="Please enter a valid name" >
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control myinputclass" name="price" id="price" placeholder="Your Price" data-rule="minlen:1" data-msg="Please enter at least 1 chars" >
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control myinputclass" name="description" rows="5" placeholder="Description"></textarea>
            <div class="validate"></div>
          </div>
          <div class="row mt-3">
              <div class="col-sm-6">
                <input type="file" name="image" id="image" style="color:#a39b86;" >
              </div>
              <div class="col-sm-6">
                <div style="float:right"><button type="submit" class="mybuttonclass">Book a Table</button></div>
              </div>
          </div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->
  
@endsection