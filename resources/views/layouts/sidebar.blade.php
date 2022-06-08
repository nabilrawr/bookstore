       <!--start sidebar -->
       <aside class="sidebar-wrapper" data-simplebar="true">
           <div class="sidebar-header">
               <div>
                   <img src="{{ asset('template/assets/images/logo-icon.png') }}" class="logo-icon"
                       alt="logo icon">
               </div>
               <div>
                   <h4 class="logo-text">BRMS</h4>
               </div>
               <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
               </div>
           </div>
           <!--navigation-->
           <ul class="metismenu" id="menu">
               @if (auth()->user()->hasRole('admin') ||
                   auth()->user()->hasRole('staff'))
                   <li>
                       <a href="{{ route('admin.dashboard') }}">
                           <div class="parent-icon"><i class="bi bi-house-fill"></i>
                           </div>
                           <div class="menu-title">Dashboard</div>
                       </a>
                   </li>
                   <li>
                       <a href="{{ route('borrower.book-list') }}">
                           <div class="parent-icon"><i class="bi bi-card-list"></i>
                           </div>
                           <div class="menu-title">List of Book</div>
                       </a>
                   </li>
               @endif
               @if (auth()->user()->hasRole('borrower'))
                   <li>
                       <a href="{{ route('borrower.index-catalog') }}">
                           <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                           </div>
                           <div class="menu-title">Catalogue</div>
                       </a>
                   </li>
               @endif

               @if (auth()->user()->hasRole('borrower') ||
                   auth()->user()->hasRole('admin') ||
                   auth()->user()->hasRole('staff'))
                   <li class="menu-label">Account</li>

                   <li>
                       <a href="{{ route('profile-show', Auth::user()->id) }}">
                           <div class="parent-icon"><i class="bi bi-person-fill"></i>
                           </div>
                           <div class="menu-title">My Profile</div>
                       </a>
                   </li>
               @endif
               @if (auth()->user()->hasRole('borrower'))
                   <li>
                       <a href="{{ route('borrower.book-list') }}">
                           <div class="parent-icon"><i class="bi bi-card-list"></i>
                           </div>
                           <div class="menu-title">List of Book</div>
                       </a>
                   </li>

                   <li>
                       <a href="{{ route('borrower.index-booking') }}">
                           <div class="parent-icon"><i class="bi bi-journal-bookmark-fill"></i>
                           </div>
                           <div class="menu-title">Rental Record</div>
                       </a>
                   </li>

                   <li>
                       <a href="{{ route('borrower.active-record') }}">
                           <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                           </div>
                           <div class="menu-title">Active Rental</div>
                       </a>
                   </li>
               @endif

               @if (auth()->user()->hasRole('admin') ||
                   auth()->user()->hasRole('staff'))
                   <li class="menu-label">Book Rent</li>

                   <li>
                       <a>
                           <div class="parent-icon"><i class="bi bi-folder-fill"></i>
                           </div>
                           <div class="menu-title">Rent</div>
                           <ul>
                               <li><a href="{{ route('staff.rent-record') }}"><i class="bi bi-circle"></i>Rent
                                       Record</a>
                               </li>
                               <li> <a href="{{ route('status-rents.pending') }}"><i
                                           class="bi bi-circle"></i>Pending</a></li>
                               <li> <a href="{{ route('status-rents.pickup') }}"><i
                                           class="bi bi-circle"></i>Pickup</a>
                               </li>
                               <li> <a href="{{ route('status-rents.rent') }}"><i class="bi bi-circle"></i>Rent</a>
                               </li>
                               <li> <a href="{{ route('status-rents.late') }}"><i class="bi bi-circle"></i>Late</a>
                               </li>
                               <li> <a href="{{ route('status-rents.complete') }}"><i
                                           class="bi bi-circle"></i>Complete</a>
                               </li>
                               <li> <a href="{{ route('status-rents.complete-replace') }}"><i
                                           class="bi bi-circle"></i>Complete Replace</a></li>

                               <li> <a href="{{ route('status-rents.complete-paid') }}"><i
                                           class="bi bi-circle"></i>Complete Paid</a></li>




                           </ul>
                       </a>
                   </li>
               @endif

               @if (auth()->user()->hasRole('admin') ||
                   auth()->user()->hasRole('staff'))
                   <li class="menu-label">Maintenance</li>
               @endif

               @if (auth()->user()->hasRole('admin'))
                   <li>
                       <a href="javascript:;" class="has-arrow">
                           <div class="parent-icon"><i class="bi bi-person-fill"></i>
                           </div>
                           <div class="menu-title">User</div>
                       </a>
                       <ul>
                           <li> <a href="{{ route('admin.user-list') }}"><i class="bi bi-circle"></i>User
                                   List</a>
                           </li>
                       </ul>
                       <ul>
                           <li> <a href="{{ route('admin.create-role') }}"><i class="bi bi-circle"></i>Assign
                                   Role</a>
                           </li>
                       </ul>
                   </li>
               @endif

               @if (auth()->user()->hasRole('staff') ||
                   auth()->user()->hasRole('admin'))
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
               @endif

               @if (auth()->user()->hasRole('admin'))
                   <li>
                       <a href="javascript:;" class="has-arrow">
                           <div class="parent-icon"><i class="bi bi-inbox-fill"></i>
                           </div>
                           <div class="menu-title">Category</div>
                       </a>
                       <ul>
                           <li> <a href="{{ route('category.index') }}"><i class="bi bi-circle"></i>Category
                                   List</a>
                           </li>
                           <li> <a href="{{ route('category.create') }}"><i class="bi bi-circle"></i>Category
                                   Add</a>
                           </li>
                       </ul>
                   </li>
               @endif

           </ul>
           <!--end navigation-->
       </aside>
       <!--end sidebar -->
