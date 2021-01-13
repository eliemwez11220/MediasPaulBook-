<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ouvrages Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('ouvrage/add'); ?>" class="btn btn-success btn-sm">Ajouter un ouvrage</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Ouv Id</th>
						<th>Auteur Sid</th>
						<th>Code Isbn</th>
						<th>Annee Pub</th>
						<th>Edition Pub</th>
						<th>Lieu Pub</th>
						<th>Nbre Livres</th>
						<th>Date Ajout</th>
						<th>Titre Ouvrage</th>
						<th>Resume Ouvrage</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($ouvrages as $o){ ?>
                    <tr>
						<td><?php echo $o['ouv_id']; ?></td>
						<td><?php echo $o['auteur_sid']; ?></td>
						<td><?php echo $o['code_isbn']; ?></td>
						<td><?php echo $o['annee_pub']; ?></td>
						<td><?php echo $o['edition_pub']; ?></td>
						<td><?php echo $o['lieu_pub']; ?></td>
						<td><?php echo $o['nbre_livres']; ?></td>
						<td><?php echo $o['date_ajout']; ?></td>
						<td><?php echo $o['titre_ouvrage']; ?></td>
						<td><?php echo $o['resume_ouvrage']; ?></td>
						<td>
                            <a href="<?php echo site_url('ouvrage/edit/'.$o['ouv_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('ouvrage/remove/'.$o['ouv_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
