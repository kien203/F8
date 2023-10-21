function showhideNav(thisId) {
  var board = document.getElementsByClassName('Board-Infor');
  for (var i = 0; i < board.length; i++) {
    if (board[i].id === thisId) {
      if (board[i].style.display === 'none') {
        board[i].style.display = 'block';
      } else {
        board[i].style.display = 'none';
      }
    } else {
      board[i].style.display = 'none';
    }
  }
}