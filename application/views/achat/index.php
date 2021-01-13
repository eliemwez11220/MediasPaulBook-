<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Achats Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('achat/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Achat Id</th>
						<th>Client Sid</th>
						<th>Livre Sid</th>
						<th>Date Achat</th>
						<th>Qte Livre</th>
						<th>Prix Livre</th>
						<th>Prix Total</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($achats as $a){ ?>
                    <tr>
						<td><?php echo $a['achat_id']; ?></td>
						<td><?php echo $a['client_sid']; ?></td>
						<td><?php echo $a['livre_sid']; ?></td>
						<td><?php echo $a['date_achat']; ?></td>
						<td><?php echo $a['qte_livre']; ?></td>
						<td><?php echo $a['prix_livre']; ?></td>
						<td><?php echo $a['prix_total']; ?></td>
						<td>
                            <a href="<?php echo site_url('achat/edit/'.$a['achat_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('achat/remove/'.$a['achat_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
