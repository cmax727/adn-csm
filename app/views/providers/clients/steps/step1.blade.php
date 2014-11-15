<h3 class="title">New Client</h3>
@include('providers/clients/steps')
<section id="company-info">
	<h4 class="title">Company Info</h4>

	<form class="form-horizontal">
		<div class="control-group">
			<label class="control-label">Company Name</label>
			<div class="controls">
			<input type="text" name="" placeholder="Jimbo Truckin" class="span4">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Company Address</label>
			<div class="controls">
			<input type="text" name="" placeholder="Address1" class="span4">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
			<input type="text" name="" placeholder="Address2" class="span4">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
			<input type="text" name="" placeholder="City" class="span4">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Company Address</label>
			<div class="controls">
				<div class="row">
					<select name="estate" class="span2">
						<option name="">Select Estate</option>
						<option name="">Alabama</option>
					</select>
					<div class="span2">
			        <input type="text" name="" placeholder="Zip" class="span2">
			    	</div>
			    </div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Company Phone</label>
			<div class="controls">
			<input type="text" name="" placeholder="1800555444">
			</div>
		</div>
	</form>
</section>


<section id="company-contacts">
    <h4 class="title">Company Contacts</h4>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Contact Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Jimbo Truck</td>
                <td>jim@trucking.com</td>
                <td>47</td>
                <td>45</td>
            </tr>
            <tr>
                <td>Jimbo Truck</td>
                <td>jim@trucking.com</td>
                <td>47</td>
                <td>45</td>
            </tr>
        </tbody>
    </table>
</section>
<a class="btn btn-primary pull-right" href="{{URL::to('provider/client/new/'.($currentStep+1))}}">Next Step<i class="fui-arrow-right"></i></a>