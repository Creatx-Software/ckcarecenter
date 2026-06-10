<style>
    .csr-section-bg {
        background: linear-gradient(135deg, #fdf6fb 0%, #f0fbfb 100%);
        border-radius: 24px;
        padding: 48px 40px;
    }
    .csr-initiative-card {
        background: #fff;
        border-radius: 14px;
        padding: 20px 22px;
        border-left: 4px solid var(--accent-color);
        box-shadow: 0 3px 16px rgba(0,0,0,0.06);
        transition: box-shadow 0.25s, transform 0.25s;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .csr-initiative-card:hover {
        box-shadow: 0 8px 28px rgba(230,0,126,0.13);
        transform: translateY(-3px);
    }
    .csr-initiative-icon {
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background: rgba(230,0,126,0.10);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 12px;
        flex-shrink: 0;
    }
    .csr-initiative-icon i {
        font-size: 18px;
        color: var(--accent-color);
    }
    .csr-bullet-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    .csr-bullet-list li {
        display: flex;
        align-items: flex-start;
        gap: 9px;
        font-size: 13.5px;
        color: var(--text-color-2);
        line-height: 1.6;
    }
    .csr-bullet-list li::before {
        content: '';
        width: 7px;
        height: 7px;
        min-width: 7px;
        border-radius: 50%;
        background: var(--accent-color);
        margin-top: 6px;
    }
    .csr-img-frame {
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        flex: 1;
        min-height: 360px;
    }
    .csr-img-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }
    .csr-img-overlay-badge {
        position: absolute;
        bottom: 20px;
        left: 20px;
        right: 20px;
        background: rgba(0,0,0,0.55);
        backdrop-filter: blur(6px);
        border-radius: 12px;
        padding: 14px 18px;
        color: #fff;
    }
    @media (max-width: 767px) {
        .csr-section-bg {
            padding: 28px 18px;
        }
    }
</style>

<div class="section">
    <div class="r-container">
        <div class="csr-section-bg">

            {{-- Section Header --}}
            <div class="d-flex flex-column gap-3 text-center mx-auto align-items-center scrollanimation animated zoomIn mb-4"
                 style="max-width: 660px;">
                <div class="d-flex flex-row gap-2 align-items-center">
                    <h6 class="accent-color m-0">Giving Back</h6>
                </div>
                <h3>Corporate Social Responsibility Initiatives</h3>
                <p>C&amp;K Nursing Care is committed to social welfare and community support through meaningful programs that uplift lives across Sri Lanka.</p>
            </div>

            {{-- Content: Cards + Image --}}
            <div class="row g-4 align-items-stretch">

                {{-- Left: Initiative Cards --}}
                <div class="col-xl-7 col-12 d-flex flex-column">
                    <div class="row g-3 align-items-stretch flex-grow-1">

                        {{-- Card 1: Dry Food Supplies --}}
                        <div class="col-md-6 col-12 scrollanimation animated fadeInUp">
                            <div class="csr-initiative-card">
                                <div class="csr-initiative-icon">
                                    <i class="fa-solid fa-box-open"></i>
                                </div>
                                <h6 style="font-size:15px;font-weight:700;color:var(--text-color);margin:0 0 8px;">Dry Food Supplies</h6>
                                <p style="font-size:13px;color:var(--text-color-2);line-height:1.7;margin:0;">
                                    Providing dry food supplies to various families in need, supporting vulnerable and disadvantaged communities.
                                </p>
                            </div>
                        </div>

                        {{-- Card 2: Disaster Relief --}}
                        <div class="col-md-6 col-12 scrollanimation animated fadeInUp" style="animation-delay:0.1s;">
                            <div class="csr-initiative-card">
                                <div class="csr-initiative-icon">
                                    <i class="fa-solid fa-hand-holding-heart"></i>
                                </div>
                                <h6 style="font-size:15px;font-weight:700;color:var(--text-color);margin:0 0 8px;">Emergency Disaster Relief</h6>
                                <p style="font-size:13px;color:var(--text-color-2);line-height:1.7;margin:0;">
                                    November 2025: Providing emergency assistance to individuals affected by natural disasters — floods and drowning incidents.
                                </p>
                            </div>
                        </div>

                        {{-- Card 3: School Support --}}
                        <div class="col-md-6 col-12 scrollanimation animated fadeInUp" style="animation-delay:0.15s;">
                            <div class="csr-initiative-card">
                                <div class="csr-initiative-icon">
                                    <i class="fa-solid fa-school"></i>
                                </div>
                                <h6 style="font-size:15px;font-weight:700;color:var(--text-color);margin:0 0 8px;">School Support Program</h6>
                                <p style="font-size:13px;color:var(--text-color-2);line-height:1.7;margin:0;">
                                    Providing equipment and resources to school children to enhance educational opportunities and build brighter futures.
                                </p>
                            </div>
                        </div>

                        {{-- Card 4: Community Support --}}
                        <div class="col-md-6 col-12 scrollanimation animated fadeInUp" style="animation-delay:0.2s;">
                            <div class="csr-initiative-card">
                                <div class="csr-initiative-icon">
                                    <i class="fa-solid fa-people-group"></i>
                                </div>
                                <h6 style="font-size:15px;font-weight:700;color:var(--text-color);margin:0 0 8px;">Community Support</h6>
                                <ul class="csr-bullet-list mt-1">
                                    <li>Supporting vulnerable &amp; disadvantaged communities</li>
                                    <li>Dry food distributions to families in need</li>
                                    <li>Coordinated welfare programs island-wide</li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Right: Image --}}
                <div class="col-xl-5 col-12 d-flex flex-column scrollanimation animated fadeInRight">
                    <div class="csr-img-frame">
                        <img src="{{ asset('assets/image/home/56776778.png') }}"
                             alt="Corporate Social Responsibility"
                             loading="lazy">
                        <div class="csr-img-overlay-badge">
                            <p style="font-size:13px;font-weight:600;margin:0;line-height:1.5;">
                                <i class="fa-solid fa-heart" style="color:var(--accent-color);margin-right:6px;"></i>
                                Committed to uplifting lives and strengthening communities across Sri Lanka.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
