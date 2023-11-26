<!--        <div class="qodef-m-form-holder-secondary qodef&#45;&#45;hide">
            <div class="qodef-m-form-overlay"></div>
            <form role="search" method="get" class="qodef-property-search-form qodef-m-form qodef&#45;&#45;secondary" action="{{asset('search')}}">
                <input type="hidden" name="s" value /> <input type="hidden" name="property-search" value="yes" /> <input type="hidden" name="amenity" value />
                <div class="qodef-m-form-wrapper">
                    <div class="qodef-m-form-heading">
                        <h5 class="qodef-m-form-title">Advanced filters</h5>
                        <a class="qodef-m-button&#45;&#45;advanced-close qodef-m">
                            <span class="qodef-m-icon">
                                <svg class="qodef-svg&#45;&#45;close-modal" xmlns="http://www.w3.org/2000/svg" width="14.142" height="14.142" viewBox="0 0 14.142 14.142">
                                    <path d="M13.7885834 13.7882051a.5.5 0 0 1-.70710679 0L.35355455 1.06028304a.5.5 0 0 1 0-.70710678.5.5 0 0 1 .70710678 0L13.7885834 13.08109832a.5.5 0 0 1 0 .70710678Z" data-name="Line 839" />
                                    <path d="M13.7885834 1.06028304 1.06066133 13.7882051a.5.5 0 0 1-.70710678 0 .5.5 0 0 1 0-.70710678L13.08147661.35317626a.5.5 0 0 1 .70710679 0 .5.5 0 0 1 0 .70710678Z" data-name="Line 840" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <h6 class="qodef-m-form-subtitle">Property details:</h6>
                    <div class="qodef-m-form-row qodef&#45;&#45;details">
                        <div class="qodef-m-form-item qodef&#45;&#45;type">
                            <div class="qodef-m-form-item-inner qodef-m-select qodef-m-select&#45;&#45;type">
                                <select name="type">
                                    <option value>Type</option>
                                    <option value="buy">Buy</option>
                                    <option value="for-rent">Rent</option>
                                </select>
                            </div>
                        </div>
                        <div class="qodef-m-form-item qodef&#45;&#45;category">
                            <div class="qodef-m-form-item-inner qodef-m-select qodef-m-select&#45;&#45;category">
                                <select name="category">
                                    <option value>Category</option>
                                    <option value="apartments">Apartments</option>
                                    <option value="condos">Condos</option>
                                    <option value="houses">Houses</option>
                                    <option value="villas">Villas</option>
                                </select>
                            </div>
                        </div>
                        <div class="qodef-m-form-item qodef&#45;&#45;location">
                            <div class="qodef-m-form-item-inner qodef-m-select qodef-m-select&#45;&#45;location qodef&#45;&#45;multi-select">
                                <select name="location[]" multiple data-placeholder="Location">
                                    <option value="brooklyn">Brooklyn</option>
                                    <option value="manhattan">Manhattan</option>
                                    <option value="queens">Queens</option>
                                    <option value="staten-island">Staten Island</option>
                                    <option value="the-bronx">The Bronx</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h6 class="qodef-m-form-subtitle">Property size:</h6>
                    <div class="qodef-m-form-row qodef&#45;&#45;size">
                        <div class="qodef-m-form-item qodef&#45;&#45;size">
                            <div class="qodef-m-form-item-inner qodef-m-text qodef-m-text&#45;&#45;size"><input type="text" name="size_min" value placeholder="Min area m2" /></div>
                            <div class="qodef-m-form-item-inner qodef-m-text qodef-m-text&#45;&#45;size"><input type="text" name="size_max" value placeholder="Max area m2" /></div>
                        </div>
                        <div class="qodef-m-form-item qodef&#45;&#45;specification">
                            <div class="qodef-m-form-item-inner qodef-m-number qodef-m-number&#45;&#45;specification"><label class="qodef-m-text-label"> Bedroom: </label> <input type="text" name="specification_bedroom" value /></div>
                            <div class="qodef-m-form-item-inner qodef-m-number qodef-m-number&#45;&#45;specification"><label class="qodef-m-text-label"> Bathroom: </label> <input type="text" name="specification_bathroom" value /></div>
                        </div>
                    </div>
                    <h6 class="qodef-m-form-subtitle">Price range:</h6>
                    <div class="qodef-m-form-row qodef&#45;&#45;price">
                        <div class="qodef-m-form-item qodef&#45;&#45;price-range" data-min-price="0" data-max-price="650000" data-currency="&#036;" data-current-min-price="0" data-current-max-price="650000" data-filter-type="price">
                            <div class="qodef-m-form-item-inner qodef-m-price">
                                <div class="qodef-m-price-heading">
                                    <span class="qodef-m-price-info"> <span>From:</span> <span class="qodef-m-price-info-min">0&#036;</span> <span>To:</span> <span class="qodef-m-price-info-max">650,000&#036;</span> </span>
                                </div>
                                <div class="qodef-m-price-range-slider-wrapper"><div class="qodef-m-price-range-slider"></div></div>
                            </div>
                        </div>
                    </div>
                    <h6 class="qodef-m-form-subtitle">Amenities:</h6>
                    <div class="qodef-m-form-row qodef&#45;&#45;amenities">
                        <div class="qodef-m-form-item qodef&#45;&#45;amenity">
                            <div class="qodef-m-form-item-inner qodef-m-checkbox qodef-m-checkbox&#45;&#45;amenity">
                                <div class="qodef-m-checkbox-items">
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="air_condition" name="amenity[]" value="air_condition" /> <label for="air_condition">Air Condition</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="cable_tv" name="amenity[]" value="cable_tv" /> <label for="cable_tv">Cable TV</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="ceiling_height" name="amenity[]" value="ceiling_height" /> <label for="ceiling_height">Ceiling Height</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="construction_year" name="amenity[]" value="construction_year" /> <label for="construction_year">Construction Year</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="disabled_access" name="amenity[]" value="disabled_access" /> <label for="disabled_access">Disabled Access</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="elevator" name="amenity[]" value="elevator" /> <label for="elevator">Elevator</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="fence" name="amenity[]" value="fence" /> <label for="fence">Fence</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="fireplace" name="amenity[]" value="fireplace" /> <label for="fireplace">Fireplace</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="floor" name="amenity[]" value="floor" /> <label for="floor">Floor</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="furnishing" name="amenity[]" value="furnishing" /> <label for="furnishing">Furnishing</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="garage" name="amenity[]" value="garage" /> <label for="garage">Garage</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="garden" name="amenity[]" value="garden" /> <label for="garden">Garden</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="heating" name="amenity[]" value="heating" /> <label for="heating">Heating</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="intercom" name="amenity[]" value="intercom" /> <label for="intercom">Intercom</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="parking" name="amenity[]" value="parking" /> <label for="parking">Parking</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="pet_friendly" name="amenity[]" value="pet_friendly" /> <label for="pet_friendly">Pet Friendly</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="renovation" name="amenity[]" value="renovation" /> <label for="renovation">Renovation</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="security" name="amenity[]" value="security" /> <label for="security">Security</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="swimming_pool" name="amenity[]" value="swimming_pool" /> <label for="swimming_pool">Swimming Pool</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="wifi" name="amenity[]" value="wifi" /> <label for="wifi">WiFi</label></div>
                                    <div class="qodef-m-checkbox-item"><input type="checkbox" id="window_type" name="amenity[]" value="window_type" /> <label for="window_type">Window Type</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="qodef-m-form-row qodef&#45;&#45;buttons">
                        <div class="qodef-m-form-item qodef&#45;&#45;search">
                            <div class="qodef-m-form-item-inner qodef-m-button qodef-m-button&#45;&#45;search">
                                <button class="qodef-m-button&#45;&#45;submit qodef-m">
                                    <span class="qodef-m-icon">
                                        <svg width="15.031" height="15.03" viewBox="0 0 15.031 15.03">
                                            <g fill="none" stroke="currentColor" stroke-width="1.5">
                                                <circle cx="6" cy="6" r="5.25" />
                                                <path d="m9.5 9.5 5 5" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="qodef-m-text">Search property </span>
                                </button>
                                <span class="qodef-m-form-response"></span>
                                <button class="qodef-m-button&#45;&#45;save qodef-property-spinner qodef-m">
                                    <span class="qodef-m-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14.8" height="14.8" viewBox="0 0 14.8 14.8">
                                            <g transform="translate(-2.6 -2.6)">
                                                <path
                                                    d="M15.444,17H4.556A1.556,1.556,0,0,1,3,15.444V4.556A1.556,1.556,0,0,1,4.556,3h8.556L17,6.889v8.556A1.556,1.556,0,0,1,15.444,17Z"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="0.8"
                                                />
                                                <path d="M16.16,17.84V13H7v4.84" transform="translate(-1.58 -0.84)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.8" />
                                                <path d="M7,3V6.025h4.84" transform="translate(-0.336)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.8" />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="qodef-m-text"> Save </span>
                                    <span class="qodef-m-spinner">
                                        <svg width="20" height="20" viewBox="0 0 50 50"><circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" /></svg>
                                    </span>
                                </button>
                                <button class="qodef-m-button&#45;&#45;reset qodef-m">
                                    <span class="qodef-m-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.032" height="15.377" viewBox="0 0 17.032 15.377">
                                            <g transform="translate(-0.435 -2.434)">
                                                <path d="M1,4V8.8H5.8" transform="translate(0 -0.198)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.8" />
                                                <path
                                                    d="M4.948,15.531A7.023,7.023,0,0,0,10.213,17.4a7.2,7.2,0,1,0-5.5-12.284L1,8.6"
                                                    transform="translate(0 0)"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    stroke-width="0.8"
                                                />
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="qodef-m-text"> Reset </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>-->
