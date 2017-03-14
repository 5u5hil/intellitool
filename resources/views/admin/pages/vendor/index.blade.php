@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Vendor</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">Home</a>
            </li>
            <li class="active">Vendor</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="transform-buttons" class="btn-group btn-default">

                <a href="{{route('admin.vendor.add/edit')}}" class="btn btn-default" id="destroy">
                    <span data-zh="">Add New Vendor</span>
                </a>
            </div>
            <div class="table-scrollable">

                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                           
                           
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                  
                             @foreach($vendors as $vendor)
                        <tr>
                            <td>{{ $vendor->id }}</td>
                            <td>{{ $vendor->firstname }}</td>
                            <td>{{ $vendor->lastname }}</td>
                            <td>{{ $vendor->email }}</td>
                            <td>{{ $vendor->address }}</td>
                           
                      
                            <td class="text-center">
                                <a href="{{route("admin.vendor.add/edit",['id'=>$vendor->id])}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Vendor">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Vendor">
                                    <i class='icon-magnifier'></i>
                                </a>

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