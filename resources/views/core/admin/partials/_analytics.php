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

//all clients
$query = "SELECT COUNT(*) FROM `members` ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($members);
$stmt->fetch();
$stmt->close();

//Gold Members
$query = "SELECT COUNT(*) FROM `members` WHERE member_package = 'Gold Package' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($gold);
$stmt->fetch();
$stmt->close();

//Silver
$query = "SELECT COUNT(*) FROM `members` WHERE member_package = 'Silver Package' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($silver);
$stmt->fetch();
$stmt->close();

//Bronze 
$query = "SELECT COUNT(*) FROM `members` WHERE member_package = 'Bronze Package' ";
$stmt = $mysqli->prepare($query);
$stmt->execute();
$stmt->bind_result($bronze);
$stmt->fetch();
$stmt->close();
