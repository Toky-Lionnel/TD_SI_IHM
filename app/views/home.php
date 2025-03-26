<h1>Bienvenue sur notre boutique</h1>

<div class="formulaire">
    <form action="<?= constant('BASE_URL')?>saisie_achat" method="get">
        <label for="caisse">Choisir Caisse</label>
        <select name="id_caisse" id="caisse">
            <?php foreach ($caisse as $c) { ?>
                <option value="<?= $c['id'] ?>"><?= $c['nom'] ?></option>
            <?php } ?>
        </select>
        <button type="submit">Valider</button>
    </form>
</div>

