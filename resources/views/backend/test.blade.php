@extends('backend.base_dashboard')
@section('style')
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/libs/bs-stepper/bs-stepper.css')}}">
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}">
    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/libs/select2/select2.css')}}">
    <link rel="stylesheet"
          href="{{asset('backend_theme/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('backend_theme/assets/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css')}}">

    <link rel="stylesheet" href="{{asset('backend_theme/assets/vendor/libs/tagify/tagify.css')}}">
    <link rel="stylesheet"
          href="{{asset('backend_theme/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}">
    {{--    <link rel="stylesheet"--}}
    {{--          href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css"/>--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.1/build/css/intlTelInput.css">

    <style>
        #phone-number-mask {
            padding: 8px 20px !important;
        }

        .hide {
            display: none;
        }


        @media (max-width: 768px) {
            .form-password-toggle {
                padding: 12% 0px;
            }

            #phone-number-mask {
                padding: 12px 80px !important;
            }


        }
    </style>
@endsection
@section('content')

    <div class="col-12">
        {{--            <small class="text-light fw-semibold">Vertical Icons</small>--}}
        <div class="bs-stepper vertical wizard-modern wizard-modern-vertical-icons-example mt-2">
            <div class="bs-stepper-header">

                <div class=" step" data-target="#personal-info-vertical-modern">
                    <button type="button" class="step-trigger" aria-selected="false">
                          <span class="bs-stepper-circle">
                            <i class="ti ti-user"></i>
                          </span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">المعلومات الشخصية</span>
                            <span class="bs-stepper-subtitle">اضف المعلومات الشخصية</span>
                          </span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="step "
                     data-target="#account-details-vertical-modern">
                    <button type="button" class="step-trigger" aria-selected="true">
                          <span class="bs-stepper-circle">
                            <i class="ti ti-file-description"></i>
                          </span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">معلومات التواصل</span>
                            <span class="bs-stepper-subtitle">اضف معلومات التواصل</span>
                          </span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#job_exp">
                    <button type="button" class="step-trigger" aria-selected="false">
                        <span class="bs-stepper-circle"><i class="ti ti-brand-instagram"></i> </span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">الحالة المهنية</span>
                            <span class="bs-stepper-subtitle">اضف الحالة المهنية</span>
                          </span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#job_status">
                    <button type="button" class="step-trigger" aria-selected="false">
                        <span class="bs-stepper-circle"><i class="ti ti-brand-instagram"></i> </span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">رأس المال </span>
                            <span class="bs-stepper-subtitle"> اضق رأس المال</span>
                          </span>
                    </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#contact_time">
                    <button type="button" class="step-trigger" aria-selected="false">
                        <span class="bs-stepper-circle"><i class="ti ti-brand-instagram"></i> </span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">وقت التواصل</span>
                            <span class="bs-stepper-subtitle">اضف وقت التواصل </span>
                          </span>
                    </button>
                </div>


                <div class="line"></div>
                <div class="step" data-target="#job-desc">
                    <button type="button" class="step-trigger" aria-selected="false">
                        <span class="bs-stepper-circle"><i class="ti ti-brand-instagram"></i> </span>
                        <span class="bs-stepper-label">
                            <span class="bs-stepper-title">الوضع المهني</span>
                            <span class="bs-stepper-subtitle">اضف الوضع المهني</span>
                          </span>
                    </button>
                </div>


            </div>
            <div class="bs-stepper-content">
                <form id="formValidationExamples" onsubmit="return false" method="post"
                      action="{{route('intake.insert')}}" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework"
                      novalidate="novalidate">
                    @csrf
                    <!-- Personal Info -->
                    <div id="personal-info-vertical-modern" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">المعلومات الشخصية</h6>
                            <small>ادخل المعلومات الشخصية</small>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-12">
                                <label class="form-label py-2" for="first-name-modern-vertical"> ماهو الاسم الاول
                                    ؟ </label>
                                <input type="text" id="formValidationName" name="formValidationName"
                                       class="form-control " placeholder="الاسم الاول">
                                <div class="fv-plugins-message-container invalid-feedback"></div>

                            </div>
                            <div class="col-sm-12">
                                <label class="form-label py-2" for="last-name-modern-vertical">ماهو اسم العائلة
                                    ؟</label>
                                <input type="text" id="last-name-modern-vertical" name="second_name"
                                       class="form-control" placeholder="اسم العائلة">
                            </div>

                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-label-secondary btn-prev waves-effect" disabled>
                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next waves-effect waves-light">
                                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                    <i class="ti ti-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Account Details -->
                    <div id="account-details-vertical-modern" class="content active dstepper-block">

                        <div class="content-header mb-3">
                            <h6 class="mb-0">معلومات التواصل</h6>
                            <small>اضف معلومات التواصل</small>
                        </div>
                        <div class="row g-3">

                            <div class="col-sm-12">
                                <label class="form-label py-2" for="email-modern-vertical">ما هو البريد الاكنروني
                                    الذي يمكن ان نتواصل به معك ؟</label>
                                <input type="text" id="email-modern-vertical" class="form-control" name="email"
                                       placeholder="john.doe@example.com" aria-label="john.doe">
                            </div>
                            <div class="col-sm-3 ">
                                <label class="form-label pt-2" for="phone-number-mask">ما هو رقم هاتفك المحمول?
                                    whatsapp</label>
                                <label class="form-label pb-2" for="phone-number-mask">(حيث يمكن الوصول إليك بنسبة
                                    100٪)</label>

                                {{--                                            <span class="input-group-text">US (+1)</span>--}}
                                <input type="tel" id="phone-number-mask" name="phone_number"
                                       class="form-control phone-number-mask px-5"
                                       style="width: 100% !important;">

                                <div class="col-sm-12 py-3">
                                    <span id="valid-msg" class="hide"></span>
                                    <span id="error-msg" class="hide" role="alert"></span>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-label-secondary btn-prev waves-effect">
                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next waves-effect waves-light">
                                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                    <i class="ti ti-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div id="job-desc" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">الوضع المهني</h6>
                            <small>اختار الوضع المهني</small>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label py-2" for="twitter-vertical-modern">ماهو الوصف الافضل لوضعك
                                    المهني ؟</label>
                                <div class="d-sm-flex flex-column gap-2">
                                    <div class="col-md ">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp1">
                                                <input
                                                    name="customRadioTemp"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioTemp1"
                                                    checked
                                                />
                                                <span class="custom-option-header">
                                                      <span class=" mb-0">موظف</span>
                                                         </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp2">
                                                <input
                                                    name="customRadioTemp"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioTemp2"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">طالب</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp3">
                                                <input
                                                    name="customRadioTemp"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioTemp3"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">عمل خاص</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp4">
                                                <input
                                                    name="customRadioTemp"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioTemp4"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">رجل اعمال</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12"></div>


                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-label-secondary btn-prev waves-effect">
                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next waves-effect waves-light">
                                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                    <i class="ti ti-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Social Links -->
                    <div id="job_exp" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">الحالة المهنية؟</h6>
                            <small>اختر الحالة المهنية.</small>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label py-2" for="twitter-vertical-modern">كيف يسير عملك حالياً؟
                                </label>
                                <div class="d-sm-flex flex-column gap-2">
                                    <div class="col-md ">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_work_status1">
                                                <input
                                                    name="customRadioTemp_work_status"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioTemp_work_status1"
                                                    checked
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">لم ابدا بعد</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-basic">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_work_status2">
                                                <input
                                                    name="customRadioTemp_work_status"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioTemp_work_status2"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">لدي بالفعل عمل تجاري</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12"></div>


                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-label-secondary btn-prev waves-effect">
                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-primary btn-next waves-effect waves-light">
                                    <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                    <i class="ti ti-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Social Links -->
                    <div id="job_status" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0"> راس المال
                            </h6>
                            <small class="py-2">اختار راس المال</small>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <h6 class="mb-0 pt-3"> لدينا علاقات طويلة الأمد وناجحة مع عملائنا
                                        بناءً على الخبرة،
                                    </h6>
                                    <h6 class="mb-0">غالباً ما يكون الحد الأدنى المطلوب حوالي 5.000 يورو لبناء عمل
                                        من البداية حتى النهاية.</h6>
                                    <h6 class="mb-0">كم رأسمال استثماري متاح لديك حالياً؟</h6>
                                    <label class="form-label pb-3" for="twitter-vertical-modern">ماهو الوصف الافضل
                                        نستطيع أيضًا أن نجد حلاً إذا لم يكن هذا المبلغ متاحًا بالكامل بعد. </label>
                                    <div class="d-sm-flex flex-column gap-2">
                                        <div class="col-md ">
                                            <div class="form-check custom-option custom-option-basic ">
                                                <label class="form-check-label custom-option-content"
                                                       for="customRadioTemp_budget1">
                                                    <input
                                                        name="customRadioTemp_budget"
                                                        class="form-check-input"
                                                        type="radio"
                                                        value=""
                                                        id="customRadioTemp_budget1"
                                                        checked
                                                    />
                                                    <span class="custom-option-header">
                                <span class=" mb-0">اقل من 1000 يورو</span>
                              </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check custom-option custom-option-basic ">
                                                <label class="form-check-label custom-option-content"
                                                       for="customRadioTemp_budget2">
                                                    <input
                                                        name="customRadioTemp_budget"
                                                        class="form-check-input"
                                                        type="radio"
                                                        value=""
                                                        id="customRadioTemp_budget2"
                                                    />
                                                    <span class="custom-option-header">
                                <span class=" mb-0">اقل من 5000 يورو</span>
                              </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check custom-option custom-option-basic ">
                                                <label class="form-check-label custom-option-content"
                                                       for="customRadioTemp_budget3">
                                                    <input
                                                        name="customRadioTemp_budget"
                                                        class="form-check-input"
                                                        type="radio"
                                                        value=""
                                                        id="customRadioTemp_budget3"
                                                    />
                                                    <span class="custom-option-header">
                                <span class=" mb-0">من 5000 يورو الى 12000 يورو</span>
                              </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check custom-option custom-option-basic ">
                                                <label class="form-check-label custom-option-content"
                                                       for="customRadioTemp_budget4">
                                                    <input
                                                        name="customRadioTemp_budget"
                                                        class="form-check-input"
                                                        type="radio"
                                                        value=""
                                                        id="customRadioTemp_budget4"
                                                    />
                                                    <span class="custom-option-header">
                                <span class=" mb-0">000 50 +   يورو </span>
                              </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12"></div>


                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev waves-effect">
                                        <i class="ti ti-arrow-left me-sm-1"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next waves-effect waves-light">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Social Links -->
                    <div id="contact_time" class="content">
                        <div class="content-header mb-3">
                            <h6 class="mb-0">وفت التواصل الافضل</h6>
                            <small>اختر وفت التواصل</small>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label class="form-label py-2" for="twitter-vertical-modern">متى يمكننا التواصل معك
                                    هاتفيًا بشكل أفضل؟</label>
                                <div class="d-sm-flex flex-column gap-2">
                                    <div class="col-md ">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_contact_time1">
                                                <input
                                                    name="customRadioTemp_contact_time"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioTemp_contact_time1"
                                                    checked
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">من الساعة 9 صباحا حتى الساعة 12 ضهرا </span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_contact_time2">
                                                <input
                                                    name="customRadioTemp_contact_time"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioTemp_contact_time2"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">من الساعة 12 ضهرا حتى الساعة 3 عصرا </span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_contact_time3">
                                                <input
                                                    name="customRadioTemp_contact_time"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioTemp_contact_time3"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">من الساعة 3 عصرا حتى الساعة 5 مساءا </span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_contact_time4">
                                                <input
                                                    name="customRadioTemp_contact_time"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value=""
                                                    id="customRadioTemp_contact_time4"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">بدءا من الساعة 5 مساءا</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12"></div>


                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-label-secondary btn-prev waves-effect">
                                    <i class="ti ti-arrow-left me-sm-1"></i>
                                    <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                </button>
                                <button class="btn btn-success btn-submit waves-effect waves-light" type="submit"
                                        onclick="toggleFormSubmissionPrevention()">Submit
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
@section('script_main')
    <script src="{{asset('backend_theme/assets/js/main.js')}}"></script>
@endsection
@section('script_vendor')

    <script src="{{asset('backend_theme/assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
    <script src="{{asset('backend_theme/assets/vendor/libs/select2/select2.js')}}"></script>
    <script src="{{asset('backend_theme/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script
        src="{{asset('backend_theme/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script
        src="{{asset('backend_theme/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
    <script src="{{asset('backend_theme/assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
    <script src="{{asset('backend_theme/assets/vendor/libs/cleavejs/cleave.js')}}"></script>
    <script src="{{asset('backend_theme/assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
@endsection
@section('script_page')
    <script src="{{asset('backend_theme/assets/js/form-wizard-numbered.js')}}"></script>
    <script src="{{asset('backend_theme/assets/js/form-wizard-validation.js')}}"></script>
    <script src="{{asset('backend_theme/assets/js/form-wizard-icons.js')}}"></script>
    <script src="{{asset('backend_theme/assets/js/forms-extras.js')}}"></script>

@endsection
