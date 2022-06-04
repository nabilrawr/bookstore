<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('template/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Snacked</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Book</li>
        <li>
            <a href="{{ route('book.index') }}"  target="_blank">
                <div class="parent-icon"><i class="bi bi-book"></i>
                </div>
                <div class="menu-title">Book List</div>
            </a>
        </li>
        <li>
            <a href="{{ route('book.create') }}" target="_blank">
                <div class="parent-icon"><i class="bi bi-plus-square"></i>
                </div>
                <div class="menu-title">Add Book</div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-tag"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('category.index') }}"><i class="bi bi-circle"></i>Category List</a>
                </li>
                <li> <a href="{{ route('category.create') }}"><i class="bi bi-circle"></i>Create Category</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
