<!DOCTYPE html>
<html>
<head>
  <title>Export Laporan</title>
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap-4.2.1.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/slick.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/slick-theme.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/datatables.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/buttons.dataTables.min.css')?>"/>
  <link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.css')?>"/>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/slick.min.js')?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/jquery.dataTables.min.js')?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/js/datatables.js')?>"></script>
  <link rel="shotrcut icon" href="#" type="image/x-icon">
</head>

<body>
  <?php 
    $i = 0;
    foreach ($emp as $key => $value) {
      $keys = array_keys($value);
    }
  ?>
  <table id="example" class="table table-striped">
    <thead class="thead-dark">
      <tr>
      <?php 
        foreach($keys as $k) { 
      ?>
      <th><?= $keys[$i]?></th>
      <?php 
          $i++;
        } $i = 0;
      ?>
      </tr>
    </thead>
    <tbody>
        <?php 
          foreach ($emp as $key => $value) {
        ?>
        <tr>
        <?php
            $values = array_values($value);
            $n = count($values);
            while ($i<$n){
        ?>
        <th><?= $values[$i]?></th>
        <?php
              $i++;
            }
            $i = 0;
        ?>
        </tr>
        <?php
          }
        ?>
    </tbody>
  </table>
</body>

<script type="text/javascript">
  $(document).ready(function() {
        var table = $('#example').DataTable( {
          dom: 'Bfrtip',
          buttons: [
            {
                extend: 'csv',
                text: 'CSV',
                className: "btnCsv"
            }
          ],
          select: true,
        });
    } );
</script>
</html>