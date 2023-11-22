@extends('layout.front.base_listing')

@section('content')
    <div class="qodef-content-grid">
        <section class="qodef-m-heading">
            <div class="qodef-m-heading-left">
                <div class="qodef-m-types qodef--touch">
                    <a href="../../property-type/sell/index.html" rel="tag">Rent</a> </div>

                <h2 class="qodef-m-heading-title">{{$listing->land_listing->title}}</h2>


                <div class="qodef-m-heading-bottom">
                    <div class="qodef-m-types qodef--desktop">
                        <a href="../../property-type/sell/index.html" rel="tag">{{$listing->land_listing->area}}</a> </div>
                    <div class="qodef-m-categories">
                        <a href="../../property-category/villas/index.html" rel="tag">{{$listing->land_listing->city}}</a> </div>
                    <div class="qodef-m-separator"></div>
                    <div class="qodef-m-separator"></div>
                    <div class="qodef-m-view-count">
<span class="qodef-m-view-count-icon">
<svg width="14.842" height="11.013" viewBox="0 0 14.842 11.013">
<g transform="translate(-.6 -3.6)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width=".8">
<path d="M1 9.106S3.553 4 8.021 4s7.021 5.106 7.021 5.106-2.553 5.106-7.021 5.106S1 9.106 1 9.106Z" />
<circle cx="2" cy="2" r="2" transform="translate(6 7)" />
</g>++
</svg>
</span>
                        <span class="qodef-m-view-count-content">
3234 </span>
                    </div>
                    <div class="qodef-m-separator"></div>
                </div>
            </div>
            <div class="qodef-m-heading-right">
                <div class="qodef-m-price">
                    <h5 class="qodef-m-price-title">
                        Price: </h5>
                    <div class="qodef-m-price-content">
<span class="qodef-m-price-amount qodef-h5">
{{$listing->land_listing->price}} {{\App\Enum\Currency::Naira}}
 </span>
                    </div>
                </div>
                <div class="qodef-m-actions-extended">
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
                            <span class="qodef-m-text qodef-m-link-label">Add to wishlist</span>
                            <span class="qodef-m-spinner">
<svg width="20" height="20" viewBox="0 0 50 50">
<circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" />
</svg>
</span>
                        </button>
                        <div class="qodef-m-response"></div>
                        +      </div>
                    +       <button type="button" class="qodef-m-action-button qodef-property-spinner qodef--compare " data-property-id="2460" data-title="Add to compare" data-added-title="Added to compare">
<span class="qodef-m-icon">
<svg width="13" height="13" viewBox="0 0 13 13">
<path fill="none" stroke="currentColor" d="M6.5 0v13M0 6.5h13" />
</svg>
</span>
                        <span class="qodef-m-tooltip">
Add to compare </span>
                        <span class="qodef-m-spinner">
<svg width="20" height="20" viewBox="0 0 50 50">
<circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" />
</svg>
</span>
                    </button>
                    <div class="qodef-shortcode qodef-m  qodef-social-share clear qodef-layout--dropdown qodef-dropdown--bottom"> <a class="qodef-social-share-dropdown-opener" href="javascript:void(0)"> <span class="qodef-m-icon"> <svg class="qodef-svg--social-share qodef-e-social-share-icon" xmlns="http://www.w3.org/2000/svg" width="13" height="15.5" viewBox="0 0 13 15.5"><path d="M2.5 6.3A1.7 1.7 0 1 0 4.2 8a1.7 1.7 0 0 0-1.7-1.7m0-.8A2.5 2.5 0 1 1 0 8a2.5 2.5 0 0 1 2.5-2.5Z" /><path d="M10.5 11.3a1.7 1.7 0 1 0 1.7 1.7 1.7 1.7 0 0 0-1.7-1.7m0-.8A2.5 2.5 0 1 1 8 13a2.5 2.5 0 0 1 2.5-2.5Z" /><path d="M10.5.8a1.7 1.7 0 1 0 1.7 1.7A1.7 1.7 0 0 0 10.5.8m0-.8A2.5 2.5 0 1 1 8 2.5 2.5 2.5 0 0 1 10.5 0Z" /><path d="m4.222 7.333-.444-.666 4.5-3 .444.666Z" /><path d="m8.794 12.343-5-3 .412-.686 5 3Z" /></svg> </span> <span class="qodef-m-tooltip"> Share </span> </a> <div class="qodef-social-share-dropdown"> <ul class="qodef-shortcode-list"> <li class="qodef-facebook-share"> <a itemprop="url" class="qodef-share-link" href="#" onclick="window.open(&#039;https://www.facebook.com/sharer.php?u=https%3A%2F%2Fnewhome.qodeinteractive.com%2Fproperty%2Fsouth-sun-house%2F&#039;, &#039;sharer&#039;, &#039;toolbar=0,status=0,width=620,height=280&#039;);"> <svg class="qodef-svg--facebook qodef-facebook-share" xmlns="http://www.w3.org/2000/svg" width="8.7" height="15" viewBox="0 0 8.7 15"><path d="M6.1 0h2.1a.5.5 0 0 1 .5.5v2.8a.5.5 0 0 1-.5.5H6.1a.2.2 0 0 0-.2.2v1.6h2.3a.5.5 0 0 1 .485.621l-.7 2.8A.5.5 0 0 1 7.5 9.4H5.9v5.1a.5.5 0 0 1-.5.5H2.6a.5.5 0 0 1-.5-.5V9.4H.5a.5.5 0 0 1-.5-.5V6.1a.5.5 0 0 1 .5-.5h1.6V4a4 4 0 0 1 4-4Zm1.6 1H6.1a3 3 0 0 0-3 3v2.1a.5.5 0 0 1-.5.5H1v1.8h1.6a.5.5 0 0 1 .5.5V14h1.8V8.9a.5.5 0 0 1 .5-.5h1.71l.45-1.8H5.4a.5.5 0 0 1-.5-.5V4a1.2 1.2 0 0 1 1.2-1.2h1.6Z" /></svg> </a></li><li class="qodef-twitter-share"> <a itemprop="url" class="qodef-share-link" href="#" onclick="window.open(&#039;https://twitter.com/intent/tweet?text=Lorem+ipsum+dolor+sit+amet%2C+wisi+nemore+fastidii+at+vis%2C+eos+equidem+admodum+via+%40QodeInteractivehttps://newhome.qodeinteractive.com/property/south-sun-house/&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);"> <svg class="qodef-svg--twitter qodef-twitter-share" xmlns="http://www.w3.org/2000/svg" width="13.861" height="11.49" viewBox="0 0 13.861 11.49"><path d="M9.549 0a3.119 3.119 0 0 1 2.117.828 5.86 5.86 0 0 0 1.407-.731.5.5 0 0 1 .774.527 5.009 5.009 0 0 1-1.172 2.2 3.132 3.132 0 0 1 .017.313A8.368 8.368 0 0 1 10.3 9.28a7.865 7.865 0 0 1-5.56 2.209 9.273 9.273 0 0 1-4.483-1.193.5.5 0 0 1 .263-.937h.251a6.278 6.278 0 0 0 2.782-.646A5.522 5.522 0 0 1 .658 4.036 7.645 7.645 0 0 1 1.212.887a.5.5 0 0 1 .866-.084A5.738 5.738 0 0 0 6.43 3.231v-.074A3.119 3.119 0 0 1 9.549 0Zm1.977 1.9a.5.5 0 0 1-.377-.172A2.119 2.119 0 0 0 7.43 3.147s0 0 0 .007v.585a.5.5 0 0 1-.487.5A6.74 6.74 0 0 1 1.86 2.116a6.545 6.545 0 0 0-.2 1.908A4.711 4.711 0 0 0 4.8 8.233a.5.5 0 0 1 .078.871A7.286 7.286 0 0 1 2.5 10.159a7.939 7.939 0 0 0 2.244.33 6.922 6.922 0 0 0 6.952-7.353 2.132 2.132 0 0 0-.038-.391.5.5 0 0 1 .14-.45 4.014 4.014 0 0 0 .535-.652 6.885 6.885 0 0 1-.659.236.5.5 0 0 1-.149.021Z" /></svg> </a></li><li class="qodef-pinterest-share"> <a itemprop="url" class="qodef-share-link" href="#" onclick="popUp=window.open(&#039;https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fnewhome.qodeinteractive.com%2Fproperty%2Fsouth-sun-house%2F&amp;description=South+Sun+House&amp;media=https%3A%2F%2Fnewhome.qodeinteractive.com%2Fwp-content%2Fuploads%2F2023%2F03%2Fmain-home-property.jpg&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;"> <svg class="qodef-svg--pinterest qodef-pinterest-share" xmlns="http://www.w3.org/2000/svg" width="12.8" height="16.301" viewBox="0 0 12.8 16.301"><path d="M6.763 0a6.248 6.248 0 0 1 4.37 1.671A5.353 5.353 0 0 1 12.8 5.5a7.534 7.534 0 0 1-1.413 4.606 4.721 4.721 0 0 1-3.792 1.9 3.248 3.248 0 0 1-1.974-.673c-.16.631-.374 1.473-.441 1.717a9.7 9.7 0 0 1-1.658 3.029l-.018.023a.519.519 0 0 1-.414.2.51.51 0 0 1-.511-.445l-.008-.037a10.057 10.057 0 0 1 .039-3.492L3.728 7.6a4.02 4.02 0 0 1-.264-1.445c0-1.517.93-2.7 2.117-2.7a1.583 1.583 0 0 1 1.6 1.737 7.68 7.68 0 0 1-.451 2.042c-.124.4-.252.815-.345 1.21a.964.964 0 0 0 .166.838 1.067 1.067 0 0 0 .85.385 2.069 2.069 0 0 0 1.7-1.2 6.412 6.412 0 0 0 .726-3.131c0-1.858-1.266-3.012-3.3-3.012a3.841 3.841 0 0 0-3.984 3.864 2.173 2.173 0 0 0 .493 1.487.821.821 0 0 1 .209.858c-.022.084-.059.233-.1.376s-.066.261-.085.336a.7.7 0 0 1-.689.555.8.8 0 0 1-.3-.062A3.807 3.807 0 0 1-.001 5.966a5.785 5.785 0 0 1 1.712-4.015A6.853 6.853 0 0 1 6.763 0Zm.833 11.2c2.593 0 4.4-2.345 4.4-5.7a4.549 4.549 0 0 0-1.42-3.252A5.453 5.453 0 0 0 6.763.8a6.072 6.072 0 0 0-4.484 1.714 4.98 4.98 0 0 0-1.48 3.448 3.05 3.05 0 0 0 1.5 3l.064-.252c.037-.147.075-.3.1-.387.007-.028.012-.047.014-.059s-.028-.038-.061-.077a2.967 2.967 0 0 1-.682-2A4.649 4.649 0 0 1 3.027 2.93a4.789 4.789 0 0 1 3.492-1.41 4.234 4.234 0 0 1 3.027 1.087 3.692 3.692 0 0 1 1.077 2.725 7.216 7.216 0 0 1-.832 3.529A2.8 2.8 0 0 1 7.4 10.466a1.862 1.862 0 0 1-1.477-.689 1.748 1.748 0 0 1-.317-1.518c.1-.421.232-.848.359-1.261a7.276 7.276 0 0 0 .416-1.806.817.817 0 0 0-.8-.937c-.739 0-1.317.837-1.317 1.9a3.087 3.087 0 0 0 .243 1.232l.063.128-.032.141-1.145 4.852a8.127 8.127 0 0 0-.105 2.536 7.835 7.835 0 0 0 1.123-2.213c.107-.387.619-2.418.624-2.439l.256-1.015.486.927a2.186 2.186 0 0 0 1.819.896Z" /></svg> </a></li><li class="qodef-tumblr-share"> <a itemprop="url" class="qodef-share-link" href="#" onclick="popUp=window.open(&#039;https://www.tumblr.com/share/link?url=https%3A%2F%2Fnewhome.qodeinteractive.com%2Fproperty%2Fsouth-sun-house%2F&amp;name=South+Sun+House&amp;description=Lorem+ipsum+dolor+sit+amet%2C+wisi+nemore+fastidii+at+vis%2C+eos+equidem+admodum&#039;, &#039;popupwindow&#039;, &#039;scrollbars=yes,width=800,height=400&#039;);popUp.focus();return false;"> <svg class="qodef-svg--tumblr qodef-tumblr-share" xmlns="http://www.w3.org/2000/svg" width="9.8" height="14.814" viewBox="0 0 9.8 14.814"><path d="M52.17,14.414a4.813,4.813,0,0,1-1.661-.266,4.249,4.249,0,0,1-1.438-.793,3.075,3.075,0,0,1-.882-1.179,4.561,4.561,0,0,1-.242-1.659V6.461H46.786a.67.67,0,0,1-.67-.669V3.883a.668.668,0,0,1,.462-.637,3.9,3.9,0,0,0,1.292-.612,3.035,3.035,0,0,0,.746-.95,4.534,4.534,0,0,0,.4-1.5A.67.67,0,0,1,49.686-.4H51.6a.67.67,0,0,1,.669.669V2.716h2.446a.67.67,0,0,1,.669.67V5.792a.67.67,0,0,1-.669.669H52.273V9.486a7.264,7.264,0,0,0,.031.98.612.612,0,0,0,.227.24,1.27,1.27,0,0,0,.681.175,3.04,3.04,0,0,0,1.668-.555.67.67,0,0,1,1.037.559V13.01a.672.672,0,0,1-.384.606,8.721,8.721,0,0,1-1.7.617A7.373,7.373,0,0,1,52.17,14.414ZM46.917,5.661h1.83v4.856a3.825,3.825,0,0,0,.185,1.363,2.289,2.289,0,0,0,.66.868,3.451,3.451,0,0,0,1.168.641,3.991,3.991,0,0,0,1.411.226,6.572,6.572,0,0,0,1.484-.161,7.782,7.782,0,0,0,1.463-.527V11.12a3.722,3.722,0,0,1-1.9.56,2.062,2.062,0,0,1-1.09-.287,1.377,1.377,0,0,1-.568-.65,4.306,4.306,0,0,1-.08-1.257V5.661h3.115V3.516H51.473V.4H49.8a5.177,5.177,0,0,1-.471,1.646,3.828,3.828,0,0,1-.941,1.2,4.516,4.516,0,0,1-1.473.734Z" transform="translate(-46.117 0.4)" /></svg> </a></li> </ul> </div></div><button type="button" class="qodef-m-action-button qodef--print" data-id="2460">
