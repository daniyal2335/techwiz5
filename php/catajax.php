<?php
include('query.php');
                               $query=$pdo->query("select * from category");
                               $allCategories=$query->fetchAll(PDO::FETCH_ASSOC);
                               foreach ($allCategories as $cat) {
                                
                               ?>
                      <tr>
                       <!-- <td>1</td> -->
                        <td>
                          <div class="d-flex align-items-center gap-3 cursor-pointer">
                             <!-- <img src="assets/images/avatars/01.png" class="rounded-circle" width="44" height="44" alt=""> -->
                             <div class="">
                               <p class="mb-0"><?php echo $cat['name']?></p>
                             </div>
                          </div>
                        </td>
                        <td><?php echo $cat['des']?></td>
                        <td><img height="50px" src="img/<?php echo $cat ['image']?>" alt=""></td>
                        <td><a href="editCategory.php?cid=<?php echo $cat['id']?>" class="btn btn-info">Edit</a></td>
                        <td><a href="?cdid=<?php echo $cat['id']?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                     <?php
                       }
                       ?>