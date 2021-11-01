<section class="iq-contact-us pb-0 bg-light mb-5" id="contact" style="    padding-bottom: 50px!important;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title mb-4">
                    <h2 class="title iq-fw-8">Contact Form</h2>
                </div>
            </div>
        </div>
        <form method="post" action="/contact/save">
            @csrf
            <div class="row">

                <div class="col-lg-12">
                    <div class="project-form mb-3">
                        <div class="row">


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control contact-first-name" placeholder=" Name">

                                </div>
                                <div class="form-group">
                                    <input type="number" name="Phone" class="form-control contact-phone" placeholder="Phone Number">

                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control contact-email" placeholder="Email">

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <textarea class="form-control contact-message" name="message"
                                              placeholder="Type Your Message"></textarea>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">
                    <button class="slide-button button contact-us-button" type="submit" >
                        <div class="first">Submit</div>
                        <div class="second">Submit</div>
                    </button>

                </div>

            </div>
        </form>

    </div>
</section>
