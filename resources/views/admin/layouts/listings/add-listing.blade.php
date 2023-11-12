@extends('admin.base')

@section('content')

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div>
    {{--   testing vue js component --}}
<!--        <FileUploader url="{{route('listingupload')}}" />-->
{{--        <Gallery @selected_images="applySelected" gallery_url="{{route('get_upload')}}" uploader_url="{{route('listingupload')}}" />--}}
    </div>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4  class="page-title">
                    Add Listing
                </h4>
            </div>
            <div class="col-7 align-self-center">
                <div class="d-flex align-items-center justify-content-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add Listing</li>
                        </ol>

                    </nav>
                </div>
            </div>
        </div>

{{--        <div class="row">--}}


{{--        <div class="container mt-4" style="text-align: right" >--}}
{{--            <div class="dropdown">--}}
{{--                <button class="btn btn-light dropdown-toggle" type="button" id="listingSelector" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                    Select Listing Type--}}
{{--                </button>--}}
{{--                <div class="dropdown-menu" aria-labelledby="listingSelector">--}}
{{--                    <a class="dropdown-item" href="#">Land Listing</a>--}}
{{--                    <a class="dropdown-item" href="#">House Listing</a>--}}
{{--                    <a class="dropdown-item" href="#">Apartment Listing</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="card card-body">
                <listing_form form_url="{{ route('listingrecord') }}" p_realtors="{{json_encode($realtors)}}" gallery_url="{{route('get_upload')}}" uploader_url="{{route('listingupload')}}" listingupload=""/>
            </div>
        </div>
    </div>
@endsection

+
+9+
