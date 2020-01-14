<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
   Users
</div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNol" aria-expanded="true" aria-controls="collapseNol">
          <i class="fas fa-fw fa-users"></i>
          <span>{{ __('users.Users') }}</span> 
        </a>
        <div id="collapseNol" class="collapse" aria-labelledby="collapseNol" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">{{ __('users.Management') }}:</h6>
            <a class="collapse-item" href="{{ route('users.index') }}">{{ __('users.ListUsers') }}</a>
			<a class="collapse-item" href="{{ route('users.create') }}">{{ __('users.AddUser') }}</a>
          </div>
        </div>
    </li>