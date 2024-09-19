<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="./index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Profil -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/profile">
                <i class="bi bi-person-circle"></i>
                <span>Profil</span>
            </a>
        </li>

        <!-- Articles -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Articles</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="blog-nav" class="nav-content collapse">
                <li>
                    <a href="./posts-create.html">
                        <i class="bi bi-circle"></i><span>Ajouter</span>
                    </a>
                </li>
                <li>
                    <a href="./posts-index.html">
                        <i class="bi bi-circle"></i><span>Liste</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Catégories d'Articles -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#category-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-folder"></i><span>Catégories</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="category-nav" class="nav-content collapse">
                <li>
                    <a href="">
                        <i class="bi bi-circle"></i><span>Ajouter</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.post_categories.index') }}">
                        <i class="bi bi-circle"></i><span>Liste</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Utilisateurs -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#user-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-people"></i><span>Utilisateurs</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="user-nav" class="nav-content collapse">
                <li>
                    <a href="./users.html">
                        <i class="bi bi-circle"></i><span>Liste</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Déconnexion -->
        <li class="nav-heading">
            <hr>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" onclick="return confirm('Ete vous surs ?')">
                <i class="bi bi-box-arrow-right"></i>
                <span>Déconnexion</span>
            </a>
        </li>
    </ul>
</aside>
