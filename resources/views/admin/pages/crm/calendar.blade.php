@extends('admin.masterview')

@section('tittle')
    <title>Admin | CRM | Calendar </title>
@endsection


@section('main-content')
    <main class="h-full">
        <div class="page-container relative h-full flex flex-auto flex-col px-4 sm:px-6 md:px-8 py-4 sm:py-6">
            <div class="container mx-auto">
                <div class='calendar'>
                    <div id='calendar'></div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('customJs')
    <!-- Other Vendors JS -->
    <script src="{{ asset('assets') }}/vendors/fullcalendar/dist/index.global.min.js"></script>

    <!-- Page js -->
    <script src="{{ asset('assets') }}/js/pages/calendar.js"></script>
@endsection
