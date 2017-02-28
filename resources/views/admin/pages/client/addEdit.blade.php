@extends(config('constants.adminLayouts').'.default')

@section('content')

<div class="page-content">
    <!-- BEGIN BREADCRUMBS -->
    <div class="breadcrumbs">
        <h1>Add New Client</h1>
        <ol class="breadcrumb">
            <li>
                <a href="#">Home</a>
            </li>
            <li class="active">Client</li>
        </ol>
    </div>


	<div class="row">
		<div class="col-md-12">		
			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-user"></i>Basic Info </div>
					<div class="tools">
						<a href="javascript:;" class="collapse"> </a>
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="#" class="form-horizontal">
						<div class="form-body">
							<div class="form-group">
								<div class="col-md-4">
									<label>Company Name</label>
									<input type="text" class="form-control" placeholder="Company Name">
								</div>	
								<div class="col-md-4">
									<label>Contact Name</label>
									<input type="text" class="form-control" placeholder="Contact Name">
								</div>	
								<div class="col-md-4">
									<label>Email Address</label>
									<input type="text" class="form-control" placeholder="Email Address"> 	
								</div>	
							</div>
							<div class="form-group">
								<div class="col-md-4">
									<label>Phone No.</label>
									<input type="text" class="form-control" placeholder="Phone No.">
								</div>	
								<div class="col-md-4">
									<label>Status</label>
									<select class="form-control" name="options2">
										<option value="">Select...</option>
										<option value="Option 1">Active</option>
										<option value="Option 2">Suspended</option>
										<option value="Option 3">Inactive</option>
										<option value="Option 4">Pending</option>
									</select>	
								</div>	
								<div class="col-md-4">
									<label>	Incubation Date</label>
									<div class='input-group date'>
										<input type='text' class="form-control" id="datepicker" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
									</div>
								</div>	
							</div>
						</div>	
						
					</form>
					<!-- END FORM-->
				</div>
			</div>	
			
			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-user"></i>Basic Info </div>
					<div class="tools">
						<a href="javascript:;" class="collapse"> </a>
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="#" class="form-horizontal">
						<div class="form-body">
							<div class="form-group mt-repeater">
                                <div data-repeater-list="group-c">
                                    <div data-repeater-item class="mt-repeater-item">
                                        <div class="row mt-repeater-row">
                                            <div class="col-md-8">
                                                <label class="control-label">Product Variation</label>
                                                <input type="text" placeholder="Salted Tuna" class="form-control" /> </div>
                                            <div class="col-md-3">
                                                <label class="control-label">Qty</label>
                                                <input type="text" placeholder="3" class="form-control" /> </div>
                                            <div class="col-md-1">
                                                <a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:;" data-repeater-create class="btn btn-info mt-repeater-add">
                                    <i class="fa fa-plus"></i> Add Product Variation</a>
                            </div>
						</div>	
						
					</form>
					<!-- END FORM-->
				</div>
			</div>	
			
			<div class="form-actions">
				<div class="row">
					<div class="col-md-offset-5 col-md-6">
						<button type="submit" class="btn green">Submit</button>
						<button type="button" class="btn default">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
