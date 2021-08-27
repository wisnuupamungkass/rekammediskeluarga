<script src="<?php echo base_url() ?>assets/grafik/js/jquery-1.9.1.min.js" type="text/javascript"></script>

<script src="<?php echo base_url() ?>assets/grafik/js/highcharts.js" type="text/javascript"></script>

<script src="<?php echo base_url() ?>assets/grafik/js/exporting.js" type="text/javascript"></script>



  <div class="position-relative">

    <div id="rekam"> </div>

  </div>

<script type="text/javascript">

var chart1; // globally available

$(document).ready(function() {

  chart1 = new Highcharts.Chart({

   chart: {

    renderTo: 'rekam',

    type: 'column'

  },   

  title: {

    text: 'Data Pasien Rekam Medis Keluarga Indonesia'

  },

  xAxis: {

    categories: ['Provinsi']

  },

tooltip: {
    formatter: function() {
        return  this.x +' <b> '+ this.series.name + ' <b> : '+this.y ;
    }
},

  yAxis: {

    title: {

     text: 'Jumlah Pasien'

   }

 },

 series:             

 [

 <?php foreach($query->result_array() as $row) { ?>

  {

    name: '<?php echo $row['nama_provinsi'] ?>',

    data: [<?php echo $row['jumlah'] ?>]



  },

  <?php } ?>

  ]

});

}); 

</script>