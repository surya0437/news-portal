<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card">
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4 class="mt-3">Create Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="nep_title">Nepali Title</label>
                                    <input type="text" name="nep_title" class="form-control"
                                        value = "{{ old('nep_title') }}">
                                    @error('nep_title')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror

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
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $index => $category)
                                        <tr>
                                            <td scope="row">{{ ++$index }}</td>
                                            <td>{{ $category->title }}</td>
                                            <td>{{ $category->nep_title }}</td>
                                            <td>{{ $category->slug }}</td>
                                            <td>
                                                <span
                                                    class="badge {{ $category->status == 1 ? 'badge-success' : 'badge-warning' }} badge-warning badge-shadow">
                                                    {{ $category->status == 1 ? 'Active' : 'In Active' }}
                                                </span>
                                            </td>


                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{ route('category.edit', $category->id) }}"
                                                        class="mr-3 btn btn-primary">
                                                        <i class="fas fa-edit"></i>
                                                    </a>

                                                    <a href="{{ route('category.destroy', $category->id) }}"
                                                        class="btn btn-danger" data-confirm-delete="true"><i
                                                            class="fas fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-app-layout>
