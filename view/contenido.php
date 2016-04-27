* {
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  background: #2d2c41;
  font-family: 'Open Sans', Arial, Helvetica, Sans-serif, Verdana, Tahoma;
}

ul { list-style-type: none; }

a {
  color: #b63b4d;
  text-decoration: none;
}

/** =======================
 * Contenedor Principal
 ===========================*/


h1 {
  color: #FFF;
  font-size: 24px;
  font-weight: 400;
  text-align: center;
  margin-top: 80px;
}

h1 a {
  color: #c12c42;
  font-size: 16px;
}

.accordion {
  width: 100%;
  max-width: 360px;
  margin: 30px auto 20px;
  background: #FFF;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}

.accordion .link {
  cursor: pointer;
  display: block;
  padding: 15px 15px 15px 42px;
  color: #4D4D4D;
  font-size: 14px;
  font-weight: 700;
  border-bottom: 1px solid #CCC;
  position: relative;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li:last-child .link { border-bottom: 0; }

.accordion li i {
  position: absolute;
  top: 16px;
  left: 12px;
  font-size: 18px;
  color: #595959;
  -webkit-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  transition: all 0.4s ease;
}

.accordion li i.fa-chevron-down {
  right: 12px;
  left: auto;
  font-size: 16px;
}

.accordion li.open .link { color: #b63b4d; }

.accordion li.open i { color: #b63b4d; }

.accordion li.open i.fa-chevron-down {
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}

/**
 * Submenu
 -----------------------------*/


.submenu {
  display: none;
  background: #444359;
  font-size: 14px;
}

.submenu li { border-bottom: 1px solid #4b4a5e; }

.submenu a {
  display: block;
  text-decoration: none;
  color: #d9d9d9;
  padding: 12px;
  padding-left: 42px;
  -webkit-transition: all 0.25s ease;
  -o-transition: all 0.25s ease;
  transition: all 0.25s ease;
}

.submenu a:hover {
  background: #b63b4d;
  color: #FFF;
}
