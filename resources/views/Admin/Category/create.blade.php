<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <form>
                            <div class="card-header">
                                <h4 class="mt-3">Create Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title" required="">
                                    <span class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="nepaliTitle">Nepali Title</label>
                                    <input type="text" class="form-control" required="">
                                    <span class="text-danger"></span>

                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" name="slug">
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="pt-0 text-right card-footer">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mt-3">News Categories</h4>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Nepali Title</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Sports</td>
                                        <td>खेलकुद</td>
                                        <td>sports</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="" class="mr-2 text-white btn btn-success"><i
                                                        class="fas fa-edit"></i></a>
                                                <form action="" method="post">
                                                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
