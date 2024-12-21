@extends('layout.app')

@section('title', 'ENT Department, TMU')

@section('content')

@include('department.partials.content')
<style>
	.menu-link {
		text-transform: none;
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

	.nav-pills .nav-link {
		margin-bottom: 10px;
		border-radius: 3px;
	}

	.nav-pills .nav-link.active {
		background-color: #D8D8D8;
		padding: 30px 25px;
	}

	.nav-pills .nav-link h3 {
		font-size: 22px;
		line-height: 28px;
		font-weight: 400;
		color: #001055;
	}

	.nav-pills .nav-link.active h3 {
		color: rgb(0, 0, 0);
		font-weight: 500;
	}

	.nav-pills .nav-link p {
		display: none;
		font-size: 14px;
		line-height: 1.6 !important;
		color: black;
	}

	.nav-pills .nav-link.active p {
		display: block;
	}

	@media (max-width: 767.98px) {
		.nav-pills .nav-link p {
			display: block;
			color: #444;
		}
		.nav-pills .nav-link,
		.nav-pills .nav-link.active {
			padding: 15px 20px;
		}
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
						</div>
						<div class="tab-pane text-center" id="canvas-tabs-2" role="tabpanel" aria-labelledby="canvas-tabs-2-tab">
							<img src="{{asset('/img/departments/ent/role2.jpeg')}}" alt="Image" height="350">
						</div>
						<div class="tab-pane text-center" id="canvas-tabs-3" role="tabpanel" aria-labelledby="canvas-tabs-3-tab">
							<img src="{{asset('/img/departments/ent/role3.jpeg')}}" alt="Image" height="350">
						</div>
						<div class="tab-pane text-center" id="canvas-tabs-4" role="tabpanel" aria-labelledby="canvas-tabs-4-tab">
							<img src="{{asset('/img/departments/ent/role4.png')}}" alt="Image" height="350">
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