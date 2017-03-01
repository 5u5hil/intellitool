@extends(config('constants.adminLayouts').'.default')
@section('content')
<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Proposal Listing</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Proposal</li>
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
                            <th scope="col">Project Stage</th>
                            <th scope="col">Quotation</th>
                            <th scope="col">Location</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td> Neelkanth Business Park</td>
                            <td>  Neelkanth Group Pvt. Ltd.  </td>
                            <td> Survey</td>
                            <td> N/A </td>
                            <td> Mumbai </td>
                            <td> 17 Feb 2017 </td>
                            <td class="text-center"><a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Proposal"><i class='icon-pencil'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Proposal Converted"><i class='icon-rocket'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Proposal"><i class='icon-magnifier'></i></a> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td> Phoenix Market City</td>
                            <td> Phoenix Group  </td>
                            <td> Proposal Sent</td>
                            <td> 12,00,000 </td>
                            <td> Mumbai </td>
                            <td> 17 Feb 2017 </td>
                            <td class="text-center"><a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Proposal"><i class='icon-pencil'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Proposal Converted"><i class='icon-rocket'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Proposal"><i class='icon-magnifier'></i></a> </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td> Millennium Business Park</td>
                            <td> Millennium Group   </td>
                            <td> SLA</td>
                            <td> 12,00,000 </td>
                            <td> Navi Mumbai </td>
                            <td> 17 Feb 2017 </td>
                            <td class="text-center"><a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Edit Proposal"><i class='icon-pencil'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="Proposal Converted"><i class='icon-rocket'></i></a> <a href="" class="tooltips" data-container="body" data-placement="bottom" data-original-title="View Proposal"><i class='icon-magnifier'></i></a> </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection