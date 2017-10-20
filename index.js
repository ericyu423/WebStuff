const express = require('express'); //commond js
const app = express();

//import express from 'express'; //es2016 module
//const app = express();
//app - underline running express sever
//       express app to register tihs route handler with
//get - watch for incoming request with this method

// "/" indicate root route

// req object representing the incoming request
//res object  representing the outgoing response

app.get('/', (req, res) => {
  res.send({ hi: 'there' });
  //outgoing object res sending something out
});
//
//so, this line res.send get executed when
// "/" is sent to us

const PORT = process.env.PORT || 5000;
// look at the envirnoment and get the port it provided us to use
//envirnoment - aws/heroku...ect
//if environment return nil we use 5000
app.listen(PORT);
/*http://localhost:5000/
{"hi":"there"} */
