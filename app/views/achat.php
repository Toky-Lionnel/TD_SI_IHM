<section class="saisie-achat">
    Caisse : <?= $id_caisse ?>

    <form action="<?= constant('BASE_URL')?>saisie_achat" method="post">
        <label for="produit">Produit</label>
        <select name="produit" id="produit">
            <?php foreach ($produits as $p) { ?>
                <option value="<?= $p['id'] ?>"><?= $p['designation'] ?></option>
            <?php } ?>
        </select>

        <label for="quantite">Quantite</label>
        <input type="number" id="quantite" name="quantite">

        <button type="submit">Valider</button>
    </form>

   
        <h2>Tableau d'achat</h2>
        <table border="1" cellpadding="8">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix unité</th>
                    <th>Quantité</th>
                    <th>Prix total</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    


</section>