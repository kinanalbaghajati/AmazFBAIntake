@extends('backend.base_dashboard')
@section('style')
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/libs/animate-css/animate.css')}}">
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">

            {{--            <div class="col-lg-8">--}}
            {{--                <div class="card">--}}
            {{--                    <div class="d-flex align-items-center row justify-content-center">--}}
            {{--                        <div class="col-6">--}}
            {{--                            <div class="card-body ">--}}
            {{--                                <h5 class="card-title mb-0">خطوة بخطوة تدرب مع فريق The best solution لمدة 6 شهر وتجنب الخسارة في منصة امازون لتحقيق النجاح والحرية المالية--}}

            {{--                                    وتحتها متل ما مكتوب نعلم كيف تحترف وتكسب ١٠ آلاف دولار شهري وأكثر من بيع منتجات على اكبر موقع في العالم</h5>--}}
            {{--                                <p class="mb-2">Best seller of the month</p>--}}
            {{--                                <h4 class="text-primary mb-1">$48.9k</h4>--}}

            {{--                            </div>--}}
            {{--                        </div>--}}

            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}

            <div class="col-md-9 mb-4">
                <div class="card">
                    <h3 class="card-header text-center px-5" style="line-height: 40px">خطوة بخطوة تدرب مع فريق
                        <span class="text-dark"> The Best Solution</span>
                        لمدة 6 شهر وتجنب الخسارة في منصة امازون لتحقيق النجاح والحرية المالي

                    </h3>
                    <div class="card-body">
                        <div class="divider">
                            <div class="divider-text">The Best Solution</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 mb-4">
                <div class="alert alert-primary" role="alert">
                    <h4 class="card-header text-center px-5" style="line-height: 40px">
                        نعلم كيف تحترف وتكسب 000 10 آلاف دولار شهري وأكثر من بيع منتجات على اكبر موقع في العالم
                    </h4>
                    <div class="card-body">
                        <div class="divider">
                            <div class="divider-text">The Best Solution</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <div class="row mb-5 justify-content-center pt-1">
            <div class="col-sm-5">
                <div class="card mb-3">
                    <img src="{{asset('backend_theme/images/image1.png')}}" class="card-img-top rounded"
                         alt="Wild Landscape"/>
                </div>
            </div>
        </div>

        <div class="row mb-1 justify-content-between pt-5">

            <div class="col-md-5 col-xl-3">
                <div class="card mb-3">
                    <img class="card-img-top rounded" src="{{asset('backend_theme/images/data3.jpg')}}"
                         alt="Card image cap">

                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="card mb-3">
                    <img class="card-img-top rounded" src="{{asset('backend_theme/images/data2.jpg')}}"
                         alt="Card image cap">

                </div>
            </div>
            <div class="col-md-5 col-xl-3">
                <div class="card mb-3">
                    <img class="card-img-top rounded" src="{{asset('backend_theme/images/data1.jpg')}}"
                         alt="Card image cap">
                </div>
            </div>


        </div>

<div class="row justify-content-center">
    <div class="col-md-4 ">
        <div class="alert alert-primary text-center" role="alert" style="font-size: 18px"> نتائج بعض المتدربين</div>
    </div>
</div>

        <div class="row mt-1 pb-5">
            <div class="d-grid gap-2 col-lg-6 mx-auto">
                <button class="btn btn-primary btn-lg waves-effect waves-light" type="button" data-bs-toggle="modal"
                        data-bs-target="#animationModal">احصل على استشارة الان</button>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div
        class="modal animate__animated animate__slideInDown"
        id="animationModal"
        tabindex="-1"
        aria-hidden="true"
    >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">موعد جلسة</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                       <h5> نعم ارغب في حجز جلسة توجيه محدودة والحصول على دخل من 5 الى 6 ارقام من خلال امازون</h5>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">اغلاق</button>
                   <a href="{{route('intake.form')}}"> <button type="button" class="btn btn-primary">ابدا</button> </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script_main')
    <script src="{{asset('backend_theme/assets/js/main.js')}}"></script>
@endsection
@section('script_page')
    <script src="{{asset('backend_theme/assets/js/ui-modals.js')}}"></script>
@endsection


