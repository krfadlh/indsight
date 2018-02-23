import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Modal extends React.Component{
    render(){
      return(
        <div>
          <Modalbox/>
        </div>
      );
    }
}
function Modalbox(){
  return(
    <div>
    <section className="connect" id="connect">
      <div className="text-center">
        <span>Cant find your brand here</span><br/><br/>
        <a href="" role="button" className="button" data-toggle="modal" data-target="#myModal">CONNECT YOUR BRAND</a>
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
export default Modal;
