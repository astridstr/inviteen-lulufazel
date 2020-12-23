@extends('layouts.master')

@section('content')
<section class="post-content-area single-post-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 posts-list">
                <div class="single-post row">
                    <div class="col-lg-10" style="display: block; margin: 0 auto;">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{ URL::asset('assets/img/naveen.png') }}" alt="naveen-theme" >
                        </div>									
                    </div>
                </div>
                <div class="navigation-area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12 flex-row d-flex justify-content-start align-items-center" >
                            <div class="detials" style="display: block; margin: 0 auto;">
                                <a href="/themes/naveen" class="genric-btn primary" style="text-decoration: none;" target="_blank">Demo</a>
                                <a href="https://wa.link/r8k862" target="_blank" style="margin-left: 15px;" class="genric-btn info" style="text-decoration: none;">Pilih Ini</a>
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div>
    </div>	
</section>

@endsection