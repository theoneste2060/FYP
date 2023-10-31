@extends('admin.base')

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
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
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Add a search input field -->
    <div class="form-group">
        <input type="text" class="form-control" id="search" placeholder="Search Videos">
    </div>

    <div class="row" id="video-list">
        @foreach ($videos as $video)
        <div class="col-lg-4 col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">{{ $video->title }}</h4>
                    <p class="text-muted">{{ $video->description }}</p>
                    <div class="tab-content">
                        <div class="tab-pane show active">
                            <div class="ratio ratio-16x9">
                                <video controls>
                                    <source src="{{ asset('storage/' . $video->file_path) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Include jQuery and your search functionality -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $("#search").on("keyup", function() {
        var searchTerm = $(this).val().toLowerCase();
        $(".card").each(function() {
            var title = $(this).find(".header-title").text().toLowerCase();
            var description = $(this).find(".text-muted").text().toLowerCase();
            if (title.includes(searchTerm) || description.includes(searchTerm)) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
});
</script>
            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
</div>
</div>
<!-- END wrapper -->
@endsection
