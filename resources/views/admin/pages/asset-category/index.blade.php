@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Asset</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="active">Asset</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="transform-buttons" class="btn-group btn-default">

                <a href="{{route('admin.asset.category.add/edit')}}" class="btn btn-default" id="destroy">
                    <span data-zh="">Add New Asset</span>
                </a>
            </div>
            <div class="table-scrollable">

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>

                            <th scope="col">Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Electrical</td>
                            <td><label class='label label-danger'>N0</label></td>
                            <td class="text-center">
                                <a href="{{route("admin.asset.category.add/edit")}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Asset Category">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Asset Category">
                                    <i class='icon-magnifier'></i>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Air Conditioner</td>
                            <td><label class='label label-success'>YES</label></td>
                            <td class="text-center">
                                <a href="{{route("admin.asset.category.add/edit")}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Asset Category">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Asset Category">
                                    <i class='icon-magnifier'></i>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>PHE</td>
                            <td><label class='label label-success'>YES</label></td>
                            <td class="text-center">
                                <a href="{{route("admin.asset.category.add/edit")}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Asset Category">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Asset Category">
                                    <i class='icon-magnifier'></i>
                                </a>

                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>HAVC</td>
                            <td><label class='label label-success'>YES</label></td>
                            <td class="text-center">
                                <a href="{{route("admin.asset.category.add/edit")}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Asset Category">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Asset Category">
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