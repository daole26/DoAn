<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- <div class="user-panel">
        <div class="pull-left image">
          <img src="" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->ten_hien_thi }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div> -->
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Tìm kiếm...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">DANH MỤC</li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Danh Mục</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('danhmuc.index')}}"><i class="fa fa-circle-o"></i> Danh Sách</a></li>
            <li><a href="{{route('danhmuc.create')}}"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Hình thức tour</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('hinhthuc.index')}}"><i class="fa fa-circle-o"></i> Danh Sách</a></li>
            <li><a href="{{route('hinhthuc.create')}}"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Tour</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('tour.index')}}"><i class="fa fa-circle-o"></i> Danh Sách</a></li>
            <li><a href="{{route('tour.create')}}"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
          </ul>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Người Dùng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('user.index')}}"><i class="fa fa-circle-o"></i> Danh Sách</a></li>
            <li><a href="{{route('user.create')}}"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Đơn đặt tour</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('dattour.index')}}"><i class="fa fa-circle-o"></i> Danh Sách</a></li>
            <li><a href="{{route('dattour.create')}}"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
          </ul>
        </li>

        <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard"></i> <span>Tin tức</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="{{route('tintuc.index')}}"><i class="fa fa-circle-o"></i> Danh Sách</a></li>
              <li><a href="{{route('tintuc.insert')}}"><i class="fa fa-circle-o"></i> Thêm Mới</a></li>
            </ul>
          </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>