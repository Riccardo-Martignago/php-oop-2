<?php 
    require_once __DIR__ . '/classes/Prodotto.php';
    require_once __DIR__ . '/classes/Accessorio.php';
    require_once __DIR__ . '/classes/Categoria.php';
    require_once __DIR__ . '/classes/Cibo.php';
    require_once __DIR__ . '/classes/Gioco.php';

    $cane = new Categoria("Cane");
    $gatto = new Categoria("Gatto");
    $uccelli = new Categoria("Uccelli");
    $pesci = new Categoria("Pesci");
    
    $prodotti = [
        new Cibo("Royal Canin Mini Adult", $cane, "https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg", 24.99, 9),
        new Cibo("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", $cane, "https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg", 34.99, 8),
        new Cibo("Almo Nature Cat Daily Lattina", $gatto, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", 2.99, 7),
        new Cibo("Mangime per Pesci Guppy in Fiocchi", $pesci, "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", 5.99, 1),
        new Accessorio("Voliera Wilma in Legno", $uccelli, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", 99.99, "Legno"),
        new Accessorio("Cartucce Filtranti per Filtro EasyCrystal", $pesci, "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", 14.99, "Organico"),
        new Gioco("Kong Classic", $cane, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", 12.99, 8.5),
        new Gioco("Topini di peluche Trixie", $gatto, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", 3.99, 8)
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    <main class="container">
        <?php foreach ($prodotti as $prodotto){ ?> 
        <article class="card" style="width: 18rem;">
            <img src="<?php echo $prodotto->getFoto(); ?>" class="card-img-top" alt="<?php echo $prodotto->getTitolo();?>">
            <div class="card-body">
                <h2 class="card-title"><?php echo $prodotto->getTitolo();?></h2>
                <p class="card-text">Animale:<?php echo $prodotto->getCategoria()->getAnimale();?></p>
                <p class="card-text">Prezzo:<?php echo $prodotto->getPrezzo();?> euro</p>

                <?php if (get_class($prodotto) === "Accessorio") { ?>
                    <p class="px-2" >Materiale: <?php echo $prodotto->getMateriale(); ?></p>
                <?php }?>

                <?php if (get_class($prodotto) === "Cibo") { ?>
                    <p class="px-2" >Peso: <?php echo $prodotto->getPeso(); ?> kg</p>
                <?php }?>

                <?php if (get_class($prodotto) === "Gioco") { ?>
                    <p class="px-2" >Dimensioni: <?php echo $prodotto->getDimensione(); ?> cm</p>
                <?php }?>
            </div>
        </article>
        <?php }; ?>
    </main>
</body>
</html>