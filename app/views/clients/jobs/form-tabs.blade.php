@section('breadcrumbs')
    <ul>
        <li><a href="">Job Posts</a></li>
        <li><i class="fui-arrow-right"></i></li>
        <li class="active">Create Jobs</li>
    </ul>
@stop
<div id="head-tabs">
	<ul class="nav custom-nav-tabs row-fluid">
		<li class="active">
			<a href="#">Create Job Posts</a>
		</li>

		<li>
			<a href="#">Upload Multiple Jobs</a>
		</li>
	</ul>
</div>

<div class="active custom-tab-content">
	@include('clients.jobs.form')
<div>
<div class="custom-tab-content">
	@include('clients.jobs.form-multiple')
<div>