@extends('layouts.app')

@section('title', 'Export – Khit Thit')
<style type="text/css">
	.flr {
		float: right;
	}
	.table {
		color: #566a7f !important;
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		@include('layouts.admin_sidebar', ['page'=>'Export'])

		<div class="layout-page" style="background-color: #fff">
			@include('layouts.nav', ['nav'=>'Export', 'page'=>'Page'])
			<br>
			<div class="content-wrapper" style="background-color:#fff">
				<div class="container-xxl flex-grow-1 container-p-y">
					
					<br>
					<div class="border border-9">
						<div class="row">
							<form id="formAuthentication" class="mb-3" action="{{ url('/authlogin') }}" method="POST">
								{{ csrf_field() }}
								<div class="row mb-3">
									<div class="col-md-3">
										<label for="name" class="form-label">From Date</label>
										<input type="date" class="form-control_create" id="name" name="name" placeholder="Select a date">
									</div>
									<div class="col-md-3">
										<label for="phone" class="form-label">To Date</label>
										<input type="date" class="form-control_create" id="name" name="name" placeholder="Select a date">
									</div>
								</div>
									<div class="mb-3">
										<a href="{{ url('/admin/blog/add') }}">
                                            <button type="submit" class="btn  btn-outline-primary d-grid w-30" style="margin: -71px 0 0 488px;">Export</button>
                                        </a>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			{{-- <div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
						<div class="col-12 text-right">
							<a href="{{ url('/admin/faq/add') }}">
								<button type="button" class="btn  btn-outline-primary flr">Add FAQ</button>
							</a>
						</div>
						<div class="col-12">
							<div class="card mt-4">
								<div class="table-responsive text-nowrap">
									<table class="table">
										<thead>
											<tr>
												<th width="20">No</th>
												<th>Page Name</th>
												<th>Update Date</th>
												<th>Actions</th>
											</tr>
										</thead>
										<tbody class="table-border-bottom-0">
											<tr>
												<td>1</td>
												<td>Personal Banking&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;Other Services&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i>&nbsp;Foreign Currency Exchange Service</td>
												<td></td>
												<td>
													<a href="{{ url('/admin/faq/foreign_currency_exchange/list') }}">
														<button type="button" class="btn btn-outline-primary">
                              								<span class="tf-icons bx bx-pencil"></span>&nbsp; 		
                           								</button>
                           							</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			 --}}
		</div>
	</div>
</div>

@endsection('content')