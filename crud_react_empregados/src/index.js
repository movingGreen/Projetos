import React from 'react';
import ReactDOM from 'react-dom/client';
import Formulario from './Formulario';
import './index.css';

 function Tela() { 
  
  
  return (
    <React.StrictMode>
      <Formulario />
    </React.StrictMode>
  );
}


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<Tela />);