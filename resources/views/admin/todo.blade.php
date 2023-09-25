{{-- TODO LIST --}}
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
                            @foreach ($appointments as $appointment)
                                @if ($appointment->date->isToday())
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
                            @endforeach
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="d-flex">
    {!! $appointments->links() !!}
</div>
