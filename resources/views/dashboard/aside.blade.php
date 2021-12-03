<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav" class="pt-4">
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="{{ route('dashboard') }}"
              aria-expanded="false"
              ><span class="hide-menu">Dashboard</span></a
            >
          </li>
          @if (auth()->user()->role === 'admin')
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="{{ route('agents-list') }}"
              aria-expanded="false"
              >
              <i class="fas fa-users"></i>
              <span class="hide-menu">All Agents</span></a
            >
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="{{ route('agent-create') }}"
              aria-expanded="false"
              >
              <i class="fas fa-user-plus"></i>
              <span class="hide-menu">Add Agent</span></a
            >
          </li>
          @endif
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="#"
              aria-expanded="false"
              >

              <i class="mdi mdi-domain"></i>
              <span class="hide-menu">All Properties</span></a
            >
          </li>
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="{{ route('property-create') }}"
              aria-expanded="false"
              >
              <i class="fas fa-building"></i>
              <span class="hide-menu">Add Property</span></a
            >
          </li>
        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
