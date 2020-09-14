<?php
//Verified
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE doc_status = 'Verified' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($verified_medics);
$stmt->fetch();
$stmt->close();

//Unverified
$query = "SELECT COUNT(*) FROM `medical_experts` WHERE doc_status != 'Verified' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($unverified);
$stmt->fetch();
$stmt->close();

//Total Medical Experts
$query = "SELECT COUNT(*) FROM `medical_experts` ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($total_medics);
$stmt->fetch();
$stmt->close();