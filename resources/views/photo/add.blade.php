@include('header')
    <center>
        <form method="POST"  enctype="multipart/form-data" action="{{ route('storePhoto') }}">
            @csrf
            <input type="file" name="image"> <br /><br />
            <input type="text" name="title" placeholder="Tytuł zdjęcia"> <br />
            <textarea cols="50" rows="10" name="description">Opis zdjęcia</textarea> <br />
            <button class="btn" type="submit">Dodaj zdjęcie</button>
        </form>
    </center>
@include('footer')