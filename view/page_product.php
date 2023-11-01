<main>
            <div class="product-container wide">
                <aside class="col l-3">
                    <div class="product-type">
                        <p>LOẠI SẢN PHẨM</p>
                        <input type="radio" placeholder="Phong Thủy"><span>Phong thủy</span><br>
                        <input type="radio" value="Thoi trang"><span>Thời trang</span>
                    </div>
                    <div class="product-line">
                        <p>DÒNG SẢN PHẨM</p>
                        <input type="radio" ><span>Cao cấp</span><br>
                        <input type="radio" ><span>Trung cấp</span><br>
                        <input type="radio" ><span>Phổ thông</span>
                    </div>
                    <div class="product-collection">
                        <p>BỘ SƯU TẬP</p>
                        <input type="radio" ><span>Di lặc</span><br>
                        <input type="radio" ><span>Quan công</span><br>
                        <input type="radio" ><span>Đạt Ma Sư Tổ</span><br>
                        <input type="radio" ><span>Lục Bình</span><br>
                        <input type="radio" ><span>Cóc Ngậm Tiền</span><br>
                        <input type="radio" ><span>Trần Quốc Quấn</span>
                    </div>
                </aside>
                <article class="col l-9">
                    <div class="product">
                    <?php foreach($data['dssp'] as $sp): ?>
                        <div class="prod-item">
                            <img src="upload/product/<?=$sp['anhsp']?>" alt="">
                            <div class="pro-info">
                                <p><?=$sp['tensp']?></p>
                                <span class="product-size">Kt: 1m*50cm</span>
                                <span class="New">New</span>
                            </div>
                            <button class="add-to-card-btn">Xem Sản Phẩm</button>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                    </li>
                                    <?php for($i = 1;$i<= $sotrang;$i++): ?>
                                    <li class="page-item"><a class="page-link" href="admin.php?mod=product&act=product&page=<?=$i?>"><?=$i?></a></li>
                                    <?php endfor; ?>
                                    <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                    </li>
                                </ul>
                                </nav>
                </article>
            </div>
        </main>