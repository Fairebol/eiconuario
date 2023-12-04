<div>
    <form class="flex flex-col space-y-4" action="<?= LOCALHOST ?>/upload" method="post" enctype="multipart/form-data">

        <span> El nombre de las imagenes deben coincidir con los que salen en el CSV, incluyendo la foto grupal </span>

        <label for="csv"> Subir archivo de usuarios </label>
        <input type="file" name="students" id="csv">

        <label for="photos"> Subir fotos </label>
        <input type="file" name="files[]" id="photos" multiple>

        <label for="groupp"> Subir foto grupal </label>
        <input type="file" name="group" id="groupp">

        <label for="password"> Contraseña de Seguridad </label>
        <input type="password" name="psw" id="password">

        <button type="submit"> Subir archivos </button>
    </form>
</div>