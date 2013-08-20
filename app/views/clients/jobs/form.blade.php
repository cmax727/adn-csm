@section('scripts')
	{{ HTML::script('js/lib/raphael.js') }}
	{{ HTML::script('js/lib/color.jquery.js') }}
	{{ HTML::script('js/lib/jquery.usmap.js') }}
	{{ HTML::script('js/lib/require.js', ['data-main'=>URL::asset('js/map.js')]) }}
@stop
<section id="job-info">
	<h3 class="title">Required Info</h3>

	<input type="text" name="job-title" placeholder="Job Title" class="full-width" />
	<input type="text" name="company-website" placeholder="Company Website (http//websitename.com)" class="full-width" />
	<div class="row">
		<div class="span6">
			<textarea name="job-description" rows="5" placeholder="Job Description" class="full-width"></textarea>
		</div>
		<div class="span3">
			<label class="checkbox" for="checkbox1">
                <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                Company Drivers
            </label>
            <label class="checkbox" for="checkbox1">
                <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                Owner Operators
            </label>
            <label class="checkbox" for="checkbox1">
                <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                Students
            </label>
            <label class="checkbox" for="checkbox1">
                <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                Teams
            </label>
		</div>
	</div>
</section>
<section id="job-location">
	<h3 class="title">Job Location / Hiring Area</h3>
	<h4 class="title">Target States:</h4>
	<div id="map" style="width: 700px; height: 500px;"></div>


	<h4 class="title">Target Cities:</h4>
	<div class="control-group">
	<div class="input-append">
	  <input class="span8" type="text" placeholder="Search">
	  <button class="btn" type="button"><span class="fui-search"></span></button>
	</div>
	</div>

	<div class="alert custom-tags-container">
		<h5 class="title">Selected Target Areas:</h5>
		<div class="custom-tags">
			<span class="label label-large label-primary">
				Tuscaloosa, AL<a class="fui-cross"></a>
			</span>
			<span class="label label-large label-primary">
				Birmingham, AL<a class="fui-cross"></a>
			</span>
		</div>
	</div>
</section>
<section id="job-compensations">
	<h3 class="title">Compensation</h3>
	<div class="row-fluid">
		<div class="span6">
			<input class="input-block-level" type="text" name="salary" placeholder="Salary" />
		</div>
		<div class="span6">
			<p>Salary is the base compensation that is not considered part of the Incentives or Benefits.</p>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<input class="input-block-level" type="text" name="incentive" placeholder="Incentive" />
		</div>
		<div class="span6">
			<p>Incentives includes bonuses and other types of compensation that are not considered part of the Salary or Benefits.</p>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add another incentive</button>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<input class="input-block-level" type="text" name="benefits" placeholder="Benefits" />
		</div>
		<div class="span6">
			<p>Benefits include insurance and other compensation that aren't of Salary of Incentives.</p>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add another incentive</button>
		</div>
	</div>
</section>

<section id="hiring-criteria">
	<h3 class="title">Hiring Criteria</h3>

</section>

<section id="hiring-criteria">
	<h3 class="title">Additional Job Details</h3>
	<div class="row-fluid">
		<div class="span6">
			<input class="input-block-level" type="text" name="employment" placeholder="Employment Type" />
			<input class="input-block-level" type="text" name="education" placeholder="Education Requirement" />
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add another requirement</button>
		</div>
		<div class="span6">
			<input class="input-block-level" type="text" name="work-schedule" placeholder="Work Schedule / Hours" />
			<input class="input-block-level" type="text" name="qualifications" placeholder="Qualifications" />
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add another qualification</button>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<input class="input-block-level" type="text" name="experience" placeholder="Experience Required" />
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add exp requirement</button>
		</div>
		<div class="span6">
			<input class="input-block-level" type="text" name="responsibilities" placeholder="Responsibilities" />
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add exp requirement</button>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<input class="input-block-level" type="text" name="experience" placeholder="Skills Required" />
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add skills requirement</button>
		</div>
	</div>
</section>