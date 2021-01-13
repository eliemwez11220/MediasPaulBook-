<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Livres Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('livre/add'); ?>" class="btn btn-success btn-sm">Ajouter un livre</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Liv Id</th>
						<th>Etat Livre</th>
						<th>Ouvrage Sid</th>
						<th>Num Inventaire</th>
						<th>Prix Livre</th>
						<th>Date Ajout</th>
						<th>Devise Prix</th>
						<th>Date Pub</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($livres as $l){ ?>
                    <tr>
						<td><?php echo $l['liv_id']; ?></td>
						<td><?php echo $l['etat_livre']; ?></td>
						<td><?php echo $l['ouvrage_sid']; ?></td>
						<td><?php echo $l['num_inventaire']; ?></td>
						<td><?php echo $l['prix_livre']; ?></td>
						<td><?php echo $l['date_ajout']; ?></td>
						<td><?php echo $l['devise_prix']; ?></td>
						<td><?php echo $l['date_pub']; ?></td>
						<td><?php echo $l['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('livre/edit/'.$l['liv_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('livre/remove/'.$l['liv_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
