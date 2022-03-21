<body class="g-sidenav-show bg-gray-100">
  <main class="main-content position-relative max-height-vh-100 h-100 mt-0 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-success">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb" style="color: white">
          <div class="row">
            <div class="col-1">
              <img style="margin-top:10px" src="./assets/img/logo_web.png" alt="" width="70px" height="auto">
            </div>
            <div class="col-11">
              <h3 style="margin-top:10px">SORDPC-DDC Daily Dashboard </h3>
              <p class="mb-0">
                สำนักงานเลขานุการคณะกรรมการโครงการพระราชดำริ
                โครงการเฉลิมพระเกียรติ
                และโครงการที่เกี่ยวเนื่องกับพระบรมวงศานุวงศ์ กรมควบคุมโรค
              </p>
            </div>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-1">
      <div class="row mt-1 mb-2">
        <div class="col-12">
          
        </div>
      </div>
      <div class="row">
        <div class="col">
          <h6 style="margin-left:30px; margin-top:0px">ข้อมูล ณ วันที่ <?php echo date('d/m/Y')?></h6>
        </div>
        <div class="col">
        <div class="p-0 d-flex justify-content-end">
          <button onclick="HTMLToPDF()" type="button" id="printPageButton" class="btn-generate btn btn-primary mb-0" style="background-color: #009CEC; ">Print PDF</button>
          </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-lg-5 pb-2">
          <div class="card h-100 z-index-2 ">
            <!-- add bg-success for green bg -->
            <div class="card-header pb-0 ">
              <h6>ภาพรวมโครงการราชทัณฑ์ปันสุข (ประเภทกิจกรรม)</h6>
            </div>
            <div class="card-body p-3 pt-0 ">
              <div class="row">
                <div class="col-md-8">
                  <form class="form-inline">
                    <label class="sr-only" for="datepicker1">กรุณาเลือกวันที่ :</label>
                    <input onChange="filterDate(this.value)" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" type="tex" class="form-control form-control-sm mb-2 mr-sm-2" id="datepicker1" placeholder="วัน/เดือน/ปี" >
                  </form>
                </div>
              </div>
              <div class="chartPie">
                <canvas id="graphCanvasPie" class="chart-canvas" height="300" style="border-radius: .8rem;"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 pb-2">
          <div class="card h-100 z-index-2">
            <div class="card-header pb-0">
              <h6>รถเก็บตัวอย่าง (สคร. จำนวนยอดตรวจทั้งหมด)</h6>
            </div>
            <div class="card-body p-3 pt-0">
              <div class="row">
                <div class="col-md-6">
                  <form class="form-inline">
                    <label class="sr-only" for="datepicker2">กรุณาเลือกวันที่ :</label>
                    <input onChange="filterDate2(this.value)" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" type="tex" class="form-control form-control-sm mb-2 mr-sm-2" id="datepicker2" placeholder="วัน/เดือน/ปี">
                  </form>
                </div>
              </div>
              <div class="chartBar1">
                <canvas id="graphCanvasBar1" class="chartBarCanvas1" height="135"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-lg-7 pb-2">
          <div class="card h-100 z-index-2 ">
            <div class="card-header pb-0">
              <h6>ภาพรวมโครงการราชทัณฑ์ปันสุข (จังหวัด)</h6>
            </div>
            <div class="card-body p-3 pt-0">
              <div class="row">
                <div class="col-md-6">
                  <form class="form-inline">
                    <label class="sr-only" for="datepicker3">กรุณาเลือกวันที่ :</label>
                    <input onChange="filterDate3(this.value)" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" type="tex" class="form-control form-control-sm mb-2 mr-sm-2" id="datepicker3" placeholder="วัน/เดือน/ปี">
                  </form>
                </div>
              </div>
              <div class="chartBar2">
                <canvas id="graphCanvasBar2" class="chartBarCanvas2" height="390"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 pb-2">
          <div class="card h-100 z-index-2">
            <div class="card-header pb-0">
              <h6>รถเก็บตัวอย่าง (จังหวัดที่จำนวนยอดตรวจทั้งหมด)</h6>
            </div>
            <div class="card-body p-3 pt-0">
              <div class="row">
                <div class="col-md-8">
                  <form class="form-inline">
                    <label class="sr-only" for="datepicker4">กรุณาเลือกวันที่ :</label>
                    <input onChange="filterDate4(this.value)" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" type="tex" class="form-control form-control-sm mb-2 mr-sm-2" id="datepicker4" placeholder="วัน/เดือน/ปี">
                  </form>
                </div>
              </div>
              <div class="chartBar3">
                <canvas id="graphCanvasBar3" class="chartBarCanvas3" height="560" style="border-radius: .8rem;"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer -->
      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                ©
                <script>
                  document.write(new Date().getFullYear());
                </script>
                ,
                <a href="https://www.creative-tim.com" class="copyright text-center text-sm text-muted text-lg-start">TGS Enterprise Network Co., Ltd.</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- end footer -->
    </div>
  </main>

  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <!-- jsPDF -->
  <script src="./node_modules/jspdf/dist/jspdf.umd.min.js"></script>
  <script type="text/javascript" src="./node_modules/html2canvas/dist/html2canvas.js"></script>
  <script src="assets/js/convertPDF.js"></script>
  <!-- jsPDF Custom Font -->




  <script>

    $(document).ready(function() {
      var pieGraph, barGraph1, barGraph2, barGraph3;
      var date = "";
      createChartPie(date);
      createChartBar1(date);
      createChartBar2(date);
      createChartBar3(date);
    });

    // create chart
    // createChartPie
    async function createChartPie(date) {
      let result;
      try {
        data = await $.ajax({
          url: 'api/GetCorrectionalData.php',
          type: 'POST',
          data: {
            'date': date
          }
        });

        let activities = [];
        let count = [];
        for (let i in data) {
          activities.push(data[i].activities)
          count.push(data[i].count)
        }

        let chartdata = {
          labels: activities,
          datasets: [{
            backgroundColor: [
              "#1F618D",
              "#7D3C98",
              "#D7BDE2 ",
              "#EC7063",
              "#F39C12",
              "#F4D03F ",
              "#6BFF4D",
              "#5DADE2",
            ],
            hoverOffset: 20,
            data: count,
            linewidth: 100,

          }]
        };
        var graphTarget = $('#graphCanvasPie');
        pieGraph = new Chart(graphTarget, {
          type: 'pie',
          data: chartdata,
          options: {
            responsive: true,
            color: "#fff",
            maintainAspectRatio: false,
            plugins: {
              legend: {
                position: "right",
              },
            },
            interaction: {
              intersect: false,
              mode: "index",
            },
          },
          plugins: [pluginPieChart],
        })
      } catch (error) {
        console.error(error);
      }
    }

    // createChartBar1
    async function createChartBar1(date) {
      let result;
      try {
        data = await $.ajax({
          url: 'api/GetBioListData.php',
          type: 'POST',
          data: {
            'date': date
          }
        });
        let inspector = [];
        let name = [];

        for (let i in data) {
          inspector.push(data[i].inspectorNumberSum)
          name.push(data[i].name)
        }

        let chartdata = {
          labels: name,
          datasets: [{
            label: 'inspector',
            backgroundColor: [
              "#2ECC71 ",
              "#58D68D ",
              "#82E0AA ",
              "#ABEBC6 ",

            ],
            borderColor: '#46d5f1',
            hoverBackgroundColor: '#CCCCCC',
            hoverBorderColor: '#666666',
            data: inspector
          }]
        };
        var graphTarget = $('#graphCanvasBar1');
        barGraph1 = new Chart(graphTarget, {
          type: 'bar',
          data: chartdata,
          options: {
            indexAxis: 'y',
            plugins: {
              legend: {
                display: false,
              }
            },
            scales: {
              y: {
                grid: {
                  drawBorder: false,
                  display: false,
                  drawOnChartArea: false,
                  drawTicks: false,
                  borderDash: [5, 5]
                },
                ticks: {
                  display: true,
                  padding: 10,
                  color: '#626567 ',
                  font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                  },
                }
              },
              x: {
                grid: {
                  drawBorder: false,
                  display: true,
                  drawOnChartArea: true,
                  drawTicks: false,
                  borderDash: [5, 5]
                },
                ticks: {
                  display: true,
                  color: '#626567 ',
                  padding: 20,
                  font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                  },
                }
              },
            },
          },
          plugins: [pluginBarChart_2]
        })
      } catch (error) {
        console.error(error);
      }
    }

    // createChartBar2
    async function createChartBar2(date) {
      let result;
      try {
        data = await $.ajax({
          url: 'api/GetCorrectionalByProvinceData.php',
          type: 'POST',
          data: {
            'date': date
          }
        });

        let province = [];
        let count = [];

        for (let i in data) {
          province.push(data[i].province)
          count.push(data[i].count)
        }
        // console.log(name);

        let chartdata = {
          labels: province,
          datasets: [{
            label: 'count',
            backgroundColor: [
              "#138D75 ",
              "#16A085   ",
              "#73C6B6 ",
              "#A3E4D7  ",

            ],
            borderColor: '#46d5f1',
            hoverBackgroundColor: '#CCCCCC',
            hoverBorderColor: '#666666',
            data: count
          }]
        };
        var graphTarget = $('#graphCanvasBar2');


        barGraph2 = new Chart(graphTarget, {
          type: 'bar',
          data: chartdata,
          options: {
            indexAxis: 'y',
            plugins: {
              legend: {
                display: false,
              }
            },
            scales: {
              y: {
                grid: {
                  drawBorder: false,
                  display: false,
                  drawOnChartArea: false,
                  drawTicks: false,
                  borderDash: [5, 5]
                },
                ticks: {
                  display: true,
                  padding: 10,
                  color: '#626567 ',
                  font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                  },
                }
              },
              x: {
                grid: {
                  drawBorder: false,
                  display: true,
                  drawOnChartArea: true,
                  drawTicks: false,
                  borderDash: [5, 5]
                },
                ticks: {
                  display: true,
                  color: '#626567 ',
                  padding: 20,
                  font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                  },
                }
              },
            },
          },
          plugins: [pluginBarChart_2]
        })
      } catch (error) {
        console.error(error);
      }
    }

    // createChartBar3
    async function createChartBar3(date) {
      let result;
      try {
        data = await $.ajax({
          url: 'api/GetBioListByProvinceData.php',
          type: 'POST',
          data: {
            'date': date
          }
        });

        let province3 = [];
        let inspector3 = [];

        for (let i in data) {
          province3.push(data[i].province)
          inspector3.push(data[i].inspectorNumberSum)
        }

        let chartdata = {
          labels: province3,
          datasets: [{
            label: 'inspector',
            backgroundColor: '#fff',
            borderColor: '#46d5f1',
            hoverBackgroundColor: '#CCCCCC',
            hoverBorderColor: '#666666',
            data: inspector3
          }]
        };
        var graphTarget = $('#graphCanvasBar3');
        barGraph3 = new Chart(graphTarget, {
          type: 'bar',
          data: chartdata,
          options: {
            indexAxis: 'y',
            plugins: {
              legend: {
                display: false,
              }
            },
            scales: {
              y: {
                grid: {
                  drawBorder: false,
                  display: false,
                  drawOnChartArea: false,
                  drawTicks: false,
                  borderDash: [5, 5]
                },
                ticks: {
                  display: true,
                  padding: 10,
                  color: '#fff',
                  font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    // lineHeight: 2
                  },
                }
              },
              x: {
                grid: {
                  drawBorder: false,
                  display: true,
                  drawOnChartArea: true,
                  drawTicks: false,
                  borderDash: [5, 5]
                },
                ticks: {
                  display: true,
                  color: '#fff',
                  padding: 20,
                  font: {
                    size: 11,
                    family: "Open Sans",
                    style: 'normal',
                    // lineHeight: 2
                  },
                }
              },
            },
          },
          plugins: [pluginBarChart_3]
        })
      } catch (error) {
        console.error(error);
      }
    }

    // filter date
    function filterDate(date) {
      pieGraph.destroy();
        createChartPie(date)
    
    }

    function filterDate2(date) {
      barGraph1.destroy();
      createChartBar1(date)
    }

    function filterDate3(date) {
      barGraph2.destroy();
      createChartBar2(date)
    }

    function filterDate4(date) {
      barGraph3.destroy();
      createChartBar3(date)
    }

    // plugin chart
    const pluginPieChart = {
      id: 'custom_canvas_background_color',
      beforeDraw: (chart) => {
        const ctx = chart.canvas.getContext('2d');
        ctx.save();
        ctx.globalCompositeOperation = 'destination-over';
        ctx.fillStyle = '#30A857';
        ctx.fillRect(0, 0, chart.width, chart.height);
        ctx.restore();
      }
    };

    const pluginBarChart_1 = {
      id: 'custom_canvas_background_color',
      beforeDraw: (chart) => {
        const ctx = chart.canvas.getContext('2d');
        ctx.save();
        ctx.globalCompositeOperation = 'destination-over';
        ctx.fillStyle = '#fff';
        ctx.fillRect(0, 0, chart.width, chart.height);
        ctx.restore();
      }
    };

    const pluginBarChart_2 = {
      id: 'custom_canvas_background_color',
      beforeDraw: (chart) => {
        const ctx = chart.canvas.getContext('2d');
        ctx.save();
        ctx.globalCompositeOperation = 'destination-over';
        ctx.fillStyle = '#fff';
        ctx.fillRect(0, 0, chart.width, chart.height);
        ctx.restore();
      }
    };

    const pluginBarChart_3 = {
      id: 'custom_canvas_background_color',
      beforeDraw: (chart) => {
        const ctx = chart.canvas.getContext('2d');
        ctx.save();
        ctx.globalCompositeOperation = 'destination-over';
        ctx.fillStyle = '#30A857';
        ctx.fillRect(0, 0, chart.width, chart.height);
        ctx.restore();
      }
    };

    // diable keyboard input date

    $(function() {
     
      $('#datepicker1').keypress(function(event) {
        event.preventDefault();
        return false;
      });
      // console.log("datepicker is disable!");

      $('#datepicker2').keypress(function(event) {
        event.preventDefault();
        return false;
      });

      $('#datepicker3').keypress(function(event) {
        event.preventDefault();
        return false;
      });

      $('#datepicker4').keypress(function(event) {
        event.preventDefault();
        return false;
      });
    });


    
  
  </script>
</body>