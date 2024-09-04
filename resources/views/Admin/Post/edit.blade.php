<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mt-3 card-header d-flex justify-content-between">
                                <h5>Update Post</h5>
                                <a href="{{ route('post.index') }}"
                                    class="btn btn-primary d-flex justify-content-between align-items-center">
                                    <i class="fas fa-arrow-left"></i><span class="ml-2">Back</span>
                                </a>
                            </div>
                            <div class="card-body row">

                                <div class="form-group col-md-6">
                                    <label for="title">News Title</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="title"
                                        value="{{ $post->title }}">
                                    @error('title')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 ">
                                    <label for="category">Category</label>
                                    <select name="categories[]" class="form-control select2" multiple = "">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $post->categories->contains($category->id) ? 'selected' : '' }}>
                                                {{ $category->title }} ({{ $category->nep_title }})
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('categories')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror

                                </div>


                                <div class="form-group col-md-12 custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">

                                    <label class="ml-3 mr-3 custom-file-label" for="customFile">Image</label>
                                    @error('image')
                                        <p class="mt-2 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <img alt="image" src="/{{ $post->image }}" width="200">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Content</label><span class="ml-1 text-danger">*</span>
                                    <textarea class="form-control summernote" name="content">{{ $post->content }}</textarea>
                                    @error('content')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Author</label>
                                    <input type="text" class="form-control" name="author"
                                        value="{{ $post->author }}">
                                    @error('author')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Meta Keywords</label>
                                    <input type="text" class="form-control" name="meta_keywords"
                                        value="{{ $post->meta_keywords }}" />
                                    @error('meta_keywords')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" name="meta_description">{{ $post->meta_description }}</textarea>
                                    @error('meta_description')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="Approved"
                                            {{ $post->status == 'Approved' ? 'selected' : '' }}>
                                            Approved</option>
                                        <option value="Pending"
                                            {{ $post->status == 'Pending' ? 'selected' : '' }}>Pending
                                        </option>
                                        <option value="Rejected"
                                            {{ $post->status == 'Rejected' ? 'selected' : '' }}>
                                            Rejected</option>
                                    </select>
                                    @error('status')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                            </div>
                            <div class="text-right card-footer">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
