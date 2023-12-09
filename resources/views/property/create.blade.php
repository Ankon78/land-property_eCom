@extends('layouts.app')

@section('content')
    <div class="col-md-10 col-10">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success float-end mb-3" href="{{ route('property.index') }}">Back</a>

                <form action="{{ route('property.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @include('property.form')

                    <button type="submit" class="btn btn-primary float-end">Submit</button>

                </form>

            </div>

        </div>

    </div>
@endsection
