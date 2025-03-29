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
        background-color: #f4f4f4;
    }
    input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button {
        margin-top: 10px;
        padding: 10px 15px;
        border: none;
        background-color: #28a745;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }
    button:hover {
        background-color: #218838;
    }
</style>

<h2 class="color_set">Edit Contact</h2>

<form action="{{ route('admin.contacts.update', $contact->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <table>
        <tr>
            <th>Name:</th>
            <td><input type="text" name="name" value="{{ $contact->name }}" required></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td><input type="text" name="address" value="{{ $contact->address }}" required></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><input type="email" name="email" value="{{ $contact->email }}" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
                <button type="submit">Update</button>
            </td>
        </tr>
    </table>

</form>

@endsection
