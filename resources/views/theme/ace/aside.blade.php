<div id="sidebar" class="sidebar responsive ace-save-state sidebar-fixed compact">
    <script type="text/javascript">
        try {
            ace.settings.loadState('sidebar')
        } catch (e) {}
    </script>
    <ul class="nav nav-list">
        <li class="{{ !Route::is('home') ?: 'active' }}">
            <a href="{{ route('home') }}">
                <i class="menu-icon fa-solid fa-gauge-simple"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ !Route::is('Facturas') ?: 'active' }}">
            <a href="{{ route('Facturas') }}">
                <i class="menu-icon fa-solid fa-file-invoice-dollar"></i>
                <span class="menu-text"> Facturas </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ !Route::is('Cartera') ?: 'active' }}">
            <a href="{{ route('Cartera') }}">
                <i class="menu-icon fa-solid fa-coins"></i>
                <span class="menu-text"> Cartera </span>
                <b class="arrow fa fa-angle-down"></b>
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ !Route::is('Referencias') ?: 'active' }}">
            <a href="{{ route('Referencias') }}">
                <i class="menu-icon fa-solid fa-list-ol"></i>
                <span class="menu-text"> Referencias </span>
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ !Route::is('Agentes') ?: 'active' }}">
            <a href="{{ route('Agentes') }}">
                <i class="menu-icon fa-solid fa-user-group"></i>
                <span class="menu-text"> Agentes </span>
            </a>
            <b class="arrow"></b>
        </li>
        <li class="{{ !Route::is('Reportes') ?: 'active' }}">
            <a href="{{ route('Reportes') }}">
                <i class="menu-icon fa-solid fa-chart-pie"></i>
                <span class="menu-text"> Reportes </span>
            </a>
            <b class="arrow"></b>
        </li>
    </ul><!-- /.nav-list -->
</div>
