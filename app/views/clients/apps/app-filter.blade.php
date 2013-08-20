@section('breadcrumbs')
    <ul>
        <li><a href="">Job Posts</a></li>
        <li><i class="fui-arrow-right"></i></li>
        <li class="active">App Filter</li>
    </ul>
@stop
<h2 class="title">App Filter Settings</h2>
<section id="hiring-criteria">
    <h3 class="title">Hiring Criteria</h3>

    <div class="subsection">
        <select name="license" class="select">
            <option value="">Beginner</option>
            <option value="">Pro</option>
        </select>
        <input name="minimun-age" type="text" placeholder="Minimun Age" class="full-width">
        <input name="minimun-exp" type="text" placeholder="Minimum experience in Months" class="full-width">
    </div>

    <div class="subsection">
        <h4 class="title">Trailer/Freight Type:</h4>
        <div class="row">
            <div class="span2">
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
            <div class="span2">
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
    
    <div class="subsection">
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

    <div class="subsection">
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
    </div>

    <div class="row">
        <div class="span5">
            <h4>Will you hire drivers w/Felony conviction?</span>
        </div>
        <div class="span2">
            <div class="switch" data-on-label="YES" data-off-label="NO">
              <input type="checkbox" checked data-toggle="switch" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="span5">
            <h4>Will you hire drivers w/DUI conviction?</h4>
        </div>
        <div class="span2">
            <div class="switch" data-on-label="YES" data-off-label="NO">
              <input type="checkbox" checked data-toggle="switch" />
            </div>
        </div>
    </div>
</section>