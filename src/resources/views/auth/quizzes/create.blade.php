<x-user-layout>
  <form method="post" action="{{ route('admin.quiz.store') }}">
    @csrf
    クイズ名
    <input type="text" name="name" class="block">
    <button class="p-4 bg-blue-200" type="submit">クイズ新規作成</button>
  </form>
</x-user-layout>
