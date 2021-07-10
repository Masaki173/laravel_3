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
<label><input type="radio" name="radiostat" onclick="displayTodo()" checked>すべて</label>
<label><input type="radio" name="radiostat" onclick="displayTodo()" id ="radioUndone" >作業中</label>
<label><input type="radio" name="radiostat" onclick="displayTodo()" id="radioDone">完了</label>
 <table>
  <tr><th>ID</th><th>コメント</th><th>状態</th></tr>
  @foreach ($items as $item)
<tr class="tasks">
   <td>{{$loop->iteration}}</td>
   <td>{{$item->content}}</td>
   <td>
   <form action="/todos/update/{{$item->id}}" method="post">
   @method('put')
   @csrf
   @if ($item->status === 0)
   <input type="hidden" value="1" name="status">
   <button type="submit" class="working">作業中</button>
   @elseif ($item->status === 1)
   <input type="hidden"  value="0" name="status">
   <button type="submit" class="finish">完了</button> 
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