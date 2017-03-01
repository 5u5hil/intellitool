@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Role Listing</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Role</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="table-scrollable">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Role</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Incubation Date</th>
                            <th></th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td> {{ $role->name }} </td>
                            <td>{{ $role->display_name }}  </td>
                            <td> {{ $role->description }} </td>
                            <td> {{ date("d-M-Y",strtotime($role->created_at)) }}</td>
                            <td class="text-center">
                                <a href="{{ route("admin.employee.role.add.edit",['id'=>$role->id]) }}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Role">
                                    <i class='icon-pencil'></i>
                                </a> 
                                <a href="{{ route("admin.employee.role.add.edit") }}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Add Role">
                                    <i class='icon-plus'></i>
                                </a>
                                <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Client Details">
                                    <i class='icon-magnifier'>

                                    </i></a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection