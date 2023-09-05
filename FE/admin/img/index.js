// let sanpham = [
//     {
       
//         "Ten": "Dép Cao Gót MWC - 4334 Dép Cao Gót 2 Quai ",
//         "Gia": "195.000",
//         "Hinhanh": "./img/cg1.jpg",       
//     },
//     {
       
//         "Ten": "Giày cao gót MWC NUCG- 4400 Sandal Cao Gót",
//         "Gia": "195.000",
//         "Hinhanh": "./img/cg2.jpg",       
//     },
//     {
       
//         "Ten": "Giày cao gót MWC NUCG- 4401 Sandal Cao Gót",
//         "Gia": "195.000",
//         "Hinhanh": "./img/cg3.jpg",       
//     },
//     {
       
//         "Ten": "Giày cao gót MWC NUCG- 4393 Cao Gót Nữ Da",
//         "Gia": "195.000",
//         "Hinhanh": "./img/cg4.jpg",       
//     },

// ]

// let htmlProduct1 = "";
// for (let i = 0; i < sanpham.length; i++) {
//      console.log( );
//     htmlProduct1 += ` <div class="col l-3 m-6 c-12">
//         <div class="item_product">
//         <a href="../html/chitietsanpham.php" class="item_product_img">
//             <img src="${sanpham[i].Hinhanh}" alt="" />
//         </a>
//         <a href="../html/chitietsanpham.php"class="item_product_content">
//             <div class="item_product_detail">
//             <p class="title">
//             ${sanpham[i].Ten}
//             </p>
//             <div class="price"> ${sanpham[i].Gia}đ</div>
//             </div>
//         </a>
//         </div>
//     </div>`;
// }
// document.getElementById("product_print1").innerHTML = htmlProduct1;


let sanpham2 = [
    {
        // "id": 01,
        "Ten": "Dép Cao Gót MWC - 4334 Dép Cao Gót 2 Quai",
        "Gia": "250.000",
        "Hinhanh": "./img/bl1.jpg",       
    },
    {
        // "id": 02,
        "Ten": "Giày cao gót MWC NUCG- 4400 Sandal Cao Gót",
        "Gia": "270.000",
        "Hinhanh": "./img/bl2.jpg",       
    },
    {
        // "id": 03,
        "Ten": "Giày cao gót MWC NUCG- 4401 Sandal Cao Gót",
        "Gia": "190.000",
        "Hinhanh": "./img/bl3.jpg",       
    },
    {
        // "id": 04,
        "Ten": "Giày cao gót MWC NUCG- 4393 Cao Gót Nữ Da",
        "Gia": "230.000",
        "Hinhanh": "./img/bl4.jpg",       
    },

]

let htmlProduct2 = "";
for (let i = 0; i < sanpham2.length; i++) {
     console.log( );
    htmlProduct2 += ` <div class="col l-3 m-6 c-12">
        <div class="item_product">
        <a href="../html/chitietsanpham.php" class="item_product_img">
            <img src="${sanpham2[i].Hinhanh}" alt="" />
        </a>
        <a href="../html/chitietsanpham.php"class="item_product_content">
            <div class="item_product_detail" >
            <p class="title">
            ${sanpham2[i].Ten}
            </p>
            <div class="price"> ${sanpham2[i].Gia}đ</div>
            </div>
        </a>
        </div>
    </div>`;
}
document.getElementById("product_print2").innerHTML = htmlProduct2;

let sanpham3 = [
    {
        // "id": 01,
        "Ten": "Dép Cao Gót MWC - 4334 Dép Cao Gót 2 Quai",
        "Gia": "250.000",
        "Hinhanh": "./img/gn1.jpg",       
    },
    {
        // "id": 02,
        "Ten": "Giày cao gót MWC NUCG- 4400 Sandal Cao Gót",
        "Gia": "270.000",
        "Hinhanh": "./img/gn2.jpg",       
    },
    {
        // "id": 03,
        "Ten": "Giày cao gót MWC NUCG- 4401 Sandal Cao Gót",
        "Gia": "190.000",
        "Hinhanh": "./img/gn3.jpg",       
    },
    {
        // "id": 04,
        "Ten": "Giày cao gót MWC NUCG- 4393 Cao Gót Nữ Da",
        "Gia": "230.000",
        "Hinhanh": "./img/gn4.jpg",       
    },
   

]

let htmlProduct3 = "";
for (let i = 0; i < sanpham3.length; i++) {
    
    htmlProduct3 += ` <div class="col l-3 m-6 c-12">
        <div class="item_product">
        <a href="../html/chitietsanpham.php" class="item_product_img">
            <img src="${sanpham3[i].Hinhanh}" alt="" />
        </a>
        <a href="../html/chitietsanpham.php"class="item_product_content">
            <div class="item_product_detail" >
            <p class="title">
            ${sanpham3[i].Ten}
            </p>
            <div class="price"> ${sanpham3[i].Gia}đ</div>
            </div>
        </a>
        </div>
    </div>`;
}


document.getElementById("product_print3").innerHTML = htmlProduct3;



//  scroll Y
(function() {
    let header = document.getElementById("header")
    let login = document.querySelector(".login")
    let register = document.querySelector(".register")
          window.addEventListener("scroll",(event)=>{
        var scroll_y = this.scrollY; 
        if(scroll_y!==0){
            login.style.color = "black"
            register.style.color = "black"
            header.style.background ="white"
            header.style.boxShadow = "0 0 2px rgba(0,0,0,0.2)"
        }else if( scroll_y === 0 ) {
            header.style.boxShadow = "none"
            header.style.background ="none"
           
        }
    })
 })();
  


 // bars mobi 
 (function() {
    // thanh header
    let bars = document.querySelector(".bars")
    let overplay = document.querySelector(".overplay")
    let container_bar = document.querySelector(".container_bar")  
    bars.addEventListener("click",(e)=>{
     if(bars){
        overplay.classList.remove("none")   
     }  
    })
   overplay.addEventListener("click" , (e) =>{
    if(overplay){

        overplay.classList.add("none")
    }
   }  )
   container_bar.addEventListener("click" , (e) =>{
    e.stopPropagation()
   }  )
  })();


  (function(){
    
  })();

  let btnbuycart = document.querySelector(".product_details-btn-buycard")
  
  console.log(btnbuycart);
    btnbuycart.onclick = ()=>{
    }
    