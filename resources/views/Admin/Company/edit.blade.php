<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mt-3 card-header d-flex justify-content-between">
                                <h5>Update Company</h5>
                                <a href="{{ route('company.index') }}"
                                    class="btn btn-primary d-flex justify-content-between align-items-center">
                                    <i class="fas fa-arrow-left"></i><span class="ml-2">Back</span>
                                </a>
                            </div>
                            <div class="card-body row">
                                <div class="form-group col-md-6">
                                    <label for="name">Company Name</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="name" value="{{ $company->name }}">
                                    @error('name')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Email</label><span class="ml-1 text-danger">*</span>
                                    <input type="email" class="form-control" name="email" value="{{ $company->email }}">
                                    @error('email')
                                    <p class="mt-1 text-danger">{{ $message }}</p>
                                @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Phone</label><span class="ml-1 text-danger">*</span>
                                    <input type="tel" class="form-control" name="phone" value="{{ $company->phone }}">
                                     @error('phone')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Address</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="address" value="{{ $company->address }}">
                                     @error('address')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company CEO</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="ceoName" value="{{ $company->ceo_name }}">
                                     @error('ceoName')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Registration No.</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="regNo" value="{{ $company->reg_no }}">
                                     @error('regNo')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Pan No.</label><span class="ml-1 text-danger">*</span>
                                    <input type="text" class="form-control" name="panNo" value="{{ $company->pan_no }}">
                                     @error('panNo')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Founded Year</label><span class="ml-1 text-danger">*</span>
                                    <input type="number" class="form-control" name="foundedYear" min="1900"
                                        max="2099" step="1" value="{{ $company->founded_year }}"/>
                                        @error('foundedYear')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="{{ $company->facebook }}">
                                     @error('facebook')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Company Youtube</label>
                                    <input type="text" class="form-control" name="youtube" value="{{ $company->youtube }}">
                                     @error('youtube')
                                        <p class="mt-1 text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12 custom-file">
                                    <input type="file" name="logo" class="custom-file-input" id="customFile">
                                    <label class="ml-3 mr-3 custom-file-label" for="customFile">Company Logo<span
                                            class="ml-1 text-danger">*</span></label>
                                            @error('logo')
                                            <p class="mt-2 text-danger">{{ $message }}</p>
                                            @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <img alt="image" src="/{{ $company->logo }}" width="200">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description">{{ $company->description }}</textarea>
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
