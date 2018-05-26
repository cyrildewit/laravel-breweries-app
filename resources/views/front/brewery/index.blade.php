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
                    @if($userLocation)
                    <p><strong>From:</strong> {{ $userLocation['formatted_address'] }}</p>
                    <hr>
                    @endif
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
    </div>
 </div>
@endsection
