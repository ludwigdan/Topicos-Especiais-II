<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
      <!--  <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
-->
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!--li class="header">{{ trans('adminlte_lang::message.header') }}</li-->
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Cadastros Básicos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('periodos')}}">Períodos</a></li>
                    <li><a href="{{ route('produtos')}}">Produtos</a></li>
                </ul>
            </li>
			<li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Relatórios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('faturamentos.relatorioFull')}}">Faturamentos Completo</a></li>
					<li><a href="{{ route('faturamentos.relatorioMaioresFaturamentos')}}">Maiores Faturamentos</a></li>
                </ul>
            </li>
            <li><a href="{{ route('ofertas')}}"><i class='fa fa-link'></i> <span>Ofertas</span></a></li>
            <li><a href="{{ route('estabelecimentos')}}"><i class='fa fa-link'></i> <span>Estabelecimentos</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
