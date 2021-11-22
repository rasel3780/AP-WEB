import React from 'react'
const ClientShow = (Props) => {
    return (
        <div className="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src={Props.pic} className="img-fluid" alt="" />
        </div>
    )
}
export default ClientShow;