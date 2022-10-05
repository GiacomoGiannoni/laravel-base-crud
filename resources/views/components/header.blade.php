<header>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <h5 class="navbar-brand my-0 text-bg-primary">Comics shop</h5>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-bg-primary"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link active text-bg-primary" aria-current="page" href="{{route('Library.index')}}">Library List</a>
            <a class="nav-link text-bg-primary" href="{{route('Library.create')}}">Add Comic Strip</a>
            </div>
        </div>
        </div>
    </nav>
</header>