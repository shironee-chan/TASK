<div class="container-fluid">
   <!-- Page Heading -->
   <h1 class="h3 mb-2 text-gray-800">Blotter List</h1>
   <p class="mb-4">
    <a class="btn btn-primary" href="<?= base_url('index.php/dashboard/add-complains') ?>"> Add Complains </a>
   </p>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">List</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full Name</th>
      <th scope="col">Address</th>
      <th scope="col">Nationality</th>
      <th scope="col">Age</th>      
      <th scope="col">Sex</th>
      <th scope="col">Contact #</th>
      <th scope="col">Email</th>
      <th scope="col">Full Name</th>
      <th scope="col">Address</th>
      <th scope="col">Nationality</th>
      <th scope="col">Age</th>      
      <th scope="col">Sex</th>
      <th scope="col">Contact #</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($complains_list as $complains):?>
    <tr>
      <th scope="row"><?= $complains->complains_id ?></th>
      <td><?= $complains->fname ?></td>
      <td><?= $complains->purok ?>,<?= $complains->barangay ?>,<?= $complains->municipality ?>,<?= $complains->province ?>,<?= $complains->country ?></td>
      <td><?= $complains->nationality ?></td>
      <td><?= $complains->age ?></td>
      <td><?= $complains->sex ?></td>
      <td><?= $complains->contact ?></td>
      <td><?= $complains->email ?></td>
      <td><?= $complains->f_name ?> <?= $complains->m_name ?> <?= $complains->l_name ?> <?= $complains->name_ex ?></td>
      <td><?= $complains->prk ?>,<?= $complains->brgy ?>,<?= $complains->mun ?>,<?= $complains->prov ?>,<?= $complains->count ?></td>
      <td><?= $complains->nation ?></td>
      <td><?= $complains->ag ?></td>
      <td><?= $complains->sx ?></td>
      <td><?= $complains->con ?></td>
      <td><?= $complains->em ?></td>

      <td>
      <a class='btn btn-warning btn-sm' href="<?php echo base_url('index.php/dashboard/update-complains/'.$complains->complains_id); ?>">Update</a> 
      <a class="btn btn-danger btn-sm" href="<?= base_url('index.php/dashboard/delete-complains/'.$complains->complains_id); ?>" >Delete</a>
    </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
      </div>
   </div>
</div>