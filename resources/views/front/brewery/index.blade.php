@extends('front._layouts.master')

@section('title', 'Find breweries nearby!')

@section('content')
<div class="section">
    <div class="container">

        <div class="title-area">
            <h2>Near Breweries</h2>
            <div class="separator separator-danger">∎</div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="" method="GET" class="form-inline clearfix">
                    <div class="form-group" style="float:left; width: 75%">
                        <input type="text" class="form-control" name="search" value="{{ Request::input('search') }}" placeholder="Enter a Location" style="margin: 0; width: 100%;">
                    </div>

                    <button type="submit" class="btn btn-default" style="float:right;">Search!</button>
                </form>
                <hr>
                @if(count($breweries) > 0)
                    <p><strong>From:</strong> {{ $userLocation['formatted_address'] }}</p>
                    <hr>
                    @foreach($breweries as $brewery)
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h2>{{ $brewery->name }}</h2>
                                <p>{{ $brewery->excerpt }}</p>
                                <ul>
                                    <li><strong>Distance:</strong> {{ $brewery->getDistance() }}</li>
                                    <li><strong>Open today:</strong> {{ $brewery->getOpeningHours()->isOpen() ? 'open' : 'gesloten' }}</li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @else
                <p>We couldn't find any breweries nearby! Please adjust the filters!</p>
                @endif
            </div>
        </div>



            {{-- <ul class="nav nav-text" role="tablist">
                <li class="active">
                    <a href="#testimonial1" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="assets/img/faces/face_5.jpg"/>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#testimonial2" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="assets/img/faces/face_6.jpg"/>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#testimonial3" role="tab" data-toggle="tab">
                        <div class="image-clients">
                            <img alt="..." class="img-circle" src="assets/img/faces/face_2.jpg"/>
                        </div>
                    </a>
                </li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane active" id="testimonial1">
                    <p class="description">
                        And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color... Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all!
                    </p>
                </div>
                <div class="tab-pane" id="testimonial2">
                    <p class="description">Green I even had the pink polo I thought I was Kanye I promise I will never let the people down. I want a better life for all! And I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. Now there is only one important color...
                    </p>
                </div>
                <div class="tab-pane" id="testimonial3">
                    <p class="description"> I used a period because contrary to popular belief I strongly dislike exclamation points! We no longer have to be scared of the truth feels good to be home In Roman times the artist would contemplate proportions and colors. The 'Gaia' team did a great work while we were collaborating. They provided a vision that was in deep connection with our needs and helped us achieve our goals.
                    </p>
                </div>

            </div> --}}

    </div>
 </div>
@endsection
