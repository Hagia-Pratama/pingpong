  <?php

    require_once('koneksi.php');

    $query = "select * from tb_leaderboard";

    $result = mysqli_query($koneksi, $query);
  ?>
  <section class="content">
      <div class="row">
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Leaderboard</h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>username</th>
                  <th>Score Pemain</th>
                  <th>Score Musuh</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                            while ($row =mysqli_fetch_assoc($result)) {
                              
                            
                  ?>
                <tr>
                  <td><?php echo $row['id_pemain']?></td>
                  <td><?php echo $row['username']?></td>
                  <td><?php echo $row['scorepemain']?></td>
                  <td><?php echo $row['scoremusuh']?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
</div>
</section>