<span class="qodef-m-icon">
<svg width="16.05" height="15.8" viewBox="0 0 16.05 15.8">
<g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width=".8">
<path d="M3.4 5.583V.4h9.327v5.183" />
<path d="M3.3 12.247H1.925A1.5 1.5 0 0 1 .4 10.766v-3.7a1.5 1.5 0 0 1 1.525-1.483h12.2a1.5 1.5 0 0 1 1.525 1.481v3.7a1.5 1.5 0 0 1-1.525 1.481H12.8" />
<path d="M3.4 9.4h9.326v6H3.4z" />
</g>
</svg>
</span>
                        <span class="qodef-m-tooltip">Print</span>
                    </button>
                </div>
            </div>
        </section>
        <div id="qodef-property-media" class="qodef-property-media--slider-custom">
            <div class="qodef-custom-slider">
                <div class="qodef-custom-slider--images swiper">
                    <div class="swiper-wrapper">
                        @foreach($listing->land_listing->images as $image)
                            <div class="swiper-slide">
                                <img width="1370" height="768" src="{{$image->user_upload->file_path}}" class="attachment-1400x768 size-1400x768" alt="w" decoding="async" fetchpriority="high" srcset="{{$image->user_upload->file_path}} 1400w, {{$image->user_upload->file_path}} 300w, {{$image->user_upload->file_path}} 1024w, {{$image->user_upload->file_path}} 768w, {{$image->user_upload->file_path}} 600w" sizes="(max-width: 1370px) 100vw, 1370px" />
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper-button-prev "><svg class="qodef-svg--slider-arrow-left" width="15.445" height="15.445" viewBox="0 0 15.445 15.445"><path d="M8.42920638 14.73820638 1.414 7.723 8.42920638.70779362" /></svg></div>
                    <div class="swiper-button-next "><svg class="qodef-svg--slider-arrow-right" width="15.445" height="15.445" viewBox="0 0 15.445 15.445"><path d="M7.01479362.70679362 14.03 7.722l-7.01520638 7.01520638" /></svg></div>
                </div>
                <div class="qodef-custom-slider--thumbs swiper">
                    <div class="swiper-wrapper">
                        @foreach($listing->land_listing->images as $image)
                            <div class="swiper-slide">
                                <img width="162" height="91" src="{{$image->user_upload->file_path}}" class="attachment-162x110 size-162x110" alt="w" decoding="async" srcset="{{$image->user_upload->file_path}} 1400w, {{$image->user_upload->file_path}} 300w, {{$image->user_upload->file_path}} 1024w, {{$image->user_upload->file_path}} 768w, {{$image->user_upload->file_path}} 600w" sizes="(max-width: 162px) 100vw, 162px" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main id="qodef-page-content" role="main">
        <div class="qodef-property qodef-m qodef-property-single qodef-item-layout--grid">
            <div class="qodef-m-content qodef-content-grid">
                <div class="qodef-grid qodef-layout--template qodef-grid-template--8-4">
                    <div class="qodef-grid-inner">
                        <div class="qodef-grid-item qodef-page-content-section qodef-col--content">
                            <article class="qodef-property-item qodef-m post-2460 property type-property status-publish has-post-thumbnail hentry property-type-sell property-category-villas property-location-brooklyn property-tag-swimming-pool">
                                <div class="qodef-m-inner">
                                    <section class="qodef-m-description">
                                        <h4 class="qodef-m-description-title">Description</h4> <div class="qodef-m-description-content">
                                            <p>
                                                {{$listing->land_listing->description}}
                                            </p>
                                        </div>
                                    </section>
                                    <section class="qodef-m-features">

                                        <div class="qodef-m-features-content">
                                            <h6 class="qodef-m-features-subtitle">
                                                Property details </h6>
                                            <div class="qodef-m-features-content-inner">
                                                <div class="qodef-m-features-item qodef--predefined-order">
                                                    <span class="qodef-m-features-item-icon">
                                                    <svg class="qodef-ei-svg-icon qodef--size" width="18.214" height="19.601" viewBox="0 0 18.214 19.601">
                                                    <path d="M7.87.151h10.013a.181.181 0 0 1 .181.179v2.4a.181.181 0 1 1-.362 0V.511H8.051v4.224a.181.181 0 0 1-.181.181H.511v14.173h17.191V6.296h-6.421v2.139a.181.181 0 1 1-.362 0v-2.32a.181.181 0 0 1 .181-.181h6.783a.181.181 0 0 1 .181.181V19.27a.181.181 0 0 1-.181.181H.331a.181.181 0 0 1-.181-.181V4.735a.181.181 0 0 1 .181-.181h7.358V.33A.181.181 0 0 1 7.87.151Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
                                                    <path d="M11.1 11.249h2.158a.181.181 0 0 1 0 .362h-1.977v1.669a.181.181 0 0 1-.181.181H.33a.181.181 0 0 1 0-.362h10.589v-1.67a.181.181 0 0 1 .181-.18Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
                                                    <path d="M16.121 11.249h1.762a.181.181 0 0 1 0 .362h-1.762a.181.181 0 0 1 0-.362Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
                                                    <path d="M11.1 15.83a.181.181 0 0 1 .181.181v3.259a.181.181 0 1 1-.362 0v-3.259a.181.181 0 0 1 .181-.181Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
                                                    </svg>
                                                    </span>
                                                    <span class="qodef-m-features-item-label">
