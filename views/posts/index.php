<div class="col-xl-12">
<a href="index.php?controller=posts&action=add" type="button" class="btn btn-primary">Create new post</a>
  <table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title post</th>
        <th scope="col">Content</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($posts as $post) {
        echo '<tr>';
        echo '<td scope="row">
                ' . $post->id . '
              </td>';
        echo '<td scope="row">
              ' . $post->title . '
          </td>';
        echo '<td scope="row">
          ' . $post->content . '
        </td>';
        echo '<td scope="row">
          <a class="btn btn-warning" href="index.php?controller=posts&action=update&id=' .$post->id. '">Update</a>
          <a class="btn btn-danger" href="index.php?controller=posts&action=delete&id=' .$post->id. '">Delete</a>
        </td>';
        echo '</tr>';
    }
    ?>
    </tbody>
  </table>
</div>
