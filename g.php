<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $domain = $_POST["domain"];
  $vill= $_POST["vill"];
  $nom_serveur = "localhost";
  $utilisateur = "root";
  $mot_de_passe = "";
  $nom_base_donnees = "jobb";

 $conn = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_base_donnees);

  if (!$conn) {
    die("فشل الاتصال بقاعدة البيانات: " . mysqli_connect_error());
  }

  // إجراء الاستعلام واستخراج النتائج
  $sql = "SELECT * FROM opportunities WHERE domain = '$domain' AND vill = '$vill'";
  $result = mysqli_query($conn, $sql);

  // عرض النتائج
  if (mysqli_num_rows($result) > 0) {
    echo "نتائج البحث:<br>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "المجال: " . $row["domain"] . "<br>";
      echo "الموقع: " . $row["vill"] . "<br><br>";
    }
  } else {
    echo "لا توجد نتائج.";
  }

  // إغلاق الاتصال بقاعدة البيانات
  mysqli_close($conn);
}
?>

