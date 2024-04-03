@extends('main')
@section('dynamic_page')

<div class="container-fluid p-0">
	<div class="row">
		<form action="" method="POST">
			@csrf
			<div class="card">
				<div class="card-body">
					<h3>Lead Information</h3>
					<div class="row">
						<div class="col-md-6">
							<table class="table">
								<tr>
									<td class="text-right">First Name</td>
									<td class="text-dark">{{ $lead_details->first_name }}</td>
								</tr>
								<tr>
									<td class="text-right">Email</td>
									<td class="text-dark">{{ $lead_details->email }}</td>
								</tr>
								<tr>
									<td class="text-right">Title</td>
									<td class="text-dark">{{ $lead_details->title }}</td>
								</tr>
								<tr>
									<td class="text-right">Lead Status</td>
									<td class="text-dark">{{ $lead_details->lead_status }}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table">
								<tr>
									<td class="text-right">Last Name</td>
									<td class="text-dark">{{ $lead_details->last_name }}</td>
								</tr>
								<tr>
									<td class="text-right">Phone</td>
									<td class="text-dark">{{ $lead_details->phone }}</td>
								</tr>
								<tr>
									<td class="text-right">Company Name</td>
									<td class="text-dark">{{ $lead_details->company_name}}</td>
								</tr>
								<tr>
									<td class="text-right">Lead Source</td>
									<td class="text-dark">{{ $lead_details->lead_source }}</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="card-body">
					<h3>Address</h3>
					<div class="row">
						<div class="col-md-6">
							<table class="table">
								<tr>
									<td class="text-right">Building No.</td>
									<td class="text-dark">{{ $lead_details->building_no }}</td>
								</tr>
								<tr>
									<td class="text-right">State</td>
									<td class="text-dark">{{ $lead_details->state }}</td>
								</tr>
								<tr>
									<td class="text-right">Zip Code</td>
									<td class="text-dark">{{ $lead_details->zip_code }}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table">
								<tr>
									<td class="text-right">Street</td>
									<td class="text-dark">{{ $lead_details->street }}</td>
								</tr>
								<tr>
									<td class="text-right">City</td>
									<td class="text-dark">{{ $lead_details->city }}</td>
								</tr>
								<tr>
									<td class="text-right">Country</td>
									<td class="text-dark">{{ $lead_details->country }}</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="card-body">
					<h3>Other Information</h3>
					<div class="row">
						<div class="col-md-6">
							<table class="table">
								<tr>
									<td class="text-right">Note 1</td>
									<td class="text-dark">{{ $lead_details->note_1 }}</td>
								</tr>
							</table>
						</div>
						<div class="col-md-6">
							<table class="table">
								<tr>
									<td class="text-right">Note 2</td>
									<td class="text-dark">{{ $lead_details->note_2 }}</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="d-grid gap-2 mt-3">
								<button type="submit" class="btn btn-lg btn-secondary">Go Back</button>
							</div>
						</div>
						<div class="col-md-6">
							<div class="d-grid gap-2 mt-3">
								<a href="{{ url('/leads/edit-lead/'.$lead_details->id) }}" class="btn btn-lg btn-primary">Edit</a>
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