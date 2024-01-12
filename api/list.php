<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.0/cdn/themes/light.css" />
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.0/cdn/shoelace-autoloader.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles/main.css">
    <title>Document</title>
</head>
<body class='bg-[antiquewhite] h-screen'>
    <div class='fixed flex w-full justify-between mt-4'>
        <img src='./assets/cdti.png' class='absolute left-16 w-32 h-32'>
        <div class='flex mx-auto items-center justify-center'>
            <div class='bg-blue-800 p-6 rounded-full mt-6'>
                <span class='text-white text-xl'>ระบบยืม-คืน อุปกรณ์สโตร์ สาขาเทคโนโลยีสารสนเทศ</span>
            </div>
        </div>
    </div>
    </div>


    <div class='flex flex-col justify-center items-center h-full'>
    <div class="container">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">รายการที่ยืมอุปกรณ์</th>
      <th scope="col">จำนวน</th>
     </tr>
  </thead>
  <tbody id="tbody1">
  </tbody>
</table>
  </div>

<div class='flex mt-4 gap-4'>
    
        <sl-button variant="primary" href="index.php">ย้อนกลับ</sl-button>
        <sl-button variant="primary" href="list_2.php">ถัดไป</sl-button>
</div>

</body>
<script type="module">
var stdNo = 0;
var tbody = document.getElementById('tbody1');

function AddItemToTable(list,number){
    let trow = document.createElement("trow");
    let td1 = document.createElement('td');
    let td2 = document.createElement('td');
    let td3 = document.createElement('td');
 
    td1.innerHTML= ++stdNo;
    td2.innerHTML= list;
    td3.innerHTML= number;
    

    trow.appendChild(td1);
    trow.appendchild(td2);
    trow.appendChild(td3);

    tbody.appendChild(trow);
}

function AddAllItemsToTable(datatest){
    stdNo=0;
    tbody.innerHTML="";
    datatest.foreach(element => {
        AddItemToTable(element.id,element.list,element.number);
    });
}

import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-analytics.js";
  const firebaseConfig = {
    apiKey: "AIzaSyBNsg5Gs5szrUYSgCaLYuqGCHtJVYyoQKI",
    authDomain: "store-test-tester01.firebaseapp.com",
    databaseURL: "https://store-test-tester01-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "store-test-tester01",
    storageBucket: "store-test-tester01.appspot.com",
    messagingSenderId: "127078847345",
    appId: "1:127078847345:web:7e3e54a3b1d53877e5dcd0",
    measurementId: "G-SCSS8DMN7T"
  };


  const app = initializeApp(firebaseConfig);
  import { getdatabase, ref, child, OnValue, get }
  from "https://store-test-tester01-default-rtdb.asia-southeast1.firebasedatabase.app/";
   const db = getdatabase();

function GetAllDataonce(){
    const dbRef = ref(db);
    get(child(dbRef, "datatest"))
    .then((snapshot)=>{
        var students =[];
    snapshot.forEach(childSnapshot=> {
        students.push(childSnapshot.val());
});
    AddAllItemsToTable(students);
    });
}

window.onload = GetAllDataonce;

</script>
</html>
