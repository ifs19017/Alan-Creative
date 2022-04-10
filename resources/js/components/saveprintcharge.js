import React from 'react';
import ReactDOM from 'react-dom'; 
    
function SavePrintCharge() { 

    const shoot = (a) => {
        alert(a);
    }

    var frame = document.getElementById("billFrame").contentWindow;

    const print = () => {
        frame.focus();
        frame.print();
    }

    var biltot = document.getElementById("totalbill").value;
    
    let popupcharge = "Total Charge Rp "+ biltot + "!";
    let tekscharge = "Charge Rp " + biltot + "!";

    return (
        <div>
            <div class="row mt-4 text-center">
                <div class="col-6 mx-0">
                    <div class="row">
                        <button class="btn btn-info col-12 py-2 mx-auto" onClick={() => shoot("Saved!")}>
                        <h5>Save Bill</h5>
                        </button>
                    </div>
                </div>
                <div class="col-6 mx-0">
                    <div class="row">
                        <button class="btn btn-info col-12 py-2 mx-auto" onClick={print}>
                            <h5>Print Bill</h5>
                        </button>
                    </div>
                </div>            
            </div> 
            <div class="row text-center">
                <button class="btn btn-primary col-2 py-2"></button>
                <button class="btn btn-primary col-10 py-2" onClick={() => shoot(popupcharge)}>
                    <h4> {tekscharge} </h4>
                </button>
            </div>
        </div>
    );
}

ReactDOM.render(<SavePrintCharge />, document.getElementById('saveprintcharge'));