<?php  

/*
Plugin Name: Formulario de Usuarios
Description: Registro de Usuarios Focus
Version:     1.0
Author:      Eric Zapata
License:     GPL2
*/

add_action('init','formulario_focus');

function formulario_focus()
{
    add_shortcode('FormFocus','FormFocus_Content');
}

function FormFocus_Content(){
	?>
		<form id="Form-Focus-User" class="form-focus">
			<div class="col-md-6 row">
				<div class="row">
					<div class="col-md-6 form-group">
						<label>Usuario</label>
						<input type="textbox" name="usuario" id="usuario" class="form-control" required />
					</div>
					<div class="col-md-6 form-group">
						<label>Contraseña</label>
						<input type="password" name="password" id="password" class="form-control" required />
					</div>
				</div>
				<div class="form-group">
					<label>Nombre y Apellido</label>
					<input type="textbox" name="nombre" id="nombre" class="form-control" required />
				</div>
				<div class="form-group">
					<label>Dirección</label>
					<input type="textbox" name="direccion" id="direccion" class="form-control" required />
				</div>
				<div class="form-group">
					<label>Telefono</label>
					<input type="textbox" name="telefono" id="telefono" class="form-control" required />
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" name="email" id="email" class="form-control" required />
				</div>
<div class="msj-form"></div>
				<button type="submit" class="btn btn-primary" id="btn-Registrar">Registrarse</button>
			</div>

		</form>

		<script>
			jQuery(document).ready(function(){
				jQuery('#Form-Focus-User').on('submit', function(e){
					e.preventDefault();
					var form = jQuery(this).serialize();
					jQuery.ajax({
						url:"<?php echo plugin_dir_url( __FILE__ ) ?>/db-data.php",
						type: 'POST',
						data: form,
                                                beforeSend: function(){
jQuery('.msj-form').html('');
jQuery('#Form-Focus-User input').prop('disabled',true);
jQuery('#Form-Focus-User button').prop('disabled',true);
                                                     jQuery('.msj-form').html('<p style="font-size:14px;padding:5px 10px;background: #82e8ff;border-radius: 4px;">Guardando Usuario...</p>');
                                                },
						success: function(data){
jQuery('#Form-Focus-User input').prop('disabled',false);
jQuery('#Form-Focus-User button').prop('disabled',false);
                                                        jQuery('.msj-form').html('<p style="font-size:14px;padding:5px 10px;background: #94ffa2;border-radius: 4px;">Se ha guardado el usuario satisfactoriamente.</p>');
							jQuery('#Form-Focus-User input').val('');
						}
					});

				});
			});
		</script>

	<?php
}