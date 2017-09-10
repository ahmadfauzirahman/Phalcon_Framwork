
<div class="container">
    <div class="col-md-4"></div>

    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel panel-heading">
                FORM INPUT
            </div>
            <div class="panel panel-body">
                <form action="<?= $this->url->get('crud/create') ?>" method="POST">
                    <div class="form-group">
                        <input class="form-control" name="username" type="text" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Input</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--view-->
<div class="col-md-4"></div>
<div class="col-md-12">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>No</td>
                <td>Username</td>
                <td>Password</td>
                <td width='20%'>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php $no= 1; ?>
            <?php foreach ($data as $v) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?= $v->username ?></td>
                    <td><?= $v->password ?></td>
                    <td>
                        <a href="<?= $this->url->get('crud/update/') ?><?= $v->id ?>" class="btn btn-primary">Update</a>
                        <a href="<?= $this->url->get('crud/delete/') ?><?= $v->id ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<div class="col-md-12">
    <div class="panel panel-footer">
        <a class="btn btn-default" href="<?= $this->url->get('index') ?>">Back</a>
    </div>
</div>