Size: </span>
                                                    <span class="qodef-m-features-item-text">
290 <span class="qodef--measure-unit">m<sup>2</sup></span> </span>
                                                </div>
                                                <div class="qodef-m-features-item qodef--predefined-order">
                                                    <span class="qodef-m-features-item-icon">
                                                    <svg class="qodef-ei-svg-icon qodef--furnishing" width="25.891" height="18.865" viewBox="0 0 25.891 18.865">
                                                    <path d="M7.644 5.514a.383.383 0 0 1-.383-.383V3.654a.383.383 0 1 1 .765 0v1.474a.383.383 0 0 1-.382.386Z" fill="currentColor" />
                                                    <path d="M8.382 4.776H6.905a.383.383 0 0 1 0-.765h1.477a.383.383 0 0 1 0 .765Z" fill="currentColor" />
                                                    <path d="M18.246 5.514a.383.383 0 0 1-.383-.383V3.654a.383.383 0 1 1 .765 0v1.474a.383.383 0 0 1-.382.386Z" fill="currentColor" />
                                                    <path d="M18.983 4.776h-1.477a.383.383 0 0 1 0-.765h1.477a.383.383 0 1 1 0 .765Z" fill="currentColor" />
                                                    <path d="M12.946 7.257a.383.383 0 0 1-.383-.383V5.397a.383.383 0 0 1 .765 0v1.477a.383.383 0 0 1-.382.383Z" fill="currentColor" />
                                                    <path d="M13.684 6.514h-1.477a.383.383 0 0 1 0-.765h1.477a.383.383 0 1 1 0 .765Z" fill="currentColor" />
                                                    <path d="M23.482 7.119a.383.383 0 0 1-.382-.383V4.288A3.528 3.528 0 0 0 19.576.764H6.314A3.528 3.528 0 0 0 2.79 4.288v2.448a.383.383 0 0 1-.765 0V4.288A4.294 4.294 0 0 1 6.314-.001h13.262a4.294 4.294 0 0 1 4.289 4.289v2.448a.383.383 0 0 1-.383.383Z" fill="currentColor" />
                                                    <path d="M21.45 13.655H4.437a.383.383 0 0 1-.383-.383V10.94a2.6 2.6 0 0 1 2.592-2.592h12.591a2.6 2.6 0 0 1 2.592 2.592v2.332a.383.383 0 0 1-.379.383ZM4.823 12.89h16.244v-1.949a1.829 1.829 0 0 0-1.83-1.827H6.647a1.829 1.829 0 0 0-1.827 1.827Z" fill="currentColor" />
                                                    <path d="M25.509 17.666H.383A.383.383 0 0 1 0 17.283V8.766a2.408 2.408 0 0 1 4.816 0v4.132h16.259V8.766a2.408 2.408 0 0 1 4.816 0v8.523a.383.383 0 0 1-.382.377ZM.766 16.901h24.361V8.766a1.643 1.643 0 0 0-3.286 0v4.515a.383.383 0 0 1-.383.383H4.437a.383.383 0 0 1-.383-.383V8.766a1.643 1.643 0 0 0-3.286 0Z" fill="currentColor" />
                                                    <path d="M2.631 18.864a.383.383 0 0 1-.383-.383v-1.2a.383.383 0 0 1 .765 0v1.2a.383.383 0 0 1-.382.383Z" fill="currentColor" />
                                                    <path d="M23.257 18.864a.383.383 0 0 1-.383-.383v-1.2a.383.383 0 0 1 .765 0v1.2a.383.383 0 0 1-.382.383Z" fill="currentColor" />
                                                    </svg>
                                                    </span>
                                                    <span class="qodef-m-features-item-label">
Furnishing: </span>
                                                    <span class="qodef-m-features-item-text">
Furnished </span>
                                                </div>
                                                <div class="qodef-m-features-item qodef--predefined-order">
                                                    <span class="qodef-m-features-item-icon">
                                                    <svg class="qodef-ei-svg-icon qodef--bedrooms" width="24.017" height="17.998" viewBox="0 0 24.017 17.998">
                                                    <path d="M21.333 8.065H2.683a.355.355 0 0 1-.355-.355V3.059A3.063 3.063 0 0 1 5.387 0h13.242a3.063 3.063 0 0 1 3.059 3.059V7.71a.355.355 0 0 1-.355.355Zm-18.295-.71h17.94v-4.3A2.352 2.352 0 0 0 18.629.706H5.387a2.352 2.352 0 0 0-2.349 2.349Z" fill="currentColor" />
                                                    <path d="M12.008 8.065H4.421a.355.355 0 0 1-.355-.355V4.719a2.128 2.128 0 0 1 2.125-2.125h4.046a2.128 2.128 0 0 1 2.125 2.125V7.71a.355.355 0 0 1-.354.355Zm-7.232-.71h6.877V4.719a1.417 1.417 0 0 0-1.415-1.415H6.192a1.417 1.417 0 0 0-1.415 1.415Z" fill="currentColor" />
                                                    <path d="M19.59 8.065h-7.587a.355.355 0 0 1-.355-.355V4.719a2.128 2.128 0 0 1 2.125-2.125h4.046a2.127 2.127 0 0 1 2.125 2.125V7.71a.355.355 0 0 1-.354.355Zm-7.232-.71h6.877V4.719a1.417 1.417 0 0 0-1.415-1.415h-4.046a1.417 1.417 0 0 0-1.415 1.415Z" fill="currentColor" />
                                                    <path d="M23.662 16.844H.355A.355.355 0 0 1 0 16.489v-5.717a3.421 3.421 0 0 1 3.417-3.417h17.182a3.421 3.421 0 0 1 3.418 3.417v5.717a.355.355 0 0 1-.355.355Zm-22.951-.71h22.6v-5.362a2.71 2.71 0 0 0-2.707-2.707H3.417a2.71 2.71 0 0 0-2.706 2.707Z" fill="currentColor" />
                                                    <path d="M2.637 17.997a.355.355 0 0 1-.355-.355v-1.14a.355.355 0 1 1 .71 0v1.14a.355.355 0 0 1-.355.355Z" fill="currentColor" />
                                                    <path d="M21.333 17.997a.355.355 0 0 1-.355-.355v-1.14a.355.355 0 1 1 .71 0v1.14a.355.355 0 0 1-.355.355Z" fill="currentColor" />
                                                    </svg>
                                                    </span>
                                                    <span class="qodef-m-features-item-label">
Bedrooms: </span>
                                                    <span class="qodef-m-features-item-text">
