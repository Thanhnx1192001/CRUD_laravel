@extends('layouts.app')


<form action="/CRUD/search" method="get">
    <input type="text" name="search" placeholder="Tìm kiếm nhân viên...">
    <button type="submit">Tìm kiếm</button>
</form>

<a href="/CRUD/create">Add</a>
<table >
    <thead>
        <tr>
            <th>ID</th>
            <th>FullName</th>
            <th>Email</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
    @foreach($StaffList as $row)
        <tr>
            <td>{{$row->id}}</td>
            <td><a href="/CRUD/read/{{$row->id}}">{{$row->fullName}}</a></td>
            <td>{{$row->email}}</td>
            <td><a href="/CRUD/edit/{{$row->id}}">Edit</a>
            <form method="POST" action="/CRUD/delete/{{$row->id}}" onsubmit="return ConfirmDelete( this )">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
        </td>
            
        </tr>
        @endforeach
    </tbody>
</table>