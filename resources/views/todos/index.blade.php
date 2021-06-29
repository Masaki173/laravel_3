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
   <form action="/todos/update/{{$item->id}}" method="post">
   @method('put')
   @csrf
   @if ($item->status === 0)
   <input type="hidden" name="status" value="1">
   <button type="submit">作業中</button>
   @elseif ($item->status === 1)
   <input type="hidden" name="status" value="0">
   <button type="submit">完了</button>  
   @endif
   </td>
   </form>
      <td>
  <form action="/todos/del/{{$item->id}}" method="post">
   @csrf
  <input type="hidden" name="id">
  <button type="submit">削除</button>
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