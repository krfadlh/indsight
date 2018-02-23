import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';
import Header from './Header';
import ShowBrandCarousel from './ShowBrandCarousel';
import TopFiveCategory from './TopFiveCategory';
import CategoryDetails from './CategoryDetails';
import Contact from './Contact';
import Footer from './Footer';
import Modal from './Modal';

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
    <div>
    <section className="offer2" id="offer">
      <div className="container text-center">
        <span>Want to analyze more secrets about your brands</span><br/><br/>
        <img src="/images/message.png" height="40px" width="70px"/><br/><br/>
        <a href="http://nolimit.id/contact" role="button" className="button">CONTACT US</a>
      </div>
      <div className="container text-center">
        <span>Cant find your brand here</span><br/><br/>
        <img src="/images/brand.png" height="50px" width="60px"/><br/><br/>
        <a role="button" className="button" data-toggle="modal" data-target="#myModal">CONNECT YOUR BRAND</a>
      </div>
    </section>

    <div className="modal fade" id="myModal" role="dialog">
    <div className="modal-dialog modal-lg">
      <div className="modal-content">
        <div className="modal-header">
          <button type="button" className="close" data-dismiss="modal">&times;</button>
        </div>

        <div className="modal-body">
        <form action="">
        <div className="row">
          <div className="col-30">
            <label for="name">Name</label>
          </div>
          <div className="col-70">
            <input type="text" id="name" name="Name" placeholder="Your name.."/>
          </div>
        </div>
        <div className="row">
          <div className="col-30">
            <label for="email">Email</label>
          </div>
          <div className="col-70">
            <input type="text" id="email" name="email" placeholder="Your email.."/>
          </div>
        </div><br/>

        <div className="row">
          <div className="col-30">
            <label for="company">Company Name</label>
          </div>
          <div className="col-70">
            <input type="text" id="company" name="company" placeholder="Your company name.."/>
          </div>
        </div>
        <div className="row">
          <div className="col-30">
            <label for="category">Category</label>
          </div>
          <div className="col-70">
            <select id="category" name="category">
              <option value="brand">Brand</option>
              <option value="publicfigure">Public Figure</option>
              <option value="organization">Oragnization</option>
              <option value="media">Media</option>
            </select>
          </div>
        </div>

        <div className="row">
          <div className="col-30">
            <label for="subcategory">Sub category</label>
          </div>
          <div className="col-70">
            <select id="subcategory" name="subcategory">
              <option value="brand">Brand</option>
              <option value="publicfigure">Public Figure</option>
              <option value="organization">Oragnization</option>
              <option value="media">Media</option>
            </select>
          </div>
        </div>

      </form>
        </div>

        <div className="modal-footer">
          <button type="button" className="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    </div>
  );
}
export default Category;
