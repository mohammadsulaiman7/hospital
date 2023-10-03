<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Patients</h4>
                <div class="table-responsive">
                    <table class="table" align="center">
                        <thead>
                            <tr>
                                {{-- <th>
                    <div class="form-check form-check-muted m-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                      </label>
                    </div>
                  </th> --}}

                                <th></th>
                                <th></th>
                                <th>Patient Name </th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Start date</th>
                                <th>Appointment count</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $check = false;
                            @endphp
                            @foreach ($users as $key => $user)
                                @if ($key <= 7)
                                    @if ($user->usertype == '1')
                                    @else
                                        <tr>
                                            <td>{{ $user->id }}</td>

                                            <td>
                                                <img src="{{ asset('storage/profiles/' . $user->profile) }}" alt="image">
                                                <span class="ps-2">{{ $user->name }}</span>
                                            </td>
                                            {{-- <td>
                    <div class="form-check form-check-muted m-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                      </label>
                    </div>
                  </td> --}}
                                            {{-- <td>
                    <img src="{{asset('storage/profiles/'.$user->profile)}}" alt="image" />
                    <span class="ps-2">{{$user->name}}</span>
                  </td> --}}
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->appointments->count() }}</td>
                                        </tr>
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
            </div>
        </div>
    </div>
</div>
</div>
