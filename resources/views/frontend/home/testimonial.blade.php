<!-- Section Testimonials -->
<style>
    .testi-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 18px;
        border-radius: 999px;
        background-color: var(--accent-color-3);
        color: var(--accent-color);
        font-weight: 700;
        font-size: 14px;
        letter-spacing: .3px;
    }

    .testi-card {
        position: relative;
        background-color: #ffffff;
        border-radius: 20px;
        padding: 36px 24px 28px;
        box-shadow: 0 14px 30px rgba(28, 63, 110, 0.08);
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .testi-section .swiper-slide {
        height: auto;
    }

    .testi-section .swiper-wrapper {
        padding-top: 22px;
    }

    .testi-quote-icon {
        position: absolute;
        top: -18px;
        left: 50%;
        transform: translateX(-50%);
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background-color: var(--accent-color);
        color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 15px;
        box-shadow: 0 6px 14px rgba(230, 0, 126, 0.3);
    }

    .testi-message {
        font-size: 15px;
        font-style: italic;
        color: var(--text-color-2);
        line-height: 1.6;
        margin: 12px 0 18px;
    }

    .testi-avatar {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--accent-color-3);
    }

    .testi-section .swiper-pagination-bullet {
        background-color: var(--accent-color-4);
        opacity: 1;
    }

    .testi-section .swiper-pagination-bullet-active {
        background-color: var(--accent-color);
    }

    .testi-wrap {
        padding: 48px 20px;
    }

    .testi-header {
        margin-bottom: 40px;
    }

    .testi-track {
        padding-bottom: 16px;
    }

    @media (min-width: 768px) {
        .testi-wrap {
            padding: 64px 40px;
        }

        .testi-header {
            margin-bottom: 48px;
        }
    }

    @media (min-width: 1200px) {
        .testi-wrap {
            padding: 88px 64px;
        }

        .testi-header {
            margin-bottom: 56px;
        }
    }
</style>

<div class="section mt-5 position-relative overflow-visible testi-section">
    <div class="rounded-3 testi-wrap" style="background-image: url({{ asset('assets/image/BG_testi.png') }}); background-size: cover; background-position: center;">
        <div class="container px-3 px-xl-4">
<div class="testi-header" style="display: flex; flex-direction: column; gap: 1rem; align-items: center; text-align: center;">
    <div style="display: flex; flex-direction: row; gap: 0.5rem; align-items: center; justify-content: center;">
        <h6 class="accent-color m-0">Testimonials</h6>
    </div>
    <h3>Let's Hear What They Say About Us</h3>
</div>
            <div class="scrollanimation animated fadeInUp testi-track">
                <div class="swiper swiperTestimonialsHome">
                    <div class="swiper-wrapper">
                        @forelse($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-quote-icon">
                                    <i class="rtmicon rtmicon-blockquote"></i>
                                </div>
                                <div class="flex-row">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= $testimonial->rating)
                                            <i class="fa-solid fa-star" style="color: #FFD43B; font-size: 13px;"></i>
                                        @else
                                            <i class="fa-solid fa-star" style="color: var(--accent-color-4); font-size: 13px;"></i>
                                        @endif
                                    @endfor
                                </div>
                                <p class="testi-message">"{{ $testimonial->message }}"</p>
                                <div class="d-flex flex-column align-items-center gap-1">
                                    @php
                                        $imgSrc = ($testimonial->image_path && \Illuminate\Support\Facades\Storage::disk('testimonial_public')->exists($testimonial->image_path))
                                            ? \Illuminate\Support\Facades\Storage::disk('testimonial_public')->url($testimonial->image_path)
                                            : asset('assets/image/testimonials/test_img.png');
                                    @endphp
                                    <img src="{{ $imgSrc }}" class="testi-avatar" alt="{{ $testimonial->name }}">
                                    <div class="text-center">
                                        <h6 class="fw-semibold mb-0" style="color: var(--text-color);">{{ $testimonial->name }}</h6>
                                        <span class="font-2" style="color: var(--text-color-2); font-size: 13px;">{{ $testimonial->position }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <p class="font-2 fst-italic mb-0" style="color: var(--text-color-2);">No testimonials available yet.</p>
                            </div>
                        </div>
                        @endforelse
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(function () {
        new Swiper('.swiperTestimonialsHome', {
            autoplay: {
                delay: 3000
            },
            speed: 2000,
            slidesPerView: 1,
            spaceBetween: 20,
            loop: false,
            grabCursor: true,
            autoHeight: true,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    autoHeight: false,
                },
                1200: {
                    slidesPerView: 3,
                    autoHeight: false,
                }
            },
            pagination: {
                enabled: true,
                el: '.testi-section .swiper-pagination',
                type: 'bullets',
                clickable: true,
            },
        });
    });
</script>
@endpush
