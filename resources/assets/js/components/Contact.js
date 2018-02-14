import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';

class Contact extends Component {
    render() {
        return (
          <section className="contact" id="contact">
            <div className="row">
            <div className="col-sm-4 text-center">
              <span>Contact us</span><br/><br/>
              <span className="bold">customer@nolimitid</span>
            </div>
            <div className="col-sm-4 text-center">
              <div className="container">
                <ul className="list-inline list-social">
                  <span>Follow us</span><br/><br/>
                  <li className="list-inline-item social-facebook">
                    <a href="https://www.facebook.com/NoLimitID/"  target="_blank">
                      <i className="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li className="list-inline-item social-twitter">
                    <a href="https://twitter.com/NoLimitID"  target="_blank">
                      <i className="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li className="list-inline-item social-youtube">
                    <a href="#"  target="_blank">
                      <i className="fa fa-youtube"></i>
                    </a>
                  </li>
                  <li className="list-inline-item social-instagram">
                    <a href="https://www.instagram.com/nolimitid/" target="_blank">
                      <i className="fa fa-instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div className="col-sm-4 text-center">
              <span>Our websites</span><br/><br/>
              <a href="https://www.nolimit.id/" target="_blank"><span className="bold">wwwnolimitid</span></a>
            </div>
          </div>
          </section>
        );
    }
}
export default Contact;
