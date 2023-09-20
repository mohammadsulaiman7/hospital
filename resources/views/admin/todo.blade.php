{{-- TODO LIST --}}
<div class="col-md-14 col-xl-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Appointments </h4>
            <div class="list-wrapper">
              <form action="" method="POST">

                <table class="table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Patient name</th>
                            <th>Appointment date</th>
                            <th>Message</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $appointment)
                            @if ($appointment->date->isToday())
                                <tr>
                                    <td>
                                        <label class="form-check-label ">
                                            <input class="checkbox" type="checkbox" name="completed []"
                                                value="{{ $appointment->id }}"
                                                {{ $appointment->status ? 'check' : '' }}></label>
                                    </td>
                                    <td>{{ $appointment->patient->name }}</td>
                                    <td>{{ $appointment->date }}</td>
                                    <td>{{ $appointment->message }}</td>
                                    <td class="{{ $appointment->status ? 'text-success' : 'text-danger' }}">
                                        {{ $appointment->status ? 'Completed ' : 'Pending' }}</td>
                                </tr>
                            @else
                            @endif
                        @endforeach
                    </tbody>
                </table>
                @if(isset($appointments) && $appointments->count()>0 )
                <button type="submit" class="btn btn-outline-info mt-2">Update Status</button>
                @endif
              </form>

                {{-- <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
            @foreach ($appointments as $appointment)
            <li>
              <div class="form-check form-check-primary">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox">{{$appointment->date}}</label>
              </div>
              <i class="remove mdi mdi-close-box"></i>
            </li>
            @endforeach
          </ul> --}}
            </div>
        </div>
    </div>
</div>
