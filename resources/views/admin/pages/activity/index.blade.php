@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Activity</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="active">Activity</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="transform-buttons" class="btn-group btn-default">

                <a href="{{route('admin.activity.add/edit')}}" class="btn btn-default" id="destroy">
                    <span data-zh="">Add New Activity</span>
                </a>
            </div>
            <div class="table-scrollable">

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Vertical</th>

                            <th scope="col">Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Cleaning</td>
                              <td>Security,Food</td>
                            <td><label class='label label-danger'>N0</label></td>
                            <td class="text-center">
                                <a href="{{route("admin.activity.add/edit")}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Activity ">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Activity ">
                                    <i class='icon-magnifier'></i>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dusting</td>
                              <td>House Keeping,Food</td>
                            <td><label class='label label-success'>YES</label></td>
                            <td class="text-center">
                                <a href="{{route("admin.activity.add/edit")}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Activity ">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Activity ">
                                    <i class='icon-magnifier'></i>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Mopping</td>
                            <td>House Keeping</td>
                            <td><label class='label label-success'>YES</label></td>
                            <td class="text-center">
                                <a href="{{route("admin.activity.add/edit")}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Activity ">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Activity ">
                                    <i class='icon-magnifier'></i>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>HAVC</td>
                            <td>House Keeping,Food</td>
                            <td><label class='label label-success'>YES</label></td>
                            <td class="text-center">
                                <a href="{{route("admin.activity.add/edit")}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Activity ">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Activity ">
                                    <i class='icon-magnifier'></i>
                                </a>

                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</div>
@endsection