@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Buat Resep Baru</h1>

    <form action="{{ route('recipes.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Judul Resep</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="instructions">Instruksi Memasak</label>
            <textarea class="form-control" id="instructions" name="instructions" rows="5" required></textarea>
        </div>

        <div class="form-group">
            <label for="category_id">Kategori</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Pilih Kategori</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cooking_time">Waktu Memasak (menit)</label>
            <input type="number" class="form-control" id="cooking_time" name="cooking_time" required>
        </div>

        <div class="form-group">
            <label for="servings">Porsi</label>
            <input type="number" class="form-control" id="servings" name="servings" required>
        </div>

        <h3>Bahan-bahan</h3>
        <div id="ingredients">
            <div class="form-group ingredient">
                <input type="text" class="form-control" name="ingredients[0][name]" placeholder="Nama Bahan" required>
                <input type="number" class="form-control" name="ingredients[0][quantity]" placeholder="Jumlah" required>
                <input type="text" class="form-control" name="ingredients[0][unit]" placeholder="Satuan" required>
                <button type="button" class="btn btn-danger remove-ingredient">Hapus</button>
            </div>
        </div>
        <button type="button" class="btn btn-primary" id="add-ingredient">Tambah Bahan</button>

        <button type="submit" class="btn btn-success mt-3">Simpan Resep</button>
    </form>
</div>

@section('scripts')
<script>
    let ingredientIndex = 1;

    document.getElementById('add-ingredient').addEventListener('click', function() {
        const ingredientsDiv = document.getElementById('ingredients');
        const newIngredientDiv = document.createElement('div');
        newIngredientDiv.classList.add('form-group', 'ingredient');
        newIngredientDiv.innerHTML = `
            <input type="text" class="form-control" name="ingredients[${ingredientIndex}][name]" placeholder="Nama Bahan" required>
            <input type="number" class="form-control" name="ingredients[${ingredientIndex}][quantity]" placeholder="Jumlah" required>
            <input type="text" class="form-control" name="ingredients[${ingredientIndex}][unit]" placeholder="Satuan" required>
            <button type="button" class="btn btn-danger remove-ingredient">Hapus</button>
        `;
        ingredientsDiv.appendChild(newIngredientDiv);
        ingredientIndex++;
    });

    document.getElementById('ingredients').addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-ingredient')) {
            e.target.parentElement.remove();
        }
    });
</script>
@endsection

@endsection