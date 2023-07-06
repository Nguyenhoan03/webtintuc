<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{url('adminabcd')}}/css/main.css">
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
</head>
<body>
    <h2 style="background-color:red">sửa tin 1</h2><br>

<form action="{{url('postsuatin1',$suatin1->id)}}" method="POST" enctype="multipart/form-data">
                 @csrf

                 
             
                <label class="control-label">nội dung chính</label>
                <input class="form-control" name="noidungchinh" type="text" value="{{$suatin1->noidungchinh}}" ><br>

                <label class="control-label">slug</label>
                <input class="form-control" name="slug" type="text" value="{{$suatin1->slug}}" ><br>
             
                <label class="control-label">nội dung 1</label>
                <input class="form-control" name="noidung1" type="text" value="{{$suatin1->noidung1}}" ><br>
           
             
                <label class="control-label">hình anh 1</label>
                <input class="form-control" name="hinhanh1" type="file" >
                <img src="public/upload/{{url('$suatin1->hinhanh1')}}" height="150px" width="150px" alt="">
                <br>
           
             
                <label class="control-label">nội dung 2</label>
                <input class="form-control" name="noidung2" type="text" value="{{$suatin1->noidung2}}" ><br>
           
              
                <label class="control-label">hình ảnh 2</label>
                <input class="form-control" name="hinhanh2" type="file" >
                <img src="{{url('upload/').$suatin1->hinhanh2}}" height="150px" width="150px" alt="">
                <br>
           
             
                <label class="control-label">nội dung 3</label>
                <input class="form-control" name="noidung3" type="text" value="{{$suatin1->noidung3}}" ><br>
           
              
                <label class="control-label">hình ảnh 3</label>
                <input class="form-control" name="hinhanh3" type="file" >
                <img src="{{url('upload/').$suatin1->hinhanh3}}" height="150px" width="150px" alt="">
                <br>
           
              
                <label class="control-label">nội dung 4</label>
                <input class="form-control" name="noidung4" type="text" value="{{$suatin1->noidung4}}" ><br>
           

              
                <label class="control-label">hình ảnh 4</label>
                <input class="form-control" name="hinhanh4" type="file" >
                <img src="{{url('upload/').$suatin1->hinhanh4}}" height="150px" width="150px" alt="">
                <br>
           

              
                <label class="control-label">nội dung 5</label>
                <input class="form-control" name="noidung5" type="text" value="{{$suatin1->noidung5}}" ><br>
           


              
                <label class="control-label">hình ảnh 5</label>
                <input class="form-control" name="hinhanh5" type="file" >
                <img src="{{url('upload/').$suatin1->hinhanh5}}" height="150px" width="150px" alt="">
                <br>
           

              
                <label class="control-label">nội dung 6</label>
                <input class="form-control" name="noidung6" type="text" value="{{$suatin1->noidung6}}" ><br>
           

              
                <label class="control-label">hình ảnh 6</label>
                <input class="form-control" name="hinhanh6" type="file" >
                <img src="{{url('upload/').$suatin1->hinhanh6}}" height="150px" width="150px" alt="">
                <br>

                
              
                <button style="background-color: red">cập nhật tin 1</button>
               
</form>


</body>
</html>