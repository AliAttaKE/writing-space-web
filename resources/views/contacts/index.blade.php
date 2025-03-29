@extends('custom_layout.master')

@section('main_content')

<style>
    .color_set {
        color: white;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }
    th {
        background-color: #444;
    }
    td {
        background-color: #222;
    }
    a {
        color: #17a2b8;
        text-decoration: none;
        margin-right: 10px;
    }
    a:hover {
        text-decoration: underline;
    }
    form {
        display: inline;
    }
    button {
        padding: 5px 10px;
        border: none;
        background-color: #dc3545;
        color: white;
        cursor: pointer;
    }
    button:hover {
        background-color: #c82333;
    }
</style>

<h2 class="color_set">Contacts</h2>
<a href="{{ route('admin.contacts.create') }}" style="color: #28a745; font-weight: bold;">Add Contact</a>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<table>
    <thead>
        <tr>
            <th class="color_set">Name</th>
            <th class="color_set">Address</th>
            <th class="color_set">Email</th>
            <th class="color_set">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td class="color_set">{{ $contact->name }}</td>
            <td class="color_set">{{ $contact->address }}</td>
            <td class="color_set">{{ $contact->email }}</td>
            <td class="color_set">
                <a href="{{ route('admin.contacts.edit', $contact->id) }}">Edit</a>
                <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
