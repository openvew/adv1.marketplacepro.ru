<!-- Divider -->
<hr class="sidebar-divider">
<!-- Heading -->
<div class="sidebar-heading">
  {{ __('users.Management') }}
  
</div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCompany" aria-expanded="true" aria-controls="collapseNol">
          <i class="far fa-handshake"></i>
          <span>{{ __('users.CompanyList') }}</span> 
        </a>
        <div id="collapseCompany" class="collapse" aria-labelledby="collapseCompany" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="">Создать компанию</a>
            <a class="collapse-item" href="">В работе</a>
            <a class="collapse-item" href="">На модерации</a>
            <a class="collapse-item" href="">Отклонённые</a>
          </div>
        </div>
    </li>
        
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseShops" aria-expanded="true" aria-controls="collapseNol">
              <i class="fas fa-store-alt"></i>
              <span>{{ __('shop.ShopList') }}</span> 
            </a>
            <div id="collapseShops" class="collapse" aria-labelledby="collapseShops" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{route('shops.create')}}">{{ __('shop.NewShopCreate') }}</a>
              </div>
            </div>
        </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="true" aria-controls="collapseNol">
        
        <i class="far fa-handshake"></i>
        <span>Категории</span> 
      </a>
      <div id="collapseCategories" class="collapse" aria-labelledby="collapseCategories" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          {{-- <h6 class="collapse-header">321321:</h6> --}}
          {{-- <a class="collapse-item" href="{{ route('users.index') }}">В работе</a> --}}
        </div>
      </div>
  </li>   
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOffers" aria-expanded="true" aria-controls="collapseNol">
          <i class="fas fa-cart-plus"></i>
          <span>Предложения</span> 
        </a>
        <div id="collapseOffers" class="collapse" aria-labelledby="collapseOffers" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            {{-- <h6 class="collapse-header">321321:</h6> --}}
            {{-- <a class="collapse-item" href="{{ route('users.index') }}">В работе</a> --}}
          </div>
        </div>
    </li>     
    <!-- Divider -->
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
    Статистика
    </div>    

