<?php
$member_id = $_SESSION['member_id'];

//Consultations
$query = "SELECT COUNT(*) FROM `consultations` WHERE member_id = '$member_id'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($consultations);
$stmt->fetch();
$stmt->close();

//Prescriptions
$ret = "SELECT * FROM `consultations` WHERE member_id ='$member_id' ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($row = $res->fetch_object()) {
    $consulid = $row->consul_id;
}

$query = "SELECT COUNT(*) FROM `prescriptions` WHERE consul_id ='$consulid'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($prescriptions);
$stmt->fetch();
$stmt->close();

//Membership payments
$query = "SELECT SUM(pay_amt) FROM `membership_payments` WHERE member_id ='$member_id'  ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($payments);
$stmt->fetch();
$stmt->close();

