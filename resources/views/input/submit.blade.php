@extends('input.layout.master')

@section('form')
<h1>Input Text</h1>
    <p>Jumlah Text Input: {{ $count }}</p>
    <form method="post" action="{{ route('input.save') }}">
        @csrf
        @for ($i = 1; $i <= $count; $i++)
            <label for="text{{ $i }}">Hari ke :</label>
            <input type="text" name="hari[]" id="hari{{ $i }}">
            <label for="text{{ $i }}">Tinggi :</label>
            <input type="text" name="tinggi[]" id="tinggi{{ $i }}">
            <br>
        @endfor
        <label for="text{{ $i }}">Ingin prediksi pada hari ke berapa?</label>
            <input type="text" name="prediksi" id="prediksi">
        <button type="submit">Save</button>
    </form>
    @if(!empty($result))
        <div class="alert alert-success"> {{ $result }}</div>
    @endif
@endsection