<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.head')
<body>
    <div id="app">
        @include('layouts.navigation')
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
@stack('scripts')

</html>


<style>
    .my-custom-button {
        background-color: #444a50 !important; /* Dark grey background with higher priority */
        border-color: #444a50 !important; /* Dark grey border with higher priority */
        color: white !important; /* White text with higher priority */
        border-radius: 0.5rem !important; /* Rounded corners with higher priority */
        padding: 0.75rem 1.5rem !important; /* Larger padding for a bigger button */
        transition: background-color 0.3s ease !important; /* Smooth transition for background color */
    }

    .my-custom-button:hover {
        background-color: #33373b !important; /* Slightly darker grey on hover with higher priority */
        border-color: #1d2124 !important; /* Slightly darker border color on hover with higher priority */
    }

    .mb-3 {
        margin-bottom: 1rem !important;
        background-color: #f8f9fa !important; /* Light grey background */
        padding: 1rem !important;
        border-radius: 0.5rem !important;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
    }

    .form-label {
        color: #495057 !important; /* Dark grey color for text */
        font-weight: 600 !important;
        margin-bottom: 0.5rem !important;
    }

    .form-select {
        display: block !important;
        width: 100% !important;
        padding: 0.5rem 1rem !important;
        font-size: 1rem !important;
        font-weight: 400 !important;
        line-height: 1.5 !important;
        color: #495057 !important;
        background-color: #fff !important;
        background-clip: padding-box !important;
        border: 1px solid #ced4da !important;
        border-radius: 0.25rem !important;
        transition: border-color 0.3s ease-in-out !important;
    }


    .form-select:hover {
        border-color: #adb5bd !important; /* Slightly darker border on hover */
    }

    .invalid-feedback {
        display: none !important; /* Hide by default */
        color: #dc3545 !important; /* Bootstrap's default color for validation feedback */
        margin-top: 0.5rem !important;
    }

    .is-invalid + .invalid-feedback {
        display: block !important;
    }

    .list-group {
        padding-left: 0 !important;
        margin-bottom: 20px !important;
        background-color: #fff !important;
        border-radius: 0.25rem !important;
    }

    .list-group-item {
        position: relative !important;
        display: block !important;
        padding: 1rem 1.5rem !important;
        margin-bottom: -1px !important;
        background-color: #f8f9fa !important;
        border: 1px solid rgba(0,0,0,.125) !important;
    }

    .list-group-item h2, .list-group-item h3 {
        color: #343a40 !important; /* Dark gray text */
    }

    .list-group-item ul {
        list-style-type: none !important;
        padding: 0 !important;
    }

    .list-group-item li {
        padding: 5px 0 !important;
        color: #495057 !important; /* Darker text for list items */
    }

</style>
