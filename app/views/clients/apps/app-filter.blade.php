@section('breadcrumbs')
    <ul>
        <li><a href="">Job Posts</a></li>
        <li class="active">Create Jobs</li>
    </ul>
@stop
<h3 class="title">App Filter Settings</h3>
<section id="hiring-criteria">
    <h3 class="title">Hiring Criteria</h3>

    <select name="license" class="select">
        <option value="">Beginner</option>
        <option value="">Pro</option>
    </select>
    <input name="minimun-age" type="text" placeholder="Minimun Age" class="full-width">
    <input name="minimun-exp" type="text" placeholder="Minimum experience in Months" class="full-width">

    <h4 class="title">Trailer/Freight Type:</h4>
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

    <h4 class="title">Driver Type:</h4>
    <label class="checkbox" for="checkbox1">
        <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
        Company Driver
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

    Will you hire drivers w/Felony conviction? 
    <div class="switch switch-square"
      data-on-label="<i class='fui-check'></i>"
      data-off-label="<i class='fui-cross'></i>">
      <input type="checkbox" />
    </div>
</section>