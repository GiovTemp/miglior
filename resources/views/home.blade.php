@extends('template')
@section('content')
            <!-- end:fh5co-header -->
            <div class="fh5co-hero">
                <div class="fh5co-overlay"></div>
                <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/home-image.jpg);">
                    <div class="desc animate-box">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 col-sm-7">
                                    <h2>Ti serve un <b>avvocato</b>? <br>Descrivimi il tuo <b>caso</b></h2>
                                    <span><a class="btn btn-primary" data-toggle="modal" data-target="#myModal1">Descrivici il tuo caso</a></span>
                                </div>
                                <div class="col-md-5 col-sm-5">
                                    <h2>Sei un <b>avvocato</b>? <br>Affidati a <b>noi</b></h2>
                                    <span><a class="btn btn-primary" href="#contatti">Clicca qui</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:fh5co-hero -->
            @include('modal1')
           @endsection
           
           