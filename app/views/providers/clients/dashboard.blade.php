@section('breadcrumbs')
    <ul>
        <li><a href="">Dashboard</a></li>
        <li><i class="fui-arrow-right"></i></li>
        <li><a href="">Client Manager</a></li>
        <li><i class="fui-arrow-right"></i></li>
        <li class="active">[Client Name]</li>
    </ul>
@stop
<section id="client-dash" class="clearfix">
    <h3 class="title">App Totals</h3>
    <div class="row-fluid">
        <div id="dash-stats" class="span3">
            <select name="time-frame" class="slc-time-frame">
                <option value="1">Last 24 Hours</option>
                <option value="1">Last Week</option>
                <option value="1">Last Month</option>
            </select>
            <input type="text" name="date-start" class="span2 datepicker" value="{{ date('d, M Y') }}" />
            <input type="text" name="date-end" class="span2 datepicker" value="{{ date('d, M Y') }}" />
            <a href="" class="btn btn-primary btn-small">View Apps</a>
            <a href="" class="btn btn-success btn-small">Edit App Filter</a>
        </div>
        <div class="span8">
            <div id="dashboard-chart"></div>
        </div>
    </div>
</section>

<section id="job-posts">
    <h3 class="title">Job Posts</h3>
    <div class="row-fluid">
        <div class="span3">
            <a href="" class="btn btn-primary btn-small">View All Job Posts</a>
            <a href="" class="btn btn-success btn-small">Create Job Post</a>
        </div>
        <div id="job-post-numbers" class="span8">
            <div class="span3">
                <div class="alert">
                    Nationa Job Posts
                    <span>10</span>
                </div>
            </div>
            <div class="span3">
                <div class="alert">
                    Regional Job Posts
                    <span>10</span>
                </div>
            </div>
            <div class="span3">
                <div class="alert">
                    State Job Posts
                    <span>10</span>
                </div>
            </div>
            <div class="span3">
                <div class="alert">
                    City Job Posts
                    <span>10</span>
                </div>
            </div>
        </div>
    </div>
    
</section>