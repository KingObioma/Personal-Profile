  <div class="container" style="margin-top: 100px;">
            <div class="row p-80">
               <div class="col-md-8 mb-4">
                  <img class="img-fluid" src="{{ asset($project['image']) }}" alt="">
               </div>
               <div class="col-md-4">
                     <div class="desc">
                        <h2>{{ $project['name'] }}</h2>
                        <span><a href="#">{{ $project['slug'] }}</a></span>
                        <p>{{ $project['description'] }}</p>
                         <p class="social-icon">
                           <a href="#"><i class="fab fa-facebook-square"></i></a>
                           <a href="#"><i class="fab fa-twitter-square"></i></a>
                           <a href="#"><i class="fab fa-instagram"></i></a>
                           <a href="#"><i class="fab fa-dribbble"></i></a>
                        </p>
                     </div>
               </div>
            </div>
    </div>
