@extends('template')
@section('content')
  <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/home-image-4.jpg);">
            <div class="desc animate-box">
                <div class="container">
                    <div class="row">
                        <center>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                               <a href="" data-toggle="modal" data-target="#lucamodal"><img src="images/luca_albergo.png" class="img-responsive"></a>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6">
                             <a href="" data-toggle="modal" data-target="#giovannimodal"><img src="images/giovanni_tempesta.png" class="img-responsive"></a>
                         </div>
                     </center>
                 </div>
                
             </div>
         </div>

     </div>
 </div>
  @include('modalg')
   @include('modall')
 @endsection