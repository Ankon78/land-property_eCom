@extends('layouts.app')

@section('content')
    <div class="col-md-10 col-10">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success float-end mb-3" href="{{ route('carousel.index') }}">Back</a>

                <form action="{{ route('carousel.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @include('carousel.form')

                    <button type="submit" class="btn btn-primary float-end">Submit</button>

                </form>

            </div>

        </div>

    </div>
@endsection
