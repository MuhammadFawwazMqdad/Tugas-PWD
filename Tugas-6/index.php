<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas - 7</title>
    <style>
    table {
        border-collapse: separate;
        border-spacing: 2px;
    }
    th, td {
        padding: 4px 6px;
        text-align: left;
        font-weight: normal;
    }
    th {
        background-color: #00ff00;
    }
    tr:first-child th:first-child {
        background-color: #ffffff;
    }
    td {
        background-color: #00ffff;
    }
    tr:nth-child(even) td:nth-child(even) {
        background-color: #ffff00;
    }
</style>
</head>
<body>
    
  <?php
$data = [];
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $data[] = ($i + 1) * ($j + 1);
    }
}
?>

<table border="1">
    <tr>
        <th>bilangan</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
        <th>4</th>
        <th>5</th>
        <th>6</th>
        <th>7</th>
        <th>8</th>
        <th>9</th>
        <th>10</th>
    </tr>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        echo "<th>" . ($i + 1) . "</th>";
        
        for ($j = 0; $j < 10; $j++) {
            $hasil = $data[$i * 10 + $j];
            echo "<td>$hasil</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
    <br><br>
    <br>
    <div class="password-container">
    <input type="password" id="passwordInput" placeholder="Masukkan password">
    <button type="button" id="togglePassword" class="toggle-btn">Show</button>
  </div>

  <script>
    const passwordInput = document.getElementById('passwordInput');
    const togglePassword = document.getElementById('togglePassword');

    togglePassword.addEventListener('click', function () {
      const isHidden = passwordInput.type === 'password';
      
      passwordInput.type = isHidden ? 'text' : 'password';
      this.textContent = isHidden ? 'Hide' : 'Show';
    });
  </script>
</body>
</html>