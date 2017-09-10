<div class="container">
    <div class="col-md-4"></div>

    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel panel-heading">
                FORM EDIT
            </div>
            <div class="panel panel-body">
                <form action="{{ url('crud/edit')}}" method="POST">
                <input type="hidden" name="id" value="{{ data.id }}" >
                    <div class="form-group">
                    <input class="form-control" name="username" type="text" placeholder="Username" value="{{ data.username }}" >
                    </div>
                    <div class="form-group">
                    <input class="form-control" name="password" type="password" placeholder="Password" value="{{ data.password }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                    