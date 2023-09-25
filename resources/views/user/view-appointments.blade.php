@extends('user.layout')
@section('content')
    <div class="page-section">
        <div class="container">
            <table class="table">
                <caption class="text-success">Appointments</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Doctor name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Start date</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0; ?>
                    @foreach ($appointments as $appointment)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td>{{ $appointment->doctor->name }}</td>
                            <td>{{ $appointment->date }}</td>
                            <td>{{ $appointment->start_date }}</td>
                            <td>{{ $appointment->message }}</td>
                            <td class="{{ $appointment->status ? 'text-success' : 'text-danger' }}">
                                {{ $appointment->status ? 'Completed' : 'Padding' }}</td>
                            <td>
                                <form action="{{ route('appointments.destroy', $appointment) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" data-toggle="modal"
                                        data-target="#deleteModal">Cancel</button>
                                </form>
                                {{-- <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Cancel appointment</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to cancel the appointment?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                    <button type="submit" class="btn btn-danger" id="confirmDelete">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                     --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- <script>
        $(document).ready(function () {
            // Initialize the modal
            var deleteModal = $('#deleteModal');
            var deleteButton = $('#deleteButton');
    
            // When the Delete button is clicked, show the modal
            deleteButton.on('click', function () {
                deleteModal.modal('show');
            });
    
            // When the Confirm Delete button is clicked, perform the delete action (replace with your logic)
            $('#confirmDelete').on('click', function () {
                // Replace this with your actual delete logic (e.g., AJAX request).
                // Here, we'll simply close the modal.
                deleteModal.modal('hide');
            });
        });
    </script> --}}
@endsection
