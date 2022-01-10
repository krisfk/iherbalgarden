<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>

<div class="bg-wrapper position-relative">





    <div class="container mt-0">

        <?php// echo get_template_part('about-menu');;?>

        <div class="row justify-content-center">

            <!-- <div class="col-3">

                <?php //echo get_template_part('games-menu');?>

            </div> -->

            <div class="col-lg-7 col-md-12 col-sm-12 col-12  ">

                <h2 class="text-center">常見問題
                </h2>

                <div class="mt-3">
                    <?php echo get_the_content();?>
                    <!-- 

                    <h2>已參與計劃的學校
                    </h2>
                    <div class="mb-4">
                        <table class="faq-table">
                            <tr class="question-row">
                                <td class="pe-2">Q:</td>
                                <td class="pb-3">我無法登入網站，該怎辦？</td>
                            </tr>
                            <tr>
                                <td class="pe-2">A:</td>
                                <td>如屬已參與的學校，可以點選 「百草園」內的 「學校登入」，以學校的帳號及密碼登入，「登入名稱」及「密碼」可向老師查詢。 </td>
                            </tr>
                        </table>
                    </div>

                    <div class="mb-4">
                        <table class="faq-table">
                            <tr class="question-row">
                                <td class="pe-2">Q:</td>
                                <td class="pb-3">某些版面無法瀏覽或收看學習影片後，無法點擊「已觀看」按鈕，該怎辦？
                                </td>
                            </tr>
                            <tr>
                                <td class="pe-2">A:</td>
                                <td>請檢查瀏覽器版本，建議使用最新版本的微軟 Edge、Mozilla Firefox、Safari 及 Google
                                    Chrome以達至最佳瀏覽效果； 如有任何疑難，歡迎於「訊息箱」中留言，將會有專人於「訊息箱」或以電郵方式回覆。
                                </td>
                            </tr>
                        </table>
                    </div>


                    <div class="mb-4">
                        <table class="faq-table">
                            <tr class="question-row">
                                <td class="pe-2">Q:</td>
                                <td class="pb-3">為何我無法上載報告？

                                </td>
                            </tr>
                            <tr>
                                <td class="pe-2">A:</td>
                                <td>請檢查報告格式，本網站接受以jpg/ pdf/
                                    mp4格式的報告（檔案大小上限為20MB）；如有任何疑難，歡迎於「訊息箱」中留言，將會有專人於「訊息箱」或以電郵方式回覆。 </td>
                            </tr>
                        </table>
                    </div>

                    <h2 class="deep-blue">其他查詢
                    </h2>

                    <div class="mb-4">
                        <table class="faq-table">
                            <tr class="question-row deep-blue">
                                <td class="pe-2">Q:</td>
                                <td class="pb-3">我很喜歡學生製作的報告，為何我不能點擊「like」按鈕？


                                </td>
                            </tr>
                            <tr>
                                <td class="pe-2">A:</td>
                                <td>一般情況，當閱畢學生的報告後，可以點擊「like」按鈕，已示鼓勵學生們的努力成果。不用重覆點擊每個報告的「like」按鈕。 如無法點擊「like」，可能是閣下已經點擊了，或請檢查瀏覽器版本，
                                    建議使用最新版本的微軟 Edge、Mozilla Firefox、Safari 及 Google
                                    Chrome以達至最佳瀏覽效果；如有任何疑難，歡迎於下方「聯絡我們」中留言，將會有專人以電郵方式回覆。 </td>
                            </tr>
                        </table>
                    </div>


                    <div class="mb-4">
                        <table class="faq-table">
                            <tr class="question-row deep-blue">
                                <td class="pe-2">Q:</td>
                                <td class="pb-3">海外藥園有虛擬導賞嗎？



                                </td>
                            </tr>
                            <tr>
                                <td class="pe-2">A:</td>
                                <td>為了讓學生們增廣見聞，本會特別安排拍攝海外藥園虛擬導賞影片，以活學、互動的模式，啟發學生們學習中醫藥文化。</td>
                            </tr>
                        </table>
                    </div>

                    <div class="mb-4">
                        <table class="faq-table">
                            <tr class="question-row  deep-blue">
                                <td class="pe-2">Q:</td>
                                <td class="pb-3">未能開啟趣味遊戲連結，該怎辦？




                                </td>
                            </tr>
                            <tr>
                                <td class="pe-2">A:</td>
                                <td>請檢查瀏覽器版本，建議使用最新版本的微軟 Edge、Mozilla Firefox、Safari 及 Google
                                    Chrome以達至最佳瀏覽效果；如有任何疑難，歡迎於「下方「聯絡我們」中留言，將會有專人以電郵方式回覆。 </td>
                            </tr>
                        </table>
                    </div>
 -->
                    <!--  -->
                    <h2 class="text-center mt-5">聯絡我們
                    </h2>
                    <?php
                    echo do_shortcode('[contact-form-7 id="312" title="Contact form 1"]');
                    ?>



                </div>







            </div>
        </div>
    </div>

    <style type="text/css">
    form {
        width: max-content;
        margin: 0 auto;
    }

    form label {
        width: 100%;
    }
    </style>
    <script type="text/javascript">
    $(function() {

        $('.faq').addClass('active');


    })
    </script> <?php



get_footer();