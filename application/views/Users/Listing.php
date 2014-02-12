<table class="table table-striped table-bordered table-condensed">
    <thead>
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listing as $row):?>
            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['firstname']?></td>
                <td><?=$row['lastname']?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
 
<a class="btn btn-small btn-success" href="/users/edit/">Add User</a>