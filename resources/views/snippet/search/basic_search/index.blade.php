<form role="search" method="get" class="qodef-property-search-form qodef-m-form qodef--primary" action="{{asset('query')}}">
    <!--            <input type="hidden" name="s" value /> <input type="hidden" name="property-search" value="yes" />-->
    <div class="qodef-m-form-wrapper">
        <div class="qodef-m-form-item qodef--type">
            <div class="qodef-m-form-item-inner qodef-m-radio qodef-m-radio--type">
                <div class="qodef-m-radio-items">
                    <div class="qodef-m-radio-item">
                        <input type="radio" id="buy" name="type" value="apartment" /> <label for="buy">Apartment</label>
                    </div>
                    <div class="qodef-m-radio-item">
                        <input type="radio" id="for-rent" name="type" value="building" /> <label for="for-rent">Building</label>
                    </div>
                    <div class="qodef-m-radio-item">
                        <input type="radio" id="for-sell" name="type" value="land" /> <label for="for-sell">Land</label>
                    </div>
                </div>
            </div>
        </div>
        <!--                <div class="qodef-m-form-item qodef&#45;&#45;type">
                            <div class="qodef-m-form-item-inner qodef-m-radio qodef-m-select&#45;&#45;type">
                                <select name="type" class="qodef-m-radio-items">
                                    <option  selected>Apartment</option>
                                    <option value="buy">Land</option>
                                    <option value="for-rent">Building</option>
                                </select>
                            </div>
                        </div>-->
        <div class="qodef-m-form-row">
            <div class="qodef-m-form-item qodef--category">
                <div class="qodef-m-form-item-inner qodef-m-select qodef-m-select--location qodef--multi-select">
                    <select name="keyword" multiple data-placeholder="Property">

                        @foreach($uniqueKeywords as $area)
                            <option value="{{$area}}">{{ucfirst($area)}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="qodef-m-form-item qodef--location">
                <div class="qodef-m-form-item-inner qodef-m-select qodef-m-select--location qodef--multi-select">
                    <select name="location[]" multiple data-placeholder="Area">

                        @foreach($uniqueAreas as $area)
                            <option value="{{$area}}">{{ucfirst($area)}}</option>
                    @endforeach

                    <!--
                                <option value="brooklyn">Brooklyn</option>
                                <option value="manhattan">Manhattan</option>
                                <option value="queens">Queens</option>
                                <option value="staten-island">Staten Island</option>
                                <option value="the-bronx">The Bronx</option>
                                -->

                    </select>
                </div>
            </div>

            <div class="qodef-m-form-item qodef--search">
                <div class="qodef-m-form-item-inner qodef-m-button qodef-m-button--search">
                    <!--                            <button class="qodef-m-button&#45;&#45;advanced-open qodef-m">
                                                    <span class="qodef-m-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="12.5" viewBox="0 0 17.5 12.5">
                                                            <g transform="translate(-1296.5 -704.189)">
                                                                <line x2="17.5" transform="translate(1296.5 706.689)" fill="none" stroke="currentColor" stroke-width="1.5" />
                                                                <line x2="17.5" transform="translate(1296.5 714.189)" fill="none" stroke="currentColor" stroke-width="1.5" />
                                                                <g transform="translate(1300 704.189)" fill="var(&#45;&#45;qode-main-color-one)" stroke="currentColor" stroke-width="1">
                                                                    <circle cx="2.5" cy="2.5" r="2.5" stroke="none" />
                                                                    <circle cx="2.5" cy="2.5" r="2" fill="none" />
                                                                </g>
                                                                <g transform="translate(1306 711.689)" fill="var(&#45;&#45;qode-main-color-one)" stroke="currentColor" stroke-width="1">
                                                                    <circle cx="2.5" cy="2.5" r="2.5" stroke="none" />
                                                                    <circle cx="2.5" cy="2.5" r="2" fill="none" />
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <span class="qodef-m-text"> Advanced </span>
                                                </button>-->
                    <button class="qodef-m-button--submit qodef-m">
                                <span class="qodef-m-icon">
                                    <svg width="15.031" height="15.03" viewBox="0 0 15.031 15.03">
                                        <g fill="none" stroke="currentColor" stroke-width="1.5">
                                            <circle cx="6" cy="6" r="5.25" />
                                            <path d="m9.5 9.5 5 5" />
                                        </g>
                                    </svg>
                                </span>
                        <span class="qodef-m-text"> Search property </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
