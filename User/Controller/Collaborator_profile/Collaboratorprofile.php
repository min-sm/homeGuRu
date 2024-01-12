<?php
include "../../Model/DBConnection.php"; // Include the file where the database connection is established

// Check if the collaborator ID is provided in the URL
if (isset($_GET['collaborator_id'])) {
    // Retrieve the collaborator ID from the URL parameter
    $collaborator_id = $_GET['collaborator_id'];
    // Fetch the collaborator information based on the ID from your database
    $query = "SELECT * FROM m_collaborators WHERE id = :collaborator_id";
    $statement = $pdo->prepare($query);
    if (!$statement) {
        die("Database query failed: " . $pdo->errorInfo()[2]);
    }
    // Bind the parameter and execute the query
    $statement->bindParam(':collaborator_id', $collaborator_id, PDO::PARAM_INT);
    $statement->execute();
    // Fetch the collaborator data
    $collaborator = $statement->fetch(PDO::FETCH_ASSOC);
    //collab properties
    $property_query='SELECT p.id as pid, p.*,pt.*,mt.*,mc.*
FROM properties p
LEFT JOIN property_type pt ON p.pt_id=pt.id
LEFT JOIN m_townships mt ON p.p_township=mt.id
LEFT JOIN m_collaborators mc ON p.uploader_id=mc.id
LEFT JOIN (SELECT * FROM m_collaborators WHERE gc_activity_ban=0) AS collaborator_active ON collaborator_active.id=mc.id  
WHERE p.del_flg = 0  
AND p.p_status = 2 
AND p.uploader_id = :collaborator_id
ORDER BY p.id DESC';
$sql2 =$pdo->prepare($property_query);
$sql2->bindValue(':collaborator_id',$collaborator_id);
$sql2->execute();
$collaborator_properties=$sql2->fetchAll(PDO::FETCH_ASSOC);
//rentcount
$rentCountsql = $pdo->prepare(
    'SELECT COUNT(*) as counts
    FROM properties p
    LEFT JOIN m_collaborators mc ON p.uploader_id=mc.id
    WHERE p.del_flg = 0  
    AND p.p_status = 2 
    AND p.p_offer = 0
    AND p.uploader_id = :collaborator_id
    '  
);
$rentCountsql->bindValue(':collaborator_id',$collaborator_id);
$rentCountsql->execute();
$rentCount = $rentCountsql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
$rentPropertiesCount = $rentCount[0]['counts'];// total number of record


//salecount
$saleCountsql = $pdo->prepare(
    'SELECT COUNT(*) as counts
    FROM properties p
    LEFT JOIN m_collaborators mc ON p.uploader_id=mc.id
    WHERE p.del_flg = 0  
    AND p.p_status = 2 
    AND p.p_offer = 1
    AND p.uploader_id = :collaborator_id
    '  
);
$saleCountsql->bindValue(':collaborator_id',$collaborator_id);
$saleCountsql->execute();
$saleCount = $saleCountsql->fetchAll(PDO::FETCH_ASSOC);//Fetch total List  Number
$salePropertiesCount = $saleCount[0]['counts'];// total number of record
} else {
    // Display a message if the collaborator ID is not provided
    echo "Collaborator ID not provided";
}

