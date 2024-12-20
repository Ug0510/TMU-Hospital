@extends('layout.app')

@section('title', 'ENT Department, TMU')

@section('content')

@include('department.partials.content')
<style>
	/* ----------------------------------------------------------------
	Canvas: Care
	-----------------------------------------------------------------*/

	:root {
		--cnvs-themecolor: #0F6458;
		--cnvs-themecolor-rgb: 15, 99, 88;

		--cnvs-color-2: #FFCD8C;
		--cnvs-body-font: 'IBM Plex Sans', sans-serif;
		--cnvs-primary-font: 'IBM Plex Serif', serif;
		--cnvs-secondary-font: 'Playfair Display', serif;
	}

	#header {
		--cnvs-primary-menu-font: var(--cnvs-body-font);
	}

	.font-display {
		font-family: var(--cnvs-secondary-font);
	}

	.menu-link {
		text-transform: none;
		letter-spacing: 0;
		font-size: 1.0625rem;
		font-weight: 500;
	}

	.bg-color-2 {
		background-color: var(--cnvs-color-2) !important;
	}

	.color-2 {
		color: var(--cnvs-color-2) !important;
	}

	.slider-element {
		background: linear-gradient(to right, rgba(255, 255, 255, 1) 40%, rgba(70, 193, 176, .7)), url('images/1.png') no-repeat 90% 100% / auto 100%;
	}

	@media (min-width: 992px) {
		.slider-element {
			background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(70, 193, 176, 0.17)), url('images/1.png') no-repeat 90% 100% / auto 100%;
		}
	}

	.feature-box-border .feature-box {
		position: relative;
	}

	.feature-box-border .feature-box:not(.noborder)::after {
		content: "";
		position: absolute;
		top: calc(64px + 16px);
		left: 59px;
		width: 2px;
		height: calc(100% - 16px);
		background-color: #EEE;
		z-index: 0;
	}

	.feature-box-border .fbox-color.feature-box:not(.noborder)::after {
		background-color: #0F6458;
	}

	.feature-box-border .fbox-icon i,
	.feature-box-border .fbox-border.fbox-light .fbox-icon i {
		line-height: 60px;
		font-size: 24px;
		z-index: 1;
		text-align: center;
	}

	.fbox-border.fbox-light .fbox-icon a {
		background-color: #FFF;
	}

	.fbox-border.fbox-effect .fbox-icon i::after {
		background-color: #0F6458;
	}

	.bg-color-50 {
		background-color: rgba(15, 100, 88, 0.4) !important;
		background-color: #0f645852 !important;
		/* Or, less accurately, #ff08 */
	}

	.dark .line {
		border-color: rgb(255, 205, 140, .2) !important;
	}

	.section-mobile {
		width: calc(100vw - 30px);
		margin-left: auto;
		margin-right: auto;
		border-radius: 20px;
		padding-left: 20px;
		padding-right: 20px;
	}

	@media (min-width: 768px) {
		.section-mobile {
			width: calc(100vw - 60px);
		}
	}

	/* ----------------------------------------------------------------------------
	Services Grid
	---------------------------------------------------------------------------- */

	.grid-border {
		--cnvs-grid-border-color: var(--cnvs-color-2);
		--cnvs-grid-border-opacity: .5;
	}

	.pricing,
	[class*=pricing-] {
		--cnvs-pricing-price-font-size: 5rem;
	}

	/* ----------------------------------------------------------------------------
	Nav - About Page
	---------------------------------------------------------------------------- */
	.nav-pills .nav-link {
		margin-bottom: 10px;
		border-radius: 3px;
	}

	.nav-pills .nav-link.active {
		background-color: #D8D8D8;
		margin-bottom: 20px;
		padding: 30px 25px;
	}

	.nav-pills .nav-link h3 {
		display: block;
		font-size: 22px;
		line-height: 28px;
		margin-bottom: 15px;
		font-weight: 400;
		color: #001055;
	}

	.nav-pills .nav-link.active h3 {
		color: rgb(0, 0, 0);
		font-weight: 500;
	}

	.nav-pills .nav-link p {
		display: none;
		visibility: hidden;
		font-size: 14px;
		line-height: 1.6 !important;
		margin-bottom: 0;
		color: black;
	}

	.nav-pills .nav-link.active p {
		display: block;
		visibility: visible;
	}

	@media (max-width: 767.98px) {
		.nav-pills .nav-link:not(.active) p {
			display: block;
			visibility: visible;
			color: #444;
		}

		.nav-pills .nav-link,
		.nav-pills .nav-link.active {
			padding: 15px 20px;
			margin-bottom: 8px;
		}
	}

	.bg-pattern {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
	}

	.bg-pattern~* {
		position: relative;
		z-index: 1;
	}