4 </span>
                                                </div>
                                                <div class="qodef-m-features-item qodef--predefined-order">
                                                    <span class="qodef-m-features-item-icon">
                                                    <svg class="qodef-ei-svg-icon qodef--ceiling-height" width="20.447" height="21.486" viewBox="0 0 20.447 21.486">
                                                    <path d="M20.064 21.486H.383A.383.383 0 0 1 0 21.103V.383A.383.383 0 0 1 .383 0h19.682a.383.383 0 0 1 .383.383v20.72a.383.383 0 0 1-.384.383Zm-19.3-.765h18.917V.765H.765Z" fill="currentColor" />
                                                    <path d="M14.843 21.485H11.68a.383.383 0 0 1-.383-.383v-4.466h-.321a.383.383 0 0 1-.383-.383v-3.917a1.331 1.331 0 0 1 1.329-1.329h2.676a1.33 1.33 0 0 1 1.329 1.329v3.917a.383.383 0 0 1-.383.383h-.32v4.468a.383.383 0 0 1-.381.381Zm-2.78-.765h2.4v-4.468a.383.383 0 0 1 .383-.383h.32v-3.533a.565.565 0 0 0-.564-.564h-2.676a.565.565 0 0 0-.564.564v3.534h.321a.383.383 0 0 1 .383.383Z" fill="currentColor" />
                                                    <path d="M13.261 10.615a1.828 1.828 0 1 1 1.827-1.828 1.83 1.83 0 0 1-1.827 1.828Zm0-2.89a1.063 1.063 0 1 0 1.062 1.062 1.063 1.063 0 0 0-1.062-1.063Z" fill="currentColor" />
                                                    <path d="M8.167 3.589a.381.381 0 0 1-.3-.147L6.66 1.9 5.453 3.442a.383.383 0 0 1-.6-.471l1.508-1.927a.4.4 0 0 1 .6 0l1.508 1.927a.383.383 0 0 1-.3.618Z" fill="currentColor" />
                                                    <path d="M6.658 20.202a.382.382 0 0 1-.3-.147L4.85 18.127a.383.383 0 0 1 .6-.471l1.207 1.542 1.207-1.542a.383.383 0 0 1 .6.471l-1.508 1.928a.383.383 0 0 1-.298.147Z" fill="currentColor" />
                                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width=".8" d="M6.659 3.553v14" />
                                                    </svg>
                                                    </span>
                                                    <span class="qodef-m-features-item-label">
Ceiling Height: </span>
                                                    <span class="qodef-m-features-item-text">
3m </span>
                                                </div>
                                                <div class="qodef-m-features-item qodef--predefined-order">
                                                    <span class="qodef-m-features-item-icon">
                                                    <svg class="qodef-ei-svg-icon qodef--bathrooms" width="28.528" height="21.994" viewBox="0 0 28.528 21.994">
                                                    <path d="M21.283 20.649H7.252c-2.119 0-5.529-3.517-5.529-5.7V12.36a.383.383 0 0 1 .383-.383h24.316a.383.383 0 0 1 .383.378v2.593c0 2.184-3.406 5.701-5.522 5.701Zm-18.8-7.909v2.207c0 1.8 3.028 4.937 4.764 4.937h14.031c1.734 0 4.757-3.138 4.757-4.937v-2.206Z" fill="currentColor" />
                                                    <path d="M5.057 10.882a.383.383 0 0 1-.383-.383V3.382A3.5 3.5 0 0 1 5.6.853a2.921 2.921 0 0 1 2.094-.854 2.979 2.979 0 0 1 3.045 2.755.38225907.38225907 0 1 1-.762.062A2.228 2.228 0 0 0 7.694.764a2.162 2.162 0 0 0-1.551.627 2.759 2.759 0 0 0-.7 1.991v7.117a.383.383 0 0 1-.386.383Z" fill="currentColor" />
                                                    <path d="M27.525 12.74H1.003a1 1 0 0 1-1-1v-.377a1 1 0 0 1 1-1h26.522a1 1 0 0 1 1 1v.377a1 1 0 0 1-1 1ZM1.003 11.123a.24.24 0 0 0-.238.237v.377a.241.241 0 0 0 .238.237h26.522a.241.241 0 0 0 .238-.237v-.377a.24.24 0 0 0-.238-.237Z" fill="currentColor" />
                                                    <path d="M12.648 5.466a.383.383 0 0 1-.382-.383 1.917 1.917 0 0 0-3.833 0 .383.383 0 0 1-.765 0 2.682 2.682 0 1 1 5.363 0 .383.383 0 0 1-.383.383Z" fill="currentColor" />
                                                    <path d="M13.505 5.824H7.194a.383.383 0 1 1 0-.765h6.311a.383.383 0 0 1 0 .765Z" fill="currentColor" />
                                                    <path d="M5.917 21.995a.383.383 0 0 1-.293-.629l1.128-1.344a.383.383 0 0 1 .586.492l-1.129 1.344a.38.38 0 0 1-.292.137Z" fill="currentColor" />
                                                    <path d="M22.61 21.995a.38.38 0 0 1-.293-.137l-1.129-1.344a.383.383 0 0 1 .586-.492l1.131 1.344a.383.383 0 0 1-.293.629Z" fill="currentColor" />
                                                    </svg>
                                                    </span>
                                                    <span class="qodef-m-features-item-label">
Bathrooms: </span>
                                                    <span class="qodef-m-features-item-text">
3 </span>
                                                </div>
                                                <div class="qodef-m-features-item qodef--predefined-order">
<span class="qodef-m-features-item-icon">
<svg class="qodef-ei-svg-icon qodef--construction-year" width="22.85" height="18.278" viewBox="0 0 22.85 18.278">
<path d="M19.949 15.91H.904a.755.755 0 0 1-.754-.754V1.835a.755.755 0 0 1 .754-.754h19.045a.755.755 0 0 1 .753.754v13.321a.754.754 0 0 1-.753.754ZM.904 1.447a.388.388 0 0 0-.388.388v13.321a.388.388 0 0 0 .388.388h19.045a.388.388 0 0 0 .387-.388V1.835a.388.388 0 0 0-.387-.388Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M20.519 4.577H.333a.183.183 0 0 1-.183-.183V1.835a.755.755 0 0 1 .754-.754h19.045a.755.755 0 0 1 .753.754v2.559a.183.183 0 0 1-.183.183Zm-20-.366h19.82V1.835a.388.388 0 0 0-.387-.388H.904a.388.388 0 0 0-.388.388Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M21.946 18.127H2.616a.755.755 0 0 1-.754-.754v-1.646a.183.183 0 0 1 .183-.183h17.9a.388.388 0 0 0 .387-.388V3.478a.183.183 0 0 1 .183-.183h1.427a.755.755 0 0 1 .754.754V17.37a.755.755 0 0 1-.75.757ZM2.228 15.91v1.463a.389.389 0 0 0 .388.388h19.33a.388.388 0 0 0 .387-.388V4.052a.388.388 0 0 0-.387-.388h-1.249v11.492a.754.754 0 0 1-.753.754Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M10.011 12.127H6.617v-.349L8.408 9.75a5.424 5.424 0 0 0 .7-.937 1.518 1.518 0 0 0 .2-.723 1.151 1.151 0 0 0-.287-.818 1.056 1.056 0 0 0-.813-.308 1.236 1.236 0 0 0-.946.345 1.3 1.3 0 0 0-.323.924h-.417l-.008-.023a1.53 1.53 0 0 1 .443-1.156 1.668 1.668 0 0 1 1.251-.473 1.566 1.566 0 0 1 1.13.406 1.434 1.434 0 0 1 .424 1.088 1.745 1.745 0 0 1-.283.914 7.515 7.515 0 0 1-.79 1.035l-1.506 1.7.008.019h2.816Z" />
<path d="M14.103 8.068a1.224 1.224 0 0 1-.259.775 1.461 1.461 0 0 1-.691.482 1.66 1.66 0 0 1 .8.513 1.261 1.261 0 0 1 .3.839 1.37 1.37 0 0 1-.492 1.132 2.238 2.238 0 0 1-2.54 0 1.374 1.374 0 0 1-.486-1.134 1.281 1.281 0 0 1 .3-.843 1.625 1.625 0 0 1 .8-.513 1.429 1.429 0 0 1-.686-.481 1.233 1.233 0 0 1-.253-.773 1.381 1.381 0 0 1 .445-1.1 1.9 1.9 0 0 1 2.313 0 1.371 1.371 0 0 1 .449 1.103Zm-.3 2.611a1.059 1.059 0 0 0-.375-.841 1.384 1.384 0 0 0-.939-.324 1.367 1.367 0 0 0-.939.324 1.069 1.069 0 0 0-.368.841 1.033 1.033 0 0 0 .364.84 1.615 1.615 0 0 0 1.889 0 1.03 1.03 0 0 0 .372-.84Zm-.154-2.615a1.036 1.036 0 0 0-.333-.787 1.159 1.159 0 0 0-.828-.314 1.172 1.172 0 0 0-.83.3 1.04 1.04 0 0 0-.323.8.99.99 0 0 0 .325.775 1.331 1.331 0 0 0 1.662 0 .986.986 0 0 0 .331-.774Z" />
<path d="M4.15 0h2v2h-2z" stroke="none" />
<path fill="none" d="M4.65.5h1v1h-1z" />
<path d="M15.15 0h2v2h-2z" stroke="none" />
<path fill="none" d="M15.65.5h1v1h-1z" />
<path d="M18.885 14.326h-2.151a.183.183 0 1 1 0-.366h2.151a.183.183 0 1 1 0 .366Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
</svg>
</span>
                                                    <span class="qodef-m-features-item-label">
Construction Year: </span>
                                                    <span class="qodef-m-features-item-text">
