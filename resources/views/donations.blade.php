@extends('layouts.default')

@section('content')
    <section id="available" class="ftco-section ftco-degree-bg">
      <div class="container">

        <div class="card-columns">
        @foreach ($donations as $item)
            <div class="card ftco-animate blog-entry" data-aos-delay="100">
                @if ($item->image != '')
                    <a href="#" class="block-20" style="background-image: url({{asset('uploads/donations/images/'.$item->image)}});">
                    </a>
                @endif
                <div class="text p-4 d-block">
                    <div class="meta mb-3">
                        <div><a href="#">Donated by <strong>{{$item->donor->name}}</strong></a></div>
                        <div><a href="#" class="meta-chat"><strong>{{$item->quantity}} </strong> in stock</a></div>
                        <div><a class="badge badge-dark text-white" href="#">{{$item->type}}</a></div>
                        <div><a class="badge badge-dark text-white" href="#">{{$item->state}}</a></div>
                    </div>
                    <h3 class="heading"><a href="#">{{$item->name}}</a></h3>
                    <p><a class="btn btn-primary" href="{{ action('HomeController@singleDonation', $item->id) }}">View details</a></p>
                </div>
            </div>
        @endforeach
        </div>

        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
               {!! $donations->links() !!}
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
