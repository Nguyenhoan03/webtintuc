<!DOCTYPE html>
<html lang="en">

<head>
  <title>Thêm nhân viên | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="adminabcd/css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <!-- or -->
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <!-- Font-icon css-->
  <link rel="stylesheet" type="text/css"
    href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
  <script>

    function readURL(input, thumbimage) {
      if (input.files && input.files[0]) { //Sử dụng  cho Firefox - chrome
        var reader = new FileReader();
        reader.onload = function (e) {
          $("#thumbimage").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }
      else { // Sử dụng cho IE
        $("#thumbimage").attr('src', input.value);

      }
      $("#thumbimage").show();
      $('.filename').text($("#uploadfile").val());
      $('.Choicefile').css('background', '#14142B');
      $('.Choicefile').css('cursor', 'default');
      $(".removeimg").show();
      $(".Choicefile").unbind('click');

    }
    $(document).ready(function () {
      $(".Choicefile").bind('click', function () {
        $("#uploadfile").click();

      });
      $(".removeimg").click(function () {
        $("#thumbimage").attr('src', '').hide();
        $("#myfileupload").html('<input type="file" id="uploadfile"  onchange="readURL(this);" />');
        $(".removeimg").hide();
        $(".Choicefile").bind('click', function () {
          $("#uploadfile").click();
        });
        $('.Choicefile').css('background', '#14142B');
        $('.Choicefile').css('cursor', 'pointer');
        $(".filename").text("");
      });
    })
  </script>
</head>

<body class="app sidebar-mini rtl">
  <style>
    .Choicefile {
      display: block;
      background: #14142B;
      border: 1px solid #fff;
      color: #fff;
      width: 150px;
      text-align: center;
      text-decoration: none;
      cursor: pointer;
      padding: 5px 0px;
      border-radius: 5px;
      font-weight: 500;
      align-items: center;
      justify-content: center;
    }

    .Choicefile:hover {
      text-decoration: none;
      color: white;
    }

    #uploadfile,
    .removeimg {
      display: none;
    }

    #thumbbox {
      position: relative;
      width: 100%;
      margin-bottom: 20px;
    }

    .removeimg {
      height: 25px;
      position: absolute;
      background-repeat: no-repeat;
      top: 5px;
      left: 5px;
      background-size: 25px;
      width: 25px;
      /* border: 3px solid red; */
      border-radius: 50%;

    }

    .removeimg::before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      content: '';
      border: 1px solid red;
      background: red;
      text-align: center;
      display: block;
      margin-top: 11px;
      transform: rotate(45deg);
    }

    .removeimg::after {
      /* color: #FFF; */
      /* background-color: #DC403B; */
      content: '';
      background: red;
      border: 1px solid red;
      text-align: center;
      display: block;
      transform: rotate(-45deg);
      margin-top: -2px;
    }
  </style>
  <!-- Navbar-->
  <header class="app-header">
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
      aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">


      <!-- User Menu-->
      <li><a class="app-nav__item" href="/index.html"><i class='bx bx-log-out bx-rotate-180'></i> </a>

      </li>
    </ul>
  </header>
  <!-- Sidebar menu-->
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/images/hay.jpg" width="50px"
        alt="User Image">
      <div>
        <p class="app-sidebar__user-name"><b>minh hoàndz</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item haha" href="phan-mem-ban-hang.html"><i class='app-menu__icon bx bx-cart-alt'></i>
          <span class="app-menu__label">POS Bán Hàng</span></a></li>
      <li><a class="app-menu__item " href="index.html"><i class='app-menu__icon bx bx-tachometer'></i><span
            class="app-menu__label">Bảng điều khiển</span></a></li>
      <li><a class="app-menu__item active" href="table-data-table.html"><i class='app-menu__icon bx bx-id-card'></i>
          <span class="app-menu__label">Quản lý nhân viên</span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-user-voice'></i><span
            class="app-menu__label">Quản lý khách hàng</span></a></li>
      <li><a class="app-menu__item" href="table-data-product.html"><i
            class='app-menu__icon bx bx-purchase-tag-alt'></i><span class="app-menu__label">Quản lý sản phẩm</span></a>
      </li>
      <li><a class="app-menu__item" href="table-data-oder.html"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý đơn hàng</span></a></li>
      <li><a class="app-menu__item" href="table-data-banned.html"><i class='app-menu__icon bx bx-run'></i><span
            class="app-menu__label">Quản lý nội bộ
          </span></a></li>
      <li><a class="app-menu__item" href="table-data-money.html"><i class='app-menu__icon bx bx-dollar'></i><span
            class="app-menu__label">Bảng kê lương</span></a></li>
      <li><a class="app-menu__item" href="quan-ly-bao-cao.html"><i
            class='app-menu__icon bx bx-pie-chart-alt-2'></i><span class="app-menu__label">Báo cáo doanh thu</span></a>
      </li>
      <li><a class="app-menu__item" href="page-calendar.html"><i class='app-menu__icon bx bx-calendar-check'></i><span
            class="app-menu__label">Lịch công tác </span></a></li>
      <li><a class="app-menu__item" href="#"><i class='app-menu__icon bx bx-cog'></i><span class="app-menu__label">Cài
            đặt hệ thống</span></a></li>
    </ul>
  </aside>
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item">Danh sách nhân viên</li>
        <li class="breadcrumb-item"><a href="#">Thêm nhân viên</a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div class="tile">

        <a href="{{url('/themtin1')}}"> <h3 class="tile-title" id="aetv1">Tạo mới TIN1</h3></a>
         <a href=""> <h3 class="tile-title" id="aetv2" style="background-color:red;" >Tạo mới xu hướng</h3></a>
         <a href="{{url('/themtintuc1')}}">  <h3 class="tile-title" id="aetv3" >Tạo mới TIN TỨC 1</h3></a>
         <a href="{{url('/themtintuc2')}}"> <h3 class="tile-title" id="aetv4">Tạo mới TIN TỨC 2</h3></a>
         <a href="{{url('/themphobiennhat')}}"> <h3 class="tile-title" id="aetv5">Tạo mới PHỔ BIẾN NHẤT</h3></a>





          <div class="tile-body">
            <div class="row element-button">
              <div class="col-sm-2">
                <a class="btn btn-add btn-sm" data-toggle="modal" data-target="#exampleModalCenter"><b><i
                      class="fas fa-folder-plus"></i> Tạo chức vụ mới</b></a>
              </div>

            </div>
            
            <h2 style="color:red">thêm: xu hướng</h2> <br>

            <form action="{{url('themxuhuong')}}" method="POST" enctype="multipart/form-data">
                 @csrf

                 
             
                <label class="control-label">nội dung chính</label>
                <input class="form-control" name="noidungchinh" type="text" >

                
                <label class="control-label">slug</label>
                <input class="form-control" name="slug" type="text" >
           
                <label class="control-label">tác giả</label>
                <input class="form-control" name="tacgia" type="text" >

                <label class="control-label">nội dung 1</label>
                <input class="form-control" name="noidung1" type="text" >
           
             
                <label class="control-label">hình anh 1</label>
                <input class="form-control" name="hinhanh1" type="file" >
           
             
                <label class="control-label">nội dung 2</label>
                <input class="form-control" name="noidung2" type="text">
           
              
                <label class="control-label">hình ảnh 2</label>
                <input class="form-control" name="hinhanh2" type="file" >
           
             
                <label class="control-label">nội dung 3</label>
                <input class="form-control" name="noidung3" type="text" >
           
              
                <label class="control-label">hình ảnh 3</label>
                <input class="form-control" name="hinhanh3" type="file" >
           
              
                <label class="control-label">nội dung 4</label>
                <input class="form-control" name="noidung4" type="text" >
           

              
                <label class="control-label">hình ảnh 4</label>
                <input class="form-control" name="hinhanh4" type="file" >
           

              
                <label class="control-label">nội dung 5</label>
                <input class="form-control" name="noidung5" type="text" >
           


              
                <label class="control-label">hình ảnh 5</label>
                <input class="form-control" name="hinhanh5" type="file" >
           

              
                <label class="control-label">nội dung 6</label>
                <input class="form-control" name="noidung6" type="text" >
           

              
                <label class="control-label">hình ảnh 6</label>
                <input class="form-control" name="hinhanh6" type="file" ><br>

                
              
                <button style="background-color: red">add xu hướng</button>
               
