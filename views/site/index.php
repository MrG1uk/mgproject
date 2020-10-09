

<?php
use yii\helpers\Url;
/**
 * @var $blogs \app\models\Blog
 */

$this->title = 'Service center Kalenyk';
?>
<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider d-flex align-items-center slider_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="slider_text "align="center" >
                        <p style="color: #F17D2F; font-size: 48pt"><span style="color: #F17D2F">Хороша техніка -</span>  <span style="color: #274299">працююча техніка.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- what_is_CDPAP_start -->
<div  class="welcome_docmed_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 ">
                <div class="slider_bg_3"></div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="welcome_docmed_info">
                    <!--                        <h2>What is CDPAP?</h2>-->
                    <h3 style="color: #F17D2F">Сервісний центр  <span style="color: #274299">SCK</span></h3>
                    <p>За цей час ми відкрили 3 сервісні центри, один з них у Львові і два в Чернівцях.
                        Створили власну школу майстрів та школу менеджерів по обслуговуванню клієнтів.
                        Важливим досягненням також є те, що 95% клієнтів задоволені рівнем обслуговування та рекомендують нас своїм друзям та знайомим.
                        Ми надаємо 12 місяців гарантії на 99% видів ремонтів. У нас Ви не почуєте фразу “робить, то й робить” або “гарантія до дверей”, як в інших сервісних центрах.
                        Дізнайтеся більше, що ми робимо для того, щоб забезпечити високу якість виконаних ремонтів, а значить і ваш спокій..</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- what_is_CDPAP_end -->

<!-- welcome_docmed_area_start -->
<div class="our_department_area welcome_docmed_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="welcome_docmed_info">
                    <!--<h2>What is CDPAP?</h2>-->
                    <h3 style="color: #F17D2F">Що ми пропонуємо <span style="color: #F17D2F">?</span></h3>
                    <ul>
                        <li style="color: #274299"> <i class="flaticon-correct"></i> Проведемо безкоштовну діагностику техніки, навіть якщо Ви відмовитесь від подальшого ремонту.  </li>
                        <li style="color: #274299"> <i class="flaticon-correct"></i> Надамо 10 місяців гарантії на запчастини та роботу майстра на 99% видів ремонтів</li>
                        <li style="color: #274299"> <i class="flaticon-correct"></i> Безкоштовно надамо підмінний телефон на час ремонту Вашого телефону у нас </li>
                        <li style="color: #274299"> <i class="flaticon-correct"></i> Протестуємо техніку перед видачею з ремонту та перевіримо всі функції.  </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- welcome_docmed_area_end -->

<!-- introducing_your_caregiver_start -->
<div class=" welcome_docmed_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="welcome_docmed_info">
                    <!--<h2>What is CDPAP?</h2>-->
                    <h3 style="color: #274299">Що ми ремонтуємо :</h3>
                    <ul>
                        <li> <i class="flaticon-correct"></i> Ремонт телефонів  </li>
                        <li> <i class="flaticon-correct"></i> Ремонт Apple техніки </li>
                        <li> <i class="flaticon-correct"></i> Ремонт планшетів  </li>
                        <li> <i class="flaticon-correct"></i> Ремонт ноутбуків  </li>
                        <li> <i class="flaticon-correct"></i> Ремонт ПК  </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- introducing_your_caregiver_end -->

<!-- offers_area_start -->
<div class="our_department_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-55">
                    <h3>Останні новини</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($blogs as $blog){
                ?>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="uploads/blog/images/<?= $blog->image ?>" alt="">
                        </div>
                        <div class="department_content">
                            <h3><?= $blog->header ?></h3>
                            <p><?= $blog->short_info ?></p>
                            <a href="<?= Url::to('blog/'.$blog->url_name) ?>" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- offers_area_end -->

<!-- testmonial_area_start -->
<div class="testmonial_area">
    <div class="testmonial_active owl-carousel">
        <div class="single-testmonial testmonial_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="testmonial_info text-center">
                            <div class="quote">
                                <i class="flaticon-straight-quotes"></i>
                            </div>
                            <br><br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-testmonial testmonial_bg_2 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="testmonial_info text-center">
                            <div class="quote">
                                <i class="flaticon-straight-quotes"></i>
                            </div>
                            <br><br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Emergency_contact start -->
<div class="Emergency_contact">
    <div class="conatiner-fluid p-0">
        <div class="row no-gutters">
            <div class="col-xl-12">
                <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                    <div class="info">
                        <h3>Додаткова інформація? </h3>
                    </div>
                    <div class="info_button">
                        <a href="tel:3476206226" class="boxed-btn3-white">Звернутися до нас</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
