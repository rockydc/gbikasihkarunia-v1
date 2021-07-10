$(document).ready(function(){

    var count = 1;
    // anggotakeluarga(count);
    
    function anggotakeluarga(count){
        html=`<div class="group-form-keluarga" id="form${count}">`;
        html+=`
      
        <h3 class="mt-3">Anggota Keluarga ${count}</h3>
        
        <div class="form-row">
   
        <div class="form-group mr-3">
        <label  for="namakeluarga[]">Nama Anggota</label>
        <input type="text" name="namakeluarga[]" class="form-control">
        </div>
        <div class="form-group mr-3">
        <label  for="pekerjaan_anggota[]">Pekerjaan</label>
        <input type="text" name="pekerjaan_anggota[]" class="form-control" placeholder="mahasiswa,pegawai swasta,pelajar,etc">
        </div>

       
        <div class="form-group mr-3 ">
        <label class="" for="tempatlahir[]">Tempat Lahir</label>
        <input type="text" name="tempatlahir[]" class="form-control">
        </div>

        <div class="form-group mr-3 ">
        <label class="" for="tgl_lahir_anggota[]">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir_anggota[]" class="form-control">
        </div>

        <div class="form-group mr-3">
        <label class="" for="tgl_baptis_anggota[]">Tanggal Baptis</label>
        <input type="date" name="tgl_baptis_anggota[]" class="form-control">
        </div>
        <div class="form-group mr-3">
        <label class="" for="hubungan[]">Hubungan</label>
        <select class="custom-select" name="hubungan[]">
        <option selected>Pilih hubungan</option>
        <option value="Istri">Istri</option>
        <option value="Anak">Anak</option>
        
      </select>
      </div>


        <div class="form-group mr-3">
        <label class="" for="gender_anggota[]">Jenis Kelamin</label>
        <select class="custom-select" name="gender_anggota[]">
        <option selected>Pilih Jenis Kelamin</option>
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
        
      </select>
        </div>
       <div class="form-group ">
        <label class="" for="statusmenikah[]">Status Menikah</label>
        <select class="custom-select" name="statusmenikah[]">
        <option selected>Pilih status menikah</option>
        <option value="sudah menikah">Sudah Menikah</option>
        <option value="belum menikah">belum menikah</option>
        
      </select>
      </div>

      
        </div>
        
        `
        if(count>1){
            html += `
            <button type="button" name="remove" id="remove" class="btn btn-danger remove">Remove</button></div>`
            $('#anggotakeluarga').append(html);
        }else{
            html += `<button type="button" name="add" id="add" class="btn btn-success">Add</button>`
            $('#anggotakeluarga').html(html);
        }
    }
    
    $(document).on('click','#add',()=>{

        count++;
        anggotakeluarga(count);
    })

    $(document).on('click','#remove',()=>{
        console.log(`hapus form${count}`)
        
        $(`#form${count}`).remove()
        $(this).remove();
        count--;
    
    })
    $(".status")
    .change(()=>{
       let status = $("input[name='status_kawin']:checked").val()
       var content = "";
    
        if(status==="sudah menikah"){
            console.log('sudah coy')
            content=``
            content =`
            <div class="form-group">
            <label for="tgl_diberkati">diberkati di gereja </label>
            <input type="date" name="tgl_diberkati" class="form-control">
            </div>
    
            <div class="form-group">
            <label for="tgl_kawin">Tanggal Perkawinan </label>
            <input type="date" name="tgl_kawin" class="form-control">
            </div>
            
            <div id="anggotakeluarga">
              
            </div>
                               
            `
            $("#tambahanfield").append(content)
            anggotakeluarga(count);



    
        }else{
            console.log('belom coy')
            count=1;
            $("#tambahanfield").empty()
           
        }
    
        
    
    })
    
    
    })