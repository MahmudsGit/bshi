<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link btn-outline-secondary" href="{{ route('application') }}">Jobs <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('applicants_copy') }}">Applicants Copy <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('online_pay') }}">Online Payment<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('admit_download') }}" tabindex="-1" aria-disabled="true">Admit Card</a>
            </li>
        </ul>
    </div>
</nav>
