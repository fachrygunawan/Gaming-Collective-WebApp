@extends('/admin/sidenav')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Category</h1>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Tambah Category</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Category Name</span>
                <input type="text" class="form-control" placeholder="Category" aria-label="Category" aria-describedby="basic-addon1">
              </div>
        </div>
        <input type="submit" value="Add Category" class="mb-5">
    </div>
    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Category</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Game</td>
              <td>
                <a href="" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/AdminEditCategory" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
@endsection