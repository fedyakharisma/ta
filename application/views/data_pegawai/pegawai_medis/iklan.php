<script type="text/javascript">
    $(document).ready(function() {
        tampil_data_barang(); //pemanggilan fungsi tampil barang.

        $('#mydata').dataTable();

        //fungsi tampil barang
        function tampil_data_barang() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>Pegawai/data_pegawai',
                async: false,
                dataType: 'json',
                success: function(data) {
                    var html = '';
                    var i;
                    var no = '1';
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                            '<td>' + data[i].id_data_pegawai + '</td>' +
                            '<td>' + data[i].nip + '</td>' +
                            '<td>' + data[i].nama_lengkap + '</td>' +
                            '<td>' + data[i].tempat_lahir + '</td>' +
                            '<td>' + data[i].tempat_lahir + '</td>' +
                            // '<td><a href="" data-toggle="modal" data-target="#modalDetail' + data[i].id_data_pegawai + '" class=""> <u> Detail </u> </a></td > ' +
                            '<td><a href="javascript:;" data-id="' + data[i].id_data_pegawai + '" data-toggle="modal" data-target="#modalEdit><button  data-toggle="modal" data-target="#ubah-data" class="">Ubah</button></a></td > ' +
                            '</tr>';
                    }
                    $('#screen').html(html);
                }

            });
        }

    });
</script>