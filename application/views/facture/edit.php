<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Facture Edit</h3>
            </div>
			<?php echo form_open('facture/edit/'.$facture['fac_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="client_sid" class="control-label">Client</label>
						<div class="form-group">
							<select name="client_sid" class="form-control">
								<option value="">select client</option>
								<?php 
								foreach($all_clients as $client)
								{
									$selected = ($client['cli_id'] == $facture['client_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$client['cli_id'].'" '.$selected.'>'.$client['nom_client'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="etat_facture" class="control-label">Etat Facture</label>
						<div class="form-group">
							<select name="etat_facture" class="form-control">
								<option value="">select</option>
								<?php 
								$etat_facture_values = array(
									'reglee'=>'Paiement effectuee',
									'encours'=>'Paiement non effectuee',
								);

								foreach($etat_facture_values as $value => $display_text)
								{
									$selected = ($value == $facture['etat_facture']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="numer_facture" class="control-label">Numer Facture</label>
						<div class="form-group">
							<input type="text" name="numer_facture" value="<?php echo ($this->input->post('numer_facture') ? $this->input->post('numer_facture') : $facture['numer_facture']); ?>" class="form-control" id="numer_facture" />
							<span class="text-danger"><?php echo form_error('numer_facture');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_facture" class="control-label">Date Facture</label>
						<div class="form-group">
							<input type="text" name="date_facture" value="<?php echo ($this->input->post('date_facture') ? $this->input->post('date_facture') : $facture['date_facture']); ?>" class="has-datetimepicker form-control" id="date_facture" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="net_a_payer" class="control-label">Net A Payer</label>
						<div class="form-group">
							<input type="text" name="net_a_payer" value="<?php echo ($this->input->post('net_a_payer') ? $this->input->post('net_a_payer') : $facture['net_a_payer']); ?>" class="form-control" id="net_a_payer" />
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