<x-user-layout>
  <form method="post" action="{{ route('admin.question.update', ['questionNum' => $question->id]) }}">
    @csrf
    <input type="hidden" name="question_id" value="{{ $question->id }}">
    @if ($errors->has('text'))
    <span class="text-red-500 block">{{ $errors->first('text') }}</span>
    @endif
    <textarea name="text" cols="50" rows="10" class="block">{{ $question->text }}</textarea>
    <button class="p-4 bg-blue-200" type="submit">編集完了</button>
  </form>
</x-user-layout>
