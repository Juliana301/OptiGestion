<?php
include_once('../Controller/recetaController.php');

$expedienteId = $_GET['IdExpediente'] ?? null;
if (!$expedienteId) exit;

$receta = RecetaController::verReceta($expedienteId);
if (!$receta) exit;
?>

<h3 style="text-align:center;">Dr. LEONARDO SOLANO GRIJALBA</h3>

<p><b>Paciente:</b>
<?= $receta['NombrePaciente'].' '.$receta['ApellidoPaciente'].' '.$receta['Apellido2Paciente'] ?>
</p>

<p><b>Cédula:</b> <?= $receta['CedulaPaciente'] ?></p>
<p><b>Fecha:</b> <?= $receta['FechaRegistro'] ?></p>

<table>
<tr>
    <th>Ojo</th><th>ESF</th><th>CIL</th><th>EJE</th><th>PRISMA</th><th>ADD</th>
</tr>
<tr>
    <td>OD</td>
    <td><?= $receta['Esfera_OD'] ?></td>
    <td><?= $receta['Cilindro_OD'] ?></td>
    <td><?= $receta['Eje_OD'] ?></td>
    <td><?= $receta['Prisma_OD'] ?></td>
    <td><?= $receta['Adicion_OD'] ?></td>
</tr>
<tr>
    <td>OI</td>
    <td><?= $receta['Esfera_OI'] ?></td>
    <td><?= $receta['Cilindro_OI'] ?></td>
    <td><?= $receta['Eje_OI'] ?></td>
    <td><?= $receta['Prisma_OI'] ?></td>
    <td><?= $receta['Adicion_OI'] ?></td>
</tr>
</table>

<p><b>Observaciones:</b> <?= $receta['Diagnostico'] ?></p>
