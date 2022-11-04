<nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
                <a class="navbar-brand" href="/">WPU Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{ ($active === "Home") ? 'active' : '' }}" href="/">Home</a>
                    <a class="nav-link {{ ($active === "About") ? 'active' : '' }}" href="/about">About</a>
                    <a class="nav-link {{ ($active === "Posts") ? 'active' : '' }}" href="/blog">Blog</a>
                    <a class="nav-link {{ ($active === "Categories") ? 'active' : '' }}" href="/categories">Categories</a>
                </div>
                </div>
            </div>
</nav>
