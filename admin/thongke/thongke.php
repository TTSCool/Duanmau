

<div
id="myChart" style="width:100%; height:700px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  <?php foreach($thongkesp as $sp) :?>
  ['<?=$sp['idsp']?>' ,<?=$sp['soluong']?>],
  <?php endforeach ?>
]);

var options = {
  title:'Thống kê sản phẩm được mua'
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>
