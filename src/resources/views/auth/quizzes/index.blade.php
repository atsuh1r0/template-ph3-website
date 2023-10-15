<x-user-layout>
  @if (session('message'))
  <div>
    {{ session('message') }}
  </div>
  @endif
  <h1>クイズ一覧</h1>
  <button class="p-4 bg-blue-200">
    <a href="{{ route('admin.quiz.create') }}">新規作成</a>
  </button>
  <table>
    <tr>
      <th>id</th>
      <th>クイズ名</th>
      <th>作成日</th>
      <th>更新日</th>
      <th>カテゴリ選択</th>
      <th>クイズ削除</th>
    </tr>
    @foreach ($quizzes as $quiz)
    <tr style="color: {{ $quiz->deleted_at ? 'gray' : 'black' }}">
      <td>
        {{ $quiz->id }}
      </td>
      <td>
        {{ $quiz->name }}
      </td>
      <td>
        {{ $quiz->created_at }}
      </td>
      <td>
        {{ $quiz->updated_at }}
      </td>
      <td>
        <button class="p-4 bg-blue-200">
          <a href="{{ route('admin.quizzes.selectedCategory', $quiz->id) }}">選択</a>
        </button>
      </td>
      <td>
        <form action="{{ route('admin.quiz.delete', $quiz->id) }}" method="post" id="deleteForm{{$quiz->id}}">
          @csrf
          <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
          <button class="deleteQuiz p-4 bg-blue-200">削除</button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
  <p>
    {{ $quizzes->links() }}
  </p>
</x-user-layout>
<script src="{{ asset('js/quiz.js') }}"></script>
