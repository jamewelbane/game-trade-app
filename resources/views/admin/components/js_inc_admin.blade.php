<!-- Preloader Script - Load early -->
<script src="../js/custom/preloader.js"></script>

<!-- Load core libraries -->
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>

{{-- <script src="../lib/ionicons/ionicons.js"></script> --}}

<script src="../js/azia.js" defer></script>
<script src="../js/jquery.cookie.js" defer></script>
<script src="../js/custom/global.js" defer></script>

<!-- Conditional loading based on route -->
@if (Route::currentRouteName() == 'dashboard')
    <script src="{{ asset('lib/peity/jquery.peity.min.js') }}" defer></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.js') }}" defer></script>
    <script src="{{ asset('lib/jquery.flot/jquery.flot.resize.js') }}" defer></script>
    <script src="{{ asset('lib/chart.js/Chart.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/chart.flot.sampledata.js') }}" defer></script>
    <script src="{{ asset('js/dashboard.sampledata.js') }}" defer></script>
@endif

@if (Route::currentRouteName() == 'add-item')
    <script src="{{ asset('js/custom/new_item_admin.js') }}" defer></script>
@endif
