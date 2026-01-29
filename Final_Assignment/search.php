<?php
if (isset($_POST['name'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'product_db');
    $name = $_POST['name'];

    $sql = "SELECT * FROM products WHERE name LIKE '%$name%' AND display = 1";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $profit = $row['selling_price'] - $row['buying_price'];
    ?>
    <tr>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $profit; ?></td>
        <td><a href="edit_product.php?id=<?php echo $row['id']; ?>">edit</a></td>
        <td><a href="delete_product.php?id=<?php echo $row['id']; ?>">delete</a></td>
    </tr>
    <?php } 
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>SEARCH</title>
</head>
<body>

<fieldset style="width: 400px;">
    <legend><b>SEARCH</b></legend>
    <input type="text" id="search" name="search">
    <button type="button" onclick="searchData()">Search By Name</button>
    <hr>
    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NAME</th>
                <th>PROFIT</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody id="result">
           
        </tbody>
    </table>
</fieldset>

<script>
    function searchData() {
        var name = document.getElementById('search').value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("result").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "search.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("name=" + name);
    }
</script>

</body>
</html>
