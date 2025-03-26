<section class="saisie-achat">
    
    <div class="formulaire">
        <h3> Ajout de produits </h3>
        <h3> Caisse : <?= $id_caisse ?> </h3>
        <form action="<?= constant('BASE_URL')?>saisie_achat" method="post">
            <label for="produit">Produit</label>
            <select name="produit" id="produit">
                <?php foreach ($produits as $p) { ?>
                    <option value="<?= $p['id'] ?>"><?= $p['designation'] ?></option>
                <?php } ?>
            </select>

            <label for="quantite">Quantite</label>
            <input type="number" id="quantite" name="quantite">

            <button type="submit" id="submit-button">Valider</button>
        </form>
    </div>


</section>