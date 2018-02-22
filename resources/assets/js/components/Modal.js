import React from "react";
import Warper from "./Warper";
import modal from "./modal.css";
import Popup from "reactjs-popup";
//

const contentStyle = {
  maxWidth: "600px",
  width: "90%",
  height: "200px"
};

const CustomModal = () => (
  <Popup
    trigger={
    <section className="connect" id="connect">
      <div className="text-center">
        <span>Cant find your brand here</span><br/><br/>
        <a href="" role="button" className="button" data-toggle="modal" data-target="#myModalHorizontal">CONNECT YOUR BRAND</a>
      </div>
    </section>
  }
    modal
    contentStyle={contentStyle}
  >
    {close => (
      <div className="modal">
        <a className="close" onClick={close}>
          &times;
        </a>
        <div className="header"> Modal Title </div>
        <div className="content">
          {" "}
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, a
          nostrum. Dolorem, repellat quidem ut, minima sint vel eveniet
          quibusdam voluptates delectus doloremque, explicabo tempore dicta
          adipisci fugit amet dignissimos?
          <br />
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur
          sit commodi beatae optio voluptatum sed eius cumque, delectus saepe
          repudiandae explicabo nemo nam libero ad, doloribus, voluptas rem
          alias. Vitae?
        </div>
        <div className="actions">
          <Popup
            trigger={<button className="button"> Menu Demo </button>}
            position="top center"
            closeOnDocumentClick
            contentStyle={{ padding: "0px", border: "none" }}
          >
            <div className="menu">
              <div className="menu-item"> Menu item 1</div>
              <div className="menu-item"> Menu item 2</div>
              <div className="menu-item"> Menu item 3</div>
              <Popup
                trigger={<div className="menu-item"> sup Menu </div>}
                position="right top"
                on="hover"
                closeOnDocumentClick
                mouseLeaveDelay={300}
                mouseEnterDelay={0}
                contentStyle={{ padding: "0px", border: "none" }}
                arrow={false}
              >
                <div className="menu">
                  <div className="menu-item"> item 1</div>
                  <div className="menu-item"> item 2</div>
                  <div className="menu-item"> item 3</div>
                </div>
              </Popup>
              <div className="menu-item"> Menu item 4</div>
            </div>
          </Popup>
          <button
            className="button"
            onClick={() => {
              console.log("modal closed ");
              close();
            }}
          >
            close modal
          </button>
        </div>
      </div>
    )}
  </Popup>
);

export default CustomModal;
