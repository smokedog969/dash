<!DOCTYPE html>
<html>
    <head>
        <title>DashBoard</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/958e3c8ff2.js"></script>
        <script src="assets/js/commonActions.js"></script>
        
    </head>

    <body>
        <div class="grid-container">
            <div class="menu-icon">
             <i class="fas fa-bars header__menu"></i>
           </div>
            
           <header class="header">
             <div class="header__search">Search...</div>
             <div class="header__avatar">
                 <img src="assets/images/portrait.jpeg" alt="user">
             </div>
           </header>
         
           <aside class="sidenav">
             <div class="sidenav__close-icon">
               <i class="fas fa-times sidenav__brand-close"></i>
             </div>
             <ul class="sidenav__list">
                 
             
               <li class="sidenav__list-item">Item One</li>
               <li class="sidenav__list-item">Item Two</li>
               <li class="sidenav__list-item">Item Three</li>
               <li class="sidenav__list-item">Item Four</li>
               <li class="sidenav__list-item">Item Five</li>
             </ul>
           </aside>
         
           <main class="main">
             <div class="main-header">
               <div class="main-header__heading">Hello User</div>
               <div class="main-header__updates">Recent Items</div>
             </div>
         
             <div class="main-overview">
               <div class="overviewcard">
                 <div class="overviewcard__icon">Overview</div>
                 <div class="overviewcard__info">Card</div>
               </div>
               <div class="overviewcard">
                 <div class="overviewcard__icon">Overview</div>
                 <div class="overviewcard__info">Card</div>
               </div>
               <div class="overviewcard">
                 <div class="overviewcard__icon">Overview</div>
                 <div class="overviewcard__info">Card</div>
               </div>
               <div class="overviewcard">
                 <div class="overviewcard__icon">Overview</div>
                 <div class="overviewcard__info">Card</div>
               </div>
             </div>
         
             <div class="main-cards">
               <div class="card">Card</div>
               <div class="card">Card</div>
               <div class="card">Card</div>
             </div>
           </main>
         
           <footer class="footer">
             <div class="footer__copyright">&copy; 2019 STS APPS</div>
             <div class="footer__signature">Made in Berlin by STS</div>
           </footer>
         </div>
    </body>
</html>