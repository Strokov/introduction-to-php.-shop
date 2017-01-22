            <h1>
                Каталог товаров
            </h1>

            <div>
            <?php foreach ($goods as $good): ?> 
                <div class="shopUnit">
                    <img src="<?php echo $goods['img']; ?>" >

                    <div class="shopUnitName">
                       <?php echo $goods['name']; ?>
                    </div>
                    <div class="shopUnitShortDesc">
                        <?php echo $goods['desc']; ?>
                    </div>
                    <div class="shopUnitPrice">
                        Цена: <?php echo $goods['price']; ?>
                    </div>
                    <a href="index.php?page=product&id=<?php echo $good['id']; ?>" class="shopUnitMore">
                        Подробнее
                    </a>
                </div>
            <?php endforeach;  ?>
            </div>