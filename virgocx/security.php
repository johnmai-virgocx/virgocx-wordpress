<?php
/**
 * Template Name: Security page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Virgocx
 */

get_header();
?>

<style type="text/css">
#security-content .hero-area-wrapper {
	padding: 0 0 3rem 0;
	background-color: #f8f7fe;
	color: #66617f;
	background-image: url(/wp-content/themes/virgocx/img/bg.png);
	background-position: right;
	background-repeat: inherit;
	height: 400px;
}

#security-content .hero-area {
	position: relative;
}

.hero-box h2 {
	padding-left: 1rem;
	padding-right: 1rem;
}

.hero-box .col-4 h5 {
	height: 100px;
}
</style>

<div id="security-content">
	<div class="hero-area-wrapper">
		<div class="custom-container hero-area">
			<div class="hero-space">
			</div>
			<div class="hero-box">
				<div class="container">
					<div class="row justify-content-md-center">
							<h2>Safe trading Begins with Best-in-Class Security</h2>
					</div>

					<div class="row align-items-center">
						<div class="col-4 d-flex justify-content-center">
							<a data-scroll="page1" class="hero-feature-item" href="#personalinformation">
								<img src="<?= get_template_directory_uri() ?>/img/profile_man.png" class="img-fluid" alt="Personal information is secure" width="150" />
								<h5>Your information<br /> is secure</h5>
							</a>
						</div>

						<div class="col-4 d-flex justify-content-center">
							<a data-scroll="page2" class="hero-feature-item" href="#fund">
								<img src="<?= get_template_directory_uri() ?>/img/security_shield.png" class="img-fluid" alt="Personal information is secure" width="150" />
								<h5>Your Funds are<br /> secure</h5>
							</a>
						</div>

						<div class="col-4 d-flex justify-content-center">
							<a data-scroll="page3" class="hero-feature-item" href="#system">
								<img src="<?= get_template_directory_uri() ?>/img/security_gear.png" class="img-fluid" alt="Personal information is secure" width="150" />
								<h5>Our system is<br /> secure</h5>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

		<!-- rmain area start -->
		<div class="rmain security-rmain" id="page1">
			<div class="main-footer">
				<div class="container">
					<div class="main-footer-wrapper text-center text-white">
						<h2>Your personal Information is Secure</h2>
						<p>Ensuring the security of your transactions is our highest priority. That’s why we take specific measures to confirm your identity when signing-up and using our platform, as well as prompt client notification after certain activities have taken place on your trading account.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- rmain area end -->

		<!-- main3 start -->
		<div class="main3">
			<div class="container">
				<div class="main3-wrapper">
					<div class="row">
						<div class="col-lg-3">
							<div class="rmain-left">
								<ul>
									<li class="active"><a href="#" data-scroll="page1">Your Personal Information is Secure</a></li>
									<li><a href="#" data-scroll="page2">Your Funds are Secure</a></li>
									<li><a href="#" data-scroll="page3">Our System is Secure</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="main3-right">
								<div class="main3-text-one">
									<h5>Stringent Password Protection and Session Timeout Controls</h5>
<ul>
<li>2 Factor Authentication (2FA) is mandatory for all accounts for system login and password reset</li>
<li>Minimum password length and complexity</li>
<li>Session timeout after a period of inactivity</li>
<li>To reset your password we require you to access to both 2FA and your registered email. After multiple failed password attempts, your account is locked</li>
<li>SSL website encryption &nbsp;</li>
</ul>

<h5>KYC/AML (Know Your Client/Anti-Money Laundering)</h5>
<p>Our goal is to keep our onboarding simple, while protecting your safety and abiding by government regulations.</p>
<ul>
<li>Our KYC/AML process verifies your identity. As a Canadian digital asset trading platform, retail users must pass VirgoCX&rsquo;s strict KYC requirements</li>
<li>Proper KYC/AML also validates who you are and who you say you are so that someone else cannot claim to be you</li>
<li>Our clients can be onboarded manually, automatically or in-person &nbsp;</li>
</ul>

<h5>Data Encryption</h5>
<p>Sensitive information such as user password is encrypted within the internal system and multiple layers of security measures are in place to protect clients’ personal information so that no leakage of sensitive data can occur.</p>

<h5>Blockchain Forensics Analysis</h5>
<p>VirgoCX is integrated with a top digital currency risk management technology company that offers a variety of cryptocurrency AML/CFT compliance processes, risk scoring, and blockchain analytics. It flags questionable or illegitimate transactions by providing a verification rating to the Counterparty's address. </p>


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-footer main-footer-three" id="page2">
				<div class="container">
					<div class="main-footer-wrapper text-center text-white">
						<h2>Your Funds are Secure</h2>
						<p>We implement controls and measures to reduce or mitigate hacking risks associated with internet trading. We focus on digital currency protection and internal controls.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- main3 end -->

		<!-- main3 start -->
		<div class="main3">
			<div class="container">
				<div class="main3-wrapper">
					<div class="row">
						<div class="col-lg-3">
							<div class="rmain-left">
								<ul>
									<li><a href="#" data-scroll="page1">Your Personal Information is Secure</a></li>
									<li class="active"><a href="#" data-scroll="page2">Your Funds are Secure</a></li>
									<li><a href="#" data-scroll="page3">Our System is Secure</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="main3-right">
								<div class="main3-text-one">
									<h5>Digital Currency Protection</h5>

