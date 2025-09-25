@extends('admin.view')
@section('content')
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::زیر هدر-->
        <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::اطلاعات-->
                <div class="d-flex align-items-center flex-wrap mr-2">

                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                        داشبورد </h5>
                    <!--end::Page Title-->

                    <!--begin::اقدامات-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>


                    <a href="#" class="btn btn-light-warning font-weight-bolder btn-sm">
                        افزودن جدید
                    </a>
                    <!--end::اقدامات-->
                </div>
                <!--end::اطلاعات-->

                <!--begin::Toolbar-->
                <div class="d-flex align-items-center">
                    <!--begin::اقدامات-->
                    <a href="#" class="btn btn-clean  btn-sm font-weight-bold font-size-base mr-1">
                        امروز
                    </a>
                    <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base  mr-1">
                        ماه
                    </a>
                    <a href="#" class="btn btn-clean btn-sm font-weight-bold font-size-base mr-1">
                        سال
                    </a>
                    <!--end::اقدامات-->

                </div>
                <!--end::Toolbar-->
            </div>
        </div>
        <!--end::زیر هدر-->

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::داشبورد-->
                <!--begin::Row-->
                <div class="row">
                    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::زیر هدر-->
                        <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
                            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <!--begin::Toolbar-->
                                <div class="d-flex align-items-center">
                                    {{str($date->format('Y-m-d'))}}
                                </div>
                                <!--end::Toolbar-->
                            </div>
                        </div>
                        <!--end::زیر هدر-->
                        @if(!empty($orderInfo))
                            <!--begin::Entry-->
                            <div class='d-flex flex-column-fluid'>
                            <!--begin::Container-->
                                <div class='container'>
                                    <!--begin::Dashboard-->
                                    <div class='container'>
                                        <div style="overflow: hidden" class='card card-custom gutter-b'>
                                            <div class='card-header'>
                                                <h3 class='card-title'>جزیات سفارش</h3>
                                                <a class="mt-7" href="{{route('admin.removePriority')}}">
                                                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Code\Error-circle.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
        <path d="M12.0355339,10.6213203 L14.863961,7.79289322 C15.2544853,7.40236893 15.8876503,7.40236893 16.2781746,7.79289322 C16.6686989,8.18341751 16.6686989,8.81658249 16.2781746,9.20710678 L13.4497475,12.0355339 L16.2781746,14.863961 C16.6686989,15.2544853 16.6686989,15.8876503 16.2781746,16.2781746 C15.8876503,16.6686989 15.2544853,16.6686989 14.863961,16.2781746 L12.0355339,13.4497475 L9.20710678,16.2781746 C8.81658249,16.6686989 8.18341751,16.6686989 7.79289322,16.2781746 C7.40236893,15.8876503 7.40236893,15.2544853 7.79289322,14.863961 L10.6213203,12.0355339 L7.79289322,9.20710678 C7.40236893,8.81658249 7.40236893,8.18341751 7.79289322,7.79289322 C8.18341751,7.40236893 8.81658249,7.40236893 9.20710678,7.79289322 L12.0355339,10.6213203 Z" fill="#000000"/>
    </g>
                                                        </svg><!--end::Svg Icon-->
                                                    </span>
                                                    برداشتن از تحت اولویت
                                                </a>
                                            </div>
                                            <!--begin::Form-->
                                            <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0" style="background-image: url({{asset('assetsAdmin/media/bg/bg-1.jpg')}});">
                                                <div class="col-md-9">
                                                    <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                                                        <h1 class="display-4 text-white font-weight-boldest mb-10">خانم/آقای {{$orderInfo->user->name}}</h1>
                                                        <div class="d-flex flex-column align-items-md-end px-0">
                                                            <!--begin::Logo-->
                                                            <a href="#" class="mb-5">
                                                                <img src="{{asset('assets/media/logos/logo-light.png')}}" alt="">
                                                            </a>
                                                            <!--end::Logo-->
                                                            <span class="text-white d-flex flex-column align-items-md-end opacity-70">
                                            {!! characterّIndexing($orderInfo->description, 8) !!}
                                        </span>
                                                        </div>
                                                    </div>
                                                    <div class="border-bottom w-100 opacity-20"></div>
                                                    <div class="d-flex justify-content-between text-white pt-6">
                                                        <div class="d-flex flex-column flex-root">
                                                            <span class="font-weight-bolde mb-2r">تاریخ ثبت</span>
                                                            <span class="opacity-70">{{$orderInfo->created_at}}</span>
                                                        </div>
                                                        <div class="d-flex flex-column flex-root">
                                                            <span class="font-weight-bolder mb-2">کد رهگیری</span>
                                                            <span class="opacity-70">{{$orderInfo->tracking_code}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex justify-content-between text-white pt-6">
                                                        <div class="d-flex flex-column flex-root">
                                                            <span class="font-weight-bolder mb-2">آدرس</span>
                                                            <span class="opacity-70">{{$orderInfo->user->address}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Form-->
                                        </div>
                                    </div>
                                    <!--end::Dashboard-->
                                </div>
                            <!--end::Container-->
                            </div>
                            <!--end::Entry-->
                        @endif
                    </div>
                </div>
                <!--end::Row-->
                <!--end::داشبورد-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
