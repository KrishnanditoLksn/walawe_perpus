<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <!-- Offcanvas Trigger Button -->
        <!-- Brand -->
        <a class="navbar-brand" href="#">Perpustakan USD</a>
        <form id="logout-form" action="" method="POST" style="display: none;">
            @csrf
        </form>
        <a href="" class="btn btn-danger"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
           Logout
        </a>

    </div>
</nav>
