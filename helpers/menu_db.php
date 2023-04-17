<?php
require_once('connect.php');
$sql = "SELECT * FROM kranenburger.menu_items";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>
<table>
    <th>
        <h2>Menu</h2>
    </th>
<?php
foreach($result as $value)
{ ?>
        <tr>
            <td>
            <?php  echo $value['Name'];?>
            </td>
            <td>
            <?php  echo $value['Price'];?>
            </td>
            <td class="beschr">
                <br>
              <?php  echo $value['Beschrijving'];?>
            </td>
        </tr>
    <?php
}
?>
</table>