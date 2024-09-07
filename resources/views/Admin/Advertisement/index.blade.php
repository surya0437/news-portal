<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="mt-3 card-header d-flex justify-content-between">
                            <h5>Advertisements</h5>
                            <a href="{{ route('advertisement.create') }}"
                                class="btn btn-primary d-flex justify-content-between align-items-center">
                                <i class="fas fa-plus"></i><span class="ml-2">Add</span>
                            </a>
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
                                            <th>Phone</th>
                                            <th>Title</th>
                                            <th>Budget</th>
                                            <th>Link</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($advertisements)
                                            @foreach ($advertisements as $index => $advertisement)
                                                <tr>
                                                    <td>
                                                        {{ ++$index }}
                                                    </td>
                                                    <td>
                                                        <img alt="Logo" src="/{{ $advertisement->image }}"
                                                            width="70">
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $advertisement->name }}
                                                    </td>
                                                    <td>
                                                        {{ $advertisement->phone }}
                                                    </td>
                                                    <td>
                                                        {{ $advertisement->title }}
                                                    </td>
                                                    <td>
                                                        {{ $advertisement->budget }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ $advertisement->link }}"
                                                            target="_blank"><u>{{ $advertisement->title }}</u></a>

                                                    </td>
                                                    <td>
                                                        @if ($advertisement->status == 'Active')
                                                            <span
                                                                class="badge badge-success badge-shadow">{{ $advertisement->status }}</span>
                                                        @elseif($advertisement->status == 'Inactive')
                                                            <span
                                                                class="badge badge-warning badge-shadow">{{ $advertisement->status }}</span>
                                                        @else
                                                            <span
                                                                class="badge badge-danger badge-shadow">{{ $advertisement->status }}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <a href="{{ route('advertisement.edit', $advertisement->id) }}"
                                                                class="mr-3 btn btn-primary">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="{{ route('advertisement.destroy', $advertisement->id) }}"
                                                                class="btn btn-danger" data-confirm-delete="true"><i
                                                                    class="fas fa-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
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
