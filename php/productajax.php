<?php
include('query.php');
                               $query=$pdo->query("select products .*,category.name as cName,c_id as catId from products inner join category on 
                               products.c_id=category.id");
                               $allProducts=$query->fetchAll(PDO::FETCH_ASSOC);
                               foreach ($allProducts as $pdt) {
                                
                               ?>
                      <tr>
                       <!-- <td>1</td> -->
                        <td>
                          <div class="d-flex align-items-center gap-3 cursor-pointer">
                             <!-- <img src="assets/images/avatars/01.png" class="rounded-circle" width="44" height="44" alt=""> -->
                             <div class="">
                               <p class="mb-0"><?php echo $pdt['name']?></p>
                             </div>
                          </div>
                        </td>
                        <td><?php echo $pdt['des']?></td>
                        <td><?php echo $pdt['price']?></td>
                        <td><?php echo $pdt['qty']?></td>
                        <td><?php echo $pdt['pr_barcode']?></td>
                        <td><?php echo $pdt['cName']?></td>
                        <td><img height="50px" src="img/<?php echo $pdt ['image']?>" alt=""></td>
                        <td><a href="editproduct.php?pid=<?php echo $pdt['id']?>" class="btn btn-info">Edit</a></td>
                        <td><a href="?pdid=<?php echo $pdt['id']?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                     <?php
                       }
                       ?>