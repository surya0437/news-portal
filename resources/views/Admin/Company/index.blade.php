<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="mt-3 card-header d-flex justify-content-between">
                            <h5>Create Company</h5>
                            @if (!$company)
                                <a href="{{ route('company.create') }}"
                                    class="btn btn-primary d-flex justify-content-between align-items-center">
                                    <i class="fas fa-plus"></i><span class="ml-2">Add</span>
                                </a>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>Logo</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($company)
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <img alt="Logo" src="/{{ $company->logo }}" width="100">
                                                </td>
                                                <td class="align-middle">
                                                    {{ $company->name }}
                                                </td>
                                                <td>
                                                    {{ $company->email }}
                                                </td>
                                                <td>
                                                    {{ $company->phone }}
                                                </td>
                                                <td>
                                                    @if ($company->status == 1)
                                                        <span class="badge badge-success badge-shadow">Active</span>
                                                    @else
                                                        <span class="badge badge-warning badge-shadow">In Active</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="{{ route('company.edit', $company->id) }}"
                                                            class="mr-3 btn btn-primary">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="{{ route('company.destroy', $company->id) }}"
                                                            class="btn btn-danger" data-confirm-delete="true"><i
                                                                class="fas fa-trash"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
