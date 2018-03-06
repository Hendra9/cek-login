   <?php
   include '../conn/koneksi.php';
   ?>
   
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Anggota
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="?page=anggota_search" method="post">
        	<table width="100%" height="100%" style="border:1px solid #9cc;">
            </table>
            </form>
    	</div>
   	    <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th align="center" width="5%" >No</th>
   	            <th width="25%">Nama buku</th>
   	            <th width="20%">pengarang</th>
   	            <th width="20%">tanggal kembali</th>
   	            <th width="15%">keterangan(Belum/sudah kembali)</th>
              </tr>
            </thead>
            
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">

            </table>
    	</div>
   	  </div>
    </div>