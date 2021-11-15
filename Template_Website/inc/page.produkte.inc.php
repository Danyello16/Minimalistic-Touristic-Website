<!-- Inhalt für den Menüpunkt Produkte -->

<!-- TODO
    ersetzen des Bereiches "statischer DummyInhalt gegen die dynamisch aus der DB kommenden Daten
-->

<div id="main" class="container-fluid">

    <div class="row">

        <?php $ergebnis = $db->getAllProducts(); ?>

        <!-- statischer DummyInhalt -->
        <?php if (count($ergebnis) > 0) : ?>

            <?php foreach($ergebnis as $product) : ?>
                <div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="item card text-center">
                        <h5 class="card-header"><?php echo $product['titel'] ?></h5>
                        <div class="card-body">
                            <img src="pictures/<?php echo $product['dateiname']; ?>" alt="<?php echo $product['titel']; ?>">
                            <p class="card-text small-size">
                                <?php echo $product['beschreibung'] ?>
                            </p>
                            <p class="card-text"> € <?php echo $product['preis']; ?></p>
                            <a href="#" onclick="addProduct('<?php echo $product['produktID']; ?>', '<?php echo $product['preis']; ?>')" class="btn btn-primary">in den Warenkorb</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</div>
 