2007 </span>
                                                </div>
                                                <div class="qodef-m-features-item qodef--predefined-order">
<span class="qodef-m-features-item-icon">
<svg class="qodef-ei-svg-icon qodef--floor" width="21.612" height="21.854" viewBox="0 0 21.612 21.854">
<path d="M21.229 21.756H5.586a.383.383 0 0 1-.383-.383v-2.528a.383.383 0 0 1 .383-.383H7.77v-2.428a.383.383 0 0 1 .383-.383h2.185v-2.427a.382.382 0 0 1 .383-.383h2.184v-2.425a.383.383 0 0 1 .383-.383h2.188V7.606a.383.383 0 0 1 .383-.383h2.185V4.797a.382.382 0 0 1 .383-.383h2.808a.383.383 0 0 1 .382.383v16.577a.383.383 0 0 1-.388.382ZM5.968 20.99h14.879V5.179h-2.043v2.427a.383.383 0 0 1-.383.383h-2.185v2.427a.383.383 0 0 1-.383.383h-2.185v2.428a.383.383 0 0 1-.382.383h-2.184v2.427a.383.383 0 0 1-.383.383H8.534v2.428a.383.383 0 0 1-.383.383H5.967Z" fill="currentColor" />
<path d="M1.283 16.031h-.9a.383.383 0 0 1 0-.765h.9a2.753 2.753 0 0 0 2.027-.894L16.332.121a.38258365.38258365 0 1 1 .565.516L3.875 14.892a3.521 3.521 0 0 1-2.592 1.139Z" fill="currentColor" />
<path d="M1.36 21.853a.383.383 0 0 1-.383-.383v-5.818a.383.383 0 1 1 .765 0v5.818a.383.383 0 0 1-.382.383Z" fill="currentColor" />
</svg>
</span>
                                                    <span class="qodef-m-features-item-label">
Floor: </span>
                                                    <span class="qodef-m-features-item-text">
Ground </span>
                                                </div>
                                                <div class="qodef-m-features-item qodef--predefined-order">
<span class="qodef-m-features-item-icon">
<svg class="qodef-ei-svg-icon qodef--renovation" width="17.27" height="21.047" viewBox="0 0 17.27 21.047">
<path d="M7.725 12.558a.383.383 0 0 1-.383-.383v-2.169a1 1 0 0 1 .754-.937l8.159-1.757c.162-.026.248-.1.248-.2V3.618a.111.111 0 0 0-.111-.111h-1.377a.383.383 0 0 1 0-.765h1.377a.877.877 0 0 1 .876.876v3.496a.977.977 0 0 1-.874.951L8.288 9.81c-.075.025-.182.1-.182.2v2.169a.383.383 0 0 1-.381.379Z" fill="currentColor" />
<path d="M8.793 21.047H6.735a.9.9 0 0 1-.9-.9v-6.945c0-.288.234-1.412.9-1.412h2.058c.663 0 .9 1.124.9 1.412v6.945a.9.9 0 0 1-.9.9Zm-1.98-8.489a1.55 1.55 0 0 0-.21.647v6.945a.132.132 0 0 0 .132.132h2.058a.132.132 0 0 0 .132-.132v-6.945a1.55 1.55 0 0 0-.211-.647Z" fill="currentColor" />
<path d="M13.618 6.25H1.781A1.783 1.783 0 0 1 0 4.47V1.779A1.783 1.783 0 0 1 1.781-.002h11.837a1.783 1.783 0 0 1 1.781 1.781V4.47a1.783 1.783 0 0 1-1.781 1.78ZM1.781.762A1.017 1.017 0 0 0 .765 1.778v2.691a1.017 1.017 0 0 0 1.016 1.015h11.837a1.017 1.017 0 0 0 1.016-1.015V1.778A1.017 1.017 0 0 0 13.618.762Z" fill="currentColor" />
<path d="M13.445 4.767H1.818a.383.383 0 1 1 0-.765h11.631a.383.383 0 0 1 0 .765Z" fill="currentColor" />
</svg>
</span>
                                                    <span class="qodef-m-features-item-label">
Renovation: </span>
                                                    <span class="qodef-m-features-item-text">
2017 </span>
                                                </div>
                                                <div class="qodef-m-features-item">
<span class="qodef-m-features-item-icon">
<svg class="qodef-ei-svg-icon qodef--additional-space" width="24.727" height="21.001" viewBox="0 0 24.727 21.001">
<path d="M12.364 20.851H5.517a.2.2 0 0 1-.2-.2v-6.848a.2.2 0 0 1 .2-.2h6.847a.2.2 0 0 1 .2.2v6.848a.2.2 0 0 1-.2.2Zm-6.647-.4h6.448v-6.448H5.717Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M10.161 18.25H7.719a.2.2 0 0 1-.2-.2v-1.486a.2.2 0 0 1 .2-.2h2.442a.2.2 0 0 1 .2.2v1.486a.2.2 0 0 1-.2.2Zm-2.242-.4h2.042v-1.087H7.919Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M19.211 20.851h-6.848a.2.2 0 0 1-.2-.2v-6.848a.2.2 0 0 1 .2-.2h6.848a.2.2 0 0 1 .2.2v6.848a.2.2 0 0 1-.2.2Zm-6.648-.4h6.448v-6.448h-6.448Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M17.008 18.25h-2.442a.2.2 0 0 1-.2-.2v-1.486a.2.2 0 0 1 .2-.2h2.442a.2.2 0 0 1 .2.2v1.486a.2.2 0 0 1-.2.2Zm-2.242-.4h2.042v-1.087h-2.042Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M15.788 14.003H8.941a.2.2 0 0 1-.2-.2V6.959a.2.2 0 0 1 .2-.2h6.847a.2.2 0 0 1 .2.2v6.847a.2.2 0 0 1-.2.197Zm-6.647-.4h6.448V7.159H9.141Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M13.584 11.407h-2.445a.2.2 0 0 1-.2-.2v-1.49a.2.2 0 0 1 .2-.2h2.442a.2.2 0 0 1 .2.2v1.49a.2.2 0 0 1-.197.2Zm-2.245-.4h2.042V9.92h-2.042Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M2.547 20.852a.2.2 0 0 1-.2-.2V7.977a.2.2 0 1 1 .4 0v12.675a.2.2 0 0 1-.2.2Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M22.181 20.852a.2.2 0 0 1-.2-.2V7.977a.2.2 0 1 1 .4 0v12.675a.2.2 0 0 1-.2.2Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M22.119 8.233h-.029a.2.2 0 0 1-.131-.078 11.979 11.979 0 0 0-19.192 0 .2.2 0 0 1-.131.078.2.2 0 0 1-.148-.038L.25 6.52a.2.2 0 0 1-.04-.28 15.174 15.174 0 0 1 24.307 0 .2.2 0 0 1-.04.28l-2.235 1.677a.2.2 0 0 1-.123.036Zm-9.756-5.288a12.277 12.277 0 0 1 9.795 4.81l1.918-1.436a14.774 14.774 0 0 0-23.426 0l1.918 1.436a12.277 12.277 0 0 1 9.795-4.81Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
<path d="M22.119 8.233h-.029a.2.2 0 0 1-.131-.078 11.979 11.979 0 0 0-19.192 0 .2.2 0 0 1-.131.078.2.2 0 0 1-.148-.038L.25 6.52a.2.2 0 0 1-.04-.28 15.174 15.174 0 0 1 24.307 0 .2.2 0 0 1-.04.28l-2.235 1.677a.2.2 0 0 1-.123.036Zm-9.756-5.288a12.277 12.277 0 0 1 9.795 4.81l1.918-1.436a14.774 14.774 0 0 0-23.426 0l1.918 1.436a12.277 12.277 0 0 1 9.795-4.81Z" fill="currentColor" stroke="currentColor" stroke-width=".3" />
</svg>
</span>
                                                    <span class="qodef-m-features-item-label">
Additional space:
</span>
                                                    <span class="qodef-m-features-item-text">
Attic </span>
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                    <section class="qodef-m-video">
                                        <h4 class="qodef-m-video-title">Video</h4> <video width="1300" autoplay loop muted playsinline>
                                            <source src="../../wp-content/uploads/2023/03/property-single-video-1.mp4" type="video/mp4">
                                            Your browser does not support the video tag </video>
                                    </section>

                                    <section class="qodef-m-location">
                                        <h4 class="qodef-m-location-title">Location</h4> <div class="qodef-m-location-content">
                                            <div class="qodef-m-location-content-inner">
                                                <div class="qodef-m-location-content-inner-left">
                                                    <div class="qodef-m-location-street">
                                                        1215 E 17th St, Brooklyn, NY 11230, USA
                                                    </div>
                                                    <div class="qodef-m-location-city-state">
<span>
Brooklyn </span>
                                                        <span>
