        <?php 
            foreach ($objects as $obj) {
        ?>
                        <div class="object">
                            <img src="images/<?=$obj['main_img']?>">
                                <h4>
                                    <b>
                                        <?=$obj['space']?> кв.м.
                                    </b>
                                </h4>
                                <h5>
                                    <?=$obj['price']?>
                                </h5>
                                <p>
                                    <?=$obj['short_description']?>
                                </p>
                                <a href="object.php?action=getobj&id=<?=$obj['id']?>">Подробнее</a>
                        </div>
        <?php
            }
        ?>




    
