@extends('layout.frontend.master')
@section('content')

  <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <style type="text/css">navbar{background-color: blue;}</style>
          <div class="container">
               <div class="row">

                    <div class="col-md-offset-3 col-md-6 col-sm-12">
                         <div class="section-title">
                              <h1>Tentang Sekolah</h1>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="team-thumb">
                              <img src="{{('assets/images/team-image1.jpg')}}" class="img-responsive" alt="Andrew Orange">
                              <div class="team-info team-thumb-up">
                                   <h3>SMA Negeri</h3>
                                   <small>Art Director</small>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et dolore magna.</p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     @stop