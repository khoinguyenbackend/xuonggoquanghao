
            <!-- sa-app__body -->
            <div id="top" class="sa-app__body">
                <div class="mx-xxl-3 px-4 px-sm-5">
                    <div class="py-5">
                        <div class="row g-4 align-items-center">
                            <div class="col">
                                <h1 class="h3 m-0">Products</h1>
                            </div>
                            <div class="col-auto d-flex">
                                <a href="admin.php?mod=product&act=add" class="btn btn-primary">New product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mx-xxl-3 px-4 px-sm-5 pb-6">
                    <div class="sa-layout">
                        <div class="sa-layout__backdrop" data-sa-layout-sidebar-close=""></div>
                        <div class="sa-layout__content">
                            <div class="card table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="w-min">
                                                <input type="checkbox"
                                                    class="form-check-input m-0 fs-exact-16 d-block" />
                                            </th>
                                            <th class="min-w-20x">Product</th>
                                            <th>Category</th>
                                            <th>Stock</th>
                                            <th>Price</th>
                                            <th class="w-min"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($data['dssp'] as $sp): ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-check-input m-0 fs-exact-16 d-block"
                                                    aria-label="..." /></td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="app-product.html" class="me-4">
                                                        <div
                                                            class="sa-symbol sa-symbol--shape--rounded sa-symbol--size--lg">
                                                            <img src="upload/product/<?=$sp['anhsp']?>" width="40"
                                                                height="40" alt="" />
                                                        </div>
                                                    </a>
                                                    <div>
                                                        <a href="app-product.html" class="text-reset"><?=$sp['tensp']?></a>
                                                        <div class="sa-meta mt-0">
                                                            <ul class="sa-meta__list">
                                                                <li class="sa-meta__item">ID:
                                                                    <span title="Click to copy product ID"
                                                                        class="st-copy"><?=$sp['masp']?></span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="app-category.html" class="text-reset"><?=$sp['tendm']?></a>
                                            </td>
                                            <td>
                                                <div class="badge badge-sa-success"><?=$sp['soluong']?></div>
                                            </td>
                                            <td>
                                                <div class="sa-price">
                                                    
                                                <span class="sa-price__integer"><?=$sp['gia']?></span>
                                                <span class="sa-price__symbol">đ<span>
                                                <span class="sa-price__decimal"><?=$sp['giakhuyenmai']?></span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button class="btn btn-sa-muted btn-sm" type="button"
                                                        id="product-context-menu-0" data-bs-toggle="dropdown"
                                                        aria-expanded="false" aria-label="More">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="product-context-menu-0">
                                                        <li>
                                                            <a class="dropdown-item" href="admin.php?mod=product&act=edit&id=<?=$sp['masp']?>">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a onclick="deleteProduct(<?=$sp['masp']?>)" class="dropdown-item text-danger" href="#">Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                    </li>
                                    <?php for($i = 1;$i<= $sotrang;$i++): ?>
                                    <li class="page-item"><a class="page-link" href="admin.php?mod=product&act=admin&page=<?=$i?>"><?=$i?></a></li>
                                    <?php endfor; ?>
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                    </li>
                                </ul>
                                </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sa-app__body / end -->
            <script>
                function deleteProduct(id){
                    var kq = confirm("bạn có muốn xóa sản phẩm này không?");
                    if(kq){
                        window.location.search='?mod=product&act=delete&id='+id;
                    }
                }
            </script>
           