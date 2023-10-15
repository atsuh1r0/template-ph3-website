<x-user-layout>
  <form method="post" action="{{ route('admin.question.store', ['quizNum' => $quizNum]) }}">
    @csrf
    設問
    @if ($errors->has('text'))
    <span class="text-red-500 block">{{ $errors->first('text') }}</span>
    @endif
    <input type="text" name="text" class="block">
    選択肢①
    <input type="text" name="choice1" class="block">
    選択肢②
    <input type="text" name="choice2" class="block">
    選択肢③
    <input type="text" name="choice3" class="block">
    正解選択肢
    <select name="is_correct" class="block">
      <option value="1">①</option>
      <option value="2">②</option>
      <option value="3">③</option>
    </select>

    画像
    <input type="text" name="image" class="block">
    補足
    <input type="text" name="supplement" class="block">
    <button class="p-4 bg-blue-200" type="submit">設問新規作成</button>
  </form>
</x-user-layout>
