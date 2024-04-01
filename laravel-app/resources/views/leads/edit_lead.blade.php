@extends('main')
@section('dynamic_page')

<div class="container-fluid p-0">
	<!-- <div class="mb-3">
			<h1 class="h3 d-inline align-middle">Lead Information</h1>
			<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
			Get more form examples
			</a>
		</div> -->
	<div class="row">
		<form action="" method="POST">
			@csrf
			<div class="card">
				<div class="card-body">
					<h3>Edit Lead Information</h3>
					<div class="row">
						<div class="col-md-6">

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">First Name<span class="text-danger">*</span></h5>
								<input id="first_name" type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ $lead_details->first_name }}">
								@error('first_name')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Email</h5>
								<input id="email" type="text" class="form-control" placeholder="Email" name="email" value="{{ $lead_details->email }}">
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Title<span class="text-danger">*</span></h5>
								<input id="title" type="text" class="form-control" placeholder="Title" name="title" value="{{ $lead_details->title }}">
								@error('title')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>

							<div style="margin-bottom: 15px;">
							@php
							$lead_status = array('Quanlifications', 'Need Analysis', 'Proposal/Price Quote', 'Negotiations', 'Closed-Won', 'Closed-Lost');
							@endphp
								<h5 class="card-title mb-10">Lead Status</h5>
								<select id="lead_status" class="form-select mb-3" name="lead_status">
									<option selected value="none">Lead Status</option>
									@foreach($lead_status as $single_status)
									<option value="{{ $single_status }}">{{ $single_status }}</option>
									@endforeach
								</select>
							</div>

						</div>
						<div class="col-md-6">

							

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Last Name<span class="text-danger">*</span></h5>
								<input id="last_name" type="text" class="form-control" placeholder="Last Name" name="last_name" value="{{ $lead_details->last_name }}">
								@error('last_name')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Phone<span class="text-danger">*</span></h5>
								<input id="phone" type="text" class="form-control" placeholder="Phone" name="phone" value="{{ $lead_details->phone }}">
								@error('phone')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Company Name<span class="text-danger">*</span></h5>
								<input id="title" type="text" class="form-control" placeholder="Company Name" name="company_name" value="{{ $lead_details->company_name }}">
								@error('company_name')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>

							

							<div style="margin-bottom: 15px;">

							@php
							$lead_source = array('Advertising', 'Social Media', 'Direct Call', 'Search');
							@endphp

								<h5 class="card-title mb-10">Lead Source</h5>
								<select id="lead_source" class="form-select mb-3" name="lead_source">
									<option selected value="none">Lead Source</option>
									@foreach($lead_source as $single_source)
									<option value="{{ $single_source }}">{{ $single_source }}</option>
									@endforeach
								</select>
							</div>

						</div>
					</div>
				</div>
				<div class="card-body">
					<h3>Address</h3>
					<div class="row">
						<div class="col-md-6">

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Building No.<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="Building No." name="building_no" value="{{ $lead_details->building_no }}">
								@error('building_no')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">State<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="State" name="state" value="{{ $lead_details->state }}">
								@error('state')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Zip Code<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="Zip Code" name="zip_code" value="{{ $lead_details->zip_code }}">
								@error('zip_code')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>

						</div>

						<div class="col-md-6">

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Street<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="Street" name="street" value="{{ $lead_details->street }}">
								@error('street')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">City<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="City" name="city" value="{{ $lead_details->city }}">
								@error('city')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>

							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Country<span class="text-danger">*</span></h5>
								<input type="text" class="form-control" placeholder="Country" name="country" value="{{ $lead_details->country }}">
								@error('country')
								<small class="text-danger">{{ $message }}</small>
								@enderror
							</div>

						</div>
					</div>
				</div>
				<div class="card-body">
					<h3>Other Information</h3>
					<div class="row">
						<div class="col-md-6">
							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Note 1</span></h5>
								<textarea class="form-control" rows="3" placeholder="Note 1" name="note_1" value="{{ $lead_details->note_1 }}"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div style="margin-bottom: 15px;">
								<h5 class="card-title mb-10">Note 2</h5>
								<textarea class="form-control" rows="3" placeholder="Note 2" name="note_2" value="{{ $lead_details->note_2 }}"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="d-grid gap-2 mt-3">
								<button type="submit" class="btn btn-lg btn-secondary">Cancel</button>
							</div>
						</div>
						<div class="col-md-6">
							<div class="d-grid gap-2 mt-3">
								<button type="submit" name="submit" value="submit" class="btn btn-lg btn-primary">Update</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>

		<!-- <div class="col-12 col-lg-6">
			</div> -->
	</div>
</div>

@endsection