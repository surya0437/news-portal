<x-app-layout>
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="mt-3 card-header d-flex justify-content-between">
                            <h5>Posts</h5>
                                <a href="{{ route('post.create') }}"
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
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Categories</th>
                                            <th>Author</th>
                                            <th>Meta Keywords</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($posts)
                                            @foreach ($posts as $post)
                                                <tr>
                                                    <td class="align-middle">
                                                        1
                                                    </td>
                                                    <td class="align-middle">
                                                        <img alt="Logo" src="/{{ $post->image }}"
                                                            width="70">
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $post->title }}
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $post->categories->pluck('title')->implode(', ') }}
                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $post->author }}

                                                    </td>
                                                    <td class="align-middle">
                                                        {{ $post->meta_keywords }}

                                                    </td>
                                                    <td class="align-middle">
                                                        @if ($post->status == 'Approved')
                                                            <span
                                                                class="badge badge-success badge-shadow">{{ $post->status }}</span>
                                                        @elseif($post->status == 'Pending')
                                                            <span
                                                                class="badge badge-warning badge-shadow">{{ $post->status }}</span>
                                                        @else
                                                            <span
                                                                class="badge badge-danger badge-shadow">{{ $post->status }}</span>
                                                        @endif
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <a href="{{ route('post.edit', $post->id) }}"
                                                                class="mr-3 btn btn-primary">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="{{ route('post.destroy', $post->id) }}"
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
