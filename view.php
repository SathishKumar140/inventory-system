<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Sl.No</th>
                  <th>Stock Book Pgno</th>
                  <th>Description</th>
                  <th>Book Figure</th>
                  <th>Book Value</th>
                  <th>Actual Value</th>
                  <th>Storage Place</th>
                  <th>Bill Date</th>
                  <th>Warranty Duration</th>
                </tr>
              </thead>
              <tbody>
               <?php
               include 'config.php';
               $slno=0;
               $fetch= mysql_query("SELECT * FROM volume_1") or die(mysql_error());
               while($info=mysql_fetch_array($fetch))
               {
                $slno=$slno+1;
                $stock_book_pgno=$info['stock_book_pgno'];
                $description=$info['description'];
                $book_figure=$info['book_figure'];
                $book_value=$info['book_value'];
                $actual=$info['actual'];
                $storage_place=$info['storage_place'];
                $bill_date=$info['bill_date'];
                $warranty=$info['warranty'];
                  echo '<tr>';
                  echo '<td>'.$slno.'</td>';
                  echo '<td>'.$stock_book_pgno.'</td>';
                  echo '<td>'.$description.'</td>';
                  echo '<td>'.$book_figure.'</td>';
                  echo '<td>'.$book_value.'</td>';
                  echo'<td>'.$actual.'</td>';
                  echo'<td>'.$storage_place.'</td>';
                  echo'<td>'.$bill_date.'</td>';
                  echo'<td>'.$warranty.'</td>';
                  
                echo '</tr>';
               }

               ?>
                
                
              </tbody>
            </table>

           </div>