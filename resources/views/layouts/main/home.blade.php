@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $setting->logo) }}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
    <main id="page-content">
        <div class="page-slide bg-light">
            <div class="container-fluid px-0">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper-container slide-banner swiper-container-horizontal swiper-container-autoheight">
                            <div class="swiper-wrapper">
                                @foreach ($banners as $banner)
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="avatar">
                                            <img src="{{$banner->image}}" alt="" srcset="" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-nhantin">
            <div class="container">
                <div class="box-nhantin">
                    <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                        style="visibility: hidden; animation-duration: 1.5s; animation-name: none;">
                        <h2 class="text-uppercase">Liên hệ nhanh với chúng tôi
                        </h2>
                    </div>
                    <div role="form" class="wpcf7" id="wpcf7-f8500-o1" lang="vi" dir="ltr">
                        <form action="{{route('postcontact')}}" method="POST">
                            @csrf
                            <div id="apply-form" class="form-row justify-content-center">
                              <div class="col-auto">
                                <input type="email" name="email" class="form-control mb-2" id="inlineFormInput" placeholder="Email">
                              </div>
                              <div class="col-auto">
                                <div class="input-group mb-2">
                                  <input type="number" name="phone" class="form-control" id="inlineFormInputGroup" placeholder="Số điện thoại" >
                                </div>
                              </div>
                              <div class="col-auto">
                                <button id="apply-btn" type="submit" class="btn btn-primary mb-2" disabled>Đăng ký</button>
                              </div>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
        <section class="page-introduce">
            <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: hidden; animation-duration: 1.5s; animation-name: none;">
                    <h2 class="text-uppercase">xuất nhập khẩu đại dương</h2>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="mb-4 text-justify"></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-promo">
            <div class="container">
                <div class="d-flex row justify-content-between">
                    <div class="page-promo__item text-center wow fadeInUp col-md-2 col-6" data-wow-duration="1s"
                        style="visibility: visible; animation-duration: 1s; animation-name: fadeInUp;">
                        <h3 class="page-promo__number">10+</h3>
                        <p class="page-promo__text">Năm kinh nghiệm</p>
                    </div>
                    <div class="page-promo__item text-center wow fadeInUp col-md-2 col-6" data-wow-duration="1.2s"
                        style="visibility: visible; animation-duration: 1.2s; animation-name: fadeInUp;">
                        <h3 class="page-promo__number">1000+</h3>
                        <p class="page-promo__text">Khách hàng trên cả nước</p>
                    </div>
                    <div class="page-promo__item text-center wow fadeInUp col-md-2 col-6" data-wow-duration="1.4s"
                        style="visibility: visible; animation-duration: 1.4s; animation-name: fadeInUp;">
                        <h3 class="page-promo__number">1000+</h3>
                        <p class="page-promo__text">Nhập khẩu thành công</p>
                    </div>
                    <div class="page-promo__item text-center wow fadeInUp col-md-2 col-6" data-wow-duration="1.6s"
                        style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                        <h3 class="page-promo__number">30+</h3>
                        <p class="page-promo__text">Nhân sự giàu kinh nghiệm</p>
                    </div>
                    <div class="page-promo__item text-center wow fadeInUp col-md-2 col-12" data-wow-duration="1.8s"
                        style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">
                        <h3 class="page-promo__number">300+</h3>
                        <p class="page-promo__text">Đối tác trong các lĩnh vực</p>
                    </div>
                </div>
            </div>
        </section>
        <p style="text-align: center;"> <a style="display: inline-block;" class="btn--link page-introduce__link"
                href="https://nhapkhautrungquoc.vn/dich-vu-xuat-nhap-khau/van-chuyen-duong-bo/" title="intro_text"
                data-wpel-link="internal">Xem thêm</a></p>
        <section class="page-why-choose"> <noscript><img
                    style="
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
object-fit: cover;
width: 100%;
height: 100%;
"
                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/10/test2-01-2-scaled.jpg"
                    class="bg-why lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                        class="bg-why" src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/10/test2-01-2-scaled.jpg"
                        style="
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
object-fit: cover;
width: 100%;
height: 100%;
" /></noscript><img
                    class="bg-why ls-is-cached lazyloaded"
                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/10/test2-01-2-scaled.jpg"
                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/10/test2-01-2-scaled.jpg"
                    style="
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
object-fit: cover;
width: 100%;
height: 100%;
">
                <div class="container">
                    <h4 class="text-center text-uppercase text-white mb-4 pb-3 position-relative">Đại Dương cam
                        kết dịch vụ
                        tốt nhất</h4>
                    <div class="row">
                        <div class="col-md-4 col-6">
                            <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration=".5s"
                                style="visibility: visible; animation-duration: 0.5s; animation-name: zoomIn;">
                                <i class="fa fa-money page-why-choose__icon"></i>
                                <h3 class="h5 text-uppercase page-why-choose__header">Đơn giá hợp lý và cạnh
                                    tranh</h3>
                                <p class="page-why-choose__text">Bảng giá của các sản phẩm và dịch vụ cạnh
                                    tranh</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration=".7s"
                                style="visibility: visible; animation-duration: 0.7s; animation-name: zoomIn;">
                                <i class="fa fa-handshake page-why-choose__icon"></i>
                                <h3 class="h5 text-uppercase page-why-choose__header">hỗ trợ pháp lý hải quan
                                </h3>
                                <p class="page-why-choose__text">Tư vấn mọi vấn đề pháp lý khi dùng dịch vụ</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration=".9s"
                                style="visibility: visible; animation-duration: 0.9s; animation-name: zoomIn;">
                                <i class="fa fa-check-circle page-why-choose__icon"></i>
                                <h3 class="h5 text-uppercase page-why-choose__header">chính sách đền bù uy tín
                                </h3>
                                <p class="page-why-choose__text">Theo hợp đồng</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration="1.1s"
                                style="visibility: visible; animation-duration: 1.1s; animation-name: zoomIn;">
                                <i class="fa fa-comments page-why-choose__icon"></i>
                                <h3 class="h5 text-uppercase page-why-choose__header">tư vấn hỗ trợ 24/7</h3>
                                <p class="page-why-choose__text">Tư vấn viên trực 24/24 để hỗ trợ khách hàng
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration="1.3s"
                                style="visibility: visible; animation-duration: 1.3s; animation-name: zoomIn;">
                                <i class="fa fa-users page-why-choose__icon"></i>
                                <h3 class="h5 text-uppercase page-why-choose__header">đội ngũ nhân sự chuyên
                                    nghiệp</h3>
                                <p class="page-why-choose__text">Chúng tôi sẵn sàng phục vụ tận tình, mọi lúc
                                    mọi nơi</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="page-why-choose__item text-center text-white wow zoomIn" data-wow-duration="1.5s"
                                style="visibility: visible; animation-duration: 1.5s; animation-name: zoomIn;">
                                <i class="fa fa-copyright page-why-choose__icon"></i>
                                <h3 class="h5 text-uppercase page-why-choose__header">nhanh chóng, chính xác
                                </h3>
                                <p class="page-why-choose__text">Thời gian giao hàng nhanh</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="page-service">
            <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInDown;">
                    <h2 class="text-uppercase">dịch vụ nổi bật</h2>
                </div>
                <div class="c-box col">
                    <div class="c-box-service col-md-6 pl-md-0">
                        <div class="no-gutters d-flex">
                            <div class="c-item col-md-6 col-6 pl-3">
                                <div class="page-service__item text-center text-white wow fadeIn" data-wow-duration=".6s"
                                    style="visibility: visible; animation-duration: 0.6s; animation-name: fadeIn;">
                                    <i class="fa fa-shipping-fast  page-service__icon"></i>
                                    <h3 class="h6 text-uppercase page-service__text mb-0"><a
                                            href="https://nhapkhautrungquoc.vn/dich-vu-xuat-nhap-khau/van-chuyen-duong-bo/"
                                            title="Vận chuyển Trung Việt" target="_blank" class="text-white"
                                            data-wpel-link="internal">Vận
                                            chuyển Trung Việt</a></h3>
                                </div>
                            </div>
                            <div class="c-item col-md-6 col-6 pl-3">
                                <div class="page-service__item text-center text-white bg-blue2 wow fadeIn"
                                    data-wow-duration=".8s"
                                    style="visibility: visible; animation-duration: 0.8s; animation-name: fadeIn;">
                                    <i class="fa fa-ship  page-service__icon"></i>
                                    <h3 class="h6 text-uppercase page-service__text mb-0"><a
                                            href="https://nhapkhautrungquoc.vn/van-tai-duong-bien/"
                                            title="Nhập hàng Trung Quốc" target="_blank" class="text-white"
                                            data-wpel-link="internal">Nhập hàng Trung Quốc</a></h3>
                                </div>
                            </div>
                            <div class="c-item col-md-6 col-6 pl-3">
                                <div class="page-service__item text-center text-white bg-blue4 wow fadeIn"
                                    data-wow-duration="1.2s"
                                    style="visibility: visible; animation-duration: 1.2s; animation-name: fadeIn;">
                                    <i class="fa fa-dolly page-service__icon"></i>
                                    <h3 class="h6 text-uppercase page-service__text mb-0"><a
                                            href="https://nhapkhautrungquoc.vn/dich-vu-uy-thac-nhap-khau/"
                                            title="Ủy thác nhập khẩu" target="_blank" class="text-white"
                                            data-wpel-link="internal">Ủy thác nhập khẩu</a></h3>
                                </div>
                            </div>
                            <div class="c-item col-md-6 col-6 pl-3">
                                <div class="page-service__item text-center text-white bg-blue3 wow fadeIn"
                                    data-wow-duration="1s"
                                    style="visibility: visible; animation-duration: 1s; animation-name: fadeIn;">
                                    <i class="fa fa-plane-departure  page-service__icon"></i>
                                    <h3 class="h6 text-uppercase page-service__text mb-0"><a
                                            href="https://nhapkhautrungquoc.vn/dich-vu-xuat-nhap-khau/van-chuyen-hang-khong/"
                                            title="Thanh toán hộ" target="_blank" class="text-white"
                                            data-wpel-link="internal">Thanh toán
                                            hộ</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-products">
            <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInDown;">
                    <h2 class="text-uppercase">mặt hàng nhập khẩu</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-3 mb-md-4 wow fadeIn" data-wow-duration=".8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeIn;">
                        <div class="product position-relative overflow-hidden"> <a class="product-image d-block"
                                href="https://nhapkhautrungquoc.vn/thu-tuc-nhap-khau-vo-thong/"
                                title="Thủ tục nhập khẩu vỏ thông Orchiata đơn giản nhất" data-wpel-link="internal">
                                <noscript><img width="350" height="236" alt="Thủ tục nhập khẩu vỏ thông"
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-348x235.png 348w"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-350x236.png"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        class="img-fluid w-100 wp-post-image lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                            width="350" height="236"
                                            src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-350x236.png"
                                            class="img-fluid w-100 wp-post-image" alt="Thủ tục nhập khẩu vỏ thông"
                                            srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-348x235.png 348w"
                                            sizes="(max-width: 350px) 100vw, 350px" /></noscript><img width="350"
                                        height="236"
                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-350x236.png"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-350x236.png"
                                        class="img-fluid w-100 wp-post-image ls-is-cached lazyloaded"
                                        alt="Thủ tục nhập khẩu vỏ thông"
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-348x235.png 348w"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        sizes="(max-width: 350px) 100vw, 350px"
                                        srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/1-5-348x235.png 348w">
                            </a>
                            <div class="product-body p-3 position-relative">
                                <h3 class="product-header text-uppercase mb-0 mb-md-2"> <a class="text-dark"
                                        href="https://nhapkhautrungquoc.vn/thu-tuc-nhap-khau-vo-thong/"
                                        title="Thủ tục nhập khẩu vỏ thông Orchiata đơn giản nhất"
                                        data-wpel-link="internal">Thủ tục nhập
                                        khẩu vỏ thông Orchiata đơn giản nhất</a></h3>
                                <p class="text-secondary"> Việc sử dụng vỏ thông Orchiata, Habitat,...để trồng
                                    lan đang là xu hướng
                                    cho nhà vườn, người chơi lan. Đồng nghĩa với nhu cầu tăng cao là cơ hội
                                    của...</p>
                                <div class="product-bottom d-flex justify-content-between align-items-center">
                                    <span class="product-views"><i class="fa fa-eye mr-1"></i>261 Views</span>
                                    <a class="btn btn-primary w-50 text-uppercase product-actions"
                                        href="https://nhapkhautrungquoc.vn/thu-tuc-nhap-khau-vo-thong/"
                                        title="Thủ tục nhập khẩu vỏ thông Orchiata đơn giản nhất"
                                        data-wpel-link="internal">Chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3 mb-md-4 wow fadeIn" data-wow-duration=".8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeIn;">
                        <div class="product position-relative overflow-hidden"> <a class="product-image d-block"
                                href="https://nhapkhautrungquoc.vn/tam-tran-thach-cao-hang-trung-quoc-chinh-ngach/"
                                title="Thủ tục nhập khẩu Tấm Trần Thạch Cao - Hàng Chính Ngạch" data-wpel-link="internal">
                                <noscript><img width="350" height="236" alt=""
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-348x235.png 348w"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-350x236.png"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        class="img-fluid w-100 wp-post-image lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                            width="350" height="236"
                                            src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-350x236.png"
                                            class="img-fluid w-100 wp-post-image" alt=""
                                            srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-348x235.png 348w"
                                            sizes="(max-width: 350px) 100vw, 350px" /></noscript><img width="350"
                                        height="236"
                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-350x236.png"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-350x236.png"
                                        class="img-fluid w-100 wp-post-image ls-is-cached lazyloaded" alt=""
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-348x235.png 348w"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        sizes="(max-width: 350px) 100vw, 350px"
                                        srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-348x235.png 348w">
                            </a>
                            <div class="product-body p-3 position-relative">
                                <h3 class="product-header text-uppercase mb-0 mb-md-2"> <a class="text-dark"
                                        href="https://nhapkhautrungquoc.vn/tam-tran-thach-cao-hang-trung-quoc-chinh-ngach/"
                                        title="Thủ tục nhập khẩu Tấm Trần Thạch Cao - Hàng Chính Ngạch"
                                        data-wpel-link="internal">Thủ
                                        tục nhập khẩu Tấm Trần Thạch Cao - Hàng Chính Ngạch</a></h3>
                                <p class="text-secondary"> Nhập khẩu tấm trần thạch cao liệu có đơn giản ? Tấm
                                    trần thạch cao được
                                    áp dụng theo mã HS nào, có phải nhập khẩu theo chính sách đặc...</p>
                                <div class="product-bottom d-flex justify-content-between align-items-center">
                                    <span class="product-views"><i class="fa fa-eye mr-1"></i>508 Views</span>
                                    <a class="btn btn-primary w-50 text-uppercase product-actions"
                                        href="https://nhapkhautrungquoc.vn/tam-tran-thach-cao-hang-trung-quoc-chinh-ngach/"
                                        title="Thủ tục nhập khẩu Tấm Trần Thạch Cao - Hàng Chính Ngạch"
                                        data-wpel-link="internal">Chi
                                        tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3 mb-md-4 wow fadeIn" data-wow-duration=".8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeIn;">
                        <div class="product position-relative overflow-hidden"> <a class="product-image d-block"
                                href="https://nhapkhautrungquoc.vn/nhap-khau-lo-dung-my-pham-nhap-khau-hang-chinh-ngach/"
                                title="Thủ tục nhập khẩu chai lọ đựng mỹ phẩm - Update 2022" data-wpel-link="internal">
                                <noscript><img width="350" height="236" alt=""
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-20x13.jpg 20w"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-350x236.jpg"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        class="img-fluid w-100 wp-post-image lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                            width="350" height="236"
                                            src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-350x236.jpg"
                                            class="img-fluid w-100 wp-post-image" alt=""
                                            srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-20x13.jpg 20w"
                                            sizes="(max-width: 350px) 100vw, 350px" /></noscript><img width="350"
                                        height="236"
                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-350x236.jpg"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-350x236.jpg"
                                        class="img-fluid w-100 wp-post-image ls-is-cached lazyloaded" alt=""
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-20x13.jpg 20w"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        sizes="(max-width: 350px) 100vw, 350px"
                                        srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/chai-lo-thuy-tinh-dung-serum-600x400-1-20x13.jpg 20w">
                            </a>
                            <div class="product-body p-3 position-relative">
                                <h3 class="product-header text-uppercase mb-0 mb-md-2"> <a class="text-dark"
                                        href="https://nhapkhautrungquoc.vn/nhap-khau-lo-dung-my-pham-nhap-khau-hang-chinh-ngach/"
                                        title="Thủ tục nhập khẩu chai lọ đựng mỹ phẩm - Update 2022"
                                        data-wpel-link="internal">Thủ tục
                                        nhập khẩu chai lọ đựng mỹ phẩm - Update 2022</a></h3>
                                <p class="text-secondary"> Thủ tục nhập khẩu chai lọ đựng mỹ phẩm có dễ dàng
                                    hay không thì việc nắm
                                    bắt được những thông tư chính sách về sản phẩm là không thể...</p>
                                <div class="product-bottom d-flex justify-content-between align-items-center">
                                    <span class="product-views"><i class="fa fa-eye mr-1"></i>487 Views</span>
                                    <a class="btn btn-primary w-50 text-uppercase product-actions"
                                        href="https://nhapkhautrungquoc.vn/nhap-khau-lo-dung-my-pham-nhap-khau-hang-chinh-ngach/"
                                        title="Thủ tục nhập khẩu chai lọ đựng mỹ phẩm - Update 2022"
                                        data-wpel-link="internal">Chi
                                        tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3 mb-md-4 wow fadeIn" data-wow-duration=".8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeIn;">
                        <div class="product position-relative overflow-hidden"> <a class="product-image d-block"
                                href="https://nhapkhautrungquoc.vn/nhap-khau-kinh-xay-dung-hang-trung-quoc-chinh-ngach/"
                                title="Thủ tục Nhập Khẩu Kính Xây Dựng - Hàng Chính Ngạch" data-wpel-link="internal">
                                <noscript><img width="350" height="236" alt="Kính Xây Dựng"
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-348x235.jpg 348w"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-350x236.jpg"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        class="img-fluid w-100 wp-post-image lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                            width="350" height="236"
                                            src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-350x236.jpg"
                                            class="img-fluid w-100 wp-post-image" alt="Kính Xây Dựng"
                                            srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-348x235.jpg 348w"
                                            sizes="(max-width: 350px) 100vw, 350px" /></noscript><img width="350"
                                        height="236"
                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-350x236.jpg"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-350x236.jpg"
                                        class="img-fluid w-100 wp-post-image ls-is-cached lazyloaded" alt="Kính Xây Dựng"
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-348x235.jpg 348w"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        sizes="(max-width: 350px) 100vw, 350px"
                                        srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2020/06/unnamed-1-1-348x235.jpg 348w">
                            </a>
                            <div class="product-body p-3 position-relative">
                                <h3 class="product-header text-uppercase mb-0 mb-md-2"> <a class="text-dark"
                                        href="https://nhapkhautrungquoc.vn/nhap-khau-kinh-xay-dung-hang-trung-quoc-chinh-ngach/"
                                        title="Thủ tục Nhập Khẩu Kính Xây Dựng - Hàng Chính Ngạch"
                                        data-wpel-link="internal">Thủ tục
                                        Nhập Khẩu Kính Xây Dựng - Hàng Chính Ngạch</a></h3>
                                <p class="text-secondary"> Thủ tục nhập khẩu kính xây dựng liệu có đơn giản?
                                    Việc tra cứu sản phẩm
                                    nhằm giúp Quý khách nắm được thông tin mã HS và chi tiết thuế...</p>
                                <div class="product-bottom d-flex justify-content-between align-items-center">
                                    <span class="product-views"><i class="fa fa-eye mr-1"></i>481 Views</span>
                                    <a class="btn btn-primary w-50 text-uppercase product-actions"
                                        href="https://nhapkhautrungquoc.vn/nhap-khau-kinh-xay-dung-hang-trung-quoc-chinh-ngach/"
                                        title="Thủ tục Nhập Khẩu Kính Xây Dựng - Hàng Chính Ngạch"
                                        data-wpel-link="internal">Chi
                                        tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3 mb-md-4 wow fadeIn" data-wow-duration=".8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeIn;">
                        <div class="product position-relative overflow-hidden"> <a class="product-image d-block"
                                href="https://nhapkhautrungquoc.vn/thu-tuc-nhap-khau-lop-xe-tai/"
                                title="Thủ tục nhập khẩu lốp xe tải chưa qua sử dụng| Mới 100%" data-wpel-link="internal">
                                <noscript><img width="350" height="236" alt="THỦ TỤC NHẬP KHẨU LỐP XE TẢI"
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-348x235.png 348w"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-350x236.png"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        class="img-fluid w-100 wp-post-image lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                            width="350" height="236"
                                            src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-350x236.png"
                                            class="img-fluid w-100 wp-post-image" alt="THỦ TỤC NHẬP KHẨU LỐP XE TẢI"
                                            srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-348x235.png 348w"
                                            sizes="(max-width: 350px) 100vw, 350px" /></noscript><img width="350"
                                        height="236"
                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-350x236.png"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-350x236.png"
                                        class="img-fluid w-100 wp-post-image ls-is-cached lazyloaded"
                                        alt="THỦ TỤC NHẬP KHẨU LỐP XE TẢI"
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-348x235.png 348w"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        sizes="(max-width: 350px) 100vw, 350px"
                                        srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-350x236.png 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-135x90.png 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/07/THU-TUC-NHAP-KHAU-LOP-XE-TAI-348x235.png 348w">
                            </a>
                            <div class="product-body p-3 position-relative">
                                <h3 class="product-header text-uppercase mb-0 mb-md-2"> <a class="text-dark"
                                        href="https://nhapkhautrungquoc.vn/thu-tuc-nhap-khau-lop-xe-tai/"
                                        title="Thủ tục nhập khẩu lốp xe tải chưa qua sử dụng| Mới 100%"
                                        data-wpel-link="internal">Thủ
                                        tục nhập khẩu lốp xe tải chưa qua sử dụng| Mới 100%</a></h3>
                                <p class="text-secondary"> Nói đến nhập khẩu lốp xe tải, xe ô tô thì đã có một
                                    số khách hàng đặt ra
                                    câu hỏi cho Đại Dương. "Có thể nhập khẩu lốp xe...</p>
                                <div class="product-bottom d-flex justify-content-between align-items-center">
                                    <span class="product-views"><i class="fa fa-eye mr-1"></i>444 Views</span>
                                    <a class="btn btn-primary w-50 text-uppercase product-actions"
                                        href="https://nhapkhautrungquoc.vn/thu-tuc-nhap-khau-lop-xe-tai/"
                                        title="Thủ tục nhập khẩu lốp xe tải chưa qua sử dụng| Mới 100%"
                                        data-wpel-link="internal">Chi
                                        tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3 mb-md-4 wow fadeIn" data-wow-duration=".8s"
                        style="visibility: visible; animation-duration: 0.8s; animation-name: fadeIn;">
                        <div class="product position-relative overflow-hidden"> <a class="product-image d-block"
                                href="https://nhapkhautrungquoc.vn/thu-tuc-nhap-khau-ban-la-dien/"
                                title="Thủ tục nhập khẩu bàn là điện" data-wpel-link="internal">
                                <noscript><img width="350" height="236" alt="Thủ tục nhập khẩu bàn là điện"
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-348x235.jpg 348w"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-350x236.jpg"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        class="img-fluid w-100 wp-post-image lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                            width="350" height="236"
                                            src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-350x236.jpg"
                                            class="img-fluid w-100 wp-post-image" alt="Thủ tục nhập khẩu bàn là điện"
                                            srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-348x235.jpg 348w"
                                            sizes="(max-width: 350px) 100vw, 350px" /></noscript><img width="350"
                                        height="236"
                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-350x236.jpg"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-350x236.jpg"
                                        class="img-fluid w-100 wp-post-image ls-is-cached lazyloaded"
                                        alt="Thủ tục nhập khẩu bàn là điện"
                                        data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-348x235.jpg 348w"
                                        data-sizes="(max-width: 350px) 100vw, 350px"
                                        sizes="(max-width: 350px) 100vw, 350px"
                                        srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2021/08/ban-ui_8-348x235.jpg 348w">
                            </a>
                            <div class="product-body p-3 position-relative">
                                <h3 class="product-header text-uppercase mb-0 mb-md-2"> <a class="text-dark"
                                        href="https://nhapkhautrungquoc.vn/thu-tuc-nhap-khau-ban-la-dien/"
                                        title="Thủ tục nhập khẩu bàn là điện" data-wpel-link="internal">Thủ
                                        tục nhập khẩu bàn là
                                        điện</a></h3>
                                <p class="text-secondary"> Bàn là điện có lẽ không còn thiết bị gia dụng quá xa
                                    lạ với các hộ gia
                                    đình. Trên thị trường thì cũng không thiếu các sản phẩm tốt...</p>
                                <div class="product-bottom d-flex justify-content-between align-items-center">
                                    <span class="product-views"><i class="fa fa-eye mr-1"></i>282 Views</span>
                                    <a class="btn btn-primary w-50 text-uppercase product-actions"
                                        href="https://nhapkhautrungquoc.vn/thu-tuc-nhap-khau-ban-la-dien/"
                                        title="Thủ tục nhập khẩu bàn là điện" data-wpel-link="internal">Chi
                                        tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="page-partner">
            <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInDown;">
                    <h2 class="text-uppercase">đối tác của chúng tôi</h2>
                </div>
                <div class="owl-carousel owl-theme owl-partner owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-1140px, 0px, 0px); transition: all 0s ease 0s; width: 3610px;">
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                    alt="partner img"></noscript><img class=" ls-is-cached lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                    alt="partner img"></noscript><img class=" ls-is-cached lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                    alt="partner img"></noscript><img class=" lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                    alt="partner img"></noscript><img class=" lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                    alt="partner img"></noscript><img class=" lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/7.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/7.png"
                                                    alt="partner img"></noscript><img class=" lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/7.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/7.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item active" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/1.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/1.png"
                                                    alt="partner img"></noscript><img class=" ls-is-cached lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/1.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/1.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item active" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                    alt="partner img"></noscript><img class=" ls-is-cached lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item active" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                    alt="partner img"></noscript><img class=" ls-is-cached lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item active" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                    alt="partner img"></noscript><img class=" lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item active" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                    alt="partner img"></noscript><img class=" lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item active" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                    alt="partner img"></noscript><img class=" lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/7.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/7.png"
                                                    alt="partner img"></noscript><img class=" lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/7.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/7.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/1.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/1.png"
                                                    alt="partner img"></noscript><img class=" ls-is-cached lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/1.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/1.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                    alt="partner img"></noscript><img class=" ls-is-cached lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/2.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                    alt="partner img"></noscript><img class=" ls-is-cached lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/3.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                    alt="partner img"></noscript><img class=" lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/4.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                    alt="partner img"></noscript><img class=" lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/5.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                            <div class="owl-item cloned" style="width: 160px; margin-right: 30px;">
                                <div class="item page-partner__item"> <a href="" title="play"
                                        rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                alt="partner img"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                class="lazyload"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                    alt="partner img"></noscript><img class=" lazyloaded"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/6.png"
                                                alt="partner img">
                                    </a></div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                aria-label="Previous">‹</span></button><button type="button" role="presentation"
                            class="owl-next"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </section>
        <section class="page-testimonial">
            <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: hidden; animation-duration: 1.5s; animation-name: none;">
                    <h2 class="text-uppercase">khách hàng nói gì về chúng tôi</h2>
                </div>
                <div class="owl-carousel owl-theme owl-testimonial owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-1140px, 0px, 0px); transition: all 0s ease 0s; width: 4180px;">
                            <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="item page-testimonial__item">
                                    <div class="images"> <a target="_self" href="javascript:void(0)" title="play"
                                            rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                    alt="partner img"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                    class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                        alt="partner img"></noscript><img class=" lazyloaded"
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> <a target="_self" href="javascript:void(0)"
                                            title="play" rel="nofollow noopener" data-wpel-link="internal"> Đức Huy:
                                            Thiết bị vệ sinh ROYAL JOIN là
                                            thương hiệu hàng đầu tại Hàn Quốc và đẳng cấp thế giới. Chúng tôi đã
                                            hợp tác với Đại Dương
                                            nhiều năm nay để có thể mang đến cho người tiêu dùng các sản phẩm
                                            tốt nhất và phù hợp với
                                            người Việt. </a></div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="item page-testimonial__item">
                                    <div class="images"> <a target="_self" href="javascript:void(0)" title="play"
                                            rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                    alt="partner img"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/hue-loi-hue-loi.png"
                                                    class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/hue-loi-hue-loi.png"
                                                        alt="partner img"></noscript><img class=" lazyloaded"
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/hue-loi-hue-loi.png"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/hue-loi-hue-loi.png"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> <a target="_self" href="javascript:void(0)"
                                            title="play" rel="nofollow noopener" data-wpel-link="internal"> Đại Dương
                                            luôn là sự lựa chọn hàng đầu của
                                            Huê Lợi bởi Tốc độ - Uy Tín - Và sự tận tâm. Đặc biệt trong tron mùa
                                            dịch Covid-19 vừa qua Đại
                                            Dương luôn đảm bảo việc vận chuyển thiết bị y tế của chúng tôi. </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="item page-testimonial__item">
                                    <div class="images"> <a target="_self" href="javascript:void(0)" title="play"
                                            rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                    alt="partner img"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/Dược-mỹ-phẩm-thành-tín.png"
                                                    class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/Dược-mỹ-phẩm-thành-tín.png"
                                                        alt="partner img"></noscript><img class=" lazyloaded"
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/Dược-mỹ-phẩm-thành-tín.png"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/Dược-mỹ-phẩm-thành-tín.png"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> <a target="_self" href="javascript:void(0)"
                                            title="play" rel="nofollow noopener" data-wpel-link="internal"> Tổng GĐ
                                            Tiến
                                            Phương Công Ty Dược Phảm Thành
                                            Tín. </a></div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                <div class="item page-testimonial__item">
                                    <div class="images"> <a target="_blank"
                                            href="https://www.tiktok.com/@andoann/video/7005925194464251163?lang=vi-VN&amp;is_copy_url=1&amp;is_from_webapp=v1"
                                            title="play" rel="nofollow noopener external noreferrer"
                                            data-wpel-link="external">
                                            <noscript><img alt="partner img"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/An-Doãn-KOLs-ngoài-trang-chủ.jpeg"
                                                    class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/An-Doãn-KOLs-ngoài-trang-chủ.jpeg"
                                                        alt="partner img"></noscript><img class=" ls-is-cached lazyloaded"
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/An-Doãn-KOLs-ngoài-trang-chủ.jpeg"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/An-Doãn-KOLs-ngoài-trang-chủ.jpeg"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> <a target="_blank"
                                            href="https://www.tiktok.com/@andoann/video/7005925194464251163?lang=vi-VN&amp;is_copy_url=1&amp;is_from_webapp=v1"
                                            title="play" rel="nofollow noopener external noreferrer"
                                            data-wpel-link="external"> An Doãn:
                                            Là một nhà kinh doanh,một Fashion and Lifestyle Vlogger và là CEO
                                            của BOO. Sau khi tham khảo
                                            rất nhiều đơn vị vận chuyển và các đơn vị nhập khẩu thì mình thấy
                                            rằng Đại Dương có một dịch
                                            vụ cực kỳ chất lượng và uy tín </a></div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                <div class="item page-testimonial__item">
                                    <div class="images"> <a target="_blank" href="https://www.facebook.com/lyrashop10.5/"
                                            title="play" rel="nofollow noopener external noreferrer"
                                            data-wpel-link="external"> <noscript><img alt="partner img"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/bảo-ngọc-lyra.png"
                                                    class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/bảo-ngọc-lyra.png"
                                                        alt="partner img"></noscript><img class=" lazyloaded"
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/bảo-ngọc-lyra.png"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/bảo-ngọc-lyra.png"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> <a target="_blank"
                                            href="https://www.facebook.com/lyrashop10.5/" title="play"
                                            rel="nofollow noopener external noreferrer" data-wpel-link="external"> Bảo
                                            Ngọc: LYRA thuộc
                                            top thương hiệu thời trang dành cho các bạn trẻ lớn nhất Việt Nam.
                                            Với mục tiêu là mẫu mã đẹp,
                                            bắt trend nhanh, giá bán hợp lý. Vì vậy Đại Dương đã đem đến cho
                                            LYRA nguồn hàng đáp ứng đủ
                                            các tiêu chí trên. </a></div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 350px; margin-right: 30px;">
                                <div class="item page-testimonial__item">
                                    <div class="images"> <a target="_self" href="javascript:void(0)" title="play"
                                            rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                    alt="partner img"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                    class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                        alt="partner img"></noscript><img class=" lazyloaded"
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> <a target="_self" href="javascript:void(0)"
                                            title="play" rel="nofollow noopener" data-wpel-link="internal"> Đức Huy:
                                            Thiết bị vệ sinh ROYAL JOIN là
                                            thương hiệu hàng đầu tại Hàn Quốc và đẳng cấp thế giới. Chúng tôi đã
                                            hợp tác với Đại Dương
                                            nhiều năm nay để có thể mang đến cho người tiêu dùng các sản phẩm
                                            tốt nhất và phù hợp với
                                            người Việt. </a></div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 350px; margin-right: 30px;">
                                <div class="item page-testimonial__item">
                                    <div class="images"> <a target="_self" href="javascript:void(0)" title="play"
                                            rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                    alt="partner img"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/hue-loi-hue-loi.png"
                                                    class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/hue-loi-hue-loi.png"
                                                        alt="partner img"></noscript><img class=" lazyloaded"
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/hue-loi-hue-loi.png"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/hue-loi-hue-loi.png"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> <a target="_self" href="javascript:void(0)"
                                            title="play" rel="nofollow noopener" data-wpel-link="internal"> Đại
                                            Dương
                                            luôn là sự lựa chọn hàng đầu của
                                            Huê Lợi bởi Tốc độ - Uy Tín - Và sự tận tâm. Đặc biệt trong tron mùa
                                            dịch Covid-19 vừa qua Đại
                                            Dương luôn đảm bảo việc vận chuyển thiết bị y tế của chúng tôi. </a>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 350px; margin-right: 30px;">
                                <div class="item page-testimonial__item">
                                    <div class="images"> <a target="_self" href="javascript:void(0)" title="play"
                                            rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                    alt="partner img"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/Dược-mỹ-phẩm-thành-tín.png"
                                                    class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/Dược-mỹ-phẩm-thành-tín.png"
                                                        alt="partner img"></noscript><img class=" lazyloaded"
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/Dược-mỹ-phẩm-thành-tín.png"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/Dược-mỹ-phẩm-thành-tín.png"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> <a target="_self" href="javascript:void(0)"
                                            title="play" rel="nofollow noopener" data-wpel-link="internal"> Tổng GĐ
                                            Tiến
                                            Phương Công Ty Dược Phảm Thành
                                            Tín. </a></div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="item page-testimonial__item">
                                    <div class="images"> <a target="_blank"
                                            href="https://www.tiktok.com/@andoann/video/7005925194464251163?lang=vi-VN&amp;is_copy_url=1&amp;is_from_webapp=v1"
                                            title="play" rel="nofollow noopener external noreferrer"
                                            data-wpel-link="external">
                                            <noscript><img alt="partner img"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/An-Doãn-KOLs-ngoài-trang-chủ.jpeg"
                                                    class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/An-Doãn-KOLs-ngoài-trang-chủ.jpeg"
                                                        alt="partner img"></noscript><img
                                                    class=" ls-is-cached lazyloaded"
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/An-Doãn-KOLs-ngoài-trang-chủ.jpeg"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/An-Doãn-KOLs-ngoài-trang-chủ.jpeg"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> <a target="_blank"
                                            href="https://www.tiktok.com/@andoann/video/7005925194464251163?lang=vi-VN&amp;is_copy_url=1&amp;is_from_webapp=v1"
                                            title="play" rel="nofollow noopener external noreferrer"
                                            data-wpel-link="external"> An Doãn:
                                            Là một nhà kinh doanh,một Fashion and Lifestyle Vlogger và là CEO
                                            của BOO. Sau khi tham khảo
                                            rất nhiều đơn vị vận chuyển và các đơn vị nhập khẩu thì mình thấy
                                            rằng Đại Dương có một dịch
                                            vụ cực kỳ chất lượng và uy tín </a></div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="item page-testimonial__item">
                                    <div class="images"> <a target="_blank"
                                            href="https://www.facebook.com/lyrashop10.5/" title="play"
                                            rel="nofollow noopener external noreferrer" data-wpel-link="external">
                                            <noscript><img alt="partner img"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/bảo-ngọc-lyra.png"
                                                    class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/bảo-ngọc-lyra.png"
                                                        alt="partner img"></noscript><img class=" lazyloaded"
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/bảo-ngọc-lyra.png"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/bảo-ngọc-lyra.png"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> <a target="_blank"
                                            href="https://www.facebook.com/lyrashop10.5/" title="play"
                                            rel="nofollow noopener external noreferrer" data-wpel-link="external"> Bảo
                                            Ngọc: LYRA thuộc
                                            top thương hiệu thời trang dành cho các bạn trẻ lớn nhất Việt Nam.
                                            Với mục tiêu là mẫu mã đẹp,
                                            bắt trend nhanh, giá bán hợp lý. Vì vậy Đại Dương đã đem đến cho
                                            LYRA nguồn hàng đáp ứng đủ
                                            các tiêu chí trên. </a></div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 350px; margin-right: 30px;">
                                <div class="item page-testimonial__item">
                                    <div class="images"> <a target="_self" href="javascript:void(0)" title="play"
                                            rel="nofollow noopener" data-wpel-link="internal"> <noscript><img
                                                    alt="partner img"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                    class="lazyload"
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                        alt="partner img"></noscript><img class=" lazyloaded"
                                                    src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/09/thuong-mai-duc-huy.png"
                                                    alt="partner img"> </a></div>
                                    <div class="page-testimonial__text"> <a target="_self" href="javascript:void(0)"
                                            title="play" rel="nofollow noopener" data-wpel-link="internal"> Đức Huy:
                                            Thiết bị vệ sinh ROYAL JOIN là
                                            thương hiệu hàng đầu tại Hàn Quốc và đẳng cấp thế giới. Chúng tôi đã
                                            hợp tác với Đại Dương
                                            nhiều năm nay để có thể mang đến cho người tiêu dùng các sản phẩm
                                            tốt nhất và phù hợp với
                                            người Việt. </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                aria-label="Previous">‹</span></button><button type="button" role="presentation"
                            class="owl-next"><span aria-label="Next">›</span></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </section>
        <section class="blog">
            <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: hidden; animation-duration: 1.5s; animation-name: none;">
                    <h2 class="text-uppercase">tin tức mới nhất</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="blog__large blog__item wow fadeIn" data-wow-duration="1.2s"
                            style="visibility: hidden; animation-duration: 1.2s; animation-name: none;"> <a
                                class="d-block blog__img" href="https://nhapkhautrungquoc.vn/mat-kinh-quang-chau/"
                                title="Cách nhập mắt kính Quảng Châu đẹp, giá rẻ" data-wpel-link="internal">
                                <noscript><img width="540" height="500"
                                        alt="Cách nhập mắt kính Quảng Châu đẹp, giá rẻ"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-nhap-mat-kinh-quang-chau-dep-gia-re-540x500.jpg"
                                        class="attachment-home_main_thumb size-home_main_thumb wp-post-image lazyload"
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                            width="540" height="500"
                                            src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-nhap-mat-kinh-quang-chau-dep-gia-re-540x500.jpg"
                                            class="attachment-home_main_thumb size-home_main_thumb wp-post-image"
                                            alt="Cách nhập mắt kính Quảng Châu đẹp, giá rẻ" /></noscript><img
                                        width="540" height="500"
                                        src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20540%20500%22%3E%3C/svg%3E"
                                        data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-nhap-mat-kinh-quang-chau-dep-gia-re-540x500.jpg"
                                        class="lazyload attachment-home_main_thumb size-home_main_thumb wp-post-image"
                                        alt="Cách nhập mắt kính Quảng Châu đẹp, giá rẻ"> </a>
                            <div class="card-body px-0 pb-0 pb-lg-3">
                                <div class="blog-body-content">
                                    <h5 class="h6 card-title"> <a class="blog-heading"
                                            href="https://nhapkhautrungquoc.vn/mat-kinh-quang-chau/"
                                            title="Cách nhập mắt kính Quảng Châu đẹp, giá rẻ"
                                            data-wpel-link="internal">Cách nhập mắt kính
                                            Quảng Châu đẹp, giá rẻ</a></h5>
                                    <div class="d-flex blog__meta mb-2">
                                        <p class="card-text mr-3 mb-0"><i
                                                class="fa fa-clock mr-2"></i><span>12/29/2022</span></p>
                                        <p class="card-text mb-0 mr-3"><i class="fa fa-eye mr-2"></i><span>7
                                                Views</span></p>
                                        <p class="card-text mb-0"><span id="rateMe"> <i
                                                    class="fas fa-star py-1 px-0 rate-popover" data-index="0"
                                                    data-html="true" data-toggle="popover" data-placement="top"
                                                    title="Very bad"></i> <i class="fas fa-star py-1 px-0 rate-popover"
                                                    data-index="1" data-html="true" data-toggle="popover"
                                                    data-placement="top" title="Poor"></i> <i
                                                    class="fas fa-star py-1 px-0 rate-popover" data-index="2"
                                                    data-html="true" data-toggle="popover" data-placement="top"
                                                    title="OK"></i> <i class="fas fa-star py-1 px-0 rate-popover"
                                                    data-index="3" data-html="true" data-toggle="popover"
                                                    data-placement="top" title="Good"></i> <i
                                                    class="fas fa-star py-1 px-0 rate-popover" data-index="4"
                                                    data-html="true" data-toggle="popover" data-placement="top"
                                                    title="Excellent"></i> </span></p>
                                    </div>
                                    <p> Mắt kính Quảng Châu cũng là một trong những nguồn hàng đem lại nhiều lợi
                                        nhuận kinh doanh nhất
                                        hiện nay. Vậy tại sao kính mắt Quảng Châu lại được ưa chuộng như vậy?
                                        Cách nhập mặt hàng này như
                                        thế nào? Theo dõi bài viết dưới đây để được Nhập khẩu Đại Dương sẽ bật
                                        mí câu trả lời nhé. Có
                                        nên nhập mắt kính Quảng Châu hay không?&nbsp; Việc mua sắm là nhu cầu cơ
                                        bản của con...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card blog__item wow fadeIn" data-wow-duration="1.2s"
                            style="visibility: hidden; animation-duration: 1.2s; animation-name: none;">
                            <div class="row no-gutters"> <a class="col-4 col-md-3 blog__img"
                                    href="https://nhapkhautrungquoc.vn/app-aliwangwang/"
                                    title="App Aliwangwang là gì? Hướng dẫn tải và cài đặt Aliwangwang chi tiết nhất"
                                    data-wpel-link="internal"> <noscript><img width="135" height="90"
                                            alt="App Aliwangwang là gì? Hướng dẫn tải và cài đặt Aliwangwang chi tiết nhất"
                                            data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat..jpg 800w"
                                            data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-135x90.jpg"
                                            data-sizes="(max-width: 135px) 100vw, 135px"
                                            class="attachment-home_thumb size-home_thumb wp-post-image lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                width="135" height="90"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-135x90.jpg"
                                                class="attachment-home_thumb size-home_thumb wp-post-image"
                                                alt="App Aliwangwang là gì? Hướng dẫn tải và cài đặt Aliwangwang chi tiết nhất"
                                                srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat..jpg 800w"
                                                sizes="(max-width: 135px) 100vw, 135px" /></noscript><img width="135"
                                            height="90"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20135%2090%22%3E%3C/svg%3E"
                                            data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-135x90.jpg"
                                            class="lazyload attachment-home_thumb size-home_thumb wp-post-image"
                                            alt="App Aliwangwang là gì? Hướng dẫn tải và cài đặt Aliwangwang chi tiết nhất"
                                            data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat.-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/app-aliwangwang-la-gi-huong-dan-tai-va-cai-dat-aliwangwang-chi-tiet-nhat..jpg 800w"
                                            data-sizes="(max-width: 135px) 100vw, 135px"> </a>
                                <div class="col-8 col-md-9">
                                    <div class="card-body py-0 px-2 px-lg-3">
                                        <h5 class="h6 card-title"> <a
                                                href="https://nhapkhautrungquoc.vn/app-aliwangwang/"
                                                title="App Aliwangwang là gì? Hướng dẫn tải và cài đặt Aliwangwang chi tiết nhất"
                                                data-wpel-link="internal">App Aliwangwang là gì? Hướng dẫn tải
                                                và cài đặt Aliwangwang chi
                                                tiết nhất</a></h5>
                                        <div class="d-flex blog__meta">
                                            <p class="card-text mr-3 mb-0"><i
                                                    class="fa fa-clock mr-2"></i><span>12/27/2022</span></p>
                                            <p class="card-text mb-0 mr-3"><i class="fa fa-eye mr-2"></i><span>10
                                                    Views</span></p>
                                            <p class="card-text mb-0"><span id="rateMe"> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="0"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Very bad"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="1"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Poor"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="2"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="OK"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="3"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Good"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="4"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Excellent"></i> </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card blog__item wow fadeIn" data-wow-duration="1.2s"
                            style="visibility: hidden; animation-duration: 1.2s; animation-name: none;">
                            <div class="row no-gutters"> <a class="col-4 col-md-3 blog__img"
                                    href="https://nhapkhautrungquoc.vn/bang-size-quan-ao-trung-quoc/"
                                    title="Bảng Size Quần áo Trung Quốc Chuẩn Nhất Mà Dân Order Cần Biết"
                                    data-wpel-link="internal">
                                    <noscript><img width="135" height="90"
                                            alt="Bảng Size Quần áo Trung Quốc Chuẩn Nhất Mà Dân Order Cần Biết"
                                            data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet.jpg 800w"
                                            data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-135x90.jpg"
                                            data-sizes="(max-width: 135px) 100vw, 135px"
                                            class="attachment-home_thumb size-home_thumb wp-post-image lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                width="135" height="90"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-135x90.jpg"
                                                class="attachment-home_thumb size-home_thumb wp-post-image"
                                                alt="Bảng Size Quần áo Trung Quốc Chuẩn Nhất Mà Dân Order Cần Biết"
                                                srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet.jpg 800w"
                                                sizes="(max-width: 135px) 100vw, 135px" /></noscript><img width="135"
                                            height="90"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20135%2090%22%3E%3C/svg%3E"
                                            data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-135x90.jpg"
                                            class="lazyload attachment-home_thumb size-home_thumb wp-post-image"
                                            alt="Bảng Size Quần áo Trung Quốc Chuẩn Nhất Mà Dân Order Cần Biết"
                                            data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/bang-size-quan-ao-trung-quoc-chuan-nhat-ma-dan-order-can-biet.jpg 800w"
                                            data-sizes="(max-width: 135px) 100vw, 135px"> </a>
                                <div class="col-8 col-md-9">
                                    <div class="card-body py-0 px-2 px-lg-3">
                                        <h5 class="h6 card-title"> <a
                                                href="https://nhapkhautrungquoc.vn/bang-size-quan-ao-trung-quoc/"
                                                title="Bảng Size Quần áo Trung Quốc Chuẩn Nhất Mà Dân Order Cần Biết"
                                                data-wpel-link="internal">Bảng Size Quần áo Trung Quốc Chuẩn
                                                Nhất Mà Dân Order Cần Biết</a>
                                        </h5>
                                        <div class="d-flex blog__meta">
                                            <p class="card-text mr-3 mb-0"><i
                                                    class="fa fa-clock mr-2"></i><span>12/19/2022</span></p>
                                            <p class="card-text mb-0 mr-3"><i class="fa fa-eye mr-2"></i><span>32
                                                    Views</span></p>
                                            <p class="card-text mb-0"><span id="rateMe"> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="0"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Very bad"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="1"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Poor"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="2"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="OK"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="3"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Good"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="4"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Excellent"></i> </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card blog__item wow fadeIn" data-wow-duration="1.2s"
                            style="visibility: hidden; animation-duration: 1.2s; animation-name: none;">
                            <div class="row no-gutters"> <a class="col-4 col-md-3 blog__img"
                                    href="https://nhapkhautrungquoc.vn/nguon-hang-tui-xach-quang-chau/"
                                    title="Cách Tìm Nguồn Sỉ Túi Xách Quảng Châu Giá Rẻ Tận Xưởng"
                                    data-wpel-link="internal">
                                    <noscript><img width="135" height="90"
                                            alt="Cách Tìm Nguồn Sỉ Túi Xách Quảng Châu Giá Rẻ Tận Xưởng"
                                            data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong.jpg 800w"
                                            data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-135x90.jpg"
                                            data-sizes="(max-width: 135px) 100vw, 135px"
                                            class="attachment-home_thumb size-home_thumb wp-post-image lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                width="135" height="90"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-135x90.jpg"
                                                class="attachment-home_thumb size-home_thumb wp-post-image"
                                                alt="Cách Tìm Nguồn Sỉ Túi Xách Quảng Châu Giá Rẻ Tận Xưởng"
                                                srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong.jpg 800w"
                                                sizes="(max-width: 135px) 100vw, 135px" /></noscript><img width="135"
                                            height="90"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20135%2090%22%3E%3C/svg%3E"
                                            data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-135x90.jpg"
                                            class="lazyload attachment-home_thumb size-home_thumb wp-post-image"
                                            alt="Cách Tìm Nguồn Sỉ Túi Xách Quảng Châu Giá Rẻ Tận Xưởng"
                                            data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/cach-tim-nguon-si-tui-xach-quang-chau-gia-re-tan-xuong.jpg 800w"
                                            data-sizes="(max-width: 135px) 100vw, 135px"> </a>
                                <div class="col-8 col-md-9">
                                    <div class="card-body py-0 px-2 px-lg-3">
                                        <h5 class="h6 card-title"> <a
                                                href="https://nhapkhautrungquoc.vn/nguon-hang-tui-xach-quang-chau/"
                                                title="Cách Tìm Nguồn Sỉ Túi Xách Quảng Châu Giá Rẻ Tận Xưởng"
                                                data-wpel-link="internal">Cách Tìm Nguồn Sỉ Túi Xách Quảng
                                                Châu Giá Rẻ Tận Xưởng</a></h5>
                                        <div class="d-flex blog__meta">
                                            <p class="card-text mr-3 mb-0"><i
                                                    class="fa fa-clock mr-2"></i><span>12/19/2022</span></p>
                                            <p class="card-text mb-0 mr-3"><i class="fa fa-eye mr-2"></i><span>31
                                                    Views</span></p>
                                            <p class="card-text mb-0"><span id="rateMe"> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="0"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Very bad"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="1"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Poor"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="2"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="OK"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="3"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Good"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="4"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Excellent"></i> </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card blog__item wow fadeIn" data-wow-duration="1.2s"
                            style="visibility: hidden; animation-duration: 1.2s; animation-name: none;">
                            <div class="row no-gutters"> <a class="col-4 col-md-3 blog__img"
                                    href="https://nhapkhautrungquoc.vn/caf-la-gi/"
                                    title="CAF là gì? Hướng dẫn cách tính phí CAF chuẩn xác nhất"
                                    data-wpel-link="internal">
                                    <noscript><img width="135" height="90"
                                            alt="CAF là gì? Hướng dẫn cách tính phí CAF chuẩn xác nhất"
                                            data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat.jpg 800w"
                                            data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-135x90.jpg"
                                            data-sizes="(max-width: 135px) 100vw, 135px"
                                            class="attachment-home_thumb size-home_thumb wp-post-image lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                width="135" height="90"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-135x90.jpg"
                                                class="attachment-home_thumb size-home_thumb wp-post-image"
                                                alt="CAF là gì? Hướng dẫn cách tính phí CAF chuẩn xác nhất"
                                                srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat.jpg 800w"
                                                sizes="(max-width: 135px) 100vw, 135px" /></noscript><img width="135"
                                            height="90"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20135%2090%22%3E%3C/svg%3E"
                                            data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-135x90.jpg"
                                            class="lazyload attachment-home_thumb size-home_thumb wp-post-image"
                                            alt="CAF là gì? Hướng dẫn cách tính phí CAF chuẩn xác nhất"
                                            data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/caf-la-gi-huong-dan-cach-tinh-phi-caf-chuan-xac-nhat.jpg 800w"
                                            data-sizes="(max-width: 135px) 100vw, 135px"> </a>
                                <div class="col-8 col-md-9">
                                    <div class="card-body py-0 px-2 px-lg-3">
                                        <h5 class="h6 card-title"> <a href="https://nhapkhautrungquoc.vn/caf-la-gi/"
                                                title="CAF là gì? Hướng dẫn cách tính phí CAF chuẩn xác nhất"
                                                data-wpel-link="internal">CAF
                                                là gì? Hướng dẫn cách tính phí CAF chuẩn xác nhất</a></h5>
                                        <div class="d-flex blog__meta">
                                            <p class="card-text mr-3 mb-0"><i
                                                    class="fa fa-clock mr-2"></i><span>12/12/2022</span></p>
                                            <p class="card-text mb-0 mr-3"><i class="fa fa-eye mr-2"></i><span>41
                                                    Views</span></p>
                                            <p class="card-text mb-0"><span id="rateMe"> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="0"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Very bad"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="1"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Poor"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="2"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="OK"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="3"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Good"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="4"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Excellent"></i> </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card blog__item wow fadeIn" data-wow-duration="1.2s"
                            style="visibility: hidden; animation-duration: 1.2s; animation-name: none;">
                            <div class="row no-gutters"> <a class="col-4 col-md-3 blog__img"
                                    href="https://nhapkhautrungquoc.vn/ddc-la-phi-gi/"
                                    title="DDC là phí gì? Tất tần tật về DDC trong xuất nhập khẩu"
                                    data-wpel-link="internal">
                                    <noscript><img width="135" height="90"
                                            alt="DDC là phí gì? Tất tần tật về DDC trong xuất nhập khẩu"
                                            data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau.jpg 800w"
                                            data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-135x90.jpg"
                                            data-sizes="(max-width: 135px) 100vw, 135px"
                                            class="attachment-home_thumb size-home_thumb wp-post-image lazyload"
                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                                width="135" height="90"
                                                src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-135x90.jpg"
                                                class="attachment-home_thumb size-home_thumb wp-post-image"
                                                alt="DDC là phí gì? Tất tần tật về DDC trong xuất nhập khẩu"
                                                srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau.jpg 800w"
                                                sizes="(max-width: 135px) 100vw, 135px" /></noscript><img width="135"
                                            height="90"
                                            src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20135%2090%22%3E%3C/svg%3E"
                                            data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-135x90.jpg"
                                            class="lazyload attachment-home_thumb size-home_thumb wp-post-image"
                                            alt="DDC là phí gì? Tất tần tật về DDC trong xuất nhập khẩu"
                                            data-srcset="https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-135x90.jpg 135w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-300x203.jpg 300w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-768x518.jpg 768w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-350x236.jpg 350w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau-348x235.jpg 348w, https://nhapkhautrungquoc.vn/wp-content/uploads/2022/12/ddc-la-phi-gi-tat-tan-tat-ve-ddc-trong-xuat-nhap-khau.jpg 800w"
                                            data-sizes="(max-width: 135px) 100vw, 135px"> </a>
                                <div class="col-8 col-md-9">
                                    <div class="card-body py-0 px-2 px-lg-3">
                                        <h5 class="h6 card-title"> <a href="https://nhapkhautrungquoc.vn/ddc-la-phi-gi/"
                                                title="DDC là phí gì? Tất tần tật về DDC trong xuất nhập khẩu"
                                                data-wpel-link="internal">DDC
                                                là phí gì? Tất tần tật về DDC trong xuất nhập khẩu</a></h5>
                                        <div class="d-flex blog__meta">
                                            <p class="card-text mr-3 mb-0"><i
                                                    class="fa fa-clock mr-2"></i><span>12/12/2022</span></p>
                                            <p class="card-text mb-0 mr-3"><i class="fa fa-eye mr-2"></i><span>36
                                                    Views</span></p>
                                            <p class="card-text mb-0"><span id="rateMe"> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="0"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Very bad"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="1"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Poor"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="2"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="OK"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="3"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Good"></i> <i
                                                        class="fas fa-star py-1 px-0 rate-popover" data-index="4"
                                                        data-html="true" data-toggle="popover" data-placement="top"
                                                        title="Excellent"></i> </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-contact">
            <div class="container">
                <div class="page-heading wow fadeInDown" data-wow-duration="1.5s"
                    style="visibility: hidden; animation-duration: 1.5s; animation-name: none;">
                    <h2 class="text-uppercase">liên hệ chúng tôi</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-4 mb-lg-0 wow fadeInLeft" data-wow-duration="1s"
                        style="visibility: hidden; animation-duration: 1s; animation-name: none;">
                        <div class="home-contact__img"> <noscript><img alt="dịch vụ"
                                    style="width: 100%; height: auto;"
                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/12/Liên-Hệ-Dại-DƯơng.png"
                                    class="lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" /><noscript><img
                                        src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/12/Liên-Hệ-Dại-DƯơng.png"
                                        alt="dịch vụ" style="width: 100%; height: auto;" /></noscript><img
                                    class="lazyload"
                                    src="data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E"
                                    data-src="https://nhapkhautrungquoc.vn/wp-content/uploads/2021/12/Liên-Hệ-Dại-DƯơng.png"
                                    alt="dịch vụ" style="width: 100%; height: auto;"></div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s"
                        style="visibility: hidden; animation-duration: 1s; animation-name: none;">
                        <div class="d-flex align-items-center h-100 home-contact__form">
                            <div role="form" class="wpcf7" id="wpcf7-f6743-o2" lang="vi" dir="ltr">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form action="/#wpcf7-f6743-o2" method="post" class="wpcf7-form init"
                                    novalidate="novalidate" data-status="init">
                                    <div style="display: none;"> <input type="hidden" name="_wpcf7"
                                            value="6743"> <input type="hidden" name="_wpcf7_version"
                                            value="5.5.3"> <input type="hidden" name="_wpcf7_locale"
                                            value="vi">
                                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f6743-o2"> <input
                                            type="hidden" name="_wpcf7_container_post" value="0"> <input
                                            type="hidden" name="_wpcf7_posted_data_hash" value="">
                                    </div>
                                    <div class="home-contact__content">
                                        <div class="page-heading">
                                            <h2 class="text-uppercase">Yêu cầu báo giá</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group"> <span
                                                        class="wpcf7-form-control-wrap your-name"><input type="text"
                                                            name="your-name" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text form-control"
                                                            aria-invalid="false" placeholder="Nhập họ tên"></span></div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group"> <span
                                                        class="wpcf7-form-control-wrap your-email"><input type="text"
                                                            name="your-email" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text form-control"
                                                            aria-invalid="false"
                                                            placeholder="Nhập địa chỉ email"></span></div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group"> <span
                                                        class="wpcf7-form-control-wrap your-tel"><input type="number"
                                                            name="your-tel" value="" size="40"
                                                            class="wpcf7-form-control wpcf7-text form-control"
                                                            aria-invalid="false"
                                                            placeholder="Nhập số điện thoại"></span></div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group"> <span
                                                        class="wpcf7-form-control-wrap your-address"><input
                                                            type="text" name="your-address" value=""
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text form-control"
                                                            aria-invalid="false" placeholder="Nhập địa chỉ"></span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group"> <span
                                                        class="wpcf7-form-control-wrap your-subject"><input
                                                            type="text" name="your-subject" value=""
                                                            size="40"
                                                            class="wpcf7-form-control wpcf7-text form-control"
                                                            aria-invalid="false"
                                                            placeholder="Thông tin cần báo giá"></span></div>
                                            </div>
                                            <div class="col-12"> <button class="btn btn-gradient w-100"
                                                    type="submit">Gửi</button></div>
                                        </div>
                                    </div><input type="hidden" class="wpcf7-pum"
                                        value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:0}">
                                    <div class="wpcf7-response-output" aria-hidden="true"></div><input
                                        class="js_cookies" name="_cookies" style="display: none;">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
