@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="col-md-9 col-9">
        <div class="card">
            <div class="card-body">

                 <table class="table table-bordered mt-3" id="myTable">
                    <thead>
                        <td>SL</td>
                        <td>Name</td>
                        <td>Role</td>
                        <td>Email</td>
                        <td>Action</td>
                    </thead>

                    <tbody>
                        @foreach ($user_list as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->role }}</td>
                                <td>{{ $item->email }}</td>

                                <td style="width: 40px">
                                    <form action="{{ route('user.destroy', $item->id) }}" style="display:inline-block"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" data-toggle="tooltip" class="btn btn-danger delete_button">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>

    </div>
@endsection

@push('scripts')
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
@endpush
