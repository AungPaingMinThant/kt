<link rel="stylesheet" href="{{ url('/css/header.css') }}" />
<div class="desktop_menu">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 desktop_logo_div">
				<a href="{{url('/')}}" class="navbar-brand" style="padding: 22px 0px 20px 4px;display: table-cell;vertical-align: middle;">
					<img src="{{ url('/images/logo_wo_tagline_2.webp') }}" class="img-fluid desktop_logo" alt="AYA Bank" width="532px" height="114px">
				</a>
			</div>
			<div class="col-md-9 text-right">
				<div class="row">
					<div class="col-md-12 text-right">
						<ul class="menu" style="display: flex;list-style: none;float: right;margin-bottom: 1rem;margin-top: 1rem;">
							<li class="nav-item">
								<a class="nav-link" href="https://ibankapp.ayabank.com/" target="_blank">
									<img src="{{ url('/images/register_icon.webp') }}" alt="AYA Bank, IBanking Register" class="img-fluid" width="13px" height="14px">&nbsp;Register
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="https://www.ayaibanking.com/ibLogin.aspx" target="_blank">
									<img src="{{ url('/images/login_icon.webp') }}" alt="AYA Bank, IBanking Login" class="img-fluid" width="13px" height="14px">&nbsp;Login
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
								<a class="nav-link header-main-menu active" aria-current="page" href="{{ url('/') }}">Home</a>
							</li>
							@if($page == 'personal_banking')
								<li class="nav-item personal-banking-li active">
							@else
								<li class="nav-item personal-banking-li">
							@endif
								<span class="nav-link header-main-menu">Personal Banking</span>
								<div class="personal-dropdown-content">
									<div class="row" style="width: 100%;">
										<div class="col-md-4 left-menu-div">
											<div class="row menu-link personal-menu-ac-sav-link menu-active ">
												<span>ACCOUNTS AND SAVINGS</span>
											</div>
											<div class="row menu-link personal-menu-borrow-link">
												<span>BORROWING</span>
											</div>
											<div class="row menu-link personal-menu-remit-link">
												<span>REMITTANCE AND PAYMENTS</span>
											</div>
											<div class="row menu-link personal-menu-premium-link">
												<span>ROYAL BANKING</span>
											</div>
											<div class="row menu-link personal-menu-ins-link">
												<span>INSURANCE</span>
											</div>
											<div class="row menu-link personal-menu-other-link">
												<span class="other-menu">OTHER SERVICES</span>
											</div>

											<div class="space-60"></div>
										</div>
										<div class="col-md-7 right-menu-div">
											<p class="menu_label">PERSONAL BANKING</p>
											<div class="personal-menu-links personal-acc-sav-menu">
												<div class="row">
													<div class="col">
														<p class="fw-bold">
															<a href="{{ url('/personal-banking/account-saving/saving-deposit') }}">SAVING DEPOSIT</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-regular-saving') }}">AYA Regular Saving</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-maximizer-saving') }}">AYA Maximizer Saving</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-loyal-saving') }}">AYA Loyal Saving</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/saving-deposit/ngwe-toe-mae-shwe-o') }}">Ngwe Toe Mae-Shwe O</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-su-buu') }}">AYA Su-Buu</a>
														</p>
													</div>
													<div class="col-md-4">
														<p class="fw-bold">
															<a href="{{ url('/personal-banking/account-saving/current-deposit') }}">CURRENT DEPOSIT</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/current-deposit/regular-current-account') }}">Regular Current Account</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/current-deposit/new-business-current-account') }}">New Business Current Account</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/current-deposit/seafarer-acount') }}">Seafarer Account (FCY)</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/current-deposit/retail-fca-current') }}">Retail FCA Current (FCY)</a>
														</p>
													</div>
												</div>
												<div class="row" style="margin-top: -35px;">
													<div class="col">
														<p class="fw-bold">
															<a href="{{ url('/personal-banking/account-saving/call-deposit') }}">CALL DEPOSIT</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/call-deposit/premium-call-deposit') }}">Premium Call Deposit</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/call-deposit/new-business-call') }}">New Business Call</a>
														</p>
													</div>
													<div class="col">
														<p class="fw-bold">
															FIXED DEPOSIT
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/account-saving/fixed-deposit') }}">Fixed Deposit</a>
														</p>
													</div>
												</div>
											</div>
											<div class="personal-menu-links personal-borrow-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															HIRE PURCHASE (PERSONAL)
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/borrowing/hire-purchase/auto-loan') }}">Auto Loan</a>
														</p>
														<!-- <p class="m-b-5">
															<a href="{{ url('/personal-banking/borrowing/hire-purchase/c2c-auto-loan') }}">C2C Auto Loan</a>
														</p> -->
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/borrowing/hire-purchase/education-loan') }}">Education Loan</a>
														</p>
														<!-- <p class="m-b-5">
															<a href="{{ url('/personal-banking/borrowing/hire-purchase/construction-loan') }}">Home Construction & Renovation (HCR) Loan</a>
														</p> -->
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/borrowing/hire-purchase/home-loan') }}">Home Loan</a>
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
															<a href="{{ url('/personal-banking/remittance/local') }}">Local Remittance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/remittance/international') }}">International Remittance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/remittance/payment') }}">Payments</a>
														</p>
													</div>
												</div>
											</div>
											<div class="personal-menu-links personal-premium-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="m-b-5 fw-bold">
															<a href="{{ url('/personal-banking/royal-banking') }}">Royal Banking</a>
														</p>
													</div>
												</div>
											</div>
											<div class="personal-menu-links personal-ins-menu d-none">
												<div class="row">
													<div class="col-md-12">
														<p class="fw-bold">
															<a href="{{ url('/personal-banking/insurance') }}">GENERAL INSURANCE</a>
														</p>
													</div>
													<div class="col-md-4">
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/health') }}">Health Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/motor') }}">Motor Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/fire') }}">Fire Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/personal-accident') }}">Personal Accident Insurance</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/travel/aya-go') }}">AYA Go Travel Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/travel/aya-joy') }}">AYA Joy Travel Insurance</a>
														</p>
													</div>
													<div class="space-20"></div>
													<div class="col-md-12">
														<p class="fw-bold">
															<a href="{{ url('/personal-banking/insurance/life') }}">LIFE INSURANCE</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/life/universal') }}">Universal Life Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/life/education') }}">Education Life Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/life/one-health-solution-individual-plan') }}">One Health Solution Individual Plan</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/life/short-term') }}">Short Term Endowment Life Insurance</a>
														</p>
													</div>
												</div>
											</div>
											<div class="personal-menu-links personal-other-menu d-none">
												<div class="row">
													<div class="col-md-5">
														<p class="fw-bold">
															<a href="{{ url('/personal-banking/other-services') }}">OTHER SERVICES</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/other-services/foreign-currency-exchange-service') }}">Foreign Currency Exchange Service</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/other-services/safe-deposit') }}"> Safe Deposit Locker</a>
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
								<span class="nav-link header-main-menu">Business Banking</span>
								<div class="business-dropdown-content">
									<div class="row" style="width: 100%;">
										<div class="col-md-4 left-menu-div">
											<div class="row menu-link business-menu-ac-sav-link menu-active ">
												<span>ACCOUNTS AND SAVINGS</span>
											</div>
											<div class="row menu-link business-menu-remit-link">
												<span>REMITTANCE AND PAYMENTS</span>
											</div>
											<div class="row menu-link business-menu-borrow-link">
												<span>BORROWING</span>
											</div>
											<div class="row menu-link business-menu-trade-link">
												<span>TRADE</span>
											</div>
											<div class="row menu-link business-menu-cash-management-link">
												<span>CASH MANAGEMENT</span>
											</div>
											<div class="row menu-link business-menu-ins-link">
												<span class="other-menu">INSURANCE</span>
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
															<a href="{{ url('/business/account-saving/saving-deposit') }}">Saving Deposit</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/account-saving/call-deposit') }}">Call Deposit</a>
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
															<a href="{{ url('/business/remittance-payments/local-payments') }}">Local Remittance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/remittance-payments/international-payments') }}">International Remittance</a>
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
														<p class="m-b-5">
															<a href="{{ url('/business/cash-management#payroll_service') }}">Payroll Service</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/cash-management#receivables_service') }}">Receivables Service</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/cash-management#bulk_payment_payables_services') }}">Bulk Payment (Payables Service)</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/cash-management#liquidity_service') }}">Liquidity Service</a>
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
															<a href="{{ url('/business/insurance/group-life') }}">Group Life Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/fire') }}">Fire Insurance</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/personal-banking/insurance/motor') }}">Motor Insurance</a>
														</p>
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
															<a href="{{ url('/business/insurance/industrial-all-risk') }}">Industrial All Risk Insurance (IAR)</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/business/insurance/car-ear') }}">Contractor’s All Risk & Erection All Risk (CAR & EAR) Insurance</a>
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
								<span class="nav-link header-main-menu">Digital Services</span>
								<div class="digital-dropdown-content">
									<div class="row" style="width: 100%;">
										<div class="col-md-4 left-menu-div">
											<div class="row menu-link digital-menu-online-pay-services-link menu-active ">
												<span>ONLINE PAYMENT SERVICES</span>
											</div>
											<div class="row menu-link digital-menu-card-services-link">
												<span>CARD SERVICES</span>
											</div>
											<div class="row menu-link digital-menu-atm-link">
												<span>ATM</span>
											</div>
											<div class="row menu-link digital-menu-wallet-solutions-link">
												<span>WALLET SOLUTION</span>
											</div>
											<div class="row menu-link digital-menu-guidlines-link">
												<span class="other-menu">GUIDELINE</span>
											</div>
											<div class="row menu-link ">
												<span class="other-menu">&nbsp;</span>
											</div>

											<div class="space-60"></div>
										</div>

										<div class="col-md-7 right-menu-div" style="height: 373px;">
											<p class="menu_label">DIGITAL SERVICES</p>
											<div class="digital-menu-links digital-online-pay-services-menu">
												<div class="row">
													<div class="col-12">
														<p class="fw-bold">
															<a href="{{ url('/digital-services/online-payment-services') }}">ONLINE PAYMENT SERVICES</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/digital-services/online-payment-services/internet-banking') }}">Internet Banking</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/digital-services/online-payment-services/mobile-banking') }}">Mobile Banking</a>
														</p>
														<!-- <p class="m-b-5">
															<a href="{{ url('/sms-alert') }}">SMS Alert</a>
														</p> -->
														<p class="m-b-5">
															<a href="{{ url('/digital-services/online-payment-services/corporate-internet-banking') }}">Corporate Internet Banking</a>
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
															<a href="{{ url('/digital-services/card-services/merchant-services/pos') }}">POS</a>
														</p>
														<p class="mb-20">
															<a href="{{ url('/digital-services/card-services/merchant-services/ecommerce') }}">E-commerce</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															CREDIT CARD
														</p>
														<p class="mb-20">
															<a href="{{ url('/digital-services/card-services/credit-card') }}">Credit Card</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															PREPAID CARD
														</p>
														<p class="m-b-5">
															<a href="{{ url('/digital-services/card-services/prepaid-card') }}">Prepaid Card</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															DEBIT CARD
														</p>
														<p class="mb-20">
															<a href="{{ url('/digital-services/card-services/debit-card') }}">Debit Card</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															CARD PRIVILEGE
														</p>
														<p class="m-b-5">
															<a href="{{ url('/digital-services/card-services/simple-pay') }}">Simple Pay</a>
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
															<a href="{{ url('/digital-services/atm') }}">ATM Service and Network</a>
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
															<a href="{{ url('/digital-services/wallet-solution/aya-pay') }}">AYA Pay</a>
														</p>
													</div>
												</div>
											</div>
											<div class="digital-menu-links digital-guidlines-menu d-none">
												<div class="row">
													<div class="col-12">
														<p class="fw-bold">
															GUIDELINE
														</p>
														<p class="m-b-5">
															<a href="{{ url('/digital-services/guideline/digital-secure') }}">Security Advices for Digital Services</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/digital-services/guideline/frequently-used-digital') }}">Frequently Used Digital Services</a>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							@if($page == 'about_aya')
								<li class="nav-item about-aya-li active">
							@else
								<li class="nav-item about-aya-li">
							@endif
								<span class="nav-link header-main-menu">About AYA</span>
								<div class="about-aya-dropdown-content">
									<div class="row" style="width: 100%;">
										<div class="col-md-4 left-menu-div">
											<div class="row menu-link about-aya-menu-who-we-are-link menu-active">
												<span>WHO WE ARE</span>
											</div>
											<div class="row menu-link about-aya-menu-governance-link">
												<span>GOVERNANCE</span>
											</div>
											<div class="row menu-link about-aya-menu-newsroom-link">
												<span>NEWSROOM</span>
											</div>
											<div class="row menu-link">
												<span class="other-menu">&nbsp;</span>
											</div>
											<div class="row menu-link">
												<span class="other-menu">&nbsp;</span>
											</div>
											<div class="row menu-link">
												<span class="other-menu">&nbsp;</span>
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
															<a href="{{ url('/about-aya/who-we-are/corporate-profile/ayabank-profile') }}">AYA Bank Profile</a>
														</p>
														<p class="mb-30">
															<a href="{{ url('/about-aya/who-we-are/corporate-profile/mission-corporate-value-brand-promise') }}">Mission, Corporate Values and Brand Promise</a>
														</p>
														<p class="d-none m-b-5">
															<a href="http://saltnpixel.com/AYABank/AYABank_CorporateGoal.html" target="_blank">Corporate Goals</a>
														</p>
														<p class="d-none ">
															<a href="https://saltnpixel.com/AYABank/AYABank_CorporateMilestone.html" target="_blank">Corporate Milestones</a>
														</p>
														<p class="d-none mb-20">
															<a href="https://saltnpixel.com/AYABank/AYABank_Awards.html" target="_blank">Awards</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															LEADERSHIP
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/message-from-chairman') }}" >Message From Chairman</a>
														</p>
														<p class="mb-20">
															<a href="{{ url('/about-aya/who-we-are/leadership/meet-our-leaders') }}" >Meet Our Leaders</a>
														</p>
														<p class="fw-bold d-none">
															What We Offer
														</p>
														<p class="mb-30 d-none">
															<a href="https://saltnpixel.com/AYABank/AYABank_WhyUs.html" target="_blank">Why us</a>
														</p>
													</div>
													<div class="col-md-5">
														<p class="fw-bold">
															OUR STRATEGIES
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/who-we-are/our-strategies/corporate-strategy') }}">Corporate Strategy</a>
														</p>
														<p class="m-b-5 d-none">
															<span>Business Model</span>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/who-we-are/our-strategies/stakeholder-management') }}" >Stakeholder Management</a>
														</p>
													</div>
													<div class="col-md-5">
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
															<span>Life at AYA</span>
														</p>
														<p class="m-b-5">
															<span>AYA Culture</span>
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_Employee_Development.html" target="_blank">Employee Development</a>
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_Career_Opportunities.html" target="_blank">Career Opportunities</a>
														</p>
													</div>
												</div>
											</div>
											<div class="about-aya-menu-links about-aya-governance-menu d-none">
												<div class="row">
													<div class="col-md-4">
														<p class="fw-bold">
															<a href="{{ url('/about-aya/governance/corporate-governance') }}">CORPORATE GOVERNANCE</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/corporate-governance#leadership') }}">Leadership</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/corporate-governance#governance-framework') }}">Governance Framework</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/corporate-governance#board-committees') }}">Board Committees</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/corporate-governance#who-are-on-the-committees') }}">Who are on the Committees</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/corporate-governance#role-of-committees') }}">Role of Committees</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/corporate-governance#committee-meeting-attendance') }}">Committee Meeting & Attendance</a>
														</p>
														<p class="mb-20">
															<a href="{{ url('/about-aya/governance/corporate-governance#code-ethical-conduct') }}">Code of Ethical Conduct</a>
														</p>
													</div>
													<div class="col-md-4">
														<p class="fw-bold">
															COMPLIANCE
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/compliance') }}">Compliance</a>
														</p>
														<p class="mb-20">
															<a href="{{ url('/about-aya/governance/compliance/aml-cft') }}">Implementations of AML/CFT</a>
														</p>

														<p class="fw-bold">
															RISK MANAGEMENT
														</p>
														<p class="mb-30">
															<a href="{{ url('/about-aya/governance/risk-management') }}">Risk Management</a>
														</p>
													</div>
													<div class="col-md-4">
														<p class="fw-bold">
															<a href="{{ url('/about-aya/governance/corporate-policies') }}">CORPORATE POLICIES</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/corporate-policies#people_concerns') }}">People Conerns</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/corporate-policies#corporate_affairs') }}">Corporate Affairs</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/corporate-policies#compliance_matters') }}">Compliance Matters</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/corporate-policies#creditors_rights') }}">Creditor's Rights</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/governance/corporate-policies#finance_dealings') }}">Finance Dealings</a>
														</p>
														<p class="mb-20">
															<a href="{{ url('/about-aya/governance/corporate-policies#digital_channels') }}">Digital Channels</a>
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
															<span>Our Commitment</span>
														</p>
														<p class="m-b-5">
															<a href="https://saltnpixel.com/AYABank/AYABank_UNGC_Commitment.html" target="_blank">UNGC Commitment</a>
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
															<a href="{{ url('/about-aya/news-room/corporate-news/') }}">Corporate News</a>
														</p>
														<p class="m-b-5">
															<a href="{{ url('/about-aya/news-room/reports') }}">Reports</a>
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
															<span>Correspondent Banks</span>
														</p>
														<p class="m-b-5">
															<span>Branch Locations</span>
														</p>
														<p class="m-b-5">
															<span>FX Locations</span>
														</p>
														<p class="m-b-5">
															<span>ATM Locations</span>
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<!--<li class="nav-item">-->
							<!--	<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchBox" >-->
							<!--		<span class="tf-icons bx bx-search"></span>-->
							<!--	</a>-->
							<!--</li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-default mobile_menu">
    <div class="container-fluid">
        <div class="navbar-header" style="padding: 10px 0px;">
            <button type="button" class="navbar-toggle collapsed" data-toggle="slide-collapse" data-target="#slide-navbar-collapse" aria-expanded="false" aria-label="AYA Bank" style="margin-right: 30px;background-color: transparent;border: 1px solid #fff;border-radius: 5px;color: #fff;">
                <span class="tf-icons bx bx-menu" style="font-size: 30px;color: #c1c1c1;"></span>
            </button>
            <a href="{{url('/')}}"><img alt="AYA BANK" src="{{ url('/images/logo_wo_tagline_2.webp') }}" class="img-fluid mobile_logo" width="236px" height="51px"></a>
        </div>

        <div class="collapse navbar-collapse" id="slide-navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active" style="padding: 20px;">
                    <a href="{{url('/')}}"><img src="{{url('/images/logo_wo_tagline_2.webp')}}" alt="AYA BANK" class="img-fluid" style="width: 50%"></a>
                    <button class="elementskit-menu-close elementskit-menu-toggler" id="navbar_close" type="button" style="float: right;border: 1px solid rgba(0,0,0,.5);color: rgba(51,51,51,.5);padding: 5px 10px 5px 10px;border-radius: 5px;">X</button>
                </li>
                <li style="height: 20px;"></li>
                <li style="padding: 10px 0px;">
                	@if($page == 'home')
                		<a href="{{ url('/') }}" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #A5000B;">HOME</a>
                	@else
                		<a href="{{ url('/') }}" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">HOME</a>
                	@endif
                </li>

                <li class="personal-banking-li" style="padding: 10px 0px;position: relative;">
                	@if($page == 'personal_banking')
                    	<span class="dropdown-toggle menu_link" style="color: #A5000B;padding-right: 140px !important;">
                    @else
                    	<span class="dropdown-toggle menu_link" style="color: #222222;padding-right: 140px !important;">
                    @endif
                    	PERSONAL BANKING &nbsp; <i class="menu-icon tf-icons bx bx-chevron-down" style="float: right;"></i>
                    </span>
                    <div class="col-12 personal-dropdown-content left-menu-div" style="display: none;">
						<div class="row nav-item dropdown menu-link personal-menu-ac-sav-link">
							<span class="nav-link" href="javascript:void(0)" id="PAnavbarDropdown" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACCOUNTS AND SAVINGS</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-3">
										<a href="{{ url('/personal-banking/account-saving/saving-deposit') }}">SAVING DEPOSIT</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-regular-saving') }}">AYA Regular Saving</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-maximizer-saving') }}">AYA Maximizer Saving</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-loyal-saving') }}">AYA Loyal Saving</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/saving-deposit/ngwe-toe-mae-shwe-o') }}">Ngwe Toe Mae-Shwe O</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/saving-deposit/aya-su-buu') }}">AYA Su-Buu</a>
									</p>
								</li>

								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-3">
										<a href="{{ url('/personal-banking/account-saving/current-deposit') }}">CURRENT DEPOSIT</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/current-deposit/regular-current-account') }}">Regular Current Account</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/current-deposit/new-business-current-account') }}">New Business Current Account</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/current-deposit/seafarer-acount') }}">Seafarer Account (FCY)</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/current-deposit/retail-fca-current') }}">Retail FCA Current (FCY)</a>
									</p>
								</li>

								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-3">
										<a href="{{ url('/personal-banking/account-saving/call-deposit') }}">CALL DEPOSIT</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/call-deposit/premium-call-deposit') }}">Premium Call Deposit</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/call-deposit/new-business-call') }}">New Business Call</a>
									</p>
								</li>

								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-3">
										FIXED DEPOST
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/personal-banking/account-saving/fixed-deposit') }}">Fixed Deposit</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link personal-menu-borrow-link">
							<span class="nav-link" data-bs-toggle="dropdown"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BORROWING</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-3">
										HIRE PURCHASE (PERSONAL)
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/borrowing/hire-purchase/auto-loan') }}">Auto Loan</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/borrowing/hire-purchase/education-loan') }}">Education Loan</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/personal-banking/borrowing/hire-purchase/home-loan') }}">Home Loan</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link personal-menu-remit-link">
							<span class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">REMITTANCE AND PAYMENTS</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 ">
										<a href="{{ url('/personal-banking/remittance/local') }}">Local Remittance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 ">
										<a href="{{ url('/personal-banking/remittance/international') }}">International Remittance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 ">
										<a href="{{ url('/personal-banking/remittance/payment') }}">Payments</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link personal-menu-premium-link">
							<a class="nav-link royal-banking-mobile" href="{{ url('/personal-banking/royal-banking') }}" >ROYAL BANKING</a>
						</div>
						<div class="row menu-link personal-menu-ins-link">
							<span class="nav-link" href="javascript:void(0)" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">INSURANCE</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-3">
										GENERAL INSURANCE
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20 mt-2">
										<a href="{{ url('/personal-banking/insurance/health') }}">Health Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/insurance/motor') }}">Motor Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/insurance/fire') }}">Fire Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/insurance/personal-accident') }}">Personal Accident Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20 m-l-20">
										<a href="{{ url('/personal-banking/insurance/travel/aya-go') }}">AYA Go Travel Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-l-20 mb-20">
										<a href="{{ url('/personal-banking/insurance/travel/aya-joy') }}">AYA Joy Travel Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-3">
										LIFE INSURANCE
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/insurance/life/universal') }}">Universal Life Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/insurance/life/education') }}">Education Life Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/personal-banking/insurance/life/one-health-solution-individual-plan') }}">One Health Solution Individual Plan</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/personal-banking/insurance/life/short-term') }}">Short Term Endowment Life Insurance</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link personal-menu-other-link">
							<span class="other-menu nav-link" href="javascript:void(0)" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">OTHER SERVICES</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<a href="{{ url('/personal-banking/other-services/foreign-currency-exchange-service') }}">Foreign Currency Exchange Service</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/personal-banking/other-services/safe-deposit') }}"> Safe Deposit Locker</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
                </li>
                
                <li class="business-banking-li" style="padding: 10px 0px;position: relative;">
                    <span class="dropdown-toggle menu_link" style="color: #222222;padding-right: 140px !important;">BUSINESS BANKING &nbsp; <i class="menu-icon tf-icons bx bx-chevron-down" style="float: right;"></i></span>

                    <div class="col-12 business-dropdown-content left-menu-div" style="display: none;">
						<div class="row nav-item dropdown menu-link business-menu-ac-sav-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ACCOUNTS AND SAVINGS</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<a href="{{ url('/business/account-saving/saving-deposit') }}">Saving Deposit</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/business/account-saving/call-deposit') }}">Call Deposit</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/business/account-saving/current-deposit') }}">Current Deposit</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20">
										<a href="{{ url('/business/account-saving/fixed-deposit') }}">Fixed Deposit</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link business-menu-remit-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">REMITTANCE AND PAYMENTS</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<a href="{{ url('/business/remittance-payments/local-payments') }}">Local Remittance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20">
										<a href="{{ url('/business/remittance-payments/international-payments') }}">International Remittance</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link business-menu-borrow-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">BORROWING</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<a href="{{ url('/business/borrowing/corporate-business-loan') }}">Corporate Business Loan</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/business/borrowing/hire-purchase') }}">Hire Purchase</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20">
										<a href="{{ url('/business/borrowing/sme') }}">SME</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link business-menu-trade-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TRADE</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<a href="{{ url('/business/trade/trade-financing') }}">Trade Financing</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20">
										<a href="{{ url('/business/trade/trade-services') }}">Trade Services</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link business-menu-cash-management-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CASH MANAGEMENT</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<a href="{{ url('/business/cash-management#payroll_service') }}">Payroll Service</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/business/cash-management#receivables_service') }}">Receivables Service</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/business/cash-management#bulk_payment_payables_services') }}">Bulk Payment (Payables Service)</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20">
										<a href="{{ url('/business/cash-management#liquidity_service') }}">Liquidity Service</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link business-menu-ins-link">
							<span class="other-menu nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">INSURANCE</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<a href="{{ url('/business/insurance/group-life') }}">Group Life Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/personal-banking/insurance/fire') }}">Fire Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/personal-banking/insurance/motor') }}">Motor Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/business/insurance/domestic-marine-cargo') }}">Domestic Marine Cargo Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/business/insurance/oversea-marine-cargo') }}">Oversea Marine Cargo Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/business/insurance/domestic-inland-transit') }}">Domestic Inland Transit Insurance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/business/insurance/industrial-all-risk') }}">Industrial All Risk Insurance (IAR)</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20">
										<a href="{{ url('/business/insurance/car-ear') }}">Contractor’s All Risk & Erection <br>All Risk (CAR & EAR) Insurance</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
                </li>
                <li class="digital-services-li" style="padding: 10px 0px;position: relative;">
                    <span class="dropdown-toggle menu_link" style="color: #222222;padding-right: 140px !important;">DIGITAL SERVICES &nbsp; <i class="menu-icon tf-icons bx bx-chevron-down" style="float: right;"></i></span>

                    <div class="col-12 digital-dropdown-content left-menu-div" style="display: none;">
						<div class="row nav-item dropdown menu-link business-menu-ac-sav-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ONLINE PAYMENT SERVICES</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<a href="{{ url('/digital-services/online-payment-services/internet-banking') }}">Internet Banking</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="{{ url('/digital-services/online-payment-services/mobile-banking') }}">Mobile Banking</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20">
										<a href="{{ url('/digital-services/online-payment-services/corporate-internet-banking') }}">Corporate Internet Banking</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link business-menu-remit-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CARD SERVICES</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-2">
										MERCHANT SERVICES
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/digital-services/card-services/merchant-services/pos') }}">POS</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/digital-services/card-services/merchant-services/ecommerce') }}">E-commerce</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-2">
										DEBIT CARD
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/digital-services/card-services/debit-card') }}">Debit Card</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-2">
										CREDIT CARD
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/digital-services/card-services/credit-card') }}">Credit Card</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-2">
										PREPAID CARD
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/digital-services/card-services/prepaid-card') }}">Prepaid Card</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-2">
										CARD PRIVILEGE
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/digital-services/card-services/simple-pay') }}">Simple Pay</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link business-menu-borrow-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ATM</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item mb-20 mt-2">
										<a href="{{ url('/digital-services/atm') }}">ATM Service and Network</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link business-menu-trade-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WALLET SOLUTION</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item mb-20 mt-2">
										<a href="{{ url('/digital-services/wallet-solution/aya-pay') }}">AYA Pay</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link business-menu-cash-management-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GUIDELINE</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<a href="{{ url('/digital-services/guideline/digital-secure') }}">Security Advices for Digital Services</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20">
										<a href="{{ url('/digital-services/guideline/frequently-used-digital') }}">Frequently Used Digital Services</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
                </li>
                <li class="about-aya-li" style="padding: 10px 0px;position: relative;">
                    <span class="dropdown-toggle menu_link" style="color: #222222;padding-right: 140px !important;">ABOUT AYA &nbsp; <i class="menu-icon tf-icons bx bx-chevron-down" style="float: right;"></i></span>

                    <div class="col-12 about-aya-dropdown-content left-menu-div" style="display: none;">
						<div class="row nav-item dropdown menu-link about-aya-menu-who-we-are-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WHO WE ARE</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-2">
										CORPORATE PROFILE
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/who-we-are/corporate-profile/ayabank-profile') }}">AYA Bank Profile</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20 mb-20">
										<a href="{{ url('/about-aya/who-we-are/corporate-profile/mission-corporate-value-brand-promise') }}">Mission, Corporate Values and <br>Brand Promise</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-2">
										LEADERSHIP
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/message-from-chairman') }}" >Message From Chairman</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/about-aya/who-we-are/leadership/meet-our-leaders') }}" >Meet Our Leaders</a>
									</p>
								</li>
								<li class="d-none">
									<p class="dropdown-item fw-bold m-b-5">
										What We Offer
									</p>
								</li>
								<li class="d-none">
									<p class="dropdown-item m-l-20 mb-20">
										<a href="https://saltnpixel.com/AYABank/AYABank_WhyUs.html" target="_blank">Why us</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-2">
										OUR STRATEGIES
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/who-we-are/our-strategies/corporate-strategy') }}">Corporate Strategy</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-l-20 mb-20">
										<a href="{{ url('/about-aya/who-we-are/our-strategies/stakeholder-management') }}" >Stakeholder Management</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="d-none row menu-link about-aya-menu-career-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CAREER</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<span >Life at AYA</span>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<span >AYA Culture</span>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<a href="https://saltnpixel.com/AYABank/AYABank_Employee_Development.html" target="_blank">Employee Development</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20">
										<a href="https://saltnpixel.com/AYABank/AYABank_Career_Opportunities.html" target="_blank">Career Opportunities</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link about-aya-menu-governance-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GOVERNANCE</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-2">
										<a href="{{ url('/about-aya/governance/corporate-governance') }}" target="_blank">CORPORATE GOVERNANCE</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-governance#leadership') }}">Leadership</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-governance#governance-framework') }}">Governance Framework</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-governance#board-committees') }}">Board Committees</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-governance#who-are-on-the-committees') }}">Who are on the Committees</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-governance#role-of-committees') }}">Role of Committees</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-governance#committee-meeting-attendance') }}">Committee Meeting & Attendance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-governance#code-ethical-conduct') }}">Code of Ethical Conduct</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5">
										COMPLIANCE
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/compliance') }}">Compliance</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/about-aya/governance/compliance/aml-cft') }}">Implementations of AML/CFT</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5">
										RISK MANAGEMENT
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/about-aya/governance/risk-management') }}">Risk Management</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-2">
										<a href="{{ url('/about-aya/governance/corporate-policies') }}" target="_blank">CORPORATE POLICIES</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-policies#people_concerns') }}">People Conerns</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-policies#corporate_affairs') }}">Corporate Affairs</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-policies#compliance_matters') }}">Compliance Matters</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-policies#creditors_rights') }}">Creditor's Rights</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-policies#finance_dealings') }}">Finance Dealings</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="{{ url('/about-aya/governance/corporate-policies#digital_channels') }}">Digital Channels</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="d-none row menu-link about-aya-menu-sustainability-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SUSTAINABILITY</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item fw-bold m-b-5 mt-2">
										<a href="https://saltnpixel.com/AYABank/AYABank_Sustainability.html" target="_blank">SUSTAINABILITY</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<span>Our Commitment</span>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<a href="https://saltnpixel.com/AYABank/AYABank_UNGC_Commitment.html" target="_blank">UNGC Commitment</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5">
										OUR APPROACH
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<span>Social Sustainability</span>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5 m-l-20">
										<span>Environment Sustainability</span>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<span>Economic Sustainability</span>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5">
										AVENUE TO SUSTAIN
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<span>Non-financial performance</span>
									</p>
								</li>
								<li>
									<p class="dropdown-item fw-bold m-b-5">
										CORPORATE SOCIAL RESPONSIBILITY
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20 m-l-20">
										<span>Corporate Social Responsibility</span>
									</p>
								</li>
							</ul>
						</div>
						<div class="row menu-link about-aya-menu-newsroom-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NEWSROOM</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<a href="{{ url('/about-aya/news-room/corporate-news/') }}">Corporate News</a>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20">
										<a href="{{ url('/about-aya/news-room/reports') }}">Reports</a>
									</p>
								</li>
							</ul>
						</div>
						<div class="d-none row menu-link about-aya-menu-network-link">
							<span class="nav-link" data-bs-toggle="dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NETWORK</span>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li>
									<p class="dropdown-item m-b-5 mt-2">
										<span>Correspondent Banks</span>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<span>Branch Locations</span>
									</p>
								</li>
								<li>
									<p class="dropdown-item m-b-5">
										<span>FX Locations</span>
									</p>
								</li>
								<li>
									<p class="dropdown-item mb-20">
										<span>ATM Locations</span>
									</p>
								</li>
							</ul>
						</div>
					</div>
                </li>
                <li style="padding: 10px 0px;">
                    <span href="https://ibankapp.ayabank.com/" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">REGISTER</span>
                </li>
                <li style="padding: 10px 0px;">
                    <span href="https://www.ayaibanking.com/ibLogin.aspx" class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">LOGIN</span>
                </li>
                <!-- <li style="padding: 10px 0px;">
                    <span class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">ENGLISH</span>
                </li>
                <li style="padding: 10px 0px;">
                    <span class="dropdown-toggle menu_link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #222222;">MYANMAR</span>
                </li> -->
     <!--           <li style="padding: 10px 15px;">-->
     <!--               <span class="nav-link" data-bs-toggle="modal" data-bs-target="#searchBox" >-->
					<!--	<span class="tf-icons bx bx-search"></span>-->
					<!--</span>-->
     <!--           </li>-->
            </ul>
            
        </div>
    </div>
</nav>

<div class="modal fade" id="searchBox" tabindex="-1" role="dialog" aria-labelledby="searchBoxLabel" aria-hidden="true" style="background-color: #0a0a0ab8">
    <div class="modal-dialog" id="searchModalDialog" role="document" style="background-color: transparent;top: 39%;">
        <div class="modal-content" style="background-color: transparent;border-color: transparent;box-shadow: none !important;">
            <div class="modal-body" style="padding-right: 0px;">
                <form role="search" method="get" class="ekit-search-group" >
                    <input type="search" id="search_txt" class="ekit_search-field" placeholder="Search..." value="" name="s">
                    <button type="submit" class="ekit_search-button" style="background-color: transparent;border: none;color: #fff;position: absolute;top: 40%;right: 3%;">
                        <i aria-hidden="true" class="icon icon-search11"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>