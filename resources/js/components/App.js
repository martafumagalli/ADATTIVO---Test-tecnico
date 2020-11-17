import React, { useState } from 'react';
import ReactDOM from 'react-dom';
import { res, red, green } from '../const/const';
import Button from './Button';

const App = () => {

  const [list, setList] = useState(res);
  const [order, setOrder] = useState('asc');

  const clickHandler = () => {
    setList(_.shuffle(res));
    setOrder((Math.random() < 0.5) ? 'asc' : 'desc');
  }

  return(
    <section className="row" style={(order === 'asc') ? { background: red } : { background: green }}>
      <div className="col-1"></div>
      <div className="col-10 text-center">
        <h2 className="section-title mt-5">Sezione 4</h2>
        <h3 className="my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br className="d-none d-xl-inline"/>eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
        <p>Nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Duis aute irure dolor in reprehenderit esse <br className="d-none d-xl-inline"/>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt <br className="d-none d-xl-inline"/>mollit anim id est laborum.</p>
        <div className="mx-xl-5">
          <ul className="d-flex my-5 mx-xl-5">
            { 
              _.orderBy(list.slice(0, 3), ['number'],[order]).map(el => {                
                return(
                  <div className="col-4" key={el.number}>
                    <li><img src={el.icon} alt="icon"/></li>
                    <li className="mt-3 title">{el.title}</li>
                    <li className="subtitle d-none d-md-block px-xl-5">{el.subtitle}</li>
                  </div>
                )
              })
            }
          </ul>
        </div>
        <Button changeTextHandler={clickHandler}/>
      </div>
      <div className="col-1 my-auto text-vertical d-none d-lg-inline">|&nbsp;&nbsp;|&nbsp;&nbsp;|&nbsp;&nbsp;|&nbsp;&nbsp;<span>SEZIONE 4 &nbsp;&nbsp;</span><span className="line"></span></div>
    </section>
  )
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}
