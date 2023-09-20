<?php $titre='Formula One 2023'; ?>
<section id="ajout_circuit" style="color:wheat">
    <?php ?>
    <h1>Ajouter un circuit</h1>
    <form action="CircuitsController/ajouter" method="post">
        <label for="circuit_name">Nom du circuit :</label>
        <input type="text" id="circuit_name" name="circuit_name" required><br><br>
        
        <label for="location">Emplacement :</label>
        <input type="text" id="location" name="location" required><br><br>
        
        <label for="last_race">Dernière course :</label>
        <input type="text" id="last_race" name="last_race"><br><br>
        
        <label for="races">Nombre de courses :</label>
        <input type="number" id="races" name="races" required><br><br>
        
        <input type="submit" value="Ajouter">
    </form>
    <a href="CircuitsController">Retour à la liste des circuits</a>
    <?php ; ?>
