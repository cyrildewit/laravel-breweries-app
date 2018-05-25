@extends('front._layouts.master')

@section('title', 'Find breweries nearby!')

@section('content')
<div class="section section-header">
    <div class="parallax filter filter-color-primary">
        <div class="image" style="background-image: url('{{ Storage::disk('public')->url('static/bar-209148_1920.jpg') }}')"></div>

        <div class="container">
            <div class="content">
                <div class="title-area">
                    <p>Free service</p>
                    <h1 class="title-modern">Brewery Finder</h1>
                    <h3>Find nearby breweries around the world!</h2>
                    <div class="separator line-separator">♦</div>
                </div>

                <div class="find-breweries">
                    <form action="{{ route('front.brewery.index') }}" method="GET" class="form-inline" role="search">
                        <input type="text" name="search" placeholder="Enter a Location">
                        <button type="submit" class="">Find!</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('footer_resources')
@endpush
