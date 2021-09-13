@extends('layouts.app')

@section('content')

    <div class="home-card">

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="text-center">
                    <h2 class="text-wrap">Personal Details</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('person.create') }}" ><i class="fas fa-plus-circle"></i> Add new person </a>
                </div>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="mgn">

            <table class="table table-bordered table-responsive-lg">
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Surname</th>
                    <th>Date of Birth</th>
                    <th>Status</th>
                    <th>Age</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($persons as $person)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $person->title }}</td>
                        <td>{{ $person->surname }}</td>
                        <td>{{ $person->dob }}</td>
                        <td>{{ $person->status }}</td>
                            {{
                                $age = \Carbon\Carbon::parse($person->dob)->age;
                            }}
                        <td>{{ $age }}</td>
                        <td>
                            <form action="{{ route('person.destroy', $person->id) }}" method="POST">

                                <a href="{{ route('person.show', $person->id) }}" title="show">
                                    <i class="fas fa-search-plus text-warning  fa-lg"></i>
                                </a>

                                <a href="{{ route('person.edit', $person->id) }}">
                                    <i class="fas fa-user-edit text-success fa-lg"></i>
                                </a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                    <i class="fas fa-trash-alt fa-lg text-danger"></i>
                                </button>

                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>

        </div>

        {!! $persons->links() !!}

    </div>

@endsection
