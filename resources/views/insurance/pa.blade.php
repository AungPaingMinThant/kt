@extends('layouts.frontend-app')

@section('title', 'Personal Accident Insurance – AYA Bank')
<style type="text/css">
    .nav-align-top .nav-tabs .nav-item:first-child .nav-link {
    	border-top:  none;
    	border-left: none;
    	border-right: none;
    	box-shadow: none;
    }
   	.nav-align-top > .tab-content {
   		box-shadow: none !important;
   	}
   	.benefit_feature_box {
		display: table;
		border-radius: 5px;
		border: 1px solid #dedede;
	}
	.benefit_feature_box:hover {
		cursor: pointer;
		box-shadow: 0 0 16px 8px rgb(0 0 0 / 9%);
	}
	.tab_data_row > .col-md-4 {
		width: 30%;
	}
	.secure_req_application_icon {
		background-color: #a02226;
		color: #fff;
		border-radius: 50%;
		font-size: 20px;
	}
	.read_more_btn {
		background-color: transparent !important;
		color: #2e2e2e !important;
		border-radius: 5px !important;
		border: 1px solid #2e2e2e !important;
	}
	.read_more_btn:hover{
		background-color: #fff !important;
		color: #2e2e2e !important;
		border: 1px solid #2e2e2e !important;
	}
	.benefit_table {
		padding: 0px !important;
		border-top-right-radius: 10px;
		border-bottom-right-radius: 10px;
		background-color: transparent;
		margin-bottom: 0px !important;
	}
	.benefit_table_div {
		background: linear-gradient(90deg, transparent 50%, #ebebeb 50%);
		padding: 0px !important;
		border-top-right-radius: 10px;
		border-bottom-right-radius: 10px;
	}
	.section_1 {
	    padding: 0px 100px !important;
	}
	.list_margin {
		margin-left: -5%;
	}
	/* Tab */
	:root {
	  	--primary-color: #000;
	  	--secondary-color: #fff;
	}
	*,
	*:after,
	*:before {
	  	box-sizing: border-box;
	}
	.container-tab {
	  	position: absolute;
	  	left: 0;
		/*  top: 0;*/
	  	right: 0;
		/*  bottom: 0;*/
	  	display: flex;
	 	align-items: center;
	  	justify-content: center;
	}
	.tabs {
		display: flex;
		position: relative;
		background-color: #eee;
		border-radius: 99px;
	}
	.tabs * {
	  	z-index: 2;
	}
	input[type="radio"] {
	  	display: none;
	}
	.tab {
		display: flex;
		align-items: center;
		justify-content: center;
		height: 54px;
		width: 200px;
		font-size: 16px;
		font-weight: 500;
		border-radius: 99px;
		cursor: pointer;
		transition: color 0.15s ease-in;
	}
	.notification {
		display: flex;
		align-items: center;
		justify-content: center;
		width: 2rem;
		height: 2rem;
		margin-left: 0.75rem;
		border-radius: 50%;
		background-color: var(--secondary-color);
		transition: 0.15s ease-in;
	}
	input[type="radio"]:checked + label {
	  	color: var(--primary-color);
	  	
	}
	input[type="radio"]:checked + label > .notification {
		background-color: var(--primary-color);
		color: #fff;
	}
	input[id="radio-1"]:checked ~ .glider {
	  	transform: translateX(0);
	  	box-shadow: 0 0 10px 5px rgb(149 149 149 / 15%), 0 0px 20px 10px rgb(149 149 149 / 15%)
	}
	input[id="radio-2"]:checked ~ .glider {
	  	transform: translateX(100%);
	  	box-shadow: 0 0 10px 5px rgb(149 149 149 / 15%), 0 0px 20px 10px rgb(149 149 149 / 15%)
	}
	input[id="radio-3"]:checked ~ .glider {
	  	transform: translateX(200%);
	  	box-shadow: 0 0 10px 5px rgb(149 149 149 / 15%), 0 0px 20px 10px rgb(149 149 149 / 15%)
	}
	.glider {
		position: absolute;
		display: flex;
		height: 54px;
		width: 200px;
		background-color: #fff;
		z-index: 1;
		border-radius: 99px;
		transition: 0.25s ease-out;
	}
	@media (max-width: 700px) {
		.tabs {
			transform: scale(0.6);
		}
	}
	/* tab */

	@media (max-width: 1300px) and (min-width: 1000px) {
		.tab_data_row > .col-md-4 {
			width: 48%;
		}
	}
	@media only screen and (max-width: 576px){
		.tab, .glider {
			height: 65px;
		}
		.tab {
			font-size: 18px !important;
		}
		.tab-pane {
			background-position: -80px -70px;
		}
		.tab_data_row > .col-md-4 {
			width: 100%;
		}
		.tab_h2{
			top: 380px;
		}
		.tab_upi_h2{
			top: 380px;
			left: 15%;
		}
		.outer_benefit_box {
			margin-bottom: 10px;
		}
		.how_to_apply_icon {
			width: 100%;
		}
		.debit_how_to_apply_section {
		    padding: 40px 30px 60px 30px !important;
		}
		.how_to_apply_outer_section {
			background-image: url('./images/how_to_apply_mobile_bg.jpg');
			background-position: left;
		}
		.ecommerce_registration_bg {
			background-image: none;
			background-color: #f3f3f2;
		}
		.ecommerce_registration_container {
			padding: 40px 0px 40px 40px !important;
		}
		.section_1 {
		    padding: 0px 30px !important;
		}
		.benefit_table_div {
			overflow: auto;
		}
		.benefit_table {
    		zoom: 80%;
    		margin-bottom: 0px !important;
		}
		.list_margin {
			margin-left: 0;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'pa_insurance'])

			<div style="">
				<div class="d-none d-sm-block space-60"></div>

				<div class="container-tab">
					<div class="tabs">
						<input type="radio" id="radio-1" name="tabs" checked="">
						<label class="tab" for="radio-1">Coverage</label>
						<input type="radio" id="radio-2" name="tabs">
						<label class="tab" for="radio-2">Benefits</label>
						<input type="radio" id="radio-3" name="tabs">
						<label class="tab" for="radio-3" id="radio-3-label">Product Highlights</label>
						<span class="glider"></span>
					</div>
				</div>
				<div class="space-80"></div>

				<div class="nav-align-top">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;display: none;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" id="coverage_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-coverage" aria-controls="navs-pills-top-coverage" aria-selected="true" >
								Coverage
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" id="benefit_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-benefits" aria-controls="navs-pills-top-benefits" aria-selected="false" >
								Benefits
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" id="highlight_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-product-highlights" aria-controls="navs-pills-product-highlights" aria-selected="false" >
								Product Highlights
							</button>
						</li>
					</ul>
					<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;">
						<div class="tab-pane fade show active" id="navs-pills-top-coverage" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row" style="column-gap: 20px;">
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/pa/death_due_to_accident.png') }}" class="img-fluid" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9" style="padding-left:0;">
												<p style="font-weight: 600;margin-bottom: 0;">Death due to accident</p>
												<p style="color: #4e4e4e;margin-bottom: 0;">Total sum insured* amount of MMK 500,000 to MMK 20,000,000 will be paid as lump sum to the beneficiary</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/pa/permanent_disability.png') }}" class="img-fluid" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9" style="padding-left:0;">
												<p style="font-weight: 600;margin-bottom: 0;">Permanent Disability</p>
												<p style="color: #4e4e4e;margin-bottom: 0;">Total sum insured* amount of MMK 500,000 to MMK 20,000,000 will be paid as lump sum to the beneficiary<br><span style="font-size: 10px">Sum Insured* = Total Coverage Amount</span></p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/pa/injury_loss_limbs.png') }}" class="img-fluid" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9" style="padding-left:0;">
												<p style="font-weight: 600;margin-bottom: 0;">Injury / Loss of Limbs</p>
												<p style="color: #4e4e4e;margin-bottom: 0;">The coverage of benefits will be determined by reviewing on Doctor's Recommendation.</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 benefit_feature_box" style="padding: 20px;margin-bottom: 20px;">
										<div class="row">
											<div class="col-md-3">
												<img src="{{ url('/images/insurance/pa/hospitalizaiton_not_able_work.png') }}" class="img-fluid" style="margin-bottom: 20px;">
											</div>
											<div class="col-md-9" style="padding-left:0;">
												<p style="font-weight: 600;margin-bottom: 0;">Hospitalization / Not able to work</p>
												<p style="color: #4e4e4e;margin-bottom: 0;">3% of amount of total coverage per week up to maximum 15% of sum insured.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="space-40"></div>
								<div class="row ">
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-12">
												<p style="font-size: 20px;font-weight: 600;">Eligibility</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #4e4e4e;">Anyone aged between 16 to 65 years old can take coverage for this policy.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane set-text-alert fade" id="navs-pills-top-benefits" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row ">
									<div class="col-md-1"></div>
									<div class="col-md-10">
										<div class="row">
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Hassle-Free Documentation</p>
												<p style="color: #4e4e4e;">You don't have to sweat it out when it comes to the documentation process. A smooth process of documentation is in place that is completely hassle-free.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Hassle-Free Claims</p>
												<p style="color: #4e4e4e;">Enjoy our hassle-free process when making personal accident claims. Fast and reliable claims give you a sense of calm to focus on your recovery.</p>
											</div>
											<div class="col-1">
												<i class="menu-icon tf-icons bx bx-check secure_req_application_icon"></i>
											</div>
											<div class="col-11 list_margin">
												<p style="color: #000;font-weight: 600;margin-bottom: 0;">Quick Premium Payment</p>
												<p style="color: #4e4e4e;">You can choose a range of payment options, either digitally or through branches and receive your policy within one week.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane how-work fade" id="navs-pills-product-highlights" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row ">
									<div class="col-md-1"></div>
									<div class="col-md-11">
										<div class="row">
											<div class="col-md-12">
												<p style="font-size: 20px;font-weight: 600;">Insurance Rate</p>
												<ul>
													<li>Approximately 1% on sum insured</li>
													<li>Subject to: Nature of Occupation Employment</li>
												</ul>
											</div>

											<div class="col-md-12">
												<p style="font-size: 20px;font-weight: 600;">Insurance life span</p>
												<ul>
													<li>Maximum policy term 1 year (Renewable on a yearly basis)</li>
													<li>Minimum policy term – 3 months and 6 months are applicable.</li>
													<li>Premium must be paid by lump sum.</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container faq_section" style="">
				<div class="row" style="padding: 25px 20px;background-color: #f5f5f7;border-radius: 6px;">
					<div class="col-md-9 col-xs-12 d-none d-sm-block">
						<p style="font-size: 18px;color: #2e2e2e;font-weight: 600;margin-bottom: 0;">Get in Touch!</p>
						<p style="color: #2e2e2e;font-weight: 400;font-size: 17px;margin-bottom: 0px;">Making your future secure with us, find your nearest branch to apply in person.</p>
					</div>
					<div class="col-md-3 col-xs-12 text-right d-none d-sm-block" style="padding-top: 10px;padding-left: 0px;text-align: right;">
						<a href="#" target="_blank">
							<button class="btn read_more_btn">More Details</button>
						</a>
					</div>

					<div class="col-md-9 col-xs-12 text-center d-block d-sm-none">
						<p style="font-size: 18px;color: #2e2e2e;font-weight: 600;margin-bottom: 0;">Get in Touch!</p>
						<p style="color: #2e2e2e;font-weight: 400;font-size: 17px;margin-bottom: 0px;">Making your future secure with us, find your nearest branch to apply in person.</p>
					</div>
					<div class="col-md-3 col-xs-12 text-center d-block d-sm-none" style="padding-top: 20px;padding-left: 0px;text-align: right;">
						<a href="#" target="_blank">
							<button class="btn read_more_btn">More Details</button>
						</a>
					</div>
				</div>

				<div class="space-40"></div>
				
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<p style="font-size: 18px;color: #1d1d1f;font-weight: 600;margin-bottom: 10px;">Disclaimers</p>
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							This Personal Accident Insurance is underwritten by AYA Sompo Insurance Company Ltd and distributed by AYA Bank Co Ltd. It is not an obligation of, deposit in or guaranteed by AYA Bank. AYA Sompo Insurance Company Ltd reserves the right of final approval. Full details of the terms, conditions and exclusions of the insurance are provided in the policy wordings and will be sent to you upon acceptance of your application by AYA Sompo Insurance Company Ltd.
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							This webpage contains only general information and does not have regard to the specific investment objectives, financial situation and the particular needs of any specific person. It is not intended as an offer or recommendation to buy the product. A copy of the product summary can be obtained from AYA Bank branches. The contract of insurance is between the insurer and the insured and not between the Bank and the insured. Bank does not give any warranty, as to the accuracy and completeness of the policies. Bank does not accept any liability or losses attributable to your contract of Insurance. Participation by the Bank’s customers in the insurance products is purely on a voluntary basis and is not linked to availment of any other facility from the bank.
						</p>
						<p style="color: #777777;font-weight: 400;font-size: 12px;">
							This policy is protected under the Policy Owners’ Protection Scheme which is administered by Myanmar Insurance Corporation. For detail information on the types of benefits that are covered under the scheme as well as the limits of coverage, where applicable, please visit any of AYA Bank branches.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

<script type="text/javascript">
	document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
		if(!button.classList.contains('delete')) {
		button.classList.add('delete');
		setTimeout(() => button.classList.remove('delete'), 3200);
		}
		e.preventDefault();
	}));

	$("#radio-1").click(function(){
		$("#coverage_tab").click();
	});
	$("#radio-2").click(function(){
		$("#benefit_tab").click();
	});
	$("#radio-3").click(function(){
		$("#highlight_tab").click();
	});
</script>

@endsection('content')