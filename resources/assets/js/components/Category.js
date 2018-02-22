import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';
import Header from './Header';
import ShowBrandCarousel from './ShowBrandCarousel';
import TopFiveCategory from './TopFiveCategory';
import CategoryDetails from './CategoryDetails';
import Contact from './Contact';
import Footer from './Footer';

class Category extends Component {
    render() {
        return (
          <div>
          <Header/>
          <section className="features2" id="features">
            <div className="container">
            <FilterCategory/>
            <ShowBrandCarousel/>
            </div>
          </section>
          <TopFiveCategory/>
          <CategoryDetails/>
          <ConnectBrand/>
          <Contact/>
          <Footer/>
          </div>
        );
    }
}
function FilterCategory(){
  return(
      <div className="row">
        <div className="col-lg-3 branch">
              <Link to="main"><a role="button" className="button">&#8249;Back to Home</a></Link>
        </div>
        <div className="col-lg-6 text-center cat">
          <div className="feature-item centerBlock">
              <div className="logo">
              <h5>BRAND</h5>
              <img src="/images/brand.png"/>
              </div>
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
  );
}
function ConnectBrand(){
  return(
    <section className="offer2" id="offer">
      <div className="container text-center">
        <span>Want to analyze more secrets about your brands</span><br/><br/>
        <img src="/images/message.png" height="40px" width="70px"/><br/><br/>
        <a href="http://nolimit.id/contact" role="button" className="button">CONTACT US</a>
      </div>
      <div className="container text-center">
        <span>Cant find your brand here</span><br/><br/>
        <img src="/images/brand.png" height="50px" width="60px"/><br/><br/>
        <a role="button" className="button" data-toggle="modal" data-target="#myModalHorizontal">CONNECT YOUR BRAND</a>
      </div>
    </section>
  );
}
export default Category;
