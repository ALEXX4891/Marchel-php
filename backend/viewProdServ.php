<?php
    include ('../includes/db.php'); $type = (int)$_POST['type'];
    
    if ($type == '1'){$result = mysql_query("SELECT * FROM products WHERE cat = 2 LIMIT 8", $db);}
    else{$result = mysql_query("SELECT * FROM services ORDER BY position DESC LIMIT 8", $db);}

    $row = mysql_fetch_array($result);
    if (mysql_num_rows($result) > 0)
    {
        echo'<div class="catalog__items">';

        do 
        {  
        echo'
            <div class="catalog__item">
            ';
                if ($type == '1')
                {
                    echo'
                    <a href="/css/img/product/'.$row['img'].'" data-fancybox="images">
                        <img src="/css/img/product/'.$row['img'].'" alt="Картинка">
                    </a>                        
                    ';
                }
                else 
                {
                    echo'
                    <a href="/css/img/services/'.$row['img'].'" data-fancybox="images">
                        <img src="/css/img/services/'.$row['img'].'" alt="Услуга">
                    </a>
                        ';
                }
                /*
                $resultU = mysql_query("SELECT * FROM category_products WHERE id = '{$row['cat']}'", $db);
                $rowU = mysql_fetch_array($resultU);
                */
                echo'
                    <div class="right__item_subtitle">от '.$row['price'].' руб.</div>
                    <!-- <div class="catalog__item_btn_inner">
                        <div class="catalog__item_btn_link">
                            <div class="catalog__item_btn">Подробнее</div>
                        </div>
                    </div> -->
                </div>
                    ';
        }
        while ($row = mysql_fetch_array($result));

        echo'</div>';
    }

    if ($type == '1')
    {
        echo'
            <div class="catalog__btn">
                <a href="/pages/products/" class="catalog__btn_link container">Смотреть все</a>
            </div>
        ';
    }
    else
    {
        echo'
            <div class="catalog__btn">
                <a href="/pages/services/" class="catalog__btn_link container">Смотреть все</a>
            </div>
        ';
    }
    
?> 