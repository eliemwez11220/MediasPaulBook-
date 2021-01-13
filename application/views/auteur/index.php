<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Auteurs Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('auteur/add'); ?>" class="btn btn-success btn-sm">Ajouter un auteur</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Aut Id</th>
						<th>Date Ajout</th>
						<th>Adresse Email</th>
						<th>Nom Auteur</th>
						<th>Prenom Auteur</th>
						<th>Domaine Experience</th>
						<th>Biographie</th>
						<th>Contact</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($auteurs as $a){ ?>
                    <tr>
						<td><?php echo $a['aut_id']; ?></td>
						<td><?php echo $a['date_ajout']; ?></td>
						<td><?php echo $a['adresse_email']; ?></td>
						<td><?php echo $a['nom_auteur']; ?></td>
						<td><?php echo $a['prenom_auteur']; ?></td>
						<td><?php echo $a['domaine_experience']; ?></td>
						<td><?php echo $a['biographie']; ?></td>
						<td><?php echo $a['contact']; ?></td>
						<td>
                            <a href="<?php echo site_url('auteur/edit/'.$a['aut_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('auteur/remove/'.$a['aut_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
