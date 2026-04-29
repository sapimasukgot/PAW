function greeting(){
    console.log("File JavaScript berhasil terhubung dan fungsi dijalankan!");
    const time = new Date();
    const hours = time.getHours();
    const minutes = time.getMinutes();

    const getTime = (hours*60) + minutes;

    let output;
    if(getTime >= 1 && getTime < 660){
        output = "Selamat Pagi";
    } else if(getTime >= 660 && getTime < 840){
        output = "Selamat Siang";
    } else if(getTime >= 840 && getTime < 1080){
        output = "Selamat Sore";
    } else {
        output = "Selamat Malam";
    }
    const elemen = document.getElementById("tes");
    if(elemen) {
        elemen.innerText = output;
    }
    return output;
}
let pesan = greeting();
console.log(pesan);