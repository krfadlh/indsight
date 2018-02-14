import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';

class TopFiveCategory extends Component {
    render() {
        return (
          <section className="sub-category" id="sub-category">
           <div className="container">
             <div className="row">
             <div className="col-lg-12 text-center cat">
               <div className="feature-item centerBlock">
                 <h5>TOP 5 AIRLINES</h5>
               </div>
             </div>

             <div className="flex-container">
               <div>
                 <div className="floating-box"><img src="/images/airasia.png" height="50px" width="60px"/></div>
                 <div className="floating-box"><span>Air Asia</span></div>
               </div>
               <div>
                 <div className="floating-box"><img src="/images/garuda.jpg" height="50px" width="60px"/></div>
                 <div className="floating-box"><span>Garuda</span></div>
               </div>
               <div>
                 <div className="floating-box"><img src="/images/airasia.png" height="50px" width="60px"/></div>
                 <div className="floating-box"><span>Air Asia</span></div>
               </div>
               <div>
                 <div className="floating-box"><img src="/images/garuda.jpg" height="50px" width="60px"/></div>
                 <div className="floating-box"><span>Garuda</span></div>
               </div>
               <div>
                 <div className="floating-box"><img src="/images/airasia.png" height="50px" width="60px"/></div>
                 <div className="floating-box"><span>Air Asia</span></div>
               </div>
             </div>

           </div>
           </div>
         </section>

        );
    }
}

export default TopFiveCategory;
