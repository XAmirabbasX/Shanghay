@extends('admin.view')
@section('content')
    <div class="row justify-content-center bgi-size-cover bgi-no-repeat py-8 px-8 py-md-27 px-md-0" style="background-image: url(assetsAdmin/media/bg/bg-6.jpg);">
        <div class="col-md-9">
            <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">
                <h1 class="display-4 text-white font-weight-boldest mb-10">INVOICE</h1>
                <div class="d-flex flex-column align-items-md-end px-0">
                    <!--begin::Logo-->
                    <a href="#" class="mb-5">
                        <img src="{{asset('assets/media/logos/logo-light.png')}}" alt="">
                    </a>
                    <!--end::Logo-->
                    <span class="text-white d-flex flex-column align-items-md-end opacity-70">
															<span>Cecilia Chapman, 711-2880 Nulla St, Mankato</span>
															<span>Mississippi 96522</span>
														</span>
                </div>
            </div>
            <div class="border-bottom w-100 opacity-20"></div>
            <div class="d-flex justify-content-between text-white pt-6">
                <div class="d-flex flex-column flex-root">
                    <span class="font-weight-bolde mb-2r">DATA</span>
                    <span class="opacity-70">Dec 12, 2017</span>
                </div>
                <div class="d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">INVOICE NO.</span>
                    <span class="opacity-70">GS 000014</span>
                </div>
                <div class="d-flex flex-column flex-root">
                    <span class="font-weight-bolder mb-2">INVOICE TO.</span>
                    <span class="opacity-70">Iris Watson, P.O. Box 283 8562 Fusce RD.
														<br>Fredrick Nebraska 20620</span>
                </div>
            </div>
        </div>
    </div>
@endsection
