<?php
include('configs/pdoconfig.php');

if (!empty($_POST["docNumber"])) {
    $id = $_POST['docNumber'];
    $stmt = $DB_con->prepare("SELECT * FROM medical_experts WHERE doc_number = :id");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<?php echo htmlentities($row['doc_name']); ?>
<?php
    }
}


if (!empty($_POST["docName"])) {
    $id = $_POST['docName'];
    $stmt = $DB_con->prepare("SELECT * FROM  medical_experts WHERE doc_number = :id");
    $stmt->execute(array(':id' => $id));
?>
<?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<?php echo htmlentities($row['doc_id']); ?>
<?php
    }
}
