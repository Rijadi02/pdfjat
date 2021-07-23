<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleFormControlFile1">Selekto nje pdf</label>
        <input type="file" class="form-control-file" name="imageFile" id="exampleFormControlFile1">

    </div>

    <button type="submit" class="btn btn-primary mb-2">Shto PDF</button>

</form>





<table class="table">
    <thead>
        <tr>

            <th scope="col">ID</th>
            <th scope="col">PDF link</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($pdfs as $pdf)
            <tr>
                <td>{{ $pdf->id }}</td>
                <td><a class="btn btn-primary" href="/storage/{{ $pdf->pdf }}">PDF-ja</a></td>
            </tr>
        @endforeach

    </tbody>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
