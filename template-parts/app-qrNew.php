<div class="fingertips-item app-qr-parts background">
	<!-- <h5 data-translate="Buy_header2_download"></h5> -->
	
	<div class="title" data-translate="Buy_header2_download"></div>
	<div class="row">
		<div id="stores" class="col-lg-5 col-md-5 app-store">
			<a href="https://apps.apple.com/ca/app/virgocx-buy-sell-bitcoin/id1480501048">
				<img class="app_store_download" data-value="app_store" src="<?= get_template_directory_uri() ?>/img/app_buttonsNew/app_store.png" alt="images not found" />
			</a>
			<a href="https://play.google.com/store/apps/details?id=ca.virgocx.exchange">
				<img class="play_store_download" data-value="play_store" src="<?= get_template_directory_uri() ?>/img/app_buttonsNew/play_store.png" alt="images not found" />
			</a>
			<a href="https://virgocx.s3.ca-central-1.amazonaws.com/prod/2021/12/30/861643257275474bbae73bc7a7cabe12.apk">
				<img class="android_download" data-value="android" src="<?= get_template_directory_uri() ?>/img/app_buttonsNew/android.png" alt="images not found" />
			</a>
		</div>

		<img class="col-lg-5 col-md-7 col-sm-7" id="app_qr_image" src="<?= get_template_directory_uri() ?>/img/qr_codes/app_store.png" alt="images not found" /></a>
	</div>
</div>

<style type="text/css">
.background{
	background-color: #FFFFFF;
	border-radius: 10px 96px 10px 96px;
	padding-top: 30px;
    padding-left: 90px;
    padding-right: 20px;
    padding-bottom: 1px;
}
.title{
	color: #66617F;
	font-size: 18px;
	line-height: 4;
}
</style>

<script type="text/javascript">
const appLinks = document.querySelectorAll('#stores a');
const qrImage = document.getElementById('app_qr_image');
appLinks.forEach(function(appLink) {
	appLink.addEventListener('mouseover', function(event) {
		const value = event.target.dataset.value;

		if (!value) {
			return;
		}

		qrImage.src = _virgocx_theme_url + '/img/qr_codes/' + value + '.png';
	});
});

const appImages = document.querySelectorAll('#stores a img');
appImages.forEach(function(appImage) {
	appImage.addEventListener('mouseover', function(event) {
		const img = event.target;
		img.src = img.src.replace('.png', '_hover.png');
	});
	appImage.addEventListener('mouseleave', function(event) {
		const img = event.target;
		img.src = img.src.replace('_hover.png', '.png');
	});
});
</script>
