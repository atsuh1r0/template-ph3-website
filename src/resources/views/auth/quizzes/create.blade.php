<x-user-layout>
  <form method="post" action="{{ route('admin.quiz.store') }}">
    @csrf
    クイズ名
    @if ($errors->has('name'))
    <span class="text-red-500 block">{{ $errors->first('name') }}</span>
    @endif
    <input type="text" name="name" class="block">
    <button class="p-4 bg-blue-200" type="submit">クイズ新規作成</button>
  </form>
</x-user-layout>
