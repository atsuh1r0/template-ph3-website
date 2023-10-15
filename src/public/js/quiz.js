'use strict';

{
  const deleteQuiz = document.getElementsByClassName('deleteQuiz');
  Array.from(deleteQuiz).forEach(element => {
    element.addEventListener('click', e => {
      e.preventDefault();
      let quizId = element.previousElementSibling.getAttribute('value');
      if (confirm('本当に削除しますか？')) {
        document.getElementById('deleteForm' + quizId).submit();
      }
    });
  });
}
