<table border="1">
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Description</td>
    </tr>
    <?php foreach($listing as $row):?>
    <tr>
        <td><?=$row['id']?></td>
        <td><?=$row['title']?></td>
        <td><?=$row['description']?></td>
    </tr>
    <?php endforeach; ?>
</table>