<p>VirgoCX enforces institutional-grade control on all transactions. When a client deposits crypto onto the platform, a small portion stays on the platform in a hot wallet for regular business trading and withdrawals. The majority of crypto on the platform is automatically transferred to the cold wallet powered by the Ledger Vault. </p>
<p>Cold Storage Protection</p>
<p>Storing digital currency safely and securely for our retail and institutional clients are key priorities for us. At least 95% of VirgoCX’s digital currencies are held in cold storage. We use the state-of-the art technology platform of Ledger Vault to safeguard digital currencies for end-point security. Ledger Vault’s insurance provider covers up to $150 million for third-party theft, insider collusion and master seed theft that occurs on Ledger’s side. As we grow and scale, we need more than an advanced hardware wallet, we need a solution to help us reduce operational risk, external breaches and enhanced oversight.</p>

<p>Banking and Access to Your Funds</p>
<p>Trading with confidence requires your funds to be safe and accessible with strong banking relationships. VirgoCX uses direct banking services for fund transfers and is one of the few digital asset trading platforms in Canada with direct and multiple banking relationships.</p>

<p>Our unique position with  impeccable KYC/AML compliance procedures, iron clad internal processes and cyber security practices have opened doors to diversified banking services. </p>

<p>All fiat (Canadian and US dollar) funds are held in trusted top tier Banks in Canada. VirgoCX has CDIC insured segregated banking in Canada with multiple banks. All deposits are held at the bank level. Clients retain and control the ownership of their assets. All funds are held for the benefit of the client. </p>

<h5> Internal Controls</h5>
<p> Cryptocurrency Disaster Recovery Plan</p>
<p>In the event that members of the management team are unable to access funds, the Cryptocurrency Disaster Recovery Plan is triggered. VirgoCX has designed a disaster recovery plan that removes key-man risk entirely. </p>

<p>External Audits</p>

<p>VirgoCX maintains the highest standard of legal compliance, business conduct and ethics that permit us to attract the best-in-class banking relationships. Auditing is the single best governance tool to ensure compliance with regulations, building systems to prevent theft, detect and limit fraud, and verify that customer’s funds are properly held. Our first independent and cryptographically-verified compliance and financial audits are scheduled to take place in spring 2020.</p>

<p>Internal Fund Management Controls</p>

<p>VirgoCX has multi-authorization mechanisms in place, where both crypto and fiat transfers would need multiple levels of approval. This largely eliminates the internal threats and unlawful collusion. </p>



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-footer main-footer-four" id="page3">
				<div class="container">
					<div class="main-footer-wrapper text-center text-white">
						<h2>Our System is Secure</h2>
						<p>We proactively manage our Security Operations Center 24/7.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- main3 end -->

		<!-- main3 start -->
		<div class="main3">
			<div class="container">
				<div class="main3-wrapper">
					<div class="row">
						<div class="col-lg-3">
							<div class="rmain-left">
								<ul>
									<li><a href="#" data-scroll="page1">Your Personal Information is Secure</a></li>
									<li><a href="#" data-scroll="page2">Your Funds are Secure</a></li>
									<li class="active"><a href="#" data-scroll="page3">Our System is Secure</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9">
							<div class="main3-right">
								<div class="main3-text-one">

<h5>Access to Server</h5>
<p> Only security cleared personnel have access to the server and must provide whitelisted credentials with every log-in. 2FA is required to access server. Unusual IP address log-in is strictly prohibited. </p>

<h5>DDoS</h5>
<p> We have integrated protection to mitigate a DDoS attack. </p>

<ul>
<li>Detection -&nbsp;&nbsp;we have traffic attack protection of data flow and custom traffic monitoring to detect traffic abnormalities</li>
<li>Response - We have had no attack records.&nbsp;&nbsp;For unusual traffic volumes, we respond in a timely manner, turn on more cloud protection, and even temporarily disconnect</li>
<li>Routing - We use multiple&nbsp;&nbsp;servers connected to load balancing, allocating servers by access order</li>
</ul>

<h5>Database</h5>
<ul>
<li>Our database sits on the server and requires multiple layers of security measures to access</li>
<li>All database access is done via internal networks, use of external networks are prohibited. We use Data Management Services to manage and connect to our database.&nbsp;&nbsp;We never use external software to manage our database.&nbsp;&nbsp;Our data will never go to an external network</li>
<li>The data backup plan is also established to avoid potential loss of the data</li>
</ul>

<h5>DNS Protection</h5>
<p>We monitor our website server port so that clients are not re-routed to another site. We have global detection point service integrated into our DNS protection. If you visit our site from a different network around the world.</p>
<ul>
<li>It is timed to detect the web server port, try to log in probe, view the connection status, send abnormal status</li>
<li>Global monitoring point to detect website ports for problems to prevent hijacking</li>
</ul>

<h5>Penetration Testing</h5>
<p>We test port access for all five areas.</p>
<ul>
<li>Interface testing</li>
<li>Compatibility testing</li>
<li>Performance testing</li>
<li>Vulnerability detection, vulnerability update alert and up-timely</li>
<li>Password anti-cracking</li>
</ul>

<h5>Internal Management</h5>
<p>All office computers have firewall and anti-virus protection installed.</p>

<h5>API</h5>

<p>We protect our API access. For public methods, we limit the frequency of access through user IP to prevent abuse and DDoS attacks at the source.&nbsp;&nbsp;We will check IP frequency visit and may stop service for you based on our threshold.</p>

<p>For Non-public method, we encrypt the request parameters through the HMAC-SHA512 encryption algorithm, and then use a custom signature algorithm to generate a signature sign to prevent parameter tampering and nonce-based scenarios to prevent replay attacks.</p>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-footer-three">
			</div>
		</div>
		<!-- main3 end -->

		<script type="text/javascript">
			(function($){
				$(document).ready(function() {	
					console.log('this is after the document ready');
					smartScroll.init({
						speed: 700,
						addActive: true,
						activeClass: 'active',
						offset: 80,
					})
				});
			})(jQuery);
		</script>
</div>

<?php
get_footer();
