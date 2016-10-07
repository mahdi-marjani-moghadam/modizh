
		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
			<div class="slider-parallax-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark" style="background-image: url('<?=TEMPLATE_DIR?>img/slider/1.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">به همایش خوش آمدید</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">ابزاری مدرن برای فروش بلیت و ثبت نام رویدادها</p>
								</div>
							</div>
						</div>
						<div class="swiper-slide dark" style="background-image: url('<?=TEMPLATE_DIR?>img/slider/2.jpg');">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp">معرفی اثر هنرمندان</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">دیدن اثرات هنرمندان در عرصه موزیک و نقاشی</p>
								</div>
							</div>

						</div>
						<div class="swiper-slide dark" style="background-image: url('<?=TEMPLATE_DIR?>img/slider/3.jpg'); background-position: center top;">
							<div class="container clearfix">
								<div class="slider-caption">
									<h2 data-caption-animate="fadeInUp">Great Performance</h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
						</div>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">




				<div class=" topmargin nobottommargin nobottomborder">
					<div class="container clearfix">
						<div class="heading-block center nomargin">
							<h3>خانه هنرمندان</h3>
						</div>
					</div>
				</div>

				<div id="portfolio" class="portfolio portfolio-nomargin grid-container portfolio-notitle portfolio-full grid-container clearfix">
					<? for($i=1;$i<12;$i++){ ?>
					<article class="portfolio-item pf-media pf-icons">
						<div class="portfolio-image">
							<a href="<?=RELA_DIR?>artists/Detail/1/hamed">
								<img src="<?=TEMPLATE_DIR?>img/artists_product/<?=$i?>.jpg" alt="Open Imagination">
							</a>
							<div class="portfolio-overlay">
								<a href="<?=TEMPLATE_DIR?>img/artists_product/<?=$i?>.jpg" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
								<a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single.html">آلبوم ماندگار</a></h3>
							<span><a href="#">Media</a>, <a href="#">Icons</a></span>
						</div>
					</article>
					<? } ?>

				</div>


				<div class="clear"></div>

				<a href="portfolio.html" class="button button-full button-dark center tright bottommargin-lg">
					<div class="container clearfix">
						بیشتر از 100 اثر از هنرمندان ایران <strong>بیشتر ببینید</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>





				<div class="container clearfix">

					جای شعار تبلیغاتی


				</div>

			</div>

		</section><!-- #content end -->

		