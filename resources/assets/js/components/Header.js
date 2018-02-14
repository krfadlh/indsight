import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';

class Header extends Component {
    render() {
        return (
          <header className="masthead">
            <div className="logo-app text-center">
              <form id="demo-2">
                <input className="float-right" type="search" placeholder="Search"/>
              </form>
              <img className="logo-app" src="/images/logo-insight.png"/>
              <img className="logo-company float-left" src="/images/logo-company.png"/>
            </div>
          </header>
        );
    }
}
export default Header;
