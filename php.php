<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $selectedId = $_POST["kuca"];

  if ($selectedId !== "") {
    $xml = simplexml_load_file("novo 2.xml");

    foreach ($xml->kuća as $kuća) {
      $id = (string) $kuća->id;

      if ($id === $selectedId) {
        $naziv = (string) $kuća->naziv;
        $cijena = (string) $kuća->cijena;
        $lokacija = (string) $kuća->lokacija;

        echo "<h2>Informacije o kući:</h2>";
        echo "<p><strong>Naziv:</strong> $naziv</p>";
        echo "<p><strong>Cijena:</strong> $cijena</p>";
        echo "<p><strong>Lokacija:</strong> $lokacija</p>";

        break;
      }
    }
  }
}
?>