<?php $plugin_path = plugin_dir_url( __FILE__ );


echo '<h3>Imagem S3</h3>';
    printf(
        '<input type="text" id="s3_image" name="'.$this->option_name.'[s3_image]" value="%s" style="width: 450px;" placeholder="https://aes-entenda-antes-teste-arquivos.s3.amazonaws.com/" />',
        isset( $this->options['s3_image'] ) ? esc_attr( $this->options['s3_image']) : ''
    );
    echo '<br><br>';


echo '<h3>Imagem S3 Resized</h3>';
    printf(
        '<input type="text" id="s3_image_resized" name="'.$this->option_name.'[s3_image_resized]" value="%s" style="width: 450px;" placeholder="https://aes-entenda-antes-arquivosresized.s3.amazonaws.com/" />',
        isset( $this->options['s3_image_resized'] ) ? esc_attr( $this->options['s3_image_resized']) : ''
    );
    echo '<br><br>';


echo '<h3>Api</h3>';
    printf(
        '<input type="text" id="api" name="'.$this->option_name.'[api]" value="%s" style="width: 450px;" placeholder="https://alpha.entendaantes.com.br:8443/" />',
        isset( $this->options['api'] ) ? esc_attr( $this->options['api']) : ''
    );
    echo '<br><br>';


echo '<h3>Url Usuário</h3>';
    printf(
        '<input type="text" id="urlusuario" name="'.$this->option_name.'[urlusuario]" value="%s" style="width: 450px;" placeholder="https://app.entendaantes.com.br/site/" />',
        isset( $this->options['urlusuario'] ) ? esc_attr( $this->options['urlusuario']) : ''
    );


?>
