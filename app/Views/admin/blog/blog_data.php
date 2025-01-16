<?php foreach ($blogs as $blog): ?>
    <tr>
        <th scope="row"><?= $blog['id'] ?></th>
        <td><?= $blog['title'] ?></td>
        <td><?= $blog['description'] ?></td>
        <td><a class="text-secondary edt-blog" data-id="<?= $blog['id'] ?>" data-title="<?= $blog['title'] ?>" data-description="<?= $blog['description'] ?>"><i class="material-icons me-4" style="font-size:25px">edit</i></a><a class="text-secondary dlt-blog" data-id="<?= $blog['id'] ?>"><i class="material-icons" style="font-size:25px">delete</i></a></td>
    </tr>
<?php endforeach; ?>