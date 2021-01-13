<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Livre Ajout</h3>
            </div>
            <?php echo form_open('livre/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="etat_livre" class="control-label">Etat Livre</label>
						<div class="form-group">
							<select name="etat_livre" class="form-control">
								<option value="">select</option>
								<?php 
								$etat_livre_values = array(
									'disponible'=>'Disponible',
									'reservee'=>'Non disponible',
								);

								foreach($etat_livre_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('etat_livre')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ouvrage_sid" class="control-label">Ouvrage</label>
						<div class="form-group">
							<select name="ouvrage_sid" class="form-control">
								<option value="">select ouvrage</option>
								<?php 
								foreach($all_ouvrages as $ouvrage)
								{
									$selected = ($ouvrage['ouv_id'] == $this->input->post('ouvrage_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$ouvrage['ouv_id'].'" '.$selected.'>'.$ouvrage['titre_ouvrage'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_inventaire" class="control-label"><span class="text-danger">*</span>Numero Inventaire</label>
						<div class="form-group">
							<input type="text" name="num_inventaire" value="<?php echo $this->input->post('num_inventaire'); ?>" class="form-control" id="num_inventaire" />
							<span class="text-danger"><?php echo form_error('num_inventaire');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prix_livre" class="control-label"><span class="text-danger">*</span>Prix Livre</label>
						<div class="form-group">
							<input type="number" min="1" name="prix_livre" value="<?php echo $this->input->post('prix_livre'); ?>" class="form-control" id="prix_livre" />
							<span class="text-danger"><?php echo form_error('prix_livre');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="devise_prix" class="control-label">Devise Prix</label>
						<div class="form-group">
							
							<select name="devise_prix" class="form-control">
								<option disabled>selectionnez</option>
								<?php 
								$etat_livre_values = array(
									'USD'=>'Dollars americains',
									'CDF'=>'Francs Congolais',
								);

								foreach($etat_livre_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('devise_prix')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_pub" class="control-label">Date Publication </label>
						<div class="form-group">
							<input type="date" name="date_pub" value="<?php echo $this->input->post('date_pub'); ?>" class=" form-control" id="date_pub" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo $this->input->post('observation'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer livre
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>