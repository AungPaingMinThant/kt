@extends('layouts.app')

@section('title', 'About AYA – Page List – AYA Bank')
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
		@include('layouts.admin_sidebar', ['page'=>'Page'])

		<div class="layout-page">
			@include('layouts.nav', ['nav'=>'About AYA Pages'])

			<div class="content-wrapper">
				<div class="container-xxl flex-grow-1 container-p-y">
					@include('layouts.message')
					<div class="row">
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
												<td>AYA Bank Profile</td>
												<td></td>
												<td>
													<a href="{{ url('/admin/pagelist/about-aya/ayabank-profile') }}" target="_blank">
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
			
		</div>
	</div>
</div>

@endsection('content')