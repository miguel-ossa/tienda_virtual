<?php
namespace MailPoet\Config\PopulatorData\Templates;

if (!defined('ABSPATH')) exit;

class DogFood {

  private $template_image_url;
  private $social_icon_url;

  function __construct($assets_url) {
    $this->template_image_url = 'https://ps.w.org/mailpoet/assets/newsletter-templates/dog-food';
    $this->social_icon_url = $assets_url . '/img/newsletter_editor/social-icons';
  }

  function get() {
    return array(
      'name' => __("Dog Food", 'mailpoet'),
      'categories' => json_encode(array('woocommerce', 'all')),
      'readonly' => 1,
      'thumbnail' => $this->getThumbnail(),
      'body' => json_encode($this->getBody()),
    );
  }

  private function getThumbnail() {
    return $this->template_image_url . '/dog-food.jpg';
  }

  private function getBody() {
    return array (
      'content' =>
        array (
          'type' => 'container',
          'orientation' => 'vertical',
          'image' =>
            array (
              'src' => NULL,
              'display' => 'scale',
            ),
          'styles' =>
            array (
              'block' =>
                array (
                  'backgroundColor' => 'transparent',
                ),
            ),
          'blocks' =>
            array (
              0 =>
                array (
                  'type' => 'container',
                  'orientation' => 'horizontal',
                  'image' =>
                    array (
                      'src' => NULL,
                      'display' => 'scale',
                    ),
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => 'transparent',
                        ),
                    ),
                  'blocks' =>
                    array (
                      0 =>
                        array (
                          'type' => 'container',
                          'orientation' => 'vertical',
                          'image' =>
                            array (
                              'src' => NULL,
                              'display' => 'scale',
                            ),
                          'styles' =>
                            array (
                              'block' =>
                                array (
                                  'backgroundColor' => 'transparent',
                                ),
                            ),
                          'blocks' =>
                            array (
                              0 =>
                                array (
                                  'type' => 'spacer',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => 'transparent',
                                          'height' => '20px',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
              1 =>
                array (
                  'type' => 'container',
                  'orientation' => 'horizontal',
                  'image' =>
                    array (
                      'src' => NULL,
                      'display' => 'scale',
                    ),
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => 'transparent',
                        ),
                    ),
                  'blocks' =>
                    array (
                      0 =>
                        array (
                          'type' => 'container',
                          'orientation' => 'vertical',
                          'image' =>
                            array (
                              'src' => NULL,
                              'display' => 'scale',
                            ),
                          'styles' =>
                            array (
                              'block' =>
                                array (
                                  'backgroundColor' => 'transparent',
                                ),
                            ),
                          'blocks' =>
                            array (
                              0 =>
                                array (
                                  'type' => 'spacer',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => 'transparent',
                                          'height' => '20px',
                                        ),
                                    ),
                                ),
                              1 =>
                                array (
                                  'type' => 'image',
                                  'link' => '',
                                  'src' => $this->template_image_url . '/Dog-Logo.png',
                                  'alt' => 'Dog-Logo',
                                  'fullWidth' => false,
                                  'width' => '42px',
                                  'height' => '91px',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'textAlign' => 'left',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                      1 =>
                        array (
                          'type' => 'container',
                          'orientation' => 'vertical',
                          'image' =>
                            array (
                              'src' => NULL,
                              'display' => 'scale',
                            ),
                          'styles' =>
                            array (
                              'block' =>
                                array (
                                  'backgroundColor' => 'transparent',
                                ),
                            ),
                          'blocks' =>
                            array (
                              0 =>
                                array (
                                  'type' => 'spacer',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => 'transparent',
                                          'height' => '31px',
                                        ),
                                    ),
                                ),
                              1 =>
                                array (
                                  'type' => 'social',
                                  'iconSet' => 'full-symbol-black',
                                  'icons' =>
                                    array (
                                      0 =>
                                        array (
                                          'type' => 'socialIcon',
                                          'iconType' => 'facebook',
                                          'link' => 'http://www.facebook.com',
                                          'image' => $this->social_icon_url . '/07-full-symbol-black/Facebook.png?mailpoet_version=3.7.3',
                                          'height' => '32px',
                                          'width' => '32px',
                                          'text' => 'Facebook',
                                        ),
                                      1 =>
                                        array (
                                          'type' => 'socialIcon',
                                          'iconType' => 'twitter',
                                          'link' => 'http://www.twitter.com',
                                          'image' => $this->social_icon_url . '/07-full-symbol-black/Twitter.png?mailpoet_version=3.7.3',
                                          'height' => '32px',
                                          'width' => '32px',
                                          'text' => 'Twitter',
                                        ),
                                      2 =>
                                        array (
                                          'type' => 'socialIcon',
                                          'iconType' => 'instagram',
                                          'link' => 'http://instagram.com',
                                          'image' => $this->social_icon_url . '/07-full-symbol-black/Instagram.png?mailpoet_version=3.7.3',
                                          'height' => '32px',
                                          'width' => '32px',
                                          'text' => 'Instagram',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
              2 =>
                array (
                  'type' => 'container',
                  'orientation' => 'horizontal',
                  'image' =>
                    array (
                      'src' => NULL,
                      'display' => 'scale',
                    ),
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => 'transparent',
                        ),
                    ),
                  'blocks' =>
                    array (
                      0 =>
                        array (
                          'type' => 'container',
                          'orientation' => 'vertical',
                          'image' =>
                            array (
                              'src' => NULL,
                              'display' => 'scale',
                            ),
                          'styles' =>
                            array (
                              'block' =>
                                array (
                                  'backgroundColor' => 'transparent',
                                ),
                            ),
                          'blocks' =>
                            array (
                              0 =>
                                array (
                                  'type' => 'spacer',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => 'transparent',
                                          'height' => '25px',
                                        ),
                                    ),
                                ),
                              1 =>
                                array (
                                  'type' => 'text',
                                  'text' => '<h1 style="line-height: 1.2em;"><strong>Thanks for buying your dog food from us</strong></h1>',
                                ),
                            ),
                        ),
                    ),
                ),
              3 =>
                array (
                  'type' => 'container',
                  'orientation' => 'horizontal',
                  'image' =>
                    array (
                      'src' => NULL,
                      'display' => 'scale',
                    ),
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => '#ffffff',
                        ),
                    ),
                  'blocks' =>
                    array (
                      0 =>
                        array (
                          'type' => 'container',
                          'orientation' => 'vertical',
                          'image' =>
                            array (
                              'src' => NULL,
                              'display' => 'scale',
                            ),
                          'styles' =>
                            array (
                              'block' =>
                                array (
                                  'backgroundColor' => 'transparent',
                                ),
                            ),
                          'blocks' =>
                            array (
                              0 =>
                                array (
                                  'type' => 'spacer',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => 'transparent',
                                          'height' => '20px',
                                        ),
                                    ),
                                ),
                              1 =>
                                array (
                                  'type' => 'image',
                                  'link' => '',
                                  'src' => $this->template_image_url . '/Dog-Header-1024x409.jpg',
                                  'alt' => 'Dog-Header',
                                  'fullWidth' => true,
                                  'width' => '1280px',
                                  'height' => '511px',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'textAlign' => 'center',
                                        ),
                                    ),
                                ),
                              2 =>
                                array (
                                  'type' => 'spacer',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => 'transparent',
                                          'height' => '50px',
                                        ),
                                    ),
                                ),
                              3 =>
                                array (
                                  'type' => 'text',
                                  'text' => '<h2 style="text-align: center;"><strong>Here\'s some other pawsome things to try...&nbsp;</strong></h2>',
                                ),
                              4 =>
                                array (
                                  'type' => 'spacer',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => 'transparent',
                                          'height' => '20px',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
              4 =>
                array (
                  'type' => 'container',
                  'orientation' => 'horizontal',
                  'image' =>
                    array (
                      'src' => NULL,
                      'display' => 'scale',
                    ),
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => 'transparent',
                        ),
                    ),
                  'blocks' =>
                    array (
                      0 =>
                        array (
                          'type' => 'container',
                          'orientation' => 'vertical',
                          'image' =>
                            array (
                              'src' => NULL,
                              'display' => 'scale',
                            ),
                          'styles' =>
                            array (
                              'block' =>
                                array (
                                  'backgroundColor' => 'transparent',
                                ),
                            ),
                          'blocks' =>
                            array (
                              0 =>
                                array (
                                  'type' => 'image',
                                  'link' => '',
                                  'src' => $this->template_image_url . '/Dog-Product-1.jpg',
                                  'alt' => 'Dog-Product-1',
                                  'fullWidth' => false,
                                  'width' => '500px',
                                  'height' => '500px',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'textAlign' => 'center',
                                        ),
                                    ),
                                ),
                              1 =>
                                array (
                                  'type' => 'text',
                                  'text' => '<h3><strong>Dog Jumper</strong></h3>
<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a elementum ex.</span></p>
<p><span><strong></strong></span></p>
<p><em><strong>$19.99</strong></em></p>',
                                ),
                              2 =>
                                array (
                                  'type' => 'button',
                                  'text' => 'Check it out',
                                  'url' => '',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => '#f6f6f6',
                                          'borderColor' => '#000000',
                                          'borderWidth' => '3px',
                                          'borderRadius' => '40px',
                                          'borderStyle' => 'solid',
                                          'width' => '113px',
                                          'lineHeight' => '28px',
                                          'fontColor' => '#000000',
                                          'fontFamily' => 'Arial',
                                          'fontSize' => '14px',
                                          'fontWeight' => 'bold',
                                          'textAlign' => 'left',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                      1 =>
                        array (
                          'type' => 'container',
                          'orientation' => 'vertical',
                          'image' =>
                            array (
                              'src' => NULL,
                              'display' => 'scale',
                            ),
                          'styles' =>
                            array (
                              'block' =>
                                array (
                                  'backgroundColor' => 'transparent',
                                ),
                            ),
                          'blocks' =>
                            array (
                              0 =>
                                array (
                                  'type' => 'image',
                                  'link' => '',
                                  'src' => $this->template_image_url . '/Dog-Product-2.jpg',
                                  'alt' => 'Dog-Product-2',
                                  'fullWidth' => false,
                                  'width' => '500px',
                                  'height' => '500px',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'textAlign' => 'center',
                                        ),
                                    ),
                                ),
                              1 =>
                                array (
                                  'type' => 'text',
                                  'text' => '<h3><strong>Dog&nbsp;Socks</strong></h3>
<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a elementum ex.</span></p>
<p><span></span></p>
<p><span><em><strong>$19.99</strong></em></span></p>',
                                ),
                              2 =>
                                array (
                                  'type' => 'button',
                                  'text' => 'Check it out',
                                  'url' => '',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => '#f6f6f6',
                                          'borderColor' => '#000000',
                                          'borderWidth' => '3px',
                                          'borderRadius' => '40px',
                                          'borderStyle' => 'solid',
                                          'width' => '113px',
                                          'lineHeight' => '28px',
                                          'fontColor' => '#000000',
                                          'fontFamily' => 'Arial',
                                          'fontSize' => '14px',
                                          'fontWeight' => 'bold',
                                          'textAlign' => 'left',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                      2 =>
                        array (
                          'type' => 'container',
                          'orientation' => 'vertical',
                          'image' =>
                            array (
                              'src' => NULL,
                              'display' => 'scale',
                            ),
                          'styles' =>
                            array (
                              'block' =>
                                array (
                                  'backgroundColor' => 'transparent',
                                ),
                            ),
                          'blocks' =>
                            array (
                              0 =>
                                array (
                                  'type' => 'image',
                                  'link' => '',
                                  'src' => $this->template_image_url . '/Dog-Product-3.jpg',
                                  'alt' => 'Dog-Product-3',
                                  'fullWidth' => false,
                                  'width' => '500px',
                                  'height' => '500px',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'textAlign' => 'center',
                                        ),
                                    ),
                                ),
                              1 =>
                                array (
                                  'type' => 'text',
                                  'text' => '<h3><strong>Glow Collar</strong></h3>
<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a elementum ex.</span></p>
<p><em></em></p>
<p><em><strong>$19.99</strong></em></p>',
                                ),
                              2 =>
                                array (
                                  'type' => 'button',
                                  'text' => 'Check it out',
                                  'url' => '',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => '#f6f6f6',
                                          'borderColor' => '#000000',
                                          'borderWidth' => '3px',
                                          'borderRadius' => '40px',
                                          'borderStyle' => 'solid',
                                          'width' => '113px',
                                          'lineHeight' => '28px',
                                          'fontColor' => '#000000',
                                          'fontFamily' => 'Arial',
                                          'fontSize' => '14px',
                                          'fontWeight' => 'bold',
                                          'textAlign' => 'left',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
              5 =>
                array (
                  'type' => 'container',
                  'orientation' => 'horizontal',
                  'image' =>
                    array (
                      'src' => NULL,
                      'display' => 'scale',
                    ),
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => '#000000',
                        ),
                    ),
                  'blocks' =>
                    array (
                      0 =>
                        array (
                          'type' => 'container',
                          'orientation' => 'vertical',
                          'image' =>
                            array (
                              'src' => NULL,
                              'display' => 'scale',
                            ),
                          'styles' =>
                            array (
                              'block' =>
                                array (
                                  'backgroundColor' => 'transparent',
                                ),
                            ),
                          'blocks' =>
                            array (
                              0 =>
                                array (
                                  'type' => 'spacer',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => '#ffffff',
                                          'height' => '45px',
                                        ),
                                    ),
                                ),
                              1 =>
                                array (
                                  'type' => 'spacer',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => 'transparent',
                                          'height' => '35px',
                                        ),
                                    ),
                                ),
                              2 =>
                                array (
                                  'type' => 'text',
                                  'text' => '<h3><strong></strong><span style="color: #ffffff;">Our Guarantee</span></h3>
<p><span style="color: #ffffff;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam a elementum ex. Aliquam mollis metus ac nisl luctus pulvinar. Donec tincidunt pharetra sem, nec eleifend augue. Morbi id nunc commodo, tempor erat et, pretium neque. Vivamus ante sapien, consequat vitae ante quis, facilisis pellentesque mi. Praesent at scelerisque leo. Donec elementum mi consequat, ultrices lorem nec, vestibulum arcu. Aenean id libero vitae felis consequat maximus</span></p>
<p><span style="color: #ffffff;"><em></em></span></p>',
                                ),
                              3 =>
                                array (
                                  'type' => 'spacer',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => 'transparent',
                                          'height' => '20px',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
              6 =>
                array (
                  'type' => 'container',
                  'orientation' => 'horizontal',
                  'image' =>
                    array (
                      'src' => NULL,
                      'display' => 'scale',
                    ),
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => '#d4d4d4',
                        ),
                    ),
                  'blocks' =>
                    array (
                      0 =>
                        array (
                          'type' => 'container',
                          'orientation' => 'vertical',
                          'image' =>
                            array (
                              'src' => NULL,
                              'display' => 'scale',
                            ),
                          'styles' =>
                            array (
                              'block' =>
                                array (
                                  'backgroundColor' => 'transparent',
                                ),
                            ),
                          'blocks' =>
                            array (
                              0 =>
                                array (
                                  'type' => 'spacer',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => '#d4d4d4',
                                          'height' => '20px',
                                        ),
                                    ),
                                ),
                              1 =>
                                array (
                                  'type' => 'footer',
                                  'text' => '<p><strong><em><span style="color: #000000;"><a href="[link:subscription_unsubscribe_url]" style="color: #000000;">Unsubscribe</a> | <a href="[link:subscription_manage_url]" style="color: #000000;">Manage your subscription</a></span></em></strong><br />Add your postal address here!</p>',
                                  'styles' =>
                                    array (
                                      'block' =>
                                        array (
                                          'backgroundColor' => 'transparent',
                                        ),
                                      'text' =>
                                        array (
                                          'fontColor' => '#222222',
                                          'fontFamily' => 'Arial',
                                          'fontSize' => '12px',
                                          'textAlign' => 'center',
                                        ),
                                      'link' =>
                                        array (
                                          'fontColor' => '#6cb7d4',
                                          'textDecoration' => 'none',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
      'globalStyles' =>
        array (
          'text' =>
            array (
              'fontColor' => '#000000',
              'fontFamily' => 'Arial',
              'fontSize' => '12px',
            ),
          'h1' =>
            array (
              'fontColor' => '#111111',
              'fontFamily' => 'Arial',
              'fontSize' => '40px',
            ),
          'h2' =>
            array (
              'fontColor' => '#222222',
              'fontFamily' => 'Arial',
              'fontSize' => '24px',
            ),
          'h3' =>
            array (
              'fontColor' => '#333333',
              'fontFamily' => 'Arial',
              'fontSize' => '18px',
            ),
          'link' =>
            array (
              'fontColor' => '#21759B',
              'textDecoration' => 'underline',
            ),
          'wrapper' =>
            array (
              'backgroundColor' => '#ffffff',
            ),
          'body' =>
            array (
              'backgroundColor' => '#d4d4d4',
            ),
        ),
      'blockDefaults' =>
        array (
          'automatedLatestContent' =>
            array (
              'amount' => '5',
              'contentType' => 'post',
              'inclusionType' => 'include',
              'displayType' => 'excerpt',
              'titleFormat' => 'h1',
              'titleAlignment' => 'left',
              'titleIsLink' => false,
              'imageFullWidth' => false,
              'featuredImagePosition' => 'belowTitle',
              'showAuthor' => 'no',
              'authorPrecededBy' => 'Author:',
              'showCategories' => 'no',
              'categoriesPrecededBy' => 'Categories:',
              'readMoreType' => 'button',
              'readMoreText' => 'Read more',
              'readMoreButton' =>
                array (
                  'text' => 'Read more',
                  'url' => '[postLink]',
                  'context' => 'automatedLatestContent.readMoreButton',
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => '#2ea1cd',
                          'borderColor' => '#0074a2',
                          'borderWidth' => '1px',
                          'borderRadius' => '5px',
                          'borderStyle' => 'solid',
                          'width' => '180px',
                          'lineHeight' => '40px',
                          'fontColor' => '#ffffff',
                          'fontFamily' => 'Verdana',
                          'fontSize' => '18px',
                          'fontWeight' => 'normal',
                          'textAlign' => 'center',
                        ),
                    ),
                ),
              'sortBy' => 'newest',
              'showDivider' => true,
              'divider' =>
                array (
                  'context' => 'automatedLatestContent.divider',
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => 'transparent',
                          'padding' => '13px',
                          'borderStyle' => 'solid',
                          'borderWidth' => '3px',
                          'borderColor' => '#aaaaaa',
                        ),
                    ),
                ),
              'backgroundColor' => '#ffffff',
              'backgroundColorAlternate' => '#eeeeee',
            ),
          'automatedLatestContentLayout' =>
            array (
              'amount' => '5',
              'withLayout' => true,
              'contentType' => 'post',
              'inclusionType' => 'include',
              'displayType' => 'excerpt',
              'titleFormat' => 'h1',
              'titleAlignment' => 'left',
              'titleIsLink' => false,
              'imageFullWidth' => false,
              'featuredImagePosition' => 'alternate',
              'showAuthor' => 'no',
              'authorPrecededBy' => 'Author:',
              'showCategories' => 'no',
              'categoriesPrecededBy' => 'Categories:',
              'readMoreType' => 'button',
              'readMoreText' => 'Read more',
              'readMoreButton' =>
                array (
                  'text' => 'Read more',
                  'url' => '[postLink]',
                  'context' => 'automatedLatestContentLayout.readMoreButton',
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => '#2ea1cd',
                          'borderColor' => '#0074a2',
                          'borderWidth' => '1px',
                          'borderRadius' => '5px',
                          'borderStyle' => 'solid',
                          'width' => '180px',
                          'lineHeight' => '40px',
                          'fontColor' => '#ffffff',
                          'fontFamily' => 'Verdana',
                          'fontSize' => '18px',
                          'fontWeight' => 'normal',
                          'textAlign' => 'center',
                        ),
                    ),
                ),
              'sortBy' => 'newest',
              'showDivider' => true,
              'divider' =>
                array (
                  'context' => 'automatedLatestContentLayout.divider',
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => 'transparent',
                          'padding' => '13px',
                          'borderStyle' => 'solid',
                          'borderWidth' => '3px',
                          'borderColor' => '#aaaaaa',
                        ),
                    ),
                ),
              'backgroundColor' => '#ffffff',
              'backgroundColorAlternate' => '#eeeeee',
            ),
          'button' =>
            array (
              'text' => 'Check it out',
              'url' => '',
              'styles' =>
                array (
                  'block' =>
                    array (
                      'backgroundColor' => '#f6f6f6',
                      'borderColor' => '#000000',
                      'borderWidth' => '3px',
                      'borderRadius' => '40px',
                      'borderStyle' => 'solid',
                      'width' => '113px',
                      'lineHeight' => '28px',
                      'fontColor' => '#000000',
                      'fontFamily' => 'Arial',
                      'fontSize' => '14px',
                      'fontWeight' => 'bold',
                      'textAlign' => 'left',
                    ),
                ),
              'type' => 'button',
            ),
          'divider' =>
            array (
              'styles' =>
                array (
                  'block' =>
                    array (
                      'backgroundColor' => 'transparent',
                      'padding' => '13px',
                      'borderStyle' => 'solid',
                      'borderWidth' => '3px',
                      'borderColor' => '#aaaaaa',
                    ),
                ),
            ),
          'footer' =>
            array (
              'text' => '<p><a href="[link:subscription_unsubscribe_url]">Unsubscribe</a> | <a href="[link:subscription_manage_url]">Manage subscription</a><br />Add your postal address here!</p>',
              'styles' =>
                array (
                  'block' =>
                    array (
                      'backgroundColor' => 'transparent',
                    ),
                  'text' =>
                    array (
                      'fontColor' => '#222222',
                      'fontFamily' => 'Arial',
                      'fontSize' => '12px',
                      'textAlign' => 'center',
                    ),
                  'link' =>
                    array (
                      'fontColor' => '#6cb7d4',
                      'textDecoration' => 'none',
                    ),
                ),
              'type' => 'footer',
            ),
          'posts' =>
            array (
              'amount' => '10',
              'contentType' => 'post',
              'postStatus' => 'publish',
              'inclusionType' => 'include',
              'displayType' => 'excerpt',
              'titleFormat' => 'h1',
              'titleAlignment' => 'left',
              'titleIsLink' => false,
              'imageFullWidth' => false,
              'featuredImagePosition' => 'belowTitle',
              'showAuthor' => 'no',
              'authorPrecededBy' => 'Author:',
              'showCategories' => 'no',
              'categoriesPrecededBy' => 'Categories:',
              'readMoreType' => 'link',
              'readMoreText' => 'Read more',
              'readMoreButton' =>
                array (
                  'text' => 'Read more',
                  'url' => '[postLink]',
                  'context' => 'posts.readMoreButton',
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => '#2ea1cd',
                          'borderColor' => '#0074a2',
                          'borderWidth' => '1px',
                          'borderRadius' => '5px',
                          'borderStyle' => 'solid',
                          'width' => '180px',
                          'lineHeight' => '40px',
                          'fontColor' => '#ffffff',
                          'fontFamily' => 'Verdana',
                          'fontSize' => '18px',
                          'fontWeight' => 'normal',
                          'textAlign' => 'center',
                        ),
                    ),
                ),
              'sortBy' => 'newest',
              'showDivider' => true,
              'divider' =>
                array (
                  'context' => 'posts.divider',
                  'styles' =>
                    array (
                      'block' =>
                        array (
                          'backgroundColor' => 'transparent',
                          'padding' => '13px',
                          'borderStyle' => 'solid',
                          'borderWidth' => '3px',
                          'borderColor' => '#aaaaaa',
                        ),
                    ),
                ),
              'backgroundColor' => '#ffffff',
              'backgroundColorAlternate' => '#eeeeee',
            ),
          'social' =>
            array (
              'iconSet' => 'full-symbol-black',
              'icons' =>
                array (
                  0 =>
                    array (
                      'type' => 'socialIcon',
                      'iconType' => 'facebook',
                      'link' => 'http://www.facebook.com',
                      'image' => $this->social_icon_url . '/07-full-symbol-black/Facebook.png?mailpoet_version=3.7.3',
                      'height' => '32px',
                      'width' => '32px',
                      'text' => 'Facebook',
                    ),
                  1 =>
                    array (
                      'type' => 'socialIcon',
                      'iconType' => 'twitter',
                      'link' => 'http://www.twitter.com',
                      'image' => $this->social_icon_url . '/07-full-symbol-black/Twitter.png?mailpoet_version=3.7.3',
                      'height' => '32px',
                      'width' => '32px',
                      'text' => 'Twitter',
                    ),
                  2 =>
                    array (
                      'type' => 'socialIcon',
                      'iconType' => 'instagram',
                      'link' => 'http://instagram.com',
                      'image' => $this->social_icon_url . '/07-full-symbol-black/Instagram.png?mailpoet_version=3.7.3',
                      'height' => '32px',
                      'width' => '32px',
                      'text' => 'Instagram',
                    ),
                ),
              'type' => 'social',
            ),
          'spacer' =>
            array (
              'styles' =>
                array (
                  'block' =>
                    array (
                      'backgroundColor' => '#d4d4d4',
                      'height' => '20px',
                    ),
                ),
              'type' => 'spacer',
            ),
          'header' =>
            array (
              'text' => 'Display problems?&nbsp;<a href="[link:newsletter_view_in_browser_url]">Open this email in your web browser.</a>',
              'styles' =>
                array (
                  'block' =>
                    array (
                      'backgroundColor' => 'transparent',
                    ),
                  'text' =>
                    array (
                      'fontColor' => '#222222',
                      'fontFamily' => 'Arial',
                      'fontSize' => '12px',
                      'textAlign' => 'center',
                    ),
                  'link' =>
                    array (
                      'fontColor' => '#6cb7d4',
                      'textDecoration' => 'underline',
                    ),
                ),
            ),
        ),
    );
  }

}
