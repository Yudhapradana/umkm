var room = 1;

function education_fields() {

    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass" + room);
    var rdiv = 'removeclass' + room;
    divtest.innerHTML = '<div class="row"> <div class="col-sm-3 nopadding"> <div class="form-group"> <select class="form-control" id="Degree" name="Degree[]"> <option value="">Tingkat Pendidikan</option> <option value="SD">SD</option> <option value="SMP">SMP</option> <option value="SMA">SMA</option> <option value="Strata 1">Strata 1</option> <option value="Strata 2">Strata 2</option> <option value="Doktor">Doktor</option> <option value="Professor">Professor</option> </select> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="Nama Instansi"> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <input type="text" class="form-control" id="Major" name="Major[]" value="" placeholder="Jurusan"> </div> </div> <div class="col-sm-3 nopadding"> <div class="form-group"> <div class="input-group"> <input type="number" class="form-control" id="educationDate" name="educationDate[]" value="" placeholder="Tahun Lulus"> <div class="input-group-append"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> <i class="fa fa-minus"></i> </button></div></div></div></div><div class="clear"></div></row>';

    objTo.appendChild(divtest)
}

function remove_education_fields(rid) {
    $('.removeclass' + rid).remove();
}