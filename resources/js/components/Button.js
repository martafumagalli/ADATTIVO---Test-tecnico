import React from 'react';
import PropTypes from 'prop-types';

const Button = ({changeTextHandler}) => {
  return(
    <div>
      <button className="btn shadow mb-5" onClick={changeTextHandler}>
        RANDOMIZER
      </button>
    </div>
  )
}

export default Button;

Button.propTypes = {
  changeTextHandler: PropTypes.func.isRequired
}