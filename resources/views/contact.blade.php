@extends('layout.app')

@section('title', 'Contact-Us')

@section('content')
        <!-- Page Title -->
        <div class="page-title-area page-title-five">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="page-title-item">
                        <h2>Contact Us</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                            </li>
                            <li>Contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Location -->
        <div class="location-area">
            <div class="container">
                <div class="row location-wrap">
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-item">
                            <i class="icofont-location-pin"></i>
                            <h3>Location</h3>
                            <p>2108-267 Road Quadra,Toronto,<br> Victiria Canada</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-item">
                            <i class="icofont-ui-message"></i>
                            <h3>Email</h3>
                            <ul>
                                <li>
                                    <a href="mailto:hospital@tmu.ac.in">hospital@tmu.ac.in</a>
                                </li>
                                <li>
                                    <a href="mailto:emailexample@name.com">emailexample@name.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="location-item">
                            <i class="icofont-ui-call"></i>
                            <h3>Phone</h3>
                            <ul>
                                <li>
                                    <a href="tel:+07 5554 3332 322">+07 5554 3332 322</a>
                                </li>
                                <li>
                                    <a href="tel:+07 5554 3332 322">+07 5554 3332 322</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Location -->

        <!-- Drop -->
        <section class="drop-area pt-100">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-7 p-0">
                        <div class="drop-item drop-img">
                            <div class="drop-left">
                                <h2>Drop your message for any info or question.</h2>
                                <form id="contactForm">
									<div class="row justify-content-center">
										<div class="col-sm-6 col-lg-6">
											<div class="form-group">
												<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-sm-6 col-lg-6">
											<div class="form-group">
												<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-sm-6 col-lg-6">
											<div class="form-group">
												<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-sm-6 col-lg-6">
											<div class="form-group">
												<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject">
												<div class="help-block with-errors"></div>
											</div>
										</div>
			
										<div class="col-md-12 col-lg-12">
											<div class="form-group">
												<textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Write your message" placeholder="Your Message"></textarea>
												<div class="help-block with-errors"></div>
											</div>
										</div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <div class="form-check agree-label">
                                                    <input
                                                        name="gridCheck"
                                                        value="I agree to the terms and privacy policy."
                                                        class="form-check-input"
                                                        type="checkbox"
                                                        id="gridCheck"
                                                        required
                                                    >
                                            
                                                    <label class="form-check-label" for="gridCheck">
                                                        Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                                    </label>
                                                    <div class="help-block with-errors gridCheck-error"></div>
                                                </div>
                                            </div>
                                        </div>
			
										<div class="col-md-12 col-lg-12">
											<button type="submit" class="drop-btn">
												Send
											</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div>
											<div class="clearfix"></div>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 p-0">
                        <div class="speciality-item speciality-right speciality-right-two d-flex justify-content-center">
                            <img src="{{asset('img/home/expertise1.jpg')}}" alt="Speciality">
                            <div class="speciality-emergency">
                                <div class="speciality-icon">
                                    <i class="icofont-ui-call"></i>
                                </div>
                                <h3>Emergency Call</h3>
                                <a href="tel:+07554332322">095688 65444</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Drop -->

        <!-- Map -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13982.252547194223!2d78.6585617!3d28.8220898!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390afdf54eb3683f%3A0x272419cbb2b959c!2sTMU%20Hospital!5e0!3m2!1sen!2sin!4v1720074489586!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
        <!-- End Map -->

@endsection