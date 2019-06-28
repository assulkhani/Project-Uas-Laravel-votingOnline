@extends('templates.default')
@section('main')          
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <h2>DAFTAR CALON</h2>
                    <ul class="nav navbar-right">
                    <ol class="breadcrumb">
                        <li><a href="{{asset('/')}}"><i class="fa fa-home"></i> Beranda</a></li>
                        <li><i class="fa fa-laptop"></i> Project</li>
                        <li class="active"><a href="{{asset('input_data_calon')}}">Daftar Calon</a></li>
                    </ol>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <div class="col-6">
                    <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahModal">
                        <span class="fa fa-plus"></span> Tambah Data
                        </button>
                    </div>
                    <div class="title_right">
                      <div class="pull-right top_search">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="search">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                          </span>
                        </div>
                      </div>
                    </div>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap table-hover" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th class="text-center" width="120px">#</th>
                          <th class="text-center">Foto</th>
                          <th class="text-center">Nama Calon</th>
                          <th class="text-center">Deskripsi</th>
                          <th class="text-center">Pendidikan</th>
                          <th class="text-center">Pengalaman</th>
                          <th class="text-center">Keterangan</th>
<!--                           <th class="text-center" >Tanggal Akhir</th>
                          <th class="text-center" >Status</th>
                          <th class="text-center" width="120px">Aktif</th> -->
                        </tr>
                      </thead>
                     
                      <tbody>
                        <tr>
                          <td class="text-center">
                              <div class="dropdown">
                                <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown">Aksi
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li width="120px"><a data-toggle="modal" data-target="#editModal">Edit</a></li>
                                  <li><a data-toggle="modal" data-target="#deleteModal">Hapus</a></li>
                                </ul>
                              </div> 
                          </td>
                        </tr>
                      </tbody>
                     
                    </table>
                  </div>
                </div>
              </div>
@stop
	

@section('modal')
    <!-- Modal Create -->
    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">INPUT DAFTAR CALON</h4>
                </div>
                <div class="modal-body">
                  <form>
                    
                    <div class="box-header with-border">
                            <i class="fa fa-info-circle"></i> <i><b>(*)</b> harus diisi !</i>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="inputFoto" class="col-sm-3 col-form-label">Foto*</label>
                        <div class="col-sm-8">
                            <input name="foto" type="file" class="form-control" id="inputFoto" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNama" class="col-sm-3 col-form-label">Nama Calon*</label>
                        <div class="col-sm-8">
                            <input name="nama" type="text" class="form-control" id="inputNama" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDeskripsi" class="col-sm-3 col-form-label">Deskripsi*</label>
                        <div class="col-sm-8">
                            <input name="deskripsi" type="text" class="form-control" id="inputDeskripsi" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPendidikan" class="col-sm-3 col-form-label">Pendidikan*</label>
                        <div class="col-sm-8">
                            <input name="pendidikan" type="text" class="form-control" id="inputPendidikan" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPengalaman" class="col-sm-3 col-form-label">Pengalaman*</label>
                        <div class="col-sm-8">
                            <input name="pengalaman" type="text" class="form-control" id="inputPengalaman" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputKeterangan" class="col-sm-3 col-form-label">Keterangan*</label>
                        <div class="col-sm-8">
                            <input name="keterangan" type="text" class="form-control" id="inputKeterangan" required="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>


    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editModalLabel">EDIT CALON</h4>
                </div>
                <div class="modal-body">
                    <div class="box-header with-border">
                            <i class="fa fa-info-circle"></i> <i><b>(*)</b> harus diisi !</i>
                    </div>
                    <br>
                        <div class="form-group row">
                        <label for="editFoto" class="col-sm-3 col-form-label">Foto*</label>
                        <div class="col-sm-8">
                            <input name="foto" type="file" class="form-control" id="editFoto" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editNama" class="col-sm-3 col-form-label">Nama Calon*</label>
                        <div class="col-sm-8">
                            <input name="nama" type="text" class="form-control" id="editNama" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editDeskripsi" class="col-sm-3 col-form-label">Deskripsi*</label>
                        <div class="col-sm-8">
                            <input name="deskripsi" type="text" class="form-control" id="editDeskripsi" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editPendidikan" class="col-sm-3 col-form-label">Pendidikan*</label>
                        <div class="col-sm-8">
                            <input name="pendidikan" type="text" class="form-control" id="editPendidikan" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editPengalaman" class="col-sm-3 col-form-label">Pengalaman*</label>
                        <div class="col-sm-8">
                            <input name="pengalaman" type="text" class="form-control" id="editPengalaman" required="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editKeterangan" class="col-sm-3 col-form-label">Keterangan*</label>
                        <div class="col-sm-8">
                            <input name="keterangan" type="text" class="form-control" id="editKeterangan" required="text">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>


<!--Modal Delete-->
<div class="modal small fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <i class="fa fa-warning modal-icon"></i><h5>Apakah anda yakin ingin menghapus data ini?</h5>
            </div>
            <div class="modal-footer">
              <button type="submit" href="#" class="btn btn-danger"  id="modalDelete">Delete</button>
              <button class="btn btn-default"data-dismiss="modal" aria-hidden="true">Cancel</button> 
               
            </div>
        </div>
    </div>
</div>
@stop
