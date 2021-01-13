<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ouvrage - Creation</h3>
            </div>
            <?php echo form_open('ouvrage/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="auteur_sid" class="control-label">Auteur</label>
						<div class="form-group">
							<select name="auteur_sid" class="form-control">
								<option value="">select auteur</option>
								<?php 
								foreach($all_auteurs as $auteur)
								{
									$selected = ($auteur['aut_id'] == $this->input->post('auteur_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$auteur['aut_id'].'" '.$selected.'>'.$auteur['nom_auteur'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="code_isbn" class="control-label"><span class="text-danger">*</span>Code Isbn</label>
						<div class="form-group">
							<input type="text" name="code_isbn" value="<?php echo $this->input->post('code_isbn'); ?>" class="form-control" id="code_isbn" />
							<span class="text-danger"><?php echo form_error('code_isbn');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="annee_pub" class="control-label"><span class="text-danger">*</span>Annee Publication</label>
						<div class="form-group">
							<input type="text" name="annee_pub" value="<?php echo $this->input->post('annee_pub'); ?>" class="form-control" id="annee_pub" />
							<span class="text-danger"><?php echo form_error('annee_pub');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="edition_pub" class="control-label"><span class="text-danger">*</span>Edition Publication</label>
						<div class="form-group">
							<input type="text" name="edition_pub" value="<?php echo $this->input->post('edition_pub'); ?>" class="form-control" id="edition_pub" />
							<span class="text-danger"><?php echo form_error('edition_pub');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lieu_pub" class="control-label"><span class="text-danger">*</span>Lieu Publication</label>
						<div class="form-group">
							<input type="text" name="lieu_pub" value="<?php echo $this->input->post('lieu_pub'); ?>" class="form-control" id="lieu_pub" />
							<span class="text-danger"><?php echo form_error('lieu_pub');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nbre_livres" class="control-label">Nombre Livres</label>
						<div class="form-group">
							<input type="text" name="nbre_livres" value="<?php echo $this->input->post('nbre_livres'); ?>" class="form-control" id="nbre_livres" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="titre_ouvrage" class="control-label"><span class="text-danger">*</span>Titre Ouvrage</label>
						<div class="form-group">
							<textarea name="titre_ouvrage" class="form-control" id="titre_ouvrage"><?php echo $this->input->post('titre_ouvrage'); ?></textarea>
							<span class="text-danger"><?php echo form_error('titre_ouvrage');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="resume_ouvrage" class="control-label">Resume Ouvrage</label>
						<div class="form-group">
							<textarea name="resume_ouvrage" class="form-control" id="resume_ouvrage"><?php echo $this->input->post('resume_ouvrage'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer ouvrage
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>