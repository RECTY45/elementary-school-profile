@extends('dashboard.layouts.index')

@section('title', 'Galeri')

@section('content')
    <main id="main" class="main">
        <x-datatable.title title="Galeri" pretitle="List Galeri anda berada disini." />

        <x-alert />

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <div class="row justify-content-center" style="row-gap: 12px; column-gap: 12px">
                                <form action="{{ route('galeri.store') }}" method="POST" class="col-12 mt-3"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="d-flex align-items-center justify-content-between">
                                        <input type="file" name="image" id="imageInput" class="form-control w-75"
                                            required>
                                        <button type="submit" class="btn btn-primary my-3">
                                            Tambah Galeri
                                        </button>
                                    </div>
                                </form>

                                @foreach ($rows as $data)
                                    <div class="card mb-0 col-6 col-lg-3">
                                        <img src="{{ 'storage/' . $data->image }}" class="img-fluid rounded"
                                            style="object-fit: cover; width: 100%; height: 100%" />
                                        <div class="card-footer border-top-0 bg-white d-flex justify-content-end px-0 py-2">
                                            <form action="{{ route('galeri.delete', $data->id) }}" method="POST"
                                                class="delete-form">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{-- {{ $rows->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteForms = document.querySelectorAll('.delete-form');
            deleteForms.forEach(form => {
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
