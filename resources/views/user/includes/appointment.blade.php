<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
        <form class="main-form" action="{{ route('appointments.store') }}" method="POST">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" class="form-control" name="date" min="{{now()->format('Y-m-d')}}" required>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="speciality_id" id="select1" class="custom-select" required>
                        <option value="general" disabled selected>Specialities</option>
                        @foreach ($specialities as $specialty)
                        @if($specialty->doctors->count() > 0)
                            <option value="{{ $specialty->id }}">{{ $specialty->name }}  -- {{$specialty->cost}} <span class="text-success">$</span></option>
                            @else 
                            <option value="{{ $specialty->id }}" disabled>{{ $specialty->name }}  -- {{$specialty->cost}} <span class="text-success">$</span></option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="start_date" class="custom-select" required>
                        <option value="general" disabled selected>Start date</option>
                        @foreach ($times as $time)
                            <option @selected(old('start_time' == $time))>{{ $time }} </option>
                        @endforeach
                    </select>
                </div>
                {{-- <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms" style="display:none" id="select2-container">
                    <select name="doctor_id" id="select2" class="custom-select"> --}}
                        {{-- <option value="general" disabled selected>Doctor</option>
                        @foreach ($doctors as $doctor)
                        <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                        @endforeach --}}
                        {{-- <option value="cardiology">Cardiology</option>
                        <option value="dental">Dental</option>
                        <option value="neurology">Neurology</option>
                        <option value="orthopaedics">Orthopaedics</option> --}}
                    {{-- </select>
                </div> --}}
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea id="message" class="form-control" rows="6" placeholder="Enter message.." name="message"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
        </form>
    </div>
</div>
{{-- <script>
    // Get references to the select elements
    const select1 = document.getElementById("select1");
    const select2 = document.getElementById("select2");

    // Add an event listener to the first select element
    select1.addEventListener("change", function() {
        const selectedValue = select1.value;

        // Make an AJAX request to fetch data based on the selected value
        fetch(`/get-values/${selectedValue}`)
            .then(response => response.json())
            .then(data => {
                // Clear the options in the second select element
                select2.innerHTML = "";

                // Add new options based on the fetched data
                data.forEach(item => {
                    const option = document.createElement("option");
                    option.value = item.value; // Use appropriate field from your model
                    option.textContent = item.label; // Use appropriate field from your model
                    select2.appendChild(option);
                });
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
<script>
    const firstSelect = document.getElementById("select1");
    const secondSelectContainer = document.getElementById("select2-container");

    // Add an event listener to the first select element
    firstSelect.addEventListener("change", function() {
        // Check the selected value
        if (firstSelect.value === 1) {
            // If "Option 2" is selected, show the second select
            secondSelectContainer.style.display = "block";
        } else {
            // Otherwise, hide it
            secondSelectContainer.style.display = "none";
        }
    });
</script> --}}
