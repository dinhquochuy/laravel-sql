@extends('index')
@section('content')
<div class="body-content outer-top-bd">
    <div class="container">
        <div class="track-order-page inner-bottom-sm">
            <div class="row">
                <div class="col-md-12">
                    <h2>Thông tin sinh viên</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="template/assets/images/thuan.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Trần Ngọc Thuận</h5>
                            <p class="card-text">
                                Làm các chức năng: <br>
                                Đăng kí và Đăng nhập
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="template/assets/images/huy.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Đinh Quốc Huy</h5>
                            <p class="card-text">
                                <ul>
                                    <li>Cắt layout</li>
                                    <li>Làm các chức năng:</li>
                                    <li>Xuất chi tiết sản phẩm</li>
                                    <li>Giỏ Hàng</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="">
                        <img class="card-img-top" src="template/assets/images/nhan.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Huỳnh Trọng Nhân</h5>
                            <p class="card-text">
                                <ul>
                                    <li>Làm các chức năng</li>
                                    <li>Xuất loại sản phẩm</li>
                                    <li>Search</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.container -->
</div>
@endsection
@section('title','Thông tin sinh viên')