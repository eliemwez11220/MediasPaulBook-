<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Enregistrement d'un achat livre </h3>
            </div>
            <?php echo form_open('achat/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="client_sid" class="control-label"><span class="text-danger">*</span>Client</label>
						<div class="form-group">
							<select name="client_sid" class="form-control">
								<option value="">select client</option>
								<?php 
								foreach($all_clients as $client)
								{
									$selected = ($client['cli_id'] == $this->input->post('client_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$client['cli_id'].'" '.$selected.'>'.$client['nom_client'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('client_sid');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="livre_sid" class="control-label"><span class="text-danger">*</span>Livre</label>
						<div class="form-group">
							<select name="livre_sid" class="form-control">
								<option value="">select livre</option>
								<?php 
								foreach($all_livres as $livre)
								{
									$selected = ($livre['liv_id'] == $this->input->post('livre_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$livre['liv_id'].'" '.$selected.'>'.$livre['num_inventaire'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('livre_sid');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="qte_livre" class="control-label"><span class="text-danger">*</span>Quantite  Livre</label>
						<div class="form-group">
							<input type="text" name="qte_livre" value="<?php echo $this->input->post('qte_livre'); ?>" class="form-control" id="qte_livre" />
							<span class="text-danger"><?php echo form_error('qte_livre');?></span>
						</div>
					</div>
					<div class="col-md-4">
						<label for="prix_livre" class="control-label">Prix Livre</label>
						<div class="form-group">
							<input type="text" name="prix_livre" value="<?php echo $this->input->post('prix_livre'); ?>" class="form-control" id="prix_livre" />
						</div>
					</div>
					<div class="col-md-2">
						<label for="devise_prix" class="control-label">Devise Prix</label>
						<div class="form-group">
							<select name="devise_prix" class="form-control">
								<option value="">select</option>
								<?php 
								$etat_livre_values = array(
									'USD'=>'Dollars americains',
									'CDF'=>'Francs congolais',
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
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer achat
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>