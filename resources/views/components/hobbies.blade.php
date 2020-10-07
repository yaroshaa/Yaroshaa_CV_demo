<section id="hobbies" class="{{ $category['label']['nav_class'] }} w-auto p-0">
    <hr class="gray-line">
    <div class="labelh2-section">
        @if($i % 2 === 1)
            @include('components.label-left')
        @else
            @include('components.label-right')
        @endif
    </div>
    <br>
    <br>
    <div class="container mx-auto relative w-auto p-0">
        <div class="hobby-block-list">
            <ul class="hobby-list">
                <li class="hobby-item philosophy">
                    <span class="hobby-item-block">
                        <span class="hobby-icon ">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="100px" height="100px" viewBox="0 0 484.704 484.704" style="enable-background:new 0 0 484.704 484.704;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M240.313,88.989c-21.81,0-39.553,17.743-39.553,39.552c0,21.81,17.743,39.553,39.553,39.553s39.552-17.743,39.552-39.553
                                            C279.865,106.732,262.123,88.989,240.313,88.989z"/>
                                        <path d="M414.255,75.486C368.941,30.95,307.781,6.145,243.529,5.637C179.02,5.75,116.746,30.318,71.09,74.858
                                            C25.247,119.58,0,179.063,0,242.352c0,62.946,25.014,122.201,70.432,166.85c45.302,44.533,107.305,69.345,171.546,69.865
                                            c64.506-0.117,125.983-24.685,171.636-69.221c45.844-44.723,71.09-104.206,71.09-167.494
                                            C484.705,179.397,459.685,120.136,414.255,75.486z M240.313,398.341c-21.81,0-39.553-17.744-39.553-39.553
                                            c0-21.81,17.743-39.552,39.553-39.552s39.552,17.743,39.552,39.552C279.865,380.597,262.123,398.341,240.313,398.341z
                                            M241.893,230.242c-32.956,1.251-63.887,14.468-87.097,37.217c-23.777,23.305-36.872,54.273-36.872,87.196
                                            c0,28.63,9.633,55.841,27.353,77.86C73.641,397.566,24.236,325.28,24.236,242.352c0-117.166,97.847-212.486,218.116-212.486
                                            c0.139,0,0.278-0.002,0.417-0.007c55.056,0.224,99.774,45.083,99.774,100.19C342.544,184.089,298.332,228.1,241.893,230.242z"/>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="hobby-title">
                            @lang('philosophy and analytics')
                        </span>
                    </span>
                </li>
                <li class="hobby-item engineering">
                        <span class="hobby-item-block">
                        <span class="hobby-icon ">

                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="100" height="100" viewBox="0 0 448.992 448.992" style="enable-background:new 0 0 448.992 448.992;" xml:space="preserve">
                    <g>
                        <path d="M144.953,228.698c-1.573-1.573-3.939-2.044-5.994-1.192c-2.055,0.851-3.395,2.857-3.395,5.081v97.609
                            c0,3.038,2.462,5.5,5.5,5.5h97.608c2.225,0,4.23-1.34,5.082-3.395c0.851-2.055,0.38-4.421-1.192-5.994L144.953,228.698z
                            M146.564,324.696v-78.831l78.83,78.831H146.564z"/>
                        <path d="M422.521,33.882L393.924,5.285c-2.148-2.148-5.63-2.147-7.778,0L220.874,170.557c-0.529,0.529-0.944,1.16-1.221,1.854
                            l-18.116,45.488L128.639,145l13.082-13.081c2.148-2.148,2.148-5.63,0-7.778c-2.148-2.148-5.63-2.148-7.778,0l-13.082,13.081
                            l-21.944-21.944V5.5c0-3.038-2.462-5.5-5.5-5.5H30.361c-3.038,0-5.5,2.462-5.5,5.5v437.992c0,3.038,2.462,5.5,5.5,5.5h63.056
                            c3.038,0,5.5-2.462,5.5-5.5v-60.149h252.509l15.36,15.36c1.074,1.074,2.481,1.611,3.889,1.611s2.815-0.537,3.889-1.611
                            c2.148-2.148,2.148-5.63,0-7.778L209.907,226.268l45.488-18.116c0.694-0.277,1.325-0.692,1.854-1.22L422.521,41.66
                            c1.031-1.031,1.611-2.43,1.611-3.889S423.552,34.913,422.521,33.882z M87.916,437.992H35.861v-9.787h9.447
                            c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447v-17.316h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447v-17.315
                            h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447v-17.316h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447
                            v-17.315h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447v-17.316h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5
                            h-9.447v-17.315h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447v-17.316h9.447c3.038,0,5.5-2.462,5.5-5.5
                            s-2.462-5.5-5.5-5.5h-9.447v-17.315h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447v-17.316h9.447
                            c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447V145.05h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447v-17.316
                            h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447V88.418h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447
                            V60.103h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5h-9.447V31.787h9.447c3.038,0,5.5-2.462,5.5-5.5s-2.462-5.5-5.5-5.5
                            h-9.447V11h52.056V437.992z M98.916,372.343v-241.51l26.766,26.766l-15.649,15.649c-2.148,2.148-2.148,5.63,0,7.778
                            c1.074,1.074,2.481,1.611,3.889,1.611s2.815-0.537,3.889-1.611l15.649-15.649l12.244,12.244l-15.649,15.649
                            c-2.148,2.148-2.148,5.63,0,7.778c1.074,1.074,2.481,1.611,3.889,1.611s2.815-0.537,3.889-1.611l15.649-15.649l12.244,12.244
                            l-15.649,15.649c-2.148,2.148-2.148,5.63,0,7.778c1.074,1.074,2.481,1.611,3.889,1.611s2.815-0.537,3.889-1.611l15.649-15.649
                            l12.244,12.244l-15.649,15.649c-2.148,2.148-2.148,5.63,0,7.778c1.074,1.074,2.481,1.611,3.889,1.611s2.815-0.537,3.889-1.611
                            l15.649-15.649l12.244,12.244l-15.649,15.649c-2.148,2.148-2.148,5.63,0,7.778c1.074,1.074,2.481,1.611,3.889,1.611
                            s2.815-0.537,3.889-1.611l15.649-15.649l12.244,12.244l-15.649,15.649c-2.148,2.148-2.148,5.63,0,7.778
                            c1.074,1.074,2.481,1.611,3.889,1.611s2.815-0.537,3.889-1.611l15.649-15.649l12.244,12.244l-15.649,15.649
                            c-2.148,2.148-2.148,5.63,0,7.778c1.074,1.074,2.481,1.611,3.889,1.611s2.815-0.537,3.889-1.611l15.649-15.649l12.244,12.244
                            l-15.649,15.649c-2.148,2.148-2.148,5.63,0,7.778c1.074,1.074,2.481,1.611,3.889,1.611c1.407,0,2.815-0.537,3.889-1.611
                            l15.649-15.649l12.244,12.244l-15.649,15.649c-2.148,2.148-2.148,5.63,0,7.778c1.074,1.074,2.481,1.611,3.889,1.611
                            s2.815-0.537,3.889-1.611l15.649-15.649l12.244,12.244l-15.649,15.649c-2.148,2.148-2.148,5.63,0,7.778
                            c1.074,1.074,2.481,1.611,3.889,1.611s2.815-0.537,3.889-1.611l15.649-15.649l26.766,26.766H98.916z M246.84,188.744
                            L383.599,51.985l6.52,6.52L253.36,195.264L246.84,188.744z M239.062,180.966l-6.52-6.52L369.301,37.687l6.52,6.52L239.062,180.966z
                            M226.782,184.243l16.781,16.781l-27.888,11.107L226.782,184.243z M397.898,50.727l-20.818-20.818l12.956-12.956l20.818,20.818
                            L397.898,50.727z"/>
                        <path d="M387.999,404.36c-2.148-2.148-5.63-2.148-7.778,0s-2.148,5.63,0,7.778l16.97,16.97c1.074,1.074,2.481,1.611,3.889,1.611
                            c1.407,0,2.815-0.537,3.889-1.611c2.148-2.148,2.148-5.63,0-7.778L387.999,404.36z"/>
                        <path d="M418.403,434.764c-2.148-2.147-5.63-2.146-7.778,0.003c-2.147,2.149-2.146,5.631,0.003,7.778l0.346,0.345
                            c1.074,1.073,2.48,1.61,3.888,1.61c1.408,0,2.816-0.538,3.891-1.612c2.147-2.149,2.146-5.631-0.003-7.778L418.403,434.764z"/>
                        <path d="M242.483,28.878c1.408,0,2.816-0.537,3.89-1.612l0.877-0.877c2.147-2.148,2.147-5.631-0.001-7.778
                            c-2.148-2.148-5.631-2.147-7.778,0.001l-0.877,0.878c-2.147,2.148-2.147,5.63,0.001,7.778
                            C239.669,28.341,241.076,28.878,242.483,28.878z"/>
                        <path d="M212.077,59.283c1.407,0,2.815-0.537,3.889-1.611l16.971-16.97c2.148-2.148,2.148-5.63,0-7.778
                            c-2.148-2.147-5.63-2.148-7.778,0l-16.971, 16.97c-2.148,2.148-2.148,5.63,0,7.778C209.262,58.746,210.67,59.283,212.077,59.283z"/>
                        <path d="M181.672,89.689c1.407,0,2.815-0.537,3.889-1.611l16.971-16.97c2.148-2.148,2.148-5.63,0-7.778
                            c-2.148-2.148-5.63-2.148-7.778,0L177.782,80.3c-2.148,2.148-2.148,5.63,0,7.778C178.857,89.152,180.264,89.689,181.672,89.689z"/>
                        <path d="M151.266,120.094c1.408,0,2.815-0.537,3.889-1.611l16.97-16.97c2.148-2.148,2.148-5.63,0-7.778
                            c-2.148-2.148-5.631-2.147-7.778,0l-16.97,16.971c-2.148,2.148-2.148,5.63,0,7.778
                            C148.451,119.558,149.859,120.094,151.266,120.094z"/>
                    </g>

                    </svg>

                        </span>
                        <span class="hobby-title">
                            @lang('design and engineering')
                        </span>
                    </span>
                </li>
                <li class="hobby-item hike">
                            <span class="hobby-item-block">
                        <span class="hobby-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="100" height="100" viewBox="0 0 472 472" style="enable-background:new 0 0 472 472;" xml:space="preserve">
                        <g>
                            <path d="M226.321,75c10.334,0,19.167-3.667,26.5-11c7.334-7.334,11-16.167,11-26.5
                                c0-10.335-3.666-19.168-11-26.5c-7.332-7.333-16.167-11-26.5-11s-19.333,3.667-27,11c-7.667,7.333-11.5,16.167-11.5,26.5
                                s3.833,19.167,11.5,26.5C206.988,71.333,215.988,75,226.321,75z"/>
                            <path  d="M161.821,81c2-7.336-0.667-11.67-8-13l-31-8c-7.333-1.333-12,1.334-14,8l-26,108
                                c-2,6.667,0.667,10.667,8,12l31,8c7.333,1.333,12-1.333,14-8L161.821,81z"/>
                            <path d="M307.821,462v1c0,5.333,3,8,9,8c5.334,0,8.334-2.333,9-7l64-337v-1c0-5.333-3-8-9-8
                                c-4.666,0-7.666,2.333-9,7L307.821,462z"/>
                            <path d="M95.821,440v5c0,7.333,2.5,13.667,7.5,19s11.167,8,18.5,8c13.333,0,22-6.333,26-19l46-185l44,184
                                c1.334,5.333,4.334,10,9,14c4.668,4,10.334,6,17,6c7.334,0,13.5-2.667,18.5-8s7.5-11.667,7.5-19v-5l-60-245l5-21l4,17
                                c0.668,3.333,2.168,6,4.5,8c2.334,2,4.5,3,6.5,3l3,1l62,15h3c5.334,0,9.834-1.667,13.5-5c3.668-3.333,5.5-7.333,5.5-12
                                c0-9.333-4.666-15.333-14-18l-54-13l-15-58c-2-9.335-6.166-16.668-12.5-22c-6.333-5.333-12.167-8.333-17.5-9l-9-1
                                c-8.667,0-16.333,2.5-23,7.5c-6.667,5-11,10.167-13,15.5l-2,8L95.821,440z"/>
                        </g>
                        </svg>
                        </span>
                        <span class="hobby-title">
                            @lang('active leisure')
                        </span>
                    </span>
                </li>
                <li class="hobby-item boxing ">
                            <span class="hobby-item-block">
                        <span class="hobby-icon">

                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="100" height="100" viewBox="0 0 297 297" style="enable-background:new 0 0 297 297;" xml:space="preserve">
                        <g>
                            <path d="M188.887,169.646h48.704c2.884,0,5.222-2.338,5.222-5.222v-9.894c0-2.884-2.338-5.222-5.222-5.222h-48.704
                                c-2.884,0-5.222,2.338-5.222,5.222v9.894C183.665,167.308,186.003,169.646,188.887,169.646z"/>
                            <path d="M112.531,77.578c13.231-21.168,25.004-35.85,33.029-46.812l36.864,102.047c0.534,1.479,1.938,2.464,3.51,2.464h13.327
                                c2.586,0,4.389-2.566,3.511-4.999L158.16,6.623c-1.226-3.4-4.189-5.877-7.753-6.481c-3.558-0.608-7.175,0.757-9.455,3.564
                                c-0.896,1.103-21.126,28.217-46.775,69.947c-1.528,2.486,0.261,5.691,3.179,5.691h12.006
                                C110.65,79.344,111.848,78.67,112.531,77.578z"/>
                            <path d="M108.113,91.11H59.41c-2.884,0-5.222,2.338-5.222,5.222v9.894c0,2.884,2.338,5.222,5.222,5.222h48.704
                                c2.884,0,5.222-2.338,5.222-5.222v-9.894C113.335,93.448,110.997,91.11,108.113,91.11z"/>
                            <path d="M271.99,236.949c-0.006-0.04-0.011-0.08-0.016-0.121l-4.764-38.049c-1.488-10.214-10.38-17.91-20.707-17.91H181.45
                                c-10.771,0-19.911,8.386-20.846,19.108l-3.899,66.489c-0.47,8.012,2.304,15.641,7.812,21.48c5.507,5.838,12.959,9.054,20.984,9.054
                                h38.47c4.814,0,9.278-1.934,12.569-5.445c3.293-3.511,4.935-8.091,4.626-12.893l-3.727-68.352
                                c-0.212-3.869,2.754-7.176,6.623-7.387c3.851-0.234,7.176,2.754,7.387,6.623l1.918,35.183h11.877c2.005,0,3.835-0.835,5.148-2.35
                                C271.706,240.863,272.274,238.935,271.99,236.949z"/>
                            <path d="M136.396,141.778c-0.935-10.721-10.076-19.108-20.846-19.108H50.497c-10.327,0-19.219,7.695-20.707,17.91l-4.764,38.05
                                c-0.005,0.041-0.01,0.081-0.016,0.121c-0.284,1.986,0.284,3.914,1.598,5.429c1.314,1.515,3.143,2.35,5.148,2.35h11.876
                                l1.918-35.183c0.204-3.739,3.299-6.634,6.999-6.634c0.128,0,0.257,0.003,0.388,0.011c3.869,0.211,6.835,3.518,6.623,7.387
                                l-3.723,68.284c-0.313,4.872,1.329,9.451,4.622,12.962c3.292,3.511,7.756,5.445,12.569,5.445h38.47
                                c8.026,0,15.478-3.215,20.985-9.055c5.507-5.839,8.28-13.468,7.811-21.479L136.396,141.778z"/>
                        </g>

                        </svg>

                        </span>
                        <span class="hobby-title">
                            @lang('boxing')
                        </span>
                    </span>
                </li>
                <li class="hobby-item lifehack">
                            <span class="hobby-item-block">
                        <span class="hobby-icon">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="100" height="100" viewBox="0 0 236.562 236.561" style="enable-background:new 0 0 236.562 236.561;"
                                 xml:space="preserve">
                            <g>
                                <path d="M168.833,197.656l0.012,2.495c0,9.788-7.72,17.625-17.401,18.122c-2.672,10.332-17,18.282-34.416,18.288
                                    c-17.413-0.006-31.765-7.944-34.427-18.288c-9.691-0.509-17.437-8.334-17.401-18.11l-0.012-2.5L168.833,197.656z M65.199,189.759
                                    h103.64l-0.013-10.072L65.199,179.7V189.759L65.199,189.759z M205.71,88.708c0,29.625-14.547,55.804-36.859,71.899l-0.024,11.455
                                    h-13.311c3.623-3.15,5.952-7.744,5.952-12.922c0-9.492-7.702-17.212-17.212-17.212c-9.517,0-17.219,7.696-17.219,17.212
                                    c0,5.178,2.347,9.771,5.953,12.934l-67.809,0.012V160.62c-13.746-9.942-24.509-23.69-30.771-39.709
                                    c1.288,0.189,2.577,0.396,3.91,0.396c15.034,0,27.237-12.197,27.237-27.237S53.354,66.833,38.32,66.833
                                    c-2.615,0-5.083,0.485-7.468,1.167C40.19,29.022,75.168,0.024,117.004,0c21.855,0.012,41.828,7.953,57.29,21.057
                                    c-2.849-0.715-5.804-1.138-8.866-1.138c-20.049,0-36.315,16.264-36.315,36.315c0,20.053,16.267,36.316,36.315,36.316
                                    c18.306,0,33.426-13.583,35.914-31.214C204.161,69.975,205.71,79.157,205.71,88.708z M121.567,132.662
                                    c0-5.427-4.413-9.836-9.836-9.836c-5.423,0-9.835,4.409-9.835,9.836c0,5.426,4.413,9.835,9.835,9.835
                                    C117.155,142.497,121.567,138.087,121.567,132.662z M121.567,87.267c0-12.954-10.495-23.454-23.454-23.454
                                    s-23.454,10.5-23.454,23.454s10.495,23.454,23.454,23.454S121.567,100.22,121.567,87.267z M123.083,35.063
                                    c0-10.031-8.136-18.158-18.161-18.158c-10.021,0-18.158,8.127-18.158,18.158c0,10.03,8.136,18.158,18.158,18.158
                                    C114.947,53.221,123.083,45.093,123.083,35.063z M153.347,120.556c0-7.104-5.757-12.862-12.862-12.862
                                    c-7.104,0-12.861,5.757-12.861,12.862s5.757,12.862,12.861,12.862C147.59,133.418,153.347,127.661,153.347,120.556z
                                    M193.445,111.477c0-7.104-5.758-12.862-12.862-12.862s-12.861,5.757-12.861,12.862s5.757,12.861,12.861,12.861
                                    S193.445,118.582,193.445,111.477z"/>
                            </g>

                            </svg>

                        </span>
                        <span class="hobby-title">
                            @lang('interesting solutions')
                        </span>
                    </span>
                </li>
            </ul>
        </div>
    </div>
    <br>
    <br>
</section>