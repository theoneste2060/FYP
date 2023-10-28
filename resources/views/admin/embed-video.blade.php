@extends('admin.base')

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Farmer Connect</a></li>
                                <li class="breadcrumb-item active">Shared Experience</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Shared Experience</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                @foreach ($videos as $video)
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">{{ $video->title }}</h4>
                            <p class="text-muted">{{ $video->title }}</p>
                            <div class="tab-content">
                                <div class="tab-pane show active">
                                    <div class="ratio ratio-21x9">
                                        <video controls>
                                            <source src="{{ asset('storage/' . $video->file_path) }}">
                                        </video>
                                    </div>
                                </div> <!-- end preview-->
                            </div> <!-- end tab-content-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->
                </div>
                @endforeach
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
</div>
</div>
<!-- END wrapper -->
@endsection