</form>
          </div>
          </div>


          <h2>bảng xu hướng</h2>
  
  <table>
    <tr>
      <td>nội dung chính</td>
      <td>nội dung 1</td>
      <td>hình ảnh 1</td>
      <td>nội dung 2</td>
      <td>hình ảnh 2</td>
      <td>nội dung 3</td>
      <td>hình ảnh 3</td>
      <td>nội dung 4</td>
      <td>hình ảnh 4</td>
      <td>nội dung 5</td>
      <td>hình ảnh 5</td>
      <td>nội dung 6</td>
      <td>hình ảnh 6</td>
      <td>tác giả</td>
      <td>thời gian</td>

    </tr>
@foreach($txh as $key)
    <tr>
      <td>{{$key->noidungchinh}}</td>
      <td>{{$key->noidung1}}</td>
      <td>{{$key->hinhanh1}}</td>
      <td>{{$key->noidung2}}</td>
      <td>{{$key->hinhanh2}}</td>
      <td>{{$key->noidung3}}</td>
      <td>{{$key->hinhanh3}}</td>
      <td>{{$key->noidung4}}</td>
      <td>{{$key->hinhanh4}}</td>
      <td>{{$key->noidung5}}</td>
      <td>{{$key->hinhanh5}}</td>
      <td>{{$key->noidung6}}</td>
      <td>{{$key->hinhanh6}}</td>
      <td>{{$key->tacgia}}</td>
      <td>{{$key->thoigian}}</td>

      <td><button><a href="{{url('suaxuhuong',[$key->id])}}"> sửa </a></button></td>
      <td><button><a href="{{url('/xoaxuhuong',[$key->id])}}"> xóa </a></button></td>
    </tr>
@endforeach
  </table>


  </main>


  <!--
  MODAL
-->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="form-group  col-md-12">
              <span class="thong-tin-thanh-toan">
                <h5>Tạo chức vụ mới</h5>
              </span>
            </div>
            <div class="form-group col-md-12">
              <label class="control-label">Nhập tên chức vụ mới</label>
              <input class="form-control" type="text" >
            </div>
          </div>
          <BR>
          <button class="btn btn-save" type="button">Lưu lại</button>
          <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy bỏ</a>
          <BR>
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!--
  MODAL
-->


  <!-- Essential javascripts for application to work-->
  <script src="adminabcd/js/jquery-3.2.1.min.js"></script>
  <script src="adminabcd/js/popper.min.js"></script>
  <script src="adminabcd/js/bootstrap.min.js"></script>
  <script src="adminabcd/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="adminabcd/js/plugins/pace.min.js"></script>

</body>

</html>