</style>
<style>
	/* ----------------------------------------------------------------
        Canvas: Care
    ---------------------------------------------------------------- */

	:root {
		--cnvs-themecolor: #ff7700;
		--cnvs-themecolor-rgb: 255, 119, 0;

		--cnvs-color-2: #001055;
		--cnvs-body-font: 'IBM Plex Sans', sans-serif;
		--cnvs-primary-font: 'IBM Plex Serif', serif;
		--cnvs-secondary-font: 'Playfair Display', serif;
	}

	#header {
		--cnvs-primary-menu-font: var(--cnvs-body-font);
	}

	.font-display {
		font-family: var(--cnvs-secondary-font);
	}

	.menu-link {
		text-transform: none;
		letter-spacing: 0;
		font-size: 1.0625rem;
		font-weight: 500;
	}

	.bg-color-2 {
		background-color: var(--cnvs-color-2) !important;
	}

	.color-2 {
		color: var(--cnvs-color-2) !important;
	}

	.slider-element {
		background: linear-gradient(to right, rgba(255, 255, 255, 1) 40%, rgba(255, 119, 0, 0.7)),
			url('images/1.png') no-repeat 90% 100% / auto 100%;
	}

	@media (min-width: 992px) {
		.slider-element {
			background: linear-gradient(to right, rgba(255, 255, 255, 0), rgba(255, 119, 0, 0.17)),
				url('images/1.png') no-repeat 90% 100% / auto 100%;
		}
	}

	.feature-box-border .feature-box {
		position: relative;
	}

	.feature-box-border .feature-box:not(.noborder)::after {
		content: "";
		position: absolute;
		top: calc(64px + 16px);
		left: 59px;
		width: 2px;
		height: calc(100% - 16px);
		background-color: #EEE;
		z-index: 0;
	}

	.feature-box-border .fbox-color.feature-box:not(.noborder)::after {
		background-color: #ff7700;
	}

	.feature-box-border .fbox-icon i,
	.feature-box-border .fbox-border.fbox-light .fbox-icon i {
		line-height: 60px;
		font-size: 24px;
		z-index: 1;
		text-align: center;
	}

	.fbox-border.fbox-light .fbox-icon a {
		background-color: #FFF;
	}

	.fbox-border.fbox-effect .fbox-icon i::after {
		background-color: #ff7700;
	}

	.bg-color-50 {
		background-color: rgba(255, 119, 0, 0.4) !important;
	}

	.dark .line {
		border-color: rgba(0, 16, 85, 0.2) !important;
	}

	.section-mobile {
		width: calc(100vw - 30px);
		margin-left: auto;
		margin-right: auto;
		border-radius: 20px;
		padding-left: 20px;
		padding-right: 20px;
	}

	@media (min-width: 768px) {
		.section-mobile {
			width: calc(100vw - 60px);
		}
	}

	/* ----------------------------------------------------------------------------
        Services Grid
    ---------------------------------------------------------------------------- */

	.grid-border {
		--cnvs-grid-border-color: var(--cnvs-color-2);
		--cnvs-grid-border-opacity: 0.5;
	}

	.pricing,
	[class*=pricing-] {
		--cnvs-pricing-price-font-size: 5rem;
	}

	/* ----------------------------------------------------------------------------
        Nav - About Page
    ---------------------------------------------------------------------------- */

	.nav-pills .nav-link {
		margin-bottom: 10px;
		border-radius: 3px;
	}

	.nav-pills .nav-link.active {
		background-color: #D8D8D8;
		margin-bottom: 20px;
		padding: 30px 25px;
	}

	.nav-pills .nav-link h3 {
		display: block;
		font-size: 22px;
		line-height: 28px;
		margin-bottom: 15px;
		font-weight: 400;
		color: #001055;
	}

	.nav-pills .nav-link.active h3 {
		color: rgb(0, 0, 0);
		font-weight: 500;
	}

	.nav-pills .nav-link p {
		display: none;
		visibility: hidden;
		font-size: 14px;
		line-height: 1.6 !important;
		margin-bottom: 0;
		color: black;
	}

	.nav-pills .nav-link.active p {
		display: block;
		visibility: visible;
	}

	@media (max-width: 767.98px) {
		.nav-pills .nav-link:not(.active) p {
			display: block;
			visibility: visible;
			color: #444;
		}

		.nav-pills .nav-link,
		.nav-pills .nav-link.active {
			padding: 15px 20px;
			margin-bottom: 8px;
		}
	}

	.bg-pattern {
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		left: 0;
	}

	.bg-pattern~* {
		position: relative;
		z-index: 1;
	}
