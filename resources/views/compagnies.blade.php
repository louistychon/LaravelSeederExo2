@extends('layouts.backoffice')
@section('content')
    <main class="m-5">
        <section>
            <h1>Update entry</h1>
            <table>
                <table>
                    <thead>
                        <th>NOM COMPAGNIE</th>
                        <th>RUE</th>
                        <th>NUM PORTE</th>
                        <th>CODE COMMUNE</th>
                        <th>NUM TEL</th>
                        <th>NOM CONTACT</th>
                        <th>PRENOM CONTACT</th>
                        <th>EMAIL</th>
                        <th>IMAGE</th>
                        <th>EDIT</th>
                    </thead>
                    <tbody>
                        <tr>
                            <form action="/{{ $id_show->id }}/show/update" method="post">
                                @csrf
                                @method('PUT')
                                <td><input name="nom_compagnie" type="text" value="{{ $id_show->nom_compagnie }}"></td>
                                <td><input name="rue" type="text" value="{{ $id_show->rue }}"></td>
                                <td><input name="num_porte" type="number" value="{{ $id_show->num_porte }}"></td>
                                <td><input name="code_commune" type="number" value="{{ $id_show->code_commune }}"></td>
                                <td><input name="num_tel" type="number" value="{{ $id_show->num_tel }}"></td>
                                <td><input name="nom_contact" type="text" value="{{ $id_show->nom_contact }}"></td>
                                <td><input name="prenom_contact" type="text" value="{{ $id_show->prenom_contact }}"></td>
                                <td><input name="email" type="text" value="{{ $id_show->email }}"></td>
                                <td><input name="image" type="text" value="{{ $id_show->image }}"></td>
                                <td><button type="submit">EDIT</button></td>
                            </form>
                        </tr>
                    </tbody>

                </table>
        </section>
    </main>
@endsection
