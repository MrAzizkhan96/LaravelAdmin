@extends('backend.layouts.index')
@section('content')
    <div class="content-wrapper">
        <section>
            <div class="content">
                <div class="container">
                    <h2 class="mb-3 mt-3">Məqsədlərimiz</h2>
                    <div class="card-header mt-0">
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-append">
                                    <a href="{{ route('our_goal.create') }}"><i class="fa fa-plus"
                                            style="font-size:24px"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @elseif($message = Session::get('error'))
                            <div class="alert alert-danger">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Şəkil</th>
                                    <th scope="col">Başlıq</th>
                                    <th scope="col">Alt başlıq</th>
                                    <th scope="col">Məzmun</th>
                                    <th scope="col">Funksiyalar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($our_goals as $our_goal)
                                    <tr scope="row">
                                        <td>{{ $our_goal->id }}</td>
                                        <td><img src="{{ asset('frontend/our_goals/' . $our_goal->image) }}" alt=""
                                                height="100" width="100"></td>
                                        <td>{{ $our_goal->title }}</td>
                                        <td>{{ $our_goal->subtitle }}</td>
                                        <td>{{ $our_goal->content }}</td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <a href="{{ route('our_goal.show', $our_goal->id) }}">
                                                        <button class="btn btn-primary btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Bax"><i
                                                                class="fa fa-eye"></i></button>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="{{ route('our_goal.edit', $our_goal->id) }}">
                                                        <button class="btn btn-success btn-sm rounded-0" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Yenilə"><i
                                                                class="fa fa-edit"></i></button>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form action="{{ route('our_goal.destroy', $our_goal->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger btn-sm rounded-0" type="submit"
                                                            data-toggle="tooltip" data-placement="top" title="Sil"><i
                                                                class="fa fa-trash"></i></button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>


@stop
