@extends('layouts.navbar')

@section('content')
We create a form to add a new category, and then we add a route to handle the form submission.
    <div class="container font-main">

        <div>
           We create a form that will submit to the route `add_categories` and we create a text
           input field that will accept a string. We also create a button that will submit the form.
            <form action="{{ route('add_categories') }}" method="post">
                @csrf
                <input type="text" class="form-control" name="name" placeholder="ชื่อหมวดหมู่">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="mt-2 btn btn-success">บันทึก</button>
                </div>
            </form>
        </div>

        <h1 class="font-main text-center">หมวดหมู่ต้นกระบองเพชร</h1>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">รหัส</th>
                    <th scope="col">Name</th>
                    <th scope="col">สร้างเมื่อ</th>
                    <th scope="col">อัพเดทเมื่อ</th>
                </tr>
            </thead>
The @if (count() > 0) is a conditional statement that checks if the categories array has
any values. If it does, then the code inside the @if statement will be executed.
            @if (count($categories) > 0)
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>{{ $category->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            @endif
        </table>
    </div>
@endsection
