@extends('layout.frontend.master')
@section('content')
     <!-- FEATURE -->
     <section id="home" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
               <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="home-info">
                              <h1>SMA UNGGUL ACEH TIMUR</h1>
                              <form action="{{url('/features/')}}" method="get" class="online-form"> 
                                   <input type="text" name="NIS" class="form-control" placeholder="Enter your email" required="">
                                   <button type="submit" class="form-control">login</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>
  <!-- batas header -->

@stop