<style>
.bottom-appbar {
  height: 45px;
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 20;
}
.bottom-appbar .tabs {
  display: flex;
  flex-direction: row;
  height: 100%;
}
.bottom-appbar .tabs .tab {
  background-color: #fff;
  width: 33.4%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  border-top: 1px solid #eee;
  box-shadow: 1x 1x 3px #ccc, -1px -1px 3px #ccc;
  font-size: 24px;
}
.bottom-appbar .tabs .tab--left {
    text-align: center;
    display: grid;
    font-size: 18px;
    grid-template-rows: 1fr auto;
    align-items: end;
  width: 100%;
  border-top-right-radius: 30px;
  /* border-top: 1px solid rgba(167, 161, 161, 0.69); */
  box-shadow: 0px 6px 7px 0px rgba(23, 23, 23, 0.28);
}
.bottom-appbar .tabs .tab--right {
    text-align: center;
    display: grid;
    font-size: 18px;
    grid-template-rows: 1fr auto;
    align-items: end;
  width: 100%;
  border-top-left-radius: 30px;
  /* border-top: 1px solid rgba(167, 161, 161, 0.69); */
  box-shadow: 15px 4px 15px 0px rgba(23, 23, 23, 0.28);
}
.bottom-appbar .tabs .tab--fab {
  width: 120px;
  height: 100%;
  background: transparent;
  border: none;
  display: flex;
}
.bottom-appbar .tabs .tab--fab .top {
    display: grid;
    justify-content: center;
  width: 100%;
  height: 50%;
  border-bottom-left-radius: 100px;
  border-bottom-right-radius: 100px;
  background-color: transparent;
  box-shadow: 0px 30px 0px 25px #fff;
  /* border-bottom: 1px solid rgba(167, 161, 161, 0.69); */
  display: flex;
}
.bottom-appbar .tabs .tab span {
  font-size: 12px;
}
.bottom-appbar .tabs .tab i {
  font-size: 24px;
}
.bottom-appbar .tabs .tab.is-active {
  color: #fd9d97;
}
.bottom-appbar .tabs .fab {
  border-radius: 50%;
  background-color: #fe989c;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 60px;
  height: 60px;
  font-weight: bold;
  font-size: 22px;
  color: #fff;
  position: relative;
  justify-content: center;
  transform: translate(2px, -60%);
}

</style>


<div class="bottom-appbar">
    <div class="tabs">
    <a class="tab is-active tab--left" href="orders.php">
        <span><i class="fa fa-th-list" aria-hidden="true"></i></span>
        <span>Orders</span>
    </a>
    <a class="tab tab--fab" href="index.php">
        <div class="top">
          <div class="fab">
          <i class="fa fa-home" aria-hidden="true"></i>
          </div>
        </div>
    </a>
    <a class="tab is-active tab--right" href="cart.php">
        <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span><span>Cart</span>
      </div>
    </a>
  </div>