function HTMLToPDF() {
  const { jsPDF } = window.jspdf;

  var doc = new jsPDF("p", "mm", [1800, 1300]);
  // doc.jsPDF.header.doc
  var pdfjs = document.querySelector("#html-template");

 
  doc.html(pdfjs, {
    callback: function (doc) {
      doc.save("ddc_moph.pdf");
    },
    x: 10,
    y: 10,
  });
}
