        <!-- Section Maps -->
        <div class="section contact-map-section">
            <div class="r-container">

                @if(isset($branches) && $branches->count() > 0)

                    <ul class="nav nav-tabs mb-3" id="branchMapTab" role="tablist" style="border: none;">
                        @foreach($branches as $index => $branch)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link branch-tab-btn {{ $index === 0 ? 'active' : '' }}"
                                    id="branch-{{ $branch->id }}-tab"
                                    data-bs-toggle="tab"
                                    data-bs-target="#branch-{{ $branch->id }}"
                                    type="button"
                                    role="tab"
                                    aria-controls="branch-{{ $branch->id }}"
                                    aria-selected="{{ $index === 0 ? 'true' : 'false' }}">{{ $branch->title }}</button>
                        </li>
                        @endforeach
                    </ul>

                    <div class="tab-content" id="branchMapTabContent">
                        @foreach($branches as $index => $branch)
                        <div class="tab-pane fade {{ $index === 0 ? 'show active' : '' }}" id="branch-{{ $branch->id }}" role="tabpanel" aria-labelledby="branch-{{ $branch->id }}-tab">
                            <div class="map-wrap">
                                <div class="map-info d-flex flex-column gap-2 p-4 bg-accent-primary">
                                    <h3>{{ $branch->title }}</h3>
                                    <div class="d-flex flex-row align-items-center font-2 gap-3">
                                        <i class="rtmicon rtmicon-location fs-4"></i>
                                        <span>{{ $branch->address ?? $branch->location }}</span>
                                    </div>
                                </div>
                                @if($branch->map_embed_url)
                                <iframe loading="lazy" class="maps overflow-hidden"
                                src="{{ $branch->map_embed_url }}"
                                title="C & K Home Nursing and Care Center, {{ $branch->title }}" aria-label="C & K Home Nursing and Care Center, {{ $branch->title }}"></iframe>
                                @else
                                <iframe loading="lazy" class="maps overflow-hidden"
                                src="https://www.google.com/maps?q={{ urlencode($branch->address ?? $branch->location ?? $branch->title) }}&output=embed"
                                title="C & K Home Nursing and Care Center, {{ $branch->title }}" aria-label="C & K Home Nursing and Care Center, {{ $branch->title }}"></iframe>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>

                @else
                    <div class="text-center" style="padding: 60px 0;">
                        <div class="alert alert-info" style="
                            background-color: #EFF6FF;
                            border: 1px solid #BFDBFE;
                            color: #1E40AF;
                            padding: 20px 30px;
                            border-radius: 12px;
                            display: inline-block;
                        ">
                            <p style="margin: 0; font-size: 15px;">Location information will be available soon.</p>
                        </div>
                    </div>
                @endif

            </div>
        </div>

        <style>
            .contact-map-section {
                padding-top: 1.5em;
            }

            #branchMapTab {
                display: flex;
                flex-direction: row;
                flex-wrap: nowrap;
                gap: 1.75rem;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                border-bottom: 1px solid #E2E8F0;
            }

            #branchMapTab .nav-item {
                flex: 0 0 auto;
            }

            #branchMapTab .branch-tab-btn {
                background-color: transparent;
                border: none;
                border-bottom: 2px solid transparent;
                border-radius: 0;
                margin-bottom: -1px;
                padding: 0 0 12px;
                font-size: 15px;
                font-weight: 500;
                color: #64748B !important;
                white-space: nowrap;
                transition: color 0.2s ease, border-color 0.2s ease;
            }

            #branchMapTab .branch-tab-btn.active::after {
                content: none;
            }

            #branchMapTab .branch-tab-btn.active {
                color: var(--theme-color, #E6007E) !important;
                font-weight: 600;
                border-bottom-color: var(--theme-color, #E6007E);
            }

            #branchMapTab .branch-tab-btn:hover:not(.active) {
                color: #0F172A !important;
            }

            .map-wrap {
                position: relative;
            }

            .map-info {
                position: absolute;
                bottom: 0;
                right: 0;
                border-top-left-radius: 20px;
            }

            @media (max-width: 768px) {
                #branchMapTab {
                    display: flex;
                    flex-direction: row;
                    flex-wrap: nowrap;
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                    scrollbar-width: none;
                    gap: 8px;
                    border-bottom: none;
                    padding-bottom: 4px;
                    margin-bottom: 0.5rem;
                }

                #branchMapTab::-webkit-scrollbar {
                    display: none;
                }

                #branchMapTab .nav-item {
                    flex: 0 0 auto;
                }

                #branchMapTab .branch-tab-btn {
                    width: auto;
                    text-align: left;
                    font-size: 13px;
                    background-color: #F1F5F9;
                    border-radius: 30px;
                    border-bottom: 2px solid transparent;
                    margin-bottom: 0;
                    padding: 8px 16px;
                    white-space: nowrap;
                }

                #branchMapTab .branch-tab-btn.active {
                    background-color: var(--theme-color, #E6007E);
                    color: #fff !important;
                    border-bottom-color: transparent;
                }

                .map-wrap {
                    display: flex;
                    flex-direction: column;
                }

                .map-info {
                    position: static;
                    width: 100%;
                    border-radius: 12px;
                }

                #branchMapTabContent .maps {
                    height: 320px;
                }
            }
        </style>
