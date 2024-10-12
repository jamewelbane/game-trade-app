<!-- Preloader Script - Load early -->
<script src="../js/custom/preloader.js"></script>

<!-- Load core libraries -->
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="../lib/ionicons/ionicons.js"></script> --}}

<script src="../js/azia.js" defer></script>
<script src="../js/jquery.cookie.js" defer></script>
<script src="../js/custom/global.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js" defer></script>

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

@if (Route::currentRouteName() == 'account-listing-table')
    <script src="{{ asset('js/custom/mystore_accounts.js') }}" defer></script>
@endif
