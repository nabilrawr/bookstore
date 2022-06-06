       <!--start sidebar -->
       <aside class="sidebar-wrapper" data-simplebar="true">
           <div class="sidebar-header">
               <div>
                   <img src="{{ asset('template/assets/images/logo-icon.png') }}" class="logo-icon"
                       alt="logo icon">
               </div>
               <div>
                   <h4 class="logo-text">Bookstore</h4>
               </div>
               <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
               </div>
           </div>
           <!--navigation-->
           <ul class="metismenu" id="menu">
               @if(Auth::user()->role == 3)
               <li>
                   <a href="{{ route('admin.dashboard') }}">
                       <div class="parent-icon"><i class="bi bi-house-fill"></i>
                       </div>
                       <div class="menu-title">Dashboard</div>
                   </a>
               </li>
               @endif
               <li>
                   <a href="{{ route('borrower.index-catalog') }}" >
                       <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                       </div>
                       <div class="menu-title">Catalogue</div>
                   </a>
               </li>
                   <li>
                       <a href="{{ route('profile-edit', Auth::user()->id) }}">
                           <div class="parent-icon"><i class="bi bi-house-fill"></i>
                           </div>
                           <div class="menu-title">My Profile</div>
                       </a>
                   </li>
               @if(Auth::user()->role == 1)
               <li class="menu-label">Account</li>

               <li>
                   <a href="{{ route('borrower.index-booking') }}">
                       <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                       </div>
                       <div class="menu-title">Rental Record</div>
                   </a>
               </li>

               <li>
                   <a href="{{ route('borrower.index-booking') }}">
                       <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                       </div>
                       <div class="menu-title">Active Rental</div>
                   </a>
               </li>
               @endif
                   @if((Auth::user()->role == 3) || (Auth::user()->role == 2))
               <li class="menu-label">Book Rent</li>

               <li>
                   <a href="{{ route('staff.rent-record') }}" >
                       <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                       </div>
                       <div class="menu-title">Rent</div>
                   </a>
               </li>


               <li class="menu-label">Maintenance</li>
                   @if(Auth::user()->role == 3)
                       <li>
                           <a href="javascript:;" class="has-arrow">
                               <div class="parent-icon"><i class="bi bi-book-fill"></i>
                               </div>
                               <div class="menu-title">User</div>
                           </a>
                           <ul>
                               <li> <a href="{{route('admin.user-list')}}"><i class="bi bi-circle"></i>User List</a>
                               </li>
                           </ul>
                    </li>
                   @endif
               <li>
                   <a href="javascript:;" class="has-arrow">
                       <div class="parent-icon"><i class="bi bi-book-fill"></i>
                       </div>
                       <div class="menu-title">Book</div>
                   </a>
                   <ul>
                       <li> <a href="{{ route('book.index') }}"><i class="bi bi-circle"></i>Book List</a>
                       </li>
                       <li> <a href="{{ route('book.create') }}"><i class="bi bi-circle"></i>Book Add</a>
                       </li>
                   </ul>
               </li>

               <li>
                   <a href="javascript:;" class="has-arrow">
                       <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                       </div>
                       <div class="menu-title">Category</div>
                   </a>
                   <ul>
                       <li> <a href="{{ route('category.index') }}"><i class="bi bi-circle"></i>Category List</a>
                       </li>
                       <li> <a href="{{ route('category.create') }}"><i class="bi bi-circle"></i>Category Add</a>
                       </li>
                   </ul>
               </li>
                   @endif

           </ul>
           <!--end navigation-->
       </aside>
       <!--end sidebar -->
