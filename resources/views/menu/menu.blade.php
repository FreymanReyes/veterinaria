<!-- Menu -->
<div class="menu">
                <ul class="list">
                    <li class="header">MENU DE NAVEGACION</li>
                    <li  class="active">
                        <a  href="{{route('home')}}">
                            <i class="material-icons">home</i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    @can('facturas.create')
                    <li>
                        <a href="{{route('facturas.create')}}">
                            <i class="material-icons">add_shopping_cart</i>
                            <span>Caja Registradora</span>
                        </a>
                    </li>
                    @endcan
                    @can('productos.index')
                    <li>
                        <a href="{{route('productos.index')}}">
                            <i class="material-icons">library_books</i>
                            <span>Productos</span>
                        </a>
                    </li>
                    @endcan
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">unarchive</i>
                            <span>Compras</span>
                        </a>
                        <ul class="ml-menu">
                          <li>
                              <a href="{{route('compras.create')}}">Cargar Compra</a>
                          </li>
                          <li>
                              <a href="{{route('compras.index')}}">Ver Compras</a>
                          </li>
                        </ul>
                    </li>

                    @can('proveedores.index')
                    <li>
                        <a href="{{route('proveedores.index')}}">
                            <i class="material-icons">supervised_user_circle</i>
                            <span>Proveedores</span>
                        </a>
                    </li>
                    @endcan
                    @can('clientes.index')
                    <li>
                        <a href="{{route('clientes.index')}}">
                            <i class="material-icons">supervisor_account</i>
                            <span>Clientes</span>
                        </a>
                    </li>
                    @endcan
                    @can('servicios.index')
                    <li>
                        <a href="{{route('servicios.index')}}">
                            <i class="material-icons">medical_services</i>
                            <span>Servicios</span>
                        </a>
                    </li>
                    @endcan
                    @can('mascotas.index')
                    <li>
                        <a href="{{route('mascotas.index')}}">
                            <i class="material-icons">pets</i>
                            <span>Mascotas</span>
                        </a>
                    </li>
                    @endcan
                    @can('cajas.index')
                    <li>
                        <a href="{{route('cajas.index')}}">
                            <i class="material-icons">point_of_sale</i>
                            <span>Cajas</span>
                        </a>
                    </li>
                    @endcan
                    @can('users.index' , 'roles.index')

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">settings</i>
                            <span>Configuracion</span>
                        </a>
                        <ul class="ml-menu">
                        @can('users.index')
                          <li>
                              <a href="{{route('users.index')}}">Usuarios</a>
                          </li>
                        @endcan
                        @can('roles.index')
                          <li>
                              <a href="{{route('roles.index')}}">Roles</a>
                          </li>
                        @endcan
                        </ul>
                    </li>

                    @endcan
                </ul>
            </div>
            <!-- #Menu -->