{{-- Appointments --}}
<div class="col-md-14 col-xl-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Today appointments</h4>
            <div class="list-wrapper">
                <form action="" method="POST">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Patient name</th>
                                <th>Patient email</th>
                                <th>Appointment date</th>
                                <th>Start date</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $check = false;
                            @endphp
                            @foreach ($appointments as $key => $appointment)
                                @if ($appointment->date->isToday())
                                    @if ($key <= 7)
                                        <tr>
                                            <td>{{ $appointment->id }}</td>
                                            <td>{{ $appointment->user->name }}</td>
                                            <td>{{ $appointment->user->email }}</td>
                                            <td>{{ $appointment->date->format('Y-m-d') }}</td>
                                            <td>{{ $appointment->start_date }}</td>
                                            <td>{{ $appointment->message }}</td>
                                            <td class="{{ $appointment->status ? 'text-success' : 'text-danger' }}">
                                                {{ $appointment->status ? 'Completed ' : 'Pending' }}</td>
                                            <td><a href="#"
                                                    class="{{ $appointment->status ? 'btn btn-inverse-danger' : ' btn btn-inverse-success' }}">{{ $appointment->status ? 'Delete' : ' Approve' }}</a>
                                            </td>
                                        </tr>
                                    @else
                                    @endif
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
            </form>
        </div>
    </div>
</div>
</div>
<div class="d-flex">
</div>
