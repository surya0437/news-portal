<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('advertisement.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mt-3 card-header d-flex justify-content-between">
                                <h5>Create Advertisment</h5>
                                <a href="{{ route('advertisement.index') }}"
                                    class="btn btn-primary d-flex justify-content-between align-items-center">
                                    <i class="fas fa-arrow-left"></i><span class="ml-2">Back</span>
                                </a>
                            </div>
                            <div class="card-body row">
                                <div class="form-group col-md-6">
                                    <label for="name">Company Name</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Phone</label><span class="ml-1 text-danger">*</span>
                                    <input type="tel" class="form-control" name="phone"
                                        value="{{ old('phone') }}">
                                    @error('phone')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Email</label><span class="ml-1 text-danger">*</span>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title">Title</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="title"
                                        value="{{ old('title') }}">
                                    @error('title')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Budget</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="budget"
                                        value="{{ old('budget') }}">
                                    @error('budget')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Redirect Link</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="link"
                                        value="{{ old('link') }}">
                                    @error('link')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Start Date</label><span class="ml-1 text-danger">*</span>
                                    <input type="date" class="form-control" name="start_date"
                                        value="{{ old('start_date') }}" />
                                    @error('start_date')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>End Date</label><span class="ml-1 text-danger">*</span>
                                    <input type="date" class="form-control" name="end_date"
                                        value="{{ old('end_date') }}">
                                    @error('end_date')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <!-- Changed from 'logo' to 'image' -->
                                    <label class="ml-3 mr-3 custom-file-label" for="customFile">Image<span
                                            class="ml-1 text-danger">*</span></label>
                                    @error('image')
                                        <p class="mt-2 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Description</label><span class="ml-1 text-danger">*</span>
                                    <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                                    @error('description')
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
