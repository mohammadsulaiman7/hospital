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
                @foreach ($doctors as $doctor)
                <tr>
                    <td>{{$doctor->id}}</td>
                  <td>
                    <img src="{{asset('storage/doctors/'.$doctor->image)}}"  />
                  </td>
                    <td>{{$doctor->name}}</td>
                  <td>{{$doctor->phone}}</td>
                  <td>{{$doctor->room_no}}</td>
                  <td>{{$doctor->created_at}}</td>
                  <td>{{$doctor->speciality->name}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  {!!$doctors->links() !!}