<h1>Bienvenue sur notre boutique</h1>
<section class="product-list">
    
    <form action="" method="">
        <label for="caisse">Choisir Caisse</label>
        <select name="num_caisse" id="caisse">
            <?php foreach ($data as $d) { ?>
                <option><?= $d ?></option>
            <?php } ?>
        </select>
        <button type="submit">Valider</button>
    </form>
    
</section>