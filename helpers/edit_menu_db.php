<?php
require('connect.php');
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
            <?php echo $value['Id'];?>
            <?php  echo $value['Name'];?>
            </td>
            <td>
            <?php  echo $value['Price'];?>
            </td>
            <td>
                <a href="CRUD/edit.php?id=<?php echo $value["Id"]; ?>">
                 <button class="btn-update"> <p><i class="fas fa-pen"></i> Update</p></button>   
                </a>
                <a href="CRUD/delete.php?id=<?php echo $value["Id"]; ?>">
                 <button class="btn-delete"> <p><i class="fas fa-trash-alt"></i> Delete</p></button>   
                </a>
            </td>
        </tr>
    <?php
}
?>
</table>