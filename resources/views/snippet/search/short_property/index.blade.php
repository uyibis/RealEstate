@php
    $land=$item;
@endphp
<article class="qodef-e qodef-grid-item qodef-item--custom post-2460 property type-property status-publish has-post-thumbnail hentry property-type-sell property-category-villas property-location-brooklyn property-tag-swimming-pool" data-id="2460">

    <div class="qodef-e-inner">
        <div class="qodef-e-image-holder">
            <div class="qodef-e-media-slider qodef-swiper-container" data-options="{&quot;slidesPerView&quot;:1,&quot;spaceBetween&quot;:5,&quot;loop&quot;:true,&quot;autoplay&quot;:false}">
                <div class="swiper-wrapper">
                    @foreach($land->land_listing->images as $image)
                    <a class="swiper-slide" itemprop="url" href="property/south-sun-house/index.html">
                        <img decoding="async" loading="lazy" src="{{$image->user_upload->file_path}}" alt="w" width="460" height="300" data-ratio="1.5333333333333" />
                    </a>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="qodef-e-info-item qodef--type">
                <a itemprop="url" class="qodef-e-info-item-link qodef--property-type" href="property-type/sell/index.html">
                    <span class="qodef-e-info-item-text">Sell</span>
                </a>
            </div>
            <div class="qodef-e-actions">
                <div class="qodef-wishlist qodef-m">
                    <button type="button" class="qodef-m-action-button qodef-property-spinner qodef--allowed-remove qodef-m-link " data-id="2460" data-title="Add to wishlist" data-added-title="Added to wishlist">
            <span class="qodef-m-icon">
              <svg width="17" height="17" viewBox="0 0 17 17">
                <g fill="currentColor" stroke-linecap="round" stroke-linejoin="round">
                  <path class="qodef-m-fav-inner" fill="none" d="M7.571 2.323a1 1 0 0 1 1.857 0l1.223 3.06a1 1 0 0 0 .841.625l3.232.285a1 1 0 0 1 .584 1.737l-2.527 2.293a1 1 0 0 0-.3.958l.749 3.36a1 1 0 0 1-1.516 1.059L9.037 14a1 1 0 0 0-1.074 0l-2.677 1.7a1 1 0 0 1-1.513-1.06l.749-3.36a1 1 0 0 0-.3-.958l-2.53-2.293a1 1 0 0 1 .584-1.737l3.232-.285a1 1 0 0 0 .841-.625Z" />
                  <path class="qodef-m-fav-outer" d="M8.50000095 2.49375057c-.08987045 0-.15235042.04231072-.18570995.12575054L7.0910511 5.67916107c-.25337982.63377-.83314037 1.06476975-1.51305008 1.12481976l-3.23159027.28536033c-.10766983.00951004-.15294933.07890988-.17196941.1354599-.01902008.05655003-.02488995.13922024.05515003.2118597l2.52661991 2.29319955c.47799969.43382072.68763924 1.0947113.54710007 1.72475051l-.74938011 3.35963059c-.01449013.06495953-.0037899.1169796.03366947.16371918.04036999.05037021.10447979.08292007.16331005.08292007.03472042 0 .06928062-.01126003.10564041-.03440952l2.67663002-1.70440006c.28940964-.18428994.6237297-.28170014.96681976-.28170014s.67741013.0974102.96681977.28170014l2.67663002 1.70440006c.03636074.02314949.07091999.03440952.1056404.03440952.05881024 0 .12290002-.03254986.16327954-.0829401.04924011-.06142998.04281044-.12284947.03370094-.16372013l-.7493801-3.35957909c-.14055062-.63004112.0690794-1.2909298.54707908-1.72477054l2.5266304-2.29319954c.08004952-.07264996.07417965-.15532017.05516052-.2118702-.01902008-.05655002-.06430053-.12594986-.17197036-.1354599L11.4220209 6.8039713c-.6799097-.06002998-1.25969028-.4910307-1.51306057-1.12481022L8.68571091 2.61951065c-.03335953-.08344936-.09585-.12576008-.18570996-.12576008m-.00000381-.79999923c.380476 0 .7609539.20958995.92854404.62876987l1.22324944 3.05965996c.13997078.35011005.46498012.59173012.84057999.62488937l3.23159027.28537083c.86851024.07668972 1.2297306 1.1506195.58411026 1.73660946l-2.52663994 2.29321003c-.26615048.24155998-.3821907.60737991-.30393028.95818996l.7493801 3.3596096c.19408036.87005044-.76120948 1.54002-1.51313018 1.06121064l-2.67663002-1.70440007c-.32768059-.20866012-.74655914-.20866012-1.07423973 0l-2.67663002 1.70440007c-.75192166.47880935-1.70720959-.1911602-1.51313019-1.06121064l.74938011-3.3596096c.07824993-.35081005-.0377798-.71662998-.30393982-.95818996l-2.5266304-2.29321003c-.6456194-.58597946-.28439999-1.65991974.58411026-1.73660946l3.23159027-.28536034c.37559986-.03316974.7006092-.2747898.84057999-.62489986L7.57146072 2.3225212c.16758538-.41917992.54806042-.62876987.92853642-.62876987Z" />
                </g>
              </svg>
            </span>
                        <span class="qodef-m-tooltip">Add to wishlist</span>
                        <span class="qodef-m-spinner">
              <svg width="20" height="20" viewBox="0 0 50 50">
                <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" />
              </svg>
            </span>
                    </button>
                    <div class="qodef-m-response"></div>
                </div>
                <button type="button" class="qodef-m-action-button qodef-property-spinner qodef--compare " data-property-id="2460" data-title="Add to compare" data-added-title="Added to compare">
          <span class="qodef-m-icon">
            <svg width="13" height="13" viewBox="0 0 13 13">
              <path fill="none" stroke="currentColor" d="M6.5 0v13M0 6.5h13" />
            </svg>
          </span>
                    <span class="qodef-m-tooltip"> Add to compare </span>
                    <span class="qodef-m-spinner">
            <svg width="20" height="20" viewBox="0 0 50 50">
              <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" />
            </svg>
          </span>
                </button>
            </div>
            <div class="qodef-e-author">
                <div class="qodef-e-author-image">
                    <a itemprop="url" href="author/steve-parker/index.html">
                        <img decoding="async" loading="lazy" src="{{asset($land->land_listing->realtor->image)}}" alt="b" width="50" height="50" data-ratio="1" />
                    </a>
                </div>
                <a itemprop="url" class="qodef-e-author-name" href="author/steve-parker/index.html">{{explode(' ', $land->land_listing->realtor->name)[0]}}</a>
            </div>
        </div>
        <div class="qodef-e-content">
            <div class="qodef-e-top-info">
                <div class="qodef-e-info">
                    <svg width="10" height="14" viewBox="0 0 10 14">
                        <g transform="translate(-176.732 -1468.625)">
                            <path d="M181.77841914 1469.42474238c-1.18292999 0-2.25112009.39579964-3.00782013 1.11448002-.81029987.76959991-1.23859977 1.87357998-1.23859977 3.19257974 0 .6967001.32018947 2.02022028 1.84558963 4.36906004.85201931 1.31195736 1.78410721 2.49109268 2.39263678 3.23786545.59846926-.75298881 1.51947641-1.94614792 2.35712338-3.26402569 1.49156045-2.34667969 1.80464983-3.65694952 1.80464983-4.3428998 0-1.3133502-.41541005-2.41482973-1.20132971-3.18536997-.73777008-.72332954-1.78623009-1.1216898-2.95225-1.1216898m0-.80000018c2.76142024 0 4.9535799 1.89883995 4.9535799 5.10705995 0 3.15320587-4.87000561 8.6986804-4.95362902 8.8879714-.08729982-.18853569-5.04637098-5.6929469-5.04637098-8.8879714 0-3.25097036 2.28498983-5.10705995 5.0464201-5.10705995Zm-.00004912 13.99503135c.00305176.00659275-.00292444.0066185 0 0Z" fill="currentColor" />
                            <circle cx="1.5" cy="1.5" r="1.5" transform="translate(180.232 1471.705)" fill="currentColor" />
                        </g>
                    </svg>
                    <div class="qodef-e-info-item qodef--category">
                        <a itemprop="url" class="qodef-e-info-item-link qodef--property-category" href="property-category/villas/index.html">
                            <span class="qodef-e-info-item-text">{{$land->land_listing->area}}</span>
                        </a>
                    </div>
                    <span class="qodef-info-separator-end"></span>
                    <div class="qodef-e-info-item qodef--location">
                        <a itemprop="url" class="qodef-e-info-item-link qodef--property-location" href="property-location/brooklyn/index.html">
                            <span class="qodef-e-info-item-text">{{$land->land_listing->city}}</span>
                        </a>
                    </div>
                    <span class="qodef-info-separator-end"></span>
                </div>
            </div>
            <h4 itemprop="name" class="qodef-e-title entry-title">
                <a itemprop="url" class="qodef-e-title-link" href="property/south-sun-house/index.html">{{$land->land_listing->title}}</a>
            </h4>
            <p itemprop="description" class="qodef-e-excerpt">{{$land->land_listing->description}}</p>
            <div class="qodef-e-bottom-info">
                <div class="qodef-e-price">
                    <span class="qodef-e-price-amount qodef-h5"> {{$land->land_listing->price}}{{\App\Enum\Currency::Naira}} </span>
                </div>

            </div>
        </div>
    </div>
</article>

