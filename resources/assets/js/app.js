require('./bootstrap');
import React from 'react';
import { render } from 'react-dom';
import { BrowserRouter as Router, Route } from 'react-router-dom'
import Main from './components/Main';
import Category from './components/Category';
import ShowBrandCarousel from './components/ShowBrandCarousel';
import TopFiveCategory from './components/TopFiveCategory';
import CategoryDetails from './components/CategoryDetails';
import SubCategory from './components/SubCategory';
import SubCategoryDetails from './components/SubCategoryDetails';
import Header from './components/Header';
import Contact from './components/Contact';
import Footer from './components/Footer';
render(
    <Router>
    <div>
    <Main/>
    <Route path="/category" component={Category}/>
    <Route path="/category-details" component={CategoryDetails}/>
    <Route path="/top-five" component={TopFiveCategory}/>
    <Route path="/sub-category" component={SubCategory}/>
    </div>
    </Router>
  , document.getElementById('header'));
