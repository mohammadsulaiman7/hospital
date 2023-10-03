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
                            @foreach ($specialities as $speciality)
                                <tr>
                                    <td>{{ $speciality->id }}</td>
                                    <td>{{ $speciality->name }}</td>
                                    <td>{{ $speciality->cost }} <span class="text-success">$</span></td>
                                    <td>{{ $speciality->appointments->count() }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{!! $specialities->links() !!}
