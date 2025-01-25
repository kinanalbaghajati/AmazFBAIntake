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
        #formValidationLastName {
            padding: 8px 20px !important;
        }

        .hide {
            display: none;
        }


        @media (max-width: 768px) {
            .form-password-toggle {
                padding: 12% 0px;
            }

            #formValidationLastName {
                padding: 12px 80px !important;
            }


        }
    </style>
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y pt-5">

        <div class="col-12 mb-4">
            <h4 class="text-light fw-semibold"> لوحة ادخال البيانات</h4>
            <div id="wizard-validation" class="bs-stepper mt-2 linear">
                <div class="bs-stepper-header">
                    <div class="step active" data-target="#account-details-validation">
                        <button type="button" class="step-trigger" aria-selected="true">
                            <span class="bs-stepper-circle">1</span>
                            <span class="bs-stepper-label mt-1">
                            <span class="bs-stepper-title">مغلومات شخصية</span>
                            <span class="bs-stepper-subtitle">ادخل مغلومات شخصية</span>
                          </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#personal-info-validation">
                        <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                            <span class="bs-stepper-circle">2</span>
                            <span class="bs-stepper-label">
                            <span class="bs-stepper-title">مغلومات التواصل</span>
                            <span class="bs-stepper-subtitle">ادخل مغلومات التواصل</span>
                          </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#social-links-validation">
                        <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                            <span class="bs-stepper-circle">3</span>
                            <span class="bs-stepper-label">
                            <span class="bs-stepper-title">الوضع المهني</span>
                            <span class="bs-stepper-subtitle">الوضع المهني ادخل</span>
                          </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#social-links-validation1">
                        <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                            <span class="bs-stepper-circle">4</span>
                            <span class="bs-stepper-label">
                            <span class="bs-stepper-title">الحالة المهنية</span>
                            <span class="bs-stepper-subtitle">ادخل الحالة المهنية</span>
                          </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#social-links-validation2">
                        <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                            <span class="bs-stepper-circle">5</span>
                            <span class="bs-stepper-label">
                            <span class="bs-stepper-title">راس المال</span>
                            <span class="bs-stepper-subtitle">راس المال ادخل</span>
                          </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#social-links-validation3">
                        <button type="button" class="step-trigger" aria-selected="false" disabled="disabled">
                            <span class="bs-stepper-circle">6</span>
                            <span class="bs-stepper-label">
                            <span class="bs-stepper-title">وقت التواصل</span>
                            <span class="bs-stepper-subtitle"> ادخل وقت التواصل</span>
                          </span>
                        </button>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <form id="wizard-validation-form" name="wizard-validation-form" onsubmit="return false"
                          method="post" action="{{route('intake.insert')}}">
                        @csrf
                        <!-- Account Details -->
                        <div id="account-details-validation"
                             class="content active dstepper-block fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="content-header mb-3">
                                <h6 class="mb-0">المعلومات الشخصية</h6>
                                <small>اضف المعلومات الشخصية.</small>
                            </div>
                            <div class="row g-3">


                                <div class="col-sm-6 fv-plugins-icon-container">
                                    <label class="form-label py-2" style="font-size: 16px!important;"
                                           for="formValidationUsername">ماهو الاسم الاول
                                        ؟ </label>
                                    <input type="text" name="formValidationUsername" id="formValidationUsername" value="{{ old('formValidationUsername') }}"
                                           class="form-control" placeholder="johndoe">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <div class="col-sm-6 fv-plugins-icon-container">
                                    <label class="form-label py-2" style="font-size: 16px!important;"
                                           for="formValidationUserFamilyName">اسم العائلة
                                        ؟ </label>
                                    <input type="text" name="formValidationUserFamilyName" id="formValidationUserFamilyName" value="{{ old('formValidationUserFamilyName') }}"
                                           class="form-control" placeholder="johndoe">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>


                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev waves-effect" disabled="">
                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">السابق</span>
                                    </button>
                                    <button class="btn btn-primary btn-next waves-effect waves-light">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">التالي</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Personal Info -->
                        <div id="personal-info-validation" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="content-header mb-3">
                                <h6 class="mb-0">مغلومات التواصل</h6>
                                <small>اضف مغلومات التواصل</small>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <label class="form-label" for="formValidationEmail">البريد الالكتروني</label>
                                    <input type="email" name="formValidationEmail" id="formValidationEmail"  value="{{ old('formValidationEmail') }}"
                                           class="form-control" placeholder="john.doe@email.com" aria-label="john.doe">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="col-sm-12 fv-plugins-icon-container fv-plugins-bootstrap5-row-valid">
                                    <div class="d-sm-flex flex-column">
                                        <label class="form-label " for="formValidationLastName">ما هو رقم هاتفك المحمول?
                                            whatsapp</label>
                                        <label class="form-label " for="formValidationLastName">(حيث يمكن الوصول إليك
                                            بنسبة
                                            100٪)</label>
                                    </div>
                                    <input type="tel" name="phone_number" id="formValidationLastName" required
                                           class="form-control phone-number-mask px-5"
                                           style="width: 100% !important;">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                    <div class="col-sm-12 py-3">
                                        <span id="valid-msg" class="hide"></span>
                                        <span id="error-msg" class="hide" role="alert"></span>
                                    </div>
                                    <input type="hidden" id="country_code" name="country_code">

                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev waves-effect">
                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">السابق</span>
                                    </button>
                                    <button class="btn btn-primary btn-next waves-effect waves-light">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">التالي</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Social Links -->
                        <div id="social-links-validation" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="content-header mb-3">
                                <h6 class="mb-0">الوضع المهني</h6>
                                <small>اختار الوضع المهني.</small>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp1">
                                                <input
                                                    name="customRadioTemp"
                                                    class="form-check-input"
                                                    type="radio"
                                                    id="customRadioTemp1"
                                                    value="موظف" {{ old('customRadioTemp') == 'موظف' ? 'checked' : '' }}
                                                    checked
                                                />
                                                <span class="custom-option-header">
                                                      <span class=" mb-0">موظف</span>
                                                         </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp2">
                                                <input
                                                    name="customRadioTemp"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="طالب"
                                                    id="customRadioTemp2"
                                                    {{ old('customRadioTemp') == 'طالب' ? 'checked' : '' }}
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">طالب</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp3">
                                                <input
                                                    name="customRadioTemp"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="عمل خاص" {{ old('customRadioTemp') == 'عمل خاص' ? 'checked' : '' }}
                                                    id="customRadioTemp3"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">عمل خاص</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp4">
                                                <input
                                                    name="customRadioTemp"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="رجل اعمال" {{ old('customRadioTemp') == 'رجل اعمال' ? 'checked' : '' }}
                                                    id="customRadioTemp4"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">رجل اعمال</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev waves-effect">
                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">السابق</span>
                                    </button>
                                    <button class="btn btn-primary btn-next waves-effect waves-light">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">التالي</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Social Links 1-->
                        <div id="social-links-validation1" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="content-header mb-3">
                                <h6 class="mb-0">الحالة المهنية؟</h6>
                                <small>اختر الحالة المهنية.</small>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_work_status1">
                                                <input
                                                    name="customRadioTemp_work_status"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="لم ابدا بعد" {{ old('customRadioTemp_work_status') == 'لم ابدا بعد' ? 'checked' : '' }}
                                                    id="customRadioTemp_work_status1"
                                                    checked
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">لم ابدا بعد</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_work_status2">
                                                <input
                                                    name="customRadioTemp_work_status"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="لدي بالفعل عمل تجاري" {{ old('customRadioTemp_work_status') == 'لدي بالفعل عمل تجاري' ? 'checked' : '' }}
                                                    id="customRadioTemp_work_status2"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">لدي بالفعل عمل تجاري</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev waves-effect">
                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">السابق</span>
                                    </button>
                                    <button class="btn btn-primary btn-next waves-effect waves-light">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">التالي</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Social Links 2-->
                        <div id="social-links-validation2" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="content-header mb-1">
                                <h6 class="mb-0">راس المال</h6>
                                <small>اختار راس المال.</small>
                            </div>
                            <h6 class="mb-0 pt-2"> لدينا علاقات طويلة الأمد وناجحة مع عملائنا
                                بناءً على الخبرة،
                            </h6>
                            <h6 class="mb-0">غالباً ما يكون الحد الأدنى المطلوب حوالي 5.000 يورو لبناء عمل
                                من البداية حتى النهاية.</h6>
                            <h6 class="mb-0">كم رأسمال استثماري متاح لديك حالياً؟</h6>
                            <label class="form-label pt-1 pb-2" for="twitter-vertical-modern">ماهو الوصف الافضل
                                نستطيع أيضًا أن نجد حلاً إذا لم يكن هذا المبلغ متاحًا بالكامل بعد. </label>
                            <div class="row g-3">
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_budget1">
                                                <input
                                                    name="customRadioTemp_budget"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="اقل من 1000 يورو" {{ old('customRadioTemp_budget') == 'اقل من 1000 يورو' ? 'checked' : '' }}
                                                    id="customRadioTemp_budget1"
                                                    checked
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">اقل من 1000 يورو</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_budget2">
                                                <input
                                                    name="customRadioTemp_budget"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="اقل من 5000 يورو" {{ old('customRadioTemp_budget') == 'اقل من 5000 يورو' ? 'checked' : '' }}
                                                    id="customRadioTemp_budget2"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">اقل من 5000 يورو</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_budget3">
                                                <input
                                                    name="customRadioTemp_budget"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="من 5000 يورو الى 12000 يورو" {{ old('customRadioTemp_budget') == 'من 5000 يورو الى 12000 يورو' ? 'checked' : '' }}
                                                    id="customRadioTemp_budget3"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">من 5000 يورو الى 12000 يورو</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_budget4">
                                                <input
                                                    name="customRadioTemp_budget"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="000 50 +   يورو" {{ old('customRadioTemp_budget') == '000 50 +   يورو' ? 'checked' : '' }}
                                                    id="customRadioTemp_budget4"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">000 50 +   يورو </span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev waves-effect">
                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">السابق</span>
                                    </button>
                                    <button class="btn btn-primary btn-next waves-effect waves-light">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">التالي</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Social Links 3-->
                        <div id="social-links-validation3" class="content fv-plugins-bootstrap5 fv-plugins-framework">
                            <div class="content-header mb-3">
                                <h6 class="mb-0"><label class="form-label py-2" for="twitter-vertical-modern">متى يمكننا
                                        التواصل معك
                                        هاتفيًا بشكل أفضل؟</label></h6>
                                <small>اختر وفت التواصل.</small>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_contact_time1">
                                                <input
                                                    name="customRadioTemp_contact_time"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="من الساعة 9 صباحا حتى الساعة 12 ضهرا" {{ old('customRadioTemp_contact_time') == 'من الساعة 9 صباحا حتى الساعة 12 ضهرا' ? 'checked' : '' }}
                                                    id="customRadioTemp_contact_time1"
                                                    checked
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">من الساعة 9 صباحا حتى الساعة 12 ضهرا </span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_contact_time2">
                                                <input
                                                    name="customRadioTemp_contact_time"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="من الساعة 12 ضهرا حتى الساعة 3 عصرا" {{ old('customRadioTemp_contact_time') == 'من الساعة 12 ضهرا حتى الساعة 3 عصرا' ? 'checked' : '' }}
                                                    id="customRadioTemp_contact_time2"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">من الساعة 12 ضهرا حتى الساعة 3 عصرا </span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_contact_time3">
                                                <input
                                                    name="customRadioTemp_contact_time"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="من الساعة 3 عصرا حتى الساعة 5 مساءا" {{ old('customRadioTemp_contact_time') == 'من الساعة 3 عصرا حتى الساعة 5 مساءا' ? 'checked' : '' }}
                                                    id="customRadioTemp_contact_time3"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">من الساعة 3 عصرا حتى الساعة 5 مساءا </span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 fv-plugins-icon-container">
                                    <div class="col-sm-6">
                                        <div class="form-check custom-option custom-option-basic ">
                                            <label class="form-check-label custom-option-content"
                                                   for="customRadioTemp_contact_time4">
                                                <input
                                                    name="customRadioTemp_contact_time"
                                                    class="form-check-input"
                                                    type="radio"
                                                    value="بدءا من الساعة 5 مساءا" {{ old('customRadioTemp_contact_time') == 'بدءا من الساعة 5 مساءا' ? 'checked' : '' }}
                                                    id="customRadioTemp_contact_time4"
                                                />
                                                <span class="custom-option-header">
                                <span class=" mb-0">بدءا من الساعة 5 مساءا</span>
                              </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev waves-effect">
                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">السابق</span>
                                    </button>
                                    <button type="submit" onclick="changeVariableValue()"
                                            class="btn btn-success btn-next btn-submit waves-effect waves-light">
                                        تاكيد
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @if($errors->has('phone_number'))
            <div class="alert alert-danger" role="alert">{{ $errors->first('phone_number') }}</div>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.1/build/js/intlTelInput.min.js"></script>

    <script>

        const input = document.querySelector("#formValidationLastName");


        const iti = window.intlTelInput(input, {
            initialCountry: "us",
            separateDialCode: true,
            loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.2.1/build/js/utils.js"),

        });


        const button = document.querySelector("#btn");
        const errorMsg = document.querySelector("#error-msg");
        const validMsg = document.querySelector("#valid-msg");

        const errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

        const reset = () => {
            input.classList.remove("error");
            errorMsg.innerHTML = "";
            errorMsg.classList.add("hide");
            validMsg.classList.add("hide");
        };

        const showError = (msg) => {
            input.classList.add("error");
            errorMsg.classList.add("alert");
            errorMsg.classList.add("alert-danger");
            errorMsg.innerHTML = msg;
            errorMsg.classList.remove("hide");

        };

        var country = document.getElementById('country_code');
        input.addEventListener('keyup', () => {
            reset();
            if (!input.value.trim()) {
                showError("Required");
            } else if (iti.isValidNumber()) {
                validMsg.classList.remove("hide");
                validMsg.classList.add("alert");
                validMsg.classList.add("alert-success");
                validMsg.innerHTML = 'Valid';
                 var code = iti.getSelectedCountryData();
               country.value =  code.dialCode ;
            } else {
                const errorCode = iti.getValidationError();
                const msg = errorMap[errorCode] || "Invalid number";
                showError(msg);
            }

        });

    </script>


    <script>
        let isConditionMet = false;

        function validateForm() {
            if (isConditionMet) {
                alert("Form submission prevented because the condition is true.");
                return false;
            } else {
                return true;
            }
        }

        function changeVariableValue() {
            isConditionMet = true; // Change the variable value
            document.getElementById('wizard-validation-form').submit(); // Submit the form
        }
    </script>

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

