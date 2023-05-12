<?php

function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'Page Sidebar',
            'class' => 'Page Sidebar',
            'before_title' => 'Page Sidebar',
            'after_title' => 'Page Sidebar',


        )
    );
    require get_template_directory() . '/inc/codestar-framework.php';

    // Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'davutema';

    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Tema Ayarları',
      'menu_slug'  => 'tema-ayarlari',
    ) );

    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Header Ayarları',
      'fields' => array(





          array(
            'id'        => 'headerleftbuton',
            'type'      => 'group',
            'title'     => 'Header Sol Üst',
            'fields'    => array(
                array(
                    'id'    => 'opt-name',
                    'type'  => 'text',
                    'title' => 'İsim',
                  ),


              array(
                'id'    => 'opt-color',
                'type'  => 'icon',
                'title' => 'Color',
              ),

            ),
          ),


          array(
            'id'        => 'headerrightbuton',
            'type'      => 'group',
            'title'     => 'Header sağ Üst',
            'fields'    => array(
                array(
                    'id'    => 'opt-name',
                    'type'  => 'text',
                    'title' => 'İsim',
                  ),
              array(
                'id'    => 'opt-text',
                'type'  => 'text',
                'title' => 'Link',
              ),



            ),
          ),





        array(
            'id'        => 'socialmedia',
            'type'      => 'group',
            'title'     => 'Sosyal Medya Ayarları',
            'fields'    => array(
              array(
                'id'    => 'opt-text',
                'type'  => 'text',
                'title' => 'Link',
              ),
              array(
                'id'    => 'opt-color',
                'type'  => 'icon',
                'title' => 'Color',
              ),

            ),
          ),










      )
    ) );



    //
    // Create a section
    CSF::createSection( $prefix, array(
      'title'  => 'Header Logo Ayarı',
      'fields' => array(

        array(
            'id'    => 'logo',
            'type'  => 'upload',
            'title' => 'Logo',
          ),
          array(
              'id'    => 'logo-url',
              'type'  => 'text',
              'title' => 'Logo Url',
          ),

      )
    ) );

    //
    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Header Sağ Buton ',
        'fields' => array(


            array(
                'id'    => 'butonisim',
                'type'  => 'text',
                'title' => 'Buton İsmi',
            ),

            array(
                'id'    => 'butonlink',
                'type'  => 'text',
                'title' => 'Buton Linki',
            ),


            array(
                'id'         => 'butondurum',
                'type'       => 'button_set',
                'title'      => 'Buton Durumu',
                'options'    => array(
                    'enabled'  => 'Enabled',
                    'disabled' => 'Disabled',
                ),
                'default'    => 'enabled'
            ),


        )
    ) );


    CSF::createSection( $prefix, array(
        'title'  => 'Footer Ayarı',
        'fields' => array(


            array(
                'id'    => 'logo-footer',
                'type'  => 'upload',
                'title' => 'Logo Footer',
            ),



            array(
                'id'    => 'footermetin',
                'type'  => 'textarea',
                'title' => 'Foter Metin Alanı',
            ),



            array(
                'id'    => 'footermenu-baslik',
                'type'  => 'text',
                'title' => 'Foter Menü Başlığı',
            ),

            array(
                'id'    => 'footeriletisim-baslik',
                'type'  => 'text',
                'title' => 'Foter İletişim Menü Başlığı',
            ),

            array(
                'id'    => 'footeriletisim-adres-baslik',
                'type'  => 'text',
                'title' => 'İletişim Adres Başlığı',
            ),
            array(
                'id'    => 'footeriletisim-adres',
                'type'  => 'text',
                'title' => 'İletişim Adresi',
            ),

            array(
                'id'    => 'footeriletisim-mail-baslik',
                'type'  => 'text',
                'title' => 'İletişim Mail Başlığı',
            ),
            array(
                'id'    => 'footeriletisim-mail',
                'type'  => 'text',
                'title' => 'İletişim Mail',
            ),

            array(
                'id'    => 'footeriletisim-tel-baslik',
                'type'  => 'text',
                'title' => 'İletişim Telefon Başlığı',
            ),

            array(
                'id'    => 'footeriletisim-tel',
                'type'  => 'text',
                'title' => 'İletişim Telefon',
            ),





            array(
                'id'    => 'footersonyazi-baslik',
                'type'  => 'text',
                'title' => 'Foter Son Yazılar Başlığı',
            ),

            array(
                'id'    => 'footersahiplikmetni',
                'type'  => 'text',
                'title' => 'Foter Sahiplik Yazısı',
            ),
        )


    ) );



    //
    // Create a section
    CSF::createSection( $prefix, array(
        'title'  => 'Blog Ayarı',
        'fields' => array(

            array(
                'id'    => 'blog-slider',
                'type'  => 'upload',
                'title' => 'Blog Slider'.' <br> <label style="color:red; font-size: 11px">Önerilen Boyut : 2440x1580 <label>',
            ),

            array(
                'id'    => 'blog-slider-yazi',
                'type'  => 'text',
                'title' => 'Blog Slider Yazı',
            ),

        )
    ) );

}








































CSF::createSection( $prefix, array(
    'title'  => 'Easy Content',
    'fields' => array(
 array(
            'id'        => 'shortcode-1',
            'type'      => 'group',
            'title'     => 'Short Code = [shortcode-1]',
            'fields'    => array(

                array(
                    'id'    => 'shortcodeisim',
                    'type'  => 'text',
                    'title' => 'ShortCode İsmi',
                ),


                array(
                    'id'    => 'baslikisim',
                    'type'  => 'text',
                    'title' => 'Başlık',
                ),

                array(
                    'id'    => 'idisim',
                    'type'  => 'text',
                    'title' => 'Başlık İd',
                ),



            ),
        ),


    )
) );

function subscribe_link(){

    $shortkodlar = (get_option('davutema')['shortcode-1']);
    foreach ($shortkodlar as $shortkod) {
?>  <p><?php echo $shortkod["baslikisim"]; ?></p> <?php
    }
}
add_shortcode('shortcode-1', 'subscribe_link');













CSF::createSection( $prefix, array(
    'title'  => 'Easy Content2',
    'fields' => array(



        array(
            'id'    => 'shortcodeisimm',
            'type'  => 'text',
            'title' => 'ShortCode İsmi',
        ),

        array(
            'id'    => 'baslikisimm',
            'type'  => 'text',
            'title' => 'Başlık',
        ),

        array(
            'id'    => 'idisimm',
            'type'  => 'text',
            'title' => 'Başlık İd',
        ),



    ),



) );

function subscribe_linkK(){
    ?> <p><?php echo get_option( 'davutema' )['baslikisimm']; ?></p><?php

}
add_shortcode(get_option( 'davutema' )['shortcodeisimm'], 'subscribe_linkK');





?>