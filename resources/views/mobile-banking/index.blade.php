@extends('layouts.frontend-app')

@section('title', 'mBanking – AYA Bank')
<style type="text/css">
	.outer_benefit_box {
		/*padding: 0px 20px 0px 20px !important;
		margin-bottom: 20px;*/
		padding: 20px !important;
		border: 1px solid #dedede;
		border-radius: 10px;
		margin-bottom: 20px;
		margin-top: 40px;
	}
	.why_use_AYA_outer > .col-md-6 {
		width: 48%;
	}
	@media only screen and (max-width: 576px){
		.why_use_AYA_outer > .col-md-6 {
			width: 100%;
		}
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'mobilebanking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'mobilebanking'])

			<div class="container section_1" >
				@include('layouts.tagline', ['page'=>'mobilebanking'])
				<div class="row">
					<div class="col-md-12 text-center">
						<h3 style="color: #1d1d1f;">Why Use AYA Mobile Banking?</h3>
					</div>
				</div>
				<div class="space-40"></div>
				<div class="row">
					<div class="col-md-7">
						<div class="row why_use_AYA_outer" style="column-gap: 20px;">
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row  simple_login_div">
									<img src="{{ url('/images/simple_login.png') }}" class="img-fluid" style="width: 91px;">
									<p style="font-weight: 600;margin-top: 1rem;">Simple Login</p>
									<p style="color: #4e4e4e;">AYA mobile banking app offers you to login using password or Face ID or Touch ID.</p>
								</div>
							</div>
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row quick_div">
									<img src="{{ url('/images/quick_check_balance.png') }}" class="img-fluid" style="width: 91px;">
									<p style="font-weight: 600;margin-top: 1rem;">Quickly Check Your Balance</p>
									<p style="color: #4e4e4e;">You can check your account balances and transaction history on your mobile device with just a finger tap.</p>
								</div>
							</div>
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row manage_credit_div">
									<img src="{{ url('/images/manage_credit.png') }}" class="img-fluid" style="width: 91px;">
									<p style="font-weight: 600;margin-top: 1rem;">Manage Credit</p>
									<p style="color: #4e4e4e;">Easily check your credit card’s transaction history, balance, limit and make repayments. Mobile app provides convenient card controls to disable your credit card if you've lost/stolen and enable it once you find it.</p>
								</div>
							</div>
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row prepaid_card_div">
									<img src="{{ url('/images/prepaid_cards.png') }}" class="img-fluid" style="width: 91px;">
									<p style="font-weight: 600;margin-top: 1rem;">Prepaid Cards</p>
									<p style="color: #4e4e4e;">Simple loading of AYA Visa Prepaid card on mobile app. You can top-up card and make balance enquiry from your mobile banking.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 text-center d-none d-sm-block" style="padding-top: 20px;">
						<img src="{{ url('/images/simple_login_mockup.png') }}" class="img-fluid" id="simple_login_mockup" style="width: 75%;">
						<img src="{{ url('/images/quick_check_balance_mockup.png') }}" class="img-fluid" id="quick_mockup" style="width: 75%;display: none;">
						<img src="{{ url('/images/simple_login_mockup.png') }}" class="img-fluid" id="manage_credit_mockup" style="width: 75%;display: none;">
						<img src="{{ url('/images/simple_login_mockup.png') }}" class="img-fluid" id="prepaid_card_mockup" style="width: 75%;display: none;">
					</div>
				</div>

				<div class="row">
					<div class="col-md-5 text-center d-none d-sm-block" style="padding-top: 20px;">
						<img src="{{ url('/images/secure_transaction_mockup.png') }}" class="img-fluid" id="secure_transaction_mockup" style="width: 75%;">
						<img src="{{ url('/images/easy_transfer_payment_mockup.png') }}" class="img-fluid" id="easy_transfer_payment_mockup" style="width: 75%;display: none;">
						<img src="{{ url('/images/simple_login_mockup.png') }}" class="img-fluid" id="ATM_withdrawal_mockup" style="width: 75%;display: none;">
					</div>
					<div class="col-md-7">
						<div class="row why_use_AYA_outer" style="column-gap: 20px;">
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row secure_transaction_div">
									<img src="{{ url('/images/secure_transaction.png') }}" class="img-fluid" style="width: 91px;">
									<p style="font-weight: 600;margin-top: 1rem;">Secure Transactions</p>
									<p style="color: #4e4e4e;">Keep your transactions secure with additional authentication via “OTP token” or “SMS OTP” and <a href="{{ url('/sms-alert') }}" style="text-decoration: underline;">get notified</a> when money goes in or out of your account.</p>
								</div>
							</div>
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row easy_transfer_payment_div">
									<img src="{{ url('/images/easy_transfer_payment.png') }}" class="img-fluid" style="width: 91px;">
									<p style="font-weight: 600;margin-top: 1rem;">Easy Transfer and Payments</p>
									<p style="color: #4e4e4e;">Move money between your AYA Bank accounts, send money to friends, family and others, foreign exchange transfer, make payments for bills, tax, AYA credit cards, top-up mobiles and QR payments.</p>
								</div>
							</div>
							<div class="col-md-6 outer_benefit_box why_use_AYA">
								<div class="row ATM_withdrawal_div">
									<img src="{{ url('/images/ATM_withdrawal.png') }}" class="img-fluid" style="width: 91px;">
									<p style="font-weight: 600;margin-top: 1rem;">ATM Withdrawal</p>
									<p style="color: #4e4e4e;">You can withdraw money at any AYA ATM without your bank card by initiating ATM cardless withdrawal straight. </p>
								</div>
							</div>
							<div class="col-md-6" style="padding: 20px;">
								
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="d-block d-sm-none">
				<img src="{{ url('/images/how_to_apply_mobile.jpg') }}" class="img-fluid">
			</div>
			<div style="background-image: url('./images/how_to_apply.jpg');background-size: cover;">
				<div class="container how_to_apply_section" style="">
					<div class="row">
						<div class="col-md-6 how_to_apply_desc" style="">
							<p style="color: #1d1d1f;font-weight: 600;font-size: 30px;margin-bottom: 1.5rem;">How to Apply</p>
							<p style="margin-bottom: 1.5rem;">You can easily register AYA Mobile Banking Service at any AYA Branches. Alternatively, you can apply online here. Our application is available to personal and business banking customers. You will need iOS or Android devices.</p>

							<a href="https://ibankapp.ayabank.com" style=""><button class="btn" style="background-color: #ae071d;color: #fff;padding: 15px 25px;border: #ae071d;margin-bottom: 2rem;">Apply Now</button></a>

							<p style="color: #a02225;font-weight: 500;font-size: 25px;margin-bottom: 5px;">Download the APP Now</p>

							<p style="color: #666;font-weight: 400;">On your mobile or tablet, download AYA Mobile Bankng here.</p>

							<a href="http://bit.ly/ayambankingios"><img src="{{ url('/images/apple.png') }}" class="img-fluid" style="width: 30%;margin-right: 20px;"></a>
							<a href="http://bit.ly/ayambankingandriod"><img src="{{ url('/images/google.png') }}" class="img-fluid" style="width: 35%"></a>
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
				</div>
			</div>
			<div class="space-40"></div>
			<div class="need_more_support_section">
				<div class="container d-none d-sm-block" style="padding: 40px 100px 60px 100px;background-image: url('./images/more_support.png');background-size: cover;border-radius: 6px;">
					<div class="row">
						<div class="col-md-5 col-xs-12 text-center" style="padding-top: 80px;">
							<p style="color: #a02225;font-weight: 500;font-size: 20px;margin-bottom: 5px;">Need more support?</p>
							<p style="font-weight:400;color: #4e4e4e;">Read our <a href="{{ url('/file/mBanking/mBanking version 2.2.5 User Guide (01 28042022) .pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">AYA Mobile banking 2.0 user guide</a></p>
							<div style="height: 70px;"></div>
						</div>
						<div class="col-md-7"></div>
					</div>
				</div>

				<div class="container d-block d-sm-none" style="padding: 40px 50px 60px 50px;background-color: #f5f5f5;border-radius: 10px;margin-bottom: 50px;">
					<div class="row">
						<div class="col-xs-12 text-center" style="padding-top: 20px;">
							<p style="color: #a02225;font-weight: 500;font-size: 20px;margin-bottom: 5px;">Need more support?</p>
							<p style="font-weight:400;color: #4e4e4e;">Read our <a href="{{ url('/file/mBanking/mBanking version 2.2.5 User Guide (01 28042022) .pdf') }}" target="_blank" style="text-decoration: underline;color: #4e4e4e;">AYA Mobile banking 2.0 user guide</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="container faq_section" style="">
				<div class="space-20"></div>
				<div class="row">
					<div class="col-md-12 text-center">
						<h3 style="color: #343434;font-weight: 600;">FAQs</h3>
					</div>
				</div>
				<div class="space-20"></div>
				<div class="row">
					<div class="accordion" id="accordionExample">
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingOne">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									How to apply AYA i-Banking / m-Banking ?
								</button>
							</h2>
							<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>To get i-Banking / m-Banking service that can be linked to your AYA Bank Account/Card Account, you can apply at nearest branch by filling AYA i-Banking / m-Banking Application form. You will need to bring only your saving book and NRC Card. Altnernatively, you can apply online at https://ibankapp.ayabank.com/ with your details without having to visit the branch. </p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingTwo">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Where can I download m-Banking application?
								</button>
							</h2>
							<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										On your mobile or tablet, you can download 'AYA m-Banking 2.0 Version' application at 'Play Store' for Android and 'Apple Store' for iOS.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingThree">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									What is the limit on i-Banking / m-Banking transfer?
								</button>
							</h2>
							<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										With AYA i-Banking, the maximum transaction limit for one transaction is MMK 50 million and a user can transfer up to MMK 150 million per day.
										<Br>
										With AYA m-Banking, the maximum transaction limit for one transaction is MMK 20 million and a user can transfer up to MMK 100 million per day.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFour">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									What should I do if I forgot my i-Banking / m-Banking password?
								</button>
							</h2>
							<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										In the event of forgetting your i-Banking / m-Banking password, you can either apply new password at nearest branch by bringing NRC Card and saving book (or) reset password yourself at m-Banking 2.0.
									</p>
								</div>
							</div>
						</div>
						<div class="accordion-item">
							<h2 class="accordion-header" id="headingFive">
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
									How do I change password in m-Banking? 
								</button>
							</h2>
							<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
								<div class="accordion-body">
									<p>
										You can change your m-Banking password by logging to AYA m-Banking application and accessing 'Change password' option under 'AYA m-Banking Settings' menu on the upper left corner of main page. New m-Banking password shall include capital letter, small letter, special letter (for example - @!#), and numbers (or) characters.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

<script type="text/javascript">
	$(".simple_login_div").click(function() {
		$("#simple_login_mockup").show(500);
		$("#quick_mockup").hide(500);
		$("#manage_credit_mockup").hide(500);
		$("#prepaid_card_mockup").hide(500);
	});
	$(".quick_div").click(function() {
		$("#simple_login_mockup").hide(500);
		$("#quick_mockup").show(500);
		$("#manage_credit_mockup").hide(500);
		$("#prepaid_card_mockup").hide(500);
	});
	$(".manage_credit_div").click(function() {
		$("#simple_login_mockup").hide(500);
		$("#quick_mockup").hide(500);
		$("#manage_credit_mockup").show(500);
		$("#prepaid_card_mockup").hide(500);
	});
	$(".prepaid_card_div").click(function() {
		$("#simple_login_mockup").hide(500);
		$("#quick_mockup").hide(500);
		$("#manage_credit_mockup").hide(500);
		$("#prepaid_card_mockup").show(500);
	});

	$(".secure_transaction_div").click(function() {
		$("#secure_transaction_mockup").show(500);
		$("#easy_transfer_payment_mockup").hide(500);
		$("#ATM_withdrawal_mockup").hide(500);
	});
	$(".easy_transfer_payment_div").click(function() {
		$("#secure_transaction_mockup").hide(500);
		$("#easy_transfer_payment_mockup").show(500);
		$("#ATM_withdrawal_mockup").hide(500);
	});
	$(".ATM_withdrawal_div").click(function() {
		$("#secure_transaction_mockup").hide(500);
		$("#easy_transfer_payment_mockup").hide(500);
		$("#ATM_withdrawal_mockup").show(500);
	});
</script>

@endsection('content')