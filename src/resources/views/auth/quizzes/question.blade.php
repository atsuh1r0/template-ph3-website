<x-user-layout>
  @if (session('message'))
  <div>
    {{ session('message') }}
  </div>
  @endif
  <h1>問題一覧</h1>
  <button class="p-4 bg-blue-200">
    <a href="{{ route('admin.question.create', $quiz->id) }}">新規作成</a>
  </button>
  <table>
    <tr>
      <th>id</th>
      <th>設問</th>
      <th>選択肢①</th>
      <th>選択肢②</th>
      <th>選択肢③</th>
      <th>編集</th>
      <th>削除</th>
    </tr>
    @foreach ($quiz->question as $question)
    <tr style="color: {{ $question->deleted_at ? 'gray' : 'black' }}">
      <td>
        {{ $question->id }}
      </td>
      <td>
        {{ $question->text }}
      </td>
      @foreach ($question->choice as $choice)
      <td>
        {{ $choice->text }}
      </td>
      @endforeach
      <td>
        <button class="p-4 bg-blue-200">
          <a href="{{ route('admin.question.edit', $question->id) }}">編集</a>
        </button>
      </td>
      <td>
        <form action="{{ route('admin.question.delete', $question->id) }}" method="post" id="deleteForm{{$question->id}}">
          @csrf
          <input type="hidden" name="quiz_id" value="{{ $question->id }}">
          <button class="deleteQuiz p-4 bg-blue-200">削除</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</x-user-layout>
<script src="{{ asset('js/quiz.js') }}"></script>
