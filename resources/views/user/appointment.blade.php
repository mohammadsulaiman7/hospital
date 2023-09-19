<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
        <form class="main-form" action="{{route('appointments.store')}}" method="POST">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="doctor_id" id="departement" class="custom-select">
                        <option value="general" disabled selected>Doctor</option>
                        @foreach ($doctors as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->name}} -- {{$doctor->speciality->name}}</option>
                        @endforeach
                        {{-- <option value="cardiology">Cardiology</option>
                        <option value="dental">Dental</option>
                        <option value="neurology">Neurology</option>
                        <option value="orthopaedics">Orthopaedics</option> --}}
                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div>