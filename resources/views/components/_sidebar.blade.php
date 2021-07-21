<div class="sidebar">
    <div class="app-title">Quis Web</div>

    <div class="sidebar-header">
        <img src="{{ asset('images/profile-img.png') }}" alt="">
        <div class="name-tag">
            <div class="name">Aidillia Adha Hsb</div>
            <div class="status">Admin</div>
        </div>
    </div>

    <div class="sidebar-menu-tag">Menu</div>
    <div class="sidebar-content">
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="sidebar-menu-item">
                    <i class="fas fa-desktop sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Dashboard</div>
                </a>
            </li>

            <li>
                <a href= "{{ route('admin.category') }}" class="sidebar-menu-item">
                    <i class="fas fa-desktop sidebar-icon-img"></i>
                    <div class="sidebar-text-item">Category</div>
                </a>
            </li>
        </ul>


    </div>
</div>