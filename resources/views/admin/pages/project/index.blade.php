@extends(config('constants.adminLayouts').'.default')

@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Project Listing</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Project</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="table-scrollable">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Number Of Zone</th>
                            <th scope="col">Schedule Planning Done</th>
                            <th scope="col">Location</th>
                            <th scope="col">Verticals</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td> Neelkanth Business Park </td>
                            <td> Neelkanth Group</td>
                            <td> 3</td>
                            <td> Yes</td>
                            <td> Mumbai </td>
                            <td> Housekeeping </td>
                            <td class="text-center">
                                <a href="{{route('admin.project.edit')}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Project"><i class='icon-pencil'></i></a> 
                                <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Add Schedule">
                                    <i class='icon-plus'></i>
                                </a> 
                                <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Project Details">
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