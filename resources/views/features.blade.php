@extends('layout.frontend.master')
@section('content')

 <!-- FEATURE -->
     <section id="feature" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h1>What you get</h1>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <ul class="nav nav-tabs" role="tablist">
                              <li class="active"><a href="#tab01" aria-controls="tab01" role="tab" data-toggle="tab">Nilai</a></li>

                              <li><a href="#tab02" aria-controls="tab02" role="tab" data-toggle="tab">Absensi</a></li>

                              <li><a href="#tab03" aria-controls="tab03" role="tab" data-toggle="tab">Prestasi</a></li>

                              <li><a href="#tab04" aria-controls="tab04" role="tab" data-toggle="tab">Catatan Hitam</a></li>
                         </ul>

                         <div class="tab-content">
                              <div class="tab-pane active" id="tab01" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Fisika</h2>
                                        <p>Nam feugiat a ante sollicitudin luctus. Quisque eget placerat massa. Ut quis ligula ornare, pellentesque velit eget, vestibulum est. Donec pretium tristique elit eget sodales. Pellentesque posuere.</p>
                                        <a href="{{ url('table',[$_GET['NIS'], $id=203]) }}" class="navbar-brand">More</a>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Kimia</h2>
                                        <p>Aliquam massa massa, consectetur non mattis fringilla, sodales ac turpis. Morbi ac felis sagittis, faucibus mauris vitae, placerat mauris.</p>
                                        <a href="{{ url('table',[$_GET['NIS'], '204']) }}" class="navbar-brand">More</a>
                                   </div>
                                     <!-- <button type="button" class="btn btn-outline-secondary">Secondary</button> -->
                              </div>


                              <div class="tab-pane" id="tab02" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Compatible Browsers</h2>
                                        <p>Nam maximus elit a metus luctus, a faucibus magna mattis. Ut malesuada viverra iaculis. Nunc euismod sit amet neque a tincidunt.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>User Friendly</h2>
                                        <p>Maecenas maximus velit lorem, quis pharetra turpis fringilla id. Vestibulum tempor facilisis efficitur. Sed nec nisi sit amet nibh pellentesque elementum.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>HTML5 & CSS3</h2>
                                        <p>In viverra ipsum ornare sapien rhoncus ullamcorper. Vivamus vitae risus ac mi vehicula sagittis. Nulla dictum magna sit amet pharetra aliquam.</p>
                                   </div>
                              </div>

                              <div class="tab-pane" id="tab03" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Akademik</h2>
                                        <p>Mauris rutrum est at fringilla pulvinar. Nam ligula urna, lobortis non scelerisque vel, molestie eu massa. Nullam mattis elit at tortor accumsan.</p>
                                   </div>
                                   <div class="tab-pane-item">
                                        <h2>Non Akademik</h2>
                                        <p>Quisque ullamcorper sem quis sapien cursus efficitur. Sed id sodales ipsum. Morbi eleifend tempus erat sit amet vehicula. Nulla at posuere tellus, non mattis erat. Nulla id massa gravida.</p>
                                   </div>
                              </div>

                              <div class="tab-pane" id="tab04" role="tabpanel">
                                   <div class="tab-pane-item">
                                        <h2>Tabel Catatan Hitam</h2>
                                        <p>Mauris rutrum est at fringilla pulvinar. Nam ligula urna, lobortis non scelerisque vel, molestie eu massa. Nullam mattis elit at tortor accumsan.</p>
                                   </div>    
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <div class="feature-image">
                              <img src="{{('assets/images/feature-mockup.png')}}" class="img-responsive" alt="Thin Laptop">                             
                         </div>
                    </div>

               </div>
          </div>
     </section>

     @stop
