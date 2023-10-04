<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Doctors</h4>
                <div class="table-responsive">
                    <table class="table" align="center">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Profile</th>
                                <th>Doctor Name </th>
                                <th>Phone</th>
                                <th>Room No :</th>
                                <th>Age</th>
                                <th>Speciality</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $check = false;
                            @endphp
                            @foreach ($doctors as $key => $doctor)
                                @if ($key <= 7)
                                    <tr>
                                        <td>{{ $doctor->id }}</td>
                                        <td>
                                            <img src="{{ asset('storage/doctors/' . $doctor->image) }}" />
                                        </td>
                                        <td>{{ $doctor->name }}</td>
                                        <td>{{ $doctor->phone }}</td>
                                        <td>{{ $doctor->room_no }}</td>
                                        <td>{{ $doctor->age }}</td>
                                        <td>{{ $doctor->speciality->name }}</td>
                                    </tr>
                                @else
                                    @php
                                        $check = true;
                                    @endphp
                                @break
                            @endif
                        @endforeach
                    </tbody>
                </table>
                @if ($check)
                    <a href="" class="btn btn-inverse-info mt-3 w-100 fw-bolder">View all</a>
                @endif
            </div>
        </div>
    </div>
</div>
</div>
