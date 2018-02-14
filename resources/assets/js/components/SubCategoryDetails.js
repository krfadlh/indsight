import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';

class SubCategoryDetails extends Component {
    render() {
        return (
          <div className="row">
            <div className="box1 effect3">
              <h4>FOLLOWER GROWTH</h4>
             </div>

             <div className="box1 effect3">
               <h4>ENGAGEMENT RATE</h4>
              </div>

            <div className="box effect2">
              <h4>5 TOP PEOPLE</h4>
             </div>

             <div className="box effect2">
               <h4>WORDCLOUD</h4>
              </div>
          </div>
        );
    }
}
export default SubCategoryDetails;
