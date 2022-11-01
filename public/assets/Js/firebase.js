 // Import the functions you need from the SDKs you need
 import { initializeApp } from "https://www.gstatic.com/firebasejs/9.12.1/firebase-app.js";
 import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.12.1/firebase-analytics.js";
 // TODO: Add SDKs for Firebase products that you want to use
 // https://firebase.google.com/docs/web/setup#available-libraries

 // Your web app's Firebase configuration
 // For Firebase JS SDK v7.20.0 and later, measurementId is optional
 const firebaseConfig = {
   apiKey: "AIzaSyD2l7DEWqi0qdV-cFMl9zpGiuDaDtZEJfc",
   authDomain: "donation-dashboard.firebaseapp.com",
   databaseURL: "https://donation-dashboard-default-rtdb.firebaseio.com",
   projectId: "donation-dashboard",
   storageBucket: "donation-dashboard.appspot.com",
   messagingSenderId: "439071211218",
   appId: "1:439071211218:web:4f7650b734d296274b370b",
   measurementId: "G-66DVJKR5WM"
 };

 // Initialize Firebase
 const app = initializeApp(firebaseConfig);
 const analytics = getAnalytics(app);