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
            @if(Session::get('successMsg'))
            @component('admin.includes.success-msg')
            {{ Session::get('successMsg') }}
            @endcomponent
            @endif
            <div id="transform-buttons" class="btn-group btn-default">
                <a href="{{route('admin.asset.add/edit')}}" class="btn btn-default" id="destroy">
                    <span data-zh="">Add New Asset</span>
                </a>
            </div>
            <div class="table-scrollable">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Vertical</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getAsset as $asset)
                        <tr>
                            <td>{{$asset['id']}}</td>
                            <td>{{$asset['machine_name']}}</td>
                            <td>{{$asset->assetCategory['name']}}</td>
                            <td>{{$asset->verticals['name']}}</td>
                            <td class="text-center">
                                <a href="{{route("admin.asset.add/edit",['id'=>$asset['id']])}}" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Asset Category">
                                    <i class='icon-pencil'></i>
                                </a>  
                                <a href="#" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Asset Category">
                                    <i class='icon-magnifier'></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$getAsset->links()}}
        </div>
    </div>
</div>
@endsection