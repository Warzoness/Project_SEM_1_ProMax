@extends('admin.masterview')

@section('tittle')
    <title>Admin Dash Board</title>
@endsection

@section('main-content')
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto h-full">
                <div id="welcome-page-0" class="welcome-page-section h-full flex flex-col items-center justify-center">
                    <div class="text-center">
                        <img src="{{ asset('assets/imgs/welcome.png') }}" alt="Welcome" class="mx-auto mb-8">
                        <h3 class="mb-2">Welcome <strong class="text-danger">{{ Auth::user()->fullname ?? '' }}</strong>,
                            lets
                            get
                            started with Elstar</h3>
                        <div class="mt-8 max-w-[350px] mx-auto">
                            <button class="btn btn-solid block w-full mb-2">Get started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection


@section('customJs')
    <script src="{{ asset('assets') }}/vendors/apexcharts/apexcharts.js"></script>

    <!-- Page js -->
    <script src="{{ asset('assets') }}/js/pages/project-dashboard.js"></script>
@endsection
