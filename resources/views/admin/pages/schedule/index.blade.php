@extends(config('constants.adminLayouts').'.default')

@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Schedule Listing</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Schedule</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="table-scrollable">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Project</th>
                            <th scope="col">Vertical</th>
                            <th scope="col">Company</th>
                            <th scope="col">Created On</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Neelkanth Business Park</td>
                            <td>House Keeping,Security</td>
                            <td>  Neelkanth Group Pvt. Ltd. </td>

                            <td> 14th Jan 2017 </td>
                            <td class="text-center">  <a href="{{ route('admin.schedule.view') }}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Schedule"><i class='icon-magnifier'></i></a> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Neelkanth Kingdom</td>
                            <td>House Keeping</td>
                            <td>  Neelkanth Group Pvt. Ltd. </td>

                            <td> 14th Jan 2017 </td>
                            <td class="text-center"> <a href="{{ route('admin.schedule.view') }}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Schedule">
                                    <i class='icon-magnifier'></i></a>
                            </td>       
                        </tr>      


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection