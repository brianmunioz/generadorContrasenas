<section class="form-password">
    <form>

        <div class="my-sm-3">
            <label for="length" class="form-label m-0">Tamaño de contraseña:</label>
            <input style="width: 200px" type="number" class="form-control my-2 <?= $input_class ?>"
                min="<?= $min_char ?>" max="<?= $max_char ?>" id="length" name="psw-length"
                value="<?= $psw_length ?? NULL ?>">
            <div class="form-text <?= $suggest_class ?>">
                <p class="small"><?= $label_password_field ?></p>
            </div>
        </div>

        <div class=" form-options my-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="characters[]" value="L" id="letters"
                    <?= $letters_checked ?>>
                <label class="form-check-label" for="letters">
                    Letras
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="characters[]" value="N" id="numbers"
                    <?= $numbers_checked ?>>
                <label class="form-check-label" for="numbers">
                    Números 
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="characters[]" value="S" id="symbols"
                    <?= $symbols_checked ?>>
                <label class="form-check-label" for="symbols">
                    Símbolos
                </label>
            </div>
        </div>

        <!-- Char rep -->
        <fieldset class="row">
            <legend class="col-form-label col">Permitir que se repitan carácteres:</legend>
            <div class="col-12 ">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="duplicates" id="duplicates" value="1" checked>
                    <label class="form-check-label" for="duplicates">
                        Sí
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="duplicates" id="no-duplicates" value="0" checked>
                    <label class="form-check-label" for="no-duplicates">
                        No
                    </label>
                </div>
            </div>
        </fieldset>

        <!-- Buttons -->
        <div class="buttons my-3">
            <button class="btn btn-secondary">Generar</button>
            <a class="btn btn-warning" href="index.php">Reiniciar</a>
        </div>
    </form>
</section>