<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}fancybox/source/jquery.fancybox.css']);
$this->dependencies->add(['js', '{$path.plugins}fancybox/source/jquery.fancybox.pack.js']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.0']);

?>

<main>
    <section id="contact" class="pos-relative d-flex align-items-center p-20 p-md-40" style="height:100vh;min-height:700px;background-position:center;background-repeat:no-repeat;background-image:url('{$path.images}contact.jpg');background-size:cover;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 p-r-0 p-r-md-20 m-b-20 m-b-md-0">
                    <h1 class="m-b-20 text-center text-md-left text-light" style="font-size:48px;">{$lang.unidamily_community}</h1>
                    <p class="text-center text-md-left text-light" style="font-size:18px;">{$lang.best_design_excelent_location}</p>
                </div>
                <div class="col-md-6 p-t-0 p-t-md-50 m-t-0 m-t-md-50">
                    <h2 class="m-b-20 text-center text-md-left text-uppercase text-light" style="font-size:24px;">{$lang.contact}</h2>
                    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                    <script>
                      hbspt.forms.create({
                    	region: "na1",
                    	portalId: "7235449",
                    	formId: "e1bd5991-c001-4bc3-9639-7c95a35264eb"
                    });
                    </script>
                </div>
            </div>
        </div>
    </section>
    <section id="brochure" class="p-20 p-md-40" style="background-color:#f4f4ea;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-8">
                    <h3 class="text-uppercase" style="font-size:40px;">{$lang.presale_may_2021}</h3>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <a href="{$path.images}brochure_<?php echo Session::get_value('lang'); ?>.pdf" download="Surenna.pdf" class="btn btn-b-none btn-dark text-uppercase" style="border-radius:0px;background-color:#777558;font-size:16px;">{$lang.download_brochure}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40" style="background-color:#d2cdbf;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-4">
                    <figure>
                        <img src="{$path.images}logotype_dark.png" alt="Logotype" class="img-fluid">
                    </figure>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center justify-content-center">
                        <strong class="text-center" style="font-size:40px;">25</strong>
                        <figure>
                            <img src="{$path.images}icon_1.png" alt="Icon" class="img-fluid" style="height:100px;">
                        </figure>
                        <span class="text-center" style="font-size:18px;">{$lang.houses_3_4_rooms}</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex align-items-center justify-content-center">
                        <strong class="text-center" style="font-size:40px;">34</strong>
                        <figure>
                            <img src="{$path.images}icon_2.png" alt="Icon" class="img-fluid" style="height:100px;">
                        </figure>
                        <span class="text-center" style="font-size:18px;">{$lang.lots_250_m}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="pos-relative d-flex align-items-center p-20 p-md-40" style="height:100vh;min-height:700px;background-position:center;background-repeat:no-repeat;background-image:url('{$path.images}about.jpg');background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="p-20 p-md-40" style="background-color:#f4f4ea;">
                        <h4 class="m-b-20 text-center text-md-left text-uppercase" style="font-size:24px;">{$lang.best_international_tourism_destination}</h4>
                        <p class="text-justify" style="font-size:16px;">{$lang.unique_community}</p>
                    </div>
                </div>
                <div class="col-md-8"></div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40" style="background-color:#d2cdbf;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-8">
                    <h3 class="text-uppercase" style="font-size:40px;"><span style="font-size:18px;">{$lang.know}</span><br>{$lang.your_next_property_in_tulum}</h3>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
                    <a href="{$path.images}brochure_<?php echo Session::get_value('lang'); ?>.pdf" download="Surenna.pdf" class="btn btn-b-none btn-dark text-uppercase" style="border-radius:0px;background-color:#777558;font-size:16px;">{$lang.download_brochure}</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40" style="background-color:#f4f4ea;">
        <div class="container">
            <div class="row m-b-20 m-b-md-40">
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <figure class="pos-relative">
                        <img src="{$path.images}model_a.jpg" alt="Model A" class="img-cover" style="height:400px;">
                        <span class="pos-absolute p-20 text-lowercase text-light" style="right:0px;bottom:0px;background-color:#55543e;font-size:16px;">{$lang.model_a}</span>
                    </figure>
                </div>
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <figure class="pos-relative">
                        <img src="{$path.images}model_b.jpg" alt="Model A" class="img-cover" style="height:400px;">
                        <span class="pos-absolute p-20 text-lowercase text-light" style="right:0px;bottom:0px;background-color:#55543e;font-size:16px;">{$lang.model_b}</span>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="pos-relative">
                        <img src="{$path.images}model_c.jpg" alt="Model A" class="img-cover" style="height:400px;">
                        <span class="pos-absolute p-20 text-lowercase text-light" style="right:0px;bottom:0px;background-color:#55543e;font-size:16px;">{$lang.model_c}</span>
                    </figure>
                </div>
            </div>
            <div class="row m-b-20 m-b-md-40">
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <h4 class="m-b-20 text-lowercase" style="font-size:24px;">{$lang.model_a}</h4>
                    <div class="pos-relative p-20" style="background-color:#ebe9dd;">
                        <figure class="pos-absolute p-20" style="top:-50px;right:0px;">
                            <img src="{$path.images}a.png" alt="Icon" class="img-fluid" style="height:100px;">
                        </figure>
                        <ul class="list-unstyled" style="font-size:16px;">
                            <li class="m-b-5"><strong>{$lang.include}</strong></li>
                            <li>{$lang.living_room}</li>
                            <li>{$lang.dining_room}</li>
                            <li>{$lang.kitchen}</li>
                            <li>3 {$lang.bath_rooms}</li>
                            <li>2 {$lang.rooms_with_closet}</li>
                            <li>1 {$lang.room_with_dresser}</li>
                            <li class="m-b-20">{$lang.laundry_room}</li>
                            <li class="m-b-5"><strong>{$lang.additionals}</strong></li>
                            <li>{$lang.terrace_and_patio_option}</li>
                            <li>1 {$lang.room_additional_option}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <figure>
                        <img src="{$path.images}master_a.png" alt="Master A" class="img-cover">
                    </figure>
                </div>
            </div>
            <div class="row m-b-20 m-b-md-40">
                <div class="col-md-4 order-1 order-md-2 m-b-20 m-b-md-0">
                    <h4 class="m-b-20 text-lowercase" style="font-size:24px;">{$lang.model_b}</h4>
                    <div class="pos-relative p-20" style="background-color:#ebe9dd;">
                        <figure class="pos-absolute p-20" style="top:-50px;right:0px;">
                            <img src="{$path.images}b.png" alt="Icon" class="img-fluid" style="height:100px;">
                        </figure>
                        <ul class="list-unstyled" style="font-size:16px;">
                            <li class="m-b-5"><strong>{$lang.include}</strong></li>
                            <li>{$lang.living_room}</li>
                            <li>{$lang.dining_room}</li>
                            <li>{$lang.kitchen}</li>
                            <li>3 {$lang.bath_rooms}</li>
                            <li>2 {$lang.rooms_with_closet}</li>
                            <li>1 {$lang.room_with_dresser}</li>
                            <li class="m-b-20">{$lang.laundry_room}</li>
                            <li class="m-b-5"><strong>{$lang.additionals}</strong></li>
                            <li>{$lang.terrace_and_patio_option}</li>
                            <li>1 {$lang.room_additional_option}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 order-2 order-md-1">
                    <figure>
                        <img src="{$path.images}master_b.png" alt="Master B" class="img-cover">
                    </figure>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 m-b-20 m-b-md-0">
                    <h4 class="m-b-20 text-lowercase" style="font-size:24px;">{$lang.model_c}</h4>
                    <div class="pos-relative p-20" style="background-color:#ebe9dd;">
                        <figure class="pos-absolute p-20" style="top:-50px;right:0px;">
                            <img src="{$path.images}c.png" alt="Icon" class="img-fluid" style="height:100px;">
                        </figure>
                        <ul class="list-unstyled" style="font-size:16px;">
                            <li class="m-b-5"><strong>{$lang.include}</strong></li>
                            <li>{$lang.living_room}</li>
                            <li>{$lang.dining_room}</li>
                            <li>{$lang.kitchen}</li>
                            <li>3 {$lang.bath_rooms}</li>
                            <li>2 {$lang.rooms_with_closet}</li>
                            <li>1 {$lang.room_with_dresser}</li>
                            <li class="m-b-20">{$lang.laundry_room}</li>
                            <li class="m-b-5"><strong>{$lang.additionals}</strong></li>
                            <li>{$lang.terrace_and_patio_option}</li>
                            <li>1 {$lang.room_additional_option}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <figure>
                        <img src="{$path.images}master_c.png" alt="Master C" class="img-cover">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20 p-md-40" style="background-color:#d2cdbf;">
        <div class="container">
            <h2 class="m-b-20 m-b-md-40 text-center text-uppercase" style="font-size:40px;">{$lang.gallery}</h2>
            <div class="row">
                <div class="col-md-4 m-b-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_1.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_1.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_2.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_2.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_3.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_3.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_4.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_4.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_5.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_5.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_6.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_6.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_7.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_7.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_8.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_8.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-30">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_9.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_9.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-30 m-b-md-0">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_10.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_10.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4 m-b-30 m-b-md-0">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_11.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_11.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="pos-relative" style="height:200px;">
                        <img src="{$path.images}gallery_12.jpg" alt="Gallery" class="img-cover">
                        <a href="{$path.images}gallery_12.jpg" rel="gallery" data-fancybox style="position:absolute;top:0px;right:0px;bottom:0px;left:0px;"></a>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20" style="background-color:#55543e;">
        <div class="container">
            <p class="text-center text-uppercase text-light" style="font-size:24px;">{$lang.12_months_of_financing}</p>
        </div>
    </section>
    <section class="pos-relative d-flex align-items-center p-20 p-md-40" style="height:100vh;min-height:700px;background-position:center;background-repeat:no-repeat;background-image:url('{$path.images}location.png');background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4">
                    <h4 class="m-b-20 text-center text-md-left text-uppercase" style="font-size:24px;">{$lang.location}</h4>
                    <p class="m-b-20 text-justify" style="font-size:16px;">{$lang.located_in_tulum_heart}</p>
                    <h6 style="font-size:14px;">{$lang.tulum_center} - 2 min</h6>
                    <progress value="10" max="100" class="m-b-10" style="width:100%;"></progress>
                    <h6 style="font-size:14px;">{$lang.beach} - 10 min</h6>
                    <progress value="30" max="100" class="m-b-10" style="width:100%;"></progress>
                    <h6 style="font-size:14px;">{$lang.archeologic_zone} - 10 min</h6>
                    <progress value="30" max="100" class="m-b-10" style="width:100%;"></progress>
                    <h6 style="font-size:14px;">Playa del Carmen - 50 min</h6>
                    <progress value="80" max="100" class="m-b-10" style="width:100%;"></progress>
                </div>
            </div>
        </div>
    </section>
    <section class="p-20" style="background-color:#d2cdbf;">
        <div class="container">
            <p class="text-center text-uppercase" style="font-size:24px;">{$lang.houses_from}</p>
        </div>
    </section>
    <section class="pos-relative d-flex align-items-center p-20 p-md-40" style="height:100vh;min-height:700px;background-position:center;background-repeat:no-repeat;background-image:url('{$path.images}3d.jpg');background-size:cover;"></section>
    <section class="p-20 p-md-40" style="background-color:#f4f4ea;">
        <div class="container d-flex align-items-center justify-content-center flex-column">
            <a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" class="text-dark" style="font-size:16px;">{$lang.email}: <?php echo Configuration::$vars['contact']['email']; ?></a>
            <a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" class="m-b-20 text-dark" style="font-size:16px;">{$lang.phone}: <?php echo Configuration::$vars['contact']['phone']; ?></a>
            <a href="#contact" class="btn btn-dark text-uppercase" style="width:100%;max-width:400px;border-radius:0px;background-color:#55543e;font-size:16px;">{$lang.contact}</a>
        </div>
    </section>
</main>
