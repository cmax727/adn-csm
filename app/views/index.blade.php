<div id="stats">
    <h3>App Totals</h3>
    <select>
        <option value="1">Last 24 Hours</option>
        <option value="1">Last Week</option>
        <option value="1">Last Month</option>
    </select>
    <input type="text" class="span2 datepicker" value="{{ date('d, m Y') }}">
    <input type="text" class="span2 datepicker" value="{{ date('d, m Y') }}">
</div>
<h3>Client List</h3>
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
            <td><input type="checkbox" value="" id="checkbox1" data-toggle="checkbox"></td>
            <td><input type="checkbox" value="" id="checkbox1" data-toggle="checkbox"></td>
        </tr>
        <tr>
            <td>Jimbo Truck</td>
            <td>jim@trucking.com</td>
            <td>47</td>
            <td>45</td>
            <td><input type="checkbox" value="" id="checkbox1" data-toggle="checkbox"></td>
            <td><input type="checkbox" value="" id="checkbox1" data-toggle="checkbox"></td>
        </tr>
    </tbody>
</table>