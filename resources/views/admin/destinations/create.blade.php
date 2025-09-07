@extends('admin.master')

@section('title', 'Create Destination')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Create Destination</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.destinations.index') }}">Destinations</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
        </nav>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Destination Information</h5>

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('admin.destinations.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="zone" class="col-sm-2 col-form-label">Zone</label>
                                <div class="col-sm-10">
                                    <select class="form-select" id="zone" name="zone">
                                        <option value="">Select Zone</option>
                                        <option value="Zone 1" {{ old('zone') == 'Zone 1' ? 'selected' : '' }}>Zone 1</option>
                                        <option value="Zone 2" {{ old('zone') == 'Zone 2' ? 'selected' : '' }}>Zone 2</option>
                                        <option value="Zone 3" {{ old('zone') == 'Zone 3' ? 'selected' : '' }}>Zone 3</option>
                                        <option value="Zone 4" {{ old('zone') == 'Zone 4' ? 'selected' : '' }}>Zone 4</option>
                                        <option value="Zone 5" {{ old('zone') == 'Zone 5' ? 'selected' : '' }}>Zone 5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_active">
                                            Active
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-10 offset-sm-2">
                                    <button type="submit" class="btn btn-primary">Create Destination</button>
                                    <a href="{{ route('admin.destinations.index') }}" class="btn btn-secondary">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
