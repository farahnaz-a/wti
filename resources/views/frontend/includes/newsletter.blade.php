<section id="newsletter-section" class="newsletter section-gap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <img src="{{ asset('assets/frontend/assets/images/illustrations/contact_us.png') }}" alt="Sign In" class="img-fluid">
                <form action="#!" class="form newsLetterForm">
                    <div class="section-header">
                        <h1 class="section-header__title">আমাদের <span class="background-stripe background-stripe--right background-stripe--secondary">সাথে</span> থাকুন</h1>
                    </div>
                    <div class="success-message d-none">
                    </div>
                    <div class="form-group">
                        <input type="email" id="newsletterEmail" class="form-control" placeholder="আপনার ইমেইল দিন *" required>
                        <div class="error-message d-none emailError">
                            <i class="bi bi-info-circle"></i> <span id="emailError"></span>
                        </div>
                    </div>
                    <button type="button" id="newsLetterButton" class="btn btn--primary bubbles-animation bubbles-animation--primary">
                        সাবস্ক্রাইব
                        <i class="bi bi-arrow-up-right"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
