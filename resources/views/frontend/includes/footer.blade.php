<!-- Footer Section -->
<footer class="footer border-top-0">
    <div class="container">
        <div class="footer__top">
            <div class="row align-items-center">
                <div class="col-lg-auto text-center text-lg-left mb-4 mb-lg-0">
                    <a class="page-logo bubbles-animation bubbles-animation--primary" href="{{ route('home.index') }}">
                        <span class="page-logo__text page-logo__text--top d-block"><span class="page-logo__text__icon"><i class="bi bi-code-slash"></i></span>Web Training</span>						
                        <span class="page-logo__text page-logo__text--bottom">Institute</span>						
                    </a>
                </div>
                <div class="col-lg">
                    <ul class="footer-nav nav justify-content-center">
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                ব্রাউজ কোর্স
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="nav-link">
                                আমাদের সম্পর্কে
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('home.contact') }}" class="nav-link">
                                যোগাযোগ
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-auto">
                    <ul class="social-nav justify-content-center justify-content-lg-start">
                        <li class="social-nav__item">
                            <a href="#!" target="_blank" class="social-nav__item__link">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </li>
                        <li class="social-nav__item">
                            <a href="#!" target="_blank" class="social-nav__item__link">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </li>
                        <li class="social-nav__item">
                            <a href="#!" target="_blank" class="social-nav__item__link">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                        </li>
                        <li class="social-nav__item">
                            <a href="mailto:demo@demo.com" class="social-nav__item__link">
                                <i class="bi bi-envelope"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="footer__bottom py-4">
                    <p class="footer__copyright text-center mb-0">Copyright © 2022 <a href="{{ route('home.index') }}" class="footer__copyright__link">Web Training Institute</a>. All right reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Scroll To Top Button -->
<div class="scroll-top position-fixed">
    <button type="button" class="scroll-top__btn border-0 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up"></i>
    </button>
</div>

<!-- All Scripts -->
<script src="{{ asset('assets/frontend/assets/js/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('assets/frontend/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/assets/js/script.js') }}"></script>
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>
@stack('js')
</body>
</html>

