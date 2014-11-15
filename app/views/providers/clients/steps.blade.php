@section('breadcrumbs')
    <ul>
        <li><a href="">Dashboard</a></li>
        <li><i class="fui-arrow-right"></i></li>
        <li><a href="">Client Manager</a></li>
        <li><i class="fui-arrow-right"></i></li>
        <li class="active">New Client</li>
    </ul>
@stop
<div class="steps">
<div class="step-labels clearfix">
	<ul>
		<li class="ui-slider-value"><a>Client Info</a></li>
		<li class="ui-slider-value"><a>Applications</a></li>
		<li class="ui-slider-value"><a>Job Postings</a></li>
		<li class="ui-slider-value"><a>Videos</a></li>
		<li class="ui-slider-value"><a>Social</a></li>
		<li class="ui-slider-value"><a>Overview</a></li>
		<li class="ui-slider-value"><a>Confirmation</a></li>
	</ul>
</div>
<div id="slider" class="ui-slider" data-steps="7" data-current="{{$currentStep}}">
</div>
</div>