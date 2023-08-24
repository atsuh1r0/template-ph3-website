<x-user-layout>
  <form method="post" action="{{ route('question.update', ['questionNum' => $question->id]) }}">
    @csrf
    <input type="hidden" name="question_id" value="{{ $question->id }}">
    <textarea name="text" cols="50" rows="10">{{ $question->text }}</textarea>
    <button type="submit">編集完了</button>
  </form>
</x-user-layout>
