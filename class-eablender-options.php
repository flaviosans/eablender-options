<?php

class EABlender_Options
{
    private $option_group = 'eablender_group';
    private $option_name = 'eablender_name';
    private $options;
    private $setting_admin_slug;
    private static $eablender_option;

    public $api;
    public $s3_image;
    public $s3_image_resized;
    public $url_user;


    private function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_plugin_page' ) );
        add_action( 'admin_init', array( $this, 'page_init' ) );

        $this->send_object();
    }

    public static function get_instance(){
        if(is_null(self::$eablender_option)){
            self::$eablender_option = new EABlender_Options();
        }
        return self::$eablender_option;
    }

    public function send_object() {
        $this->options = get_option($this->option_name);
        $this->api = $this->options['api'];
        $this->s3_image = $this->options['s3_image'];
        $this->s3_image_resized = $this->options['s3_image_resized'];
        $this->url_user = $this->options['urlusuario'];
    }
   

    public function add_plugin_page()
    {
        add_options_page(
            'Banco de Dados', 
            'Banco de Dados', 
            'manage_options', 
            $this->setting_admin_slug = 'Database_menu', 
            array( $this, 'create_database_page' )
        );

        return $this->setting_admin_slug;
    }

    public function create_database_page()
    {
        ?>
        <div class="wrap">
            <h1>Alterar Base de Dados</h1>
            <form method="post" action="options.php">
            <?php
                $this->openForm();

                // This prints out all hidden setting fields
                settings_fields( $this->option_group );
                do_settings_sections( $this->setting_admin_slug );
                submit_button();
            ?>
            </form>
        </div>
        <?php
    }

    /**
     * Register and add settings
     */
    public function page_init()
    {        
        register_setting(
            $this->option_group, // Option group
            $this->option_name, // Option name
            array( $this, 'sanitize' ) // Sanitize
        );

        add_settings_section(
            'setting_section_id', // ID da seção
            '', // Title
            array(), // Callback
            $this->setting_admin_slug // Page
        );      

        add_settings_field(
            's3_image', 
            'Imagem S3', 
            $this->setting_admin_slug, 
            'setting_section_id'
        );

        add_settings_field(
            's3_image_resized', 
            'Imagem S3 Resized', 
            $this->setting_admin_slug, 
            'setting_section_id'
        );
        
        add_settings_field(
            'api', 
            'Api', 
            $this->setting_admin_slug, 
            'setting_section_id'
        );

        add_settings_field(
            'urlusuario', 
            'Url Usuário', 
            $this->setting_admin_slug, 
            'setting_section_id'
        );
    }

    /**
     * Sanitize each setting field as needed
     *
     * @param array $input Contains all settings fields as array keys
     */
    public function sanitize( $value )
    {
        $new_input = array();

            if( isset( $value['s3_image'] ) )
            $new_input['s3_image'] = sanitize_text_field( $value['s3_image'] );

            if( isset( $value['s3_image_resized'] ) )
            $new_input['s3_image_resized'] = sanitize_text_field( $value['s3_image_resized'] );

            if( isset( $value['api'] ) )
            $new_input['api'] = sanitize_text_field( $value['api'] );

            if( isset( $value['urlusuario'] ) )
            $new_input['urlusuario'] = sanitize_text_field( $value['urlusuario'] );

        return $new_input;
    }

    public function openForm() {
        if ($this->setting_admin_slug == 'Database_menu') {
            include ("eablender-options.php");
        }
    }

}