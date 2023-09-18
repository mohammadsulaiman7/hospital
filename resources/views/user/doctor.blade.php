<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @forelse ($doctors as $doctor)
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="{{asset('storage/doctors/'.$doctor->image)}}" alt="" style="height: 400px;object-fit:cover;">
                        <div class="meta">
                            <a href="mailto:mohammadsulaiman355@gmail.com"><span class="mai-call"></span></a>
                            <a href="whatsapp://send?phone={{$doctor->phone}}"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Dr. {{$doctor->name}}</p>
                        <span class="text-sm text-grey">{{$doctor->speciality}}</span>
                    </div>
                </div>
            </div>
            @empty
            <div id="animation"></div>
            @endforelse

            {{-- <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/doctor_2.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Dr. Alexa Melvin</p>
                        <span class="text-sm text-grey">Dental</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                        <span class="text-sm text-grey">General Health</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                        <span class="text-sm text-grey">General Health</span>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                        <div class="meta">
                            <a href="#"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">Dr. Rebecca Steffany</p>
                        <span class="text-sm text-grey">General Health</span>
                    </div>
                </div>
            </div>
         --}}
        </div>
    </div>
</div>
<script>
    // Load the animation
    const animationContainer = document.getElementById('animation');
    const animationData = '{{asset('animations/animation1.json')}}'; // Replace with the path to your JSON animation file
    const animation = lottie.loadAnimation({
      container: animationContainer,
      renderer: 'svg', // You can choose 'canvas' or 'svg'
      loop: true, // Set to true if you want the animation to loop
      autoplay: true, // Set to true if you want the animation to play automatically
      path: animationData,
    });
  </script>

  