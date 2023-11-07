@extends('home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Racing Team</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('teams.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="team_name" class="form-label">Team Name</label>
                            <input type="text" class="form-control" id="team_name" name="team_name" required>
                        </div>

                        @foreach ($memberTypes as $type)
                        <div class="mb-3">
                            <label for="role_{{ $type->id }}" class="form-label">{{ $type->name }} min:{{$type->minSelections}} max:{{$type->maxSelections}}</label>
                            <select class="form-select" id="role_{{ $type->id }}" name="roles[{{ $type->id }}][]" multiple data-min-selection="{{ $type->minSelections }}" data-max-selection="{{ $type->maxSelections }}">
                                @foreach ($membersByType[($type->id)-1] as $member)
                                <option value="{{ $member->id }}">{{ $member->first_name }} {{ $member->last_name }}</option>
                                @endforeach
                            </select>
                            <span id="role_{{ $type->id }}-feedback" class="invalid-feedback" style="display:none;"></span>
                        </div>
                        @endforeach

                        <button type="submit" class="my-custom-button">Create Team</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        function checkSelectionCount(select) {
            let minSelections = parseInt(select.dataset.minSelection);
            let maxSelections = parseInt(select.dataset.maxSelection);
            let count = select.selectedOptions.length;
            let feedbackElement = document.getElementById(select.id + '-feedback');

            if (count < minSelections || count > maxSelections) {
                feedbackElement.textContent = 'Please select between ' + minSelections + ' and ' + maxSelections + ' members.';
                feedbackElement.style.display = 'block';
                select.classList.add('is-invalid');
            } else {
                feedbackElement.style.display = 'none';
                select.classList.remove('is-invalid');
            }
        }

        
        document.querySelectorAll('select[data-min-selection]').forEach(function (select) {
            select.addEventListener('change', function () {
                checkSelectionCount(this);
            });
        });
    });
</script>
@endpush