New York </span>
                                                    </div>
                                                </div>
                                                <div class="qodef-m-location-content-inner-right">
                                                    <div class="qodef-m-location-map-button">
                                                        <a href="https://www.google.com/maps/search/?api=1&amp;query=E%2017th%20St,%20Brooklyn,%20NY%2011230,%20%d0%a1%d1%98%d0%b5%d0%b4%d0%b8%d1%9a%d0%b5%d0%bd%d0%b5%20%d0%94%d1%80%d0%b6%d0%b0%d0%b2%d0%b5" rel="noopener noreferrer" target="_blank">
                                                            <span class="qodef-m-text">Show on map</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="qodef-m-nearby">
                                        <h4 class="qodef-m-nearby-title">What&#039;s nearby?</h4> <div class="qodef-m-nearby-description">
                                            Vidisse oportere suscipiantur ut ius, at ius magna postea. Te essent maiestatis mnesarchum mel, error numquam meliore cu usu, in quo persius aliquid omittam. </div>

                                        <div class="qodef-m-nearby-content">
                                            <div class="qodef-m-nearby-content-inner">
                                                <div class="qodef-m-nearby-item">
                                                <span class="qodef-m-nearby-item-label">
                                                School:
                                                </span>
                                                    <span class="qodef-m-nearby-item-text">
                                                0.5km </span>
                                                </div>
                                                <div class="qodef-m-nearby-item">
                                                <span class="qodef-m-nearby-item-label">
                                                Hospital, medical:
                                                </span>
                                                    <span class="qodef-m-nearby-item-text">
                                                1.3km </span>
                                                </div>
                                                <div class="qodef-m-nearby-item">
                                                <span class="qodef-m-nearby-item-label">
                                                University:
                                                </span>
                                                    <span class="qodef-m-nearby-item-text">
                                                2.2km </span>
                                                </div>
                                                <div class="qodef-m-nearby-item">
                                                <span class="qodef-m-nearby-item-label">
                                                Metro station:
                                                </span>
                                                    <span class="qodef-m-nearby-item-text">
                                                0.1km </span>
                                                </div>
                                                <div class="qodef-m-nearby-item">
                                                <span class="qodef-m-nearby-item-label">
                                                Grocery center:
                                                </span>
                                                    <span class="qodef-m-nearby-item-text">
                                                0.2km </span>
                                                </div>
                                                <div class="qodef-m-nearby-item">
                                                <span class="qodef-m-nearby-item-label">
                                                Gym, wellness:
                                                </span>
                                                    <span class="qodef-m-nearby-item-text">
                                                1.4km </span>
                                                </div>
                                                <div class="qodef-m-nearby-item">
                                                <span class="qodef-m-nearby-item-label">
                                                Market:
                                                </span>
                                                    <span class="qodef-m-nearby-item-text">
                                                    0.5km </span>
                                                </div>
                                                <div class="qodef-m-nearby-item">
                                                    <span class="qodef-m-nearby-item-label">
                                                    River:
                                                    </span>
                                                    <span class="qodef-m-nearby-item-text">
                                                    0.6km </span>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </article>

                        </div>
                        <div class="qodef-grid-item qodef-page-sidebar-section qodef-col--sidebar">
                            {{asset('$listing->land_listing->realtor->image')}}
                            <section class="qodef-m-author">
                                <div class="qodef-m-author-top">
                                    <div class="qodef-m-author-image">
                                        <a itemprop="author" href="../../author/steve-parker/index.html">
                                            <img src="{{asset($listing->land_listing->realtor->image)}}" alt="b" width="100" height="100" data-ratio="1" />
                                        </a>
                                    </div>
                                    <div class="qodef-m-author-heading">
                                        <span class="qodef-m-author-heading-agency">{{env('AGENCY')}}</span>
                                        <h4 class="qodef-m-author-heading-name"> {{explode(' ' ,$listing->land_listing->realtor->name)[0]}}</h4>
                                        <span class="qodef-m-author-heading-address"> {{$listing->land_listing->realtor->address}} </span>
                                    </div>
                                </div>
                                <div class="qodef-m-author-content">
                                    <div class="qodef-m-author-content-item">
                                        <span class="qodef-m-author-content-item-label"> Office phone: </span>
                                        <a itemprop="tel" class="qodef-m-author-content-item-text" href="tel:+2224445557"> {{$listing->land_listing->realtor->contact_number}} </a>
                                    </div>
                                </div>
                                <a class="qodef-shortcode qodef-m qodef-m-author-link qodef-button qodef-layout--filled qodef-size--normal-full qodef-html--link" href="../../author/steve-parker/index.html" target="_self">
                                    <span class="qodef-m-text">View my properties</span>
                                </a>
                            </section>
                            <section class="qodef-m-schedule-tour">
                                <h4 class="qodef-m-schedule-tour-title">Schedule tour</h4> <p class="qodef-m-schedule-tour-description">
                                    Tantas signiferumque eum at, vix an dicant fierent homero dignissim. </p>
                                <div class="qodef-m-schedule-tour-content">
                                    <form class="qodef-m-form" id="qodef-schedule-tour">
                                        <div class="qodef-m-form-inner">
                                            <div class="qodef-m-form-row">
                                                <input type="text" name="user_name" placeholder="Your name*">
                                            </div>
                                            <div class="qodef-m-form-row">
                                                <input type="text" name="user_email" placeholder="Your email*">
                                            </div>
                                            <div class="qodef-m-form-row">
                                                <input type="text" name="user_phone" placeholder="Your phone*">
                                            </div>
                                            <div class="qodef-m-form-row">
                                                <textarea name="user_message" placeholder="Message" rows="4"></textarea>
                                            </div>
                                            <input type="hidden" name="agent_id" value="3" />
                                            <div class="qodef-m-action qodef-property-spinner">
                                                <button type="submit" class="qodef-shortcode qodef-m  qodef-button qodef-layout--filled qodef-size--normal-full "> <span class="qodef-btn-text">Make enquiry</span></button><span class="qodef-m-spinner">
                                                <svg width="20" height="20" viewBox="0 0 50 50">
                                                <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" />
                                                </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="qodef-m-form-result"></div>
                                    </form>
                                </div>
                            </section>
                            <section class="qodef-m-mortgage-calculator">
                                <h4 class="qodef-m-mortgage-calculator-title">Mortgage calculator</h4> <div class="qodef-m-mortgage-calculator-description">
                                    Tantas signiferumque eum at, vix an dicant fierent homero dignissim. </div>
                                <div class="qodef-m-mortgage-calculator-content">
                                    <form class="qodef-m-form" id="qodef-mortgage-calculator" data-error-message="Please review your enquiry and try again">
                                        <div class="qodef-m-form-inner">
                                            <div class="qodef-m-form-row">
                                                <label>
                                                    Sale price: </label>
                                                <input id="qodef-mortgage-calculator-price" type="number" value="2650000" readonly="readonly">
                                            </div>
                                            <div class="qodef-m-form-row">
                                                <label>
                                                    Percent down (%): </label>
                                                <input id="qodef-mortgage-calculator-percent" type="number">
                                            </div>
                                            <div class="qodef-m-form-row">
                                                <label>
                                                    Years: </label>
                                                <input id="qodef-mortgage-calculator-years" type="number">
                                            </div>
                                            <div class="qodef-m-form-row">
                                                <label>
                                                    Bank interest rate (%): </label>
                                                <input id="qodef-mortgage-calculator-interest" type="number">
                                            </div>
                                            <div class="qodef-m-action qodef-property-spinner">
                                                <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--filled qodef-size--normal-full qodef-html--link" href="#" target="_self" data-hover-background-color="#8ACE46" style="background-color: #A9DE74;--hover-background-color: #8ACE46"> <span class="qodef-m-text">Calculate mortgage</span></a><span class="qodef-m-spinner">
                                                <svg width="20" height="20" viewBox="0 0 50 50">
                                                <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" />
                                                </svg>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="qodef-m-form-result"></div>
                                    </form>
                                </div>
                            </section>
                            <section id="qodef-related-properties" class="qodef-m-related-properties">
                                <h4 class="qodef-m-related-properties-title">Related properties</h4> <div class="qodef-m-related-properties-description">
                                    Tantas signiferumque eum at, vix an dicant fierent homero dignissim. </div>
                                <div class="qodef-shortcode qodef-m qodef-m-related-properties-content qodef-property-list qodef-item-layout--standard qodef--no-map  qodef--no-filter  qodef-grid qodef-layout--columns    qodef-col-num--1 qodef-item-layout--standard qodef-pagination--off qodef-responsive--predefined" data-options="{&quot;plugin&quot;:&quot;newhome_core&quot;,&quot;module&quot;:&quot;plugins\/real-estate\/post-types\/property\/shortcodes&quot;,&quot;shortcode&quot;:&quot;property-list&quot;,&quot;post_type&quot;:&quot;property&quot;,&quot;next_page&quot;:&quot;2&quot;,&quot;max_pages_num&quot;:6,&quot;custom_class&quot;:&quot;qodef-m-related-properties-content&quot;,&quot;behavior&quot;:&quot;columns&quot;,&quot;images_proportion&quot;:&quot;full&quot;,&quot;columns&quot;:&quot;1&quot;,&quot;columns_responsive&quot;:&quot;predefined&quot;,&quot;columns_1440&quot;:&quot;3&quot;,&quot;columns_1366&quot;:&quot;3&quot;,&quot;columns_1024&quot;:&quot;3&quot;,&quot;columns_768&quot;:&quot;3&quot;,&quot;columns_680&quot;:&quot;3&quot;,&quot;columns_480&quot;:&quot;3&quot;,&quot;posts_per_page&quot;:1,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;additional_params&quot;:&quot;id&quot;,&quot;post_ids&quot;:&quot;876,3304,2459,288,3289,871&quot;,&quot;layout&quot;:&quot;standard&quot;,&quot;title_tag&quot;:&quot;h4&quot;,&quot;media_type&quot;:&quot;image&quot;,&quot;pagination_type&quot;:&quot;no-pagination&quot;,&quot;hide_active_filter&quot;:&quot;yes&quot;,&quot;object_class_name&quot;:&quot;NewHomeCore_Real_Estate_Property_List_Shortcode&quot;,&quot;taxonomy_filter&quot;:&quot;property-category&quot;,&quot;additional_query_args&quot;:{&quot;orderby&quot;:&quot;post__in&quot;,&quot;post__in&quot;:[&quot;876&quot;,&quot;3304&quot;,&quot;2459&quot;,&quot;288&quot;,&quot;3289&quot;,&quot;871&quot;]},&quot;query_array&quot;:{&quot;post_status&quot;:&quot;publish&quot;,&quot;post_type&quot;:&quot;property&quot;,&quot;posts_per_page&quot;:1,&quot;orderby&quot;:&quot;post__in&quot;,&quot;order&quot;:&quot;DESC&quot;,&quot;ignore_sticky_posts&quot;:1,&quot;paged&quot;:1,&quot;post__in&quot;:[&quot;876&quot;,&quot;3304&quot;,&quot;2459&quot;,&quot;288&quot;,&quot;3289&quot;,&quot;871&quot;]},&quot;posts_count&quot;:1}"> <div class="qodef-grid-inner"> <article class="qodef-e qodef-grid-item qodef-item--full post-876 property type-property status-publish has-post-thumbnail hentry property-type-buy property-category-villas property-location-brooklyn property-tag-patio property-tag-terrace" data-id="876"> <div class="qodef-e-inner"> <div class="qodef-e-image-holder"> <div class="qodef-e-media-image"> <a itemprop="url" href="../gardenia-house/index.html"> <img width="1400" height="785" src="../../wp-content/uploads/2023/03/list-half-map-image-4.jpg" class="attachment-full size-full" alt="w" decoding="async" loading="lazy" srcset="https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/list-half-map-image-4.jpg 1400w, https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/list-half-map-image-4-300x168.jpg 300w, https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/list-half-map-image-4-1024x574.jpg 1024w, https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/list-half-map-image-4-768x431.jpg 768w, https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/list-half-map-image-4-600x336.jpg 600w" sizes="(max-width: 1400px) 100vw, 1400px" /> </a> </div> <div class="qodef-e-info-item qodef--type"> <a itemprop="url" class="qodef-e-info-item-link qodef--property-type" href="../../property-type/buy/index.html"> <span class="qodef-e-info-item-text">Buy</span> </a> </div> <div class="qodef-e-actions"> <div class="qodef-wishlist qodef-m"> <button type="button" class="qodef-m-action-button qodef-property-spinner qodef--allowed-remove qodef-m-link " data-id="876" data-title="Add to wishlist" data-added-title="Added to wishlist"> <span class="qodef-m-icon"> <svg width="17" height="17" viewBox="0 0 17 17"> <g fill="currentColor" stroke-linecap="round" stroke-linejoin="round"> <path class="qodef-m-fav-inner" fill="none" d="M7.571 2.323a1 1 0 0 1 1.857 0l1.223 3.06a1 1 0 0 0 .841.625l3.232.285a1 1 0 0 1 .584 1.737l-2.527 2.293a1 1 0 0 0-.3.958l.749 3.36a1 1 0 0 1-1.516 1.059L9.037 14a1 1 0 0 0-1.074 0l-2.677 1.7a1 1 0 0 1-1.513-1.06l.749-3.36a1 1 0 0 0-.3-.958l-2.53-2.293a1 1 0 0 1 .584-1.737l3.232-.285a1 1 0 0 0 .841-.625Z" /> <path class="qodef-m-fav-outer" d="M8.50000095 2.49375057c-.08987045 0-.15235042.04231072-.18570995.12575054L7.0910511 5.67916107c-.25337982.63377-.83314037 1.06476975-1.51305008 1.12481976l-3.23159027.28536033c-.10766983.00951004-.15294933.07890988-.17196941.1354599-.01902008.05655003-.02488995.13922024.05515003.2118597l2.52661991 2.29319955c.47799969.43382072.68763924 1.0947113.54710007 1.72475051l-.74938011 3.35963059c-.01449013.06495953-.0037899.1169796.03366947.16371918.04036999.05037021.10447979.08292007.16331005.08292007.03472042 0 .06928062-.01126003.10564041-.03440952l2.67663002-1.70440006c.28940964-.18428994.6237297-.28170014.96681976-.28170014s.67741013.0974102.96681977.28170014l2.67663002 1.70440006c.03636074.02314949.07091999.03440952.1056404.03440952.05881024 0 .12290002-.03254986.16327954-.0829401.04924011-.06142998.04281044-.12284947.03370094-.16372013l-.7493801-3.35957909c-.14055062-.63004112.0690794-1.2909298.54707908-1.72477054l2.5266304-2.29319954c.08004952-.07264996.07417965-.15532017.05516052-.2118702-.01902008-.05655002-.06430053-.12594986-.17197036-.1354599L11.4220209 6.8039713c-.6799097-.06002998-1.25969028-.4910307-1.51306057-1.12481022L8.68571091 2.61951065c-.03335953-.08344936-.09585-.12576008-.18570996-.12576008m-.00000381-.79999923c.380476 0 .7609539.20958995.92854404.62876987l1.22324944 3.05965996c.13997078.35011005.46498012.59173012.84057999.62488937l3.23159027.28537083c.86851024.07668972 1.2297306 1.1506195.58411026 1.73660946l-2.52663994 2.29321003c-.26615048.24155998-.3821907.60737991-.30393028.95818996l.7493801 3.3596096c.19408036.87005044-.76120948 1.54002-1.51313018 1.06121064l-2.67663002-1.70440007c-.32768059-.20866012-.74655914-.20866012-1.07423973 0l-2.67663002 1.70440007c-.75192166.47880935-1.70720959-.1911602-1.51313019-1.06121064l.74938011-3.3596096c.07824993-.35081005-.0377798-.71662998-.30393982-.95818996l-2.5266304-2.29321003c-.6456194-.58597946-.28439999-1.65991974.58411026-1.73660946l3.23159027-.28536034c.37559986-.03316974.7006092-.2747898.84057999-.62489986L7.57146072 2.3225212c.16758538-.41917992.54806042-.62876987.92853642-.62876987Z" /> </g></svg> </span> <span class="qodef-m-tooltip">Add to wishlist</span> <span class="qodef-m-spinner"> <svg width="20" height="20" viewBox="0 0 50 50"> <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" /></svg></span> </button> <div class="qodef-m-response"></div></div><button type="button" class="qodef-m-action-button qodef-property-spinner qodef--compare " data-property-id="876" data-title="Add to compare" data-added-title="Added to compare"> <span class="qodef-m-icon"> <svg width="13" height="13" viewBox="0 0 13 13"> <path fill="none" stroke="currentColor" d="M6.5 0v13M0 6.5h13" /></svg> </span> <span class="qodef-m-tooltip"> Add to compare </span> <span class="qodef-m-spinner"> <svg width="20" height="20" viewBox="0 0 50 50"> <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" /></svg></span></button> </div> <div class="qodef-e-author"> <div class="qodef-e-author-image"> <a itemprop="url" href="../../author/steve-parker/index.html"> <img src="../../wp-content/uploads/2023/03/agent1-profile-img-new-50x50.jpg" alt="b" width="50" height="50" data-ratio="1" /> </a> </div> <a itemprop="url" class="qodef-e-author-name" href="../../author/steve-parker/index.html">Steve Parker</a></div> </div> <div class="qodef-e-content"> <div class="qodef-e-top-info"> <div class="qodef-e-info"> <svg width="10" height="14" viewBox="0 0 10 14"> <g transform="translate(-176.732 -1468.625)"> <path d="M181.77841914 1469.42474238c-1.18292999 0-2.25112009.39579964-3.00782013 1.11448002-.81029987.76959991-1.23859977 1.87357998-1.23859977 3.19257974 0 .6967001.32018947 2.02022028 1.84558963 4.36906004.85201931 1.31195736 1.78410721 2.49109268 2.39263678 3.23786545.59846926-.75298881 1.51947641-1.94614792 2.35712338-3.26402569 1.49156045-2.34667969 1.80464983-3.65694952 1.80464983-4.3428998 0-1.3133502-.41541005-2.41482973-1.20132971-3.18536997-.73777008-.72332954-1.78623009-1.1216898-2.95225-1.1216898m0-.80000018c2.76142024 0 4.9535799 1.89883995 4.9535799 5.10705995 0 3.15320587-4.87000561 8.6986804-4.95362902 8.8879714-.08729982-.18853569-5.04637098-5.6929469-5.04637098-8.8879714 0-3.25097036 2.28498983-5.10705995 5.0464201-5.10705995Zm-.00004912 13.99503135c.00305176.00659275-.00292444.0066185 0 0Z" fill="currentColor" /> <circle cx="1.5" cy="1.5" r="1.5" transform="translate(180.232 1471.705)" fill="currentColor" /> </g></svg> <div class="qodef-e-info-item qodef--category"> <a itemprop="url" class="qodef-e-info-item-link qodef--property-category" href="../../property-category/villas/index.html"> <span class="qodef-e-info-item-text">Villas</span> </a> </div> <span class="qodef-info-separator-end"></span> <div class="qodef-e-info-item qodef--location"> <a itemprop="url" class="qodef-e-info-item-link qodef--property-location" href="../../property-location/brooklyn/index.html"> <span class="qodef-e-info-item-text">Brooklyn</span> </a> </div> <span class="qodef-info-separator-end"></span> </div> </div> <h4 itemprop="name" class="qodef-e-title entry-title"> <a itemprop="url" class="qodef-e-title-link" href="../gardenia-house/index.html"> Gardenia House </a></h4> <p itemprop="description" class="qodef-e-excerpt">Lorem ipsum dolor sit amet, wisi nemore fastidii at vis, eos equidem admodum</p> <div class="qodef-e-bottom-info"> <div class="qodef-e-price"> <span class="qodef-e-price-amount qodef-h5"> 265,000&#036; </span> </div> <div class="qodef-e-info-item qodef--size"> <span class="qodef-e-info-item-icon"> <svg class="qodef-ei-svg-icon qodef--size" width="18.214" height="19.601" viewBox="0 0 18.214 19.601"> <path d="M7.87.151h10.013a.181.181 0 0 1 .181.179v2.4a.181.181 0 1 1-.362 0V.511H8.051v4.224a.181.181 0 0 1-.181.181H.511v14.173h17.191V6.296h-6.421v2.139a.181.181 0 1 1-.362 0v-2.32a.181.181 0 0 1 .181-.181h6.783a.181.181 0 0 1 .181.181V19.27a.181.181 0 0 1-.181.181H.331a.181.181 0 0 1-.181-.181V4.735a.181.181 0 0 1 .181-.181h7.358V.33A.181.181 0 0 1 7.87.151Z" fill="currentColor" stroke="currentColor" stroke-width=".3" /> <path d="M11.1 11.249h2.158a.181.181 0 0 1 0 .362h-1.977v1.669a.181.181 0 0 1-.181.181H.33a.181.181 0 0 1 0-.362h10.589v-1.67a.181.181 0 0 1 .181-.18Z" fill="currentColor" stroke="currentColor" stroke-width=".3" /> <path d="M16.121 11.249h1.762a.181.181 0 0 1 0 .362h-1.762a.181.181 0 0 1 0-.362Z" fill="currentColor" stroke="currentColor" stroke-width=".3" /> <path d="M11.1 15.83a.181.181 0 0 1 .181.181v3.259a.181.181 0 1 1-.362 0v-3.259a.181.181 0 0 1 .181-.181Z" fill="currentColor" stroke="currentColor" stroke-width=".3" /></svg> </span> <span class="qodef-e-info-item-text"> 290 <span class="qodef--measure-unit">m<sup>2</sup></span> </span> </div> <div class="qodef-e-info-item qodef--bedrooms"> <span class="qodef-e-info-item-icon"> <svg class="qodef-ei-svg-icon qodef--bedrooms" width="24.017" height="17.998" viewBox="0 0 24.017 17.998"> <path d="M21.333 8.065H2.683a.355.355 0 0 1-.355-.355V3.059A3.063 3.063 0 0 1 5.387 0h13.242a3.063 3.063 0 0 1 3.059 3.059V7.71a.355.355 0 0 1-.355.355Zm-18.295-.71h17.94v-4.3A2.352 2.352 0 0 0 18.629.706H5.387a2.352 2.352 0 0 0-2.349 2.349Z" fill="currentColor" /> <path d="M12.008 8.065H4.421a.355.355 0 0 1-.355-.355V4.719a2.128 2.128 0 0 1 2.125-2.125h4.046a2.128 2.128 0 0 1 2.125 2.125V7.71a.355.355 0 0 1-.354.355Zm-7.232-.71h6.877V4.719a1.417 1.417 0 0 0-1.415-1.415H6.192a1.417 1.417 0 0 0-1.415 1.415Z" fill="currentColor" /> <path d="M19.59 8.065h-7.587a.355.355 0 0 1-.355-.355V4.719a2.128 2.128 0 0 1 2.125-2.125h4.046a2.127 2.127 0 0 1 2.125 2.125V7.71a.355.355 0 0 1-.354.355Zm-7.232-.71h6.877V4.719a1.417 1.417 0 0 0-1.415-1.415h-4.046a1.417 1.417 0 0 0-1.415 1.415Z" fill="currentColor" /> <path d="M23.662 16.844H.355A.355.355 0 0 1 0 16.489v-5.717a3.421 3.421 0 0 1 3.417-3.417h17.182a3.421 3.421 0 0 1 3.418 3.417v5.717a.355.355 0 0 1-.355.355Zm-22.951-.71h22.6v-5.362a2.71 2.71 0 0 0-2.707-2.707H3.417a2.71 2.71 0 0 0-2.706 2.707Z" fill="currentColor" /> <path d="M2.637 17.997a.355.355 0 0 1-.355-.355v-1.14a.355.355 0 1 1 .71 0v1.14a.355.355 0 0 1-.355.355Z" fill="currentColor" /> <path d="M21.333 17.997a.355.355 0 0 1-.355-.355v-1.14a.355.355 0 1 1 .71 0v1.14a.355.355 0 0 1-.355.355Z" fill="currentColor" /></svg> </span> <span class="qodef-e-info-item-text"> 4 </span> </div> <div class="qodef-e-info-item qodef--bathrooms"> <span class="qodef-e-info-item-icon"> <svg class="qodef-ei-svg-icon qodef--bathrooms" width="28.528" height="21.994" viewBox="0 0 28.528 21.994"> <path d="M21.283 20.649H7.252c-2.119 0-5.529-3.517-5.529-5.7V12.36a.383.383 0 0 1 .383-.383h24.316a.383.383 0 0 1 .383.378v2.593c0 2.184-3.406 5.701-5.522 5.701Zm-18.8-7.909v2.207c0 1.8 3.028 4.937 4.764 4.937h14.031c1.734 0 4.757-3.138 4.757-4.937v-2.206Z" fill="currentColor" /> <path d="M5.057 10.882a.383.383 0 0 1-.383-.383V3.382A3.5 3.5 0 0 1 5.6.853a2.921 2.921 0 0 1 2.094-.854 2.979 2.979 0 0 1 3.045 2.755.38225907.38225907 0 1 1-.762.062A2.228 2.228 0 0 0 7.694.764a2.162 2.162 0 0 0-1.551.627 2.759 2.759 0 0 0-.7 1.991v7.117a.383.383 0 0 1-.386.383Z" fill="currentColor" /> <path d="M27.525 12.74H1.003a1 1 0 0 1-1-1v-.377a1 1 0 0 1 1-1h26.522a1 1 0 0 1 1 1v.377a1 1 0 0 1-1 1ZM1.003 11.123a.24.24 0 0 0-.238.237v.377a.241.241 0 0 0 .238.237h26.522a.241.241 0 0 0 .238-.237v-.377a.24.24 0 0 0-.238-.237Z" fill="currentColor" /> <path d="M12.648 5.466a.383.383 0 0 1-.382-.383 1.917 1.917 0 0 0-3.833 0 .383.383 0 0 1-.765 0 2.682 2.682 0 1 1 5.363 0 .383.383 0 0 1-.383.383Z" fill="currentColor" /> <path d="M13.505 5.824H7.194a.383.383 0 1 1 0-.765h6.311a.383.383 0 0 1 0 .765Z" fill="currentColor" /> <path d="M5.917 21.995a.383.383 0 0 1-.293-.629l1.128-1.344a.383.383 0 0 1 .586.492l-1.129 1.344a.38.38 0 0 1-.292.137Z" fill="currentColor" /> <path d="M22.61 21.995a.38.38 0 0 1-.293-.137l-1.129-1.344a.383.383 0 0 1 .586-.492l1.131 1.344a.383.383 0 0 1-.293.629Z" fill="currentColor" /></svg> </span> <span class="qodef-e-info-item-text"> 3 </span> </div> </div> </div> </div></article> </div> <div class="qodef-m-list-spinner-wrapper qodef-property-spinner"> <span class="qodef-m-spinner"> <svg width="20" height="20" viewBox="0 0 50 50"> <circle cx="25" cy="25" r="20" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" /></svg></span> </div> </div> </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
