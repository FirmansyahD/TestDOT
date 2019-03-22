<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RajaOngkir TestDOT</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/css/datatable/dataTables.bootstrap.min.css">
	

	<script src="<?=base_url()?>assets/js/vendor/jquery-2.1.4.min.js"></script>
</head>
<body>
    <div class="row">
		<div class="col-md-12">
            <div class="card">
                <div class="card-footer">                
                    <div class="card-header">
                        <strong class="card-title">List </strong> Raja Ongkir
                    </div>
                        <div class="card-body">
                          <table id="coba" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>NO.</th>
                                    <th>ID Kota</th>
                                    <th>ID Provinsi</th>
                                    <th>Provinsi</th>
                                    <th>Kota</th>                                   
                                    <th>Kode Pos</th>
                                  </tr>
                                </thead>
                                <tbody>
								<?php $i = 1; ?>
                                <?php foreach($jancok->rajaongkir->results as $data) {
                                ?>
                                  <tr>
                                 <th scope="row"><?= $i++; ?></th>
                                 <td><?php echo $data->city_id; ?></td>
                                 <td><?php echo $data->province_id; ?></td>
                                <td><?php echo $data->province; ?></td>
                                <td><?php echo $data->city_name; ?></td>                              
                                <td><?php echo $data->postal_code; ?></td>
                                
                                </tr>
                                <?php } ?>
                              </tbody>
                        </table>
                    </div>
                </div>
        	</div>
        </div>
</body>

<script>
	$(document).ready(function(){
		$('#coba').DataTable({
			
			buttons: [
			]
		});
	});
</script>
	
	<script src="<?=base_url()?>assets/js/data-table/datatables.min.js"></script>
	<script src="<?=base_url()?>assets/js/data-table/dataTables.bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/js/data-table/dataTables.buttons.min.js"></script>
	
</html>
