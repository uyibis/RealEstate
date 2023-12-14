@extends('layout.front.index')

@section('content')
    <section class="elementor-section elementor-top-section elementor-element elementor-element-f27a95c elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f27a95c" data-element_type="section" id="qodef-main-rev-holder">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-eb355e6" data-id="eb355e6" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-8663c53 elementor-widget elementor-widget-newhome_core_hero" data-id="8663c53" data-element_type="widget" data-widget_type="newhome_core_hero.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-hero qodef-item-layout--standard">
                                <div class="qodef-m-slider-holder">
                                    <p class="rs-p-wp-fix"></p>
                                    <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                        <rs-module id="rev_slider_1_1" style data-version="6.6.12">
                                            <rs-slides style="overflow: hidden; position: absolute;">
                                                <rs-slide style="position: absolute;" data-key="rs-1" data-title="Slide" data-thumb="//newhome.qodeinteractive.com/wp-content/uploads/2023/03/home-rev-img-1-50x100.jpg" data-anim="ms:500ms;" data-in="o:0;e:power1.inOut;" data-out="a:false;">
                                                    <img decoding="async" fetchpriority="high" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" title="home-rev-img-1" width="1880" height="886" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//newhome.qodeinteractive.com/wp-content/uploads/2023/03/home-rev-img-1.jpg" data-no-retina>
                                                </rs-slide>
                                                <rs-slide style="position: absolute;" data-key="rs-2" data-title="Slide" data-thumb="//newhome.qodeinteractive.com/wp-content/uploads/2023/03/home-rev-img-2-50x100.jpg" data-anim="ms:500ms;" data-in="o:0;e:power1.inOut;" data-out="a:false;">
                                                    <img decoding="async" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" title="home-rev-img-2" width="1880" height="866" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//newhome.qodeinteractive.com/wp-content/uploads/2023/03/home-rev-img-2.jpg" data-no-retina>
                                                </rs-slide>
                                                <rs-slide style="position: absolute;" data-key="rs-3" data-title="Slide" data-thumb="//newhome.qodeinteractive.com/wp-content/uploads/2023/03/home-rev-img-3-50x100.jpg" data-anim="ms:500ms;" data-in="o:0;e:power1.inOut;" data-out="a:false;">
                                                    <img decoding="async" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" title="home-rev-img-3" width="1880" height="866" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//newhome.qodeinteractive.com/wp-content/uploads/2023/03/home-rev-img-3.jpg" data-no-retina>
                                                </rs-slide>
                                                <rs-slide style="position: absolute;" data-key="rs-5" data-title="Slide" data-thumb="//newhome.qodeinteractive.com/wp-content/uploads/2023/03/home-rev-img-4-50x100.jpg" data-anim="ms:500ms;" data-in="o:0;e:power1.inOut;" data-out="a:false;">
                                                    <img decoding="async" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" title="home-rev-img-4" width="1880" height="866" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//newhome.qodeinteractive.com/wp-content/uploads/2023/03/home-rev-img-4.jpg" data-no-retina>
                                                </rs-slide>
                                            </rs-slides>
                                            <rs-static-layers></rs-static-layers>
                                        </rs-module>
                                        <script>
                                            setREVStartSize({c: 'rev_slider_1_1',rl:[1920,1700,1025,680],el:[866,565,620,600],gw:[1400,1100,600,300],gh:[866,565,620,900],type:'standard',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider11"]!==undefined) {window.RS_MODULES.modules["revslider11"].once = false;window.revapi1 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
                                        </script>
                                    </rs-module-wrap>
                                </div>
                                <div class="qodef-m-content-holder qodef-content-grid">
                                    <div class="qodef-m-section-title-holder">
                                        <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left   qodef--custom-title-font-weight" style="--title-font-weight: 500;--decorated-font-weight: 600"> <h2 class="qodef-m-title" style="color: #FFFFFF"> Buy or rent genuine properties<br/> from <span class="qodef-m-decorated">reliable</span> <span class="qodef-m-decorated">source</span> </h2> </div> </div>
                                    @include('front.single_view.home_search.index')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('snippet.section.apartment.index')
    @include('snippet.section.building.index')
    @include('snippet.section.land.index')
    <section class="elementor-section elementor-top-section elementor-element elementor-element-48ad80a elementor-section-full_width qodef-elementor-content-grid qodef-extended-grid qodef-extended-grid--left qodef-extended-grid-disabled--1440 elementor-section-height-default elementor-section-height-default" data-id="48ad80a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-bc80cd5" data-id="bc80cd5" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-6f20973 elementor-widget elementor-widget-newhome_core_single_image" data-id="6f20973" data-element_type="widget" data-widget_type="newhome_core_single_image.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-single-image qodef-layout--default   qodef-drop-shadow--enabled" data-viewport-offset="0.7">
                                <div class="qodef-m-image">
                                    <img loading="lazy" width="950" height="579" src="wp-content/uploads/2023/03/main-home-img-1.jpg" class="attachment-full size-full" alt="w" decoding="async" srcset="https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/main-home-img-1.jpg 950w, https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/main-home-img-1-300x183.jpg 300w, https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/main-home-img-1-768x468.jpg 768w, https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/main-home-img-1-600x366.jpg 600w" sizes="(max-width: 950px) 100vw, 950px" /> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4f55cb3" data-id="4f55cb3" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-66a9a48 elementor-widget elementor-widget-newhome_core_section_title" data-id="66a9a48" data-element_type="widget" data-widget_type="newhome_core_section_title.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left qodef-title-break--disabled  qodef--custom-title-font-weight" style="--title-font-weight: 500;--decorated-font-weight: 600">
                                <h2 class="qodef-m-title">
                                    Modern spaces and<br/> <span class="qodef-m-decorated">premium</span> design </h2>
                                <p class="qodef-m-text-area" style="margin-top: 22px">
                                    Experience the epitome of elegance with Modern Spaces and Premium Design. Elevate your lifestyle in spaces that seamlessly blend contemporary aesthetics with sophisticated functionality. Welcome to a world where every detail reflects modern luxury and timeless style. </p>
                            </div>
                        </div>
                    </div>

                    <div class="elementor-element elementor-element-fb80b06 elementor-widget elementor-widget-newhome_core_button" data-id="fb80b06" data-element_type="widget" data-widget_type="newhome_core_button.default">
                        <div class="elementor-widget-container">
                            <a class="qodef-shortcode qodef-m  qodef-button qodef-layout--filled  qodef-html--link" href="author/new-home/index.html" target="_self">
                                <span class="qodef-m-text">Search Property</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-13fe89d elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="13fe89d" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5a815c9" data-id="5a815c9" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-79bab86 elementor-widget elementor-widget-newhome_core_section_title" data-id="79bab86" data-element_type="widget" data-widget_type="newhome_core_section_title.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left   qodef--custom-title-font-weight" style="--title-font-weight: 500;--decorated-font-weight: 600">
                                <h2 class="qodef-m-title">
                                    How It works?<br/> Find a <span class="qodef-m-decorated">perfect</span> <span class="qodef-m-decorated">home</span> </h2>
                            </div>
                        </div>
                    </div>
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-ca6b27d elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="ca6b27d" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-43e5e3e" data-id="43e5e3e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-f93732e elementor-widget__width-initial elementor-widget-laptop__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-newhome_core_icon_with_text" data-id="f93732e" data-element_type="widget" data-widget_type="newhome_core_icon_with_text.default">
                                        <div class="elementor-widget-container">
                                            <div class="qodef-shortcode qodef-m  qodef-icon-with-text qodef-layout--top qodef--svg-code  qodef-alignment--left">
                                                <div class="qodef-m-icon-wrapper">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48.2" height="47.463" viewBox="0 0 48.2 47.463"><g transform="translate(0.1 0.101)"><g transform="translate(6.132)"><g transform="translate(5.593 15.246)"><path d="M763.611,150.617H739.874a.445.445,0,0,1-.446-.446v-15.2a.446.446,0,1,1,.891,0v14.75h22.846V134.949a.446.446,0,1,1,.891,0v15.222A.445.445,0,0,1,763.611,150.617Z" transform="translate(-739.428 -134.503)" stroke="#000" stroke-width="0.2" /><g transform="translate(8.343 5.226)"><path d="M756.281,151.143a.446.446,0,0,1-.446-.446v-9.441h-6.157V150.7a.446.446,0,1,1-.891,0v-9.886a.446.446,0,0,1,.446-.446h7.048a.445.445,0,0,1,.446.446V150.7A.445.445,0,0,1,756.281,151.143Z" transform="translate(-748.787 -140.365)" stroke="#000" stroke-width="0.2" /></g></g><path d="M765.891,135.614a.448.448,0,0,1-.282-.1l-14.587-11.883-14.587,11.883a.445.445,0,0,1-.627-.064l-2.553-3.135a.444.444,0,0,1,.064-.627L750.735,117.5a.441.441,0,0,1,.332-.1l.034,0a.431.431,0,0,1,.209.093l17.417,14.187a.447.447,0,0,1,.064.627l-2.554,3.135A.447.447,0,0,1,765.891,135.614Zm-14.869-13a.443.443,0,0,1,.282.1l14.523,11.83,1.992-2.444-16.8-13.681-16.8,13.681,1.992,2.444,14.523-11.83A.442.442,0,0,1,751.022,122.611Z" transform="translate(-733.154 -117.401)" stroke="#000" stroke-width="0.2" /></g><g transform="translate(0 9.871)"><g transform="translate(35.92)"><path d="M778.2,157.413a.446.446,0,0,1-.446-.446V131.787a2.425,2.425,0,0,0-2.421-2.422h-8.321a.446.446,0,0,1,0-.891h8.321a3.317,3.317,0,0,1,3.313,3.314v25.181A.446.446,0,0,1,778.2,157.413Z" transform="translate(-766.569 -128.473)" stroke="#000" stroke-width="0.2" /></g><path d="M770.963,161.379H729.589a3.317,3.317,0,0,1-3.313-3.313v-26.28a3.317,3.317,0,0,1,3.313-3.314h8.563a.446.446,0,0,1,0,.891h-8.563a2.425,2.425,0,0,0-2.421,2.422v26.28a2.424,2.424,0,0,0,2.421,2.421h41.375a2.424,2.424,0,0,0,2.421-2.421.446.446,0,1,1,.891,0A3.316,3.316,0,0,1,770.963,161.379Z" transform="translate(-726.276 -128.473)" stroke="#000" stroke-width="0.2" /><g transform="translate(0 27.102)"><path d="M770.963,164.678H729.589a3.473,3.473,0,0,1-3.313-3.607V159.32a.446.446,0,0,1,.446-.446H773.83a.446.446,0,0,1,.446.446v1.752A3.473,3.473,0,0,1,770.963,164.678Zm-43.8-4.913v1.306a2.584,2.584,0,0,0,2.421,2.715h41.375a2.584,2.584,0,0,0,2.421-2.715v-1.306Z" transform="translate(-726.276 -158.874)" stroke="#000" stroke-width="0.2" /></g><g transform="translate(20.565 32.015)"><path d="M749.79,169.762a.445.445,0,0,1-.446-.446v-4.485a.446.446,0,1,1,.891,0v4.485A.446.446,0,0,1,749.79,169.762Z" transform="translate(-749.344 -164.385)" stroke="#000" stroke-width="0.2" /><g transform="translate(5.98)"><path d="M756.5,169.762a.445.445,0,0,1-.446-.446v-4.485a.446.446,0,0,1,.891,0v4.485A.446.446,0,0,1,756.5,169.762Z" transform="translate(-756.052 -164.385)" stroke="#000" stroke-width="0.2" /></g></g><g transform="translate(17.104 36.5)"><path d="M758.809,170.307h-12.9a.446.446,0,1,1,0-.891h12.9a.446.446,0,1,1,0,.891Z" transform="translate(-745.462 -169.416)" stroke="#000" stroke-width="0.2" /></g><g transform="translate(23.173 29.787)"><path d="M753.478,162.777h-.762a.446.446,0,1,1,0-.891h.762a.446.446,0,1,1,0,.891Z" transform="translate(-752.27 -161.886)" stroke="#000" stroke-width="0.2" /></g></g></g></svg> </div>
                                                <div class="qodef-m-content">
                                                    <h4 class="qodef-m-title" style="margin-top: 3px">
                                                        <span class="qodef-m-title-text">Find a property</span>
                                                    </h4>
                                                    <p class="qodef-m-text">Our platform revolutionizes the house-hunting experience, providing you with a seamless and intuitive search for the perfect property.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-bb48680" data-id="bb48680" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-76621c6 elementor-widget__width-initial elementor-widget-laptop__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-newhome_core_icon_with_text" data-id="76621c6" data-element_type="widget" data-widget_type="newhome_core_icon_with_text.default">
                                        <div class="elementor-widget-container">
                                            <div class="qodef-shortcode qodef-m  qodef-icon-with-text qodef-layout--top qodef--svg-code  qodef-alignment--left">
                                                <div class="qodef-m-icon-wrapper">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="59.013" height="41.588" viewBox="0 0 59.013 41.588"><g transform="translate(0.181 0.15)"><g transform="translate(4.306 5.52)"><g transform="translate(0 7.255)"><g transform="translate(0 14.136)"><path d="M455.521,657.389H417.714a.828.828,0,0,1-.8-.883V643.773h-5.022a.381.381,0,1,1,0-.761h5.4a.38.38,0,0,1,.381.381v13.112c0,.06.016.122.043.122h37.807c.03,0,.044-.071.044-.122V643.393a.38.38,0,0,1,.381-.381h5.4a.381.381,0,0,1,0,.761h-5.021v12.732A.828.828,0,0,1,455.521,657.389Z" transform="translate(-411.506 -643.012)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(15.137)"><path d="M439.417,636.588h-7.652a.381.381,0,0,1-.381-.381v-4.884a.381.381,0,0,1,.134-.29l7.652-6.494a.381.381,0,0,1,.628.29v11.378A.381.381,0,0,1,439.417,636.588Zm-7.272-.761h6.891V625.652l-6.891,5.848Z" transform="translate(-431.384 -624.449)" stroke="#000" stroke-width="0.3" /><g transform="translate(11.534 0.001)"><path d="M454.563,636.588h-7.652a.381.381,0,0,1-.381-.381V624.83a.381.381,0,0,1,.627-.29l7.652,6.494a.379.379,0,0,1,.134.29v4.883A.381.381,0,0,1,454.563,636.588Zm-7.272-.762h6.891V631.5l-6.891-5.848Z" transform="translate(-446.53 -624.45)" stroke="#000" stroke-width="0.3" /></g></g><g transform="translate(31.163 18.369)"><path d="M459.13,658.591a.38.38,0,0,1-.381-.381v-8.879h-5.559v8.879a.381.381,0,1,1-.762,0v-9.26a.38.38,0,0,1,.381-.381h6.321a.38.38,0,0,1,.381.381v9.26A.38.38,0,0,1,459.13,658.591Z" transform="translate(-452.429 -648.57)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(11.953 17.492)"><path d="M432.5,654.593h-4.92a.38.38,0,0,1-.381-.381V647.8a.38.38,0,0,1,.381-.381h4.92a.381.381,0,0,1,.381.381v6.413A.381.381,0,0,1,432.5,654.593Zm-4.539-.761h4.159v-5.651h-4.159Z" transform="translate(-427.202 -647.419)" stroke="#000" stroke-width="0.3" /><g transform="translate(9.684)"><path d="M445.219,654.593H440.3a.381.381,0,0,1-.381-.381V647.8a.381.381,0,0,1,.381-.381h4.919a.38.38,0,0,1,.381.381v6.413A.38.38,0,0,1,445.219,654.593Zm-4.539-.761h4.158v-5.651h-4.158Z" transform="translate(-439.919 -647.419)" stroke="#000" stroke-width="0.3" /></g></g></g><g transform="translate(35.88)"><path d="M465.25,624.373a.38.38,0,0,1-.381-.381v-7.11a1.1,1.1,0,0,0-.963-1.2h-3.556a1.1,1.1,0,0,0-.966,1.2v1.892a.381.381,0,1,1-.761,0v-1.892a1.857,1.857,0,0,1,1.728-1.96h3.556a1.856,1.856,0,0,1,1.725,1.96v7.11A.38.38,0,0,1,465.25,624.373Z" transform="translate(-458.623 -614.922)" stroke="#000" stroke-width="0.3" /></g></g><g transform="translate(0)"><path d="M460.866,636.009a.381.381,0,0,1-.241-.085l-25.448-20.73-25.448,20.73a.385.385,0,0,1-.279.083.377.377,0,0,1-.257-.139l-3.257-4a.381.381,0,0,1,.055-.535l28.943-23.576a.382.382,0,0,1,.283-.083l.024,0a.379.379,0,0,1,.179.079l28.942,23.576a.381.381,0,0,1,.055.535l-3.257,4a.377.377,0,0,1-.257.139Zm-54.1-4.324,2.775,3.408,25.393-20.685a.381.381,0,0,1,.481,0l25.393,20.685,2.775-3.408-28.409-23.142Z" transform="translate(-405.851 -607.674)" stroke="#000" stroke-width="0.3" /></g></g></svg> </div>
                                                <div class="qodef-m-content">
                                                    <h4 class="qodef-m-title" style="margin-top: 9px">
                                                        <span class="qodef-m-title-text">Meet a realtor</span>
                                                    </h4>
                                                    <p class="qodef-m-text">Embark on a personalized journey to your dream property with our realtor! 🏠 Our dedicated real estate professionals are here to guide you every step of the way</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-eea3aa4" data-id="eea3aa4" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-16cc0d1 elementor-widget__width-initial elementor-widget-laptop__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-newhome_core_icon_with_text" data-id="16cc0d1" data-element_type="widget" data-widget_type="newhome_core_icon_with_text.default">
                                        <div class="elementor-widget-container">
                                            <div class="qodef-shortcode qodef-m  qodef-icon-with-text qodef-layout--top qodef--svg-code  qodef-alignment--left">
                                                <div class="qodef-m-icon-wrapper">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="35.25" height="47.562" viewBox="0 0 35.25 47.562"><g transform="translate(0.15 0.15)"><g transform="translate(0 5.089)"><path d="M919.788,409.393H888.1a1.631,1.631,0,0,1-1.63-1.629V368.849a1.632,1.632,0,0,1,1.632-1.628H919.79a1.631,1.631,0,0,1,1.63,1.628v38.915A1.632,1.632,0,0,1,919.788,409.393ZM888.1,368.066a.786.786,0,0,0-.787.784v38.915a.787.787,0,0,0,.786.785h31.688a.786.786,0,0,0,.787-.785V368.849a.785.785,0,0,0-.785-.784Z" transform="translate(-886.47 -367.221)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(3.831 7.164)"><path d="M910.73,405.977H892.7a1.693,1.693,0,0,1-1.691-1.691V371.37a1.693,1.693,0,0,1,1.691-1.692h23.9a1.694,1.694,0,0,1,1.692,1.692v27.372a.419.419,0,0,1-.131.306l-7.142,6.812A.421.421,0,0,1,910.73,405.977ZM892.7,370.523a.847.847,0,0,0-.846.847v32.916a.847.847,0,0,0,.846.846h17.864l6.888-6.571V371.37a.848.848,0,0,0-.848-.847Z" transform="translate(-891.006 -369.678)" stroke="#000" stroke-width="0.3" /><g transform="translate(5.67 8.237)"><path d="M913.526,380.276H898.141a.422.422,0,0,1,0-.845h15.385a.422.422,0,0,1,0,.845Z" transform="translate(-897.719 -379.431)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(5.67 13.474)"><path d="M913.526,386.477H898.141a.422.422,0,0,1,0-.845h15.385a.422.422,0,0,1,0,.845Z" transform="translate(-897.719 -385.632)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(5.67 18.711)"><path d="M913.526,392.678H898.141a.422.422,0,0,1,0-.845h15.385a.422.422,0,0,1,0,.845Z" transform="translate(-897.719 -391.833)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(5.67 23.948)"><path d="M913.526,398.879H898.141a.422.422,0,0,1,0-.845h15.385a.422.422,0,0,1,0,.845Z" transform="translate(-897.719 -398.034)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(18.992 28.736)"><path d="M913.915,411.265a.422.422,0,0,1-.422-.422v-5.485a1.648,1.648,0,0,1,1.591-1.655h6.092a.422.422,0,0,1,0,.845h-6.088a.8.8,0,0,0-.751.807v5.488A.422.422,0,0,1,913.915,411.265Z" transform="translate(-913.493 -403.703)" stroke="#000" stroke-width="0.3" /></g></g><g transform="translate(9.252)"><path d="M913.448,371.6h-15.6a.421.421,0,0,1-.422-.422v-4.468a3.26,3.26,0,0,1,3.256-3.257h1.057v-.566a1.691,1.691,0,0,1,1.689-1.689h4.441a1.691,1.691,0,0,1,1.689,1.689v.566h1.057a3.26,3.26,0,0,1,3.256,3.257v4.468A.421.421,0,0,1,913.448,371.6Zm-15.178-.845h14.756v-4.045a2.414,2.414,0,0,0-2.411-2.412h-1.48a.422.422,0,0,1-.422-.422v-.988a.845.845,0,0,0-.844-.845h-4.441a.845.845,0,0,0-.844.845v.988a.421.421,0,0,1-.422.422h-1.48a2.414,2.414,0,0,0-2.411,2.412Z" transform="translate(-897.425 -361.195)" stroke="#000" stroke-width="0.3" /></g></g></svg> </div>
                                                <div class="qodef-m-content">
                                                    <h4 class="qodef-m-title" style="margin-top: 3px">
                                                        <span class="qodef-m-title-text">Documents</span>
                                                    </h4>
                                                    <p class="qodef-m-text">Meticulous documentation ensures a smooth and transparent journey, capturing every detail and commitment to transform your property aspirations into a tangible reality.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-51b54f5" data-id="51b54f5" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3eb524e elementor-widget__width-initial elementor-widget-laptop__width-initial elementor-widget-tablet__width-initial elementor-widget-mobile__width-inherit elementor-widget elementor-widget-newhome_core_icon_with_text" data-id="3eb524e" data-element_type="widget" data-widget_type="newhome_core_icon_with_text.default">
                                        <div class="elementor-widget-container">
                                            <div class="qodef-shortcode qodef-m  qodef-icon-with-text qodef-layout--top qodef--svg-code  qodef-alignment--left">
                                                <div class="qodef-m-icon-wrapper">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="41.148" height="47.62" viewBox="0 0 41.148 47.62"><g transform="translate(0.15 0.149)"><g transform="translate(23.259 24.808)"><path d="M1204.794,527.211h-9.435a.4.4,0,0,1-.405-.405v-5.357l-.547.445a.4.4,0,0,1-.3.089.406.406,0,0,1-.273-.147l-1.015-1.246a.4.4,0,0,1,.058-.571l6.923-5.64a.392.392,0,0,1,.3-.088.294.294,0,0,1,.046.008.394.394,0,0,1,.165.079l6.923,5.64a.4.4,0,0,1,.147.273.4.4,0,0,1-.088.3l-1.016,1.246a.4.4,0,0,1-.57.058l-.516-.42v5.332A.4.4,0,0,1,1204.794,527.211Zm-9.03-.811h8.625v-5.78a.405.405,0,0,1,.661-.314l.862.7.5-.618-6.356-5.177-6.355,5.177.5.618.893-.728a.406.406,0,0,1,.661.315Z" transform="translate(-1192.73 -514.288)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(0 8.069)"><path d="M1172,532.831l-3.4-3.542V509.377a8.237,8.237,0,0,1-2.13-1.534,8.321,8.321,0,0,1,5.884-14.206h0a8.312,8.312,0,0,1,3.753,15.74v4.343l-1.047,1.418,1.091,2.5-1.1,2.121,1.128,1.924-1.111,1.571,1.1,2.006-1.106,1.754,1.15,1.992Zm-2.591-3.867,2.63,2.738,3.147-2.852-1.068-1.85,1.112-1.764-1.114-2.033,1.1-1.557-1.09-1.858,1.124-2.176-1.124-2.578,1.167-1.581v-4.589l.234-.109a7.537,7.537,0,1,0-6.355,0l.234.109Z" transform="translate(-1164.037 -493.638)" stroke="#000" stroke-width="0.3" /><g transform="translate(7.401 16.213)"><rect width="0.811" height="19.958" stroke="#000" stroke-width="0.3" /></g></g><g transform="translate(7.912)"><path d="M1196.909,497.733h-.811v-6.5a6.964,6.964,0,0,0-7.157-6.737h-7.178a6.963,6.963,0,0,0-7.155,6.737v4.229h-.811v-4.229a7.773,7.773,0,0,1,7.966-7.547h7.178a7.775,7.775,0,0,1,7.967,7.547Z" transform="translate(-1173.798 -483.684)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(5.445 10.864)"><path d="M1173.627,502.832a2.872,2.872,0,1,1,2.873-2.873A2.876,2.876,0,0,1,1173.627,502.832Zm0-4.934a2.062,2.062,0,1,0,2.062,2.061A2.064,2.064,0,0,0,1173.627,497.9Z" transform="translate(-1170.754 -497.087)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(20.332 13.644)"><path d="M1209.23,529.945h-19.706a.405.405,0,0,1-.405-.405V508.965a.409.409,0,0,1,.05-.195l4.4-8.044a.4.4,0,0,1,.356-.211h10.914a.4.4,0,0,1,.355.211l4.4,8.044a.409.409,0,0,1,.05.195v20.574A.405.405,0,0,1,1209.23,529.945Zm-19.3-.811h18.9V509.068l-4.231-7.741h-10.433l-4.231,7.741Z" transform="translate(-1189.119 -500.516)" stroke="#000" stroke-width="0.3" /></g></g></svg> </div>
                                                <div class="qodef-m-content">
                                                    <h4 class="qodef-m-title" style="margin-top: 3px">
                                                        <span class="qodef-m-title-text">Take the keys</span>
                                                    </h4>
                                                    <p class="qodef-m-text">Seal the deal and take the keys – it's the final step to unlocking the door to your new home. Congratulations on reaching this milestone in your real estate journey with 'Take the Keys.' Your dream space awaits, and now, it's officially yours!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-d675632 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="d675632" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0a7b714" data-id="0a7b714" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-8e34e8a elementor-widget elementor-widget-newhome_core_custom_font" data-id="8e34e8a" data-element_type="widget" data-widget_type="newhome_core_custom_font.default">
                        <div class="elementor-widget-container">
                            <p class="qodef-shortcode qodef-m  qodef-custom-font qodef-custom-font-916 qodef-layout--simple" style="color: #FFFFFF;font-family: poppins;font-size: 65px;line-height: 73px;font-weight: 500">Discover a new way of living</p>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-28ae5f5 elementor-widget elementor-widget-text-editor" data-id="28ae5f5" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p><span style="color: #ffffff;"></span></p> </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-69c1119" data-id="69c1119" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-f7ea276 elementor-widget elementor-widget-wp-widget-newhome_core_contact_form_7" data-id="f7ea276" data-element_type="widget" data-widget_type="wp-widget-newhome_core_contact_form_7.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-contact-form-7">
                                <div class="wpcf7 no-js" id="wpcf7-f5-p2116-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                    <form action="" method="post" class="wpcf7-form init demo" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                        @csrf
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="5" />
                                            <input type="hidden" name="_wpcf7_version" value="5.7.7" />
                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-p2116-o1" />
                                            <input type="hidden" name="_wpcf7_container_post" value="2116" />
                                            <input type="hidden" name="_wpcf7_posted_data_hash" value />
                                        </div>
                                        <div class="qodef-contact-form-7--type-1 qodef-contact-form-7--blur-background">
                                            <h3 class="qodef-contact-form-7-heading">Make an enquiry</h3>
                                            <p class="qodef-contact-form-7-paragraph">Save your time and easily rent or sell your property with the lowest commission on the real estate market.</p>
                                            <div class="qodef-contact-form-7-inputs">
                                                <span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your name*" value type="text" name="your-name" /></span>
                                                <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your email*" value type="email" name="your-email" /></span>
                                                <span class="wpcf7-form-control-wrap" data-name="tel"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Your phone number*" value type="tel" name="tel" /></span>
                                                <span class="wpcf7-form-control-wrap" data-name="message"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Tell us what you want*" value type="text" name="message" /></span>

                                                <button class="wpcf7-form-control wpcf7-submit qodef-button qodef-size--normal qodef-layout--filled qodef-m" type="submit"><span class="qodef-m-text">Make an enquiry</span></button>
                                            </div>
                                        </div><div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--    <section class="elementor-section elementor-top-section elementor-element elementor-element-4b49dfa elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="4b49dfa" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6bf0029" data-id="6bf0029" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a259a90 elementor-widget elementor-widget-newhome_core_section_title" data-id="a259a90" data-element_type="widget" data-widget_type="newhome_core_section_title.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment&#45;&#45;left qodef-title-break&#45;&#45;disabled  qodef&#45;&#45;custom-title-font-weight" style="&#45;&#45;title-font-weight: 500;&#45;&#45;decorated-font-weight: 600">
                                <h2 class="qodef-m-title">
                                    Our expert will help you make <span class="qodef-m-decorated">the</span> <span class="qodef-m-decorated">renovation</span> </h2>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-7919ff6 elementor-widget elementor-widget-newhome_core_icon_with_text" data-id="7919ff6" data-element_type="widget" data-widget_type="newhome_core_icon_with_text.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-icon-with-text qodef-layout&#45;&#45;before-content qodef&#45;&#45;svg-code ">
                                <div class="qodef-m-icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="47.463" viewBox="0 0 48.2 47.463"><g transform="translate(0.1 0.101)"><g transform="translate(6.132)"><g transform="translate(5.593 15.246)"><path d="M763.611,150.617H739.874a.445.445,0,0,1-.446-.446v-15.2a.446.446,0,1,1,.891,0v14.75h22.846V134.949a.446.446,0,1,1,.891,0v15.222A.445.445,0,0,1,763.611,150.617Z" transform="translate(-739.428 -134.503)" stroke="#000" stroke-width="0.2" /><g transform="translate(8.343 5.226)"><path d="M756.281,151.143a.446.446,0,0,1-.446-.446v-9.441h-6.157V150.7a.446.446,0,1,1-.891,0v-9.886a.446.446,0,0,1,.446-.446h7.048a.445.445,0,0,1,.446.446V150.7A.445.445,0,0,1,756.281,151.143Z" transform="translate(-748.787 -140.365)" stroke="#000" stroke-width="0.2" /></g></g><path d="M765.891,135.614a.448.448,0,0,1-.282-.1l-14.587-11.883-14.587,11.883a.445.445,0,0,1-.627-.064l-2.553-3.135a.444.444,0,0,1,.064-.627L750.735,117.5a.441.441,0,0,1,.332-.1l.034,0a.431.431,0,0,1,.209.093l17.417,14.187a.447.447,0,0,1,.064.627l-2.554,3.135A.447.447,0,0,1,765.891,135.614Zm-14.869-13a.443.443,0,0,1,.282.1l14.523,11.83,1.992-2.444-16.8-13.681-16.8,13.681,1.992,2.444,14.523-11.83A.442.442,0,0,1,751.022,122.611Z" transform="translate(-733.154 -117.401)" stroke="#000" stroke-width="0.2" /></g><g transform="translate(0 9.871)"><g transform="translate(35.92)"><path d="M778.2,157.413a.446.446,0,0,1-.446-.446V131.787a2.425,2.425,0,0,0-2.421-2.422h-8.321a.446.446,0,0,1,0-.891h8.321a3.317,3.317,0,0,1,3.313,3.314v25.181A.446.446,0,0,1,778.2,157.413Z" transform="translate(-766.569 -128.473)" stroke="#000" stroke-width="0.2" /></g><path d="M770.963,161.379H729.589a3.317,3.317,0,0,1-3.313-3.313v-26.28a3.317,3.317,0,0,1,3.313-3.314h8.563a.446.446,0,0,1,0,.891h-8.563a2.425,2.425,0,0,0-2.421,2.422v26.28a2.424,2.424,0,0,0,2.421,2.421h41.375a2.424,2.424,0,0,0,2.421-2.421.446.446,0,1,1,.891,0A3.316,3.316,0,0,1,770.963,161.379Z" transform="translate(-726.276 -128.473)" stroke="#000" stroke-width="0.2" /><g transform="translate(0 27.102)"><path d="M770.963,164.678H729.589a3.473,3.473,0,0,1-3.313-3.607V159.32a.446.446,0,0,1,.446-.446H773.83a.446.446,0,0,1,.446.446v1.752A3.473,3.473,0,0,1,770.963,164.678Zm-43.8-4.913v1.306a2.584,2.584,0,0,0,2.421,2.715h41.375a2.584,2.584,0,0,0,2.421-2.715v-1.306Z" transform="translate(-726.276 -158.874)" stroke="#000" stroke-width="0.2" /></g><g transform="translate(20.565 32.015)"><path d="M749.79,169.762a.445.445,0,0,1-.446-.446v-4.485a.446.446,0,1,1,.891,0v4.485A.446.446,0,0,1,749.79,169.762Z" transform="translate(-749.344 -164.385)" stroke="#000" stroke-width="0.2" /><g transform="translate(5.98)"><path d="M756.5,169.762a.445.445,0,0,1-.446-.446v-4.485a.446.446,0,0,1,.891,0v4.485A.446.446,0,0,1,756.5,169.762Z" transform="translate(-756.052 -164.385)" stroke="#000" stroke-width="0.2" /></g></g><g transform="translate(17.104 36.5)"><path d="M758.809,170.307h-12.9a.446.446,0,1,1,0-.891h12.9a.446.446,0,1,1,0,.891Z" transform="translate(-745.462 -169.416)" stroke="#000" stroke-width="0.2" /></g><g transform="translate(23.173 29.787)"><path d="M753.478,162.777h-.762a.446.446,0,1,1,0-.891h.762a.446.446,0,1,1,0,.891Z" transform="translate(-752.27 -161.886)" stroke="#000" stroke-width="0.2" /></g></g></g></svg> </div>
                                <div class="qodef-m-content">
                                    <h4 class="qodef-m-title">
                                        <span class="qodef-m-title-text">Find inspiration</span>
                                    </h4>
                                    <p class="qodef-m-text">Sumo petentium ut per, at his wisim utinam adipis cing. Est e graeco quod suavitate vix ad praesent.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-a5ffa6f elementor-widget elementor-widget-newhome_core_icon_with_text" data-id="a5ffa6f" data-element_type="widget" data-widget_type="newhome_core_icon_with_text.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-icon-with-text qodef-layout&#45;&#45;before-content qodef&#45;&#45;svg-code ">
                                <div class="qodef-m-icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="37.762" viewBox="0 0 49 37.762"><g transform="translate(0.15 0.15)"><g transform="translate(41.749 0)"><g transform="translate(1.685)"><path d="M938.44,489.383h-2.849a.341.341,0,0,1-.292-.515c.373-.623.766-1.268,1.14-1.873a.673.673,0,0,1,.272-.247,1.115,1.115,0,0,1,.3-.069.669.669,0,0,1,.562.311c.381.606.782,1.252,1.162,1.875a.34.34,0,0,1-.29.517Zm-2.248-.68h1.642c-.277-.451-.559-.9-.832-1.336C936.741,487.8,936.464,488.25,936.192,488.7Z" transform="translate(-935.251 -486.68)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(0 2.023)"><path d="M934.183,525.095a1.405,1.405,0,0,1-1.4-1.406l-.008-30.494c0-.165,0-.473,1.734-3.373a.339.339,0,0,1,.292-.165h2.849a.339.339,0,0,1,.29.163c1.763,2.9,1.762,3.206,1.761,3.373l.007,30.5a1.426,1.426,0,0,1-1.4,1.4Zm.806-34.759a15,15,0,0,0-1.54,2.872l.009,30.482v0a.725.725,0,0,0,.725.723l4.116,0a.745.745,0,0,0,.725-.725l-.007-30.5a15.629,15.629,0,0,0-1.563-2.856Z" transform="translate(-932.771 -489.656)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(0 33.15)"><path d="M934.183,539.76a1.405,1.405,0,0,1-1.4-1.406l-.008-2.561a.34.34,0,0,1,.34-.341l6.246,0h0a.34.34,0,0,1,.34.339l.007,2.565a1.426,1.426,0,0,1-1.4,1.406Zm-.731-3.629.007,2.223a.725.725,0,0,0,.725.726l4.116,0a.745.745,0,0,0,.725-.725l-.007-2.226Z" transform="translate(-932.771 -535.449)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(0.379 5.125)"><path d="M935.008,496.385a.34.34,0,0,1-.237-.1l-1.339-1.3a.34.34,0,0,1,.474-.487l1.1,1.067,1.121-1.151a.338.338,0,0,1,.239-.1h0a.334.334,0,0,1,.237.1l1.1,1.066,1.121-1.151a.34.34,0,0,1,.487.474l-1.359,1.4a.34.34,0,0,1-.481.005l-1.095-1.067-1.122,1.151a.341.341,0,0,1-.239.1Z" transform="translate(-933.329 -494.22)" stroke="#000" stroke-width="0.3" /></g></g><g transform="translate(46.283 7.843)"><path d="M939.782,522.289a.34.34,0,0,1-.34-.34V498.559a.34.34,0,0,1,.68,0v23.391A.34.34,0,0,1,939.782,522.289Z" transform="translate(-939.442 -498.219)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(0 0.246)"><path d="M891.008,524.258H871.692a.339.339,0,0,1-.34-.34V519.28a.34.34,0,1,1,.68,0v4.3h18.636v-8.157a.34.34,0,0,1,.34-.34h13.481V487.722H872.032v24.7h12.405v-4.135a.34.34,0,0,1,.68,0v4.475a.34.34,0,0,1-.34.34H871.692a.34.34,0,0,1-.34-.34V487.382a.34.34,0,0,1,.34-.34h33.137a.34.34,0,0,1,.34.34v28.039a.34.34,0,0,1-.34.34H891.348v8.157A.34.34,0,0,1,891.008,524.258Z" transform="translate(-871.352 -487.042)" stroke="#000" stroke-width="0.3" /><g transform="translate(8.922 11.556)"><path d="M888.98,508.29h-4.163a.34.34,0,0,1,0-.68h3.823v-3.229a.34.34,0,0,1,.34-.34h20.052a.34.34,0,0,1,0,.68H889.32v3.229A.34.34,0,0,1,888.98,508.29Z" transform="translate(-884.477 -504.042)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(0 15.124)"><path d="M875.091,509.972h-3.4a.34.34,0,1,1,0-.68h3.4a.34.34,0,0,1,0,.68Z" transform="translate(-871.352 -509.292)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(13.085)"><path d="M890.942,494.009a.339.339,0,0,1-.34-.34v-6.288a.34.34,0,0,1,.68,0v6.288A.34.34,0,0,1,890.942,494.009Z" transform="translate(-890.602 -487.042)" stroke="#000" stroke-width="0.3" /></g></g></g></svg> </div>
                                <div class="qodef-m-content">
                                    <h4 class="qodef-m-title">
                                        <span class="qodef-m-title-text">Find architect/designer</span>
                                    </h4>
                                    <p class="qodef-m-text">Sumo petentium ut per, at his wisim utinam adipis cing. Est e graeco quod suavitate vix ad praesent.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-0be05fa elementor-widget elementor-widget-newhome_core_icon_with_text" data-id="0be05fa" data-element_type="widget" data-widget_type="newhome_core_icon_with_text.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-icon-with-text qodef-layout&#45;&#45;before-content qodef&#45;&#45;svg-code " style="&#45;&#45;qode-content-gap: 30px">
                                <div class="qodef-m-icon-wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="42.795" viewBox="0 0 45.071 42.795"><g transform="translate(0.15 0.15)"><g transform="translate(19.943)"><g transform="translate(4.451)"><g transform="translate(12.553 6.8)"><path d="M773.907,495.011a.357.357,0,0,1-.358-.358v-2.395a.358.358,0,0,1,.715,0v2.395A.357.357,0,0,1,773.907,495.011Z" transform="translate(-773.549 -491.901)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(12.553 4.012)"><path d="M773.907,489.528a.357.357,0,0,1-.358-.358v-.81a.358.358,0,0,1,.715,0v.81A.358.358,0,0,1,773.907,489.528Z" transform="translate(-773.549 -488.003)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(6.276 4.223)"><path d="M765.134,493.986a.357.357,0,0,1-.358-.358v-4.972a.358.358,0,1,1,.715,0v4.972A.357.357,0,0,1,765.134,493.986Z" transform="translate(-764.776 -488.298)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(6.276 0.492)"><path d="M765.134,485.48a.358.358,0,0,1-.358-.358v-1.681a.358.358,0,1,1,.715,0v1.681A.358.358,0,0,1,765.134,485.48Z" transform="translate(-764.776 -483.084)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(0.001 5.651)"><path d="M756.363,494.554a.357.357,0,0,1-.358-.358v-3.544a.358.358,0,0,1,.716,0V494.2A.358.358,0,0,1,756.363,494.554Z" transform="translate(-756.005 -490.294)" stroke="#000" stroke-width="0.3" /></g><path d="M756.362,486.9a.357.357,0,0,1-.358-.358v-3.788a.358.358,0,1,1,.715,0v3.788A.357.357,0,0,1,756.362,486.9Z" transform="translate(-756.004 -482.396)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(0 12.149)"><g transform="translate(10.728 4.009)"><path d="M765.135,518.917a.357.357,0,0,1-.358-.358v-3.168a1.259,1.259,0,0,1,.96-1.177l11.9-2.563c.325-.052.521-.241.521-.488v-5.1a.363.363,0,0,0-.363-.363h-2.011a.358.358,0,1,1,0-.715H777.8a1.08,1.08,0,0,1,1.078,1.079v5.1a1.23,1.23,0,0,1-1.106,1.191l-11.854,2.551a.563.563,0,0,0-.425.485v3.168A.357.357,0,0,1,765.135,518.917Z" transform="translate(-764.777 -504.98)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(8.528 17.23)"><path d="M765.82,536.576h-3.008a1.11,1.11,0,0,1-1.109-1.109V525.32c0-.433.346-1.861,1.109-1.861h3.008c.763,0,1.11,1.428,1.11,1.861v10.147A1.111,1.111,0,0,1,765.82,536.576Zm-.039-12.408-2.969.007a2.352,2.352,0,0,0-.393,1.145v10.147a.394.394,0,0,0,.393.394h3.008a.394.394,0,0,0,.394-.394V525.32A2.052,2.052,0,0,0,765.78,524.167Z" transform="translate(-761.703 -523.459)" stroke="#000" stroke-width="0.3" /></g><path d="M769.478,508.11H752.184a2.4,2.4,0,0,1-2.4-2.4v-3.932a2.4,2.4,0,0,1,2.4-2.4h17.294a2.4,2.4,0,0,1,2.4,2.4v3.932A2.4,2.4,0,0,1,769.478,508.11Zm-17.294-8.018a1.687,1.687,0,0,0-1.686,1.685v3.932a1.687,1.687,0,0,0,1.686,1.685h17.294a1.687,1.687,0,0,0,1.686-1.685v-3.932a1.687,1.687,0,0,0-1.686-1.685Z" transform="translate(-749.783 -499.377)" stroke="#000" stroke-width="0.3" /><g transform="translate(2.091 5.847)"><path d="M770.056,508.264H753.064a.358.358,0,1,1,0-.715h16.992a.358.358,0,1,1,0,.715Z" transform="translate(-752.706 -507.549)" stroke="#000" stroke-width="0.3" /></g></g></g><g transform="translate(6.639 8.731)"><path d="M731.546,520.057a.352.352,0,0,1-.245-.1.357.357,0,0,1-.015-.506c2.461-2.609,2.821-3.879,3.121-5.663a8.121,8.121,0,0,0-.448-4.159c-.086-.23-.185-.478-.289-.738-.867-2.159-2.178-5.42,1.477-6.956,2.7-1.136,2.693-1.758,2.678-2.7l0-.255v-4.026a.358.358,0,0,1,.715,0l0,4.268c.021,1.274-.178,2.137-3.117,3.371-3,1.263-1.942,3.906-1.089,6.031.106.266.209.519.3.756a8.84,8.84,0,0,1,.483,4.526c-.314,1.861-.713,3.285-3.307,6.036A.357.357,0,0,1,731.546,520.057Z" transform="translate(-731.189 -494.599)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(0.002 8.731)"><path d="M728.906,520.057a.356.356,0,0,1-.26-.112c-2.594-2.75-2.993-4.175-3.307-6.036a8.844,8.844,0,0,1,.483-4.526c.087-.237.19-.49.3-.756.853-2.124,1.915-4.768-1.09-6.031-2.938-1.235-3.137-2.1-3.117-3.371l0-.242v-4.026a.358.358,0,0,1,.716,0l0,4.28c-.015.942-.026,1.564,2.678,2.7,3.655,1.536,2.344,4.8,1.477,6.956-.1.26-.2.507-.29.738a8.147,8.147,0,0,0-.448,4.159c.3,1.784.66,3.054,3.122,5.663a.358.358,0,0,1-.015.506A.354.354,0,0,1,728.906,520.057Z" transform="translate(-721.911 -494.599)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(0.006 12.35)"><path d="M735.547,500.373H722.275a.358.358,0,1,1,0-.716h13.273a.358.358,0,0,1,0,.716Z" transform="translate(-721.917 -499.657)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(0 2.519)"><path d="M735.545,493.857H722.267a.357.357,0,0,1-.358-.358v-7.225a.357.357,0,0,1,.358-.358h13.278a.358.358,0,0,1,.358.358V493.5A.357.357,0,0,1,735.545,493.857Zm-12.921-.715h12.563v-6.509H722.625Z" transform="translate(-721.909 -485.917)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(5.566 26.292)"><path d="M731.122,522.01a1.433,1.433,0,1,1,1.432-1.432A1.434,1.434,0,0,1,731.122,522.01Zm0-2.15a.717.717,0,1,0,.717.718A.719.719,0,0,0,731.122,519.86Z" transform="translate(-729.689 -519.145)" stroke="#000" stroke-width="0.3" /></g><g transform="translate(9.959 2.771)"><path d="M736.186,492.325a.358.358,0,0,1-.358-.358v-5.34a.358.358,0,1,1,.715,0v5.34A.358.358,0,0,1,736.186,492.325Z" transform="translate(-735.828 -486.269)" stroke="#000" stroke-width="0.3" /></g></g></svg> </div>
                                <div class="qodef-m-content">
                                    <h4 class="qodef-m-title">
                                        <span class="qodef-m-title-text">Begin renovation</span>
                                    </h4>
                                    <p class="qodef-m-text">Sumo petentium ut per, at his wisim utinam adipis cing. Est e graeco quod suavitate vix ad praesent.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-17b2877" data-id="17b2877" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-8b1c3b2 elementor-widget elementor-widget-slider_revolution" data-id="8b1c3b2" data-element_type="widget" data-widget_type="slider_revolution.default">
                        <div class="elementor-widget-container">
                            <div class="wp-block-themepunch-revslider">
                                <p class="rs-p-wp-fix"></p>
                                <rs-module-wrap id="rev_slider_2_2_wrapper" data-source="gallery" style="visibility:hidden;background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                    <rs-module id="rev_slider_2_2" style data-version="6.6.12">
                                        <rs-slides style="overflow: hidden; position: absolute;">
                                            <rs-slide style="position: absolute;" data-key="rs-4" data-title="Slide" data-in="o:0;" data-out="a:false;">
                                                <img decoding="async" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="Slide" title="Main Home" class="rev-slidebg tp-rs-img rs-lazyload" data-lazyload="//newhome.qodeinteractive.com/wp-content/plugins/revslider/public/assets/assets/transparent.png" data-no-retina>
                                                <rs-layer id="slider-2-slide-4-layer-0" data-type="image" data-xy="x:c;xo:-170px,-146px,-174px,0;y:m,m,m,t;yo:0,0,0,50px;" data-text="w:normal;" data-dim="w:300px,240px,290px,300px;h:430px,344px,416px,430px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-border="bor:5px,5px,5px,5px;" data-frame_0="y:-35px;" data-frame_1="sp:1000;" data-frame_999="o:0;st:w;" style="z-index:5;"><img decoding="async" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" class="tp-rs-img rs-lazyload" width="300" height="430" data-lazyload="//newhome.qodeinteractive.com/wp-content/uploads/2023/03/main-home-img-4.jpg" data-no-retina>
                                                </rs-layer><rs-layer id="slider-2-slide-4-layer-1" data-type="image" data-xy="x:c;xo:171px,134px,156px,0;y:m,m,m,t;yo:-128px,-107px,-124px,500px;" data-text="w:normal;" data-dim="w:341px,280px,330px,300px;h:235px,193px,227px,207px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-border="bor:5px,5px,5px,5px;" data-frame_0="y:-30px;" data-frame_1="st:200;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:6;"><img decoding="async" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" class="tp-rs-img rs-lazyload" width="341" height="235" data-lazyload="//newhome.qodeinteractive.com/wp-content/uploads/2023/03/main-home-img-5.jpg" data-no-retina>
                                                </rs-layer><rs-layer id="slider-2-slide-4-layer-2" data-type="image" data-xy="x:c;xo:171px,134px,156px,0;y:m,m,m,t;yo:128px,107px,124px,727px;" data-text="w:normal;" data-dim="w:341px,280px,330px,300px;h:235px,193px,227px,207px;" data-basealign="slide" data-rsp_o="off" data-rsp_bd="off" data-border="bor:5px,5px,5px,5px;" data-frame_0="y:30px;" data-frame_1="st:100;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:7;"><img decoding="async" src="wp-content/plugins/revslider/public/assets/assets/dummy.png" alt="w" class="tp-rs-img rs-lazyload" width="341" height="235" data-lazyload="//newhome.qodeinteractive.com/wp-content/uploads/2023/03/main-home-img-6.jpg" data-no-retina>
                                                </rs-layer> </rs-slide>
                                        </rs-slides>
                                    </rs-module>
                                    <script>
                                        setREVStartSize({c: 'rev_slider_2_2',rl:[1920,1700,1025,680],el:[600,500,700,950],gw:[700,550,700,300],gh:[600,500,700,950],type:'hero',justify:'',layout:'fullwidth',mh:"0"});if (window.RS_MODULES!==undefined && window.RS_MODULES.modules!==undefined && window.RS_MODULES.modules["revslider22"]!==undefined) {window.RS_MODULES.modules["revslider22"].once = false;window.revapi2 = undefined;if (window.RS_MODULES.checkMinimal!==undefined) window.RS_MODULES.checkMinimal()}
                                    </script>
                                </rs-module-wrap>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-666973a elementor-section-full_width qodef-elementor-content-grid qodef-extended-grid qodef-extended-grid&#45;&#45;left qodef-extended-grid-disabled&#45;&#45;1440 elementor-section-height-default elementor-section-height-default" data-id="666973a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b6b63d1" data-id="b6b63d1" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a8f258f elementor-widget elementor-widget-newhome_core_single_image" data-id="a8f258f" data-element_type="widget" data-widget_type="newhome_core_single_image.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-single-image qodef-layout&#45;&#45;default   qodef-drop-shadow&#45;&#45;enabled" data-viewport-offset="0.7">
                                <div class="qodef-m-image">
                                    <img loading="lazy" width="950" height="579" src="wp-content/uploads/2023/03/main-home-img-2.jpg" class="attachment-full size-full" alt="w" decoding="async" srcset="https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/main-home-img-2.jpg 950w, https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/main-home-img-2-300x183.jpg 300w, https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/main-home-img-2-768x468.jpg 768w, https://newhome.qodeinteractive.com/wp-content/uploads/2023/03/main-home-img-2-600x366.jpg 600w" sizes="(max-width: 950px) 100vw, 950px" /> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9802410" data-id="9802410" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5eb9f4d elementor-widget elementor-widget-newhome_core_section_title" data-id="5eb9f4d" data-element_type="widget" data-widget_type="newhome_core_section_title.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment&#45;&#45;left qodef-title-break&#45;&#45;disabled  qodef&#45;&#45;custom-title-font-weight" style="&#45;&#45;title-font-weight: 500;&#45;&#45;decorated-font-weight: 600">
                                <h2 class="qodef-m-title">
                                    Explore your home<br/> <span class="qodef-m-decorated">loan</span> <span class="qodef-m-decorated">options</span> </h2>
                                <p class="qodef-m-text-area" style="margin-top: 22px">
                                    Lorem ipsum dolor sit amet, minimum inimicus quo no, at vix primis viderere vituperatoribus. In corpora argumentum. Vix ferri dicam contentiones ne, ex appetere salutatus </p>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6dd705b elementor-widget elementor-widget-newhome_core_button" data-id="6dd705b" data-element_type="widget" data-widget_type="newhome_core_button.default">
                        <div class="elementor-widget-container">
                            <a class="qodef-shortcode qodef-m  qodef-button qodef-layout&#45;&#45;filled  qodef-html&#45;&#45;link" href="author/ingrid-vulk/index.html" target="_self" data-hover-background-color="#8ACE46" style="background-color: #A9DE74;&#45;&#45;hover-background-color: #8ACE46">
                                <span class="qodef-m-text">Search Property</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   -->
    <section class="elementor-section elementor-top-section elementor-element elementor-element-f4b085e qodef-elementor-content-grid elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="f4b085e" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5334454" data-id="5334454" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-1bd64d7 elementor-widget elementor-widget-newhome_core_section_title" data-id="1bd64d7" data-element_type="widget" data-widget_type="newhome_core_section_title.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-section-title qodef-alignment--left qodef-title-break--disabled  qodef--custom-title-font-weight" style="--title-font-weight: 500;--decorated-font-weight: 600">
                                <h2 class="qodef-m-title">
                                    See what others<br/> said <span class="qodef-m-decorated">about</span> <span class="qodef-m-decorated">us</span> </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-eae8cb1 qodef-elementor-content-grid elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="eae8cb1" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-43f50af4" data-id="43f50af4" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-48377c96 elementor-widget elementor-widget-newhome_core_testimonials_grid_slider" data-id="48377c96" data-element_type="widget" data-widget_type="newhome_core_testimonials_grid_slider.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-testimonials-grid-slider qodef-grid qodef-swiper-container    qodef-col-num--1 qodef-item-layout--info-below qodef-responsive--predefined qodef-swiper--show-pagination" data-options="{&quot;spaceBetween&quot;:0,&quot;slidesPerView&quot;:&quot;1&quot;,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:&quot;&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;slideAnimation&quot;:&quot;&quot;,&quot;direction&quot;:&quot;&quot;,&quot;centeredSlides&quot;:&quot;&quot;,&quot;sliderScroll&quot;:&quot;&quot;,&quot;loopedSlides&quot;:&quot;&quot;,&quot;hiddenSlides&quot;:&quot;&quot;,&quot;outsideNavigation&quot;:&quot;yes&quot;,&quot;unique&quot;:118}">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        @for ($i = 0; $i < 4; $i++)
                                            @if (isset($testimonials[$i]))
                                                <div class="qodef-e qodef-item--custom">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-media-image">
                                                            <div style="background: sandybrown; border-radius: 50%; width: 83px; height: 83px; display: flex; justify-content: center; align-items: center;" alt="d" data-ratio="1">
                                                                <h1 style="margin: 0;">{{ strtoupper(substr($testimonials[$i]['name'], 0, 2)) }}</h1>
                                                            </div>
                                                        </div>
                                                        <div class="qodef-e-content">
                                                            <h4 class="qodef-e-author">
                        <span class="qodef-e-author-name">
                            {{ $testimonials[$i]['name'] }}
                        </span>
                                                                <span class="qodef-e-author-job">
                            {{ $testimonials[$i]['job'] }}
                        </span>
                                                            </h4>
                                                            <p itemprop="description" class="qodef-e-text">
                                                                "{{ $testimonials[$i]['message'] }}"
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endfor
                                    </div>
                                    <div class="swiper-slide">
                                        @for ($i = 4; $i < 8; $i++)
                                            @if (isset($testimonials[$i]))
                                                <div class="qodef-e qodef-item--custom">
                                                    <div class="qodef-e-inner">
                                                        <div class="qodef-e-media-image">
                                                            <div style="background: sandybrown; border-radius: 50%; width: 83px; height: 83px; display: flex; justify-content: center; align-items: center;" alt="d" data-ratio="1">
                                                                <h1 style="margin: 0;">{{ strtoupper(substr($testimonials[$i]['name'], 0, 2)) }}</h1>
                                                            </div>
                                                        </div>
                                                        <div class="qodef-e-content">
                                                            <h4 class="qodef-e-author">
                        <span class="qodef-e-author-name">
                            {{ $testimonials[$i]['name'] }}
                        </span>
                                                                <span class="qodef-e-author-job">
                            {{$testimonials[$i]['job'] }}
                        </span>
                                                            </h4>
                                                            <p itemprop="description" class="qodef-e-text">
                                                                "{{ $testimonials[$i]['message'] }}"
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endfor
                                    </div>

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
       <section class="elementor-section elementor-top-section elementor-element elementor-element-5257bb7 elementor-section-full_width qodef-elementor-content-grid elementor-section-height-default elementor-section-height-default" data-id="5257bb7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3428f9e" data-id="3428f9e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-dde89b8 elementor-widget elementor-widget-newhome_core_custom_font" data-id="dde89b8" data-element_type="widget" data-widget_type="newhome_core_custom_font.default">
                        <div class="elementor-widget-container">
                            <p class="qodef-shortcode qodef-m  qodef-custom-font qodef-custom-font-969 qodef-layout--simple" style="color: #FFFFFF;font-family: poppins;font-size: 65px;line-height: 73px;font-weight: 500">Find a home that truly suits you</p>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d4a4e52 elementor-widget elementor-widget-text-editor" data-id="d4a4e52" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p><span style="color: #ffffff;">* Feugait scriptorem qui ea, quo admodum lorem.</span></p> </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-89ea523" data-id="89ea523" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-f7081ce elementor-widget elementor-widget-wp-widget-newhome_core_contact_form_7" data-id="f7081ce" data-element_type="widget" data-widget_type="wp-widget-newhome_core_contact_form_7.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-contact-form-7">
                                <div class="wpcf7 no-js" id="wpcf7-f16-p2116-o2" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                    <form action="https://newhome.qodeinteractive.com/#wpcf7-f16-p2116-o2" method="post" class="wpcf7-form init demo" aria-label="Contact form" novalidate="novalidate" data-status="init">
                                        @csrf
                                        <div style="display: none;">
                                            <input type="hidden" name="_wpcf7" value="16" />
                                            <input type="hidden" name="_wpcf7_version" value="5.7.7" />
                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f16-p2116-o2" />
                                            <input type="hidden" name="_wpcf7_container_post" value="2116" />
                                            <input type="hidden" name="_wpcf7_posted_data_hash" value />
                                        </div>
                                        <div class="qodef-contact-form-7--type-2 qodef-contact-form-7--blur-background">
                                            <h3 class="qodef-contact-form-7-heading">Sign to newsletter</h3>
                                            <p class="qodef-contact-form-7-paragraph">Save your time and easily rent or sell your property with the lowest commission on the real estate market.</p>
                                            <div class="qodef-contact-form-7-inputs">
                                                <span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your email" value type="email" name="your-email" /></span>
                                                <button class="wpcf7-form-control wpcf7-submit qodef-button qodef-size--normal qodef-layout--filled qodef-m" type="submit"><span class="qodef-m-text">Sign up</span></button>
                                            </div>
                                        </div><div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-531e33a elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="531e33a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e762d1e" data-id="e762d1e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-0399407 elementor-widget elementor-widget-newhome_core_clients_list" data-id="0399407" data-element_type="widget" data-widget_type="newhome_core_clients_list.default">
                        <div class="elementor-widget-container">
                            <div class="qodef-shortcode qodef-m  qodef-clients-list qodef-grid qodef-swiper-container    qodef-col-num--7 qodef-item-layout--image-only qodef-responsive--custom qodef-col-num--1440--6 qodef-col-num--1366--5 qodef-col-num--1024--4 qodef-col-num--768--3 qodef-col-num--680--2 qodef-col-num--480--1 qodef-hover-animation--move" data-options="{&quot;spaceBetween&quot;:0,&quot;slidesPerView&quot;:&quot;7&quot;,&quot;loop&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:&quot;&quot;,&quot;speedAnimation&quot;:&quot;&quot;,&quot;slideAnimation&quot;:&quot;&quot;,&quot;direction&quot;:&quot;&quot;,&quot;centeredSlides&quot;:&quot;&quot;,&quot;sliderScroll&quot;:&quot;&quot;,&quot;loopedSlides&quot;:&quot;&quot;,&quot;hiddenSlides&quot;:&quot;&quot;,&quot;customStages&quot;:true,&quot;slidesPerView1440&quot;:&quot;6&quot;,&quot;slidesPerView1366&quot;:&quot;5&quot;,&quot;slidesPerView1024&quot;:&quot;4&quot;,&quot;slidesPerView768&quot;:&quot;3&quot;,&quot;slidesPerView680&quot;:&quot;2&quot;,&quot;slidesPerView480&quot;:&quot;1&quot;}">
                                <div class="swiper-wrapper">
<span class="qodef-e swiper-slide ">
<span class="qodef-e-inner">
<span class="qodef-e-image">
<a itemprop="url" href="#" target="_blank">
<span class="qodef-e-logo">
<img loading="lazy" width="183" height="96" src="wp-content/uploads/2023/03/client-1.png" class="attachment-full size-full" alt="w" decoding="async" /> </span>
</a>
</span>
</span>
</span>
                                    <span class="qodef-e swiper-slide ">
<span class="qodef-e-inner">
<span class="qodef-e-image">
<a itemprop="url" href="#" target="_blank">
<span class="qodef-e-logo">
<img loading="lazy" width="122" height="96" src="wp-content/uploads/2023/03/client-2.png" class="attachment-full size-full" alt="w" decoding="async" /> </span>
</a>
</span>
</span>
</span>
                                    <span class="qodef-e swiper-slide ">
<span class="qodef-e-inner">
<span class="qodef-e-image">
<a itemprop="url" href="#" target="_blank">
<span class="qodef-e-logo">
<img loading="lazy" width="98" height="96" src="wp-content/uploads/2023/03/client-3.png" class="attachment-full size-full" alt="w" decoding="async" /> </span>
</a>
</span>
</span>
</span>
                                    <span class="qodef-e swiper-slide ">
<span class="qodef-e-inner">
<span class="qodef-e-image">
<a itemprop="url" href="#" target="_blank">
<span class="qodef-e-logo">
<img loading="lazy" width="120" height="96" src="wp-content/uploads/2023/03/client-4.png" class="attachment-full size-full" alt="w" decoding="async" /> </span>
</a>
</span>
</span>
</span>
                                    <span class="qodef-e swiper-slide ">
<span class="qodef-e-inner">
<span class="qodef-e-image">
<a itemprop="url" href="#" target="_blank">
<span class="qodef-e-logo">
<img loading="lazy" width="120" height="96" src="wp-content/uploads/2023/03/client-5.png" class="attachment-full size-full" alt="w" decoding="async" /> </span>
</a>
</span>
</span>
</span>
                                    <span class="qodef-e swiper-slide ">
<span class="qodef-e-inner">
<span class="qodef-e-image">
<a itemprop="url" href="#" target="_blank">
<span class="qodef-e-logo">
<img loading="lazy" width="112" height="96" src="wp-content/uploads/2023/03/client-6.png" class="attachment-full size-full" alt="w" decoding="async" /> </span>
</a>
</span>
</span>
</span>
                                    <span class="qodef-e swiper-slide ">
<span class="qodef-e-inner">
<span class="qodef-e-image">
<a itemprop="url" href="#" target="_blank">
<span class="qodef-e-logo">
<img loading="lazy" width="113" height="96" src="wp-content/uploads/2023/03/client-7.png" class="attachment-full size-full" alt="w" decoding="async" /> </span>
</a>
</span>
</span>
</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endsection
