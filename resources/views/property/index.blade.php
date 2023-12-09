@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="col-md-9 col-9">
        <div class="card">
            <div class="card-body">

                <a class="btn btn-primary float-end mb-2" href="{{ route('property.create') }}"> +Create Property</a>
                <table class="table table-bordered mt-3" id="myTable">
                    <thead>
                        <td>SL</td>
                        <td>Name</td>
                        <td>Location</td>
                        <td>Price</td>
                        <td>Bed Room</td>
                        <td>Bath</td>
                        <td>Image</td>
                        <td>Description</td>
                        <td>Status</td>
                        <td>Action</td>
                    </thead>

                    <tbody>
                        @foreach ($property_list as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ number_format((float) $item->price, 2, '.', '') }} Tk</td>
                                <td>{{ $item->bed }}</td>
                                <td>{{ $item->bath }}</td>
                                <td>
                                    <img style="width: 150px; height: 100px;" src="{{ $item->image }}" alt="Property Image">
                                </td>
                                <td>{!! $item->description !!}</td>
                                <td>{{ isset($item) && $item->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a href="{{ route('property.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('property.destroy', $item->id) }}" style="display:inline-block"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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
