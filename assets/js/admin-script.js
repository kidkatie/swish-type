(function($) {
    "use strict";
    /**-------------------------------------------------------------------------------------------------------------------------
     * Show or Hide post format panel
     */
    function alitheme_admin_post_format() {

        var alitheme_hewo_gallery_post      = $('#alitheme_hewo_metaboxes_gallery_options');
        var alitheme_hewo_video_post        = $('#alitheme_hewo_metaboxes_video_options');
        var alitheme_hewo_audio_post        = $('#alitheme_hewo_metaboxes_audio_options');
        var alitheme_hewo_quote_post        = $('#alitheme_hewo_metaboxes_quote_options');

        //For Classic Editor
        var select = $('#post-formats-select').find('[type="radio"]');
        select.live('change', function() {
            var val = $(this).val();
            alitheme_hewo_gallery_post.hide();
            alitheme_hewo_video_post.hide();
            alitheme_hewo_audio_post.hide();
            alitheme_hewo_quote_post.hide();

            if ('gallery' == val) {
                alitheme_hewo_gallery_post.show();
            } else if ('video' == val) {
                alitheme_hewo_video_post.show();
            } else if ('audio' == val) {
                alitheme_hewo_audio_post.show();
            }else if ('quote' == val) {
                alitheme_hewo_quote_post.show();
            }
        }).filter(':checked').trigger('change');

        //For Gunteberg Editor
        setTimeout(function () {
            if ($('#editor').length > 0) {

                var alitheme_hewo_gallery_post = $('#alitheme_hewo_metaboxes_gallery_options');
                var alitheme_hewo_video_post = $('#alitheme_hewo_metaboxes_video_options');
                var alitheme_hewo_audio_post = $('#alitheme_hewo_metaboxes_audio_options');
                var alitheme_hewo_quote_post = $('#alitheme_hewo_metaboxes_quote_options');

                var postFormat = wp.data.select('core/editor').getEditedPostAttribute('format');
                if (postFormat) {
                    if ('gallery' == postFormat) {
                        alitheme_hewo_gallery_post.show();
                    } else if ('video' == postFormat) {
                        alitheme_hewo_video_post.show();
                    } else if ('audio' == postFormat) {
                        alitheme_hewo_audio_post.show();
                    } else if ('quote' == postFormat) {
                        alitheme_hewo_quote_post.show();
                    }
                }

                $(document).on('change', '.editor-post-format select', function () {
                    var val = $(this).val();
                    alitheme_hewo_gallery_post.hide();
                    alitheme_hewo_video_post.hide();
                    alitheme_hewo_audio_post.hide();
                    alitheme_hewo_quote_post.hide();

                    if ('gallery' == val) {
                        alitheme_hewo_gallery_post.show();
                        $('.edit-post-layout__content').animate({
                            scrollTop: alitheme_hewo_gallery_post.offset().top
                        }, 300);
                    } else if ('video' == val) {
                        alitheme_hewo_video_post.show();
                        $('.edit-post-layout__content').animate({
                            scrollTop: alitheme_hewo_video_post.offset().top
                        }, 300);
                    } else if ('audio' == val) {
                        alitheme_hewo_audio_post.show();
                        $('.edit-post-layout__content').animate({
                            scrollTop: alitheme_hewo_audio_post.offset().top
                        }, 300);
                    }
                    else if ('quote' == val) {
                        alitheme_hewo_quote_post.show();
                        $('.edit-post-layout__content').animate({
                            scrollTop: alitheme_hewo_quote_post.offset().top
                        }, 300);
                    }
                });

            }
        }, 50);
    }

    $(document).ready(function() {
        alitheme_admin_post_format();
    });

})(jQuery);