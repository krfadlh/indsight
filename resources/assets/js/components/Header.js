import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Header extends Component {
    render() {
        return (
          <div className="container text-center">
            <div className="intro">
              <span className="title1">UNCOVER</span><br />
              <span className="title2">YOUR BRANDS</span><br />
              <span className="title3">SECRETS</span><br />
              <div className="desc">
                <span>Using Indsight, you can analyze many secrets about your brands within seconds.</span><br />
                <span>Thousands of data that you never know before will help your brand growth</span>
              </div>
            </div>
          </div>
        );
    }
}
export default Header;
