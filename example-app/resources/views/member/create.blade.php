@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add New Team Member</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('teammembers.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="member_type_id" class="form-label">Member Type</label>
                            <select class="form-select" id="member_type_id" name="member_type_id" required>
                                @foreach ($memberTypes as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>

                      

                        <button type="submit" class="my-custom-button">Add Team Member</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
