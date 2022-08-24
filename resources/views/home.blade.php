@extends('layouts.backoffice')
@section('content')
    <main class="m-5">
        <section>
            <h1>All entries</h1>

            <table>
                <thead>
                    <th>ID</th>
                    <th>NOM COMPAGNIE</th>
                    <th>RUE</th>
                    <th>NUM</th>
                    <th>COMMUNE</th>
                    <th>NUM TEL</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>EMAIL</th>
                    <th>IMAGE</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </thead>
                @foreach ($compagnies as $compagnie)
                    <tr>
                        <td>{{ $compagnie->id }}</td>
                        <td>{{ $compagnie->nom_compagnie }}</td>
                        <td>{{ $compagnie->rue }}</td>
                        <td>{{ $compagnie->num_porte }}</td>
                        <td>{{ $compagnie->code_commune }}</td>
                        <td>{{ $compagnie->num_tel }}</td>
                        <td>{{ $compagnie->nom_contact }}</td>
                        <td>{{ $compagnie->prenom_contact }}</td>
                        <td>{{ $compagnie->email }}</td>
                        <td>{{ $compagnie->image }}</td>
                        <td><a href="/{{ $compagnie->id }}/show"><button type="submit">edit</button></a></td>

                        <form action="/{{ $compagnie->id }}/delete" method="post">
                            @csrf
                            @method('DELETE')
                            <td> <button type="submit">delete</button></td>
                        </form>

                    </tr>
                @endforeach

            </table>
            <h1>Add new compagnie</h1>
            <form action="/create" method="post">
                @csrf
                <div class="d-flex">
                    <div class="col-2">
                        <input type="text" name="nom_compagnie" placeholder="nom"><br><br>
                        <input type="text" name="rue" placeholder="rue"><br><br>
                        <input type="number" name="num_porte" placeholder="num_porte"><br><br>
                        <input type="number" name="code_commune" placeholder="code_commune"><br><br>
                    </div>
                    <div class="col">
                        <input type="tel" name="num_tel" placeholder="num_tel"><br><br>
                        <input type="text" name="nom_contact" placeholder="nom_contact"><br><br>
                        <input type="text" name="prenom_contact" placeholder="prenom_contact"><br><br>
                        <input type="text" name="email" placeholder="email"><br><br>
                        <input type="text" name="image" placeholder="image"><br><br>
                        <button type="submit">Add</button>
                    </div>
                </div>

                <h1>Delete all compagnies</h1>
                <form action="/deleteall" method="post">
                    @csrf
                    <button type="submit" style="color:red">delete all</button>
                </form>


            </form>

        </section>
    </main>
@endsection
