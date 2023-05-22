<link rel="stylesheet" href="{{ url('/css/header.css') }}" />
<div class="desktop_menu">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<a class="navbar-brand" href="#" style="padding: 22px 0px 20px 4px;">
					<img src="{{ url('/images/logo_wo_tagline_2.png') }}" class="img-fluid" style="width: 70%;margin-top: 40px">
				</a>
			</div>
			<div class="col-md-9 text-right">
				<div class="row">
					<div class="col-md-12 text-right">
						<ul class="menu" style="display: flex;list-style: none;float: right;margin-bottom: 1rem;margin-top: 1rem;">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									English
								</a>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="#">Myanmar</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<img src="{{ url('/images/register_icon.png') }}" class="img-fluid">&nbsp;Register
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<img src="{{ url('/images/login_icon.png') }}" class="img-fluid">&nbsp;Login
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row" style="border-top: 1px solid #ebeff1;">
					<div class="col-md-12 text-right">
						<ul class="menu header-menu" style="display: flex;list-style: none;float: right;margin-top: 1rem;">
							@if($page == 'home')
								<li class="nav-item active">
							@else
								<li class="nav-item">
							@endif
								<a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
							</li>
							@if($page == 'personal_banking')
								<li class="nav-item personal-banking-li active">
							@else
								<li class="nav-item personal-banking-li">
							@endif
								<a class="nav-link" href="#">Personal Banking</a>
								<div class="personal-dropdown-content">
									<div class="row" style="width: 100%;">
										<div class="col-md-4 left-menu-div">
											<div class="row menu-link personal-menu-ac-sav-link menu-active ">
												<a class="" href="#">ACCOUNTS AND SAVINGS</a>
											</div>
											<div class="row menu-link personal-menu-borrow-link">
												<a class="" href="#">BORROWING</a>
											</div>
											<div class="row menu-link personal-menu-remit-link">
												<a class="" href="#">REMITTANCE AND PAYMENTS</a>
											</div>
											<div class="row menu-link personal-menu-premium-link">
												<a class="" href="#">PREMIUM BANKING</a>
											</div>
											<div class="row menu-link personal-menu-ins-link">
												<a class="" href="#">INSURANCE</a>
											</div>
											<div class="row menu-link personal-menu-other-link">
												<a class="other-menu" href="#">OTHER SERVIES</a>
											</div>

											<div class="space-60"></div>
										</div>
										<div class="col-md-7 right-menu-div">
											<p class="menu_label">PERSONAL BANKING</p>
											<div class="personal-menu-links personal-acc-sav-menu">
												<div class="row">
													<div class="col">
														<p class="fw-bold">
															<a href="{{ url('/account-saving/saving-deposit') }}">SAVING DEPOST</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/saving-deposit/aya-regular-saving') }}">AYA Regular Saving</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/saving-deposit/aya-maximizer-saving') }}">AYA Maximizer Saving</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/saving-deposit/aya-loyal-saving') }}">AYA Loyal Saving</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/saving-deposit/ngwe-toe-mae-shwe-o') }}">Ngwe Toe Mae-Shwe O</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/saving-deposit/aya-su-buu') }}">AYA Su-Buu</a>
														</p>
													</div>
													<div class="col">
														<p class="fw-bold">
															<a href="{{ url('/account-saving/current-deposit') }}">CURRENT DEPOST</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/saving-deposit/aya-regular-saving') }}">AYA Regular Saving</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/saving-deposit/aya-maximizer-saving') }}">AYA Maximizer Saving</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/saving-deposit/aya-loyal-saving') }}">AYA Loyal Saving</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/saving-deposit/ngwe-toe-mae-shwe-o') }}">Ngwe Toe Mae-Shwe O</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/saving-deposit/aya-su-buu') }}">AYA Su-Buu</a>
														</p>
													</div>
												</div>
												<div class="row" style="margin-top: -35px;">
													<div class="col">
														<p class="fw-bold">
															<a href="{{ url('/account-saving/call-deposit') }}">CALL DEPOST</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/call-deposit/premium-call-deposit') }}">Premium Call Deposit</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/account-saving/call-deposit/new-business-call') }}">New Business Call</a>
														</p>
													</div>
													<div class="col">
														<p class="fw-bold">
															<a href="{{ url('/account-saving/saving-deposit') }}">FIXED DEPOST</a>
														</p>
													</div>
												</div>
											</div>
											<div class="personal-menu-links personal-borrow-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															ASSETS ACQUISITION / FINANCING
														</p>
														<p class="m-b-5">
															<a href="{{ url('/borrowing/hire-purchase/auto-loan') }}">Auto Loan</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/borrowing/hire-purchase/c2c-auto-loan') }}">C2C Auto Loan</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/borrowing/hire-purchase/education-loan') }}">Education Loan</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/borrowing/hire-purchase/construction-loan') }}">Home Construction & Renovation (HCR) Loan</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/borrowing/hire-purchase/home-loan') }}">Home Loan</a>
														</p>
													</div>
												</div>
											</div>
											<div class="personal-menu-links personal-remit-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															REMITTANCE AND PAYMENTS
														</p>
														<p class="m-b-5">
															<a href="{{ url('/remittance/local') }}">Local Remittance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/remittance/international') }}">International Remittance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/remittance/payment') }}">Payments</a>
														</p>
													</div>
												</div>
											</div>
											<div class="personal-menu-links personal-premium-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="m-b-5 fw-bold">
															<a href="{{ url('/premium-banking') }}">Premium Banking</a>
														</p>
													</div>
												</div>
											</div>
											<div class="personal-menu-links personal-ins-menu d-none">
												<div class="row">
													<div class="col-md-12">
														<p class="fw-bold">
															INSURANCE
														</p>
													</div>
													<div class="col-md-4">
														<p class="m-b-5">
															<a href="{{ url('/insurance/health') }}">Health Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/insurance/motor') }}">Motor Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/insurance/fire') }}">Fire Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/insurance/personal-accident') }}">Personal Accident Insurance</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="m-b-5">
															<a href="{{ url('/insurance/travel/aya-go') }}">AYA Go Travel Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/insurance/travel/aya-joy') }}">AYA Joy Travel Insurance</a>
														</p>
													</div>
													<div class="space-20"></div>
													<div class="col-md-12">
														<p class="fw-bold">
															LIFE
														</p>
														<p class="m-b-5">
															<a href="{{ url('/insurance/life/universal') }}">Universal Life Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/insurance/life/education') }}">Education Life Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/insurance/life/one-health-solution-individual-plan') }}">One Health Solution Individual Plan</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/insurance/life/short-term') }}">Short Term Endowment Life Insurance</a>
														</p>
													</div>
												</div>
											</div>
											<div class="personal-menu-links personal-other-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															OTHER SERVICES
														</p>
														<p class="m-b-5">
															<a href="{{ url('/other-services/foreign-currency-exchange-service') }}">Foreign Currency Exchange Service</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/other-services/safe-deposit') }}"> Safe Deposit Locker</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							@if($page == 'business_banking')
								<li class="nav-item business-banking-li active">
							@else
								<li class="nav-item business-banking-li">
							@endif
								<a class="nav-link" href="#">Business Banking</a>
								<div class="business-dropdown-content">
									<div class="row" style="width: 100%;">
										<div class="col-md-4 left-menu-div">
											<div class="row menu-link business-menu-ac-sav-link menu-active ">
												<a class="">ACCOUNTS AND SAVINGS</a>
											</div>
											<div class="row menu-link business-menu-remit-link">
												<a class="">REMITTANCE AND PAYMENTS</a>
											</div>
											<div class="row menu-link business-menu-borrow-link">
												<a class="">BORROWING</a>
											</div>
											<div class="row menu-link business-menu-trade-link">
												<a class="">TRADE</a>
											</div>
											<div class="row menu-link business-menu-cash-management-link">
												<a class="">CASH MANAGEMENT</a>
											</div>
											<div class="row menu-link business-menu-ins-link">
												<a class="other-menu">INSURANCE</a>
											</div>

											<div class="space-60"></div>
										</div>
										<div class="col-md-7 right-menu-div">
											<p class="menu_label">BUSINESS BANKING</p>
											<div class="business-menu-links business-acc-sav-menu">
												<div class="row">
													<div class="col-12">
														<p class="fw-bold">
															ACCOUNTS AND SAVINGS
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/account-saving/call-deposit') }}">Call Deposit</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/account-saving/saving-deposit') }}">Saving Deposit</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/account-saving/current-deposit') }}">Current Deposit</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/account-saving/fixed-deposit') }}">Fixed Deposit</a>
														</p>
													</div>
												</div>
											</div>
											<div class="business-menu-links business-remit-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															REMITTANCE AND PAYMENTS
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/remittance-payments/local-payments') }}">Local Payments</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/remittance-payments/international-payments') }}">International Payments</a>
														</p>
													</div>
												</div>
											</div>
											<div class="business-menu-links business-borrow-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															BORROWING
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/borrowing/corporate-business-loan') }}">Corporate Business Loan</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/borrowing/hire-purchase') }}">Hire Purchase</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/borrowing/sme') }}">SME</a>
														</p>
													</div>
												</div>
											</div>
											<div class="business-menu-links business-trade-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															TRADE
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/trade/trade-financing') }}">Trade Financing</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/trade/trade-services') }}">Trade Services</a>
														</p>
													</div>
												</div>
											</div>
											<div class="business-menu-links business-cash-management-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="m-b-5 fw-bold">
															<a href="{{ url('/business/cash-management') }}">CASH MANAGEMENT</a>
														</p>
													</div>
												</div>
											</div>
											<div class="business-menu-links business-ins-menu d-none">
												<div class="row">
													<div class="col-md-12">
														<p class="fw-bold">
															INSURANCE
														</p>
													</div>
													<div class="col-md-12">
														<p class="m-b-5">
															<a href="{{ url('/business/insurance/domestic-marine-cargo') }}">Domestic Marine Cargo Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/insurance/oversea-marine-cargo') }}">Oversea Marine Cargo Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/insurance/domestic-inland-transit') }}">Domestic Inland Transit Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/insurance/car-ear') }}">Contractor’s All Risk & Erection All Risk (CAR & EAR) Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/insurance/industrial-all-risk') }}">Industrial All Risk Insurance (IAR) Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/insurance/group-life') }}">Group Life Insurance</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							@if($page == 'digital_services')
								<li class="nav-item digital-services-li active">
							@else
								<li class="nav-item digital-services-li">
							@endif
								<a class="nav-link" href="#">Digital Services</a>
								<div class="digital-dropdown-content">
									<div class="row" style="width: 100%;">
										<div class="col-md-4 left-menu-div">
											<div class="row menu-link digital-menu-online-pay-services-link menu-active ">
												<a class="">ONLINE PAYMENT SERVICES</a>
											</div>
											<div class="row menu-link digital-menu-card-services-link">
												<a class="">CARD SERVICES</a>
											</div>
											<div class="row menu-link digital-menu-atm-link">
												<a class="">ATM</a>
											</div>
											<div class="row menu-link digital-menu-wallet-solutions-link">
												<a class="">WALLET SOLUTIONS</a>
											</div>
											<div class="row menu-link digital-menu-guidlines-link">
												<a class="other-menu">GUIDLINES</a>
											</div>
											<div class="row menu-link ">
												<a class="other-menu">&nbsp;</a>
											</div>

											<div class="space-60"></div>
										</div>

										<div class="col-md-7 right-menu-div" style="height: 373px;">
											<p class="menu_label">DIGITAL SERVICES</p>
											<div class="digital-menu-links digital-online-pay-services-menu">
												<div class="row">
													<div class="col-12">
														<p class="fw-bold">
															ONLINE PAYMENT SERVICES
														</p>
														<p class="m-b-5">
															<a href="{{ url('/internet-banking') }}">Internet Banking</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/mobile-banking') }}">Mobile Banking</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/sms-alert') }}">SMS Alert</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/corporate-internet-banking') }}">Corporate Internet Banking</a>
														</p>
													</div>
												</div>
											</div>
											<div class="digital-menu-links digital-card-services-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															MERCHANT SERVICES
														</p>
														<p class="m-b-5">
															<a href="{{ url('/pos') }}">POS</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/ecommerce') }}">Ecommerce</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/debit-card') }}">Debit Card</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/credit-card') }}">Credit Deposit</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/prepaid-card') }}">Prepaid Card</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															CARD PRIVILEGE
														</p>
														<p class="m-b-5">
															<a href="{{ url('/simple-pay') }}">Simple Pay</a>
														</p>
													</div>
												</div>
											</div>
											<div class="digital-menu-links digital-atm-menu d-none">
												<div class="row">
													<div class="col-12">
														<p class="fw-bold">
															ATM
														</p>
														<p class="m-b-5">
															<a href="{{ url('/atm') }}">ATM Service and Network</a>
														</p>
													</div>
												</div>
											</div>
											<div class="digital-menu-links digital-wallet-solutions-menu d-none">
												<div class="row">
													<div class="col-12">
														<p class="fw-bold">
															WALLET SOLUTION
														</p>
														<p class="m-b-5">
															<a href="{{ url('/aya-pay') }}">AYA Pay</a>
														</p>
													</div>
												</div>
											</div>
											<div class="digital-menu-links digital-guidlines-menu d-none">
												<div class="row">
													<div class="col-12">
														<p class="fw-bold">
															GUIDLINES
														</p>
														<p class="m-b-5">
															<a href="{{ url('/digital-secure') }}">Security Advices for Digital Services</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/frequently-used-digital') }}">Frequently Used Digital Services</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item about-aya-li">
								<a class="nav-link" href="#">About AYA</a>
								<div class="about-aya-dropdown-content">
									<div class="row" style="width: 100%;">
										<div class="col-md-4 left-menu-div">
											<div class="row menu-link about-aya-menu-who-we-are-link menu-active">
												<a class="">WHO WE ARE</a>
											</div>
											<div class="row menu-link about-aya-menu-career-link">
												<a class="">CAREER</a>
											</div>
											<div class="row menu-link about-aya-menu-governance-link">
												<a class="">GOVERNANCE</a>
											</div>
											<div class="row menu-link about-aya-menu-sustainability-link">
												<a class="">SUSTAINABILITY</a>
											</div>
											<div class="row menu-link about-aya-menu-newsroom-link">
												<a class="">NEWSROOM</a>
											</div>
											<div class="row menu-link about-aya-menu-network-link">
												<a class="other-menu">NETWORK</a>
											</div>

											<div class="space-60"></div>
										</div>

										<div class="col-md-7 right-menu-div" style="height: 373px;">
											<p class="menu_label">ABOUT AYA</p>
											<div class="about-aya-menu-links about-aya-who-we-are-menu">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															CORPORATE PROFILE
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_Profile.html" target="_blank">AYA Bank Profile</a>
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_OurCorporateValue.html" target="_blank">Mission, Corporate Values and Brand Value</a>
														</p>
														<p class="m-b-5">
															<a href="http://saltnpixel.com/AYABank/AYABank_CorporateGoal.html" target="_blank">Corporate Goals</a>
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_CorporateMilestone.html" target="_blank">Corporate Milestones</a>
														</p>
														<p class="mb-20">
															<a href="https://saltnpixel.com/AYABank/AYABank_Awards.html" target="_blank">Awards</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															LEADERSHIP
														</p>
														<p class="m-b-5">
															<a href="" >Message From Chairman</a>
														</p>
														<p class="mb-20">
															<a href="https://saltnpixel.com/AYABank/AYABANK_MeetOurLeaders.html" target="_blank">Meet Our Leaders</a>
														</p>
														<p class="fw-bold">
															What We Offer
														</p>
														<p class="mb-30">
															<a href="https://saltnpixel.com/AYABank/AYABank_WhyUs.html" target="_blank">Key Takeaways / Why us</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															OUR STRATEGIES
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_Corporate_Strategy.html" target="_blank">Corporate Strategy</a>
														</p>
														<p class="m-b-5">
															<a href="">Business  Model</a>
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_Stakeholders.html" target="_blank">Stakeholder Management</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															INVESTOR RELATIONS
														</p>
														<p class="m-b-5">
															<a href="">Investor Relations</a>
														</p>
													</div>
												</div>
											</div>
											<div class="about-aya-menu-links about-aya-career-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															CAREER
														</p>
														<p class="m-b-5">
															<a href="">Life at AYA</a>
														</p>
														<p class="m-b-5">
															<a href="">AYA Culture</a>
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_Employee_Development.html" target="_blank">Employee Development</a>
														</p>
														<p class="m-b-5">
															<a href="">Career Opportunities</a>
														</p>
													</div>
												</div>
											</div>
											<div class="about-aya-menu-links about-aya-governance-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															<a href="https://saltnpixel.com/AYABank/AYABank_Corporate_Governance.html" target="_blank">CORPORATE GOVERNANCE</a>
														</p>
														<p class="m-b-5">
															<a href="">Leadership</a>
														</p>
														<p class="m-b-5">
															<a href="">Governance Framework</a>
														</p>
														<p class="m-b-5">
															<a href="">Board Committees</a>
														</p>
														<p class="m-b-5">
															<a href="">Who are on the Committees</a>
														</p>
														<p class="m-b-5">
															<a href="">Role of Committees</a>
														</p>
														<p class="mb-30">
															<a href="">Committee Meeting & Attendance</a>
														</p>
														<p class="fw-bold">
															COMPLIANCE
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_Compliance.html" target="_blank">Compliance</a>
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_AML_CFT.html" target="_blank">Implementations of AML/CFT</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															RISK MANAGEMENT
														</p>
														<p class="mb-30">
															<a href="https://saltnpixel.com/AYABank/AYABank_RiskManagement_Environment.html" target="_blank">Risk Management</a>
														</p>
														<p class="fw-bold">
															<a href="https://saltnpixel.com/AYABank/AYABank_CorporatePolicy.html" target="_blank">CORPORATE POLICIES</a>
														</p>
														<p class="m-b-5">
															<a href="">People</a>
														</p>
														<p class="m-b-5">
															<a href="">Corporate Affairs</a>
														</p>
														<p class="m-b-5">
															<a href="">Compliance</a>
														</p>
														<p class="m-b-5">
															<a href="">Finance</a>
														</p>
													</div>
												</div>
											</div>
											<div class="about-aya-menu-links about-aya-sustainability-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															<a href="https://saltnpixel.com/AYABank/AYABank_Sustainability.html" target="_blank">SUSTAINABILITY</a>
														</p>
														<p class="m-b-5">
															<a href="">Our Commitment</a>
														</p>
														<p class="m-b-5">
															<a href="">Our Commitment</a>
														</p>
														<p class="m-b-5">
															<a href="">UNGC Commitment</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															OUR APPROACH
														</p>
														<p class="m-b-5">
															<a href="">Social Sustainability</a>
														</p>
														<p class="m-b-5">
															<a href="">Environment Sustainability</a>
														</p>
														<p class="mb-30">
															<a href="">Economic Sustainability</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															AVENUE TO SUSTAIN
														</p>
														<p class="mb-30">
															<a href="">Non-financial performance</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															CORPORATE SOCIAL RESPONSIBILITY
														</p>
														<p class="m-b-5">
															<a href="">Corporate Social Responsibility</a>
														</p>
													</div>
												</div>
											</div>
											<div class="about-aya-menu-links about-aya-newsroom-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															NEWSROOM
														</p>
														<p class="m-b-5">
															<a href="">Corporate News</a>
														</p>
														<p class="m-b-5">
															<a href="">Press Releases</a>
														</p>
														<p class="m-b-5">
															<a href="">Announcements</a>
														</p>
														<p class="m-b-5">
															<a href="">Knowledge Hub</a>
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_Report.html" target="_blank">Reports</a>
														</p>
													</div>
												</div>
											</div>
											<div class="about-aya-menu-links about-aya-network-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															NETWORK
														</p>
														<p class="m-b-5">
															<a href="">Correspondent Bank</a>
														</p>
														<p class="m-b-5">
															<a href="">Branch Locations</a>
														</p>
														<p class="m-b-5">
															<a href="">FX Locations</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBox" >
									<span class="tf-icons bx bx-search"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-default mobile_menu" >
    <div class="container-fluid">
        <div class="navbar-header" style="padding: 10px 0px;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="slide-collapse" data-target="#slide-navbar-collapse" aria-expanded="false" style="margin-right: 30px;background-color: transparent;border: 1px solid #fff;border-radius: 5px;color: #fff;">
                <span class="tf-icons bx bx-menu" style="font-size: 30px;color: #c1c1c1;"></span>
            </button>
            <a href="#" target="_blank"><img alt="AYA BANK" src="{{ url('/images/logo_wo_tagline_2.png') }}" class="img-fluid mobile_logo"></a>
        </div>

        <div class="collapse navbar-collapse" id="slide-navbar-collapse" style="">
            <ul class="nav navbar-nav">
                <li class="active" style="padding: 20px;">
                    <a href=""><img src="{{url('/images/logo_wo_tagline_2.png')}}" class="img-fluid" style="width: 50%"></a>
                    <button class="elementskit-menu-close elementskit-menu-toggler" id="navbar_close" type="button" style="float: right;border: 1px solid rgba(0,0,0,.5);color: rgba(51,51,51,.5);padding: 5px 10px 5px 10px;border-radius: 5px;">X</button>
                </li>
                <li style="height: 20px;"></li>
                <li style="padding: 10px 0px;">
                	@if($page == 'personal_banking')
                		<a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #a02226;">HOME</a>
                	@else
                		<a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">HOME</a>
                	@endif
                </li>
                <li style="padding: 10px 0px;">
                	@if($page == 'personal_banking')
                    	<a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #a02226;">
                    @else
                    	<a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">
                    @endif
                    	PERSONAL BANKING
                    </a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">BUSINESS BANKING</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">DIGITAL SERVICES</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">ABOUT AYA</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">REGISTER</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">LOGIN</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">ENGLISH</a>
                </li>
                <li style="padding: 10px 0px;">
                    <a href="" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">MYANMAR</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>

<div class="modal fade" id="searchBox" tabindex="-1" role="dialog" aria-labelledby="searchBoxLabel" aria-hidden="true" style="background-color: #0a0a0ab8">
    <div class="modal-dialog" id="searchModalDialog" role="document" style="background-color: transparent;top: 39%;">
        <div class="modal-content" style="background-color: transparent;border-color: transparent;box-shadow: none !important;">
            <div class="modal-body" style="padding-right: 0px;">
                <form role="search" method="get" class="ekit-search-group" action="">
                    <input type="search" id="search_txt" class="ekit_search-field" placeholder="Search..." value="" name="s">
                    <button type="submit" class="ekit_search-button" style="background-color: transparent;border: none;color: #fff;position: absolute;top: 40%;right: 3%;">
                        <i aria-hidden="true" class="icon icon-search11"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
