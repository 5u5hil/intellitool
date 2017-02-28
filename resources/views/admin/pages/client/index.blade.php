@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Client Listing</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Client</li>
        </ol>
    </div>

    <div class="row">
        <div class="col-md-12">

            <div class="table-scrollable">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Contact Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">No. Of Projects</th>
                            <th scope="col">Status</th>
                            <th scope="col">Incubation Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td> Neelkanth Group Pvt. Ltd. </td>
                            <td> Neel Shah </td>
                            <td> neel@neelkath.com</td>
                            <td> 8798798787 </td>
                            <td> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Projects">4</a> </td>
                            <td><span class="label label-sm label-success"> Active </span></td>
                            <td> 14th Jan 2017 </td>
                            <td class="text-center"><a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit"><i class='icon-pencil'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Add Project"><i class='icon-plus'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Client Details"><i class='icon-magnifier'></i></a> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td> Neelkanth Group Pvt. Ltd. </td>
                            <td> Neel Shah </td>
                            <td> neel@neelkath.com</td>
                            <td> 8798798787 </td>
                            <td> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Projects">4</a> </td>
                            <td><span class="label label-sm label-danger"> Suspended </span></td>
                            <td> 14th Jan 2017 </td>
                            <td class="text-center"><a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit"><i class='icon-pencil'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Add Project"><i class='icon-plus'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Client Details"><i class='icon-magnifier'></i></a> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td> Neelkanth Group Pvt. Ltd. </td>
                            <td> Neel Shah </td>
                            <td> neel@neelkath.com</td>
                            <td> 8798798787 </td>
                            <td> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Projects">4</a> </td>
                            <td><span class="label label-sm label-danger"> Suspended </span></td>
                            <td> 14th Jan 2017 </td>
                            <td class="text-center"><a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit"><i class='icon-pencil'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Add Project"><i class='icon-plus'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Client Details"><i class='icon-magnifier'></i></a> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td> Neelkanth Group Pvt. Ltd. </td>
                            <td> Neel Shah </td>
                            <td> neel@neelkath.com</td>
                            <td> 8798798787 </td>
                            <td> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Projects">4</a> </td>
                            <td><span class="label label-sm label-success"> Active </span></td>
                            <td> 14th Jan 2017 </td>
                            <td class="text-center"><a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit"><i class='icon-pencil'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Add Project"><i class='icon-plus'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Client Details"><i class='icon-magnifier'></i></a> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td> Neelkanth Group Pvt. Ltd. </td>
                            <td> Neel Shah </td>
                            <td> neel@neelkath.com</td>
                            <td> 8798798787 </td>
                            <td> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Projects">4</a> </td>
                            <td><span class="label label-sm label-danger"> Suspended </span></td>
                            <td> 14th Jan 2017 </td>
                            <td class="text-center"><a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit"><i class='icon-pencil'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Add Project"><i class='icon-plus'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Client Details"><i class='icon-magnifier'></i></a> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection