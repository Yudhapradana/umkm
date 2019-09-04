var room = 1;

function kegiatan_fields() {

    room++;
    var objTo = document.getElementById('kegiatan_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass" + room);
    var rdiv = 'removeclass' + room;
    divtest.innerHTML = '<div class="row"> <div class="col-sm-3 nopadding"> <div class="form-group"> <input type="text" class="form-control required" id="Nama" name="Namakegiatan[]" value="" placeholder="Nama Kegiatan"> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <input type="text" class="form-control required" id="Tingkatpenyelenggara" name="Tingkatkegiatan[]" value="" placeholder="Tingkat Penyelenggara"> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <input type="number" class="form-control required" id="Lamawaktu" name="Lamakegiatan[]" value="" placeholder="Lama/Waktu (Hari)"> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <div class="input-group"> <input type="text" class="form-control required" id="Tempat" name="Tempatkegiatan[]" value="" placeholder="Tempat/Lokasi"> <div class="input-group-append"> <button class="btn btn-danger" type="button" onclick="remove_kegiatan_fields(' + room + ');"> <i class="fa fa-minus"></i> </button> </div> </div> </div> </div> <div class="clear"></div></row>';

    objTo.appendChild(divtest)
}

function remove_kegiatan_fields(rid) {
    $('.removeclass' + rid).remove();
}