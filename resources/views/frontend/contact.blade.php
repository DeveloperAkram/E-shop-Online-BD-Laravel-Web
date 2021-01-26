@extends('layouts.frontend')

@section('main')

    <div class="ps-contact ps-section pb-80">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d231612.19486293956!2d91.72089759394112!3d24.90000957890643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d3d270329f%3A0xf58ef93431f67382!2sSylhet!5e0!3m2!1sen!2sbd!4v1611693931389!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       {{--  <div id="contact-map" data-address="New York, NY" data-title="Sky Store!" data-zoom="17"></div> --}}
        <div class="ps-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                    <div class="ps-section__header mb-50">
                        <h2 class="ps-section__title" data-mask="Contact">- Get in touch</h2>
                        <form class="ps-contact__form" action="do_action" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="form-group">
                                        <label>Name <sub>*</sub></label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="form-group">
                                        <label>Email <sub>*</sub></label>
                                        <input class="form-control" type="email" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                    <div class="form-group mb-25">
                                        <label>Your Message <sub>*</sub></label>
                                        <textarea class="form-control" rows="6"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button class="ps-btn">Send Message<i class="ps-icon-next"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                    <div class="ps-section__content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <h3>USA <span> San Francisco</span></h3>
                                    </header>
                                    <footer>
                                        <p><i class="fa fa-map-marker"></i> 19C Trolley Square  Wilmington, DE 19806</p>
                                        <p><i class="fa fa-envelope-o"></i><a href="mailto@supportShoes@shoes.net">supportShoes@shoes.net</a></p>
                                        <p><i class="fa fa-phone"></i> ( +84 ) 9892 2324  -  9401 123 003</p>
                                    </footer>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <h3>Ireland  <span> Dublin</span></h3>
                                    </header>
                                    <footer>
                                        <p><i class="fa fa-map-marker"></i> 19C Trolley Square  Wilmington, DE 19806</p>
                                        <p><i class="fa fa-envelope-o"></i><a href="mailto@supportShoes@shoes.net">supportShoes@shoes.net</a></p>
                                        <p><i class="fa fa-phone"></i> ( +84 ) 9892 2324  -  9401 123 003</p>
                                    </footer>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <h3>Brazil <span> São Paulo</span></h3>
                                    </header>
                                    <footer>
                                        <p><i class="fa fa-map-marker"></i> 19C Trolley Square  Wilmington, DE 19806</p>
                                        <p><i class="fa fa-envelope-o"></i><a href="mailto@supportShoes@shoes.net">supportShoes@shoes.net</a></p>
                                        <p><i class="fa fa-phone"></i> ( +84 ) 9892 2324  -  9401 123 003</p>
                                    </footer>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                                <div class="ps-contact__block" data-mh="contact-block">
                                    <header>
                                        <h3>Philippines <span> Quezon City</span></h3>
                                    </header>
                                    <footer>
                                        <p><i class="fa fa-map-marker"></i> 19C Trolley Square  Wilmington, DE 19806</p>
                                        <p><i class="fa fa-envelope-o"></i><a href="mailto@supportShoes@shoes.net">supportShoes@shoes.net</a></p>
                                        <p><i class="fa fa-phone"></i> ( +84 ) 9892 2324  -  9401 123 003</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
