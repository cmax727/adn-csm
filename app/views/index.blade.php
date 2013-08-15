<div id="stats" class="clearfix">
    <h3 class="title">App Totals</h3>
    <select name="time-frame" id="slc-time-frame">
        <option value="1">Last 24 Hours</option>
        <option value="1">Last Week</option>
        <option value="1">Last Month</option>
    </select>
    <div id="date-inputs-container">
        <input type="text" name="date-start" class="span2 datepicker" value="{{ date('d, M Y') }}">
        <input type="text" name="date-end" class="span2 datepicker" value="{{ date('d, M Y') }}">
    </div>
</div>
<div id="chart">
</div>
<div id="client-list">
    <h3 class="title">Client List</h3>
    <div class="actions clearfix">
        <label class="checkbox pull-left" for="checkbox1">
            <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
            Hide Inactive
        </label>
        <a class="btn btn-success pull-right"><i class="fui-plus"></i>New Client</a>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Client Name</th>
                <th>Email</th>
                <th>Apps Today</th>
                <th>Jobs</th>
                <th>Active</th>
                <th>Select</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Jimbo Truck</td>
                <td>jim@trucking.com</td>
                <td>47</td>
                <td>45</td>
                <td>
                    <label class="checkbox" for="checkbox1">
                        <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                    </label>
                </td>
                <td>
                    <label class="checkbox" for="checkbox1">
                        <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                    </label>
                </td>
            </tr>
            <tr>
                <td>Jimbo Truck</td>
                <td>jim@trucking.com</td>
                <td>47</td>
                <td>45</td>
                <td>
                    <label class="checkbox" for="checkbox1">
                        <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                    </label>
                </td>
                <td>
                    <label class="checkbox" for="checkbox1">
                        <input type="checkbox" value="" id="checkbox1" data-toggle="checkbox">
                    </label>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="btn-group pull-right">
            <i class="dropdown-arrow dropdown-arrow-inverse"></i>
            <button class="btn btn-primary">Choose Action</button>
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-inverse">
              <li><a href="#fakelink">Sub Menu Element</a></li>
              <li><a href="#fakelink">Sub Menu Element</a></li>
              <li><a href="#fakelink">Sub Menu Element</a></li>
            </ul>
          </div>
    </div>
</div>