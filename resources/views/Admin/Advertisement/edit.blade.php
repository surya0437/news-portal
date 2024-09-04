<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('advertisement.update', $advertisement->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mt-3 card-header d-flex justify-content-between">
                                <h5>Update Advertisment</h5>
                                <a href="{{ route('advertisement.index') }}"
                                    class="btn btn-primary d-flex justify-content-between align-items-center">
                                    <i class="fas fa-arrow-left"></i><span class="ml-2">Back</span>
                                </a>
                            </div>
                            <div class="card-body row">
                                <div class="form-group col-md-6">
                                    <label for="name">Company Name</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ $advertisement->name }}">
                                    @error('name')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Phone</label><span class="ml-1 text-danger">*</span>
                                    <input type="tel" class="form-control" name="phone"
                                        value="{{ $advertisement->phone }}">
                                    @error('phone')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Email</label><span class="ml-1 text-danger">*</span>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ $advertisement->email }}">
                                    @error('email')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="title">Title</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="title"
                                        value="{{ $advertisement->title }}">
                                    @error('title')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Budget</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="budget"
                                        value="{{ $advertisement->budget }}">
                                    @error('budget')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Redirect Link</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="link"
                                        value="{{ $advertisement->link }}">
                                    @error('link')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Start Date</label><span class="ml-1 text-danger">*</span>
                                    <input type="date" class="form-control" name="start_date"
                                        value="{{ $advertisement->start_date }}" />
                                    @error('start_date')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>End Date</label><span class="ml-1 text-danger">*</span>
                                    <input type="date" class="form-control" name="end_date"
                                        value="{{ $advertisement->end_date }}">
                                    @error('end_date')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile">
                                    <label class="ml-3 mr-3 custom-file-label" for="customFile">Image<span
                                            class="ml-1 text-danger">*</span></label>
                                    @error('image')
                                        <p class="mt-2 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Description</label><span class="ml-1 text-danger">*</span>
                                    <textarea class="form-control" name="description">{{ $advertisement->description }}</textarea>
                                    @error('description')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="Active"
                                            {{ $advertisement->status == 'Active' ? 'selected' : '' }}>
                                            Active</option>
                                        <option value="Inactive"
                                            {{ $advertisement->status == 'Inactive' ? 'selected' : '' }}>In Active
                                        </option>
                                        <option value="Expired"
                                            {{ $advertisement->status == 'Expired' ? 'selected' : '' }}>
                                            Expired</option>
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
