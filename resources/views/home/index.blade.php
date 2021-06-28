@extends('home.layouts.app')

@section('title', 'ShopGroup.vn Đơn Vị Mua Bán Chuyển Nhượng Group Facebook Uy Tín')
@section('description', 'Bạn đang có nhu cầu mua bán Group Facebook chất lượng? ShopGroup.vn - đơn vị mua bán chuyển nhượng Group Facebook uy tín tại Việt Nam sẽ giúp bạn làm điều đó.')
@section('css')

<style>
    .video-container {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        height: 0;
    }
    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    .swal-overlay {
        background-color: rgba(30, 30, 30, 0.55);
    }
    .swal-button {
        padding: 7px 19px;
        border-radius: 2px;
        background-color: #2196F3;
        font-size: 20px;
        border: 1px solid #2196F3;
        text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.3);
    }
    .swal-modal{
        min-width: 50% !important;
        max-width: 100% !important;
    }
    .swal-footer{
        text-align: center;
    }
    .swal-text{
        font-size: 22px;
    }
</style>
@endsection
@section('content')
    {{-- Block hero --}}
    <div class="grid-hero" id="grid-hero">
        <div id="grid-hero-banner">
        </div>
    </div>

    {{-- Block call --}}
    <div class="grid-call">
        <div class="container">
            <div class="box-service-home branding">
                <div class="box-content row">
                    <div class="col-12 col-md-12 " style="text-align: center; padding-bottom:20px;">
                       @if ($config->youtube != null)
                        <div class="video-container">
                            <iframe width="100%"  src="{{$config->youtube}}?autoplay=1&mute=0" title="YouTube video player" frameborder="0"
                            allowfullscreen allow='autoplay'></iframe>
                        </div>
                        @else
                        <div class="video-container">
                           <img src="/images/banner.jpg"/>
                        </div>
                       @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Block service --}}
    <div class="grid-service servicee">
        <div class="container">
            <div class="box-call">
                <h3 class="title" data-cms="{{app()->getLocale()}}-index-24">Tại sao nên sở hữu một Group Facebook</h3>
                <div class="sapo" style="max-width:740px">
                    <p style="text-align: left" data-cms="{{app()->getLocale()}}-index-26">
                        Youtube tạo nên thương hiệu cho Sản Phẩm, Doanh Nghiệm của bạn.
                        Youtube đem lại doanh thu với tính năng kiếm tiền trên Youtube.
                        Đưa Sản Phẩm, Doanh Nghiệp của bạn đến với khách hàng mà không tốn phí.
                        Giúp khách hàng đánh giá, nhìn nhận đúng và rõ hơn về Sản Phẩm, Doanh Nghiệp
                    </p>
                    <div class="btn-normal" style="margin-top: 10px;">
                        <a style="background: #4F4F4F; border-radius: 24px;" href="/@lang('channels')" title="Get to know us">
                            <span style="color: white !important" class="btn-normal__title" data-cms="{{app()->getLocale()}}-index-30">Danh Sách Group</span>
                            <svg style="color: white !important" class="icon"><use xlink:href="#icon-arrow"></use></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @include('home.includes.consultation')
@endsection

@section('js')
<script src="/js/home/sweetalert.min.js"></script>
<script>
    swal("Hãy lựa chọn nhu cầu của bạn?", {
        buttons: {
            catch: {
                text: "Tôi muốn mua group",
                value: "catch",
            },
            defeat: {
                text: "Tôi muốn bán group",
                value: "defeat",
            }
        },
        })
        .then((value) => {
        switch (value) {
            case "defeat":
            window.location.href = "https://shopgroup.vn/chuyen-nhuong-lai-group-facebook"
            break;

            case "catch":
                window.location.href = "https://shopgroup.vn/mua-group-facebook"
            break;
        }
    });
</script>
@endsection
