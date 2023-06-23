<?php include '../config/connect.php'; ?>
<?php
$data = $_POST;
echo "<pre>";
print_r($data);
exit;
// echo json_encode($data);

if(isset($_POST)){
    $rule = json_encode($_POST);
    // echo $data;
    $q = "INSERT INTO `rules` (`id`, `rule`, `created_at`, `updated_at`) VALUES (NULL, '$rule', current_timestamp(), current_timestamp())";
    $result = $conn->query($q);
    if($result){
        echo "<script>alert('new rule added')</script>";
        // header("location:index.php");
    }
}

?>