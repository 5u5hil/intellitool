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
            @if(Session::get('successMsg'))
            @component('admin.includes.success-msg')
            {{ Session::get('successMsg') }}
            @endcomponent
            @endif
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
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Verticals</th>
                              <th scope="col">Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vendors as $vendor)
                        <tr>
                            <td>{{ $vendor->id }}</td>
                            <td>{{ $vendor->firstname." ".$vendor->lastname }}</td>
                            <td>{{ $vendor->email }}</td>
                            <td>{{ $vendor->phone }}</td>
                            <td>{{  $vendor->verticals }} 
                            </td>
                            <td><label class="label label-{{($vendor->status==1)?'success':'danger'}}">{{($vendor->status==1)?'Active':'Suspended'}}</label></td>
                            
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
            {{$vendors->links() }}
        </div>
    </div>
</div>
@endsection