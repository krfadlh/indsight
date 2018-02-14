import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';

class Footer extends Component {
    render() {
        return (
          <footer>
            <div class="container">
              <p>Copyright &copy; 2017 indsight. All screenshoots &copy; their respective owners</p>
            </div>
          </footer>
        );
    }
}
export default Footer;
