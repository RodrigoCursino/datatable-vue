<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('images/ricardo.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu</li>
            <li>
                <a href="{{route('home')}}">
                    <i class="fa fa-home"></i> <span>Início</span>
                    <span class="pull-right-container"></span>
                </a>
            </li>
            <li class="treeview">
                     <a href="#">
                         <i class="fa fa-money"></i><span>Doações</span>
                         <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                         </span>
                     </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="{{route('doacoes')}}">
                                <i class="fa fa-money"></i>
                                Doações
                            </a>
                        </li>
                        <li>
                            <a href="{{route('doacoes-cadastro')}}">
                                <i class="fa fa-users"></i>
                                Cadastrar Doadores
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-clipboard"></i>
                                Cadstro de Campanhas
                            </a>
                        </li>
                    </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>