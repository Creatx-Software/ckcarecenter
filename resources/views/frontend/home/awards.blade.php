<style>
    .awards-wrap {
        border-radius: 24px;
        overflow: hidden;
        display: flex;
        flex-direction: row;
        min-height: 460px;
        box-shadow: 0 12px 48px rgba(0,0,0,0.10);
    }

    /* Left: image panel */
    .awards-img-panel {
        position: relative;
        flex: 1 1 45%;
        min-height: 360px;
        overflow: hidden;
    }
    .awards-img-panel img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }
    .awards-wrap:hover .awards-img-panel img {
        transform: scale(1.04);
    }
    .awards-img-panel .awards-img-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(160deg, rgba(0,0,0,0.18) 0%, rgba(0,0,0,0.62) 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 32px 30px;
        gap: 10px;
    }
    .awards-img-tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: var(--accent-color);
        color: #fff;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        padding: 6px 14px;
        border-radius: 40px;
        width: fit-content;
    }
    .awards-img-title {
        color: #fff;
        font-size: 22px;
        font-weight: 700;
        line-height: 1.3;
        margin: 0;
    }
    .awards-img-sub {
        color: rgba(255,255,255,0.80);
        font-size: 13px;
        margin: 0;
        line-height: 1.6;
    }

    /* Right: content panel */
    .awards-content-panel {
        flex: 1 1 55%;
        background: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 44px 44px;
        gap: 24px;
    }
    .awards-content-panel .aw-subtitle {
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        color: var(--accent-color);
        margin: 0;
    }
    .awards-content-panel h3 {
        margin: 0;
        line-height: 1.2;
    }
    .awards-content-panel .aw-desc {
        font-size: 14px;
        color: var(--text-color-2);
        line-height: 1.75;
        margin: 0;
    }
    .award-item-block {
        display: flex;
        align-items: center;
        gap: 18px;
        padding: 18px 20px;
        border-radius: 14px;
        background: #faf5f9;
        border: 1px solid #f0e6ef;
        transition: background 0.25s, box-shadow 0.25s;
    }
    .award-item-block:hover {
        background: #fff0f8;
        box-shadow: 0 4px 20px rgba(230,0,126,0.10);
    }
    .award-item-icon {
        width: 52px;
        height: 52px;
        min-width: 52px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--accent-color) 0%, #c4006a 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 16px rgba(230,0,126,0.30);
    }
    .award-item-icon i {
        font-size: 20px;
        color: #fff;
    }
    .award-item-info {
        display: flex;
        flex-direction: column;
        gap: 3px;
    }
    .award-item-info .aw-name {
        font-size: 15px;
        font-weight: 700;
        color: var(--text-color);
        margin: 0;
        line-height: 1.4;
    }
    .award-item-info .aw-year {
        font-size: 12px;
        color: var(--accent-color);
        font-weight: 600;
        margin: 0;
    }

    /* Responsive */
    @media (max-width: 991px) {
        .awards-wrap {
            flex-direction: column;
        }
        .awards-img-panel {
            min-height: 280px;
            flex: none;
        }
        .awards-content-panel {
            padding: 30px 24px;
        }
    }
</style>

<div class="section">
    <div class="r-container d-flex flex-column gap-4">

        {{-- Section Header --}}
        <div class="d-flex flex-column gap-3 text-center mx-auto align-items-center scrollanimation animated zoomIn"
             style="max-width: 580px;">
            <div class="d-flex flex-row gap-2 align-items-center">
                <h6 class="accent-color m-0">Recognition</h6>
            </div>
            <h3>Awards &amp; Recognition</h3>
            <p>Honoured for excellence and entrepreneurship - a reflection of our commitment to quality healthcare in Sri Lanka.</p>
        </div>

        {{-- Main Block --}}
        <div class="awards-wrap scrollanimation animated fadeInUp">

            {{-- Left: Image --}}
            <div class="awards-img-panel">
                <img src="{{ asset('assets/image/home/64676744444.png') }}"
                     alt="Awards and Recognition"
                     loading="lazy">
                <div class="awards-img-overlay">
                    <span class="awards-img-tag">
                        <i class="fa-solid fa-award"></i>
                        Award Winning
                    </span>
                    <h4 class="awards-img-title">Excellence in Healthcare &amp; Entrepreneurship</h4>
                    <p class="awards-img-sub">Recognised nationally for our dedication to compassionate, professional nursing care.</p>
                </div>
            </div>

            {{-- Right: Content --}}
            <div class="awards-content-panel">

                <div>
                    <p class="aw-subtitle">Our Achievements</p>
                    <h3>Proud to Be Recognised</h3>
                </div>

                <p class="aw-desc">
                    We are honoured to have received prestigious national awards that recognise our work in transforming home nursing and care services across Sri Lanka.
                </p>

                <div class="d-flex flex-column gap-3">

                    <div class="award-item-block">
                        <div class="award-item-icon">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="award-item-info">
                            <p class="aw-name">Asia Miracle &mdash; People's Excellency Award</p>
                            <p class="aw-year">Excellence Award &bull; Sri Lanka</p>
                        </div>
                    </div>

                    <div class="award-item-block">
                        <div class="award-item-icon">
                            <i class="fa-solid fa-trophy"></i>
                        </div>
                        <div class="award-item-info">
                            <p class="aw-name">The Entrepreneur Biz Award 2024</p>
                            <p class="aw-year">Entrepreneurship Award &bull; 2024</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>
