@extends('layouts.app')

@section('content')
    <div class="col-md-10 col-10">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-success float-end mb-3" href="{{ route('employee.index') }}">Back</a>

                <form action="{{ route('employee.update',$employee->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @include('employee.form')

                    <button type="submit" class="btn btn-primary float-end">Submit</button>

                </form>

            </div>

        </div>

    </div>
@endsection
