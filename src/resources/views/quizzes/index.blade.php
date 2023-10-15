<x-user-layout>
  @if (session('message'))
  <div>
    {{ session('message') }}
  </div>
  @endif
  <table>
    <tr>
      <th>id</th>
      <th>クイズ名</th>
      <th>作成日</th>
      <th>更新日</th>
      <th>カテゴリ選択</th>
    </tr>
    @foreach ($quizzes as $quiz)
    <tr>
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
          <a href="{{ route('quizzes.selectedCategory', $quiz->id) }}">選択</a>
        </button>
      </td>
    </tr>
    @endforeach
  </table>
</x-user-layout>
<script src="{{ asset('js/quiz.js') }}"></script>
