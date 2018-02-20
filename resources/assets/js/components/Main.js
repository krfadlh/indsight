import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import { Link } from 'react-router-dom';
import Contact from './Contact';
import Footer from './Footer';

class Main extends Component {
    render() {
        return (
          <div>
          <Header/>
          <section className="features" id="features">
          <div className="container">
          <Filter/>
          <CategoryProduct/>
          <TopProduct/>
          </div>
          </section>
          <ConnectBrand/>
          <Contact/>
          <Footer/>
          </div>
        );
    }
}
function Header(){
  return(
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
function Filter(){
  return(
        <div className="row">
          <div className="col-lg-1 v-center">
            <label>Sort by:</label>
          </div>
          <div className="col-lg-4">
            <form>
              <div className="form-group">
                <select className="form-control select-box">
                  <option>Januari 2018</option>
                  <option>Desember 2017</option>
                  <option>November 2017</option>
                  <option>Oktober 2017</option>
                </select>
              </div>
            </form>
          </div>
          <div className="col-lg-4">
            <form>
              <div className="form-group">
                <select className="form-control select-box">
                  <option>Fastest Follower Growth</option>
                  <option>Most Followed Account</option>
                </select>
              </div>
            </form>
          </div>
          <div className="col-lg-2">
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
function CategoryProduct(){
  return(
    <div className="row top-product">
      <div className="col-lg-3">
        <div className="feature-item centerBlock">
          <h5>BRAND</h5>
          <Link to="/category"><img src="/images/1.png"/></Link>
        </div>
      </div>
      <div className="col-lg-3">
        <div className="feature-item centerBlock">
          <h5>PUBLIC FIGURE</h5>
              <Link to="/category"><img src="/images/2.png"/></Link>
        </div>
      </div>
      <div className="col-lg-3">
        <div className="feature-item centerBlock">
          <h5>ORGANIZATION</h5>
            <Link to="/category"><img src="/images/3.png"/></Link>
        </div>
      </div>
      <div className="col-lg-3">
        <div className="feature-item centerBlock">
          <h5>MEDIA</h5>
              <Link to="/category"><img src="/images/4.png"/></Link>
        </div>
      </div>
    </div>
  );
}
function TopProduct(){
  return(
    <div>
    <div className="row product1">
      <div className="col-sm-1">
          <Link to="category"><img src="/images/logo.jpg"/></Link>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
      <div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div><div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div><div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
    </div>

    <div className="row product">
      <div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
      <div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
      <div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
      <div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
    </div>


    <div className="row product">
      <div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
      <div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div><div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div><div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
    </div>


    <div className="row product">
      <div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
      <div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div><div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div><div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
    </div>


    <div className="row product">
      <div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
      <div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div><div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div><div className="col-sm-1">
        <img src="/images/logo.jpg"/>
      </div>
      <div className="col-sm-2">
        <span className="product-title">Panasonic</span><br/>
        <span className="product-growth">17.81</span>
        <span className="product-amount">11.2</span>
      </div>
    </div>

    <div className="row detail">
      <div className="col-sm-3 text-center">
      <Link to="category"><a role="button" className="button">see more</a></Link>
      </div>
      <div className="col-sm-3 text-center">
        <Link to="category"><a role="button" className="button">see more</a></Link>
      </div>
      <div className="col-sm-3 text-center">
        <Link to="category"><a role="button" className="button">see more</a></Link>
      </div>
      <div className="col-sm-3 text-center">
      <Link to="category"><a role="button" className="button">see more</a></Link>
      </div>
    </div>
    </div>
  );
}
function ConnectBrand(){
  return(
    <section className="connect" id="connect">
      <div className="text-center">
        <span>Cant find your brand here</span><br/><br/>
        <a href="" role="button" className="button" data-toggle="modal" data-target="#myModalHorizontal">CONNECT YOUR BRAND</a>
      </div>
    </section>
  );
}
export default Main;
