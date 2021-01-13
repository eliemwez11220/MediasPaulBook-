<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Catalogue des ouvrages</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('livre/catalogue'); ?>" class="btn btn-primary btn-sm" onclick="print();">Imprimer catalogue</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
                        <th>Avatar</th>
                        <th>Titre Ouvrage</th>
                        <th>Code Isbn</th>
  
                        <th>Annee Pub</th>
                        <th>Edition Pub</th>
                        <th>Lieu Pub</th>
                       
                        <th>Num Inventaire</th>
                        <th>Prix Livre</th>

                        
                        <th>Auteur</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach($livres as $t){ ?>
                    <tr>

                        <td>
                            
                        <img src="<?php echo base_url(); ?>global/img/avatars/avatar.png"
                        alt="Avatar" class="img-circle" style="border-radius: 10px!important; height: 35px; width: 40px;"/>
                        
                        </td>
                       <td><?php echo $t->titre_ouvrage; ?></td>
                       <td><?php echo $t->code_isbn; ?></td>
                       <td><?php echo $t->annee_pub; ?></td>
                        <td><?php echo$t->edition_pub; ?></td>
                        <td><?php echo$t->lieu_pub; ?></td>

                        <td><?php echo $t->num_inventaire; ?></td>
                        <td><?php echo $t->prix_livre; ?> <?php echo $t->devise_prix; ?></td>

                        <td><?php echo $t->nom_auteur; ?></td>

                        <td>
                            <a href="<?php echo site_url('internaute/addCart/'.$t->liv_id); ?>" class="btn btn-info btn-xs"><span class="fa fa-shopping"></span> Acheter</a> 
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
