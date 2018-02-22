import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';
import Header from './Header';
import SubCategoryDetails from './SubCategoryDetails';
import Contact from './Contact';
import Footer from './Footer';

class SubCategory extends Component {
    render() {
        return (
          <div>
          <Header/>
          <section className="features3" id="features">
            <div className="container">
            <FilterSubCategory/>
            <SubCategoryDetails/>
            </div>
          </section>
          <ConnectBrand/>
          <Contact/>
          <Footer/>
          </div>
        );
    }
}
function FilterSubCategory(){
  return(
    <div className="container">
    <div className="row">
      <div className="col-lg-3 branch">
          <Link to="category"><a role="button" className="button">&#8249;Back to Brand</a></Link>
      </div>
      <div className="col-lg-6 text-center cat">
        <div className="feature-item centerBlock">
          <img src="/images/sub-category.png"/>
          <h5>AIR ASIA</h5>
      </div>
      </div>
      <div className="col-lg-2 social">
        <div className="btn-group">
          <button type="button" className="btn btn-primary" autofocus="autofocus"><a href=""><i className="fa fa-facebook"></i></a></button>
            <button type="button" className="btn btn-primary"><a href=""><i className="fa fa-twitter"></i></a></button>
            <button type="button" className="btn btn-primary"><a href=""><i className="fa fa-youtube"></i></a></button>
            <button type="button" className="btn btn-primary"><a href=""><i className="fa fa-instagram"></i></a></button>
        </div>
      </div>
      <div className="col-lg-1"></div>
    </div>
    </div>
  );
}
function ConnectBrand(){
  return(
    <section className="offer3" id="offer">
      <div className="container text-center">
        <span>Want to analyze more secrets about your brands?</span><br/><br/>
        <img src="/images/message.png" height="40px" width="70px"/><br/><br/>
        <a href="http://nolimit.id/contact" role="button" className="button">CONTACT US</a>
      </div>
      <div className="container text-center">
        <span>Cant find your brand here?</span><br/><br/>
        <img src="/images/brand.png" height="50px" width="60px"/><br/><br/>
        <a role="button" className="button" data-toggle="modal" data-target="#myModalHorizontal">CONNECT YOUR BRAND</a>
      </div>
    </section>
  );
}

export default SubCategory;
