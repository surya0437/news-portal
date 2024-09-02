<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form action="{{ route('category.update', $category->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mt-3 card-header d-flex justify-content-between">
                                <h5>Update Category</h5>
                                <a href="{{ route('category.index') }}"
                                    class="btn btn-primary d-flex justify-content-between align-items-center">
                                    <i class="fas fa-arrow-left"></i><span class="ml-2">Back</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" name="title"
                                        value="{{ $category->title }}">
                                    @error('title')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="nep_title">Nepali Title</label>
                                    <input type="text" name="nep_title" class="form-control"
                                        value = "{{ $category->nep_title }}">
                                    @error('nep_title')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" name="slug" class="form-control"
                                        value = "{{ $category->slug }}">
                                    @error('slug')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>In Active
                                        </option>
                                    </select>
                                    @error('status')
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
            </div>
        </div>
    </section>
</x-app-layout>
