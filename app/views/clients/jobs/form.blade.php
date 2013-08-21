@section('scripts')
	{{ HTML::script('js/lib/raphael.js') }}
	{{ HTML::script('js/lib/color.jquery.js') }}
	{{ HTML::script('js/lib/jquery.usmap.js') }}
	<? /*{{ HTML::script('js/lib/require.js', ['data-main'=>URL::asset('js/map.js')]) }} */ ?>
@stop
<section id="job-info">
	<h3 class="title">Required Info</h3>

	<input type="text" name="job-title" placeholder="Job Title" class="full-width" />
	<input type="text" name="company-website" placeholder="Company Website (http//websitename.com)" class="full-width" />
	<div class="row">
		<div class="span6">
			<textarea name="job-description" rows="6" placeholder="Job Description" class="full-width"></textarea>
		</div>
		<div class="span3">
			<h4>Driver Type:<span class="required">*</span></h4>
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
	<div class="subsection row">
		<div class="span2">
			<label class="checkbox" for="checkbox1">
                <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                <h4>National</h4>
				<p>Includes all Regions, states and Cities</p>
            </label>
		</div>
		<div class="span6 offset1">
			<h4>Target Regions</h4>
			<div class="row">
				<div class="span2">
					<label class="checkbox" for="checkbox1">
		                <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
		                North East
		            </label>
		            <label class="checkbox" for="checkbox1">
		                <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
		                South East
		            </label>
				</div>
				<div class="span2">
					<label class="checkbox" for="checkbox1">
		                <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
		                Mid West
		            </label>
		            <label class="checkbox" for="checkbox1">
		                <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
		                South West
		            </label>
				</div>
				<div class="span2">
					<label class="checkbox" for="checkbox1">
		                <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
		                West
		            </label>
				</div>
			</div>
		</div>
	</div>

	<div class="subsection">
		<h4 class="title">Target States:</h4>
		<div id="map" style="width: 700px; height: 500px;"></div>


		<h4 class="title">Target Cities:</h4>
		<div class="control-group">
		<div class="input-append">
		  <input class="span8" type="text" placeholder="Searchfor the cities within the areas you've selected above...">
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
	</div>

</section>

<section id="job-compensations">
	<div class="subsection">
		<h3 class="title">Compensation</h3>
		<div class="row-fluid">
			<div class="span6">
				<input type="text" name="salary" placeholder="Salary" />
			</div>
			<div class="span6">
				<p>Salary is the base compensation that is not considered part of the Incentives or Benefits.</p>
			</div>
		</div>
		<div class="row-fluid">
			<div class="span6">
				<input type="text" name="incentive" placeholder="Incentive" />
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
	</div>
	<div class="subsection">
		<div class="row-fluid">
			<div class="span6">
				<input type="text" name="benefits" placeholder="Benefits" />
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
	</div>
</section>

<section id="hiring-criteria">
    <h3 class="title">Hiring Criteria</h3>

    <div class="row-fluid subsection">
    	<div class="span6">
	        <select name="license" class="select">
	            <option value="">Beginner</option>
	            <option value="">Pro</option>
	        </select>
	        <input name="minimun-age" type="text" placeholder="Minimun Age" class="full-width">
	        <input name="minimun-exp" type="text" placeholder="Minimum experience in Months" class="full-width">
    	</div>
    	<div class="span6">
	        <h4 class="title">Endorsement(s) Required:</h4>

	        <label class="checkbox" for="checkbox1">
	            <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
	            HAZMAT
	        </label>
	        <label class="checkbox" for="checkbox1">
	            <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
	            Passenger
	        </label>
	        <label class="checkbox" for="checkbox1">
	            <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
	            Multi
	        </label>
	        <label class="checkbox" for="checkbox1">
	            <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
	            Tanker
	        </label>
	    </div>
    	
    </div>
    <div class="row-fluid subsection">
    	<div class="span6">
	        <h4 class="title">Trailer/Freight Type:</h4>
	        <div class="row-fluid">
	            <div class="span4 offset1">
	                <label class="checkbox" for="checkbox1">
	                    <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
	                    Van
	                </label>
	                <label class="checkbox" for="checkbox1">
	                    <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
	                    Feefer
	                </label>
	                <label class="checkbox" for="checkbox1">
	                    <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
	                    Flatbelt
	                </label>
	            </div>
	            <div class="span4">
	                <label class="checkbox" for="checkbox1">
	                    <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
	                    Tanker
	                </label>
	                <label class="checkbox" for="checkbox1">
	                    <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
	                    Auto
	                </label>
	                <label class="checkbox" for="checkbox1">
	                    <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
	                    HHG
	                </label>
	            </div>
	        </div>
		</div>
		<div class="span6">
			<div class="row-fluid">
		        <div class="span9">
		            <h4>Will you hire drivers w/Felony conviction?</span>
		        </div>
		        <div class="span2">
		            <div class="switch" data-on-label="YES" data-off-label="NO">
		              <input type="checkbox" checked data-toggle="switch" />
		            </div>
		        </div>
		    </div>
		    <div class="row-fluid">
		        <div class="span9">
		            <h4>Would you lie to target veterans with this Job Post?</span>
		        </div>
		        <div class="span2">
		            <div class="switch" data-on-label="YES" data-off-label="NO">
		              <input type="checkbox" checked data-toggle="switch" />
		            </div>
		        </div>
		    </div>
		    <div class="row-fluid">
		        <div class="span9">
		            <h4>Will you hire drivers w/DUI conviction?</h4>
		        </div>
		        <div class="span2">
		            <div class="switch" data-on-label="YES" data-off-label="NO">
		              <input type="checkbox" checked data-toggle="switch" />
		            </div>
		        </div>
		    </div>
		</div>
    </div>


</section>

<section id="aditional-details">
	<h3 class="title">Additional Job Details</h3>
	<div class="row-fluid subsection">
		<div class="span6">
			<input type="text" name="employment" placeholder="Employment Type" />
			<input type="text" name="education" placeholder="Education Requirement" />
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add another requirement</button>
		</div>
		<div class="span6">
			<input type="text" name="work-schedule" placeholder="Work Schedule / Hours" />
			<input type="text" name="qualifications" placeholder="Qualifications" />
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add another qualification</button>
		</div>
	</div>
	<div class="row-fluid subsection">
		<div class="span6">
			<input type="text" name="experience" placeholder="Experience Required" />
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add exp requirement</button>
		</div>
		<div class="span6">
			<input type="text" name="responsibilities" placeholder="Responsibilities" />
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add exp requirement</button>
		</div>
	</div>
	<div class="row-fluid subsection">
		<div class="span6">
			<input type="text" name="experience" placeholder="Skills Required" />
			<button class="btn btn-primary" type="submit"><i class="fui-plus"></i>Add skills requirement</button>
		</div>
	</div>
</section>