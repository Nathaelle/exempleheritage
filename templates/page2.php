<h1>Je suis la page 2</h1>

<form action="index.php?route=insertservice" method="POST" enctype="multipart/form-data">
    <div>
        <input type="text" placeholder="Intitulé du service" name="intitule">
    </div>
    <div>
        <input type="text" placeholder="Tarif" name="tarif">
    </div>
    <div>
        <input type="text" placeholder="Description" name="description">
    </div>
    <div>
        <input type="file" name="illustration">
    </div>
    <div>
        <input type="submit" value="Ajouter le service">
    </div>
</form>