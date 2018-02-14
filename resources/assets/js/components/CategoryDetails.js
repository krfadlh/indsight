import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';

class CategoryDetails extends Component {
    render() {
        return (
          <section className="chart" id="chart">
            <div className="container">
              <div className="row">
                <div className="box1 effect3">
                    <h4>FOLLOWER GROWTH</h4>
                 </div>

                 <div className="box1 effect3">
                   <h4>ENGAGEMENT RATE</h4>
                  </div>

                <div className="box effect2">
                  <h3>5 TOP PEOPLE</h3>
                 </div>

                 <div className="box effect2">
                   <h3>WORDCLOUD</h3>
                  </div>
              </div>
            </div>
          </section>
        );
    }
}
export default CategoryDetails;
