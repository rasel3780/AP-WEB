import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import {BrowserRouter as Router, Route,Switch} from 'react-router-dom';
import Top from './Components/Top';
import Home  from './Components/Home';
import Student from './Components/Student';
import StudentDetails from './Components/StudentDetails';
ReactDOM.render(
  <React.StrictMode>
   <Router>
        <Top/>
        <Switch>
        <Route exact path="/">
              <Home/>
            </Route>
            <Route exact path="/student">
              <Profile/>
            </Route>
            <Route exact path="/studentdetails">
              <Contact/>
            </Route>
        </Switch>
        <Footer/>
    </Router>
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
