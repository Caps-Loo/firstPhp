/* eslint-disable react/prop-types */ 
import { useState } from 'react';

function Header({ author }) {
  return <h1>Belajar React {author ? author : 'Gua'}</h1>;
}

function App() {
  const [likes, setLikes] = useState(0);

  function handleClick() {
    setLikes(likes + 1);
  }

  return (
    <div>
      <Header />
      <button onClick={handleClick}>Like ({Likes})</button>
    </div>
  );
}

export default App;
