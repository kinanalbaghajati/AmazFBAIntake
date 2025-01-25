@extends('backend.base_dashboard')
@section('style')
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/css/pages/page-faq.css')}}">
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/css/pages/ui-carousel.css')}}">
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y pt-4 c" >
    <div class="faq-header d-flex flex-column justify-content-center align-items-center rounded">
        <h3 class="text-center">شكرا لتواصلك معنا سيقوم فريقنا بالاتصال بك خلال ال24 ساعة القادمة وترتيب مكالمة فيديو معك 👍💼️</h3>

        <p class="text-center mb-0 px-3">شكرا لاختيارك The Best Solution</p>
    </div>

{{--        <div class="col-md-12 mb-4 mt-5">--}}

            <div class="row justify-content-center">
                <div class="col-md-4 mb-4 mt-2 ">


                    <div class="card bg-dark text-white">
                        <img src="{{asset('backend_theme/images/image1.png')}}" class="card-img" alt="Stony Beach"/>
{{--                        <div class="card-img-overlay">--}}
{{--                            <h5 class="card-title">Card title</h5>--}}
{{--                            <p class="card-text">--}}
{{--                                This is a wider card with supporting text below as a natural lead-in to additional--}}
{{--                                content. This content is a little bit longer.--}}
{{--                            </p>--}}
{{--                            <p class="card-text">Last updated 3 mins ago</p>--}}
{{--                        </div>--}}
                    </div>



{{--                                <div class="card mb-3">--}}
{{--                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="card-img-top" alt="Wild Landscape"/>--}}
{{--                                    <div class="card-body">--}}
{{--                                        <h5 class="card-title">Card title</h5>--}}
{{--                                        <p class="card-text">--}}
{{--                                            This is a wider card with supporting text below as a natural lead-in to additional--}}
{{--                                            content. This content is a little bit longer.--}}
{{--                                        </p>--}}
{{--                                        <p class="card-text">--}}
{{--                                            <small class="text-muted">Last updated 3 mins ago</small>--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <h5 class="card-title">Card title</h5>--}}
{{--                                        <p class="card-text">--}}
{{--                                            This is a wider card with supporting text below as a natural lead-in to additional--}}
{{--                                            content. This content is a little bit longer.--}}
{{--                                        </p>--}}
{{--                                        <p class="card-text">--}}
{{--                                            <small class="text-muted">Last updated 3 mins ago</small>--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="card-img-bottom" alt="Camera"/>--}}
{{--                                </div>--}}


                </div>
            </div>

{{--            <div class="card bg-dark text-white">--}}
{{--                <img src="https://mdbcdn.b-cdn.net/img/new/slides/017.webp" class="card-img" alt="Stony Beach"/>--}}
{{--                <div class="card-img-overlay">--}}
{{--                    <h5 class="card-title">Card title</h5>--}}
{{--                    <p class="card-text">--}}
{{--                        This is a wider card with supporting text below as a natural lead-in to additional--}}
{{--                        content. This content is a little bit longer.--}}
{{--                    </p>--}}
{{--                    <p class="card-text">Last updated 3 mins ago</p>--}}
{{--                </div>--}}
{{--            </div>--}}



{{--            <div class="card mb-3">--}}
{{--                <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="card-img-top" alt="Wild Landscape"/>--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">Card title</h5>--}}
{{--                    <p class="card-text">--}}
{{--                        This is a wider card with supporting text below as a natural lead-in to additional--}}
{{--                        content. This content is a little bit longer.--}}
{{--                    </p>--}}
{{--                    <p class="card-text">--}}
{{--                        <small class="text-muted">Last updated 3 mins ago</small>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title">Card title</h5>--}}
{{--                    <p class="card-text">--}}
{{--                        This is a wider card with supporting text below as a natural lead-in to additional--}}
{{--                        content. This content is a little bit longer.--}}
{{--                    </p>--}}
{{--                    <p class="card-text">--}}
{{--                        <small class="text-muted">Last updated 3 mins ago</small>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="card-img-bottom" alt="Camera"/>--}}
{{--            </div>--}}

        </div>
{{--    </div>--}}
@endsection
@section('script_vendor')
    <script src="{{asset('backend_theme/assets/vendor/libs/swiper/swiper.js')}}"></script>
@endsection
@section('script_page')
    <script src="{{asset('backend_theme/assets/js/ui-carousel.js')}}"></script>
@endsection
