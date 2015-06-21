<?php 
if( ! class_exists( 'Bears_scss_class' ) ) {
    class Bears_scss_class{
        var $scss_dir, $scss_master_file, $css_output_file, $scss_formatter, $variable;

        function __construct( $scss_dir, $scss_master_file, $css_output_file, $scss_formatter = 'scss_formatter_compressed', $variable = [] ) {
            global $bcore;
            
            $this->scss = new scssc();
            $this->scss_dir = $scss_dir;
            $this->scss_master_file = $scss_master_file;
            $this->css_output_file = $css_output_file;
            $this->scss_formatter = $scss_formatter;
            $this->variable = $variable;
            
            if( WP_DEBUG == true ) {
                $this->put_css();
                return;
            }
            
            /* hook redux after save */
            add_action ( 'redux/options/'. $bcore->opt_name .'/saved', array( &$this, 'bears_save_config_file' ) );  
        }
        
        /*
        bears_save_config_file
        */
        function bears_save_config_file() {
            $this->put_css();
        }

        /*
        scss_variable_cache
        */
        function scss_variable_cache() {
            $serialize_var = serialize( $this->variable );
            $file = $this->scss_dir . '/scss_variable.cache';
            $the_change = false;

            if( ! is_file( $this->scss_dir . '/scss_variable.cache' ) ) {

                file_put_contents( $file, $serialize_var );
                $the_change = true;
            }else {

                $var_cache_old = file_get_contents( $file );
                if( $serialize_var != $var_cache_old ) {
                    
                    file_put_contents( $file, $serialize_var );
                    $the_change = true;
                }
            }

            return $the_change;
        }
        
        /*
        put css
        */
        function put_css() {
            $this->scss->setFormatter( $this->scss_formatter );
            $this->scss->setVariables( $this->variable );
            $this->scss->setImportPaths( $this->scss_dir );
            $css = $this->scss->compile( "@import '{$this->scss_master_file}'" );

            file_put_contents( $this->css_output_file, $css );
        }
    }
}
?>