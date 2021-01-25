


<main>
    <div id="container_disk" class="container_flex wrapper_margin_68 space_between">
    <?php
        foreach ( $libraryDisk["response"] as $data ) {
        ?>
            <div class=box_card_disk>
                <div class="card">
                    <img src="<?=$data["poster"]?>" alt="<?='Cover_abum'.$data["title"]?>">
                    <h4 class="title_disk"><?=$data["title"]?></h4>
                    <p class="author"><?=$data["author"]?></p>
                    <p class="year"><?=$data["year"]?></p>
                </div>
            </div>
                  
            <?php
        }
    ?>  

    </div>
</main>