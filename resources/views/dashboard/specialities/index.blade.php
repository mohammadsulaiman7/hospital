<div class="row ">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Specialities</h4>
                <div class="table-responsive">
                    <table class="table" align="center">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Speciality name </th>
                                <th>Speciality cost</th>
                                <th>Speciality appointment count</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $check = false;
                            @endphp
                            @foreach ($specialities as $key => $speciality)
                                @if ($key <= 7)
                                    <tr>
                                        <td>{{ $speciality->id }}</td>
                                        <td>{{ $speciality->name }}</td>
                                        <td>{{ $speciality->cost }} <span class="text-success">$</span></td>
                                        <td>{{ $speciality->appointments->count() }}</td>
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
