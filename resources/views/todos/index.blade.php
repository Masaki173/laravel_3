@extends('layouts.todos')
@section('title', 'todos.index')

@section('content')
 @if (count($errors) > 0)
 <div>
   <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
   </ul>
 </div>
@endif
 <table>
  <tr><th>ID</th><th>コメント</th><th>状態</th></tr>
  @foreach ($items as $item)
  <tr>
   <td>{{$loop->iteration}}</td>
   <td>{{$item->content}}</td>
  <td>
   <form>
   <button>作業中</button>
   </form>
  </td>
  <td>
   <form action="todos/del/{{$item->id}}" method="post">
   @csrf
   <input type="hidden" name="id">
   <button type="submmit">削除</button>
   </form>
  </td>
  </tr>
  @endforeach
 </table>
<h1>新規タスクの追加</h1>
 <form action="todos/create" method ="post">
  @csrf
  <input type="text" name="content"></input>
  <button type=submit>追加</button>
 </form>
 @endsection