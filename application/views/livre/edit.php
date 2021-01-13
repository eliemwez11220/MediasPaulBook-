<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Livre Edit</h3>
            </div>
			<?php echo form_open('livre/edit/'.$livre['liv_id']); ?>
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
									$selected = ($value == $livre['etat_livre']) ? ' selected="selected"' : "";

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
									$selected = ($ouvrage['ouv_id'] == $livre['ouvrage_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$ouvrage['ouv_id'].'" '.$selected.'>'.$ouvrage['titre_ouvrage'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="num_inventaire" class="control-label"><span class="text-danger">*</span>Num Inventaire</label>
						<div class="form-group">
							<input type="text" name="num_inventaire" value="<?php echo ($this->input->post('num_inventaire') ? $this->input->post('num_inventaire') : $livre['num_inventaire']); ?>" class="form-control" id="num_inventaire" />
							<span class="text-danger"><?php echo form_error('num_inventaire');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prix_livre" class="control-label"><span class="text-danger">*</span>Prix Livre</label>
						<div class="form-group">
							<input type="text" name="prix_livre" value="<?php echo ($this->input->post('prix_livre') ? $this->input->post('prix_livre') : $livre['prix_livre']); ?>" class="form-control" id="prix_livre" />
							<span class="text-danger"><?php echo form_error('prix_livre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_ajout" class="control-label">Date Ajout</label>
						<div class="form-group">
							<input type="text" name="date_ajout" value="<?php echo ($this->input->post('date_ajout') ? $this->input->post('date_ajout') : $livre['date_ajout']); ?>" class="has-datetimepicker form-control" id="date_ajout" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="devise_prix" class="control-label">Devise Prix</label>
						<div class="form-group">
							<input type="text" name="devise_prix" value="<?php echo ($this->input->post('devise_prix') ? $this->input->post('devise_prix') : $livre['devise_prix']); ?>" class="form-control" id="devise_prix" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_pub" class="control-label">Date Pub</label>
						<div class="form-group">
							<input type="text" name="date_pub" value="<?php echo ($this->input->post('date_pub') ? $this->input->post('date_pub') : $livre['date_pub']); ?>" class="has-datepicker form-control" id="date_pub" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo ($this->input->post('observation') ? $this->input->post('observation') : $livre['observation']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>