</style>

<section class="expertise-area pb-70">
	<div class="row justify-content-center">
		<div class="col-md-10 shadow p-4 rounded">
			<div class="row">
				<div class="col-md-6">
					<div class="tab-content" id="canvas-tabContent">
						<div class="tab-pane show active text-center" id="canvas-tabs-1" role="tabpanel" aria-labelledby="canvas-tabs-1-tab">
							<img src="{{asset('/img/departments/ent/role1.png')}}" alt="Image" height="350">
							<div class="clear"></div>
							<div class="d-block text-start mt-5 mw-xs">
								<!-- Optional additional text -->
							</div>
						</div>
						<div class="tab-pane text-center" id="canvas-tabs-2" role="tabpanel" aria-labelledby="canvas-tabs-2-tab">
							<img src="{{asset('/img/departments/ent/role2.jpeg')}}" alt="Image" height="350">
							<div class="d-block text-start mt-5 mw-xs"></div>
						</div>
						<div class="tab-pane text-center" id="canvas-tabs-3" role="tabpanel" aria-labelledby="canvas-tabs-3-tab">
							<img src="{{asset('/img/departments/ent/role3.jpeg')}}" alt="Image" height="350">
							<div class="d-block text-start mt-5 mw-xs"></div>
						</div>
						<div class="tab-pane text-center" id="canvas-tabs-4" role="tabpanel" aria-labelledby="canvas-tabs-4-tab">
							<img src="{{asset('/img/departments/ent/role4.png')}}" alt="Image" height="350">
							<div class="d-block text-start mt-5 mw-xs"></div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="nav flex-column nav-pills" id="canvas-tabs-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="canvas-tabs-1-tab" data-bs-toggle="pill" href="#canvas-tabs-1" role="tab" aria-controls="canvas-tabs-1" aria-selected="true">
							<h3>Expert ENT Specialists</h3>
							<p>Board-certified otolaryngologists with expertise in various areas of ENT care.</p>
						</a>
						<a class="nav-link" id="canvas-tabs-2-tab" data-bs-toggle="pill" href="#canvas-tabs-2" role="tab" aria-controls="canvas-tabs-2" aria-selected="false">
							<h3>Audiologists</h3>
							<p>Skilled professionals dedicated to diagnosing and managing hearing and balance disorders.</p>
						</a>
						<a class="nav-link" id="canvas-tabs-3-tab" data-bs-toggle="pill" href="#canvas-tabs-3" role="tab" aria-controls="canvas-tabs-3" aria-selected="false">
							<h3>Speech therapist</h3>
							<p>Skilled professionals dedicated to speech therapy.</p>
						</a>
						<a class="nav-link" id="canvas-tabs-4-tab" data-bs-toggle="pill" href="#canvas-tabs-4" role="tab" aria-controls="canvas-tabs-4" aria-selected="false">
							<h3>Support Staff</h3>
							<p>Compassionate team members providing care and assistance throughout your treatment journey.</p>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection