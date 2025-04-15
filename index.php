
<?php
require_once "Etudiant.php";
require_once "session.php";
session_start();
$session=new SessionCounter();

$Students=[new Etudiant("Aymen", [11,13,18,7,10,13,2,5,1]),
new Etudiant("Skander", [15,9,8,16]),
new Etudiant("Selim", [5,15,18,6,10,11])];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant class </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<h1 class="display-6"><?php echo $session->salutation();
 ?></h1>
<div class="container-fluid">
    <div class="row">
        <?php 
        $studentCount = count($Students);
        $colSize = 12 / $studentCount;

        foreach ($Students as $student) { ?>
            <div class="col-<?php echo $colSize; ?> p-3">
                <div class="bg-light p-4">
                    <div class="p-3 bg-light">
                        <?php echo $student->name; ?>
                    </div>

                    <?php foreach ($student->notes as $note) { 
                        if ($note > 10) {
                            $color = "p-3 border border-light bg-success bg-opacity-25";
                        } elseif ($note == 10) {
                            $color = "p-3 border border-light bg-warning bg-opacity-25";
                        } else {
                            $color = "p-3 border border-light bg-danger bg-opacity-25";
                        }
                    ?>
                    <div class="<?php echo $color; ?>">
                        <?php echo $note; ?>
                    </div>
                    <?php } ?>

                    <div class="p-3 bg-primary bg-opacity-25 mt-2">
                        <?php 
                        echo "Votre Moyenne est " . $student->Calcule_Moyenne() . "<br>";
                        echo $student->Resultat();
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>



        <div class="d-grid gap-2 col-6 mx-auto">
        <a href="reset_session.php" class="btn btn-primary" role="button">Réinitialiser la session</a>

</div>
</body>
</html>