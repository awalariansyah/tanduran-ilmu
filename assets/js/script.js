function openSidebar(a) {
    let el = document.getElementsByClassName('sidebar');
    let er = document.getElementsByClassName('backdrop');
    el[0].style.transform = 'translateX(-320px)';
    er[0].style.display = 'block';
}

function closeSidebar(w) {
    let el = document.getElementsByClassName('sidebar');
    let er = document.getElementsByClassName('backdrop');
    el[0].style.transform = 'translateX(320px)';
    er[0].style.display = 'none';
}

function openModal(t) {
    let el = document.getElementsByClassName('modal');
    el[0].style.display = 'block';
    el[0].firstElementChild.src = t;
}

function closeModal(x) {
    x.style.display = 'none';
}

function changeSide(a) {
    let menu = document.getElementsByClassName('mm');
    for (let i = 0; i < menu.length; i++) {
        menu[i].className = 'mm'
    }
    menu[a].classList.add('menuclick');
}

function m() {
    let extensions = ["jpg", "jpeg", "png"];
    let image_file = document.forms[0].berkas.value;
    let image_size = document.forms[0].berkas.files[0].size;
    let image_length = document.forms[0].berkas.value.length;
    let pos = image_file.lastIndexOf('.') + 1;
    let ext = image_file.substring(pos, image_length);
    let final_ext = ext.toLowerCase();

    for (i = 0; i < extensions.length; i++) {
        if (extensions[i] == final_ext) {
            if(image_size > 1048576){
                alert("Ukuran gambar terlalu besar, batas ukuran gambar adalah 1 MB");
                return false;
            }else{
            return true;
            }
        }
    }
    alert("Tolong menggunakan format gambar yang didukung sebagai berikut: " + extensions.join(', ') + ".");
    return false;
}

function n(e){
    let a = e.fullname.value;
    let b = e.username.value;
    let c = e.tree.value;

    if(!/^[a-z A-Z]*$/g.test(a) || a.trim() == '' || a.trim().length < 3){
        alert("Tolong masukan nama dengan benar");
   		return false;
    }

    if (/\s/g.test(b)){
        alert("Nama pengguna tidak boleh mengandung spasi.");
        return false;
    }
    
    if(!/^[a-z A-Z]*$/g.test(c)){
        alert("Masukan nama pohon dengan benar.");
        return false;
    }
    
return true;	
}
