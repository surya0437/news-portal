<x-admin-header />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <x-admin-navbar />
        <!-- Main Content -->
        <div class="main-content">
            {{ $slot }}
            <x-admin-sidebar-setting />
        </div>

    </div>
</div>
<x-admin-footer />
