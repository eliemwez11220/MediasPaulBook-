<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Auteur Add</h3>
            </div>
            <?php echo form_open('auteur/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					
				
					<div class="col-md-6">
						<label for="nom_auteur" class="control-label"><span class="text-danger">*</span>Nom Auteur</label>
						<div class="form-group">
							<input type="text" name="nom_auteur" value="<?php echo $this->input->post('nom_auteur'); ?>" class="form-control" id="nom_auteur" />
							<span class="text-danger"><?php echo form_error('nom_auteur');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="prenom_auteur" class="control-label"><span class="text-danger">*</span>Prenom Auteur</label>
						<div class="form-group">
							<input type="text" name="prenom_auteur" value="<?php echo $this->input->post('prenom_auteur'); ?>" class="form-control" id="prenom_auteur" />
							<span class="text-danger"><?php echo form_error('prenom_auteur');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse_email" class="control-label">Adresse Email</label>
						<div class="form-group">
							<input type="text" name="adresse_email" value="<?php echo $this->input->post('adresse_email'); ?>" class="form-control" id="adresse_email" />
							<span class="text-danger"><?php echo form_error('adresse_email');?></span>
						</div>
					</div>


					<div class="col-md-6">
						<label for="contact" class="control-label">Numero de telephone</label>
						<div class="form-group">
							<input type="text" name="contact" value="<?php echo $this->input->post('contact'); ?>" class="form-control" id="contact" />
							<span class="text-danger"><?php echo form_error('contact');?></span>
						</div>
					</div>

					<div class="col-md-12">
						<label for="domaine_experience" class="control-label">Domaine Experience</label>
						<div class="form-group">
							<textarea name="domaine_experience" class="form-control" id="domaine_experience"><?php echo $this->input->post('domaine_experience'); ?></textarea>
						</div>
					</div>
					

					<div class="col-md-12">
						<label for="biographie" class="control-label">Biographie</label>
						<div class="form-group">
							<textarea name="biographie" class="form-control" id="biographie"><?php echo $this->input->post('biographie'); ?></textarea>
						</div>
					</div>
					
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer auteur
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>