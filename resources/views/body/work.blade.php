 <section id="work" class="bg-light">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 col-md-offset-2 text-center heading">
                     <div class="header-page">
                        <h2>Work</h2>
                        <span></span>
                     </div>
                     <p>Explore my digital endeavors: innovative apps, captivating websites, and user-centered projects showcasing my skills.</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 px-25 text-center">
                  </div>
                  <div class="col-lg-12">
                     <div class="work-gallery">
                        @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 col-sm-12 all web">
                            <div class="work">
                                <img class="img-fluid" src="{{ asset($project['image']) }}" alt="{{ $project['name'] }}">
                                <a href="{{ route('single.work', $project['id']) }}">
                                    <div class="desc">
                                        <div class="con">
                                            <h3>{{ $project['name'] }}</h3>
                                            <span>{{ $project['slug'] }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         </section>
